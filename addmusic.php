<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-js/addedit.css">
    <title>Add Music</title>
</head>
<body>
    <h1>Add a New Song to the Playlist</h1>

    <form method="POST" action="addaction.php">
        <label for="song">Song Title:</label>
        <input type="text" name="song" id="song" placeholder="Song Title" required>

        <label for="artist">Song Artist:</label>
        <input type="text" name="artist" id="artist" placeholder="Song Artist" required>

        <label for="album">Album:</label>
        <input type="text" name="album" id="album" placeholder="Album" required>

        <label for="genre">Genre:</label>
        <select name="genre" id="genre" required>
            <option value="">--Select Genre--</option>
            <option value="Pop">Pop</option>
            <option value="Rock">Rock</option>
            <option value="Jazz">Jazz</option>
            <option value="Hip-Hop">Hip-Hop</option>
            <option value="Electronic">EDM</option>
            <option value="Country">Country</option>
            <option value="R&B">R&B</option>
            <option value="Reggae">Reggae</option>
            <option value="KPop">K-Pop</option>
        </select>

        <label for="year">Year:</label>
        <input type="number" name="year" id="year" placeholder="Year" required>

        <button type="submit" name="add">Add Song</button>

        <div class="back-link">
            <a href="index.php">Back to Playlist</a>
        </div>
    </form>
</body>
</html>
