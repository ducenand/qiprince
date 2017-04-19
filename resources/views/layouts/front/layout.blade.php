<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
    @yield('css')
</head>
<body>
{{--头部区域--}}
@include('layouts.front.head')
{{--内容区域--}}
@yield('content')
{{--底部--}}
@include('layouts.front.footer')

{{--js--}}
@yield('js')
</body>
</html>