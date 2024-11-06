<?php
require_once("dbconnect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mysqli->query("DELETE FROM playlist WHERE id=$id");

    header('Location: index.php');
    exit();
}
?>
