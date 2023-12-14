<?php
	$dbname = 'adminn66';
	$host = 'localhost';
	$username = 'root';
	$password = '';

	$conn = mysqli_connect($host,$username,$password,$dbname);

	if(!$conn){
		echo "connection_error".mysqli_error($conn);
	}
?>