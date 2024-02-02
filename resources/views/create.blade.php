

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Includo gli assets con la direttiva @vite --}}
    @vite ('resources/js/app.js')
    <title>Crea Fumetto</title>
</head>
<body class="d-flex vh-100 justify-content-center align-items-center">
    <div class="container text-center w-50">
        <a href="{{ url('/') }}" class="btn btn-primary mb-5">Torna alla Home</a>
        <form action="{{ url('/comics') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail URL:</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series:</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date:</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type:</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artists (in JSON format):</label>
                <textarea class="form-control" id="artists" name="artists"></textarea>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Writers (in JSON format):</label>
                <textarea class="form-control" id="writers" name="writers"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Aggiungi Fumetto</button>
        </form>
    </div>
    
</body>

</html>