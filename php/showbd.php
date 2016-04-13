<?php
header("Content-Type: text/html; charset=utf-8"); 
require  'fw.php';

	$connect = new basesynch();	
	$select = $connect->show_base();
print_r ($select);
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