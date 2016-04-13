<?php
require  'medoo.php';
	$dbname = 'pcmaster';
	$user = 'root';
	$pass = '';
	$table = 'clients';
class basesynch
{
	function new_note($Name, $Email, $Tel, $Date, $Time)
	{
		global $dbname;
		global $user;
		global $pass;
		global $table;
		$database = new medoo(array(
		'database_type' => 'mysql',
		'database_name' => $dbname,
		'server' => 'localhost',
		'username' => $user,
		'password' => $pass));
	
		$database->insert($table, array(
		"Name" => "$Name",
		"Email" => "$Email",
		"Telephone" => "$Tel",
		"Date" => "$Date",
		"Time" => "$Time"));
	}
	
	function clear_base()
	{
		global $dbname;
		global $user;
		global $pass;
		global $table;
		$database = new medoo(array(
		'database_type' => 'mysql',
		'database_name' => $dbname,
		'server' => 'localhost',
		'username' => $user,
		'password' => $pass));
		
		$database->delete($table, array("AND" => array("id[>]" => "1")));
	}
	
	function show_base()
	{
		global $dbname;
		global $user;
		global $pass;
		global $table;
		$database = new medoo(array(
		'database_type' => 'mysql',
		'database_name' => $dbname,
		'server' => 'localhost',
		'username' => $user,
		'password' => $pass));
		
		return $datas = $database->select($table, array(
		"Name",
		"Email",
		"Telephone",
		"Date",
		"Time"));
	}
}
?>