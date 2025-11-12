<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EduFun - @yield('title', 'Home')</title>
    @include('layouts.bootstrap')
</head>
<body style="background-color: rgb(223, 226, 201); padding-bottom: 80px">
@include('layouts.header')

@yield('content')

@include('layouts.footer')

</body>
</html>

