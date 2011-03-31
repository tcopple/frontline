var twitter_handle = 'fl_citychurch';
var tweets = 3;
var tweet = 1;

$(document).ready(function() {
	$('ul.sf-menu').superfish({ 
    hoverClass: "active",
    delay: 8000,
    autoArrows: false,
    dropShadows: true
  });

  $('.scripture').scriptureLink();

  fetch_tweets('fl_citychurch', 3, 1);
});


function fetch_tweets(handle, count, page) {
  if(page == undefined)
    page = 1;

  var url = "http://twitter.com/status/user_timeline/" + handle + ".json?count=" + count + "&page=" + page + "&callback=?";
			
  var ret = new Array();
  $.getJSON(url,function(data) {
    $.each(data, function(i, post) {
      var user = post.user.screen_name.toLowerCase();
      var created = post.created_at;
      var text = post.text;
     
      $("<li />").html(replace_urls(text)).appendTo($("ul#tweets"));
    })
  });
};

function fetch_calendar() {
  var url = "https://www.google.com/calendar/feeds/frontlinecitychurch@gmail.com/private-aca7d8546174a93c89d479aed1ecdbae/basic";

  $.getJSON(url,function(data) {
      var a = 1;
      alert(data);
  });

}

function replace_urls(text) {
  var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
  var a = text.replace(exp,"<a href='$1'>$1</a>"); 
  return a;
}
