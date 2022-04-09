<?php


echo "<a href='contact.html'> contact </a>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "csf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name=$_POST["name"]; 
$prenom=$_POST["prenom"]; 
$email=$_POST["email"]; 

$sql = "INSERT INTO client (nom, prenom, email)
VALUES ('" .$name ."', '" .$prenom ."', '" .$email ."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>