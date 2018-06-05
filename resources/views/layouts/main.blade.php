<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('pages')
        <title>Quality Cuts Lawn Care</title>
        <link rel="stylesheet" href="/css/app.css">
        <link  rel="stylesheet" href="/fontawesome-all.min.css">
        <link  rel="stylesheet" href="/fontawesome.min.css">

        <meta name="description" content="Quality Cuts Lawn Care fulfills your property maintance needs. We handle lawn mowing, mulch & stone delivery, spring & fall clean up, and snow removal.">
    </head>
    <body>

        <div id="app">
            @include('navbar')
            @if(Session::has('Success'))
                <notification class="is-info">{{ Session::get('Success') }}</notification>
            @endif
            @foreach($errors->all() as $error)
                <notification class="is-danger">{{ $error }}</notification>
            @endforeach
            @yield('content')
        </div>
        @include('footer')
        @yield('scripts')
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106909262-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-106909262-2');
        </script>

    </body>
</html>
