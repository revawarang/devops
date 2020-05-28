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


$diabetes = $_POST['diabetes'];
$bp = $_POST['bp'];
$breathingprblm = $_POST['breathingprblm'];
$arthritis = $_POST['arthritis'];
$flu = $_POST['flu'];
$heart = $_POST['heart'];
$doc_name = $_POST['doc_name'];
$doc_phone_no = $_POST['doc_phone_no'];
$doc_address = $_POST['doc_address'];
$doc_specialization = $_POST['doc_specialization'];
$treatment_start_date = $_POST['treatment_start_date'];


    
$sql = "INSERT INTO medicaldetails(diabetes,bp,breathingprblm,arthritis,flu,heart,doc_name,doc_phone_no,doc_address,doc_specialization,treatment_start_date)
VALUES ('$diabetes','$bp','$breathingprblm','$arthritis','$flu','$heart','$doc_name','$doc_phone_no','$doc_address','$doc_specialization','$treatment_start_date')";

if ($conn->query($sql) == TRUE) {
	
	header('location:loginc.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


