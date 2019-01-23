<?php
session_start();
require('db_connection.php');
echo "get details! <br>";
count($_POST);
echo "<pre>";
print_r($_POST);
echo $first_name = $_POST['first_name'];
echo $last_name = $_POST['last_name'];
echo $email_id = $_POST['email_id'];
echo $_POST['submit'];
/*$sql = "INSERT INTO user(first_name, last_name, email_id) VALUES('$first_name', '$last_name', '$email_id')";
if ($sql_run = mysqli_query($conn, $sql)){
	$_SESSION['message'] = "Details added.";
	header('location: index.php');
} else{
	echo "<br>fail to add details! <br>".mysqli_error($conn);
}*/



 ?>