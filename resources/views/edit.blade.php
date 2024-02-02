<form action="{{ route('comics.update', $comic->id) }}" method="POST">
    @csrf
    @method('PUT') 
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $comic->title }}" required><br>

    <label for="description">Description:</label>
    <textarea name="description" id="description" required>{{ $comic->description }}</textarea><br>

    <label for="thumb">Thumbnail URL:</label>
    <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}"><br>

    <label for="price">Price:</label>
    <input type="text" name="price" id="price" value="{{ $comic->price }}" required><br>

    <label for="series">Series:</label>
    <input type="text" name="series" id="series" value="{{ $comic->series }}"><br>

    <label for="sale_date">Sale Date:</label>
    <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}"><br>

    <label for="type">Type:</label>
    <input type="text" name="type" id="type" value="{{ $comic->type }}"><br>

    <label for="artists">Artists (in JSON format):</label>
    <textarea name="artists" id="artists">{{ json_encode($comic->artists) }}</textarea><br>

    <label for="writers">Writers (in JSON format):</label>
    <textarea name="writers" id="writers">{{ json_encode($comic->writers) }}</textarea><br>

    <input type="submit" value="Update Comic">
</form>
