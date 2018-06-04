<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('pages')
        <title>Quality Cuts Lawn Care</title>
        <link rel="stylesheet" href="/css/app.css">
        <link  rel="stylesheet" href="/fontawesome-all.min.css">
        <link  rel="stylesheet" href="/fontawesome.min.css">

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
    </body>
</html>
