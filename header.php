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
       
       
       <div class="row">  
        <div class="col col-sm-12 col-md-5">   
            <a href="#" alt=""><img class="logo img-responsive" alt="" src="<?=$base;?>images/logo.svg"></a>
        </div><!-- /.col5-->
            <div class="col col-sm-12 col-md-7">   
                <? echo log_in_form(); ?>         


            </div><!-- /.col7-->
        </div><!-- /.row -->
        
        
        <div class="row">  
            <div class="col col-md-offset-3 col-sm-12 col-md-9 ">   
        
           <div id="main-menu" class="hidden-xs	hidden-sm">
            <? echo quick_menu(); ?>
            </div><!-- /.main-menu -->
            
            <div id="mobile-menu-col">
                <div id="mobile-toggle" class="mobileMenuTrigger hidden-lg">
                    <img alt="" src="<?=$base;?>images/menu.svg">
                </div>
            </div><!-- end of #mobile-menu-col --> 
            
            </div><!-- /.col8-->
        </div><!-- /.row -->
        
    </div><!-- /.container -->
</header><!-- /header -->