<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Page Title' }}</title>

        @livewireStyles
    </head>
    <body class="">
        <div class="absolute inset-0 -z-10 h-full w-full bg-white bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px]">

            <div class="max-w-sm mx-auto  bg-gray-100 text-center border-2 border-black min-h-screen">
                <livewire:AppName/>
                {{ $slot }}
            </div>
        </div>
        @livewireScripts
    </body>
</html>
