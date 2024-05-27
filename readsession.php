<?php
session_start();

//Checking if username and age were set
if (isset($_SESSION["username"]) && isset($_SESSION["age"])) {
    $username = $_SESSION["username"];
    $age = $_SESSION["age"];
//Outputting username and age if they were set
    echo "Username: $username<br>";
    echo "Age: $age";
} else {
    echo "Session variables not set.";
}
?>
