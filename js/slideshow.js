var slide = 1;
var slides = 2;
var slideshow_interval_id = null;

function signal_slideshow() {
  if(slideshow_interval_id == null)
    slideshow_interval_id = setInterval( "slideshow()", 8000);
  else {
    clearInterval(slideshow_interval_id);
    slideshow_interval_id = null;
  }
}

$(document).ready( function() {

  $('ul.slideshow li:gt(0)').hide();
  signal_slideshow();
});

function slideshow() {
  $('div#main li:nth-child(' + slide + ')').fadeOut('slow', function() {

    slide = slide + 1;
    if (slide > slides)
      slide = 1;

    $('div#main li:nth-child(' + slide + ')').fadeIn('slow');
  });
};
