
@extends('layouts.layout')
@section('content')
@include('layouts.header')
<main>
    top
    <form method="POST" action="{{route("admin.login.check")}}">
        @csrf
        <input name="email" type="" value="">
        <button type="submit" value="">
            {{$errors}}
    </form>
</main>
@include('layouts.footer')
@endsection
