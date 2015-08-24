<?
$home = 'Y'; // This variable designates this as the index page, and tells the header to not put the title on this home page.
include('header.php'); // Include pulls another file into the page, and sticks it on where the include is called.
?>

<section class="bc-1">   
    <div class="container">  
       <div class="row">  
            <div class="col col-sm-12 col-md-12">  
                <div class="hero-bg">
                    <div class="row"> 
                        <div class="col col-sm-12 col-md-6"> 
                            <div class="bc-placeholder">
                               <?php  echo quick_slideshow('FD3', 7000); ?> 
                            </div><!-- /. -->
                        </div><!-- /.col6-->
                        <div class="col col-sm-12 col-md-6"> 
                           <h1>Welcome to <b>Church</b>Organ<b>Trader.com</b></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p><p>
    Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam.
                           </p>
                           <a href="#" class="btn btn-primary btn-large"> Log In to Site</a>
                        </div><!-- /.col6-->
                    </div><!-- /.row -->
                </div><!-- /. -->
            </div><!-- /.col12-->
        </div><!-- /.row -->

    </div><!-- /.container -->
</section><!-- /.section -->
<section class="bc-2">   
    <div class="container">   
        <div class="row">  
            <h1 align="center">Our Sponsors</h1>
        </div><!-- /.row -->
        <div class="row">  
            <div class="col col-sm-12 col-md-12">   
                   <?php   echo quick_slideshow('FD2', speed); ?> 
                    
                                        
                    
            </div><!-- /.col12-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.section -->



<?include('footer.php'); ?>