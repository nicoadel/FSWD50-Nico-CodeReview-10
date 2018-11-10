<?php  
include 'dbh.inc.php';

$id=$_GET['media_id'];

function delete($conn,$id) {
	global $conn;
	$sql = "DELETE FROM media WHERE media_id=".$id.";";
	$result=mysqli_query($conn,$sql);
}

deleteRecord($conn,$id);
die;


?>

