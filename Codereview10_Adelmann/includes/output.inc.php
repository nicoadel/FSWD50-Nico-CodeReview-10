<?php 
include_once 'dbh.inc.php';
$sql= "SELECT *FROM media ";
$result = mysqli_query($conn,$sql);

$media = $result->fetch_all(MYSQLI_ASSOC);

   foreach( $media as $key)
          {
              echo "<div class='col-md-4 mb-4'>";
              echo "<div class='card h-100'>";
              echo "<div class='card-body'>";
              echo "<h2 class='card-title'>" . $key['media_title'] . "</h2>";
              echo "<h4 class='card-text'>" . $key['type'] . "</h2>";
              echo "<p class='card-text'>". $key['media_short_description'] . "</p>";
              echo "<p class='card-text'>Publish Date: ". $key['publish_date'] . " euros/day </p>";
              echo "<img class='img_book' src='". $key['media_image'] . "' alt=''>";
              echo "</div>";
              echo "<div class='card-footer'>";
              echo "<a href='#' class='btn btn-primary'>Buy now</a>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
          }
 ?>