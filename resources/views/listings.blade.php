<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach ($listings as $listing)
        <a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
        <p>{{ $listing['teacher'] }}</p>
    @endforeach
    {{-- <x-name :nameTag="$listing->name"> --}}
</body>
</html>