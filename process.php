<?php
$groupSize = $_POST['groupNum'];
$vdate = $_POST['vdate'];
$place = $_POST['fplace'];
$rating = $_POST['rate'];
$destination_email = "cet2576@rit.edu";
$email_subject = "Paris Feedback";
$email_body = "Group Size $groupSize\n";
$email_body .= "Date Visited=$vdate\n";
$email_body .= "Favorite Place $place\n";
$email_body .= "Rating -> $rating\n";
mail($destination_email, $email_subject, $email_body);
echo "Data Sent";
?>