$("document").ready(function() {
   
var $post = $(".logo");
setInterval(function(){
    $post.toggleClass("uk-animation-scale");
}, 200);    

var $button = $(".pulsate");
setInterval(function(){
    $button.toggleClass("animated shake");
}, 5000);
    $button.onclick(
      function() {
        $( this ).addClass( "animated fadOutDown" );
    );

var $fader = $(".fade");
setInterval(function(){
    $fader.toggleClass("uk-animation-fade");
}, 500);
    
    
});