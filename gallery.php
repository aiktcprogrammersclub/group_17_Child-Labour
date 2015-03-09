<?php
require_once("classpage.php");
$page = new Page();
print $page->getTop();
?>

<?php
	$imagesTotal = 8;     // SET TOTAL IMAGES IN GALLERY

	// set description to each image
	$description[1] = 'Child Labour in India';
	$description[2] = 'Child Labour in Zimbabwe';
	$description[3] = 'Children from Delhi forced to work';
	$description[4] = 'An initiative against child labour';
	$description[5] = 'Child Labour in Afghanistan';
	$description[6] = 'Children working in industries';
	$description[7] = 'Child works hard for livelihood';
	$description[8] = 'A Junior mechanic';
?>

<div id="nav">
<a href="stop.php">STOP Child Labour</a>
 <a href="acts.php">Acts and Laws</a>
<a href="helpline.php">Helpline</a>
<a href="donate.php">Donate/Support</a>
<a href="suggest.php">Suggestions</a>
</div>

<div class="galleryContainer">
	<font align="center"><h1>Child Labour Gallery</h1></font>	
<h1>	<div class="galleryThumbnailsContainer">
		<div class="galleryThumbnails">
			<?php
				for ($t = 1; $t <= $imagesTotal; $t++) {
					echo '<a href="javascript: changeimage(' . $t . ')" class="thumbnailsimage' . $t . '"><img src="gimages/thumbs/image' . $t . '.jpg" width="auto" height="100" alt="" /></a>';
				}
			?>
		</div>
	</div>

	<div class="galleryPreviewContainer">
		<div class="galleryPreviewImage">
			<?php
				for ($i = 1; $i <= $imagesTotal; $i++) {
					echo '<img class="previewImage' . $i . '" src="gimages/image' . $i . '.jpg" width="900" height="auto" alt="" />';
				}
			?>
		</div>

		<div class="galleryPreviewArrows">
			<a href="#" class="previousSlideArrow">&lt;</a>
			<a href="#" class="nextSlideArrow">&gt;</a>
		</div>
	</div>

	<div class="galleryNavigationBullets">
		<?php
			for ($b = 1; $b <= $imagesTotal; $b++) {
				echo '<a href="javascript: changeimage(' . $b . ')" class="galleryBullet' . $b . '"><span>Bullet</span></a> ';
			}
		?>
	</div>

	<div class="galleryDescription">
		<?php
			for ($x = 1; $x <= $imagesTotal; $x++) {
				echo '<div class="description' . $x . '">' . $description[$x] . '</div>';
			}
		?>
</h1>	</div>
</div>

<script type="text/javascript">
// init variables
var imagesTotal = <?php echo $imagesTotal; ?>;
var currentImage = 1;
var thumbsTotalWidth = 0;

$('a.galleryBullet' + currentImage).addClass("active");
$('a.thumbnailsimage' + currentImage).addClass("active");
$('div.description' + currentImage).addClass("visible");


// SET WIDTH for THUMBNAILS CONTAINER
$(window).load(function() {
	$('.galleryThumbnails a img').each(function() {
		thumbsTotalWidth += $(this).width() + 10 + 8;
	});
	$('.galleryThumbnails').width(thumbsTotalWidth);
});


// PREVIOUS ARROW CODE
$('a.previousSlideArrow').click(function() {
	$('img.previewImage' + currentImage).hide();
	$('a.galleryBullet' + currentImage).removeClass("active");
	$('a.thumbnailsimage' + currentImage).removeClass("active");
	$('div.description' + currentImage).removeClass("visible");

	currentImage--;

	if (currentImage == 0) {
		currentImage = imagesTotal;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('img.previewImage' + currentImage).show();
	$('div.description' + currentImage).addClass("visible");

	return false;
});
// ===================


// NEXT ARROW CODE
$('a.nextSlideArrow').click(function() {
	$('img.previewImage' + currentImage).hide();
	$('a.galleryBullet' + currentImage).removeClass("active");
	$('a.thumbnailsimage' + currentImage).removeClass("active");
	$('div.description' + currentImage).removeClass("visible");

	currentImage++;

	if (currentImage == imagesTotal + 1) {
		currentImage = 1;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('img.previewImage' + currentImage).show();
	$('div.description' + currentImage).addClass("visible");

	return false;
});
// ===================


// BULLETS CODE
function changeimage(imageNumber) {
	$('img.previewImage' + currentImage).hide();
	currentImage = imageNumber;
	$('img.previewImage' + imageNumber).show();

	$('.galleryNavigationBullets a').removeClass("active");
	$('.galleryThumbnails a').removeClass("active");
	$('.galleryDescription > div').removeClass("visible");

	$('a.galleryBullet' + imageNumber).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('div.description' + currentImage).addClass("visible");
}
// ===================


// AUTOMATIC CHANGE SLIDES
function autoChangeSlides() {
	$('img.previewImage' + currentImage).hide();
	$('a.galleryBullet' + currentImage).removeClass("active");
	$('a.thumbnailsimage' + currentImage).removeClass("active");
	$('div.description' + currentImage).removeClass("visible");

	currentImage++;

	if (currentImage == imagesTotal + 1) {
		currentImage = 1;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('img.previewImage' + currentImage).show();
	$('div.description' + currentImage).addClass("visible");
}

var slideTimer = setInterval(function() {autoChangeSlides(); }, 3000);
</script>


<?php
print $page->getBottom();
?>