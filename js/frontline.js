$(document).ready(function() {
	$('ul.sf-menu').superfish({ 
    hoverClass: "active",
    delay: 8000,
    autoArrows: false,
    dropShadows: true
  });

  $('.scripture').scriptureLink();
});

