<?php
session_start();
include('connect.php');
if(isset($_GET['id']) && !empty($_GET['id'])){
$id=$_GET['id'];
$query3=$conn->prepare("UPDATE register SET conname=?,connumber=? WHERE id=?");
$query3->bind_param('ssi',$name,$number,$id);
$name=$_POST['name'];
$number=$_POST['number'];
if($query3->execute()){
	$_SESSION['new_msg']="contact updated";
	header("Location: view.php");
}else{
	echo "contact not updated";
}
}
else{
	echo "Uninitialised Identity";
}
?>