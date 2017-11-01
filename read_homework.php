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
    // read data from DB
	$read_from_SQL = mysql_query("SELECT * FROM $nameTABLE");
	$j=0;
	echo	"<head>
				<meta http-equiv='Content-Type' content='text/html\; charset=utf-8'>
				<title>Домашні завдання</title>
				<link href='style.css' rel='stylesheet'>
			</head>";
	echo "<table>
			<caption>Домашні завдання</caption> 
			<tr>								
				<th colspan='2'>Понеділок</th>
				<th colspan='2'>Вівторок</th>
				<th colspan='2'>Середа</th>
				<th colspan='2'>Четвер</th>
				<th colspan='2'>П'ятниця</th>
				</tr>";
    while ($row=mysql_fetch_row($read_from_SQL)){
			echo	"<tr>";
		for ($i=1; $i<count($row); $i++) {
				$homework[i][j]=$row[$i];
				echo	"<td>".$homework[i][j]."</td>";
		}
		echo 	"</tr>";
		$j++;
	}
	echo	"</table>";
    // close connect
	mysql_close();
	echo 	"<a href='read_news.php'>До новин</a><br>";
	echo 	"<a href='index.html'>До розкладу занять</a><br>";
	echo	"<a href='input.html'>Внести домашні завдання</a><br>";
	echo	"<a href='input_news.html'>Внести новини</a>";

?>
