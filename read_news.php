<?php
	// variables for work with DB
	$nameDB = "shcool";// name of DB
	$nameTABLE = "news"; //name of table in DB
	$nameSERVER = "pesochin.ddns.net";// server of DB
	$nameUSER = "shcool";// user of DB
	$passUSER = "37912560_mysql";// password of DB
    // connect with server of DB
	mysql_connect($nameSERVER, $nameUSER, $passUSER) or die(mysql_error());
	mysql_set_charset('utf8');
	// select DB
	mysql_select_db($nameDB) or die(mysql_error());
    // read data from DB
	$read_from_SQL = mysql_query("SELECT * FROM $nameTABLE ORDER BY news_date DESC");
    if (!mysql_error()) {
    // Цикл, вынимающий строку как массив с числовым индексом
        while ($row = mysql_fetch_row($read_from_SQL)) {
          print("<tr><td><h3>". $row[1]. "</h3>");
          print("<font size=-1>". $row[2]. "</font>");
          print("<p align=justify>". $row[0]. "</p>");
          };
        }
    /* в случае ошибки БД программа выводит сообщение сервера (конечно, можно обойтись 
    без такой проверки, но тогда пользователю посыплются ругательства PHP). */
    else {
      print ("Ошибка БД в запросе "$request". MySQL пишет ". mysql_error());
    };
    /* если дальше предусмотрено выполнение каких-либо операций, лучше всего сразу 
    очистить память */
    //mysql_free_result ($result);
    // close connect
	mysql_close();
	echo 	"<a href='index.html'>До розкладу занять</a><br>";
    echo    "<a href='read_homework.php'>До домашніх завдань</a><br>";
	echo	"<a href='input.html'>Внести домашні завдання</a>"<br>;
    echo	"<a href='input_news.html'>Внести новини</a>";
?>
