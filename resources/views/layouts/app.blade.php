<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                    <nav class="bg-blue-600 black p-4 flex justify-between">
                        <div class="flex gap-4 items-center">
                           <img src="resource/img/images.png" alt="Logo" class="h-8">
                           <span class="font-bold text-lg">Wiz Task Manager</span>
                           <a href="{{ route('dashboard') }}">Home</a>
                           <a href="#">App Details</a>
                           <a href="#">User Info</a>
                           <a href="#">Contact</a>
                        </div>
                        <div>
                           <button class="text-white px-2">&#x22EE;</button>
                        </div>
                    </nav>

                </header>
            @endisset

            <!-- Page Content -->
            <main>
                 <div class="max-w-xl mx-auto mt-6">
                        <h2 class="text-2xl font-bold mb-4">Create User</h2>

                           <form method="POST" action="{{ route('admin.users.store') }}">
                              @csrf

                              <input name="name" placeholder="Name" class="w-full p-2 mb-2 border" required>
                              <input name="phone" placeholder="Phone Number" class="w-full p-2 mb-2 border" required>
                              <input name="email" placeholder="Email" class="w-full p-2 mb-2 border" required>
                              <input name="designation" placeholder="Designation" class="w-full p-2 mb-2 border" required>
                              <input name="department" placeholder="Department" class="w-full p-2 mb-2 border" required>
                              <input name="password" type="password" placeholder="Password" class="w-full p-2 mb-2 border" required>

                              <button type="submit" class="bg-blue-600 text-blue px-4 py-2" style="text-align: center;">Create User</button>
                            </form>
                    </div>

            </main>
        </div>
    </body>
</html>
