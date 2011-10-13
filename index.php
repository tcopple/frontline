<?php
  include_once("utilities.php");
  start(
     "<script type=\"text/javascript\" src=\"http://www.google.com/jsapi\"></script>
      <script type=\"text/javascript\" src=\"js/google_calendar.js\"></script>
      <script type=\"text/javascript\" src=\"js/slideshow.js\"></script>"
  );
?>
  <div id="main" class="shadow ">
    <iframe src="http://player.vimeo.com/video/29271942?title=0&amp;byline=0&amp;portrait=0" width="700" height="392" frameborder="0"></iframe>
  </div>
</div>

<div class="clear" style="height: 25px;"></div>

<div class="grid_16" id="info">
    <div class="box shadow">
      <div class="feed">
        <h4 class="yellow">justin's blog</h4>
        <ul id="blogs">
        </ul>
      </div>
    </div>
    <div style="width:50px; float: left;">&nbsp</div>
    <div class="box shadow">
      <div class="feed">
        <h4 class="yellow"><a href="http://www.twitter.com/fl_citychurch">twitter</a></h4>
        <ul id="tweets">
        </ul>
      </div>
    </div>
    <div style="width:50px; float: left;">&nbsp</div>
    <div class="box shadow">
      <div class="feed">
        <h4 class="yellow">calendar</h4>
        <div id="events"></div>
      </div>
    </div>
</div>

<div class="clear" style="height: 5px;"></div>
<?php include("layouts/footer.php") ?>
<div class="clear" style="height: 15px;"></div>
</div> <!-- closing "container_16" -->
</body>
