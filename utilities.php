<?php
function start($include = "", $title = "frontline city church") {
  chdir(($_SERVER['DOCUMENT_ROOT']));
?>
  <head>
    <title> <?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="/css/global.css" />
    <link rel="stylesheet" type="text/css" href="/css/frontline.css" />
    <link rel="stylesheet" type="text/css" href="/css/superfish.css" />
    <link rel="shortcut icon" href="/images/favicon.ico">
    <script type="text/javascript" src="/js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="/js/superfish.js"></script>
    <script type="text/javascript" src="/js/frontline.js"></script>
    <?php echo $include; ?>
  </head>
  <body>
  <div class="container_16">
  <?php include_once("layouts/header.php"); ?>
  <div id="content">
    <div id="promos_wrapper">
      <div id="promos">
        <img class="promo"></img>
        <img class="promo"></img>
        <img class="promo"></img>
      </div>
    </div>
    <div class="seperator"></div>
<?php
}

function stop() { ?> 
  <div class="clear"></div>
  </div> <!-- closing "content" -->
  <?php include("layouts/footer.php") ?>;
  </div> <!-- closing "container_16" -->
  </body>
<?php } ?>
