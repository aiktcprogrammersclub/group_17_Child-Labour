
<?php
 
session_start();
$submit=strip_tags($_POST['submit']);
$email=$_POST['email'];
$password=$_POST['pass'];
if($email&&$password)
{
				include("db.php");
				$query=mysql_query("select email , password from user where email='$email' and password='$password'");
				$numrow=mysql_num_rows($query);
	if($numrow!=0)
	{
				while($row=mysql_fetch_assoc($query))
			{
				$dbemail=$row['email'];
				$dbpassword=$row['password'];
			}
		if($email==$dbemail&&$password==$dbpassword)
		{
			$_SESSION['email']=$email;
			include("uhome.php");
		}
			else
			{
				include("rejected.php");
				die();
			}
				
	}
		else
		{
				include("rejected.php");
				die();
		}
}
		else
		{
				include("rejected.php");
				die();
		}

?>
