<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="{{ !empty($blog) ? optional($blog)->meta_description : "" }}" />
    <meta name="keywords" content="{{ !empty($blog) ? str_replace(array('"', '[', "]"),'',optional($blog->tags)->pluck("name")) : "" }}" />
    <title>{{ !empty($blog) ? optional($blog)->title : "" }}</title>
</head>
@include('layouts.nav')
<body>
    @yield('content')
</body>
@include('layouts.footer')
</html>
