<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Layout</title>
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <script defer src="{{ asset(path: 'js/layout.js') }}"></script>
        <script defer src="{{ asset('js/menu.js') }}"></script>
    </head>
    <body>
        <div class="layoutBody">
            <x-menu></x-menu>
            {{ $slot }}
        </div>
    </body>
</html>