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
        <h1 class="display-1 mb-5">Grossa lista "Bellissima" di fumetti assurdi!</h1>
        {{-- Pulsante per aggiungere un nuovo fumetto --}}
        <a href="{{ url('comics/create') }}" class="btn btn-primary mb-4">Aggiungi un nuovo fumetto</a>

        {{-- Lista fumetti con i vari link alle pagine --}}
        @foreach ($comics as $comic)
            <h2>{{ $comic->title }}</h2>
            {{-- Link Descrizione --}}
            <a href="/comics/{{ $comic->id }}" class="btn btn-info mx-2">Descrizione</a>
            {{-- Link Modifica --}}
            <a href="/comics/{{ $comic->id }}/edit" class="btn btn-warning mx-2">Modifica</a>
            {{-- Pulsante Elimina --}}
            <form method="POST" action="/comics/{{ $comic->id }}" class="mt-4">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger mb-4" type="submit">Elimina</button>
            </form>
        @endforeach
    </div>
    
</body>

</html>