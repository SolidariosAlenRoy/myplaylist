<?php
require_once("dbconnect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $mysqli->query("SELECT * FROM playlist WHERE id=$id");
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-js/addedit.css">

    <title>Edit Song</title>
</head>
<body>
    <h1>Edit Playlist</h1>

    <form method="POST" action="editaction.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <label for="song">Song Title:</label>
        <input type="text" name="song" id="song" value="<?php echo htmlspecialchars($row['song']); ?>" required>
        
        <label for="artist">Song Artist:</label>
        <input type="text" name="artist" id="artist" value="<?php echo htmlspecialchars($row['artist']); ?>" required>
        
        <label for="album">Album:</label>
        <input type="text" name="album" id="album" value="<?php echo htmlspecialchars($row['album']); ?>" required>
        
        <label for="genre">Genre:</label>
        <select name="genre" id="genre" required>
            <option value="">--Select Genre--</option>
            <option value="Pop" <?php echo ($row['genre'] == 'Pop') ? 'selected' : ''; ?>>Pop</option>
            <option value="Rock" <?php echo ($row['genre'] == 'Rock') ? 'selected' : ''; ?>>Rock</option>
            <option value="Jazz" <?php echo ($row['genre'] == 'Jazz') ? 'selected' : ''; ?>>Jazz</option>
            <option value="Hip-Hop" <?php echo ($row['genre'] == 'Hip-Hop') ? 'selected' : ''; ?>>Hip-Hop</option>
            <option value="Electronic" <?php echo ($row['genre'] == 'Electronic') ? 'selected' : ''; ?>>Electronic</option>
            <option value="Country" <?php echo ($row['genre'] == 'Country') ? 'selected' : ''; ?>>Country</option>
            <option value="R&B" <?php echo ($row['genre'] == 'R&B') ? 'selected' : ''; ?>>R&B</option>
            <option value="Reggae" <?php echo ($row['genre'] == 'Reggae') ? 'selected' : ''; ?>>Reggae</option>
            <option value="KPop" <?php echo ($row['genre'] == 'KPop') ? 'selected' : ''; ?>>K-Pop</option>
        </select>
        
        <label for="year">Year:</label>
        <input type="number" name="year" id="year" value="<?php echo htmlspecialchars($row['year']); ?>" required>
        
        <button type="submit" name="update">Update Playlist</button>

        <div class="back-link">
            <a href="index.php">Back to Playlist</a>
        </div>
    </form>
</body>
</html>
