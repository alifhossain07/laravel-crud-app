<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>

    {{-- Tailwind CSS and JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 font-sans">

    {{-- HEADER / NAVBAR --}}
    <header class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">My Laravel App</h1>
            <nav>
                <a href="{{ url('/') }}" class="px-3 hover:underline">Home</a>
                <a href="{{ url('/about') }}" class="px-3 hover:underline">About</a>
                <a href="{{ url('/contact') }}" class="px-3 hover:underline">Contact</a>
            </nav>
        </div>
    </header>

    {{-- PAGE CONTENT --}}
    <main class="py-10">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-gray-800 text-white p-6 mt-10">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} My Laravel App. All rights reserved.
        </div>
    </footer>

</body>
</html>
