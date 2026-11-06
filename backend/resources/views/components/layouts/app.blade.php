@props(['title' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ? $title . ' · ' . config('app.name') : config('app.name') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/igdratech-mark.png') }}">

    @fonts
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">
    <x-site.header />

    <main class="flex-grow-1">
        {{ $slot }}
    </main>

    <x-site.footer />
</body>
</html>
