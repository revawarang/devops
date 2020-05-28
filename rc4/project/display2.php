    <?php  
    $host = 'localhost';  
    $user = 'root';  
    $pass = '';  
    $dbname = 'hos';  
    $conn = mysqli_connect($host, $user, $pass,$dbname);  
    if(!$conn){  
      die('Could not connect: '.mysqli_connect_error());  
    }  
    //echo 'Connected successfully<br/>'; 
    $id = $_POST['pat_id']; 
      
    $sql = "SELECT pat_id,firstname,lastname,dob,age,gender,email,address,pat_phone_no,emergphone1,emergphone2,emergphone3 FROM personaldetails where pat_id = '$id'";  
    $retval=mysqli_query($conn, $sql);  
      
    if(mysqli_num_rows($retval) > 0){  
     while($row = mysqli_fetch_assoc($retval)){  
        echo "pat_id :{$row['pat_id']}  <br> ".  
             "firstname : {$row['firstname']} <br> ".  
             "lastname : {$row['lastname']} <br> ".
             "dob : {$row['dob']} <br> ".
             "age : {$row['age']} <br> ".
             "gender : {$row['gender']} <br> ".
             "email : {$row['email']} <br> ".
             "address : {$row['address']} <br> ".
             "pat_phone_no : {$row['pat_phone_no']} <br> ".
             "emergphone1 : {$row['emergphone1']} <br> ".
             "emergphone2 : {$row['emergphone2']} <br> ".
             "emergphone3 : {$row['emergphone3']} <br> ".
             "--------------------------------<br>";  
     } //end of while  
    }else{  
    echo "0 results";  
    }  
    mysqli_close($conn);  
    ?>  