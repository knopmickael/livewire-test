<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My API</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles

</head>
<body>

    <section class="flex flex-col items-center justify-center h-screen space-y-4 relative bg-gradient-to-b from-secondary to-primary">

        <a href="/">
            <svg class="h-8 text-white absolute top-4 left-4 transform hover:scale-125" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
        </a>

        @yield('content')

        <span class="absolute text-secondary bottom-2 right-4 text-sm italic">Made by <a class="hover:underline" href="https://github.com/knopmickael" target="_blank">Rickson Mickael Knop</a></span>

    </section>

    @livewireScripts

</body>
</html>
