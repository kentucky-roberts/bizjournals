<?php
$message = "hello from php";
$title = "Home";
$pageSubtitle = "Default Subtitle";
$pageText = "This is some default page text";


/*
//  Get Channel Data
//
 */
$curl2 = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl2, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost:8888/bizjournals/api/channels.json',
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$resp2 = curl_exec($curl2);
// Close request to clear up some resources
curl_close($curl2);
// decode JSON
$c = json_decode($resp2, true);

$embeded = $c;
//var_dump($resp2);






// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 2,
    CURLOPT_URL => 'http://localhost:8888/bizjournals/api/datasets.json',
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
// decode JSON
$datasets = json_decode($resp, true);
var_dump($datasets);
// get the data
$companyName = $datasets['_embedded']['entries'][0]['companyName'];
$description = $datasets['_embedded']['entries'][0]['description'];
$promoText = $datasets['_embedded']['entries'][0]['promoText'];
$logo = $datasets['_embedded']['entries'][0]['logo'];
$image = $datasets['_embedded']['entries'][0]['image'];
$featured = $datasets['_embedded']['entries'][0]['featured'];
$featuredExpires = $datasets['_embedded']['entries'][0]['featuredExpires'];

$meta = $datasets['_embedded']['entries'][0]['_meta'];

