<?php
  $A=[];
  $count=rand(1,20);
  $c1=rand(1,25);
  $c2=rand(26,50);

  echo "Исходный массив: ";
  for ($i=0; $i < $count; $i++) {
    $A[$i]=rand(10,100)/2;
    echo $A[$i].' | ';
  }
  echo '<br>';
  echo "Интервал: [".$c1." ;".$c2."]";
  echo '<br>';
  $min=$A[0];
  for ($i=0; $i < $count; $i++) {
    if ($min>$A[$i]) {
      $min=$A[$i];
    }
  }
  echo "Минимальное значение массива: ". $min;
  echo '<br>';
  echo "Cкорректированный массив: ";
  for ($i=0; $i < $count; $i++) {
    if ($A[$i]>$c1 and $A[$i]<$c2) {
      $A[$i]=$min;
    }
    echo $A[$i].' | ';
  }

 ?>
