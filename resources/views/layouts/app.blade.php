<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex flex-col bg-custom">
            @include('layouts.navigation')
            <main class="flex-grow">
                {{ $slot }}
            </main>
            <footer class="bg-gray-800 text-white py-4" style="background-color: #00909e;">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <div>
                <p>Adventures Blog</p>
                <p>&copy; 2024 Adventures Blog. All Rights Reserved.</p>
            </div>
            <div>
                <p>Contact Us:</p>
                <p>Email: example@example.com</p>
                <p>Phone: 123-456-7890</p>
                <p>For Blog Enquiries Email: example@example.com</p>
            </div>
        </div>
    </div>
</footer>

        </div>
    </body>
</html>

<style>
    html, body {
        background-color: #b7c3d3;
        height: 100%;
        margin: 0;
    }
    .bg-custom {
        background-color: #b7c3d3;
    }
</style>
