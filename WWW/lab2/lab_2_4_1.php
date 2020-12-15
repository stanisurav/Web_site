<?php
    $A=[];
    $K=rand(10,80);
    $count=rand(1,20);

    echo "Исходный массив: ";
    for ($i=0; $i < $count; $i++) {
      $A[$i]=rand(10,100);
      echo $A[$i].' ';
    }
    echo "<br>";
    echo 'K= '.$K;
    echo "<br>";

    echo "Скорректированный массив: ";
    for ($i=0; $i < $count; $i++) {
      if ($A[$i]<$K) {
        $A[$i]=0;
      }
      echo $A[$i].' ';
    }


 ?>
