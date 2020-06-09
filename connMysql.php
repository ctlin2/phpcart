<?php 
	//資料庫主機設定
	$db_host = "localhost";
	$db_table = "phpcart";
	$db_username = "root";
	$db_password = "Passw0rd";
	//設定資料連線
    $con=@mysqli_connect($db_host, $db_username, $db_password, $db_table);
	if (mysqli_connect_errno()) die("資料連結失敗！".mysqli_connect_error());
	//連接資料庫
	//if (!@mysqli_select_db($db_table)) die("資料庫選擇失敗！");
	//設定字元集與連線校對
	mysqli_query( $con, "SET NAMES 'utf8'");
?>