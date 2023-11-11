
@extends('layouts.layout')
@section('content')
@include('layouts.header')
<main>
    @include('blog.contents.'.$num)
</main>
@include('layouts.footer')
@endsection
