<?php
	$path = './';
	$page = 'Notre-Dame';
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
		<img src="assets/media/notre_dame.JPG" class="maps" alt="notre dame">
		<p class="par" id="one">Notre-Dame is a cathedral located in the 4th arrondissement of Paris on the island &Icirc;le de la Cit&eacute;. It is over 800 years old and it took 200 years to complete. Construction started in 1163 and finished 1345. There was a point during its history where it was in such bad shape that it was almost demolished, but was saved by Napoleon who was later crowned Emperor inside the cathedral in 1804. It was rumored that German soldiers might destroy parts of the Cathedral during World War II. It still holds mass every Sunday for Roman Catholics.</p>
		<p class="par">Closest Metro stops: St-Michel Notre-Dame (RER B or RER C), Cit&eacute; (Line 4)</p>
	</div>
<?php 
	include $path.'assets/inc/footer.php';
?>