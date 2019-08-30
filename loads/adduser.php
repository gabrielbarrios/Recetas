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

$existUser = checkExistuser($userVar, $my_Db_Connection);

//echo("hello world");

/*
$arrayResult = array(
    "multi" => array(
         "dimensional" => "foo"
    )
);
*/
/*
echo("<pre>");
	print_r($arrayResult);
echo("</pre>");
*/
/*
$arrayResult = array(
	"resultUser" => array(
		"success" => true,
		"messageQuery" => "hello world"
	)
);
*/


if(!$existUser["username"] && !$existUser["email"])
{
	$messageQuery = addUser($userVar, $my_Db_Connection);
	if($messageQuery)
		$arrayResult["resultUser"]["success"] = "Success";
	else
		$arrayResult["resultUser"]["success"] = "Fail";
}
else{
	if($existUser["username"])
		$messageQuery .= "<p>EL usuario ya existe</p>";
	if($existUser["email"])
		$messageQuery .= "<p>EL email ya existe</p>";
	
}
$arrayResult["resultUser"]["messageQuery"] = "$messageQuery";

//$arrayResult = ["arr"]["messageQuery"] = $messageQuery;
//echo json_encode(array("messageQuery"=>$messageQuery));
//return $messageQuery;
	
	echo json_encode($arrayResult);
?>