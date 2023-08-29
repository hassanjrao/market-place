@extends('layouts.front')

@section('page-title', 'Products')

@section('content')


 <!-- Start user Dash Navigation Menu -->
 <x-profile.header />
 <!-- End user Dash Navigation Menu -->
    <section class="product-page section-padding">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-12">

                    <div class="row mt-40">

                        @foreach ($products as $product)
                            <!-- Single -->
                            <div class="col-md-3 mb-30">
                                <div class="product-item">
                                    <!-- thumbnail -->
                                    <div class="thumbnail">
                                        <a href="product-details.html">
                                            <img src="{{ $product->main_image }}" alt="thumbnial">
                                        </a>
                                        {{-- <div class="badge trending">
                                            <span>Trending</span>
                                        </div> --}}
                                    </div>
                                    <!-- content -->
                                    <div class="content">
                                        <h3><a href="product-details.html">{{ $product->title }}</a></h3>
                                        <div class="meta">
                                            <span>by <a href="#">{{ $product->createdBy->name }}</a></span>
                                            <span>in <a href="#">{{ $product->category->title }}</a></span>
                                        </div>
                                        <div class="ratting">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><small>(05)</small></span>
                                        </div>
                                        <div class="bottom">
                                            <div class="price">
                                                <span>{{ config('app.currency') }} {{ $product->price }}</span>
                                            </div>
                                            <div class="right-btn">
                                                <a class="button-4" href="#">Preview</a>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- Pagination -->
                    <div class="row mt-30 mb-50 text-center justify-content-center  ">
                        <div class="col-lg-3">
                            <div class="product-pagination">
                                {{ $products->links() }}
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
