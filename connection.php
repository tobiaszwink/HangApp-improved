<?php
$host = "localhost";
$user = "root";
$pass = "root";
$database = "hangapp";
$connection = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());

?>