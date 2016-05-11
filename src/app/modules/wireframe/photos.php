<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Photos</title>

    <!-- Bootstrap -->
    <link href="../../../lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <h1><?php $title = "Photos"; print($title); ?></h1>

          <?php include('../layout/bar-header.php'); ?>
          <?php include('../layout/bar-subheader.php'); ?>

        </div><!--/.col-lg-12 -->
      </div><!--/.row -->
    </div><!--/.container -->

    <?php include('../layout/bar-pre-footer.php'); ?>
    <?php include('../layout/bar-footer.php'); ?>
    <?php include('../layout/bar-sub-footer.php'); ?>


    <script src="../../../lib/jquery/dist/jquery.min.js"></script>
    <script src="../../../lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../app.module.js"></script>
    <script src="../app.config.js"></script>
    <script src="../app.core.js"></script>
  </body>
</html>
