
<?
// // Keep in mind that any divs started in the header must be closed here.
// if($home!='Y' && $_GET['mms'] != 'X'){ //this IF statement is the test.  If these items evaluate to TRUE, it will perform the first block of code.
	// echo '';//ECHO is PHP's command to output to the page.
// } else { //If the IF statement evaluates to FALSE, this code will be run.  This is optional.

// }
?>




<footer>   
    <div class="container">   
        <div class="col col-sm-12 col-md-12" align="right">   
            <p>© 2015 ChurchOrganTrader.com</p>
            <p>Website powered MemberLeap a product of Vieth Consulting    </p>
        </div><!-- /.col12-->
    
    </div><!-- /.container -->
</footer><!-- /footer -->




<script type="text/javascript" src="https://www.memberleap.com/_jquery/js/init_jquery.js"></script>
<script type="text/javascript" src="https://www.memberleap.com/_jquery/js/init_nivoslider.js"></script>

<script type="text/javascript">
    function banner_callback_FD2(data){
       $("#slider-container-FD2").html(data.html).show();
    }
    $(document).ready( function() {
      $.ajax({
        url: $("#slider-container-FD2").attr("name"),
        dataType: 'jsonp',
        jsonpCallback: 'banner_callback_FD2',
        success: function(data){
        }
      });
    });
    
    
    $('#slider-container-FD2').nivoSlider({
    effect: 'random',                 // Specify sets like: 'fold,fade,sliceDown'
    slices: 15,                     // For slice animations
    boxCols: 8,                     // For box animations
    boxRows: 4,                     // For box animations
    animSpeed: 500,                 // Slide transition speed
    pauseTime: 3000,                 // How long each slide will show
    startSlide: 0,                     // Set starting Slide (0 index)
    directionNav: true,             // Next & Prev navigation
    controlNav: true,                 // 1,2,3... navigation
    controlNavThumbs: false,         // Use thumbnails for Control Nav
    pauseOnHover: true,             // Stop animation while hovering
    manualAdvance: false,             // Force manual transitions
    prevText: 'Prev',                 // Prev directionNav text
    nextText: 'Next',                 // Next directionNav text
    randomStart: false,             // Start on a random slide
    beforeChange: function(){},     // Triggers before a slide transition
    afterChange: function(){},         // Triggers after a slide transition
    slideshowEnd: function(){},     // Triggers after all slides have been shown
    lastSlide: function(){},         // Triggers when last slide is shown
    afterLoad: function(){}         // Triggers when slider has loaded
});
    
    
</script>