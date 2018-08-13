<?php session_start(); ?>
<form action="process.php" method="POST">
<?php 
if(!empty($_SESSION['error'])){
echo $_SESSION['error'];
}
else{

	}
 ?>

<label>Name</label>
<input type="text" name="name">
<label>Number</label>
<input type="text" name="number">
<input type="submit" value="Save">
</form>
<?php
$_SESSION['error']="";
?>