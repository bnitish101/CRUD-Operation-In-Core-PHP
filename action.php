<?php 
session_start();
require('db_connection.php');
if(isset($_POST['submit'])) {
	//echo "ok";
echo $first_name = $_POST['first_name'];
echo $last_name = $_POST['last_name'];
echo $email_id = $_POST['email_id'];

$sql = "INSERT INTO user(first_name, last_name, email_id) VALUES('$first_name', '$last_name', '$email_id')";
if ($sql_run = mysqli_query($conn, $sql)){
	$_SESSION['message'] = "Details added.";
	unset ($_POST['first_name']);
	unset($_POST['last_name']);
	unset($_POST['email_id']);
	header('location: index.php');
} else{
	echo "<br>fail to add details! <br>".mysqli_error($conn);
}
} else if (isset($_POST['edit'])) {
	echo "here user id is : ".$_POST['edit'];
	//echo "<pre>";
	//print_r($_POST);
	$uid = $_POST['edit'];
	$_SESSION['uid'] = $uid;
	$sql = "SELECT first_name, last_name, email_id FROM user WHERE uid = $uid";
	if ($sql_run = mysqli_query($conn, $sql)) {
		//echo "OK";
		//print_r ($result = mysqli_fetch_assoc($sql_run));
		$result = mysqli_fetch_assoc($sql_run);
		$_SESSION['action'] = 'edit';
		$_SESSION['first_name'] = $result['first_name'];
		$_SESSION['last_name'] = $result['last_name'];
		$_SESSION['email_id'] = $result['email_id'];
		/*echo $_SESSION['first_name'];
		echo $_SESSION['last_name'];
		echo $_SESSION['email_id'];*/
		header('location:update_details.php');

	}

} else if (isset($_POST['delete'])) {
	echo "here user id is : ". $_POST['delete']."<br>";
	//echo "<pre>";
	//print_r($_POST);
	$uid = $_POST['delete'];
	$sql = "DELETE FROM user WHERE uid=$uid";
	if ($sql_run = mysqli_query($conn, $sql)) {
		$_SESSION['message']= "Record Deleted Successfully!";
		header('location: index.php');
	} else {
	echo "stuffed!".mysqli_error($conn);
}

} else {
	echo "stuffed!".mysqli_error($conn);
}

?>