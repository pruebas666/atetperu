

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <meta name="theme-color" content="#294e9e">
    <meta property="og:title" content="Guia del Agente Tecnologico" />
    <meta property="og:url" content="https://atetperu.herokuapp.com//" />
    <meta property="og:image" content="https://atetperu.herokuapp.com/assets/img/logo-cbd.png" />
    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="{{ asset('css/boxicons.min.css') }}">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!--=============== MAIN JS ===============-->
    {{--    <script src="https://cdn.jsdelivr.net/npm/vue@3.2.41/dist/vue.global.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/vue-router@4.1.6/dist/vue-router.global.min.js"></script>--}}
</head>
<body class="antialiased">
<div id="app">
    @include('partials.header')
    <main class="main container-fluid">
        <div class="section">
            @yield('visit')

            @yield('content')
        </div>

    </main>

</div>
</body>
</html>
