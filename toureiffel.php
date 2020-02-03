<?php
	$path = './';
	$page = 'Eiffel Tower';
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
		<img src="assets/media/eiffel_tower1.jpg" class="maps" alt="eiffel tower">
		<p class="par" id="one">In 1889 the Eiffel et Compagie won the Exposition Universelle a competition to create a momument to mark the 100 aniversary of the French Revolution. One of Eiffel's employees, Maurice Koechlin, came up with the concept. The final concept had more than 2.5 million rivets and 18,000 iron pieces. Hundreds of wokers assembled the tower over the course of 2 years. It was the tallest structure in the world until the completion of the Chrysler Building in 1930. Originally only the second floor was open to the public, but now all 3 levels are public. Though the Eiffel Tower was loved by many some feared it was structually unsound or thought it looked bad. Origianlly meant to be temporary it was almost destroyed in 1909, but it was saved because it could be used for radio comunication. It was used for radio communication during World War I. Hitler also ordered it to be destroyed during World War II but never happened. During the war the French Resistance cut the elevator cables so the Nazis would have to climb the stairs. Starting in 1986 and continuing every 7 years the Eiffel Tower is repainted. 7 million people a year visit it and it has 500 employees.</p>
		<p class="par">Closest Metro stops: Champ de Mars-Tour Eiffel (RER C), Ecole Militaire (Line 8), Bir-Hakeim (Line 6)</p>
		<iframe class="par" width="560" height="315" src="https://www.youtube.com/embed/AHuI88oAp8o?rel=0" frameborder="0" allowfullscreen></iframe>
	</div>
<?php 
	include $path.'assets/inc/footer.php';
?>