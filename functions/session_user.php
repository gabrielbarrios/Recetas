<?php
if($_SESSION['logged_in_user_id'])
{
	$userId = $_SESSION['logged_in_user_id'];
	$sessionId = session_id(); //posiblemente usar para tokenid 
	//$seccionActiva = true;
}
else
{
	header('Location: http://recetas.mdbmx.com');
	exit();
}
?>