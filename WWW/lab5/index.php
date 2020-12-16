<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <h2>Начальная страница. Короленко</h2>
    <p> Дата и время:<p>
    <?php $d=date("d.m.Y H:i");echo($d);?>
    <h2>Ссылки</h2>
    <ul id="nav" class="lin"> <!-- Собственные скрипты для просмотра и редактирования БД -->
          <p><li><a href="games/database.php">База данных игр</a></li></p>
          <p><li><a href="game_stores/stores.php">Магазины игр</a></p>
          <p><li><a href="game_keys/game_keys.php">Ключи игр</a></p>
    </ul>
    <h2>Добавление</h2>
    <ul id="nav">
        <li><a href="reg_games/reg_games.html">Добавление игры в список данных</a></li>
        <li><a href="reg_stores/reg_stores.html">Добавление магазина в список данных</a></li>
    </ul>
    <button onclick="window.location.href='gen_pdf.php'">PDF-версия таблицы игр</button>
    <button onclick="window.location.href='gen_xls.php'">XML-версия таблицы игр</button>
  </body>
</html>
