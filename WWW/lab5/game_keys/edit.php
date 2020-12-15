<html>
    <head> <title> Редактирование данных о ключе </title> </head>
    <body>
        <form action='save_edit.php' method='get'>
            <?php
                $mysqli = new mysqli("localhost","f0479829_stas","stas","f0479829_stas");
                if ($mysqli->connect_errno) {
                    echo "Не удалось подключиться к БД";
                }

                $key_id = $_GET['id'];

                $result = $mysqli->query("SELECT game_keys.id,
                    game_keys.date_acq, game_keys.date_end,
                    games.game as game_name, games.id as game_id,
                    stores.name as store_name, stores.id as store_id,
                    game_keys.price, game_keys.cod FROM game_keys
                    LEFT JOIN games ON game_keys.name_game=games.id
                    LEFT JOIN stores ON game_keys.name_store=stores.id
                    WHERE game_keys.id=$key_id"
                );

                if ($result && $st = $result->fetch_array()){
                    $purchase_date = $st['date_acq'];
                    $expiry_date = $st['date_end'];
                    $game_name = $st['game_name'];
                    $game_id = $st['game_id'];
                    $store_name = $st['store_name'];
                    $store_id = $st['store_id'];
                    $price = $st['price'];
                    $key_code = $st['cod'];
                }

                // Создание формы
                print "Дата приобретения: <input name='purchase_date' size='50' type='date' placeholder='dd-mm-yyyy' value='$purchase_date'>";
                print "Дата окончания действия: <input name='expiry_date' size='50' type='date' placeholder='dd-mm-yyyy' value='$expiry_date'>";

                // Получение данных об играх
                $result = $mysqli->query("SELECT id, game FROM games WHERE id=$game_id");
                echo "<br>Игра: <select name='game_id'>";
                echo "<option selected value='$game_id'>$game_name</option>";



                if ($result){
                    while ($row = $result->fetch_array()){
                        $id = $row['id'];
                        $name = $row['game'];

                        echo "<option value='$id'>$name</option>";
                    }
                }
                echo "</select>";

                $result = $mysqli->query("SELECT id, name FROM stores WHERE id=$store_id");
                echo "<br>Магазин: <select name='store_id'>";
                echo "<option selected value='$store_id'>$store_name</option>";

                if ($result){
                    // Для каждой строки из запроса
                    while ($row = $result->fetch_array()){
                        $id = $row['id'];
                        $name = $row['name'];

                        echo "<option value='$id'>$name</option>";
                    }
                }
                echo "</select>";

                print "<br>Цена: <input name='price' size='30' type='text' value='$price'>";
                print "<br>Код активации: <input type='text' name='key_code' size='20' value='$key_code'>";
                print "<input type='hidden' name='id' size='30' value='$key_id'>";
            ?>
            <p><input type='submit' name='save' value='Сохранить'></p>
        </form>
        <p><button style='color: blue' onclick="window.location.href='game_keys.php'">Вернуться к списку ключей</button></td></p>
    </body>
</html>
