@extends('layouts.front')


@section('content')

    <!-- End Breadcrumb Area -->
    <!-- Start Register Area -->
    <section class="login-regester-p section-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="log-in-register-form">
                        <div class="login-form-dmark">
                            <div class="login-register-form-head">
                                <h2>Login</h2>
                                <ul>
                                    <li class="google"><a href="#"><i class="fab fa-google"></i>
                                            <span>Google</span></a></li>
                                    <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="login-register-form-middle">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="single-input">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                                            required autocomplete="email" autofocus
                                            class="@error('email') is-invalid @enderror">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="single-input">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password"
                                            class="@error('password') is-invalid @enderror" name="password" required
                                            autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="single-input checkbox">

                                        <input type="checkbox" name="remember" id="rememberme"
                                            {{ old('remember') ? 'checked' : '' }}>
                                            <label class="rememberme" for="rememberme">Remember me </label>

                                    </div>

                                    <div class="single-input">
                                        <button type="submit" class="button-1">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="login-register-from-btom text-center">
                                @if (Route::has('password.request'))
                                    <p class="mb-2"><a href="{{ route('password.request') }}">Forget Password</a></p>
                                @endif
                                <p class="text-dark mb-0">Don't have account?<a href="{{ route('register') }}"
                                        class="text-primary ml-1">Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
