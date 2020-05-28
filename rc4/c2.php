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
$gender = $_POST['gender'];
$challenges = $_POST['challenges'];
$ans_chal = $_POST['ans_chal'];


   require_once( "rc4.php" );
   $key = md5($password);
   $plaintext = $_POST['ans_chal'];
   $ciphertext = rc4( $key, $plaintext );
   //$decrypted = rc4( $key, $ciphertext );
   $nval = md5($ciphertext);
   $neval = crypt($nval,'$6$rounds=5000$anexamplesalt$');
   


$sql = "INSERT INTO pat_reg(firstname,lastname,email,password,phone_no,gender,challenges,ans_chal)
VALUES ('$firstname','$lastname','$email','$key','$phone_no','$gender','$challenges','$neval')";

if ($conn->query($sql) == TRUE) {
	
	header('location:personal.html');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

