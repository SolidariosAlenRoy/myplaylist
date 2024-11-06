<?php
require_once("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Playlist</title>
    <link rel="stylesheet" href="css-js/index.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <h1>Music Playlist</h1>
    <h2>Playlist</h2>
    <div class="add-music">
        <a href="addmusic.php" class="button">Add Music</a>
    </div>
    <table id="playlistTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Song</th>
                <th>Artist</th>
                <th>Album</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $mysqli->query("SELECT * FROM playlist");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['song']}</td>
                        <td>{$row['artist']}</td>
                        <td>{$row['album']}</td>
                        <td>{$row['genre']}</td>
                        <td>{$row['year']}</td>
                        <td class='actions'> <!-- Added class for centering -->
                            <a href='edit.php?id={$row['id']}' class='action-button edit-button'>Edit</a>
                            <a href='delete.php?id={$row['id']}' class='action-button delete-button' onclick='return confirm(\"Are you sure you want to delete this song?\")'>Delete</a>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="css-js/table.js"> </script>
</body>
</html>
