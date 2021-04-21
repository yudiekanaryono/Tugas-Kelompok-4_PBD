<?php
function open_connection() {
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project_klmpk4";
	$koneksi = mysqli_connect($hostname,$username,$password,$dbname);
	return $koneksi;
}
?>
