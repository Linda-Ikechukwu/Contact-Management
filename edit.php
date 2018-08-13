<?php
include 'connect.php';
if(isset($_GET['id']) && !empty($_GET['id'])){
	$id=$_GET['id'];
$sql="SELECT * FROM register WHERE id = '$id' ";
$query = $conn->query($sql);
if(!$conn->error){
	$result = $query->fetch_assoc();
}else{
	die('Query Failed : '.$conn->error);
}

}

?>
<form action="update.php?id=<?php echo $id;?>" method="POST">
<label>Name</label>
<input type="text" name="name" value="<?php echo $result['conname']; ?>">
<label>Number</label>
<input type="text" name="number" value="<?php echo $result['connumber']; ?>">
<input type="submit" value="Update">
</form>