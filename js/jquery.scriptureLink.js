(function($) {
  $.fn.scriptureLink = function(options) {

    var defaults = {
      //would like to use supplied regex to parse out parts
      //of scripture references to add to anchor tags
      //for this doesn't even get used
      regex: /(\d{1,3}?\s?\w{2,}\.?\s*\d{1,}\:\d{1,}-?,?\d{0,2}(?:,\d{0,2}){0,2})/
    };

    var options = $.extend(defaults, options);

    return this.each(function() {
        var t = $(this).text();
          var link = $('<a/>');
          link.attr('href', 'http://www.gnpcb.org/esv/search/?q=' + t.replace(/ /g, '+'));
          link.attr('target', '_blank');
         link.text(t); 
        $(this).replaceWith(link);
      });
  };
}) ( jQuery );
