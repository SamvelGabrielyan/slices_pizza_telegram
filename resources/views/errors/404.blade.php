@extends('layouts.app')

@section('content')
    <div class="page-404-wrapper">
        <div class="page-404-text">
            <h1>Page Not Found</h1>
            <p>Sorry, the page you're looking for does not exist</p>
            <a href="/" class="btn-custom">Go Back Home</a>
        </div>

        <div class="banner-bottom-img">
            <img src="{{asset('temp/assets/img/veg/2.png')}}" alt="veg">
            <img src="{{asset('temp/assets/img/prods/3.png')}}" alt="pizza">
            <img src="{{asset('temp/assets/img/veg/12.png')}}" alt="veg">
        </div>
    </div>
@endsection
