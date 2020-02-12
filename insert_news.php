<?php
	// variables for work with DB
	$nameDB = "shcool";// name of DB
	$nameTABLE = "news"; //name of table in DB
	$nameSERVER = "pesochin.sytes.net";// server of DB
	$nameUSER = "shcool";// user of DB
	$passUSER = "37912560_mysql";// password of DB
    // connect with server of DB
	mysql_connect($nameSERVER, $nameUSER, $passUSER) or die(mysql_error());
	mysql_set_charset('utf8');
	// select DB
	mysql_select_db($nameDB) or die(mysql_error());
	$title = $_POST['title'];
	$text = $_POST['text'];
    // update data in DB
    $insert_to_SQL = mysql_query ("INSERT INTO $nameTABLE (news_title, news_text, news_date) VALUES ('". addslashes($title). "', '". addslashes($text). "', NOW())");
	mysql_close(); // close connect
	$redirect = $_SERVER['HTTP_REFERER'];
	@header ("Location: $redirect");
    //@header ("Location: " $_SERVER['HTTP_REFERER']); //return to homepage
	exit;
?>
