<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cardelmann - Car-Rental</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">

  </head>

  <body>
  <?










?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Cardelmann - Your most trusted Car-Rental service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8">
          <img class="img-fluid rounded" src="img/rangerover.jpeg" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <h1>Cardelmann -</h1>
          <p>Being on the market for several years, I have a specific knowledge of what our customers are looking for when renting a car. Look no further and give us a quick call to find a quick solution for your issue ;-) </p>
          <a class="btn btn-primary btn-lg" href="#">Email us!</a>
        </div>
        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->

      <!-- Call to Action Well -->
      <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0">Based on Customer happiness these are their favorite cars to rent!</p>
        </div>
      </div>
<?php    
$cars = array(
"land_rover" => array
(
"model" => "Range Rover",
"price" => 30,
"information" => "A powerful yet familyfriendly Car",
"kilometres" => 2232,
"image" => "https://3907a206863254a8df74-6c964fe6420f033f39c4a320d459b17a.ssl.cf1.rackcdn.com/thumbnails/SALWR2VF6GA546341/19f032e1729149cdae05efdbaedc8030.jpg"
),
"mercedes" => array
(
"model" => "G Class",
"price" => 35,
"information" => "You will be the king of the road!",
"kilometres" => 4232,
"image" => "https://www.welt.de/img/motor/mobile150132927/8692501367-ci102l-w1024/Henryk-M-Broder-Berlin-2015-Copyright-w.jpg"
),
"bmw" => array
(
"model" => "X5 M",
"price" => 40,
"information" => "Big like a Range Rover but much more power",
"kilometres" => 2621,
"image" => "https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/images/media/694996/2017-bmw-x5-m-exterior-review-car-and-driver-photo-695005-s-original.jpg"
)
);
 ?>
      <!-- Content Row -->
      <div class="row">
            <?php
              foreach( $cars as $cartype => $value )
          {
              echo "<div class='col-md-4 mb-4'>";
              echo "<div class='card h-100'>";
              echo "<div class='card-body'>";
              echo "<h2 class='card-title'>" . $cars[$cartype]['model'] . "</h2>";
              echo "<p class='card-text'>". $cars[$cartype]['information'] . "</p>";
              echo "<p class='card-text'>It only costs: ". $cars[$cartype]['price'] . " euros/day </p>";
              echo "<img class='img_car' src='". $cars[$cartype]['image'] . "' alt=''>";
              echo "</div>";
              echo "<div class='card-footer'>";
              echo "<a href='#' class='btn btn-primary'>Buy now</a>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
          }
             ?>
        <!-- /.col-md-4 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
