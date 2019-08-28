<?php
include_once '../database/connection.php';
include_once '../functions/sql_user.php';
$nickname = $_REQUEST["nickname"];
$loginpass = $_REQUEST["loginpass"];
$firstname = $_REQUEST["firstname"];
$lastname = $_REQUEST["lastname"];
$email = $_REQUEST["email"];

$actualDatetime = date("Y-m-d H:i:s");
$userVar = [
    "id" => null,
    "username" => "$nickname",
    "name" => "$firstname",
    "lastname" => "$lastname",
    "email" => "$email",
    "loginpassword" => "$loginpass",
    "created_at" => "$actualDatetime",
    "status" => "1",
    "kind" => "1"
];

$useradded = addUser($userVar, $my_Db_Connection);
if($useradded)
	echo("true");
else
	echo("false");
?>