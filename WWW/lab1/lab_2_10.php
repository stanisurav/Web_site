<HTML>
    <TITLE> Таблица чисел </TITLE>
    <BODY>
        <TABLE border=1>
        <?php
            for ($i=0; $i<10; $i++) { // запускаем первый цикл
                echo ("<tr>"); // начало строки таблицы
                for ($k=1; $k<=10; $k++) { // запускаем второй цикл
                    echo ("<td align=center>"); // открываем ячейку таблицы
                    $p=$i*10+$k; // находим произведение двух чисел и...

                    if ($k%2==0){
                        echo '<p style="color: red">' . $p . '</p>' ;
                    }
                    else{
                        echo ($p); // выводим его,
                    }

                    echo ("</td>"); // а потом закрываем ячейку
                }
                echo ("</tr>"); // конец строки таблицы
            }
        ?>
        </TABLE>
    </BODY>
</HTML>
