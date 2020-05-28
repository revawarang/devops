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

$email = $_POST['email']; 
$password = $_POST['password'];
$pas = md5($password);

$query2="SELECT pat_id from pat_reg where password = '$pas'";
$res=mysqli_query($conn,$query2);
if(mysqli_num_rows($res) > 0){  
     while($row = mysqli_fetch_assoc($res)){  
        
        echo "pat_id :{$row['pat_id']}  <br> ";
        $id = $row['pat_id'];
        
     } //end of while  
    }

    else{  
    echo "0 results";  
    }  

$query3="SELECT doc_id from docreg where password = '$pas'";
$resu=mysqli_query($conn,$query3);
if(mysqli_num_rows($resu) > 0){  
     while($row = mysqli_fetch_assoc($resu)){  
        
        echo "pat_id :{$row['doc_id']}  <br> ";
        $id = $row['doc_id'];
        
     } //end of while  
    }

    else{  
    echo "0 results";  
    }

$_SESSION['patid'] = $id;
$query1="SELECT * from pat_reg where email='$email' and password='$pas'";
$result=mysqli_query($conn,$query1);
$query4="SELECT * from docreg where email='$email' and password='$pas'";
$resul=mysqli_query($conn,$query4);

if(mysqli_num_rows($result)==1){
    
    header('location: index.php');
}
elseif(mysqli_num_rows($resul)==1){
    //session_start();
    //$_SESSION['auth']='true';
    header('location: index2.php');
}
else{
    echo "absent";
}
?>