<?php
session_start();

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





$i =  $_SESSION['paid'];
$_SESSION['pa_id'] = $i;


$query1="SELECT password from docreg where doc_id = '$i'";
$result=mysqli_query($conn,$query1);
if(mysqli_num_rows($result) > 0){  
     while($row = mysqli_fetch_assoc($result)){  
        
        require_once( "rc4.php" );
        $key = $row['password'];
        $plaintext = $_POST['ans_chal'];
        $ciphertext = rc4( $key, $plaintext );
        
        $nval = md5($ciphertext);
        $neval = crypt($nval,'$6$rounds=5000$anexamplesalt$');

             
             "--------------------------------<br>";  
     } //end of while  
    } 
     
$query2="SELECT ans_chal from docreg where ans_chal='$neval'";
$res=mysqli_query($conn,$query2);



if(mysqli_num_rows($res)==1){
    
    header('location: hello.html');
}
else{
    echo "0 results";
}
session_destroy();
?>