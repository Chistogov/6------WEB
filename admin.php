<!DOCTYPE html>
<html>
<head>	
	<title>Ремонт компьютеров</title>	
</head>
<body>
	<li>Очистить БД</a></li>
	<form id="input" action="php/bdclear.php" method="get">					
		<label for="alpha">Введите Пароль!</label><br/>
		<input id="alpha" name="Pass" type="text" pattern="^[A-Za-z0-9_]{1,15}$" placeholder="Имя" required> <br/>					
		<input type="submit" name="submit" value="Удалить все записи"><br/>
	</form><br/>
	<form id="input" action="php/showbd.php" method="get">	
		<input type="submit" name="submit" value="Показать таблицу"><br/>
	</form><br/>
</body>
</html>