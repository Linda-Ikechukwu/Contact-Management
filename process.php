<?php
session_start();
include('connect.php');
if(empty($_POST['name']) || empty($_POST['number'])){
$_SESSION['error']="some fields were left blank";
header('Location: linda.php');
}
else{
	function Process($input){
	$input=trim($input);
	$input=htmlspecialchars($input);
	$input=stripslashes($input);
	return $input;
	}
	$id;
$query=$conn->prepare("INSERT INTO register(id,conname,connumber) VALUES(?,?,?)");
$query->bind_param('iss',$id,$conname,$connumber);
$conname=Process($_POST['name']);
$connumber=Process($_POST['number']);
if($query->execute()){
	$_SESSION['success']="Registration was succesful";
	header("Location:view.php");
}
else{
	echo "was not succesful for some reasons";
}
}
?>