<html>
    <head> <title> Добавление новой ключа </title> </head>
    <body>
        <H2>Добавление новой ключа</H2>
        <form action="save_new.php" method="get">
            Дата приобретения: <input name="purchase_date" size="50" placeholder="dd-mm-yyyy" type="date">
            <br>Дата окончания действия: <input name="expiry_date" size="20" placeholder="dd-mm-yyyy" type="date">
            <?php
                $mysqli = new mysqli("localhost","f0479829_stas","stas","f0479829_stas");
                if ($mysqli->connect_errno) {
                    echo "Не удалось подключиться к БД";
                }

                // Получение данных об играх
                $result = $mysqli->query("SELECT id, game FROM games");
                echo "<br>Игра: <select name='game_id'>";

                if ($result){
                    while ($row = $result->fetch_array()){
                        $id = $row['id'];
                        $name = $row['game'];

                        echo "<option value='$id'>$name</option>";
                    }
                }
                echo "</select>";

                // Получение данных о магазинах
                $result = $mysqli->query("SELECT id, name FROM stores");
                echo "<br>Магазин: <select name='store_id'>";

                if ($result){
                    while ($row = $result->fetch_array()){
                        $id = $row['id'];
                        $name = $row['name'];

                        echo "<option value='$id'>$name</option>";
                    }
                }
                echo "</select>";
            ?>
            <br>Цена: <input name="price" size="30" type="text">
            <br>Код активации: <input name="key_code" size="30" type="text">
            <p>
                <input name="add" type="submit" value="Добавить">
                <input name="b2" type="reset" value="Очистить">
            </p>
        </form>
        <p><button style='color: blue' onclick="window.location.href='game_keys.php'">Вернуться к списку ключей</button></td></p>
    </body>
</html>
