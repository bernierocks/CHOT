<?include('header_top.php');?>
<!-- Google Fonts -->
<!-- When adding a google font, be sure to remove the HTTP: from the URL.  
	 This will allow us to switch between HTTP and HTTPS -->
<link href='//fonts.googleapis.com/css?family=Marcellus|Open+Sans:400,700' rel='stylesheet' type='text/css'>





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

           <!-- Start of Member Login Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Member Log In</h4>
              </div>
              <div class="modal-body">
                <? echo log_in_form($log_in_options_array); ?>
              </div>
            </div>
          </div>
        </div><!-- End of Member Login Modal -->
   
   
    <? echo mobile_menu($option_array); ?>
    <div class="container"> 
       
       
       <div class="row">  
        <div class="col col-sm-12 col-md-5">   
            <a href="#" alt="">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="409.8px" height="121.9px" viewBox="0 0 409.8 121.9" style="enable-background:new 0 0 409.8 121.9;" xml:space="preserve"
	>
<style type="text/css">
	.st0{fill:#5F0C0C;}
</style>
<g id="Logo">
	<g>
		<path class="st0" d="M60.4,60.7c-1.7,0-3.2-0.3-4.6-0.8c-1.4-0.5-2.7-1.3-3.8-2.3c-1.1-1-1.9-2.2-2.5-3.7
			c-0.6-1.5-0.9-3.1-0.9-4.9c0-1.8,0.3-3.4,0.9-4.9c0.6-1.5,1.5-2.8,2.6-3.9c1.1-1.1,2.4-1.9,3.9-2.5c1.5-0.6,3.1-0.9,4.9-0.9
			c1.3,0,2.4,0.2,3.4,0.5c1,0.3,1.9,0.7,2.6,1l1-0.9h1.4l0.1,8.2H68c-0.8-2.5-1.7-4.4-2.9-5.6C64,39,62.6,38.4,61,38.4
			c-2,0-3.5,0.9-4.5,2.6c-1,1.8-1.6,4.2-1.6,7.4c0,1.8,0.2,3.3,0.5,4.6c0.4,1.3,0.8,2.3,1.4,3.1c0.6,0.8,1.3,1.4,2.2,1.8
			c0.8,0.4,1.8,0.6,2.8,0.6c1.5,0,2.8-0.4,4-1.2c1.2-0.8,2.2-2,3.2-3.7l1.4,0.8c-0.5,0.9-1,1.8-1.6,2.5c-0.6,0.7-1.3,1.4-2,1.9
			c-0.8,0.6-1.8,1-2.8,1.4C62.9,60.5,61.7,60.7,60.4,60.7z"/>
		<path class="st0" d="M90.6,60H81v-1.2c0.2,0,0.5,0,0.7-0.1s0.5-0.1,0.6-0.2c0.2-0.1,0.4-0.3,0.5-0.5c0.1-0.2,0.1-0.6,0.1-1v-7.5
			c0-1.1-0.2-1.9-0.6-2.5s-1-0.8-1.7-0.8c-0.4,0-0.8,0.1-1.2,0.2c-0.4,0.1-0.7,0.3-1.1,0.6c-0.3,0.2-0.6,0.4-0.7,0.7
			s-0.3,0.4-0.5,0.6V57c0,0.4,0,0.7,0.1,0.9c0.1,0.2,0.3,0.4,0.5,0.6c0.2,0.1,0.4,0.2,0.6,0.3c0.3,0.1,0.5,0.1,0.8,0.2V60h-9.7v-1.2
			c0.3,0,0.5,0,0.8-0.1s0.5-0.1,0.7-0.2c0.3-0.1,0.6-0.3,0.7-0.5c0.1-0.2,0.2-0.6,0.2-0.9V39.4c0-0.3-0.1-0.7-0.2-1.1
			c-0.2-0.4-0.4-0.7-0.7-0.9c-0.2-0.1-0.5-0.2-0.9-0.3S69.3,37,69,37v-1.2l7.9-0.4l0.2,0.3v11h0.1c0.4-0.4,0.8-0.7,1.1-1
			c0.3-0.3,0.7-0.6,1.2-0.9c0.4-0.3,0.9-0.5,1.5-0.7c0.6-0.2,1.3-0.3,2-0.3c1.7,0,3,0.5,3.9,1.5c0.9,1,1.3,2.3,1.3,3.9V57
			c0,0.4,0.1,0.7,0.2,0.9c0.1,0.2,0.3,0.4,0.7,0.6c0.2,0.1,0.4,0.2,0.6,0.2c0.2,0.1,0.5,0.1,0.9,0.2V60z"/>
		<path class="st0" d="M109.9,59.7l-7.6,0.5l-0.2-0.2v-2.1H102c-0.4,0.3-0.7,0.7-1.1,1c-0.3,0.3-0.8,0.6-1.2,0.9
			c-0.5,0.3-1.1,0.5-1.5,0.6c-0.5,0.1-1.2,0.2-2.1,0.2c-1.6,0-2.8-0.5-3.7-1.4c-0.9-1-1.3-2.3-1.3-4.1v-7.2c0-0.4-0.1-0.8-0.2-1
			c-0.2-0.3-0.4-0.5-0.6-0.7c-0.2-0.2-0.5-0.3-0.8-0.3c-0.3-0.1-0.6-0.1-0.9-0.1v-1.2l7.7-0.4l0.2,0.2v10.6c0,1.1,0.2,1.9,0.6,2.4
			c0.4,0.5,1,0.8,1.7,0.8c0.8,0,1.4-0.2,2-0.6c0.6-0.4,1-0.8,1.3-1.3v-8.6c0-0.4-0.1-0.7-0.2-1c-0.1-0.3-0.3-0.5-0.6-0.7
			c-0.2-0.1-0.5-0.2-0.8-0.3c-0.4,0-0.7-0.1-1.1-0.1v-1.2l7.7-0.4l0.2,0.2v12.3c0,0.4,0.1,0.7,0.2,0.9c0.1,0.3,0.4,0.5,0.6,0.7
			c0.2,0.1,0.5,0.2,0.8,0.3c0.3,0,0.6,0.1,1,0.1V59.7z"/>
		<path class="st0" d="M125.4,47.2c0,0.8-0.2,1.5-0.7,2.1c-0.5,0.6-1.2,0.9-2,0.9c-0.8,0-1.4-0.2-2-0.6s-0.8-1-0.8-1.7
			c0-0.4,0-0.7,0.1-0.9c0.1-0.2,0.1-0.4,0.1-0.6c-0.5,0-1,0.2-1.5,0.5c-0.5,0.3-1,0.7-1.4,1.3v8.7c0,0.4,0.1,0.7,0.2,0.9
			c0.1,0.2,0.3,0.4,0.6,0.6c0.2,0.1,0.6,0.2,1.1,0.3c0.5,0.1,0.9,0.1,1.1,0.1V60h-10.7v-1.2c0.3,0,0.5-0.1,0.8-0.1
			c0.3,0,0.5-0.1,0.7-0.2c0.3-0.1,0.6-0.3,0.7-0.5c0.1-0.2,0.2-0.6,0.2-1v-9.3c0-0.4-0.1-0.7-0.3-1c-0.2-0.3-0.4-0.5-0.7-0.7
			c-0.2-0.1-0.4-0.2-0.7-0.3c-0.3-0.1-0.6-0.1-1-0.2v-1.2l7.6-0.4l0.2,0.2v2.3h0.1c0.7-0.8,1.5-1.5,2.3-2c0.8-0.5,1.7-0.7,2.6-0.7
			c1,0,1.8,0.3,2.4,0.9C125.1,45.4,125.4,46.2,125.4,47.2z"/>
		<path class="st0" d="M133.5,60.5c-1.5,0-2.8-0.2-3.9-0.6c-1.1-0.4-2.1-1-2.8-1.8c-0.7-0.8-1.3-1.6-1.6-2.7c-0.4-1-0.5-2.1-0.5-3.4
			c0-1.1,0.2-2.2,0.7-3.2c0.4-1,1-1.9,1.8-2.6c0.8-0.8,1.7-1.4,2.9-1.9c1.2-0.5,2.4-0.7,3.8-0.7c2,0,3.5,0.4,4.6,1.1
			c1.1,0.7,1.7,1.7,1.7,3c0,0.8-0.2,1.4-0.6,1.8c-0.4,0.5-1.1,0.7-2.1,0.7c-0.8,0-1.5-0.2-2-0.6c-0.5-0.4-0.8-0.9-0.8-1.5
			c0-0.5,0.1-1,0.3-1.5c0.2-0.5,0.3-0.9,0.3-1.2c-0.1-0.2-0.3-0.3-0.4-0.4c-0.2-0.1-0.5-0.2-0.8-0.2c-0.5,0-0.9,0.1-1.3,0.3
			c-0.4,0.2-0.8,0.6-1.1,1.2c-0.3,0.5-0.6,1.2-0.8,2.1c-0.2,0.9-0.3,2-0.3,3.2c0,1.9,0.4,3.4,1.3,4.6c0.9,1.2,1.9,1.7,3.2,1.7
			c1.2,0,2.1-0.3,2.8-0.8c0.7-0.5,1.3-1.3,1.9-2.2l1.2,0.8c-0.3,0.6-0.7,1.2-1.2,1.8c-0.5,0.5-1,1-1.6,1.4c-0.7,0.4-1.3,0.8-2,1
			C135.2,60.4,134.4,60.5,133.5,60.5z"/>
		<path class="st0" d="M160.3,60h-9.6v-1.2c0.2,0,0.5,0,0.7-0.1s0.5-0.1,0.6-0.2c0.2-0.1,0.4-0.3,0.5-0.5c0.1-0.2,0.1-0.6,0.1-1
			v-7.5c0-1.1-0.2-1.9-0.6-2.5s-1-0.8-1.7-0.8c-0.4,0-0.8,0.1-1.2,0.2c-0.4,0.1-0.7,0.3-1.1,0.6c-0.3,0.2-0.6,0.4-0.7,0.7
			s-0.3,0.4-0.5,0.6V57c0,0.4,0,0.7,0.1,0.9c0.1,0.2,0.3,0.4,0.5,0.6c0.2,0.1,0.4,0.2,0.6,0.3c0.3,0.1,0.5,0.1,0.8,0.2V60h-9.7v-1.2
			c0.3,0,0.5,0,0.8-0.1s0.5-0.1,0.7-0.2c0.3-0.1,0.6-0.3,0.7-0.5c0.1-0.2,0.2-0.6,0.2-0.9V39.4c0-0.3-0.1-0.7-0.2-1.1
			c-0.2-0.4-0.4-0.7-0.7-0.9c-0.2-0.1-0.5-0.2-0.9-0.3S139,37,138.7,37v-1.2l7.9-0.4l0.2,0.3v11h0.1c0.4-0.4,0.8-0.7,1.1-1
			c0.3-0.3,0.7-0.6,1.2-0.9c0.4-0.3,0.9-0.5,1.5-0.7c0.6-0.2,1.3-0.3,2-0.3c1.7,0,3,0.5,3.9,1.5c0.9,1,1.3,2.3,1.3,3.9V57
			c0,0.4,0.1,0.7,0.2,0.9c0.1,0.2,0.3,0.4,0.7,0.6c0.2,0.1,0.4,0.2,0.6,0.2c0.2,0.1,0.5,0.1,0.9,0.2V60z"/>
		<path class="st0" d="M178.1,40.1c1,1,1.8,2.3,2.3,3.8c0.6,1.5,0.8,3.1,0.8,4.9c0,1.8-0.3,3.4-0.9,4.9s-1.4,2.7-2.4,3.7
			c-1,1-2.1,1.8-3.4,2.4s-2.7,0.8-4.2,0.8c-1.6,0-3-0.3-4.4-0.9c-1.3-0.6-2.5-1.4-3.4-2.5c-1-1-1.7-2.3-2.3-3.7
			c-0.5-1.5-0.8-3-0.8-4.7c0-1.8,0.3-3.5,0.9-4.9c0.6-1.4,1.4-2.7,2.4-3.7c1-1,2.2-1.8,3.5-2.4c1.3-0.6,2.7-0.8,4.1-0.8
			c1.5,0,2.9,0.3,4.2,0.8C176,38.3,177.1,39.1,178.1,40.1z M175.7,56.1c0.6-1,1-2.1,1.3-3.3c0.3-1.2,0.4-2.6,0.4-4.1
			c0-1.5-0.2-3-0.5-4.3c-0.3-1.3-0.7-2.4-1.3-3.3c-0.6-0.9-1.3-1.6-2.2-2.1c-0.9-0.5-1.9-0.8-3-0.8c-1.3,0-2.4,0.3-3.2,0.9
			c-0.9,0.6-1.6,1.4-2.2,2.3c-0.5,0.9-0.9,2-1.2,3.3c-0.3,1.3-0.4,2.6-0.4,3.9c0,1.5,0.1,2.9,0.4,4.1c0.3,1.2,0.7,2.3,1.3,3.3
			c0.6,0.9,1.3,1.7,2.2,2.2c0.9,0.5,1.9,0.8,3.1,0.8c1.1,0,2.2-0.3,3.1-0.8C174.4,57.8,175.1,57.1,175.7,56.1z"/>
		<path class="st0" d="M193.5,46.4c0,0.5-0.1,1-0.4,1.4c-0.3,0.4-0.7,0.6-1.2,0.6c-0.6,0-1-0.2-1.4-0.5c-0.3-0.3-0.5-0.6-0.5-1
			c0-0.2,0-0.4,0.1-0.6c0-0.2,0.1-0.4,0.1-0.6c-0.5,0-1.1,0.2-1.8,0.6c-0.7,0.4-1.2,1-1.7,1.7v9.1c0,0.4,0.1,0.7,0.2,0.9
			c0.1,0.2,0.4,0.4,0.7,0.5c0.3,0.1,0.6,0.2,1,0.2c0.4,0.1,0.8,0.1,1.1,0.1V60h-8.3V59c0.2,0,0.5,0,0.8-0.1c0.3,0,0.5-0.1,0.7-0.1
			c0.3-0.1,0.5-0.3,0.7-0.5c0.1-0.2,0.2-0.5,0.2-0.9v-9.7c0-0.3-0.1-0.7-0.2-1c-0.2-0.3-0.4-0.6-0.6-0.8c-0.2-0.1-0.4-0.2-0.7-0.3
			c-0.3-0.1-0.6-0.1-0.9-0.1v-1.1l5.2-0.4l0.2,0.2v2.2h0.1c0.7-0.9,1.4-1.5,2.2-2c0.8-0.4,1.5-0.7,2.2-0.7c0.7,0,1.2,0.2,1.6,0.7
			C193.3,45,193.5,45.6,193.5,46.4z"/>
		<path class="st0" d="M206.3,58.4c0.4,0.4,0.8,0.9,1,1.4s0.4,1.1,0.4,1.9c0,0.8-0.2,1.5-0.5,2.1c-0.3,0.7-0.8,1.2-1.5,1.7
			c-0.7,0.5-1.6,0.9-2.5,1.2c-1,0.3-2.2,0.4-3.7,0.4c-2.4,0-4.2-0.3-5.3-1c-1.2-0.7-1.8-1.7-1.8-3c0-1.1,0.4-1.9,1.3-2.6
			c0.8-0.6,1.9-1,3.2-1v-0.2c-0.3-0.1-0.6-0.2-1-0.4s-0.6-0.3-0.9-0.5c-0.3-0.2-0.5-0.5-0.7-0.8c-0.2-0.3-0.3-0.7-0.3-1.1
			c0-0.6,0.2-1.1,0.6-1.6c0.4-0.5,1-0.9,1.8-1.2v-0.2c-1-0.5-1.8-1.1-2.4-1.8c-0.6-0.7-0.8-1.6-0.8-2.6c0-1.5,0.6-2.7,1.7-3.7
			c1.1-1,2.5-1.4,4.3-1.4c0.5,0,1,0,1.4,0.1c0.5,0.1,1,0.2,1.4,0.4h5.5v1.5h-3.7V46c0.4,0.5,0.7,1,0.9,1.5c0.2,0.6,0.3,1.1,0.3,1.6
			c0,1.4-0.6,2.5-1.7,3.5c-1.1,1-2.4,1.4-3.9,1.4h-1.9c-0.2,0.1-0.5,0.2-0.8,0.5c-0.3,0.2-0.4,0.5-0.4,0.9c0,0.4,0.1,0.7,0.3,0.9
			c0.2,0.2,0.5,0.3,0.8,0.4c0.3,0.1,0.7,0.1,1.1,0.2c0.4,0,0.8,0,1.3,0c0.5,0,1.1,0,1.9,0.1c0.8,0.1,1.4,0.1,1.7,0.1
			c0.5,0,1,0.1,1.5,0.4C205.4,57.7,205.9,58,206.3,58.4z M205,62.3c0-0.6-0.1-1.1-0.4-1.5c-0.3-0.4-0.7-0.6-1.3-0.8
			c-0.3,0-0.9-0.1-1.8-0.1c-0.9-0.1-2-0.1-3.2-0.1c-1.1,0.2-2,0.6-2.4,1.1c-0.5,0.5-0.7,1.2-0.7,2c0,0.4,0.1,0.7,0.2,1.1
			c0.2,0.3,0.4,0.7,0.8,0.9c0.4,0.3,0.9,0.5,1.5,0.7c0.6,0.2,1.4,0.3,2.3,0.3c1.6,0,2.8-0.3,3.7-0.9C204.6,64.4,205,63.5,205,62.3z
			 M202,49.1c0-1.2-0.3-2.2-0.8-3c-0.5-0.7-1.2-1.1-2.1-1.1c-0.5,0-0.9,0.1-1.3,0.3c-0.4,0.2-0.6,0.5-0.9,0.9
			c-0.2,0.4-0.4,0.8-0.5,1.3c-0.1,0.5-0.1,1-0.1,1.5c0,1.2,0.3,2.1,0.8,2.9c0.5,0.7,1.2,1.1,2,1.1c0.9,0,1.6-0.4,2.1-1.1
			C201.7,51.2,202,50.2,202,49.1z"/>
		<path class="st0" d="M221.7,59.7c-0.5,0.2-0.9,0.3-1.3,0.4s-0.8,0.2-1.3,0.2c-0.8,0-1.5-0.2-2-0.6c-0.5-0.4-0.8-1-0.9-1.7h-0.1
			c-0.7,0.8-1.4,1.3-2.2,1.8c-0.8,0.4-1.7,0.6-2.9,0.6c-1.2,0-2.1-0.4-2.9-1.1c-0.8-0.7-1.1-1.7-1.1-2.8c0-0.6,0.1-1.1,0.3-1.6
			c0.2-0.5,0.4-0.9,0.8-1.3c0.3-0.3,0.6-0.6,1.1-0.9c0.4-0.2,0.8-0.4,1.2-0.6c0.5-0.2,1.4-0.5,2.9-1c1.5-0.5,2.4-0.9,3-1.1v-1.6
			c0-0.1,0-0.4-0.1-0.8c-0.1-0.4-0.2-0.8-0.4-1.1c-0.2-0.4-0.5-0.7-0.9-1c-0.4-0.3-0.9-0.4-1.6-0.4c-0.5,0-0.9,0.1-1.4,0.2
			c-0.4,0.2-0.7,0.3-0.9,0.5c0,0.2,0.1,0.5,0.2,0.9c0.1,0.4,0.2,0.8,0.2,1.1c0,0.4-0.2,0.7-0.5,1c-0.3,0.3-0.8,0.5-1.4,0.5
			c-0.5,0-0.9-0.2-1.2-0.6c-0.2-0.4-0.4-0.8-0.4-1.3c0-0.5,0.2-1,0.5-1.4c0.3-0.4,0.8-0.8,1.3-1.2c0.5-0.3,1.1-0.5,1.7-0.8
			s1.3-0.3,2-0.3c0.9,0,1.7,0.1,2.3,0.2c0.7,0.1,1.3,0.4,1.8,0.8c0.5,0.4,1,0.9,1.2,1.6c0.3,0.7,0.4,1.5,0.4,2.6c0,1.5,0,2.9,0,4
			c0,1.2,0,2.5,0,3.8c0,0.4,0.1,0.7,0.2,1c0.1,0.2,0.4,0.5,0.7,0.6c0.2,0.1,0.4,0.1,0.8,0.2c0.3,0,0.7,0,1.1,0V59.7z M216.1,51.3
			c-0.9,0.3-1.7,0.5-2.4,0.8c-0.7,0.3-1.3,0.6-1.9,1c-0.5,0.4-1,0.8-1.3,1.3c-0.3,0.5-0.5,1.1-0.5,1.8c0,0.9,0.2,1.5,0.7,1.9
			c0.5,0.4,1,0.6,1.8,0.6c0.8,0,1.4-0.2,2-0.6c0.6-0.4,1.1-0.8,1.4-1.3L216.1,51.3z"/>
		<path class="st0" d="M238.8,60h-7.7V59c0.2,0,0.5,0,0.8-0.1c0.3,0,0.5-0.1,0.7-0.1c0.3-0.1,0.5-0.3,0.7-0.5
			c0.1-0.2,0.2-0.5,0.2-0.9v-8.1c0-1.1-0.3-2-0.8-2.6s-1.2-0.9-1.9-0.9c-0.6,0-1.1,0.1-1.5,0.3s-0.9,0.4-1.2,0.6
			c-0.4,0.2-0.6,0.5-0.8,0.8c-0.2,0.3-0.4,0.5-0.5,0.7v9c0,0.4,0.1,0.7,0.2,0.9c0.1,0.2,0.4,0.4,0.7,0.5c0.2,0.1,0.5,0.2,0.7,0.2
			c0.3,0.1,0.5,0.1,0.8,0.1V60h-7.7V59c0.2,0,0.5,0,0.8-0.1c0.3,0,0.5-0.1,0.7-0.1c0.3-0.1,0.5-0.3,0.7-0.5c0.1-0.2,0.2-0.5,0.2-0.9
			v-9.7c0-0.4-0.1-0.7-0.2-1c-0.2-0.3-0.4-0.5-0.6-0.7c-0.2-0.1-0.4-0.2-0.7-0.3c-0.3-0.1-0.6-0.1-0.9-0.1v-1.1l5.2-0.4l0.2,0.2v2.2
			h0.1c0.3-0.3,0.6-0.6,1-0.9c0.4-0.4,0.7-0.6,1.1-0.9c0.4-0.3,0.9-0.5,1.4-0.6c0.5-0.2,1.2-0.3,1.8-0.3c1.5,0,2.6,0.5,3.4,1.4
			s1.1,2.2,1.1,3.7v8.2c0,0.4,0.1,0.7,0.2,0.9c0.1,0.2,0.3,0.4,0.7,0.5c0.3,0.1,0.5,0.2,0.7,0.2c0.2,0,0.4,0.1,0.8,0.1V60z"/>
		<path class="st0" d="M257.9,43.9h-1.2c-0.3-1-0.9-2-1.6-3.1c-0.7-1.1-1.4-1.7-2-1.8c-0.3,0-0.8-0.1-1.3-0.1c-0.5,0-0.9,0-1.3,0
			h-0.7v17.7c0,0.4,0.1,0.7,0.2,1c0.1,0.3,0.4,0.5,0.8,0.7c0.2,0.1,0.6,0.2,1.1,0.3c0.5,0.1,1,0.2,1.3,0.2V60h-12.6v-1.2
			c0.3,0,0.7-0.1,1.3-0.1c0.6-0.1,0.9-0.1,1.1-0.2c0.4-0.2,0.7-0.4,0.8-0.7c0.1-0.3,0.2-0.6,0.2-1V38.9h-0.7c-0.4,0-0.8,0-1.3,0
			c-0.5,0-0.9,0.1-1.3,0.1c-0.6,0.1-1.3,0.7-2,1.8c-0.7,1.1-1.3,2.1-1.6,3.1H236v-6.5h21.9V43.9z"/>
		<path class="st0" d="M273.3,47.2c0,0.8-0.2,1.5-0.7,2.1c-0.5,0.6-1.2,0.9-2,0.9c-0.8,0-1.4-0.2-2-0.6s-0.8-1-0.8-1.7
			c0-0.4,0-0.7,0.1-0.9c0.1-0.2,0.1-0.4,0.1-0.6c-0.5,0-1,0.2-1.5,0.5c-0.5,0.3-1,0.7-1.4,1.3v8.7c0,0.4,0.1,0.7,0.2,0.9
			c0.1,0.2,0.3,0.4,0.6,0.6c0.2,0.1,0.6,0.2,1.1,0.3c0.5,0.1,0.9,0.1,1.1,0.1V60h-10.7v-1.2c0.3,0,0.5-0.1,0.8-0.1
			c0.3,0,0.5-0.1,0.7-0.2c0.3-0.1,0.6-0.3,0.7-0.5c0.1-0.2,0.2-0.6,0.2-1v-9.3c0-0.4-0.1-0.7-0.3-1c-0.2-0.3-0.4-0.5-0.7-0.7
			c-0.2-0.1-0.4-0.2-0.7-0.3c-0.3-0.1-0.6-0.1-1-0.2v-1.2l7.6-0.4l0.2,0.2v2.3h0.1c0.7-0.8,1.5-1.5,2.3-2c0.8-0.5,1.7-0.7,2.6-0.7
			c1,0,1.8,0.3,2.4,0.9C273,45.4,273.3,46.2,273.3,47.2z"/>
		<path class="st0" d="M290.5,59.7c-0.5,0.2-1,0.4-1.7,0.6c-0.6,0.2-1.3,0.3-2,0.3c-1.3,0-2.3-0.2-2.9-0.6c-0.6-0.4-1-0.9-1.3-1.7
			h-0.1c-0.4,0.4-0.7,0.7-1,0.9c-0.3,0.3-0.7,0.5-1.1,0.7c-0.5,0.2-1,0.4-1.4,0.5c-0.5,0.1-1.1,0.2-1.9,0.2c-1.2,0-2.3-0.4-3.2-1.1
			c-0.9-0.7-1.3-1.7-1.3-2.9c0-0.7,0.1-1.3,0.3-1.8s0.5-0.9,0.8-1.3c0.3-0.3,0.7-0.6,1.1-0.8c0.4-0.2,0.9-0.4,1.4-0.6
			c1-0.4,2.1-0.7,3.4-1.1c1.3-0.4,2.3-0.7,2.9-1v-1.5c0-0.3,0-0.6-0.1-1.1c0-0.4-0.1-0.8-0.3-1.1c-0.1-0.3-0.4-0.6-0.7-0.9
			c-0.3-0.2-0.7-0.4-1.3-0.4c-0.5,0-0.9,0.1-1.2,0.2c-0.3,0.1-0.6,0.3-0.8,0.4c0,0.2,0.1,0.5,0.3,1c0.1,0.4,0.2,0.9,0.2,1.3
			c0,0.2,0,0.4-0.1,0.7c-0.1,0.3-0.2,0.5-0.4,0.6c-0.2,0.2-0.5,0.4-0.8,0.5c-0.3,0.1-0.8,0.2-1.4,0.2c-0.9,0-1.6-0.2-2-0.6
			c-0.5-0.4-0.7-1-0.7-1.7c0-0.6,0.2-1.1,0.7-1.6c0.5-0.5,1-0.9,1.7-1.2c0.7-0.3,1.4-0.6,2.3-0.7c0.9-0.2,1.7-0.3,2.4-0.3
			c1,0,2,0.1,2.8,0.2c0.9,0.1,1.6,0.4,2.3,0.8c0.7,0.4,1.2,0.9,1.6,1.6c0.4,0.7,0.6,1.6,0.6,2.8c0,1.2,0,2.6-0.1,4.3
			c0,1.6-0.1,2.7-0.1,3.2c0,0.5,0.1,0.9,0.2,1.1c0.1,0.3,0.4,0.5,0.7,0.6c0.2,0.1,0.5,0.1,0.9,0.2c0.4,0,0.7,0,1.1,0V59.7z
			 M282.6,51.4c-0.6,0.2-1.2,0.4-1.8,0.7s-1.1,0.5-1.4,0.8c-0.4,0.3-0.7,0.7-0.9,1.1c-0.2,0.5-0.3,1-0.3,1.6c0,0.8,0.2,1.4,0.6,1.8
			c0.4,0.4,0.8,0.6,1.4,0.6c0.6,0,1.1-0.1,1.4-0.4c0.4-0.2,0.7-0.5,1-0.9L282.6,51.4z"/>
		<path class="st0" d="M309.7,59.7l-7.9,0.5l-0.2-0.2v-1.5l-0.1,0c-0.5,0.6-1.2,1.1-2.1,1.5s-1.8,0.6-2.7,0.6
			c-2.1,0-3.9-0.8-5.3-2.4c-1.4-1.6-2.1-3.7-2.1-6.2c0-2.2,0.8-4.2,2.3-5.8c1.6-1.6,3.4-2.4,5.6-2.4c0.9,0,1.7,0.1,2.4,0.3
			c0.8,0.2,1.4,0.4,1.8,0.7v-5.2c0-0.4-0.1-0.8-0.2-1.1c-0.2-0.3-0.4-0.6-0.6-0.8c-0.3-0.2-0.7-0.4-1.2-0.5c-0.5-0.1-1-0.2-1.5-0.2
			v-1.2l8.6-0.4l0.2,0.3v20.9c0,0.4,0.1,0.7,0.2,1c0.1,0.3,0.3,0.5,0.6,0.7c0.2,0.1,0.5,0.2,1,0.3c0.4,0.1,0.8,0.1,1.1,0.1V59.7z
			 M301.6,56.9v-9c-0.1-0.2-0.2-0.5-0.3-0.8c-0.1-0.3-0.3-0.6-0.5-0.8c-0.2-0.2-0.5-0.4-0.8-0.6c-0.4-0.2-0.8-0.3-1.2-0.3
			c-1.1,0-1.9,0.6-2.6,1.8c-0.7,1.2-1,2.9-1,5.1c0,0.9,0.1,1.6,0.2,2.3c0.1,0.7,0.3,1.3,0.6,1.9c0.3,0.6,0.7,1,1.2,1.3
			c0.5,0.3,1.1,0.5,1.7,0.5c0.6,0,1.2-0.1,1.6-0.4C300.8,57.6,301.2,57.3,301.6,56.9z"/>
		<path class="st0" d="M325.3,56.2c-0.4,0.6-0.8,1.2-1.3,1.7c-0.5,0.5-1.1,1-1.8,1.4c-0.7,0.4-1.4,0.7-2.2,0.9
			c-0.7,0.2-1.6,0.3-2.5,0.3c-1.6,0-2.9-0.2-4.1-0.7c-1.1-0.4-2.1-1-2.8-1.8c-0.7-0.8-1.3-1.6-1.7-2.7c-0.4-1-0.5-2.1-0.5-3.3
			c0-1.1,0.2-2.1,0.6-3.1c0.4-1,1-1.9,1.7-2.7c0.7-0.8,1.6-1.4,2.7-1.8c1.1-0.5,2.3-0.7,3.7-0.7c1.5,0,2.7,0.2,3.7,0.5
			c1,0.4,1.7,0.9,2.4,1.5c0.6,0.6,1,1.3,1.3,2.1c0.3,0.8,0.4,1.7,0.4,2.6v1h-10.8c0,2.2,0.4,3.8,1.3,5c0.8,1.1,2.2,1.7,4,1.7
			c1,0,1.9-0.3,2.7-0.8c0.8-0.5,1.5-1.2,2-2.1L325.3,56.2z M319.3,50.2c0-0.6,0-1.3-0.1-2c-0.1-0.7-0.2-1.2-0.3-1.6
			c-0.2-0.5-0.4-0.9-0.7-1.1s-0.7-0.4-1.2-0.4c-0.8,0-1.5,0.4-2,1.2s-0.8,2.1-0.8,3.9L319.3,50.2z"/>
		<path class="st0" d="M340.4,47.2c0,0.8-0.2,1.5-0.7,2.1c-0.5,0.6-1.2,0.9-2,0.9c-0.8,0-1.4-0.2-2-0.6s-0.8-1-0.8-1.7
			c0-0.4,0-0.7,0.1-0.9c0.1-0.2,0.1-0.4,0.1-0.6c-0.5,0-1,0.2-1.5,0.5c-0.5,0.3-1,0.7-1.4,1.3v8.7c0,0.4,0.1,0.7,0.2,0.9
			c0.1,0.2,0.3,0.4,0.6,0.6c0.2,0.1,0.6,0.2,1.1,0.3c0.5,0.1,0.9,0.1,1.1,0.1V60h-10.7v-1.2c0.3,0,0.5-0.1,0.8-0.1
			c0.3,0,0.5-0.1,0.7-0.2c0.3-0.1,0.6-0.3,0.7-0.5c0.1-0.2,0.2-0.6,0.2-1v-9.3c0-0.4-0.1-0.7-0.3-1c-0.2-0.3-0.4-0.5-0.7-0.7
			c-0.2-0.1-0.4-0.2-0.7-0.3c-0.3-0.1-0.6-0.1-1-0.2v-1.2l7.6-0.4l0.2,0.2v2.3h0.1c0.7-0.8,1.5-1.5,2.3-2c0.8-0.5,1.7-0.7,2.6-0.7
			c1,0,1.8,0.3,2.4,0.9C340.1,45.4,340.4,46.2,340.4,47.2z"/>
		<path class="st0" d="M344.3,57.4c0,0.8-0.3,1.6-0.9,2.2c-0.6,0.6-1.4,0.9-2.2,0.9c-0.9,0-1.6-0.3-2.2-0.9
			c-0.6-0.6-0.9-1.3-0.9-2.2c0-0.8,0.3-1.6,0.9-2.2c0.6-0.6,1.4-0.9,2.2-0.9c0.8,0,1.6,0.3,2.2,0.9C344,55.8,344.3,56.6,344.3,57.4z
			"/>
		<path class="st0" d="M353.8,60.5c-1.5,0-2.8-0.2-3.9-0.6c-1.1-0.4-2.1-1-2.8-1.8c-0.7-0.8-1.3-1.6-1.6-2.7c-0.4-1-0.5-2.1-0.5-3.4
			c0-1.1,0.2-2.2,0.7-3.2c0.4-1,1-1.9,1.8-2.6c0.8-0.8,1.7-1.4,2.9-1.9c1.2-0.5,2.4-0.7,3.8-0.7c2,0,3.5,0.4,4.6,1.1
			c1.1,0.7,1.7,1.7,1.7,3c0,0.8-0.2,1.4-0.6,1.8c-0.4,0.5-1.1,0.7-2.1,0.7c-0.8,0-1.5-0.2-2-0.6c-0.5-0.4-0.8-0.9-0.8-1.5
			c0-0.5,0.1-1,0.3-1.5c0.2-0.5,0.3-0.9,0.3-1.2c-0.1-0.2-0.3-0.3-0.4-0.4c-0.2-0.1-0.5-0.2-0.8-0.2c-0.5,0-0.9,0.1-1.3,0.3
			c-0.4,0.2-0.8,0.6-1.1,1.2c-0.3,0.5-0.6,1.2-0.8,2.1c-0.2,0.9-0.3,2-0.3,3.2c0,1.9,0.4,3.4,1.3,4.6c0.9,1.2,1.9,1.7,3.2,1.7
			c1.2,0,2.1-0.3,2.8-0.8c0.7-0.5,1.3-1.3,1.9-2.2L361,56c-0.3,0.6-0.7,1.2-1.2,1.8c-0.5,0.5-1,1-1.6,1.4c-0.7,0.4-1.3,0.8-2,1
			C355.5,60.4,354.7,60.5,353.8,60.5z"/>
		<path class="st0" d="M376.3,46.1c0.8,0.7,1.4,1.6,1.8,2.6c0.4,1,0.6,2.1,0.6,3.3c0,1.2-0.2,2.3-0.6,3.3c-0.4,1-1,1.9-1.8,2.7
			c-0.8,0.8-1.8,1.4-3,1.8c-1.2,0.4-2.5,0.6-4,0.6c-1.3,0-2.5-0.2-3.6-0.6c-1.1-0.4-2.1-0.9-2.9-1.7c-0.8-0.7-1.4-1.6-1.9-2.6
			c-0.5-1-0.7-2.2-0.7-3.5c0-1.3,0.2-2.4,0.6-3.4c0.4-1,1-1.9,1.8-2.7c0.8-0.7,1.8-1.3,2.9-1.7c1.2-0.4,2.4-0.6,3.9-0.6
			c1.5,0,2.8,0.2,3.9,0.6C374.5,44.8,375.5,45.4,376.3,46.1z M372.2,57.2c0.2-0.6,0.4-1.3,0.5-2.2c0.1-0.8,0.2-1.8,0.2-3
			c0-0.7-0.1-1.6-0.2-2.5c-0.1-1-0.3-1.7-0.5-2.3c-0.3-0.7-0.6-1.2-1.1-1.6c-0.5-0.4-1-0.6-1.7-0.6c-0.8,0-1.4,0.2-1.8,0.6
			c-0.5,0.4-0.8,1-1,1.6c-0.2,0.6-0.4,1.3-0.5,2.1c-0.1,0.8-0.1,1.7-0.1,2.5c0,1.2,0,2.1,0.1,2.9c0.1,0.8,0.3,1.5,0.5,2.3
			c0.2,0.7,0.6,1.2,1.1,1.6c0.5,0.4,1,0.6,1.7,0.6c0.6,0,1.2-0.2,1.6-0.5C371.6,58.4,372,57.8,372.2,57.2z"/>
		<path class="st0" d="M409.8,60h-9.5v-1.2c0.2,0,0.5-0.1,0.7-0.1c0.3,0,0.5-0.1,0.6-0.2c0.2-0.1,0.4-0.3,0.4-0.5
			c0.1-0.2,0.1-0.6,0.1-1v-7.4c0-1.1-0.2-1.9-0.6-2.5c-0.4-0.5-0.9-0.8-1.7-0.8c-0.5,0-0.9,0.1-1.2,0.2c-0.4,0.1-0.7,0.3-1,0.5
			c-0.3,0.2-0.5,0.4-0.7,0.7c-0.2,0.2-0.3,0.4-0.4,0.6V57c0,0.4,0,0.7,0.1,0.9c0.1,0.2,0.3,0.4,0.5,0.6c0.2,0.1,0.4,0.2,0.6,0.3
			c0.2,0.1,0.4,0.1,0.7,0.2V60h-9v-1.2c0.2,0,0.4,0,0.7-0.1s0.5-0.1,0.6-0.2c0.2-0.1,0.4-0.3,0.4-0.5c0.1-0.2,0.1-0.6,0.1-1v-7.4
			c0-1.1-0.2-1.9-0.6-2.5c-0.4-0.5-0.9-0.8-1.7-0.8c-0.5,0-0.9,0.1-1.2,0.2c-0.4,0.1-0.7,0.3-1,0.5c-0.3,0.2-0.5,0.4-0.7,0.7
			c-0.2,0.2-0.3,0.4-0.4,0.6V57c0,0.4,0,0.7,0.1,0.9c0.1,0.2,0.3,0.4,0.5,0.6c0.2,0.1,0.4,0.2,0.6,0.3c0.2,0.1,0.4,0.1,0.7,0.2V60
			h-9.5v-1.2c0.3,0,0.5,0,0.8-0.1c0.3,0,0.5-0.1,0.7-0.2c0.3-0.1,0.6-0.3,0.7-0.5c0.1-0.2,0.2-0.6,0.2-0.9v-9.3c0-0.3-0.1-0.7-0.3-1
			c-0.2-0.3-0.4-0.6-0.7-0.8c-0.2-0.1-0.4-0.2-0.7-0.3c-0.3-0.1-0.6-0.1-1-0.2v-1.2l7.6-0.4l0.2,0.2v2.2h0.1
			c0.3-0.3,0.7-0.6,1.1-0.9c0.4-0.4,0.8-0.7,1.2-0.9c0.4-0.3,0.9-0.5,1.5-0.6c0.6-0.2,1.3-0.3,2-0.3c1.2,0,2.2,0.3,3,0.8
			c0.8,0.5,1.4,1.2,1.7,2.1h0.1c0.3-0.3,0.7-0.6,1.1-1c0.4-0.4,0.9-0.7,1.2-0.9c0.4-0.3,0.9-0.5,1.6-0.7c0.6-0.2,1.3-0.3,2.1-0.3
			c1.6,0,2.8,0.5,3.7,1.4c0.9,0.9,1.3,2.3,1.3,4V57c0,0.4,0.1,0.7,0.2,0.9c0.1,0.2,0.3,0.4,0.6,0.5c0.2,0.1,0.4,0.1,0.6,0.2
			c0.2,0.1,0.5,0.1,0.9,0.2V60z"/>
	</g>
	<path class="st0" d="M41,121.9H0V0h41V121.9z M38.3,61V12.3L21,6.2L3.7,12.3V61v48.7l17.3,6.1l17.3-6.1V61z"/>
	<path class="st0" d="M10.4,95.9l-2.5,15.2L5.5,95.9V61.7V27.6h2.5h2.5v34.2V95.9z M7.9,89.9c-0.7,0-1.3,4.5-1.3,5.2
		c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3C9.2,94.4,8.6,89.9,7.9,89.9z"/>
	<path class="st0" d="M16.9,95.9l-2.5,17.5L12,95.9V61.7V19.8h2.5h2.5v41.9V95.9z M14.5,89.9c-0.7,0-1.3,4.5-1.3,5.2
		c0,0.7,0.6,1.3,1.3,1.3c0.7,0,1.3-0.6,1.3-1.3C15.7,94.4,15.2,89.9,14.5,89.9z"/>
	<path class="st0" d="M23.5,95.9L21,114.7l-2.5-18.8V61.7V12H21h2.5v49.7V95.9z M21,89.9c-0.7,0-1.3,4.5-1.3,5.2
		c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3C22.3,94.4,21.7,89.9,21,89.9z"/>
	<path class="st0" d="M30,95.9l-2.5,17.5L25,95.9V61.7V19.8h2.5H30v41.9V95.9z M27.5,89.9c-0.7,0-1.3,4.5-1.3,5.2
		c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3C28.8,94.4,28.2,89.9,27.5,89.9z"/>
	<path class="st0" d="M36.5,95.9L34,111.1l-2.5-15.2V61.7V27.6H34h2.5v34.2V95.9z M34,89.9c-0.7,0-1.3,4.5-1.3,5.2
		c0,0.7,0.6,1.3,1.3,1.3c0.7,0,1.3-0.6,1.3-1.3C35.3,94.4,34.7,89.9,34,89.9z"/>
</g>
</svg>

                
            </a>
        </div><!-- /.col5-->
            <div class="col col-sm-12 col-md-7 hidden-xs">   
                <? echo log_in_form(); ?>         


            </div><!-- /.col7-->
        </div><!-- /.row -->
        
        
        <div class="row">  
            <div class="col col-md-offset-3 col-sm-12 col-md-9 ">   
        
           <div id="main-menu" class="hidden-xs	hidden-sm">
            <? echo quick_menu(); ?>
            </div><!-- /.main-menu -->
            
            <div id="mobile-menu-col">
                <div id="mobile-toggle" class="mobileMenuTrigger hidden-md hidden-lg">
                    <img alt="" src="<?=$base;?>images/menu.svg">
                </div>
            </div><!-- end of #mobile-menu-col --> 
            
            </div><!-- /.col8-->
        </div><!-- /.row -->
        
    </div><!-- /.container -->
</header><!-- /header -->


<?
/* The next section deals with titles on sub pages */
// Keep in mind that any divs started in this block of code must be closed in the footer
if($home!='Y' && $_GET['mms'] != 'X'){ //this IF statement is the test.  If these items evaluate to TRUE, it will perform the first block of code.
    echo '<h2 class="title">'.$title.'</h2>';//ECHO is PHP's command to output to the page.
} else { //If the IF statement evaluates to FALSE, this code will be run.  This is optional.

}?> 