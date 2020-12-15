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

    $dat = mysqli_query($mysqli,"SELECT * FROM stores");

    if ($dat){
        // Для каждой строки из запроса
        while ($row = $dat->fetch_array()){
            $name = $row['name'];
            $address = $row['address'];
            $id=$row['id'];
        }}
//Изменение названия
    if (isset($data['change_name'])) {
      if ($data['name']=='') {
        $errors[]='Введите новое название';
      }
      if ($data['name']==$name) {
        $errors[]='Такое название уже стоит';
      }
      if(empty($errors)){
        echo 'Вы успешно изменили название магазина';
        $query="UPDATE stores SET name='$data[name]' WHERE id=$id";
        $result=mysqli_query($mysqli, $query);
        $name=$data['name'];
        if (!mysqli_query($mysqli, $query)) {
      echo "Что-то не то $query".mysql_error()."<br><br>";
      $result = mysqli_query($query);
    }}
else {
      echo array_shift($errors);
    }
}

//Изменение жанра
if (isset($data['change_address'])) {
  if ($data['address']=='') {
    $errors[]='Введите новый адрес магазина';
  }
  if ($data['address']==$address) {
    $errors[]='Такой адрес уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили адрес';
    $query="UPDATE stores SET address='$data[address]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);
    $address=$data['address'];
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
  <input type="text" name="name"  value='<?=$name?>'>
  <button type="submit" name="change_name">Изменить название игры</button>
  </p>
  <p>
  <input type="text" name="address" value='<?=$address?>'>
  <button type="submit" name="change_address">Изменить жанр</button>
  </p>
</form>

<p><a href="../game_stores/stores.php">Назад к сведениям</a></p>
</body>
</html>
