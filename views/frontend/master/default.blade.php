@if(Request::ajax())
     <div id="ajax-meat">
         @yield('content')
     </div>
@else
    <!doctype html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="href="{{ asset('project/assets/images/apple-touch-icon.png') }}"" />
        <link rel="shortcut icon" href="{{ asset('project/assets/images/favicon.ico') }}" />

        @section('seo_meta')
            <title>{{ $meta_title }}</title>
            <meta name="description" content="{{ $meta_description }}">
        @show

        @section('og_meta')
            <meta property="og:title" content="{{ $meta_title }}"/>
            <meta property="og:description" content="{{ $meta_description }}"/>
            <meta property="og:url" content="{{ FrontendHelper::getCurrentUrlWithQuery() }}"/>
        @show

        @section('top_styles')
            <link rel="stylesheet" type="text/css" href="{{ asset('project/assets/css/main.css') }}">
        @show

        @section('top_scripts')
            @include('frontend.master.global_vars')
        @show
    </head>
    <body class="{{ $isHomepage?'homepage':'' }}">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    @if(env('APP_ENV') == 'production')
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
    @endif

    @section('content')
    @show

    @section('bottom_scripts')
        <script type="text/javascript" src="{{ asset('project/assets/js/app.js') }}"></script>

        @yield('bottom_page_scripts')
    @show
    </body>
    </html>
@endif