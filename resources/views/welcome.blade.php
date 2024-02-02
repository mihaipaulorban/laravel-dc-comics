<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Includo gli assets con la direttiva @vite --}}
    @vite ('resources/js/app.js')
    <title>Laravel Template</title>
</head>
<body class="d-flex vh-100 justify-content-center align-items-center">
    <div class="container text-center">
        @foreach ($comics as $comic)
        <h2>{{ $comic->title }}</h2>
        <a href="/comics/{{ $comic->id }}">View details</a>
    @endforeach
    </div>
    
</body>

</html>