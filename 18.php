 <!-- 18. Write a program for storing and retrieving values from the cookies using PHP -->

 <?php
// Set a cookie with name and value, expires in 1 hour
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
    setcookie("user_name", htmlspecialchars($_POST["name"]), time() + 3600, "/");
}

// Retrieve the cookie value
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Storage</title>
</head>
<body>

<form method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" value="Save to Cookie">
</form>

<?php
if (isset($_COOKIE["user_name"])) {
    echo "<h2>Stored Name: " . $_COOKIE["user_name"] . "</h2>";
}
?>

</body>
</html>