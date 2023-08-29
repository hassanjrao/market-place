@extends('layouts.front')

@section('page-title', 'Profile')

@section('content')

    <!-- Start user Dash Navigation Menu -->
    <x-profile.header />
    <!-- End user Dash Navigation Menu -->
    <!-- Start Dashboard Area -->
    <section class="dashboard-area section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4  order-lg-first order-last">
                    <div class="user-dash__p-info">
                        <!-- Profile -->
                        <div class="a__profile text-center w-b-b-shadow">
                            {{-- <div class="thumbnail">
                                <img src="assets/img/avatar1.jpg" alt="profile">
                                <i class="bi bi-patch-check-fill"></i>
                            </div> --}}
                            <div class="name">
                                <h4>{{ auth()->user()->name }} </h4>
                                <p>{{ auth()->user()->email }}</p>
                                <p> Member Since
                                    {{ auth()->user()->created_at->format('d M Y') }}
                                     </p>
                                {{-- <div class="r-vi-a">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <small>(209 Reviews)</small>
                                </div> --}}
                            </div>
                        </div>
                        <!-- Contact usthor -->
                        {{-- <div class="c__a__author mt-40 mb-40 w-b-b-shadow">
                            <div class="title">
                                <h2>Contact Authors</h2>
                                <p> Drop a message to author </p>
                            </div>
                            <form action="#">
                                <div class="form-group">
                                    <label>From</label>
                                    <input type="text" class="form-control" value="example@gmail.com" disabled="">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control" placeholder="Type Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button-2">Send Message</button>
                                </div>
                            </form>
                        </div> --}}
                        <!-- Social -->
                        {{-- <div class="c_autoh_social w-b-b-shadow">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="col-lg-8 mb-40">
                    <div class="user-dash__p_content_full w-b-b-shadow">
                        <div class="thumbnail mb-30">
                            <img src="assets/img/user-d.jpg" alt="img">
                        </div>
                        <h2>Welcome to CodexUnicTheme!</h2>
                        <p>CodexUnicTheme offers a wide variety of templates that meet all the modern requirements. Here you
                            can find first-class Website themes & Templates suited to every fancy such as:</p>
                        <ul>
                            <li>HTML Template</li>
                            <li>Wordpress Theme</li>
                            <li>Woocommerce Theme</li>
                            <li>IT Solution Template</li>
                        </ul>
                        <p>Do not hesitate to choose our designs, add reviews, and provide your feedback. We are always glad
                            to hear your voice and will do our best to meet your expectations!</p>
                        <p>We ready 24x7 hours and always to help you about our products in 1 business day via support
                            ticket.</p>
                        <p>With a professional Web Design and Development team, we are here to serve the business around the
                            world</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- End Dashboard Area -->

@endsection
