<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>

<div class="top-0 h-20 w-full border-1 shadow p-5 z-20">
    <p class="text-2xl">Header</p>
</div>

<div class="flex flex-row">
    <div class="w-80 h-screen border-r p-5">
        <p class="text-2xl mb-2">Sidebar</p>
        <div class="flex flex-col items-center">
            <button class="p-2 border w-full h-10 mb-2">Sad</button>
            <button class="p-2 border w-full h-10 mb-2">Mad</button>
            <button class="p-2 border w-full h-10 mb-2">Nad</button>
        </div>
    </div>
    {{ $slot }}
</div>



{{ $slot }}

<x-notifications position="top-right" />

@vite('resources/js/app.js')
@livewireScripts
</body>
</html>
