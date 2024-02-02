<form action="{{ url('/comics') }}" method="POST">
    @csrf

    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required><br>

    <label for="description">Description:</label>
    <textarea name="description" id="description" required></textarea><br>

    <label for="thumb">Thumbnail URL:</label>
    <input type="text" name="thumb" id="thumb"><br>

    <label for="price">Price:</label>
    <input type="text" name="price" id="price" required><br>

    <label for="series">Series:</label>
    <input type="text" name="series" id="series"><br>

    <label for="sale_date">Sale Date:</label>
    <input type="date" name="sale_date" id="sale_date"><br>

    <label for="type">Type:</label>
    <input type="text" name="type" id="type"><br>

    <label for="artists">Artists (in JSON format):</label>
    <textarea name="artists" id="artists"></textarea><br>

    <label for="writers">Writers (in JSON format):</label>
    <textarea name="writers" id="writers"></textarea><br>

    <input type="submit" value="Add Comic">
</form>
