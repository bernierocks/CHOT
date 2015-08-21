<?include('header_top.php');?>
<!-- Google Fonts -->
<!-- When adding a google font, be sure to remove the HTTP: from the URL.  
	 This will allow us to switch between HTTP and HTTPS -->
<link href='//fonts.googleapis.com/css?family=Marcellus|Open+Sans:400,700' rel='stylesheet' type='text/css'>


<?
/* The next section deals with titles on sub pages */
// Keep in mind that any divs started in this block of code must be closed in the footer
if($home!='Y' && $_GET['mms'] != 'X'){ //this IF statement is the test.  If these items evaluate to TRUE, it will perform the first block of code.
	echo '<h2 class="title">'.$title.'</h2>';//ECHO is PHP's command to output to the page.
} else { //If the IF statement evaluates to FALSE, this code will be run.  This is optional.

}?>


<header>   
    <div class="container"> 
        <div class="col col-sm-12 col-md-5">   
            <a href="#" alt=""><img class="img-responsive" alt="" src="<?=$base;?>images/logo.svg"></a>
        </div><!-- /.col5-->
        <div class="col col-sm-12 col-md-6">   
        <? echo quick_menu($before,$after,'Alternate menu',$custom_caret); ?>
        </div><!-- /.col6-->
    </div><!-- /.container -->
</header><!-- /header -->