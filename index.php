<?php 
  include_once("utilities.php"); 
  start(
    "<script type=\"text/javascript\" src=\"js/movie_gallery.js\"></script>"
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
          <div class="feed">test</div>
        </div>
        <div style="width:50px; float: left;">&nbsp</div>
        <div class="box shadow">
          <div class="feed">test</div>
        </div>
        <div style="width:50px; float: left;">&nbsp</div>
        <div class="box shadow">
          <div class="feed">test</div>
        </div>
      </div>
    </div>
    <div class="clear" style="height: 5px;"></div>
  <?php include("layouts/footer.php") ?>
  <div class="clear" style="height: 15px;"></div>
</div> <!-- closing "container_16" -->
</body>
