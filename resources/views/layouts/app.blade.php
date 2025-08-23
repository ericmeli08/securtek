<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SecurTek - Safe. Secure. 24/7' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased">
    <!-- Alert Bar -->
    <div class="bg-securtek-orange text-white text-center py-4 sm:py-6 px-4 text-sm">
        A potential Canada Post labour disruption may affect the mail delivery of your SecurTek paper bill and payments.
        <a href="#" class="underline font-semibold">Learn more</a>
    </div>

    <!-- Navigation -->
   <livewire:partials.navigation />

    <!-- Main Content -->
    <main class="overflow-hidden">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <livewire:partials.footer />

    @livewireScripts
</body>
</html>
