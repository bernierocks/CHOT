<?<?
// Get some info, limit the characters
// Two commands we'll be working with: 
// file_get_contents('FILE_YOU_NEED');
// substr($VARIALBE_OF_FILE_CONTENTS)
// 

// This line creates a new variable called $our_file, and stores the contents of whatever.htm in that variable.
// You can change the variable name ($member_spotlight) to whatever you want. 
// I strongly suggest making this descriptive of what you're trying to do. 
// For example, $news_paragraph would be a a great choice for a news-related item
<? $member_spotlight = file_get_contents('front_page_comments.htm'); ?>

// This line takes that variable we've created and makes a "sub-string" from it - a portion of the string that you specify.
// In substr(), there are three attributes.  The first one tells you which variable we're working with (in this case $member_spotlight).
// The second attribute is the starting number.  Leave this at zero.  PHP always starts counting at 0.
// The third attribute is the length.  In this case, we're truncating $member_spotlight from the first character (0) to the 123rd character.
<? $member_spotlight = substr($member_spotlight,0,123)?>



// 12/15/2014 - Jake will be adding the following super shortener function soon!
// First attribute - page you want to shorten
// Second attribute - Starting point (always leave at 0 unless you're sure you want to start elsewhere
// Third attribute - ending point.  This will end the input after the last space, not at the character you specify!!
// To print this directly to the page, put an = in front of it (as shown). 
// To store this data in a variable to mess with later, put a variable in front of it (<? $variable = input_shor... ?>)
<?=input_shortener('page_to_shorten.htm',0,123);?>

