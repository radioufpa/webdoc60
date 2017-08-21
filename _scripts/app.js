// header, for headroom.js

var header = document.querySelector("#header");

new Headroom(header, {
  tolerance: {
    down : 2,
    up : 5
  },
  offset : 50,
  classes: {
    initial: "slide",
    pinned: "slide--reset",
    unpinned: "slide--up"
  }
}).init();

$(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
        $("header").addClass("scroll");
    } else {
        // remove class (changes defined in css)
       $("header").removeClass("scroll");
    }
});

// handle links with @href started with '#' only

$(document).on('click', 'a[href^="#"]', function(e) {
    // target element id
    var id = $(this).attr('href');
    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }
    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();
    // top position relative to the document
    var pos = $(id).offset().top;
    // animated top scrolling
    $('body, html').animate({scrollTop: pos});
});