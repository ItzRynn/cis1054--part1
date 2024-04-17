<!DOCTYPE html>
<html>
<body>
 
<?php

session_start()

function SanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
}

if ($_SERVER["Request_Method"] == "GET") {
    if (isset($_GET["username"])) {
        $username = sanitize_input($_GET["username"]);
    } else {
        $username = "";
    }

    if (isset($_GET["age"])) {
        $age = sanitize_input($_GET["age"]);
    } else {
        $age = "";
    }

    $_SESSION["username"] = $username;
    $_SESSION["age"] = $age;

    echo("Done successfully")
    exit()
}

elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"])) {
        $username = sanitize_input($_POST["username"]);
    } else {
        $username = "";
    }

    if (isset($_POST["age"])) {
        $age = sanitize_input($_POST["age"]);
    } else {
        $age = "";
    }

    $_SESSION["username"] = $username;
    $_SESSION["age"] = $age;

    echo("Done successfully")
    exit()
}
?>

</body>
</html>
