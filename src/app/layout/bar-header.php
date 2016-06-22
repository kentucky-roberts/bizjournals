<?php
  $site_url = "http://localhost:8888/bizjournals/src/app";
  $primary_logo = "/img/logos/charlotte-logo.png";
?>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="<?= $site_url ?><?= $primary_logo ?>" class="top-bar-logo" alt="logo">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="./home.php">Home <span class="sr-only">(current)</span></a></li> -->
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="./index.php">Index</a></li>
            <li><a href="./home.php">Home</a></li>
            <li><a href="./news.php">News</a></li>
            <li><a href="./blog.php">Blog</a></li>
            <li><a href="./movies.php">Movies</a></li>
            <li><a href="./photos.php">Photos</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="./login.php">Login</a></li>
            <li><a href="./register.php">Register</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>