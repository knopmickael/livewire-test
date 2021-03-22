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

    {{ $slot }}

    @livewireScripts

</body>
</html>