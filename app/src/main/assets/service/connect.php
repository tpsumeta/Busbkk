<?php

$host="localhost";
$user_name="itthaila_game";
$pass_word="gamesdu";
$db="itthaila_bus";

mysql_connect( $host,$user_name,$pass_word) or die ("ติดต่อกับฐานข้อมูล Mysql ไม่ได้ ");
mysql_select_db($db) or die("เลือกฐานข้อมูลไม่ได้"); 
mysql_select_db("$db"); 
mysql_query( "SET NAMES UTF8" );// ตั่งค่าให้ อ่านแบบ utf


?> 

