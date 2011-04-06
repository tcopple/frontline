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
  <?php include("layouts/footer.php") ?>
  <div class="clear" style="height: 15px;"></div>
</div> <!-- closing "container_16" -->
</body>
