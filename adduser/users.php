<?php
echo("<br>add user");
include_once '../database/connection.php';

echo("<br>$servername");

$arr = [];
$stmt = $my_Db_Connection->prepare("SELECT * FROM users WHERE id <= ?");
$stmt->execute([10]);
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