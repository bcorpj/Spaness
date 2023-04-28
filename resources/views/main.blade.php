<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="p-2">

    <livewire:router />
    @vite('resources/js/app.js')
    @livewireScripts
</body>
</html>
