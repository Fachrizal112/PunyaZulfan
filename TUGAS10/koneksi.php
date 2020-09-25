<?php
// error_reporting(0);
$conn = mysqli_connect("localhost",'root','','arkademy') ;
if(!$conn){
	echo "Database belum konek";
	exit;
}
