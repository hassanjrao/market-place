@extends('layouts.front')


@section('content')

    <!-- Start Register Area -->
    <section class="login-regester-p section-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="log-in-register-form">
                        <div class="login-form-dmark">
                            <div class="login-register-form-head">
                                <h2>Register</h2>
                                <ul>
                                    <li class="google"><a href="#"><i class="fab fa-google"></i>
                                            <span>Google</span></a></li>
                                    <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="login-register-form-middle">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="single-input">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" required
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus
                                            id="name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="single-input">
                                        <label for="email">Email</label>
                                        <input type="email" required name="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="single-input">
                                        <label for="password">Password</label>
                                        <input required type="password" name="password" id="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="single-input">
		        						<label for="password-confirm">Confirm Password</label>
		        						<input type="password"  name="password_confirmation" required autocomplete="new-password" id="password-confirm">
		        					</div>

                                    <div class="single-input">
                                        <button type="submit" class="button-1">Register</button>
                                    </div>
                                </form>

                            </div>
                            <div class="login-register-from-btom text-center">
		        				<p class="text-dark mb-0">Already have an account?<a href="{{ route("login") }}"   class="text-primary ml-1">Login</a></p>
		        			</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
