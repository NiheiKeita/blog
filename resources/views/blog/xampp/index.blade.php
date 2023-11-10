

@extends('blog.layouts.layout')
@section('content')
@include('blog.layouts.header')
<main>
    <a href="{{route('blog.xampp.001')}}">xamppを使用してlocal環境でドメインを分ける</a>
</main>
@include('blog.layouts.footer')
@endsection
