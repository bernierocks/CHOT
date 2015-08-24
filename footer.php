
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
    
        
</script>

<script type="text/javascript">
    function banner_callback_FD3(data){
       $("#slider-container-FD3").html(data.html).show();
    }
    $(document).ready( function() {
      $.ajax({
        url: $("#slider-container-FD3").attr("name"),
        dataType: 'jsonp',
        jsonpCallback: 'banner_callback_FD3',
        success: function(data){
        }
      });
    });
</script>
