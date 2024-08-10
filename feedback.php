<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>意見回饋</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "id21704570_orange";
$password = "Orange7749.";
$dbname = "id21704570_orange";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$rating = $_POST['rating'];

$sql = "INSERT INTO feedback (name, email, message, rating) VALUES ('$name', '$email', '$message', '$rating')";

if ($conn->query($sql) === TRUE) {
    echo "回饋已成功提交";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