// get pagination info to work with AIP
$pageSize = $datasets['page_size'];
$pageCount = $datasets['page_count'];
$totalItems = $datasets['total_items'];
$_links = $datasets['_links'];
$_linkSelf = $datasets['_links']['self']['href'];
$_linkFirst = $datasets['_links']['first']['href'];
$_linkLast = $datasets['_links']['last']['href'];
$_linkNext = $datasets['_links']['next']['href'];
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
    <title>Shell</title>
    <!-- <link href="./lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="src/app/css/app.css" rel="stylesheet">
    <link href="src/app/css/bizjournals.css" rel="stylesheet">
    <link href="src/app/css/hero.css" rel="stylesheet">
    <link href="src/app/css/docs.css" rel="stylesheet">
    <link href="src/app/css/docs-bs.css" rel="stylesheet">


    <style type="text/css">
        .clip_button {
            text-align: center;
            border: 1px solid black;
            background-color: #ccc;
            margin: 10px;
            padding: 10px;
        }
        .clip_button.zeroclipboard-is-hover { background-color: #eee; }
        .clip_button.zeroclipboard-is-active { background-color: #aaa; }
        .zero-clipboard {
            display: block;
        }


    </style>
  </head>
  <body>
    <!-- global header -->
    <?php include('bar-header.php'); ?>
    <?php //include('hero-header.php'); ?>
    <?php include('flex/flex-header-nav.php'); ?>

    <div class="hero-unit">
        <div class="container">
            <div class="row">
                <h1><?php echo $title; ?></h1>
                <h2><?php echo $headerDescription; ?></h2>
            </div>
        </div>
    </div><!--/.hero-unit-->

    <div class="container">
        <div class="btn-group dropup">
          <button type="button" class="btn btn-default">Dropup</button>
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <!-- Dropdown menu links -->
          </ul>
        </div>
    </div>

    <div class="container">
        <?php include('sub-hero-three.php'); ?>
    </div>
    <div class="container">
        <div class="row">
            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
            <button type="button"  id="tooltip" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
        </div>
        <div class="row">
            <!-- HTML to write -->
            <a href="#" data-toggle="tooltip" title="Some tooltip text!">Hover over me</a>
            <!-- Generated markup by the plugin -->
            <div class="tooltip top" role="tooltip">
              <div class="tooltip-arrow"></div>
              <div class="tooltip-inner">
                Some tooltip text!
              </div>
            </div>
        </div>
    </div><!--/.container-->

    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-html-bridge">
                    hello
                </div>
                <div class="tooltip-test"></div>
                <div class="popover-test"></div>
            <div class="docs_container">
                <!-- <div class="zero-clipboard">
                    <button class="btn btn-clipboard" data-clipboard-target="clipboard_pre">Copy</button>
                </div> -->
                <div class="docs_header">
                    header
                </div><!-- /.docs_example -->
                <div class="docs_example">
                    example
                </div><!-- /.docs_example -->
                <div class="docs_code">
                    <pre id="clipboard_pre">
                        <code class="language-html" data-lang="html">
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-justified"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Left<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Middle<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Right<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span></code>
                    </pre>
                </div><!-- /.docs_example -->
            </div>




<hr>





                <h1 class="page-header" id="btn-groups"><a class="anchorjs-link " href="#btn-groups" aria-label="Anchor link for: btn groups" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: inherit; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Button groups</h1>
                <p class="lead">Group a series of buttons together on a single line with the button group. Add on optional JavaScript radio and checkbox style behavior with <a href="../javascript/#buttons">our buttons plugin</a>.</p>

                <h4 id="with-<button>-elements"><a class="anchorjs-link " href="#with-&lt;button&gt;-elements" aria-label="Anchor link for: with <button> elements" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; line-height: inherit; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>With <code>&lt;button&gt;</code> elements</h4>

                <p>To use justified button groups with <code>&lt;button&gt;</code> elements, <strong class="text-danger">you must wrap each button in a button group</strong>. Most browsers don't properly apply our CSS for justification to <code>&lt;button&gt;</code> elements, but since we support button dropdowns, we can work around that.</p>


            <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">Left</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">Middle</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">Right</button>
                </div>
            </div>

            <div class="docs__example" data-example-id="button-tag-button-group-justified">
                <!-- <div class="zero-clipboard">
                    <button class="btn btn-clipboard" data-clipboard-target="clipboard_pre">Copy</button>
                </div> -->

                <div class="docs_header highlight">
                    <pre id="clipboard_pre">
                        <code class="language-html" data-lang="html">
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-justified"</span> <span class="na">role=</span><span class="s">"group"</span> <span class="na">aria-label=</span><span class="s">"..."</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Left<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Middle<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">role=</span><span class="s">"group"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Right<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span></code>
                    </pre>
                </div>
            </div><!--/.docs__example -->





                <!-- dynamic page content // TODO find a way to change content based on url // then filter index page using url channnels->category-groups->category // and so on s.... -->
                <?php  include("src/app/modules/home/home.php"); ?>
            </div>
            <div class="col-xs-6">

                    <h2>Secondary</h2>
                    <div class="flex-container-a">
                      <div class="flex-item-a">flex item 1</div>
                      <div class="flex-item-a">flex item 2</div>
                      <div class="flex-item-a">flex item 3</div>
                    </div>

            </div>
        </div>

        <div class="row">
            <div class="flex-container-b">
              <div class="flex-item-b">flex item 1</div>
              <div class="flex-item-b">flex item 2</div>
              <div class="flex-item-b">flex item 3</div>
              <div class="flex-item-b">flex item 4</div>
              <div class="flex-item-b">flex item 5</div>
              <div class="flex-item-b">flex item 6</div>
              <div class="flex-item-b">flex item 7</div>
              <div class="flex-item-b">flex item 8</div>
              <div class="flex-item-b">flex item 9</div>
            </div>
        </div>


        <h1>Company Name: <?= $companyName; ?></h1>
        <div class="row">
            <div class="col-xs-12">
                <p class="lead"><strong>promoText:</strong> <?= $promoText; ?></p>
                <p><strong>description:</strong> <?= $description; ?></p>
                <p class="well">
                    <?php echo $meta; ?>
                </p>
            </div>
        </div>

        <div class="items-container">

            <a href="#" class="item">
                <div class="item__title">Item Title</div>
                <div class="item__body item__body--middle">
                    In the Middle with you
                </div>
            </a>
            <a href="#" class="item">
                <div class="item__title">Item Title</div>
                <div class="item__body item__body--middle">
                    In the Middle with you
                </div>
            </a>
            <a href="#" class="item">
                <div class="item__title">Item Title</div>
                <div class="item__body item__body--middle">
                    In the Middle with you
                </div>
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="flex-container">
      <div class="flex-item">flex item 1</div>
      <div class="flex-item">flex item 2</div>
      <div class="flex-item">flex item 3</div>
    </div>
</div>


        <div class="container pagination-container">
            <div style="background-color:lightpurple;">
                <strong>total_items:</strong> <?php echo $totalItems; ?><br>
                <strong>page_size:</strong> <?php echo $pageSize; ?><br>
                <strong>totalPages_25ItemsEachPage:</strong> <?php echo $totalPages_25ItemsEachPage; ?>
            </div>
            <ul class="list-inline">
                <li>First: <a href="<?php echo $_linkFirst;?>"><?php echo $_linkFirst;?></a></li>
                <li>Self: <a href="<?php echo $_linkSelf;?>"><?php echo $_linkSelf;?></a></li>
                <li>Next: <a href="<?php echo $_linkNext;?>"><?php echo $_linkNext;?></a></li>
                <li>Last: <a href="<?php echo $_linkLast;?>"><?php echo $_linkLast;?></a></li>
            </ul>
        </div><!--/.container -->

        <?php include("src/app/modules/components/pagination/flex-pagination.php"); ?>

        <div class="container">
            <?php include("src/app/modules/directories/directories-module.php"); ?>
        </div>

        <div class="container">
            <?php include("src/app/modules/forms/index.php"); ?>
        </div><!--/.container -->

        <div class="container">
            <?php include("src/app/modules/lists/list-featured.php"); ?>
        </div><!--/.container -->

        <div class="container">
            <?php include("src/app/modules/tabs/index.php"); ?>
        </div><!--/.container -->

        <div class="container">
            <?php include("src/app/modules/promo/promo-subscription.php"); ?>
        </div><!--/.container -->

        <div class="container">
            <?php include("src/app/modules/promo/promo-add-your-company.php"); ?>
        </div><!--/.container -->

        <div class="container">
            <?php include("src/app/modules/docs/scroll-x-axis/image-overflow-x-axis.php"); ?>
        </div><!--/.container -->

        <div class="container">
            <?php include('src/app/modules/full-screen/panel-demo.php'); ?>
        </div><!--/.container -->





    </div>



    <!-- global footer -->
    <?php // include('bar-pre-footer.php'); ?>
    <?php // include('bar-footer.php'); ?>
    <?php // include('bar-sub-footer.php'); ?>
<!--
    <script src="src/app/lib/require.js" data-main="src/app/js/main"></script>
    <script src="./lib/requirejs/require.js"></script>
    <script src="./lib/underscore/underscore.js"></script>
    <script src="./lib/backbone/backbone.js"></script> -->

    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap-sass/assets/javascripts/bootstrap-sprockets.js"></script>
    <script src="./lib/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
    <script src="./node_modules/request/index.js"></script>
    <script src="./node_modules/resolve/index.js"></script>
    <script src="./node_modules/cheerio/index.js"></script>
    <script src="./node_modules/url-parse/index.js"></script>
    <script src="./node_modules/zeroclipboard/dist/ZeroClipboard.js"></script>
    <script src="./src/app/modules/full-screen/fill-screen.js"></script>
    <!--<script src="./src/app/app.js"></script>
    <script src="./src/app/app.core.js"></script> -->

  </body>
</html>
