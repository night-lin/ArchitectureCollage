<?php
	$host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "architecture";
	$timezone = "Asia/Shanghai";

	$mysqli = new  mysqli($host, $db_user, $db_pass,$db_name);
	//mysql_query("SET names UTF8");
	header("Content-Type: text/html; charset=utf-8");
	

?>