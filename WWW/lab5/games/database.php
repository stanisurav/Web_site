<?php
require "../db.php";
$data=$_POST;
$games='games';
?>

<html>
    <head> <title> Сведения. Короленко </title>
      <link rel="stylesheet" href="/main.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&display=swap" rel="stylesheet">
    </head>

    <h2 id="h2">Список игр:</h2>
    <div class="container">
    <table border="1">
      <p> <a id=lenk href='../index.php'> Вернуться в меню </a> </p>
        <tr>
            <th> Игра </th> <th> Жанр </th> <th> Разработчик </th>
            <th> Издатель </th> <th> Объём продаж </th> <th> Редактирование </th> <th> Удаление </th>
        </tr>
        <?php
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $mysqli = mysqli_connect("localhost","f0479829_stas","stas","f0479829_stas");
            mysqli_set_charset($mysqli, "utf8mb4");

            // Запрос на выборку сведений о пользователях
            $result = $mysqli->query("SELECT * FROM games");

            if ($result){
                // Для каждой строки из запроса
                while ($row = $result->fetch_array()){
                    $game = $row['game'];
                    $theme = $row['theme'];
                    $developer = $row['developer'];
                    $publisher = $row['publisher'];
                    $volume = $row['volume'];
                    $id=$row['id'];

                    echo "<tr>";
                    echo "<td>$game</td><td>$theme</td><td>$developer</td><td>$publisher</td><td>$volume</td>";
                    echo "<td><a href='edit.php?id=$id'>Редактировать</a></td>";
                    echo "<td><a href='delete.php?id=$id'>Удалить</a></td>";
                    echo "</tr>";
                }
                print "</table>";
        echo"</div>";
            }

?>
</html>
