<?php
	$submit=strip_tags($_POST['submit']);
	$fname=strip_tags($_POST['fname']);
	$email=strip_tags($_POST['email']);
	$pass=strip_tags($_POST['pass']);
	$cpass=strip_tags($_POST['cpass']);
/*
	if($submit)
{
	include("db.php");
$query=mysql_query("select email from user");
$numrow=mysql_num_rows($query);
if($numrow!=0)
{
while($row=mysql_fetch_assoc($query))
{
$dbusername=$row['uname'];
$dbpassword=$row['pass'];
$dbemail=$row['email'];
}
}
}

if($uname==$dbusername&&$pass==$dbpassword&&$email==$dbemail)
{
include("registerd.php");
die();
}
else*/

if($submit)
{
include("db.php");
   	if($fname&&$email&&$pass&&$cpass)
		{
			$query = mysql_query("INSERT INTO user VALUES ('','$fname','$email','$pass','$cpass')");
		include("login.php");
		die();
		}
}
 
?>