<html>
    <head> <title> Сведения об ключах </title>
      <link rel="stylesheet" href="/main.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&display=swap" rel="stylesheet">
    </head>

    <h2 id="h2"> Список ключей: </h2>
    <div class="container">
    <table border="1">
        <tr>
            <th> Дата приобретения </th> <th> Дата окончания действия </th> <th> Игра </th>
            <th> Магазин </th> <th> Цена </th> <th> Код активации </th>
        </tr>
        <?php
        require "../db.php";
            $mysqli = new mysqli("localhost","f0479829_stas","stas","f0479829_stas");
            if ($mysqli->connect_errno) {
                echo "Не удалось подключиться к БД";
            }
            // Запрос на выборку сведений о пользователях
            $result = $mysqli->query("SELECT game_keys.id, game_keys.date_acq, game_keys.date_end,
                games.game as game, stores.name as store, game_keys.price, game_keys.cod FROM game_keys
                LEFT JOIN games ON game_keys.name_game=games.id
                LEFT JOIN stores ON game_keys.name_store=stores.id"
            );
            $counter=0;
            if ($result){
                while ($row = $result->fetch_array()){
                    $id = $row['id'];
                    $date_esq = $row['date_acq'];
                    $date_end = $row['date_end'];
                    $game = $row['game'];
                    $store = $row['store'];
                    $price = $row['price'];
                    $key_code = $row['cod'];
                    $date_esq = date('d-m-Y', strtotime($date_esq));
                    $date_end = date('d-m-Y', strtotime($date_end));
                    echo "<tr>";
                    echo "<td>$date_esq</td><td>$date_end</td><td>$game</td><td>$store</td><td>$price</td><td>$key_code</td>";
                    echo "<td><button style='color: blue' onclick=\"window.location.href='edit.php?id=$id'\">Редактировать</button></td>";
                    echo "<td><button style='color: blue' onclick=\"window.location.href='delete.php?id=$id'\">Удалить</button></td>";
                    echo "</tr>";
                    $counter++;
                }
            }
            print "</table>";
            print("<p id=count>Всего игр: $counter </p>");
        ?>
    <button id="button" style='color: blue' onclick="window.location.href='new.php'">Добавить ключ</button></td><br>
    <button id="button" style='color: blue' onclick="window.location.href='../index.php'">Вернуться в меню</button></td>
</html>
