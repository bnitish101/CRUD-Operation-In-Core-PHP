<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Details</title>
    <style>
        label {
          display: inline-block;
          width: 240px;
          text-align: left;
          //border: solid;
         
        }​
        h1 {
            display: inline-block;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            border:1px solid black;
            margin-top: 20px;
        }
        table td, th{
            padding: 10px;
        }
        table th{
            border: 1px solid black;
        }
    </style>
</head>
<body>

	<table align="center">
        <tr>
            <th colspan="2" align="center">
                <h1 >Get User's Details!</h1>
            </th>
        </tr>
    
	   <form name= "get_details" action="action.php" method="POST" align ="middle">
    
        <tr>
    		<td>
                <label for="first_name">First Name</label>
            </td>
            <td>
    		  <input type="text" name="first_name" id="first_name" placeholder="Enter First Name" size="" maxlength="50" required>
            </td>
        </tr>
        <tr>
            <td>
        		<label for="last_name">Last Name</label>
            </td>
            <td>
        		<input type="text" name="last_name" id="last_name" placeholder="Enter Last Name" required>
            </td>
        <tr>
            <td>
        		<label for="email_id">Email</label>
            </td>
            <td>
        		<input type="email_id" name="email_id" id="email_id" placeholder="Enter Email" required>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <input name="submit" type="submit" value="Submit">
            </td>
        </tr>
        </form>	
    </table>

    <div align="center">
        <p>
            <?php if(isset( $_SESSION['message'])) echo $_SESSION['message']; 
                unset($_SESSION['message']);
            ?>
        </p>
    </div>
    
    <table align="center">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email ID</th>
            <th colspan="2">Action</th>
        </tr>
        <form action="action.php" method="POST">
            <?php include('show_details.php'); ?>
        </form>
    </table>
</body>
</html>