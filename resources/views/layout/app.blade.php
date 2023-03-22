<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>test task</title>

    @vite(['resources/js/app.js'])

</head>
<body class="container bg-body">
<header class="d-block bg-dark rounded-3 my-2 py-3">
    <div class="container">
        <div class="text-white fs-1">Test task</div>
    </div>
</header>
    @yield('content')
</body>
