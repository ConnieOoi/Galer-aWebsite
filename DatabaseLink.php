<?php

$conn = mysqli_connect("localhost", "root", "", "useraccount");

if(!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
?>
