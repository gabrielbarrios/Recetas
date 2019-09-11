<?php
echo("<br>add user");
include_once '../database/connection.php';
include_once '../config/session.php';


$arr = [];
$stmt = $my_Db_Connection->prepare("SELECT * FROM users WHERE id = :userid");
$stmt->bindValue(':userid', $userId);

$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $arr[] = $row;
}
if(!$arr) exit('No rows');
//var_export($arr);


echo("<pre>");
print_r($arr);
echo("</pre>");

$stmt = null;

echo("hello world");
?>