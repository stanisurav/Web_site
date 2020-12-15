<!DOCTYPE html>
<html>
<head>
	<title>Короленко</title>
</head>
<body>
	<img src="1.png">
<?php
echo '<br/>';

$a = rand(-20,20);
$b = rand(-20,20);

echo 'Первое число: ' . $a . '<br/>';
echo 'Второе число: ' . $b;

// вторая часть первого условия
$t1 = $b*$b + $a;
$F = array(2);

for ($i=0; $i < 2; $i++) {
	//1
if ($a >= 0 && $t1 >= 0) {
	$F[$i] = $a + 2*$t1;
} elseif ($a >= 0 && $b >=0) {
	$F[$i] = $a + 2*$b;
}
	//2
if ($a<0 && $t1 >= 0) {
		$F[$i] = $a + $t1;
	} elseif ($a < 0 && $b >=0) {
	$F[$i] = $a + $b;
}
	//3
if ($a>=0 && $t1 < 0) {
		$F[$i] = $a*$a - 2*$t1;
	} elseif ($a >= 0 && $b <0) {
	$F[$i] = $a*$a - 2*$b;
}
	//4
if ($a < 0 && $t1 < 0) {
		$F[$i] = $t1 + 3*$a;
	} elseif ($a < 0 && $b <0) {
	$F[$i] = $b + 3*$a;
}
}
$z = $F[0] + $F[1]; // Сумма функций

echo '<br/>' . 'Сумма функций равна: ' . $z;

?>
</body>
</html>
