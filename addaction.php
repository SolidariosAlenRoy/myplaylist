<?php
require_once("dbconnect.php");

if (isset($_POST['add'])) {
    $song = $_POST['song'];
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $genre = $_POST['genre'];
    $year = $_POST['year'];

    $query = "INSERT INTO playlist (song, artist, album, genre, year) VALUES ('$song', '$artist', '$album', '$genre', '$year')";

    if ($mysqli->query($query)) {
        header('Location: addmusic.php');
        exit();
    } else {
        echo "Error: " . $mysqli->error;
    }
}
?>