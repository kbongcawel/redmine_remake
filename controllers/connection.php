<?php
//var
$hostname = "172.16.109.156";
$dbname = "redmine2";
$username = "redmine2";
$password = "redmine2";
$db_handle = pg_connect(" host = $hostname dbname = $dbname user = $username  password = $password ");

if(!$db_handle){
	echo "failed";
}else{echo "success";}
?>
