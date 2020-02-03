<?php
	$path = './';
	$page = 'Louvre';
	include $path.'assets/inc/header.php';
?>
	<div id="nav">
		<a href="index.php">Home</a>
		<a href="places.php">Famous Places</a>
		<a href="arrondissements.php">Arrondissements</a>
		<a href="feedback.php">Feedback</a>
		<a href="comments.php">Comments</a>
		<a href="slideshow.php">Slideshow</a>
		<a href="resources.php">Resources</a>
	</div>
	<div id="cont">
		<img src="assets/media/pyramide-louvre.jpeg" class="maps" alt="the Louvre">
		<p class="par" id="one">The Louve was originally designed as a fortress in 1190 to protect Paris. Though it is at the heart of the city today it was originally at the outer limts of the city. It was also a prison for the enemies of the French. The Louvre was rebuilt in the mid-1500s because Francois I wanted kings to live there. Right before the Revolution the French government was forced to move to Paris. After the war Napoleon I lived there. During this time many interior updates where happenng. After the government left the Louvre it faced some difficulties such as the the purchase of a fake tiara in 1896 and the theft of the Mona Lisa in 1911. Now the museum is thriving and hugely popular.</p>
		<p class="par">Closest Metro stops: Louvre Rivoli (Line 1), Palais Royal Mus&eacute;e du Louvre (Line 1), Ch&acirc;telet les Halles (RER A)</p>
	</div>
<?php 
	include $path.'assets/inc/footer.php';
?>