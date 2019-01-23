<?php 
require('db_connection.php');

$sql = "SELECT * FROM user ORDER BY (uid)DESC";
$sql_run = mysqli_query($conn, $sql);
if(!$sql_run) {
	echo "Failed to show details! ".mysqli_error($conn);
} else {
	//echo "successful!";
	//echo "<table align='center'>";
	while ( $result = mysqli_fetch_assoc($sql_run)) {
		/*echo "<pre>";
		print_r($result);*/
		$uid = $result['uid'];
		$first_name = $result['first_name'];
		$last_name = $result['last_name'];
		$email_id = $result['email_id'];
		echo "<tr name = '$uid'>";
			/*echo "<td>";
				echo $uid;
			echo "</td>";*/

			echo "<td>";
				echo $first_name;
			echo "</td>";

			echo "<td>";
				echo $last_name;
			echo "</td>";

			echo "<td>";
				echo $email_id;
			echo "</td>";
			echo "<input type='hidden' name='$uid' value='$uid'>";
			echo "<td><button type='submit' name='edit' value='$uid'>Edit</button></td>";
            echo "<td><button type='submit' id='$uid' name='delete' value='$uid'>Delete</button></td>";
		echo "</tr>";


	}
	//echo "</table>";

}

 ?>