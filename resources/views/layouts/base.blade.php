<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('header')

        @yield('main')
        <a href="#">Load more</a>
        @include('footer')
    </body>
</html>