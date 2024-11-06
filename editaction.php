<?php
require_once("dbconnect.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $song = $_POST['song'];
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $genre = $_POST['genre'];
    $year = $_POST['year'];

    $mysqli->query("UPDATE playlist SET song='$song', artist='$artist', album='$album', genre='$genre', year='$year' WHERE id=$id");

    header('Location: index.php');
    exit();
    
}
?>
