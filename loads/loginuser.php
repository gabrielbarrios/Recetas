<?php
include_once '../database/connection.php';
include_once '../library/library_sql.php';
include_once '../functions/sql_user.php';
$nickname = $_REQUEST["nickname"];
$loginpass = $_REQUEST["loginpass"];
/*
$firstname = $_REQUEST["firstname"];
$lastname = $_REQUEST["lastname"];
$email = $_REQUEST["email"];
*/
$actualDatetime = date("Y-m-d H:i:s");
$loginVar = [
    "username" => "$nickname",
    "loginpassword" => "$loginpass",
];

/*
echo("loginvars = <pre>");
print_r($loginVar);
echo("</pre>");
*/

$existUser = loginUser($loginVar, $my_Db_Connection);

/*
echo("<br>existUser = <pre>");
print_r($existUser);
echo("</pre>");
*/


if($existUser["result"])
{
	$userToken = $existUser["token"];
	$_SESSION['logged_in_user_id'] = $existUser['id'];
	$arrayResult["resultUser"]["success"] = "Usuario logeado";
	$messageQuery = "Usuario logeado";
}
else
{
	$messageQuery .= "<p>User o password incorrecto</p>";	
}
$arrayResult["resultUser"]["messageQuery"] = "$messageQuery";

//$arrayResult = ["arr"]["messageQuery"] = $messageQuery;
//echo json_encode(array("messageQuery"=>$messageQuery));
//return $messageQuery;
	
	echo json_encode($arrayResult);
?>