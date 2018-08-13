<?php
session_start();
include('connect.php');
if(!empty($_SESSION['success'])){
echo $_SESSION['success']."<br>";	
}
if(!empty($_SESSION['msg'])){
echo $_SESSION['msg']."<br>";	
}
if(!empty($_SESSION['new_msg'])){
echo $_SESSION['new_msg']."<br>";	
}
$query1=$conn->query("SELECT id,conname,connumber FROM register");
if($query1->num_rows<1){
	echo "database empty";
}
else{
	while($rows=$query1->fetch_assoc()){
		$id=$rows['id'];
		$name=$rows['conname'];
		$number=$rows['connumber'];
		echo $name." ".$number." ";
		echo "<a href='delete.php?id=$id'>Delete</a>"; 
		echo " <a href='edit.php?id=$id'>Edit</a><br>"; 
	}
}
$_SESSION['success']="";
$_SESSION['msg']="";
$_SESSION['new_msg']="";
?>