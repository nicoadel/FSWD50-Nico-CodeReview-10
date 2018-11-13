<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
   include_once 'navbar.php';
   ?>
   <div class="upload_form">
   	<form  action="includes/add_book.inc.php" method="POST">
   		<h1>Upload: </h1>
   		<br>
	<input class="form-control" type="text" name="media_title" placeholder="Book name">
	<br>
	<input class="form-control" type="text" name="img_url" placeholder="img_url">
	<br>
	<input class="form-control" type="text" name="ISBN" placeholder="ISBN">
	<br>
	<input class="form-control" type="text" name="description" placeholder="Short Description">
	<br>
	<input class="form-control" type="text" name="publish_date" placeholder="publish date">
	<br>
	<select class="custom-select" name="type">
		<option value="CD">CD</option>
		<option value="BOOK">BOOK</option>
		<option value="DVD">DVD</option>
	</select>
	<br>
	<br>
	<button class="btn btn-info" type="submit" name="submit">Add the book</button>
</form>
   </div>

<?php
    require 'footer.php';
    ?>
</body>
</html>
