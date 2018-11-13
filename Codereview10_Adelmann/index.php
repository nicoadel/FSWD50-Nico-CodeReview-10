<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Library Page" content="">
    <meta name="Adelmann" content="">

    <title>Adelmann Library</title>
  </head>

  <body>

   <?php
   require 'navbar.php';
   ?>
    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4 text-center text-lg-left">Gallery of Books</h1>
      <?php
            if (isset($_SESSION['userId']))
            {
               echo '<p>You are logged in!</p>';
             }
             else
              {
                 echo '<p>You are logged out!</p>';
              }
                  ?>
      <div class="row text-center text-lg-left">
      <?php
              require 'includes/output.inc.php';
             ?>
      </div>
    </div>
    <!-- /.container -->

    <?php
    require 'footer.php';
    ?>
  </body>

</html>
