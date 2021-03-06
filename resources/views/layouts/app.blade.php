<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Nunito:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>


    <main>

        @yield('content')
    </main>
    </div>


</body>

</html>
