<?php
//var
$hostname = "xxxxxxxxx";
$dbname = "xxxxxxxx";
$username = "xxxxxxxx";
$password = "xxxxxxxx";
$db_handle = pg_connect(" host = $hostname dbname = $dbname user = $username  password = $password ");

if(!$db_handle){
	echo "failed";
}else{echo "success";}
?>
