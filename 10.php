<?php
	$path = './';
	$page = '10th Arrondissement';
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
		<img src="assets/media/10.gif" class="maps" alt="map of the 10th arrondissement">
		<p class="par" id="one">The 10th arrondissement is located on the right bank of the River Seine. It contains 2 main railway stations Gare du Nord (North Station) and Gare de l'Est (East Station). </p>
		<p class="par">Famous Places: Canal Saint-Martin, Gare du Nord, Gare de l'Est</p>
		<p class="par">Places to eat: Les Arlots (136 rue Faubourg Poissonnère), Chez Michel (10 rue de Belzunce)</p>
		<p class="par">Places to stay: Generator Paris (9 - 11 Place Du Colonel Fabien), Le Marcel (11 Rue Du 8 Mai 1945)</p>
	</div>
<?php 
	include $path.'assets/inc/footer.php';
?>