 <!-- Write a program for inserting value into the database using PHP  -->

 <?php
// Database connection
$servername = "localhost";
$username = "root"; // Change this based on your database credentials
$password = "";
$database = "test_db";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
    $name = $conn->real_escape_string($_POST["name"]);
    
    $sql = "INSERT INTO users (name) VALUES ('$name')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h2>Record inserted successfully!</h2>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Data</title>
</head>
<body>

<form method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" value="Insert">
</form>

</body>
</html>