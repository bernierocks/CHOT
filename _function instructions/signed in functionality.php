<? 

// Part one - the test in the if looks to see if they're signed in.  
// The "else" section is what will show if they are not signed in
if(isset($_COOKIE["rem_sess"]) || isset($_GET['logged_in'])){
	$join_link = "join link (html)";
} else {
	$join_link = '';
}

//Then, the variable that we create can be used elsewhere.  
//This example is to append a link to the menu- '' for the "before" option and $join_link for the "after" option
quick_menu('',$join_link);
?>