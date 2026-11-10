<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CineLog')</title>

    <!-- Script Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: ui-sans-serif, system-ui, -apple-system, sans-serif; }
    </style>
</head>
<body class="bg-[#f7f5eb] text-stone-800 flex flex-col min-h-screen">

    @include('components.navbar')

    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>