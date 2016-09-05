<?php
$message = "hello from php";
$title = "Home";
$pageSubtitle = "Default Subtitle";
$pageText = "This is some default page text";
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost:8888/bizjournals/api/datasets.json',
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
// decode JSON
$json = json_decode($resp, true);
// get the data
$companyName = $json['_embedded']['entries'][0]['companyName'];
$description = $json['_embedded']['entries'][0]['description'];
$promoText = $json['_embedded']['entries'][0]['promoText'];
$logo = $json['_embedded']['entries'][0]['logo'];
$image = $json['_embedded']['entries'][0]['image'];
$featured = $json['_embedded']['entries'][0]['featured'];
$featuredExpires = $json['_embedded']['entries'][0]['featuredExpires'];

$meta = $json['_embedded']['entries'][0]['_meta'];

// get pagination info to work with AIP
$pageSize = $json['page_size'];
$pageCount = $json['page_count'];
$totalItems = $json['total_items'];
$_links = $json['_links'];
$_linkSelf = $json['_links']['self']['href'];
$_linkFirst = $json['_links']['first']['href'];
$_linkLast = $json['_links']['last']['href'];
$_linkNext = $json['_links']['next']['href'];
$totalPages_25ItemsEachPage = 4920;



$sponsoredByCount = 3;
$sponsoredByLabel = '';
$sponsoredByPosition = 'logo';
$title = 'San Francisco Business Meeting Guide';
$headerDescription = 'Your comprehensive guide to the people, places and services essential to organizing a successful meeting or event in the Bay Area';


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Flexbox</title>
    <!-- <link href="./lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="src/app/css/app.css" rel="stylesheet">
    <link href="src/app/css/bizjournals.css" rel="stylesheet">
    <style>
        .container {
            display: flex;
            align-items: stretch;
        }

    </style>
  </head>
  <body>
    <?php include('bar-header.php'); ?>
    <?php //include('hero-header.php'); ?>




    <header><!-- header stuff --></header>
    <div class="container">
        <section class="main"></section>
        <aside class="sidebar"></aside>
    </div>
    <footer><!-- footer stuff --></footer>











    <!--
    <script src="src/app/lib/require.js" data-main="src/app/js/main"></script>
    <script src="./lib/requirejs/require.js"></script>
    <script src="./lib/underscore/underscore.js"></script>
    <script src="./lib/backbone/backbone.js"></script>
    -->
    <script src="./lib/jquery/dist/jquery.min.js"></script>
    <script src="./lib/bootstrap/dist/js/bootstrap.js"></script>
    <script src="./lib/bootstrap-sass/assets/javascripts/bootstrap-sprockets.js"></script>
    <script src="./lib/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
    <!--<script src="./src/app/app.js"></script>
    <script src="./src/app/app.core.js"></script> -->
  </body>
</html>