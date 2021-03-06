<?php
function start($include = "", $title = "city church") {
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
    <link rel="stylesheet" type="text/css" href="/css/dropdown.css">
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Shanti&v2' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="/js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui-1.8.11.custom.min.js"></script>
    <script type="text/javascript" src="/js/jquery.scriptureLink.js"></script>
    <script type="text/javascript" src="/js/jquery.jgfeed.js"></script>
    <script type="text/javascript" src="/js/frontline.js"></script>
    <script type="text/javascript" src="/js/frontline.dropdown.js"></script>
    <?php echo $include; ?>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-22936300-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>
  <body>
  <div class="container_16">
  <?php include_once("layouts/header.php"); ?>
  <div class="grid_16" id="content">
    <div id="promos_wrapper" class="grid_4 alpha">
      <div id="promos">
        <div class="promo"><a href="/when_and_where/community.php"><img src="/images/promo_groups.png"></img></a></div>
        <div class="promo"><a href="/when_and_where/weekly.php"><img src="/images/promo_gatherings.png"></img></a></div>
        <div class="promo"><a href="/new_here/story.php"><img src="/images/promo_story.png"></img></a></div>
      </div>
      <div id="buttons">
        <a href="/when_and_where/weekly.php" class="button">Service Time</a>
        <a href="/standalone/contact.php" class="button">Contact Us</a>
      </div>
    </div>
<?php
}

function stop() { ?>
  <div class="clear" style="height: 5px;"></div>
  <?php include("layouts/footer.php") ?>
  <div class="clear" style="height: 15px;"></div>
  </div> <!-- closing "container_16" -->
  </body>
</html>
<?php } ?>
