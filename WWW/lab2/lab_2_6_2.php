<!DOCTYPE html>
<html>
<head>
	<title>Короленко</title>
</head>
<body>
	<img src="2.png">

<?php
echo '<br/>';
$a = rand(-20,20);
$b = rand(-20,20);

echo 'Первое число: ' . $a . '<br/>';
echo 'Второе число: ' . $b;

// вторая часть первого условия
$t1 = $a*$a;
$t2 = $a + $b;
$F = array(2);

for ($i=0; $i < 2; $i++) {
	//1
if ($a < -2) {
	$F[$i] = 2*$a;
} elseif ($t1 < -2) {
	$F[$i] = 2*$t1;
}
	//2
if ($a>-2 && $a < 2) {
		$F[$i] = pow(sin($a), 3) + log($b);
	} elseif ($t1 > -2 && $t1 < 2) {
	$F[$i] = pow(sin($t1), 3) + log($t2);
}
	//3
if ($a> 2) {
		$F[$i] = pow(pow(cos($a), 2) + pow(sin($b*$b*$b), 4), 1/4);
	} elseif ($t1> 2) {
	$F[$i] = pow(pow(cos($t1), 2) + pow(sin($t2*$t2*$t2), 4), 1/4);
}
}
$z = $F[0] + $F[1]; // Сумма функций
echo '<br/>' . 'Сумма функций равна: ' . $z;
?>
</body>
</html>
