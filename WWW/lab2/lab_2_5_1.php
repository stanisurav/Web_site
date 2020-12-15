<!DOCTYPE html>
<html>
<head>
	<title>Короленко</title>
</head>
<body>

<?php

$Massive = array(array(1,1,1,1,1,1,1,1,1), //наш красавец массивчик
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1)
				 );

echo 'Исходный массив' . '<br/>';
for ($i=0; $i < 9; $i++) {
	for ($j=0; $j < 9; $j++) {
	$Massive[$i][$j] = rand(1,20);
	echo $Massive[$i][$j] . ' ';
	}
	echo '<br/>';
}
echo '<br/>';
$max = 0; // макс элемент
$maxInd = array(10); // массив показателей максимального элемента
for ($i=0; $i < 9; $i++) {
	for ($j=0; $j < 9; $j++) {
		if ($Massive[$i][$j] >= $max){
		$max = $Massive[$i][$j]; //
		$maxInd[$i] = $j;
		}
	}	$max = 0; // должно бы обнулить значение свое
}

echo '<br/>';
echo '<br/>';
$k = 0;
for ($i=0; $i < 9; $i++) {
	$k = $Massive[$i][$maxInd[$i]];
	$Massive[$i][$maxInd[$i]] = $Massive[$maxInd[$i]][$i];
	$Massive[$maxInd[$i]][$i] = $k;
}
echo 'Скорректированный массив' . '<br/>';
for ($i=0; $i < 9; $i++) {
	for ($j=0; $j < 9; $j++) {
	echo $Massive[$i][$j] . ' ';
	}
	echo '<br/>';
}

?>
</body>
</html>
