
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ setting('site.title') }} - {{ setting('site.description') }}</title>
    <link href="{{ asset('e-commerce/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{asset('e-commerce/css/price-range.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('e-commerce/css/bootstrap.min.css')}}">
    <link href="{{asset('e-commerce/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('e-commerce/css/responsive.css')}}" rel="stylesheet">

    <link rel="icon" href="{{ asset('/storage/'.setting('site.logo')) }}">

</head><!--/head-->

<body>
    @include('public.inc.header')


    @yield('content')




    @include('public.inc.footer')

</body>
</html>