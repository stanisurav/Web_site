<?php
    $mysqli = new mysqli("localhost","f0479829_stas","stas","f0479829_stas");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к БД";
    }

    $id = $_GET['id'];

    $result = $mysqli->query("DELETE FROM game_keys WHERE id='$id'");

    header("Location: game_keys.php");
    exit;
?>
