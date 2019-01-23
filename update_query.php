<?php  
session_start();
require('db_connection.php');

//print_r($_POST);

$uid = $_SESSION['uid'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_id = $_POST['email_id'];

$sql = "UPDATE user SET first_name = '$first_name', last_name= '$last_name', email_id= '$email_id' WHERE uid= $uid";
$sql_run = mysqli_query($conn, $sql);
if ($sql_run) {
	$_SESSION['message'] = "User Details Updated.";
	unset($_SESSION['uid']);
	unset($_SESSION['first_name']);
	unset($_SESSION['last_name']);
	unset($_SESSION['email_id']);
	header('location:index.php');
} else {
	echo "Not UPDATE! ".mysqli_error($conn);
}
/*
$uid = $_SESSION['uid'];
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$email_id = $_SESSION['email_id'];


$sql = "UPDATE user SET first_name = '$first_name', last_name= '$last_name', email_id= '$email_id' WHERE uid= $uid";
$sql_run = mysqli_query($conn, $sql);
if ($sql_run) {
	$_SESSION['message'] = "User Details Updated.";
	unset($_SESSION['uid']);
	unset($_SESSION['first_name']);
	unset($_SESSION['last_name']);
	unset($_SESSION['email_id']);
	header('location:index.php');
} else {
	echo "Not UPDATE! ".mysqli_error($conn);
}
*/

?>