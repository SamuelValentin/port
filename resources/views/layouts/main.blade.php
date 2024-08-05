<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/js/app.js'])
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 dark:bg-gray-900 dark:text-white">
    @include('components.navbar')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        @yield('content')
    </main>
    @include('components.footer')
</body>
</html>

