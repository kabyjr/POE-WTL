 <!--  16. Write a program for uploading the file using $_FILES -->

 <!DOCTYPE html>
<html>
<head>
    <title>Simple File Upload</title>
</head>
<body>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>

<?php
if (isset($_FILES["file"])) {
    move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"]);
    echo "<h2>File uploaded successfully!</h2>";
}
?>

</body>
</html>