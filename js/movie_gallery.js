var slide = 1;
var slides = 3;
var slideshow_interval_id = null;

function signal_slideshow() {
  if(slideshow_interval_id == null)
    slideshow_interval_id = setInterval( "slideshow()", 6000);
  else {
    clearInterval(slideshow_interval_id);
    slideshow_interval_id = null;
  }
}

$(document).ready( function() {
  
  $('#videos video:gt(0)').hide();
  signal_slideshow(); 

  $('video').bind("play", function(e) {
    signal_slideshow();
  });

  $('video').bind("pause", function(e) {
    signal_slideshow();
  });
});

function slideshow() {
  $('div#videos video:nth-child(' + slide + ')').fadeOut('slow');
  
  slide = slide + 1;
  if (slide > slides)  
    slide = 1;

  $('div#videos video:nth-child(' + slide + ')').fadeIn('slow');
};
