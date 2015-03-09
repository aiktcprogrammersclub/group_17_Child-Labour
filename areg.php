<?php
require_once("classpage.php");
$page = new Page();
print $page->getTop1();
?>

<link href="css/a.css" rel="stylesheet" type="text/css" />
<script language=javascript>
            
			function chkfrm()
            {
                if (register.fname.value=="")
                {
                    alert("Please Enter your name");
                    return false
                }
                
				if (register.email.value=="")
				{
					alert("Please Enter your Email");
					return false
				}
				var a1=register.email.value;
				if((a1.search('@'))<1 &&(a1.search('.'))<1&& (a1.search("com"))<1)
				{
					alert("Invalid Email Address!!!");
					return false;
				}
				if (register.pass.value=="")
				{
					alert("Please choose a password ");
					return false
				}
				if(register.pass.value.length<6)
				{
					alert("Please enter minimum 6 charecters");
					return false
				}
				if (register.cpass.value=="")
				{
					alert("Please Enter confirm password properly");
					return false
				}
				if (register.cpass.value!=register.pass.value)
				{
					alert("Please Enter confirm password properly");
					return false
				}

				 return true;
            }
    </script>

<div id="nav">
	<a href="nsuggest.php">New Suggestions</a>
	 <a href="nblogs.php">New Blogs</a></br>
	<a href="ncomp.php">New Complaints</a>
	<a href="ndonate.php">Donations</a></br>
</div>

<div id="section">
<div id= "subtopic">
<h2 style="text-align:center">Admin Registration</h2>
</div>
</br></br></br></br>

<form name ="register" action="ar_next.php" method="Post" onsubmit="return chkfrm()">
							<div id="label">
							
							</div>
							<div id="label">Name : *
								<input name="fname" id="textbox"  type="text">
							</div>
							
							<div id="label">Email : *
								<input name="email" id="textbox" style="margin-top:0px;" type="text">
							</div>
							
							<div id="label">Password : *
								<input name="pass" id="textbox" style="margin-top:0px;" type="password">
							</div>
							
							<div id="label">Conform password : *
								<input name="cpass" id="textbox" style="margin-top:0px;" type="password">
							</div>
							
							<div id="label"> &nbsp	</div>
						<div id="btn" style="margin-left:250px; ">
							<input type="submit" name="submit" value="Register" style="background-color:#f45400;color:#ffffff;"> 
							 <input type="reset" name="reset" style="background-color:#f45400;color:#ffffff;"> 
							</div>
								<div id="label"> &nbsp	</div>
					
					<div id="label">
					     </div>

					</form>





</div>

<div id="rig">
	
</div>
<!-- Fb
<iframe src="//www.facebook.com/plugins/facepile.php?app_id&amp;href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;action&amp;width&amp;height&amp;max_rows=1&amp;colorscheme=light&amp;size=medium&amp;show_count=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe> -->



<?php
print $page->getBottom();
?>