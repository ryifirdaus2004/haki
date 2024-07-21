
<?php
	$host="localhost";
	$user="root";
	$pass="";
	$database="uashaki";
	if (mysqli_connect_errno()) {
	$conn=new mysqli($host,$user,$pass,$database);
	  trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR); 
	}
?>