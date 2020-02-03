<?php
	$path = './';
	$page = 'Paris Opera House';
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
		<img src="assets/media/opera.jpg" class="maps" alt="Paris Opera House">
		<p class="par" id="one">Before the Paris Opera moved to its current location, Palais Garnier, is was situated on rue le Peletier. The building was designed by Francois Debret. It was a theater from 1821 to 1873. After someone attempted to kill him in 1858 on his way to the previous opera house, Napoleon III decided to build a new more secure opera house. Charles Garnier won the contest to create the building which is where it gets its name Palais Garnier. Construction started in 1861 and continued until 1875. It was inagurated on August 15th, 1867. Construction stopped during the Franco-Prussian War in 1870 and 1871 and after Napoleon III was exiled to England. Once the original building burnt down in 1873 the government decided to finish the building. It was inagurated again on January 5th 1875. In 1887 the building switched to electric lighting instead of gas. It became a historic monument in 1923 and receieved restorations in the 2000s and 2010s. Since 1989 it has not been the primary place of the Paris Opera.</p>
		<p class="par">Closest Metro stops: Op&eacute;ra (Lines 3, 7 and 8), Chaus&eacute;e d'Antin la Fayette (Line 7 and Line 9), Auber (RER A)</p>
	</div>
<?php 
	include $path.'assets/inc/footer.php';
?>