<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <a href="#" class="text-gray-900 font-bold text-lg">Admin</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-500 hover:text-gray-900">Profile</a>
                    <a href="#" class="text-gray-500 hover:text-gray-900">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mx-auto p-6">
        @yield('content')
    </div>

    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>
