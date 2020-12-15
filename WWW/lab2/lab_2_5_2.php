<!DOCTYPE html>
<html>
<head>
	<title>Короленко</title>
</head>
<body>
<?php
$p = 1;
$Massive = array(array(1,1,1,1,1,1,1,1,1,1), //наш красавец массивчик
				 array(1,1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1,1)
				 );
 for ($i=0; $i <(10+1)/2; $i++) {
 	for ($j=$i; $j < 10 - $i; $j++) {
 		$Massive[$i][$j] = $p;
 		$p++;
 	}

 	for ($u=$i + 1; $u <10 - $i ; $u++) {
 		$Massive[$u][10-1-$i] = $p;
 		$p++;
 	}

 	for ($h=10-2-$i; $h >=$i ; $h--) {
 		$Massive[10-1-$i][$h] = $p;
 		$p++;
 	}

 	for ($o=10-2-$i; $o >$i ; $o--) {
 		$Massive[$o][$i] = $p;
 		$p++;
 	}
 }

 for ($i=0; $i < 10; $i++) {
 	for ($j=0; $j < 10; $j++) {
 		if ($i == 0) {
 		echo  $Massive[$i][$j] . ' _';
 		} else{
 		echo $Massive[$i][$j] . ' ';
 		}
 	} echo '<br/>';
 }
?>
</body>
</html>
