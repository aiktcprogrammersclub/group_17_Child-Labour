<?php
	$submit=strip_tags($_POST['submit']);
	$amt=strip_tags($_POST['amt']);
	$email=strip_tags($_POST['email']);
	$name=strip_tags($_POST['name']);
	$cont=strip_tags($_POST['cont']);
	
if($submit)
{
include("db.php");

   	if($amt&&$email&&$name&&$cont)
		{
			$query = mysql_query("INSERT INTO donations VALUES ('','$amt','$email','$name','$cont',now())");
		include("donate.php");
		die();
		}
}
 
?>