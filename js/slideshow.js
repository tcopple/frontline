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
  $('div#main li:first-child').fadeOut('slow', function() {
    $(this).parent().append(this);
    $(this).parent().children("li:first-child").fadeIn('slow');
  });
};
