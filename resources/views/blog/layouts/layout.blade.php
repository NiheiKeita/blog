<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="format-detection" content="telephone=no">
    <title>{{ $title ?? "" }}</title>
</head>
@include('blog.layouts.nav')
<body>
    @yield('content')
</body>
@include('blog.layouts.footer')
</html>
