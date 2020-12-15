<?php 
$TEXT = $_POST["givenText"];
$v_text = mb_strtoupper($TEXT);
echo("Строка в верхнем регистре " . $v_text);
?>