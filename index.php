<?php 
  include_once("utilities.php"); 
  start(
    "<script type=\"text/javascript\" src=\"js/movie_gallery.js\"></script>
     <script type=\"text/javascript\" src=\"http://www.google.com/jsapi\"></script>
     <script type=\"text/javascript\" src=\"js/google_calendar.js\"></script>"
  ); 
?>
  <div id="videos" class="shadow">
    <?php
      //Build video links from available files in videos directory.
      foreach (glob("videos/*.m4v") as $video) {
        $tag = "<video width=\"720px\" height=\"402px\" src=\"$video\" ";
        $poster = str_replace("m4v", "jpg", $video);

        if(file_exists($poster))
          $tag .= "poster=\"$poster\" ";

        $tag .= "controls></video>";
        echo $tag; 
      }
    ?>
  </div>
</div>
    <div class="clear" style="height: 25px;"></div>
    <div class="grid_16">
      <div id="info">
        <div class="box shadow">
          <div class="feed">
            <h4 class="yellow">blog</h4>
          </div>
        </div>
        <div style="width:50px; float: left;">&nbsp</div>
        <div class="box shadow">
          <div class="feed">
            <h4 class="yellow">twitter</h4>
            <ul id="tweets">
            </ul>
          </div>
        </div>
        <div style="width:50px; float: left;">&nbsp</div>
        <div class="box shadow">
          <div class="feed">
            <div id="calendarTitle"></div>
            <div id="events"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="clear" style="height: 5px;"></div>
  <?php include("layouts/footer.php") ?>
  <div class="clear" style="height: 15px;"></div>
</div> <!-- closing "container_16" -->
</body>
