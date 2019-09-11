<?php
	$titlePage = "Login";
	$jsIncludes .= "<script src='../js/jquery.validate.js' type='text/javascript'></script>";
	$jsIncludes .= "<script src='../js/form.js' type='text/javascript'></script>";
	
	

	include_once '../global/header.php';
	
	include_once '../library/library_sql.php';
	include_once '../functions/sql_user.php';
	
	$nickname = "sara";
	$password = "sara";
	$cryptcode123 = "sara";
	
	$passwordToken123 = "xi1777aqqq8cz777aqqqqwec777aqqq";
	$password123 = crypt($passwordToken123, "$cryptcode123");
	echo("<br>crypt = $password123 <br>");
	
	$passwordArr2 = encryptPass($nickname, $password);
	echo("encrypt vars <pre>");
	print_r($passwordArr2);
	echo("</pre>");
	
	echo("<br> $passwordToken he4 = $password = he5");
	
?>
<?php include_once '../forms/login.php'; ?>
<?php include_once '../global/footer.php'; ?>