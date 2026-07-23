<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    </head>
    <body>
        <x-nav></x-nav>
        <header class="bg-blue-500 text-white p-6">
            <h1 class="text-4xl font-bold mb-2">Gerenciador de Veículos</h1>
            <p class="text-lg">Potencializando o controle e a gestão.</p>
        </header>
        {{ $slot }}
    </body>
</html>