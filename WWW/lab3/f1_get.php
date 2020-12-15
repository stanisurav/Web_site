<!DOCTYPE html>
<html>
<head>
	<title>gg</title>
	<meta charset="utf-8">
</head>
<body>
<?php
echo ("Здравствуйте, " . $_GET["userName"]); 
echo ("<hr>");
echo ("Значение скрытого поля hideField равно " .
$_GET["hideField"]); 
?>
</body>
</html>
