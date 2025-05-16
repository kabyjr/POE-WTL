  <!--20.  Write a program for fetching the values from the database using select query. -->

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

// Fetch data from the database
$sql = "SELECT id, name FROM users";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Fetch Data</title>
</head>
<body>

<h2>Users List</h2>

<?php
if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>ID: " . $row["id"] . " - Name: " . $row["name"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No records found.</p>";
}

$conn->close();
?>

</body>
</html>