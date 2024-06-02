<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            background-image: url('./img/wraith.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased text-gray-900 dark:bg-gray-900 dark:text-gray-200">
    <div class="min-h-screen flex flex-col justify-between bg-black bg-opacity-50">
        <header class="bg-white bg-opacity-70 dark:bg-gray-800 dark:bg-opacity-70 shadow">
            <div class="container mx-auto p-4">
                @if (Route::has('login'))
                    <nav class="flex justify-end space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-gray-700 dark:text-gray-200 hover:text-red-600 red:hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                Blog
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-200 hover:text-red-600 red:hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-gray-700 dark:text-gray-200 hover:text-red-600  red:hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </header>

        <main class="flex-grow container mx-auto p-8 text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Welcome to the Adventures Blog</h1>
            <p class="text-xl">A Blog for all the little adventurers dreams</p>
        </main>
        <footer class="bg-white bg-opacity-70 dark:bg-gray-800 dark:bg-opacity-70 py-4 text-center text-sm text-gray-700 dark:text-gray-300">
            <div>
                <p>Adventures Blog</p>
            </div>
            <div>
                <p>&copy; 2024 Adventures Blog. All Rights Reserved.</p>
            </div>
            <div>
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>
</footer>
    </div>
</body>
</html>
