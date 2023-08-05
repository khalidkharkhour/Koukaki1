jQuery(document).ready(function($) {
    $(".fade-in").each(function() {
      var section = $(this);
      var sectionOffset = section.offset().top;
      var windowHeight = $(window).height();
  
      $(window).scroll(function() {
        var windowScrollTop = $(window).scrollTop();
        if (windowScrollTop + windowHeight > sectionOffset) {
          section.addClass("is-visible");
        }
      });
    });
  });
  