<?php 
/*
 * author - Clare Truell
 * class - ISTE 240
 * date - 04/15/18
 */
/* step 1 */
$path = "./";
$page = 'Comments';
include $path.'assets/inc/header.php';
require $path.'../../../dbInfo.inc';
if ($mysqli) {
	if (!empty($_POST['name']) && !empty($_POST['comment'])) {
		//$clean_text = mysqli_real_escape_string($mysqli, $_POST['name']);
		//$clean_text2 = mysqli_real_escape_string($mysqli, $_POST['comment']);
		//$sql1 = "INSERT INTO comments (name, comment) VALUES ('".$clean_text."', '".$clean_text2."')";
		//$results = mysqli_query($mysqli, $sql1);
		$stmt = $mysqli->prepare("insert into feedback (name, comment) values (?, ?)");
		$stmt->bind_param("ss",$_POST['name'],$_POST['comment']);
		$stmt->execute();
		$stmt->close();
	}
	$res=$mysqli->query('select name, comment from feedback');
	if($res){
		while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
			$records[] = $rowHolder;
		}
	}
}
/* Step 5 */
//var_dump($records);
?>
<script>
function validateForm() {
    var x = document.forms["contect_form"]["name"].value;
    var y = document.forms["contect_form"]["comment"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    else if (y == "") {
    	alert("Comment must be filled out");
        return false;
    }
    else {
    	return true;
    }
}
</script>
	<div id="nav">
		<a href="index.php">Home</a>
		<a href="places.php">Famous Places</a>
		<a href="arrondissements.php">Arrondissements</a>
		<a href="feedback.php">Feedback</a>
		<a href="comments.php">Comments</a>
		<a href="slideshow.php">Slideshow</a>
		<a href="resources.php">Resources</a>
	</div>
	<form name="contect_form" action="comments.php" onsubmit="return validateForm()" method="POST">
		<p>Name: </p>
		<input type="text" name="name" id="name">
		<p>Comment: </p>
		<input type="text" name="comment" id="comment">
		<br>
		<br>
		<input type="submit" value="Submit">
	</form>
	<br>
	<?php
	$output = '<table border="1">';
	$th = array();
	foreach($records as $currRecord) {
		//to write out the table headers
		if (empty($th)) {
			$th = array_keys($currRecord);
			$output.='<tr><th>'.implode('</th><th>', $th).'</th></tr>';
		}
		$output.='<tr>';
		foreach($currRecord as $name=>$val) {
			$output.='<td>'.$val.'</td>';
		}
		$output.='</tr>';
	}
	$output.='</table>';
	echo $output;
	mysqli_close($mysqli);
	?>
	<footer class="par">Clare Truell &reg;</footer>
</body>
</html>