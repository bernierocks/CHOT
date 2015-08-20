
<!-- In order to get the search working:
1) copy this form to where you need your search box
2) start the google CSE for the site you're working on
3) Get the number from google's code, and place it in the $search_code variable below
4) make sure that search.php is in your public_html folder -->


<? $search_code='010563352096309179583:jrgt_agfh7e';?>
<form id="searchbox_<?=$search_code?>" action="<?=$base?>search.php" method="post">
	<input value="<?=$search_code?>" name="cx" type="hidden">
	<input type="hidden" name="ma" value="Y">
	<input value="FORID:11" name="cof" type="hidden">
	<input id="q" class="ls-box" name="q" size="30" type="search">
	<input value="Search" name="sa" class="ls-button" type="submit">
	<br>
</form>