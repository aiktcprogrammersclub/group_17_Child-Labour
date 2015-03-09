<?php
require_once("classpage.php");
$page = new Page();
print $page->getTop2();
?>

<link href="css/a.css" rel="stylesheet" type="text/css" />
<script language=javascript>
            
			function chkfrm()
            {
                
				if (login.email.value=="")
				{
					alert("Please Enter your Email");
					return false
				}
				var a1=login.email.value;
				if((a1.search('@'))<1 &&(a1.search('.'))<1&& (a1.search("com"))<1)
				{
					alert("Invalid Email Address!!!");
					return false;
				}
				if (login.suggest.value=="")
				{
					alert("Please enter your suggestions ");
					return false
				}
				 return true;
            }
    </script>

<div id="nav">
<a href="uhelpline.php">Helpline</a>
<a href="udonate.php">Donate/Support</a>
<a href="usuggest.php">Suggestions</a>
</div>

<div id="section">
<div id= "subtopic">
<h2 style="text-align:center">Suggestions</h2>
</div>
</br></br></br></br>

<font color="red"><center>Thank you for your valuable suggestion !!<center> </font><br>
<center>
<a href="usuggest.php">
							<div id="btn" style="margin-left:250px; ">
								<input type="submit" name="submit" value="<<Back" style="background-color:#f45400;color:#ffffff;"> 
							</div>
</a>
</center>
</div>

<div id="rig">
	
</div>

<?php
print $page->getBottom();
?>