@extends('layouts.backend')
@section('page-title', 'Products')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Products
                </h3>



                {{-- <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add</a> --}}

            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Created By</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                {{-- <th>Action</th> --}}

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($products as $ind => $product)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>

                                    <td>
                                        <img src="{{ $product->main_image_url }}" alt="product" width="100px">
                                    </td>

                                    <td>{{ $product->title }}</td>


                                    <td>
                                        {{ $product->category->title }}
                                    </td>
                                    <td>
                                        {{ config('app.currency') }} {{ $product->price }}
                                    </td>

                                    <td>
                                        {{ $product->createdBy->name }}
                                    </td>


                                    <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td>

                                    {{-- <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @if($product->is_blocked)
                                            <a href="{{ route('admin.products.unblock', $product->id) }}"
                                                class="btn btn-sm btn-alt-success">Unblock</a>
                                            @else
                                            <a href="{{ route('admin.products.block', $product->id) }}"
                                                class="btn btn-sm btn-alt-warning">Block</a>
                                            @endif
                                            <a href="{{ route('admin.products.edit', $product->id) }}"
                                                class="btn btn-sm btn-alt-primary">Edit</a>
                                            <form id="form-{{ $product->id }}"
                                                action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="button" onclick="confirmDelete({{ $product->id }})"
                                                    class="btn btn-sm btn-alt-danger" value="Delete">

                                            </form>
                                        </div>
                                    </td> --}}

                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>







    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
