<?php
    $path = './';
    $page = 'Feedback';
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
    <form action="comments.php" method="POST">
        <div>
            <p>
                <label>How many people in your group?</label>
                <input type="number" name="groupNum" min="0" max="100" step="1" value="1" style="width: 3em" required>
            </p>
        </div>
        <div>
            <p>
                <label>When did you visit?</label>
                <input type="date" name="vdate" placeholder="mm/dd/yyyy" required>
            </p>
        </div>
        <div>
            <fieldset>
                <legend>Favorite Place</legend>
                <input type="radio" name="fplace" value="Eiffel Tower" checked>Eiffel Tower<br>
                <input type="radio" name="fplace" value="Notre-Dame">Notre-Dame<br>
                <input type="radio" name="fplace" value="The Lovre">The Louvre<br>
                <input type="radio" name="fplace" value="Le Centre Pompidou">Le Centre Pompidou<br>
                <input type="radio" name="fplace" value="Luxembourg Gardens">Luxembourg Gardens<br>
                <input type="radio" name="fplace" value="Tulleries Gardens">Tulleries Gardens<br>
                <input type="radio" name="fplace" value="Sacr&eacute; C&oelig;ur">Sacr&eacute; C&oelig;ur<br>
                <input type="radio" name="fplace" value="PAris Opera House">Paris Opera House<br>
                <input type="radio" name="fplace" value="Arc de Triomphe">Arc de Triomphe<br>
                <input type="radio" name="fplace" value="Mus&eacute;e d'Orsay">Mus&eacute;e d'Orsay<br>
                <input type="radio" name="fplace" value="Palais Versailles">Palais Versailles<br>
            </fieldset>
        </div>
        <div>
            <p>
                <label>Overall rate your visit to Paris:</label><br>
                0 <input type="range" name="rate" min="0" max="10" required> 10
            </p>
        </div>
        <!--SUBMIT BUTTON-->
        <input type="submit">&nbsp;&nbsp; <input type="reset">
    </form>
<?php 
    include $path.'assets/inc/footer.php';
?>