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
       <?php
        $before    =    '<li id="triggerClose" class="mobileMenuTrigger">+</li>';                          

        $after    =     '<li class="mobile-login">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            Member Login
                        </a>
                    </li>';

        $mm2_options = array(
            'before' => $before,
            'after' => $after
        );
        mobile_menu($mm2_options);
    ?>

    <? echo mobile_menu($option_array); ?>
    <div class="container"> 
        <div class="col col-sm-12 col-md-5">   
            <a href="#" alt=""><img class="img-responsive" alt="" src="<?=$base;?>images/logo.svg"></a>
        </div><!-- /.col5-->
        <div class="col col-sm-12 col-md-7">   
                     
           
            <? echo quick_menu(); ?>
            <div id="mobile-menu-col">
                <div id="mobile-toggle" class="mobileMenuTrigger hidden-lg">
                    <svg version="1.1" id="burger" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 35 35" enable-background="new 0 0 35 35" xml:space="preserve">
                        <g id="burger-path">
                        <rect x="0" y="0" fill="#1E5CAB" width="35" height="35"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="3.8889" stroke-linecap="round" x1="6.4" y1="9" x2="28.6" y2="9"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="3.8889" stroke-linecap="round" x1="6.4" y1="17.5" x2="28.6" y2="17.5"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="3.8889" stroke-linecap="round" x1="6.4" y1="26" x2="28.6" y2="26"/>
                        </g>
                    </svg>
                </div>
            </div><!-- end of #mobile-menu-col -->
        </div><!-- /.col7-->
    </div><!-- /.container -->
</header><!-- /header -->