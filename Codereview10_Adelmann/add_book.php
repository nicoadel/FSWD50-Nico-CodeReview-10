<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/thumbnail-gallery.css" rel="stylesheet">
</head>
<body>
	<?php
   include_once 'navbar.php';
   ?>
   <div class="upload_form">
   	<form  action="includes/signup.inc.php" method="POST">
   		<h1>Upload: </h1>
   		<br>
   		<br>
	<input type="text" name="media_title" placeholder="Book name">
	<br>
	<br>
	<input type="text" name="img_url" placeholder="img_url">
	<br>
	<br>
	<input type="text" name="description" placeholder="Short Description">
	<br>
	<br>
	<input type="text" name="publish_date" placeholder="publish date">
	<br>
	<br>
	<select name="type">
		<option value="CD">CD</option>
		<option value="BOOK">BOOK</option>
		<option value="DVD">DVD</option>
	</select>
	<br>
	<br>
	<button type="submit" name="submit">Add the book</button>
</form>
   </div>

<?php
    include_once 'footer.php';
    ?>
</body>
</html>
