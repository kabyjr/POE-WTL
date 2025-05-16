<!--15.  Write a program for getting form input using $_GET  -->

<!DOCTYPE html>
<html>
<head>
    <title>Form Input with GET</title>
</head>
<body>

<form method="get" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"]) && isset($_GET["email"])) {
    $name = htmlspecialchars($_GET["name"]);
    $email = htmlspecialchars($_GET["email"]);
    
    echo "<h2>Received Input:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
}
?>

</body>
</html>


<!-- simple prg -->

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Simple GET Form</title>
</head>
<body>

<form method="get">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" value="Submit">
</form>

<!-- <?php
if (isset($_GET["name"])) {
    echo "<h2>Hello, " . htmlspecialchars($_GET["name"]) . "!</h2>";
}
?> -->

</body>
</html> -->