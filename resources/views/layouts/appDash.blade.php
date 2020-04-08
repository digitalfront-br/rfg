<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="uk-background-muted">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/uikit.js') }}" defer></script>
    <script src="{{ asset('js/uikit-icons.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <aside class="uk-background-default uk-box-shadow-small df-sidebar">
        <p>asdas</p>
    </aside>
    <main class="df-main">
        <div class="uk-padding">
            @yield('content')
        </div>
    </main>
</body>
</html>
