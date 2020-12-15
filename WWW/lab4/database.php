<?php
require "db.php";
$data=$_POST;
$games='games';
?>

<html>
    <head> <title> Сведения. Короленко </title> </head>

    <h2>Список игр:</h2>
    <table border="1">
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
            }

            print("<p> <a href='index.php'> Вернуться в меню </a> </p>");
        ?>
</html>
