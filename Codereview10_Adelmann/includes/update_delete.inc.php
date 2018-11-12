<?php 
	include_once "dbh.inc.php";

	// initialize variables
	$name = "";
	$image = "";
	$isbn = "";
	$description = "";
	$date = "";
	$type = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$image = $_POST['image'];
		$isbn = $_POST['isbn'];
		$description = $_POST['description'];
		$date = $_POST['date'];
		$type = $_POST['type'];

		mysqli_query($conn, "INSERT INTO media (media_title, media_image,media_ISBN,media_short_description,publish_date,type) VALUES ('$name', '$image','$isbn','$description','$date','$type')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: ../update.php');
	}

	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$image = $_POST['image'];
	$isbn = $_POST['isbn'];
	$description = $_POST['description'];
	$date = $_POST['date'];
	$type = $_POST['type'];

	mysqli_query($conn, "UPDATE media SET media_title='$name', media_image='$image' , media_ISBN='$isbn',media_short_description ='$description',publish_date='$date',type='$type'  WHERE media_id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: ../update.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM media WHERE media_id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index.php');
}
?>