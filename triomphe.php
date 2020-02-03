<?php
	$path = './';
	$page = 'Arc de Triomphe';
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
		<img src="assets/media/triomphe.jpg" class="maps" alt="Arc de Triomphe">
		<p class="par" id="one">In 1806, the Arc de Triomphe was commissioned by Napoleon I. In 1806, it was also decided that Place de l'Etoile would be the location for the arc. Construction started in August of 1806 and continued until 1814. Finally the arc was complete in 1836. An unknown soldier was buried under the arc in 1919 after World War I.</p>
		<p class="par">Closest Metro stops: Charles de Gaulle Etoile (Lines 1, 2, 6 and RER A)</p>
	</div>
<?php 
	include $path.'assets/inc/footer.php';
?>