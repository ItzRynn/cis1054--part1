<?php
session_start();

if (isset($_SESSION["username"]) && isset($_SESSION["age"])) {
    $username = $_SESSION["username"];
    $age = $_SESSION["age"];

    echo "Username: $username<br>";
    echo "Age: $age";
} else {
    echo "Session variables not set.";
}
?>
