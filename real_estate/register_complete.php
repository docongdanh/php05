<?php
include 'connect.php';
//Check submit register
if (isset($_POST["register"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	// var_dump($first_name);
	$sql = "INSERT INTO users (first_name,lastname, username, password)
	VALUES ('$first_name')";
	if ($conn->query($sql)===TRUE); 
				// {
				// 	echo "Register Success";
				// }
}

// if (isset($_POST["register"])) {
// 	$last_name = $_POST["last_name"];
// 	// var_dump($first_name);
// 	$sql = "INSERT INTO users (last_name)
// 	VALUES ('$last_name')";
// 	if ($conn->query($sql)===TRUE);
// 			// {
// 			// 	echo "Register Success";
// 			// }
// }

// $sql = "INSERT INTO users (first_name,last_name,email) 
// VALUES ('luong','hoai canh', 'apple.luong1905@gmail.com') ";


// if($conn->query($sql)===TRUE){
//         echo "<br/> New users created successfully";
//     }else{
//         echo "<br/> Error created successfully". $conn->error;
//     }
//     $conn->close();
//   ?>