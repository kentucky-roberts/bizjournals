
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Shell</title>
    <link href="./lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="src/app/css/app.css" rel="stylesheet">
  </head>
  <body>
    <?php include('bar-header.php'); ?>
    <?php include('bar-subheader.php'); ?>
    <?php include('masthead.php'); ?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <h1><?php $title = "Shell"; print($title); ?></h1>
          <?php include_once("../modules/home/home.php"); ?>


        </div><!--/.col-lg-12 -->
      </div><!--/.row -->
    </div><!--/.container -->

    <?php include('bar-pre-footer.php'); ?>
    <?php include('bar-footer.php'); ?>
    <?php include('bar-sub-footer.php'); ?>

    <script src="src/app/js/require.js" data-main="src/app/js/main"></script>
<!--
    <script src="./lib/requirejs/require.js"></script>
    <script src="./lib/underscore/underscore.js"></script>
    <script src="./lib/backbone/backbone.js"></script>

    <script src="./lib/jquery/dist/jquery.min.js"></script>
    <script src="./lib/bootstrap/dist/js/bootstrap.js"></script>
    <script src="./lib/bootstrap-sass/assets/javascripts/bootstrap-sprockets.js"></script>
    <script src="./lib/bootstrap-sass/assets/javascripts/bootstrap.js"></script>


    <script src="./src/app/app.js"></script>
    <script src="./src/app/app.core.js"></script> -->
  </body>
</html>
