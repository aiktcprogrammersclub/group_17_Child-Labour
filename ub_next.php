<?php
	$submit=strip_tags($_POST['submit']);
	$name=strip_tags($_POST['name']);
	$pst=strip_tags($_POST['pst']);
	
if($submit)
{
include("db.php");

   	if($name&&$pst)
		{
			$query = mysql_query("INSERT INTO blogs VALUES ('','$name','$pst',now())");
		include("ublog1.php");
		die();
		}
}
 
?>