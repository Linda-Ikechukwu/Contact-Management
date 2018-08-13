<?php
$conn = new mysqli("localhost","root","","contact");
if($conn->connect_error){
	die("Error connecting to database");
}

?>