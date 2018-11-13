<?php
//fetch.inc.php
require "dbh.inc.php";
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM media 
  WHERE media_title LIKE '%".$search."%'
  OR media_image LIKE '%".$search."%' 
  OR media_ISBN LIKE '%".$search."%' 
  OR media_short_description LIKE '%".$search."%' 
  OR publish_date LIKE '%".$search."%'
  OR type LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM media ORDER BY media_id
 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
  $output .= "
<div class='col-md-4 mb-4'>
               <div class='card h-100'>
               <div class='card-body'>
               <h2 class='card-title'>" . $row['media_title'] . "</h2>
               <h4 class='card-text'>" . $row['type'] . "</h2>
               <p class='card-text'>". $row['media_short_description'] . "</p>
               <p class='card-text'>Publish Date: ". $row['publish_date'] . "</p>
               <img class='img_book' src='". $row['media_image'] . "' alt=''>
               </div>
               <div class='card-footer'>
               <a href='#' class='btn btn-primary'>Buy now</a>
               </div>
               </div>
               </div>
  ";
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
?>