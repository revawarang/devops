<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone_no = $_POST['phone_no'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$specialization = $_POST['specialization'];


    
$sql = "INSERT INTO docreg(firstname,lastname,email,password,phone_no,age,gender,specialization)
VALUES ('$firstname','$lastname','$email','$password','$phone_no','$age','$gender','$specialization')";

if ($conn->query($sql) == TRUE) {
	
	header('location:loginc.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

