<?php
//session_start();
$submit=strip_tags($_POST['submit']);
$email=$_POST['email'];
$password=$_POST['pass'];

if($email&&$password)
{
				include("db.php");
				$query=mysql_query("select name, email , password from admin where email='$email' and password='$password'");
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
		}
			else
			{
				include("arejected.php");
				die();
			}
				
	}
		else
		{
				include("arejected.php");
				die();
		}
}
		else
		{
				include("arejected.php");
				die();
		}

?>

<?php
require_once("classpage.php");
$page = new Page();
print $page->getTop1();
?>

 <?php 
$sql = mysql_query("select name from admin where email='$email'");
			while ($row = mysql_fetch_array($sql))
			{
			$u=$row['name'];
			}			 
				echo"<center><h4>	Welcome	 " .$u. " </h4> </center>";
			?>

<div id="bigsec">
<div id="nav">
<a href="nsuggest.php">New Suggestions</a>
 <a href="nblogs.php">New Blogs</a></br>
<a href="ncomp.php">New Complaints</a>
<a href="ndonate.php">Donations</a></br>
<a href="logout.php">Logout</a>
</div>
<div id="section">

<div id= "subtopic">
<h2 style="text-align:center">What is Child Labour?

</h2>
</div>
</br></br></br></br>
<p>
Child labour refers to the employment of children in any work that deprives children of their childhood,
 interferes with their ability to attend regular school, and that is mentally, physically, socially or morally dangerous and harmful.
</p>

<br>

<p>
<b>India</b> is sadly the home to the largest number of child labourers in the world. 
The census found an increase in the number of child labourers from 11.28 million in 1991 to 12.59 million in 2001. M.V. Foundation in Andhra Pradesh 
found nearly 400,000 children, mostly girls between seven and 14 years of age, toiling for 14-16 hours a day in cottonseed production across the country 
of which 90% are employed in Andhra Pradesh.
</p>

<br>

<p>Child Labour in India 40% of the labour in a precious stone cutting sector is children. NGOs have discovered 
the use of child labourers in mining industry in Bellary District in Karnataka in spite of a harsh ban on the same. In urban areas there is a high 
employment of children in the zari and embroidery industry.
</p>

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

<!-- youtube -->
<iframe width="500" height="315" src="https://www.youtube.com/embed/cdqrvlQNJMs" frameborder="0" allowfullscreen></iframe>


<!-- Fb
<iframe src="//www.facebook.com/plugins/facepile.php?app_id&amp;href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;action&amp;width&amp;height&amp;max_rows=1&amp;colorscheme=light&amp;size=medium&amp;show_count=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe> -->
</div>

</div>

<?php
print $page->getBottom();
?>