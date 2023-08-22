@extends('layouts.front')

@section('page-title', 'Products')

@section('content')


    <section class="product-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4  order-lg-first order-last">
                    <!-- single -->
                    <div class="p-widgets-single mb-40">
                        <h2 class="title">Category</h2>
                        <div class="sidebar-check-form">
                            <form action="#">

                                @foreach ($categories as $category)
                                    <div class="sidebar__check-p">
                                        <div class="sidebar__check">
                                            <input class="form-check-input" type="checkbox" id="m-wp">
                                            <label for="m-wp">{{ $category->title }}</label>
                                        </div>
                                        <span>{{ $category->products->count() }}</span>
                                    </div>
                                @endforeach

                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-sorting-list">
                                <span><b>Sort By :</b></span>
                                <span><a href="javascript:void();">Best Metch</a></span>
                                <span class="active"><a href="javascript:void();">Best Sellers</a></span>
                                <span><a href="javascript:void();">Newest</a></span>
                                <span><a href="javascript:void();">Top Reted</a></span>
                                <span><a href="javascript:void();">Trending</a></span>
                                <span><a href="javascript:void();">Price</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-40">

                        @foreach ($products as $product)
                            <!-- Single -->
                            <div class="col-md-6 mb-30">
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

                                                @if (session()->has('cart') && isset(session('cart')['products']) && in_array($product->id, session('cart')['products']))

                                                    <a onclick="removeFromCart({{ $product->id }},this)" class="button-3 "><i class="fas fa-trash"></i></a>


                                            @else


                                                <a class="button-3"  onclick="addToCart({{ $product->id }},this)"><i class="fas fa-shopping-cart"></i></a>

                                            @endif


                                                <a class="button-5" href="#"><i class="fas fa-heart"></i></a>
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

    <script>
        function addToCart(product_id, e) {


            // disable the button
            e.classList.remove('btn-success');
            e.classList.add('btn-danger');
            e.innerHTML = "Added to cart <i class='fa fa-trash'></i>";
            // add method to remove from cart
            e.setAttribute('onclick', 'removeFromCart(' + product_id + ',this)');


            let cartHeaderValue = $("#cartHiddenField").val();
            //    convert to integer
            cartHeaderValue = parseInt(cartHeaderValue);
            //    increment the value
            cartHeaderValue = cartHeaderValue + 1;

            //    update the hidden field
            $("#cartHiddenField").val(cartHeaderValue);



            $("#cartHeaderIconValue").html( cartHeaderValue);


            $.ajax({
                url: "{{ route('carts.store') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "product_id": product_id
                },
                success: function(response) {
                    console.log(response);

                    confirmDialog(response.message, 'Checkout', 'Add More')
                        .then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "{{ route('carts.index') }}";
                            }
                        })
                },
                error: function(response) {
                    console.log(response);

                    showStatus(response.message, 'error', false);
                }
            });

        }

        function removeFromCart(product_id, e) {

            // disable the button
            e.classList.remove('btn-danger');
            e.classList.add('btn-success');
            e.innerHTML = "Add to cart <i class='fa fa-cart-plus'></i>";
            // add method to remove from cart
            e.setAttribute('onclick', 'addToCart(' + product_id + ',this)');

            let cartHeaderValue = $("#cartHiddenField").val();
            //    convert to integer
            cartHeaderValue = parseInt(cartHeaderValue);
            //    decrement the value
            cartHeaderValue = cartHeaderValue - 1;

            //    update the hidden field
            $("#cartHiddenField").val(cartHeaderValue);

            $("#cartHeaderIconValue").html( cartHeaderValue);

            $.ajax({
                url: "{{ route('carts.remove') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "product_id": product_id
                },
                success: function(response) {
                    console.log(response);

                    showStatus(response.message, 'success', false);
                },
                error: function(response) {
                    console.log(response);

                    showStatus(response.message, 'error', false);
                }
            });

        }
    </script>

@endsection
