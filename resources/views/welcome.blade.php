@extends('layouts.app')

@section('content')

    <general-pizza-component :pizzas="{{$pizzas}}"></general-pizza-component>

    <!-- About us start -->
    <about-us-component></about-us-component>
    <!-- About us End -->

    <!-- Categories Start -->
    <category-component :pizzas="{{$pizzas}}"></category-component>
    <!-- Categories End -->

    <!-- Products Start -->
    <customers-pizza-component :pizzas="{{$pizzas}}"></customers-pizza-component>
    <!-- Products End -->

    <!-- Order Online Start -->
    <div class="container">
        <div class="section text-center cta bg-cover bg-center dark-overlay dark-overlay-2 bg-parallax"
             style="background-image: url({{asset('temp/assets/img/bg/cta.webp')}})">
            <div class="section-title-wrap section-header text-center">
                <h5 class="custom-primary">Order Online</h5>
                <h2 class="title text-white">Get 10% Off Your First Order</h2>
                <p class="subtitle text-white">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s
                </p>
            </div>
            <a href="/menu" class="btn-custom shadow-none">Check Our Menu</a>
        </div>
    </div>
    <!-- Order Online End -->
@endsection
