<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('page-title', '')
    </title>
    {{-- generalcss --}}
    @yield('head-cdn')
    @vite('resources/js/app.js')
</head>
<body>

    <main>
        @yield('main-content')
    </main>

    @yield('custom-scripts')
</body>
</html>
