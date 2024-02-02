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
    <div class="container text-center w-50">
        <a href="{{ url('/') }}" class="btn btn-primary mb-5">Torna alla Home</a>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT') 
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" required>
            </div>
        
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" id="description" name="description" required>{{ $comic->description }}</textarea>
            </div>
        
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail URL:</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
        
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}" required>
            </div>
        
            <div class="mb-3">
                <label for="series" class="form-label">Series:</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>
        
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date:</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
        
            <div class="mb-3">
                <label for="type" class="form-label">Type:</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
            </div>
        
            <div class="mb-3">
                <label for="artists" class="form-label">Artists (in JSON format):</label>
                <textarea class="form-control" id="artists" name="artists">{{ json_encode($comic->artists) }}</textarea>
            </div>
        
            <div class="mb-3">
                <label for="writers" class="form-label">Writers (in JSON format):</label>
                <textarea class="form-control" id="writers" name="writers">{{ json_encode($comic->writers) }}</textarea>
            </div>
        
            <button type="submit" class="btn btn-primary mt-4">Aggiorna Fumetto</button>
        </form>
        
    </div>
    
</body>

</html>