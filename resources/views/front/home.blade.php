@extends("layouts.front")

@section("content")

<!-- Start Hero Area -->
<section class="hero-area" style="background-image:url('{{ asset('front-assets/img/hero-bg.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="hero-caption">
                    <h2>Premium Design & Web Resources</h2>
                    <p>1608+ Fresh item added this week</p>
                    <div class="h-search-form">
                        <form action="#">
                            <input type="search" name="search" placeholder="Type Your Keywords . . .">
                            <button><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- End Feature Trending Products Area -->
    <!-- Start Popular category Area -->
    <section class="p-p-category section-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-headding mb-50">
                        <h2>Popular Category</h2>
                        <p>From multipurpose themes to niche templates</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="p-category-item">
                        <a href="#">
                            <img src="{{  asset('front-assets/img/cat-1.png')}}" alt="cat">
                        </a>
                        <h3><a href="#">WordPress Themes</a></h3>
                        <a class="link" href="#">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="p-category-item">
                        <a href="#">
                            <img src="{{  asset('front-assets/img/cat-2.png')}}" alt="cat">
                        </a>
                        <h3><a href="#">Site Template</a></h3>
                        <a class="link" href="#">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="p-category-item">
                        <a href="#">
                            <img src="{{  asset('front-assets/img/cat-3.png')}}" alt="cat">
                        </a>
                        <h3><a href="#">WordPress Plugins</a></h3>
                        <a class="link" href="#">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="p-category-item">
                        <a href="#">
                            <img src="{{  asset('front-assets/img/cat-1.png')}}" alt="cat">
                        </a>
                        <h3><a href="#">UI Templates</a></h3>
                        <a class="link" href="#">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Popular category Area -->
    <!-- Start Latest Product Area -->
    <section class="latest-product-area section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-headding mb-50">
                        <h2>Check Our Newest <br> Themes</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Category -->
                <div class="l-product-category-list mb-40 text-center">
                    <ul>
                        <li data-filter="all">All Category</li>
                        <li data-filter=".wordpress">WordPress Theme</li>
                        <li data-filter=".html">HTML Theme</li>
                        <li data-filter=".uitemplate">UI Templates</li>
                        <li data-filter=".plugins">Plugins</li>
                        <li data-filter=".ecommerce">eCommerce</li>
                    </ul>
                </div>
                <div class="row l-product-recent-theme portF">
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30 mix wordpress plugins">
                        <div class="product-item">
                            <!-- thumbnail -->
                            <div class="thumbnail">
                                <a href="product-details.html">
                                    <img src="{{  asset('front-assets/img/product/9.jpg')}}" alt="thumbnial">
                                </a>
                                <div class="badge new">
                                    <span>New</span>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="content">
                                <h3><a href="product-details.html">JobVivo - Job Board HTML Template...</a></h3>
                                <div class="meta">
                                    <span>by <a href="#">PreeTheme</a></span>
                                    <span>in <a href="#">Business</a></span>
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
                                        <span>$39</span>
                                    </div>
                                    <div class="right-btn">
                                        <a class="button-4" href="#">Preview</a>
                                        <a class="button-3" href="#"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="button-5" href="#"><i class="fas fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30 mix plugins">
                        <div class="product-item uitemplate html">
                            <!-- thumbnail -->
                            <div class="thumbnail">
                                <a href="product-details.html">
                                    <img src="{{  asset('front-assets/img/product/8.jpg')}}" alt="thumbnial">
                                </a>
                                <div class="badge new">
                                    <span>New</span>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="content">
                                <h3><a href="product-details.html">JobVivo - Job Board HTML Template...</a></h3>
                                <div class="meta">
                                    <span>by <a href="#">PreeTheme</a></span>
                                    <span>in <a href="#">Business</a></span>
                                </div>
                                <div class="ratting">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><small>(0)</small></span>
                                </div>
                                <div class="bottom">
                                    <div class="price">
                                        <span>$59</span>
                                    </div>
                                    <div class="right-btn">
                                        <a class="button-4" href="#">Preview</a>
                                        <a class="button-3" href="#"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="button-5" href="#"><i class="fas fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30 mix wordpress html">
                        <div class="product-item">
                            <!-- thumbnail -->
                            <div class="thumbnail">
                                <a href="product-details.html">
                                    <img src="{{  asset('front-assets/img/product/7.jpg')}}" alt="thumbnial">
                                </a>
                                <div class="badge new">
                                    <span>New</span>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="content">
                                <h3><a href="product-details.html">JobVivo - Job Board HTML Template...</a></h3>
                                <div class="meta">
                                    <span>by <a href="#">PreeTheme</a></span>
                                    <span>in <a href="#">Business</a></span>
                                </div>
                                <div class="ratting">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><small>(01)</small></span>
                                </div>
                                <div class="bottom">
                                    <div class="price">
                                        <span>$39</span>
                                    </div>
                                    <div class="right-btn">
                                        <a class="button-4" href="#">Preview</a>
                                        <a class="button-3" href="#"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="button-5" href="#"><i class="fas fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30 mix uitemplate">
                        <div class="product-item">
                            <!-- thumbnail -->
                            <div class="thumbnail">
                                <a href="product-details.html">
                                    <img src="{{  asset('front-assets/img/product/6.jpg')}}" alt="thumbnial">
                                </a>
                                <div class="badge new">
                                    <span>New</span>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="content">
                                <h3><a href="product-details.html">JobVivo - Job Board HTML Template...</a></h3>
                                <div class="meta">
                                    <span>by <a href="#">PreeTheme</a></span>
                                    <span>in <a href="#">Business</a></span>
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
                                        <span>$39</span>
                                    </div>
                                    <div class="right-btn">
                                        <a class="button-4" href="#">Preview</a>
                                        <a class="button-3" href="#"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="button-5" href="#"><i class="fas fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30 mix wordpress">
                        <div class="product-item">
                            <!-- thumbnail -->
                            <div class="thumbnail">
                                <a href="product-details.html">
                                    <img src="{{  asset('front-assets/img/product/5.jpg')}}" alt="thumbnial">
                                </a>
                                <div class="badge new">
                                    <span>New</span>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="content">
                                <h3><a href="product-details.html">JobVivo - Job Board HTML Template...</a></h3>
                                <div class="meta">
                                    <span>by <a href="#">PreeTheme</a></span>
                                    <span>in <a href="#">Business</a></span>
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
                                        <span>$39</span>
                                    </div>
                                    <div class="right-btn">
                                        <a class="button-4" href="#">Preview</a>
                                        <a class="button-3" href="#"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="button-5" href="#"><i class="fas fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30 mix plugins">
                        <div class="product-item">
                            <!-- thumbnail -->
                            <div class="thumbnail">
                                <a href="product-details.html">
                                    <img src="{{  asset('front-assets/img/product/4.jpg')}}" alt="thumbnial">
                                </a>
                                <div class="badge new">
                                    <span>New</span>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="content">
                                <h3><a href="product-details.html">JobVivo - Job Board HTML Template...</a></h3>
                                <div class="meta">
                                    <span>by <a href="#">PreeTheme</a></span>
                                    <span>in <a href="#">Business</a></span>
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
                                        <span>$39</span>
                                    </div>
                                    <div class="right-btn">
                                        <a class="button-4" href="#">Preview</a>
                                        <a class="button-3" href="#"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="button-5" href="#"><i class="fas fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30 mix wordpress plugins">
                        <div class="product-item">
                            <!-- thumbnail -->
                            <div class="thumbnail">
                                <a href="product-details.html">
                                    <img src="{{  asset('front-assets/img/product/3.jpg')}}" alt="thumbnial">
                                </a>
                                <div class="badge new">
                                    <span>New</span>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="content">
                                <h3><a href="product-details.html">JobVivo - Job Board HTML Template...</a></h3>
                                <div class="meta">
                                    <span>by <a href="#">PreeTheme</a></span>
                                    <span>in <a href="#">Business</a></span>
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
                                        <span>$39</span>
                                    </div>
                                    <div class="right-btn">
                                        <a class="button-4" href="#">Preview</a>
                                        <a class="button-3" href="#"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="button-5" href="#"><i class="fas fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30 mix ecommerce">
                        <div class="product-item">
                            <!-- thumbnail -->
                            <div class="thumbnail">
                                <a href="product-details.html">
                                    <img src="{{  asset('front-assets/img/product/2.jpg')}}" alt="thumbnial">
                                </a>
                                <div class="badge new">
                                    <span>New</span>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="content">
                                <h3><a href="product-details.html">JobVivo - Job Board HTML Template...</a></h3>
                                <div class="meta">
                                    <span>by <a href="#">PreeTheme</a></span>
                                    <span>in <a href="#">Business</a></span>
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
                                        <span>$39</span>
                                    </div>
                                    <div class="right-btn">
                                        <a class="button-4" href="#">Preview</a>
                                        <a class="button-3" href="#"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="button-5" href="#"><i class="fas fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-4 col-md-6 mb-30 mix wordpress html">
                        <div class="product-item">
                            <!-- thumbnail -->
                            <div class="thumbnail">
                                <a href="product-details.html">
                                    <img src="{{  asset('front-assets/img/product/1.jpg')}}" alt="thumbnial">
                                </a>
                                <div class="badge new">
                                    <span>New</span>
                                </div>
                            </div>
                            <!-- content -->
                            <div class="content">
                                <h3><a href="product-details.html">JobVivo - Job Board HTML Template...</a></h3>
                                <div class="meta">
                                    <span>by <a href="#">PreeTheme</a></span>
                                    <span>in <a href="#">Business</a></span>
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
                                        <span>$39</span>
                                    </div>
                                    <div class="right-btn">
                                        <a class="button-4" href="#">Preview</a>
                                        <a class="button-3" href="#"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="button-5" href="#"><i class="fas fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-30 text-center">
                    <a class="button-1" href="product.html">View All Product</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest Product Area -->


    @endsection
