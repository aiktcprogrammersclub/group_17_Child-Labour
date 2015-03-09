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
			//include("uhome.php");
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

<?php
require_once("classpage.php");
$page = new Page();
print $page->getTop2();
?>

<?php 
$sql = mysql_query("select name from user where email='$email'");
			while ($row = mysql_fetch_array($sql))
			{
			$u=$row['name'];
			}			 
				echo"<center><h4>	Welcome	 " .$u. " </h4> </center>";
			?>


<div id="bigsec">
<div id="nav">
<a href="ustop.php">STOP Child Labour</a>
 <a href="uacts.php">Acts and Laws</a>
<a href="uhelpline.php">Helpline</a>
<a href="udonate.php">Donate/Support</a>
<a href="usuggest.php">Suggestions</a>
</div>

<div id="section">
<div id= "subtopic">
<h2 style="text-align:center">What is Child Labour?</h2>
</div>
</br></br></br></br>
<p>
<b>Child labour</b> refers to the employment of children in any work that deprives children of their childhood,
 interferes with their ability to attend regular school, and that is mentally, physically, socially or morally dangerous and harmful.
</p>

<br>

<p>
<b>India</b> is sadly the home to the largest number of child labourers in the world. 
The census found an increase in the number of child labourers from 11.28 million in 1991 to 12.59 million in 2001. M.V. Foundation in Andhra Pradesh 
found nearly 400,000 children, mostly girls between seven and 14 years of age, toiling for 14-16 hours a day in cottonseed production across the country 
of which 90% are employed in Andhra Pradesh.
</p>

<p>
</p>
<br>

<p>Child Labour in India 40% of the labour in a precious stone cutting sector is children. NGOs have discovered 
the use of child labourers in mining industry in Bellary District in Karnataka in spite of a harsh ban on the same. In urban areas there is a high 
employment of children in the zari and embroidery industry.
<br>
<br>
<br>
</p>

<table>
<tr>
 <td><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Flocalhost%2Fabc.html&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=25" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:25px;" allowTransparency="true"></iframe></td>


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

<div id="fb-root"></div><script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="fb-post" data-href="https://www.facebook.com/child12345/posts/666779180094927" data-width="466"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/child12345/posts/666779180094927">Post</a> by <a href="https://www.facebook.com/child12345">Stop Child Labour</a>.</div></div>


<iframe width="500" height="280" src="https://www.youtube.com/embed/cdqrvlQNJMs" frameborder="0" allowfullscreen></iframe>

</div>
</div>

<?php
print $page->getBottom();
?>