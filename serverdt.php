<?php
// Set the content type header to text/html for HTML output
header("Content-type: text/html");

// Get the current date and time
$currentDateTime = date("Y-m-d H:i:s");

?>

Server Date and Time: <?php echo $currentDateTime; ?>

