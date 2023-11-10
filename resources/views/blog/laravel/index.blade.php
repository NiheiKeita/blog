
@extends('blog.layouts.layout')
@section('content')
@include('blog.layouts.header')
<main>
    <a href="{{route('blog.laravel.002')}}">laravelにtailwindCSSをいれる。</a>
</main>
@include('blog.layouts.footer')
@endsection
