<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body>
    <h1>{{ $hi_laravel }}</h1>
    <header>
        <ul>
            @foreach($menu as $key => $item)
            <li><a href="{{ route($key) }}">{{ $item }}</a></li>
            @endforeach
        </ul>
    </header>
</body>

</html>