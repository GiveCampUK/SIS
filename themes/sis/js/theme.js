/**
 * 
 * All plugins and the like should be defined in here
 * 
 */
window.sis = (function ($) {
  
  var methods = {
    
      init: function () {
        
        $(".region-slideshow").cycle({
          
            prev: "#slideshow-prev"
          , next: "#slideshow-next"
          
        });
        
        $("#slideshow-play").click(methods.playPause);
        $("#slideshow-controls button")
          .css('opacity', 0.6)
          .hover(methods.fadeButtonIn, methods.fadeButtonOut);
        
      }
    
    , playPause: function () {
      
        var $this = $(this);
      
        if ($this.hasClass("paused")) {
          
          $this.removeClass("paused");
          $(".region-slideshow").cycle("resume");
          return;
          
        }
        
        $this.addClass("paused");
        $(".region-slideshow").cycle("pause");
        
      }
      
    , fadeButtonIn: function () {
      
        $(this).stop().fadeTo(150, 1);
        
      }
      
    , fadeButtonOut: function () {
        
        $(this).stop().fadeTo(300, 0.6);
        
      }
    
  };
  
  return methods;
  
})(jQuery);

jQuery(function () {
  
  sis.init();
  
});
