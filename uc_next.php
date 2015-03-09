<?php
	$submit=strip_tags($_POST['submit']);
	$name=strip_tags($_POST['name']);
	$email=strip_tags($_POST['email']);
	$comp=strip_tags($_POST['comp']);
	
if($submit)
{
include("db.php");


   	if($name&&$email&&$comp)
		{
			$query = mysql_query("INSERT INTO complaints VALUES ('','$name','$email','$comp',now())");
		include("ucomplaint1.php");
		die();
		}
}
 
?>