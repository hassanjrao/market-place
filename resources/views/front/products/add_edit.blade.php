@extends('layouts.front')

@php
    $addEdit = isset($product) ? 'Edit' : 'Add';
    $addUpdate = isset($product) ? 'Update' : 'Add';
@endphp
@section('page-title', 'Add Product')

@section('content')


    <section class="login-regester-p section-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="log-in-register-form">
                        <div class="login-form-dmark">

                            <div class="login-register-form-middle">
                                <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="single-input">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" id="image" value="{{ old('image') }}"
                                            required autocomplete="image" autofocus
                                            class="@error('image') is-invalid @enderror">
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="single-input">
                                        <?php
                                        $value = old('category', $product ? $product->category_id : null);

                                        ?>
                                        <label for="category">Category</label>
                                        <select name="category" id="category"
                                            class="@error('category') is-invalid @enderror" required>
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    @if ($value == $category->id) selected @endif>{{ $category->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="single-input">
                                        <?php
                                        $value = old('title', $product ? $product->title : null);

                                        ?>
                                        <label for="title">Title</label>
                                        <input type="text" name="title" id="title"
                                            class="@error('title') is-invalid @enderror" value="{{ $value }}"
                                            name="title" required>
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="single-input">
                                        <?php
                                        $value = old('price', $product ? $product->price : null);

                                        ?>
                                        <label for="price">Price</label>
                                        <input type="number" step=".01" name="price" id="price"
                                            class="@error('price') is-invalid @enderror" value="{{ $value }}"
                                            name="price" required>
                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>



                                    <div class="single-input">
                                        <button type="submit" class="button-1">{{ $addUpdate }}</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js-after')

@endsection
