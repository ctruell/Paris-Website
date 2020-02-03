<?php
	$path = './';
	$page = '12th Arrondissement';
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
		<img src="assets/media/12.gif" class="maps" alt="map of the 12th arrondissement">
		<p class="par" id="one">The 12th arrondissement of Paris, also known as arrondissement de Reuilly, is located on the right bank of the River Seine. It contains the second largest opera house in Paris.</p>
		<p class="par">Famous Places: Op&eacute;ra Bastille</p>
		<p class="par">Places to eat: &Agrave; la Biche au Bois (45 avenue Ledru-Rollin), L'Amarante (4 rue Biscornet)</p>
		<p class="par">Places to stay: Hotel Terminus Lyon Paris (19 Boulevard Diderot), Ibis Styles Paris Bercy (77 rue de Bercy)</p>
	</div>
<?php 
	include $path.'assets/inc/footer.php';
?>