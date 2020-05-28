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
$dob = $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$address = $_POST['address'];
$pat_phone_no = $_POST['pat_phone_no'];
$emergphone1 = $_POST['emergphone1'];
$emergphone2 = $_POST['emergphone2'];
$emergphone3 = $_POST['emergphone3'];


    
$sql = "INSERT INTO personaldetails(firstname,lastname,dob,age,gender,email,address,pat_phone_no,emergphone1,emergphone2,emergphone3)
VALUES ('$firstname','$lastname','$dob','$age','$gender','$email','$address','$pat_phone_no','$emergphone1','$emergphone2','$emergphone3')";

if ($conn->query($sql) == TRUE) {
	
	header('location:personaldetails2.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


