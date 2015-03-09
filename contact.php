<?php
require_once("classpage.php");
$page = new Page();
print $page->getTop();
?>

<div id="nav">
<a href="stop.php">STOP Child Labour</a>
 <a href="acts.php">Acts and Laws</a>
<a href="helpline.php">Helpline</a>
<a href="donate.php">Donate/Support</a>
<a href="suggest.php">Suggestions</a>
</div>

<div id="section">
<div id= "subtopic">
<h2 style="text-align:center">Contact Us</h2>
</div>
</br></br></br></br>

<table>
<tr>

<td><h3>Shoeb Shaikh &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
<p>AIKTC, Panvel <br><br> &#9990; 9699744855</p>
</td>
<td><h3>Abdul Shamad &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
<p>AIKTC, Panvel <br><br> &#9990; 8108233196</p>
</td>
<td><h3>Manzoor Ansari </h3>
<p>AIKTC, Panvel <br><br> &#9990; 8767462201</p>
</td>
</tr>
</table>
<br><br><br>

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

<div id="fb-root"></div><script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="fb-post" data-href="https://www.facebook.com/child12345/posts/666779180094927" data-width="466"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/child12345/posts/666779180094927">Post</a> by <a href="https://www.facebook.com/child12345">Stop Child Labour</a>.</div></div>


</div>


<?php
print $page->getBottom();
?>