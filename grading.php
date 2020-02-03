<?php
    $path = './';
    $page = 'Grading';
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
        <a href="grading.php">Grading</a>
	</div>
	<h2 class="h">Grading Criteria</h2>
    <ul>
        <li>
            I used contrasting colors, repeated design elements, everything is alligned in a pleasing way, and things that are related are near each other
        </li>
        <li>
            Information is organized clearly such as having a page for all the famous places and seperate pages for each places
        </li>
        <li>
            There is lots of content about the city and the places in it
        </li>
        <li>
            The nav bar is clear, easy-to-use and consistant throughout each page
        </li>
        <li>
            HTML was used to display text and CSS was used for positioning and changing the look of the text
        </li>
    </ul>
    <h3>Additions</h3>
    <ol>
        <li>Original JavaScript Component: Slideshow of images on slideshow.php page</li>
        <li>DHTML component: Fade in on images of slideshow</li>
        <li>Others:
            <ol>
                <li>Header file and footer file display on each page</li>
                <li>comments.php added allowing a person leave a comment about the page</li>
                <li>Added form validation</li>
            </ol>
        </li>
    </ol>
<?php 
    include $path.'assets/inc/footer.php';
?>