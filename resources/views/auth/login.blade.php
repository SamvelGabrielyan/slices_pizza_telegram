@extends('layouts.app')

@section('content')
    <!-- Login Form Start -->
    <div class="section">

        <div class="imgs-wrapper">
            <img src="{{asset('temp/assets/img/veg/11.webp')}}" alt="veg" class="d-none d-lg-block">
            <img src="{{asset('temp/assets/img/prods/3.png')}}" alt="veg" class="d-none d-lg-block">
        </div>

        <div class="container">
            <div class="auth-wrapper">

                <div class="auth-description bg-cover bg-center dark-overlay dark-overlay-2"
                     style="background-image: url({{asset('temp/assets/img/auth.jpg')}}">
                    <div class="auth-description-inner">
                        <i class="flaticon-chili"></i>
                        <h2>Welcome Back!</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="auth-form">

                    <h2>Log in</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <input id="email" type="email" class="form-control form-control-light @error('email') is-invalid @enderror" placeholder="Email"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control form-control-light @error('password') is-invalid @enderror" placeholder="Password"
                                   name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn-custom primary">Login</button>

                        <div class="auth-seperator">
                            <span>OR</span>
                        </div>

                        <p>Don't have an account? <a href="/register">Create One</a></p>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Login Form End -->
@endsection
