<?php


       /* Veritabanı Bağlantısı başı */
$dbtype     = "mysql";
$servername = "localhost";
$dbname     = "dbname";
$dbusername = "dbuser";
$dbpassword = "dbpass";

	$conn = new PDO("$dbtype:host=$servername;dbname=$dbname", $dbusername ,$dbpassword);
	/* Veritabanı Bağlantısı sonu */
?>
