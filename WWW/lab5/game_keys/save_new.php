    <?php
      $mysqli = new mysqli("localhost","f0479829_stas","stas","f0479829_stas");
      if ($mysqli->connect_errno) {
          echo "Не удалось подключиться к БД";
      }

      $purchase_date = $_GET['purchase_date'];
      $expiry_date = $_GET['expiry_date'];
      $game_id = $_GET['game_id'];
      $store_id = $_GET['store_id'];
      $price = $_GET['price'];
      $key_code = $_GET['key_code'];

      // Выполнение запроса
      $result = $mysqli->query("INSERT INTO game_keys
   SET date_acq='$purchase_date', date_end='$expiry_date',
   name_game='$game_id', name_store='$store_id',
   price='$price', cod='$key_code'"
      );

      echo '<meta http-equiv="refresh" content="0;URL=game_keys.php">';
  ?>
