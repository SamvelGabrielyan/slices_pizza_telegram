@extends('layouts.app')

@section('content')
    <div class="section">

        <div class="imgs-wrapper">
            <img src="{{asset('temp/assets/img/veg/11.png')}}" alt="veg" class="d-none d-lg-block">
            <img src="{{asset('temp/assets/img/prods/3.png')}}" alt="veg" class="d-none d-lg-block">
        </div>

        <div class="container">
            <div class="auth-wrapper">

                <div class="auth-description bg-cover bg-center dark-overlay dark-overlay-2"
                     style="background-image: url({{asset('temp/assets/img/auth.jpg')}}">
                    <div class="auth-description-inner">
                        <i class="flaticon-chili"></i>
                        <h2>Hello World!</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="auth-form">

                    <h2>Sign Up</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <input id="name" type="text"
                                   class="form-control form-control-light @error('name') is-invalid @enderror"
                                   placeholder="Name"
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="email" type="email"
                                   class="form-control form-control-light @error('email') is-invalid @enderror"
                                   placeholder="Email Address"
                                   name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password"
                                   class="form-control form-control-light @error('password') is-invalid @enderror"
                                   placeholder="Password"
                                   name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control form-control-light"
                                   placeholder="Confirm Password"
                                   name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <button type="submit" class="btn-custom primary">Sign Up</button>

                        <div class="auth-seperator">
                            <span>OR</span>
                        </div>

                        <p>Already have an account? <a href="/login">Login</a></p>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Register Form End -->
@endsection
