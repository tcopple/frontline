<?php
function start($include = "", $title = "frontline city church") {
  chdir(($_SERVER['DOCUMENT_ROOT']));
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title> <?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/layout.css">
    <link rel="stylesheet" type="text/css" href="/css/global.css">
    <link rel="stylesheet" type="text/css" href="/css/frontline.css">
    <link rel="stylesheet" type="text/css" href="/css/superfish.css">
    <link rel="shortcut icon" href="/images/favicon.ico">
    <script type="text/javascript" src="/js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="/js/jquery.scriptureLink.js"></script>
    <script type="text/javascript" src="/js/superfish.js"></script>
    <script type="text/javascript" src="/js/frontline.js"></script>
    <?php echo $include; ?>
  </head>
  <body>
  <div class="container_16">
  <?php include_once("layouts/header.php"); ?>
  <div id="content">
    <div id="promos_wrapper" class="shadow">
      <div id="promos">
        <a href="/when_and_where/community.php"><img class="promo" src="/images/community.jpg"></img></a>
        <a href="/when_and_where/monthly.php"><img class="promo" src="/images/monthly.jpg"></img></a>
        <a href="/new_here/story.php"><img class="promo" src="/images/story.jpg"></img></a>
      </div>
      <div id="buttons">
        <a href="/when_and_where/weekly.php" class="button">Service Time</a>
        <a href="/standalone/contact.php" class="button">Contact Us</a>
      </div>
    </div>
    <div class="seperator"></div>
<?php
}

function stop() { ?> 
  <div class="clear"></div>
  </div> <!-- closing "content" -->
  <div class="clear" style="height: 5px;"></div>
  <?php include("layouts/footer.php") ?>
  <div class="clear" style="height: 15px;"></div>
  </div> <!-- closing "container_16" -->
  </body>
</html>
<?php } ?>
