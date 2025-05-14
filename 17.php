<!-- Write a program for storing and retrieving values from the session using PHP -->

<?php
session_start(); // Start the session

// Store values in the session
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
    $_SESSION["name"] = htmlspecialchars($_POST["name"]);
}

// Retrieve values from the session
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Storage</title>
</head>
<body>

<form method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" value="Save to Session">
</form>

<?php
if (isset($_SESSION["name"])) {
    echo "<h2>Stored Name: " . $_SESSION["name"] . "</h2>";
}
?>

</body>
</html>