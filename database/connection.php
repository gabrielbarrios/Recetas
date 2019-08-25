<?php
$servername = "mysql.hostinger.mx";//"localhost";//
$username = "u939198264_gabo";
$database = "u939198264_gabo2";
$password = "vh0vhKk2uVVS";
	
$sql = "mysql:host=$servername;dbname=$database;";
//$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$dsn_Options = [
	PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
];
// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try { 
  $my_Db_Connection = new PDO($sql, $username, $password, $dsn_Options);
  echo "Connected successfully";
} catch (PDOException $error) {
  echo 'Connection error: ' . $error->getMessage();
}


