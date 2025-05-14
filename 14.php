<!DOCTYPE html>
<html>
<head>
    <title>Form Input with POST</title>
</head>
<body>

<form method="post" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    
    echo "<h2>Received Input:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
}
?>

</body>
</html>