<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Laravel layout using blade x-dynamic-component</title> --}}
    <title>Laravel guest layout {{ isset($title) ? ' - ' . $title : '' }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    {{ $slot }}

    {{-- coming from GuestLayout Class --}}
    {{ $main_layout }} <br>
    {{ $test }}
</body>

</html>
