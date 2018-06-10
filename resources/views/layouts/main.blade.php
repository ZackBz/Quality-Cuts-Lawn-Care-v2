<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="application-name" content="{{ env('APP_NAME') }}">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Quality Cuts Lawn Care is an independently owned lawn care business base in Waverly, NY. We provide a range of services to both commercial and residential clients. Our services include lawn care, mulch and stone delivery, snow removal, and spring & fall clean up.">
    <meta name="keywords" content="lawn, quality, mulch, snow, spring, fall, cuts, residential, commercial">
    <meta name="robots" content="index, follow">
    <meta name="web_author" content="">
    <meta name="language" content="English">

    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png?v=OmyqwPjmykd">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png?v=OmyqwPjmykd">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png?v=OmyqwPjmykd">
    <link rel="manifest" href="/favicons/site.webmanifest?v=OmyqwPjmykd">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg?v=OmyqwPjmykd" color="#67a243">
    <link rel="shortcut icon" href="/favicons/favicon.ico?v=OmyqwPjmykd">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml?v=OmyqwPjmykd">
    <meta name="theme-color" content="#ffffff">

    <!-- Apple specific -->
    <meta name="apple-mobile-web-app-title" content="{{ env('APP_NAME') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="white"> @yield('pages')
    <title>Quality Cuts Lawn Care</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/fontawesome-all.min.css">
    <link rel="stylesheet" href="/fontawesome.min.css">

    <meta name="description" content="Quality Cuts Lawn Care fulfills your property maintance needs. We handle lawn mowing, mulch & stone delivery, spring & fall clean up, and snow removal.">
</head>

<body>

    <div id="app">
        @include('navbar') @if(Session::has('Success'))
        <notification class="is-info">{{ Session::get('Success') }}</notification>
        @endif @foreach($errors->all() as $error)
        <notification class="is-danger">{{ $error }}</notification>
        @endforeach @yield('content')
    </div>
    @include('footer') @yield('scripts')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106909262-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-106909262-2');
    </script>

</body>

</html>
