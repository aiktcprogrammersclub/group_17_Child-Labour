<?php
require_once("classpage.php");
$page = new Page();
print $page->getTop2();
?>

<link href="css/a.css" rel="stylesheet" type="text/css" />

<script language=javascript>
            
			function chkfrm()
            {
                
				if (odonate.email.value=="")
				{
					alert("Please Enter your Email");
					return false
				}
				var a1=odonate.email.value;
				if((a1.search('@'))<1 &&(a1.search('.'))<1&& (a1.search("com"))<1)
				{
					alert("Invalid Email Address!!!");
					return false;
				}
				
                if (odonate.name.value=="")
				{
					alert("Please Enter your Name");
					return false
				}
				
				if (odonate.cont.value=="")
				{
					alert("Please write your Contact Number ");
					return false
				}
				if (odonate.cont.value.length<10 )
                {
                    alert("Please Enter 10 digit mobile number");
                    return false
                }
				
				 return true;
            }
    </script>

<div id="nav">
<a href="uodonate.php">Online Donation</a><br>
<a href="udonate.php">Offline Donation</a><br>
</div>

<div id="section">
<div id= "subtopic">
<h2 style="text-align:center">Support us by donating</h2>
</div>
</br></br></br></br>
<font align="center"><h2>Online donation<h2></font>

<form name ="doante" action="uod_next.php" method="Post" onsubmit="return chkfrm()">

<div id="label">Email :* <input name="email" id="textbox" style="margin-top:0px;" type="text">
</div>
<div id="label">Name :* <input name="name" id="textbox" style="margin-top:0px;" type="text">
</div>
<div id="label">Contact Number :* <input name="cont" id="textbox" style="margin-top:0px;" type="text">
</div>

<div id="label" style="margin-left:0px;">
Options: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	<select name="name" value=" " id="dates">	
		<option>Online Banking</option>	
		<option>Paypal</option>	
		<option>Master Cards</option>	
		<option>Credit Cards</option>			
	</select>
</div>

<div id="label">Bank Name :* <input name="bname" id="textbox" style="margin-top:0px;" type="text">
</div>

<div id="label">Card Number :* <input name="cards" id="textbox" style="margin-top:0px;" type="text">
</div>
				
							<div id="btn" style="margin-left:200px; ">
							<input type="submit" name="submit" value="Donate" style="background-color:#f45400;color:#ffffff;"> 
							 <input type="reset" name="reset" style="background-color:#f45400;color:#ffffff;"> 
							</div>
						
</form>
<br>
<br>

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
	<img src="images/donate.png" alt="Child Labour" style="width:500px; height:100% "> 
</div>
<!-- Fb
<iframe src="//www.facebook.com/plugins/facepile.php?app_id&amp;href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;action&amp;width&amp;height&amp;max_rows=1&amp;colorscheme=light&amp;size=medium&amp;show_count=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe> -->



<?php
print $page->getBottom();
?>