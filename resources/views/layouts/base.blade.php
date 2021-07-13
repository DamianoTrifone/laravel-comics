<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('header')

        @yield('main')
        
        @include('footer')
    </body>
</html>