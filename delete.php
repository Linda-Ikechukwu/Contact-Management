<?php
session_start();
include('connect.php');
if(isset($_GET['id']) && !empty($_GET['id'])){
$id=$_GET['id'];
$query2=$conn->prepare("Delete FROM register WHERE id=?");
$query2->bind_param('i',$id);
if($query2->execute()){
	$_SESSION['msg']="contact deleted";
	header("Location: view.php");
}else{
	echo "please check your database";
}
}
else{
	echo "there was an error";
}

?>