<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$data = "real_estate";
//creat connection
$conn = new mysqli($servername, $username, $password, $data);
// check connection
if ($conn->connect_error) {
	die("connection failed:".$conn->connect_error);
}
?>