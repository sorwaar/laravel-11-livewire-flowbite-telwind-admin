<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Admin</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles
</head>
<body class="bg-white dark:bg-gray-900">
    @include('partials.navbar')
    @include('partials.sidebar')
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            @yield('content')
            @livewireScripts
        </div>
    </div>

</body>
</html>
