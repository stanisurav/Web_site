<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = mysqli_connect("localhost","f0479829_stas","stas","f0479829_stas");
    mysqli_set_charset($mysqli, "utf8mb4");

    $id = $_GET['id'];

    $result = $mysqli->query("DELETE FROM stores WHERE id='$id'");

    header("Location: stores.php");
    exit;
?>
