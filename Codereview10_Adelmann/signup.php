<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
</head>
<body>
	<?php include_once "navbar.php"; ?>

<main class="login_main">
	<div class="wrapper-main">
		<section class="section-default">
			<h1>Signup</h1>
			<form action="includes/signup.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username">
				<input type="text" name="mail" placeholder="E-Mail">
				<input type="password" name="pwd" placeholder="Password">
				<input type="password" name="pwd-repeat" placeholder="Repeat Password">
				<button type="submit" name="signup-submit">Signup</button>
			</form>
		</section>
	</div>
</main>


<?php include_once "footer.php"; ?>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>