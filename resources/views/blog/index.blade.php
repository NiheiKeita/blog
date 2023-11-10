
@extends('blog.layouts.layout')
@section('content')
@include('blog.layouts.header')
<main>
    <a href="{{route('blog.laravel.index')}}">laravel</a>
    <a href="{{route('blog.xampp.index')}}">XAMPP</a>
</main>
@include('blog.layouts.footer')
@endsection
