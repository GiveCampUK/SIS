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
    
  };
  
  return methods;
  
})(jQuery);

jQuery(function () {
  
  sis.init();
  
});
