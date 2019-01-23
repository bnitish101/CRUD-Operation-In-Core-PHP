<?php
$conn = mysqli_connect('localhost', 'root', '', 'cmd_db');
if (!$conn) {
	die("Connection Faild!". mysqli_connect_error());
}