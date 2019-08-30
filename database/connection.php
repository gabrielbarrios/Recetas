<?php
include_once '../config/database.php';
	
$sql = "mysql:host=$servername;dbname=$database;";
//$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$dsn_Options = [
	PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
];
// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try { 
  $my_Db_Connection = new PDO($sql, $bdusername, $bdpassword, $dsn_Options);
  $arrayResult["resultUser"]["messageConnectionDb"] = "Connected successfully";
  //$arrayResult = ["arr"]["messageConnectionDb"] = "Connected successfully";
  //echo json_encode(array("connectionDb"=>"Connected successfully"));
} catch (PDOException $error) { 
	$arrayResult["resultUser"]["messageConnectionDb"] = 'Connection error: ' . $error->getMessage();
	//$arrayResult = ["arr"]["messageConnectionDb"] = "Connection error:";
  //echo json_encode(array("connectionDb"=>'Connection error: ' . $error->getMessage()));
}


