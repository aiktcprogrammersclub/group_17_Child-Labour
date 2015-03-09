<?php
require_once("classpage.php");
$page = new Page();
print $page->getTop();
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
				if (login.pass.value=="")
				{
					alert("Please enter a password ");
					return false
				}
				 return true;
            }
    </script>

<div id="header">
<h1>Child Labour</h1>
</div>

<div id="nav">
<a href="stop.php">STOP Child Labour</a>
 <a href="acts.php">Acts and Laws</a>
<a href="helpline.php">Helpline</a>
<a href="donate.php">Donate/Support</a>
<a href="suggest.php">Suggestions</a>
</div>


<div id="section">
<div id= "subtopic">
<h2 style="text-align:center">User login</h2>
</div>
</br></br></br></br>

<form name ="login" action="uhome.php" method="Post" onsubmit="return chkfrm()">
							
							<div id="label">Email : *
								<input name="email" id="textbox" style="margin-top:0px;" type="text">
							</div>
							
							<div id="label">Password : *
								<input name="pass" id="textbox" style="margin-top:0px;" type="password">
							</div>
												<center><font color="red" size="3"><blink> Incorrect username and password!!!</blink></font></center>							
							<div id="label"> &nbsp	</div>
						<div id="btn" style="margin-left:250px; ">
							<input type="submit" name="submit" value="login" style="background-color:#f45400;color:#ffffff;"> 
							 <input type="reset" name="reset" style="background-color:#f45400;color:#ffffff;"> 
							</div>
								<div id="label"> &nbsp	</div>
					
					<div id="label"><center> If you have not registered then click here to <a href="reg.php"><font size="4"> Register</font></a></center>
					     </div>

					</form>

<table>
<tr>
 <td><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Flocalhost%2Fabc.html&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=25" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:25px;" allowTransparency="true"></iframe></td>
<!-- <iframe src="//www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;layout=button_count" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe> <br> -->


<td><a class="twitter-share-button"
  href="https://twitter.com/share">
Tweet
</a>
<script>
window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
</script></td>	

<td><!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<!-- Place this tag where you want the share button to render. -->
<div class="g-plus" data-action="share"></div></td>

</tr>
</table> 

</div>

<div id="rig">
	
</div>
<!-- Fb
<iframe src="//www.facebook.com/plugins/facepile.php?app_id&amp;href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;action&amp;width&amp;height&amp;max_rows=1&amp;colorscheme=light&amp;size=medium&amp;show_count=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe> -->



<?php
print $page->getBottom();
?>