<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viweport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    {{ $styles }}
</head>

<body>
   <x-navbar>  </x-navbar>

    {{ $slot }}

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
