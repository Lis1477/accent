<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Акцент на результат</title>
    <meta name="description" content="">


    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    @section('css')
    @show

</head>
<body>

@include('includes.header')

@yield('content')

@section('scripts')
@show

</body>
</html>
