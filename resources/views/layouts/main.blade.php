<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#c58f59"/>
<title>@yield('title')</title>
<meta name="author" content="Themezinho">
<meta name="description" content="For all kind of marketting agency website">
<meta name="keywords" content="ikings, agency, marketting, google, seo, search, engine, optimization, banner, ads, design, website, creative, advertisement, social, media, market">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="Obour | New Age Digital Marketing Agency">
<meta property="og:image" content="preview.php">
<meta property="og:site_name" content="obour">
<meta property="og:title" content="obour">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.themezinho.net/obour">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@obour">
<meta name="twitter:creator" content="@obour">
<meta name="twitter:title" content="obour">
<meta name="twitter:description" content="Obour | New Age Digital Marketing Agency">
<meta name="twitter:image" content="preview.php">
<!-- style -->
<style type="text/css">
  html, body{
    overflow-x: hidden;
  }
</style>
<!-- style end -->
<!-- FAVICON FILES -->
<link href="{{ URL::asset('ico/apple-touch-icon-144-precomposed.png') }}" rel="apple-touch-icon" sizes="144x144">
<link href="{{ URL::asset('ico/apple-touch-icon-114-precomposed.png') }}" rel="apple-touch-icon" sizes="114x114">
<link href="{{ URL::asset('ico/apple-touch-icon-72-precomposed.png') }}" rel="apple-touch-icon" sizes="72x72">
<link href="{{ URL::asset('ico/apple-touch-icon-57-precomposed.png') }}" rel="apple-touch-icon">
<link href="{{ URL::asset('ico/favicon.png" rel="shortcut icon') }}">

<!-- CSS FILES -->
<link rel="stylesheet" href="{{ URL::asset('css/lineicons.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/fancybox.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/odometer.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
@include('app.header')
@yield('content')
@include('app.footer')
<script src="{{ URL::asset('js/jquery.min.js') }}"></script> 
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script> 
<script src="{{ URL::asset('js/fancybox.min.js') }}"></script> 
<script src="{{ URL::asset('js/odometer.min.js') }}"></script> 
<script src="{{ URL::asset('js/swiper.min.js') }}"></script> 
<script src="{{ URL::asset('js/jquery.stellar.js') }}"></script>  
<script src="{{ URL::asset('js/isotope.min.js') }}"></script> 
<script src="{{ URL::asset('js/imagesloaded.pkgd.min.js') }}"></script> 
<script src="{{ URL::asset('js/scripts.js') }}"></script>
</body>
</html>