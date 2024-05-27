<?php

session_start();

function sanitize_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if parameters are provided in the URL
    if (isset($_GET["username"]) && isset($_GET["age"])) {
        // Sanitize and store username and age
        $username = sanitize_input($_GET["username"]);
        $age = sanitize_input($_GET["age"]);

        // Store in session variables
        $_SESSION["username"] = $username;
        $_SESSION["age"] = $age;

        echo "Username is stored successfully<br>";
        echo "Age is stored successfully<br>";
        echo "Done successfully<br>";
        exit();
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if parameters are submitted via POST request
    if (isset($_POST["username"]) && isset($_POST["age"])) {
        // Sanitize and store username and age
        $username = sanitize_input($_POST["username"]);
        $age = sanitize_input($_POST["age"]);

        // Store in session variables
        $_SESSION["username"] = $username;
        $_SESSION["age"] = $age;

        echo "Done successfully";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameter Input Form</title>
</head>
<body>
    <h2>Enter Username and Age</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br><br>
        <label for="age">Age:</label>
        <input type="text" name="age" id="age"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
