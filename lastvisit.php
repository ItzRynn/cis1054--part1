<?php
session_start();

// Check if the first visit timestamp is stored in the session
if (!isset($_SESSION['first_visit'])) {
    // If not, set the timestamp of the first visit
    $_SESSION['first_visit'] = time();
    echo "Welcome! This is your first visit.";
} else {
    // If the first visit timestamp is stored, calculate the elapsed time
    $first_visit_timestamp = $_SESSION['first_visit'];
    $current_time = time();
    $elapsed_time = $current_time - $first_visit_timestamp;

    // Output the elapsed time
    echo "You first used this page $elapsed_time seconds ago.";
}
?>
