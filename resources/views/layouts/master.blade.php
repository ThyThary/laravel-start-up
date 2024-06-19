<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initail-scale=1.0">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @yield('content')
         {{-- @stack("script") --}}
        {{-- @push("script")@endpush --}}
    </body>
    <footer>
    </footer>
</html>