<?php
	include_once 'dbh.inc.php';
	include_once 'userclass.inc.php';



	$media = new Media($_POST['media_title'],$_POST['img_url'],$_POST['ISBN'],$_POST['description'],$_POST['publish_date'],$_POST['type']);
	$sql = "INSERT INTO media(media_title, media_image, media_ISBN, media_short_description, publish_date, type) VALUES ('$media->media_title', '$media->media_image', '$media->media_isbn', '$media->media_short_description','$media->media_publish_date', '$media->media_type');";
	mysqli_query($conn, $sql);
	header("Location: ../index.php?book_added=success");






?>