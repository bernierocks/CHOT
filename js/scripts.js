$("document").ready(function() {
   
$("#login input[type='submit']").attr('value', 'Submit'); 

var $button = $(".pulsate");
setInterval(function(){
    $button.toggleClass("animated shake");
}, 5000);

    $("#mobile-toggle").click(function(){
      $("#mobileMenuWrapper").toggleClass("open");
    });
    
        $("#triggerClose").click(function(){
      $("#mobileMenuWrapper").removeClass("open");
    });
    
    
    
});



