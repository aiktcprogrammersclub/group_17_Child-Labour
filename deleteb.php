<?php
require_once("classpage.php");
$page = new Page();
print $page->getTop1();
?>

<link href="css/a.css" rel="stylesheet" type="text/css" />

<div id="nav">
<a href="nsuggest.php">New Suggestions</a>
 <a href="nblogs.php">New Blogs</a></br>
<a href="ncomp.php">New Complaints</a>
<a href="ndonate.php">Donations</a></br>
</div>

<div id="section">
<div id= "subtopic">
<h2 style="text-align:center">Delete Blogs</h2>
</div>
</br></br></br></br>

<form name="delete" action="delete_next.php" method="POST">

<div id="label" style="margin-left:150px;"> 
	Name : <select name="name" value="" >	
	<option>Name</option>									
		
		<?php	
		include("db.php");
		$extract=mysql_query("select distinct name from blogs");
				while($row=mysql_fetch_assoc($extract))
				{
				foreach($row as $a)
				echo "<option name='name'>$a </option>";
				}
				?>
					</select>
</div>

					<div id="btn" style="margin-left:250px; ">
							<input type="submit" name="submit" value="Delete" style="background-color:#f45400;color:#ffffff;"> 
							 
					</div>
					
						</form>


<?php

			$sql = mysql_query("select * from blogs");
			while ($row = mysql_fetch_array($sql)){
					
				echo"<div class='display'>

				<h3>Name: ".$row['name']. "</h3>
				
				<p><h4>Post: ".$row['post']." </h4>
							
						<h4>Date and Time : ".$row['date']."<h4> 							
				</p>
							
							
			</div>";
				
				}
				
										
?>

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