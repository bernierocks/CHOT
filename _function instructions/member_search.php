
<!-- Member Directory Search - Business Name -->
<form action="http://www.memberleap.com/members/directory/query.php" method="post">
	<input type="hidden" name="org_id" value="<?=$org_id;?>" />
	<input type="text" name="business_name" placeholder="By Business Name"/>
	<input type="submit" value="Search" />
</form>

<!-- Member Directory Search - Zip Code -->
<form method="post" action="http://www.memberleap.com/members/directory/query.php">
	<input type="hidden" name="org_id" value="<?=$org_id;?>" />
	<input type="hidden" name="zip_range" value="5" />
	<input type="text" name="zip_code" placeholder="By Zipcode"/>
	<input type="submit" value="Search" />
</form>

<!-- Member Directory Search - Categories - REQUIRES parseXML3.php and members_curl.php.  Just grab these two files and put them in the public_html folder.-->
<form method="POST" action="http://www.viethconsulting.com/members/directory/query.php">
	<input type="hidden" name="org_id" value="<?=$org_id;?>" />						
	<select name="business_cat_id" class="form-control" style="border-radius: 5px; max-width: 200px;">
		<option value="0">Select a Category...</option>
		<?	 
		require_once("parseXML3.php");
		include ("members_curl.php");
		$cats = $array_new['BUSINESS_CATS']['0']['BUSINESS_CAT'];
		foreach ($cats as $cat_key => $cat){
			$categories = $cat['VALUE'];
			$attr = $cat['ATTRIBUTES'];
			foreach($attr as $cat_id){
				if($cat_id > 1){
					$cat_id = $cat_id;
				}
			}
			$categories = str_replace('+', ' ', $categories);
			$categories = str_replace('%26amp%3B', '&', $categories);
			$all_cats .= '<option value="'.$cat_id.'">'.$categories.'</option>';
		}
		echo $all_cats;
		?>
	</select>
	<input type="submit" value="Search"/>	
</form>