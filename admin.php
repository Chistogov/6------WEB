<!DOCTYPE html>
<html>
<head>	
	<title>������ �����������</title>	
</head>
<body>
	<li>�������� ��</a></li>
	<form id="input" action="php/bdclear.php" method="get">					
		<label for="alpha">������� ������!</label><br/>
		<input id="alpha" name="Pass" type="text" pattern="^[A-Za-z0-9_]{1,15}$" placeholder="���" required> <br/>					
		<input type="submit" name="submit" value="������� ��� ������"><br/>
	</form><br/>
	<form id="input" action="php/showbd.php" method="get">	
		<input type="submit" name="submit" value="�������� �������"><br/>
	</form><br/>
</body>
</html>