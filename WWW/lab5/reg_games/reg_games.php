<?php
require "../db.php";
$data=$_POST;
if (isset($data['do_add'])) {
  //Проверка
  $errors=array();
  if(trim($data['name'])==''){
    $errors[]='Введите название игры';}
  if(trim($data['theme'])==''){
    $errors[]='Введите жанр';}
  if($data['developer']==''){
    $errors[]='Введите имя разработчика';}
  if($data['publisher']==''){
    $errors[]='Введите название компании!';}
  if($data['volume']==''){
    $errors[]='Введите объём продаж!';}
  if(R::count('games', 'name=?', array($data['name']))>0){
    $errors[]='Такая игра уже добавлена!';}
  if(empty($errors)){
    $game= R::dispense('games');
    $game->game=$data['name'];
    $game->theme=$data['theme'];
    $game->developer=$data['developer'];
    $game->publisher=$data['publisher'];
    $game->volume=$data['volume'];
    R::store($game);
    echo '<div>Вы успешно добавили игру в базу данных</div><hr>';
}else {
    echo '<div>'.array_shift($errors).'</div><hr>';
  }
}
 ?>
<a href="reg_games.html">Перейти к добавлению</a>
<br>
<a href="../index.php">Перейти в меню</a>
