<?php
date_default_timezone_set("Asia/Jakarta");
$db_host = "192.168.xx.xx";
$db_user = "xx";
$db_pass = "xx";
$db_name = "xx";
 
$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//mysqli_select_db($db_name,$koneksi);
global $koneksi;
 
if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>
