<?php
	$submit=strip_tags($_POST['submit']);
	$email=strip_tags($_POST['email']);
	$suggest=strip_tags($_POST['suggest']);
	
if($submit)
{
include("db.php");


   	if($email&&$suggest)
		{
			$query = mysql_query("INSERT INTO suggestions VALUES ('','$email','$suggest',now())");
		include("uthank_sugg.php");
		die();
		}
}
 
?>