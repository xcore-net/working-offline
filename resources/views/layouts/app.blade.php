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
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script>
            if ('serviceWorker' in navigator) {
              navigator.serviceWorker.register('/service-worker.js')
                .then(registration => {
                  console.log('Service Worker registered with scope:', registration.scope);
                })
                .catch(error => {
                  console.log('Service Worker registration failed:', error);
                });
            }
          </script>
<script>
    window.addEventListener('online', () => {
      const loginData = localStorage.getItem('offline-login');
      if (loginData) {
        fetch('/login', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: loginData
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            localStorage.removeItem('offline-login');
            alert('Login data synced successfully.');
          } else {
            alert('Failed to sync login data.');
          }
        });
      }
    });
  </script>
            
    </body>
</html>
