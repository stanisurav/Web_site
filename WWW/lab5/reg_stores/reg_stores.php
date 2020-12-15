<?php
require "../db.php";

$data=$_POST;

if (isset($data['do_add'])) {
  //Проверка
  $errors=array();
  if(trim($data['name'])==''){
    $errors[]='Введите название магазина';
  }
  if(trim($data['address'])==''){
    $errors[]='Введите адрес магазина';
  }

  if(R::count('stores', 'name=?', array($data['name']))>0){
    $errors[]='Такой магазин уже добавлен!';
  }

  if(empty($errors)){
    $store= R::dispense('stores');
    $store->name=$data['name'];
    $store->address=$data['address'];
    R::store($store);
    echo '<div>Вы успешно добавили магазин в базу данных</div><hr>';
}else {
    echo '<div>'.array_shift($errors).'</div><hr>';
  }
}
 ?>
<a href="reg_stores.html">Перейти к добавлению</a>
<br>
<a href="../index.php">Перейти в меню</a>
