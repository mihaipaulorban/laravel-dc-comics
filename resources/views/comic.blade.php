<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Includo gli assets con la direttiva @vite --}}
    @vite ('resources/js/app.js')
    <title>Comic Details</title>
</head>
<body class="d-flex vh-100 justify-content-center align-items-center">
    <div class="container text-center">
        <h1>{{ $comic->title }}</h1>
        <p>{{ $comic->description }}</p>
        <a href="{{ url('/') }}" class="btn btn-primary mt-5">Torna alla Home</a>
    </div>
</body>

</html>