<?php
  require '../db.php';
  $data=$_POST
 ?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Изменение данных. Короленко</title>
  </head>
  <body>

<?php

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = mysqli_connect("localhost","f0479829_stas","stas","f0479829_stas");
    mysqli_set_charset($mysqli, "utf8mb4");

    $dat = mysqli_query($mysqli,"SELECT * FROM games");

    if ($dat){
        // Для каждой строки из запроса
        while ($row = $dat->fetch_array()){
            $game = $row['game'];
            $theme = $row['theme'];
            $developer = $row['developer'];
            $publisher = $row['publisher'];
            $volume = $row['volume'];
            $id=$row['id'];
        }}
//Изменение названия
    if (isset($data['change_game'])) {
      if ($data['game']=='') {
        $errors[]='Введите новое название';
      }
      if ($data['game']==$game) {
        $errors[]='Такое название уже стоит';
      }
      if(empty($errors)){
        echo 'Вы успешно изменили название';
        $query="UPDATE games SET game='$data[game]' WHERE id=$id";
        $result=mysqli_query($mysqli, $query);
        $game=$data['game'];
        if (!mysqli_query($mysqli, $query)) {
      echo "Что-то не то $query".mysql_error()."<br><br>";
      $result = mysqli_query($query);
    }}
else {
      echo array_shift($errors);
    }
}

//Изменение жанра
if (isset($data['change_theme'])) {
  if ($data['theme']=='') {
    $errors[]='Введите новый жанр';
  }
  if ($data['theme']==$theme) {
    $errors[]='Такой жанр уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили жанр';
    $query="UPDATE games SET theme='$data[theme]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);
    $theme=$data['theme'];
    if (!mysqli_query($mysqli, $query)) {
  echo "Что-то не то $query".mysql_error()."<br><br>";
  $result = mysqli_query($query);
}}
else {
  echo array_shift($errors);
  }
}

//Изменение разработчика
if (isset($data['change_developer'])) {
  if ($data['developer']=='') {
    $errors[]='Введите новое имя разработчика';
  }
  if ($data['developer']==$developer) {
    $errors[]='Такое имя разработчика уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили имя разработчика';
    $query="UPDATE games SET developer='$data[developer]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);
    $developer=$data['developer'];
    if (!mysqli_query($mysqli, $query)) {
  echo "Что-то не то $query".mysql_error()."<br><br>";
  $result = mysqli_query($query);
}}
else {
  echo array_shift($errors);
  }
}

//Изменение издателя
if (isset($data['change_publisher'])) {
  if ($data['publisher']=='') {
    $errors[]='Введите новое имя разработчика';
  }
  if ($data['publisher']==$publisher) {
    $errors[]='Такое имя разработчика уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили имя разработчика';
    $query="UPDATE games SET publisher='$data[publisher]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);
    $publisher=$data['publisher'];
    if (!mysqli_query($mysqli, $query)) {
  echo "Что-то не то $query".mysql_error()."<br><br>";
  $result = mysqli_query($query);
}}
else {
  echo array_shift($errors);
  }
}

//Изменение объёма
if (isset($data['change_volume'])) {
  if ($data['volume']=='') {
    $errors[]='Введите новое имя разработчика';
  }
  if ($data['volume']==$volume) {
    $errors[]='Такое имя разработчика уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили имя разработчика';
    $query="UPDATE games SET volume='$data[volume]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);
    $volume=$data['volume'];
    if (!mysqli_query($mysqli, $query)) {
  echo "Что-то не то $query".mysql_error()."<br><br>";
  $result = mysqli_query($query);
}}
else {
  echo array_shift($errors);
  }
}
?>
<form class="" action="" method="post">
  <p>
  <input type="text" name="game"  value='<?=$game?>'>
  <button type="submit" name="change_game">Изменить название игры</button>
  </p>
  <p>
  <input type="text" name="theme" value='<?=$theme?>'>
  <button type="submit" name="change_theme">Изменить жанр</button>
  </p>
  <p>
  <input type="text" name="developer" value='<?=$developer?>'>
  <button type="submit" name="change_developer" >Изменить имя разработчика</button>
  </p>
  <p>
  <input type="text" name="publisher"  value='<?=$publisher?>'>
  <button type="submit" name="change_publisher">Изменить имя издателя</button>
  </p>
  <p>
  <input type="text" name="volume"  value='<?=$volume?>'>
  <button type="submit" name="change_volume">Изменить объём продаж</button>
  </p>
</form>

<p><a href="database.php">Назад к сведениям</a></p>
</body>
</html>
