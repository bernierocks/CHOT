<?
// If we're building a site and already have the domain, but there is no existing site, 
// put this in the header in order to display the die message.

$acceptable = array(
	'50.249.172.118', // us here at vieth
	'209.59.161.129', // MMS IPs (so when you sign in, it doesn't give you the die header)
	'209.59.183.219',
	'209.59.173.219',

	'184.180.121.189' // Their IPs
);

$die_message = '
	<div class="die-message">
		<a href="http://www.naxsa.org">www.naxsa.org</a> website is currently under construction.
		If you are interested in becoming a member of the North American Excavation Shoring Association (NAXSA)
		or would like more information, please contact <a href="mailto:membership&#64;naxsa&#46;org">membership&#64;naxsa&#46;org</a>
		or call <a href="tel:5403694489">(540) 369-4489</a> or toll free at <a href="tel:8559662972">(855) 966-2972</a>
	</div>
';
if (!in_array($_SERVER['REMOTE_ADDR'],$acceptable)){
    die($die_message);
}?>