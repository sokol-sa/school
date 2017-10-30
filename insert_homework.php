<?php
	// variables for work with DB
	$nameDB = "shcool";// name of DB
	$nameTABLE = "homework"; //name of table in DB
	$nameSERVER = "pesochin.ddns.net";// server of DB
	$nameUSER = "shcool";// user of DB
	$passUSER = "37912560_mysql";// password of DB
    // connect with server of DB
	mysql_connect($nameSERVER, $nameUSER, $passUSER) or die(mysql_error());
	mysql_set_charset('utf8');
	// select DB
	mysql_select_db($nameDB) or die(mysql_error());
	$day = $_POST['day'];
    // update data in DB
    $insert_to_SQL = mysql_query("UPDATE $nameTABLE SET $day='".$_POST['work']."' WHERE lesson='".$_POST['lesson']."'");
	mysql_close(); // close connect
	$redirect = $_SERVER['HTTP_REFERER'];
	@header ("Location: $redirect");
    //@header ("Location: " $_SERVER['HTTP_REFERER']); //return to homepage
	exit;
?>