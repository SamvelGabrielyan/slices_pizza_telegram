@extends('layouts.app')

@section('content')
    <!-- Menu Wrapper Start -->
    <pizza-menu-component :pizzas="{{$pizzas}}"></pizza-menu-component>
    <!-- Menu Wrapper End -->
@endsection
