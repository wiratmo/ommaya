<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,jQuery,CSS,HTML,RWD,Dashboard">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Ommaya</title>

    <link href="/css/all.css" rel="stylesheet">
    @stack('style')
    
</head>

@include('layouts.navbar')
@include('layouts.lsidebar')
@yield('content')
@include('layouts.rsidebar')
@include('layouts.footer')
@stack('scripts')