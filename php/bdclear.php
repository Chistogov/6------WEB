<?php
header("Content-Type: text/html; charset=utf-8"); 
require  'fw.php';
if ($_GET["Pass"] == 'Maxim')
{
	$connect = new basesynch();	
	$connect->clear_base();
	echo 'База данных очищена!'; 
}
else 
echo'Неверный пароль!'; 
//back();
?>

<?php
function back()
{
	$back = $_SERVER['HTTP_REFERER']; 
	echo "
	<html>
	  <head>
	   <meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
	  </head>
	</html>";
}
?>