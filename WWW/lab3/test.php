<?php
$slovo = "МАНЧЕСТЕР";
$ran = rand(0, mb_strlen($slovo) - 1);
$wrt1 = mb_substr($slovo, $ran, 1);
$slovo = mb_substr($slovo, 0, $ran).'*'.mb_substr($slovo, $ran + 1);
 
echo "<form name=rrr action=addddd.php method=GET>";
echo "<input type=hidden name=wrt1 value=$wrt1>";
echo "<table border=1><tr>";
echo "<td>$slovo</td>";
echo "<td><input type=text name='testing1' size=7 required></td></tr>";
echo "</table>";
echo "<input type=submit name=ad value='OK'>";
echo "</form>";
 
if (isset($_GET['ad'])){
    if(mb_strtoupper($_GET["wrt1"]) == mb_strtoupper($_GET["testing1"])) echo "ВЕРНО!";
    else echo "НЕВЕРНО!";
}
?>