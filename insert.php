<?php


include 'connect.php';
include 'index.php';



$servername = "localhost";
$username = "Usef";
$password = "Usef";
$dbname = "SmartMethods";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO BTable (intNum)
VALUES ('$intNum')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>