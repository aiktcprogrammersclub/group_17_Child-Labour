<?php

			include("db.php");
			
			$go=$_POST['submit'];
			$name=$_POST['name'];
			
			$sql = mysql_query("delete  from blogs where");
			
	if(!empty($go))
	{
		
		$sql = mysql_query("delete  from blogs where name='$name'");
		include("deleteb.php");
 
	}
?>