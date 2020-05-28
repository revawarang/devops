    <?php
    session_start();  
    $host = 'localhost';  
    $user = 'root';  
    $pass = '';  
    $dbname = 'hos';  
    $conn = mysqli_connect($host, $user, $pass,$dbname);  
    if(!$conn){  
      die('Could not connect: '.mysqli_connect_error());  
    }  
    //echo 'Connected successfully<br/>'; 
    //$id = $_POST['pat_id'];
    $is =  $_SESSION['pa_id'];

    $td1 = '';
    $td2 = '';
    $td3 = '';
    $td4 = '';
    $td5 = '';
    $td6 = '';
    $td7 = '';
    $td8 = '';
    $td9 = ''; 
    $td10= '';
    $td11 = '';
    $td12 = '';
    $td13 = '';
    $td14 = '';
    $td15 = '';
    $td16 = '';
    $td17 = '';
    $td18 = '';
    $td19 = ''; 
    $td20= '';
    $td21= '';
    
      /**echo "<h1 >PROFILE</h1>";
    echo "<table border='1'>
    <tr>
    <th colspan='10'> Students </th>
    </tr>
    <tr>
    <th>Name</th>
    <th>Date of Birth</th>
    <th>Age</th>
    <th>Gender</th>
    <th>E-mail</th>
    <th>Address</th>
    <th>Patient Phone Number</th>
    <th>Emergenccy Phone No.1</th>
    <th>Emergenccy Phone No.2</th>
    <th>Emergenccy Phone No.3</th>
    </tr>";**/
    $sql = "SELECT pat_id,firstname,lastname,dob,age,gender,email,address,pat_phone_no,emergphone1,emergphone2,emergphone3 FROM personaldetails where pat_id = '$is'";  
    $retval=mysqli_query($conn, $sql);  
      

    if(mysqli_num_rows($retval) > 0){  
     while($row = mysqli_fetch_assoc($retval)){  
        /**echo   
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
             "--------------------------------<br>";  **/

        echo "<tr>";
        $td1 .= "<td>" . $row['firstname'] ."&nbsp;&nbsp;". $row['lastname']  . "</td>";
        $td2 .= "<td>" . $row['dob'] . "</td>";
        $td3 .= "<td>" . $row['age'] . "</td>";
        $td4 .= "<td>" . $row['gender'] . "</td>";
        $td5 .= "<td>" . $row['email'] . "</td>";
        $td6 .= "<td>" . $row['address'] . "</td>";
        $td7 .= "<td>" . $row['pat_phone_no'] . "</td>";
        $td8 .= "<td>" . $row['emergphone1'] . "</td>";
        $td9 .= "<td>" . $row['emergphone2'] . "</td>";
        $td10 .= "<td>" . $row['emergphone3'] . "</td>";
        echo "</tr>";
        echo "</tr>";    
     } echo "</table>";//end of while  
    }else{  
    echo "0 results";  
    }
    echo "<br>";
    echo "<br>";
    $sql = "SELECT * FROM medicaldetails where pat_id = '$is'";  
    $retval=mysqli_query($conn, $sql);  
      

    if(mysqli_num_rows($retval) > 0){  
     while($row = mysqli_fetch_assoc($retval)){  
        /**echo   
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
             "--------------------------------<br>";  **/

        echo "<tr>";
        $td11 .= "<td>" . $row['diabetes']  . "</td>";
        $td12 .= "<td>" . $row['bp'] . "</td>";
        $td13 .= "<td>" . $row['breathingprblm'] . "</td>";
        $td14 .= "<td>" . $row['arthritis'] . "</td>";
        $td15 .= "<td>" . $row['flu'] . "</td>";
        $td16 .= "<td>" . $row['heart'] . "</td>";
        $td17 .= "<td>" . $row['doc_name'] . "</td>";
        $td18 .= "<td>" . $row['doc_phone_no'] . "</td>";
        $td19 .= "<td>" . $row['doc_address'] . "</td>";
        $td20 .= "<td>" . $row['doc_specialization'] . "</td>";
        $td21 .= "<td>" . $row['treatment_start_date'] . "</td>";
        echo "</tr>";
        echo "</tr>";    
     } echo "</table>";//end of while  
    }else{  
    echo "0 results";  
    }  
    mysqli_close($conn); 
    session_destroy(); 
    ?>  
    <!DOCTYPE html>
    <html>
    <head>
        <title>Patient details</title>
        
    <style type="text/css">
        /**table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        th, td {
          padding: 5px;
          text-align: left;
        }**/
         body {
            background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.6)),url(h3.jpg);
            max-width:100%;
            height:100vh;
            background-size:cover;
            background-position:center;
            background-attachment: fixed;
            font-family: Times New Roman, serif;}
        .zui-table {
            border: solid 0px ;
            border-collapse: collapse;
            border-spacing: 0;
            font: normal 13px Times New Roman, serif;
        }
        .zui-table thead th {
            border-collapse: collapse;
            font-size: 18px;
            color: ##000000;
            padding: 15px;
            text-align: left;
            
        }
        .zui-table  td {
            border-collapse: collapse;
            color: #333;
            padding:15px;
            font-size: 15px;
            
            font-size: 18px;
            
        }

    </style>
    </head>
    <body>
    <table border="0" cellpadding="10" align="center" style="width: 60%;" class="zui-table">
<thead>
    <tr>
        <th colspan='6' style=" background-color: #b3d1ff; font-size: 16px;"><h2>PROFILE DETAILS<h2></th>
    </tr>
    <tr style=" background-color: #DCDCDC; ">
        <th>Name</th><th>:</th>
        <?php echo $td1; ?>
        
        <th></th>
        <th></th>
        <th></th>
        
    </tr>
    <tr style=" background-color: #DCDCDC;">
        <th>Date of Birth</th><th>:</th>
        <?php echo $td2; ?>
        <th>Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</th>
        <?php echo $td3; ?>
        <th></th>
        
    </tr>
   
    
    <tr style=" background-color: #DCDCDC;">
        <th>Gender</th><th>:</th>
        <?php echo $td4." "; ?>
        <th>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</th>
        <?php echo $td5; ?>
        <th></th>
        
        
        
        

    </tr>
    <tr style=" background-color: #DCDCDC;">
        <th>Address</th><th>:</th>
        <?php echo $td6; ?>
        <th></th>
        <th></th>
        <th></th>
        
    </tr>
    <tr style=" background-color: #DCDCDC;">
        <th>Patient Phone Number</th><th>:</th>
        <?php echo $td7; ?>
        <th></th>
        <th></th>
        <th></th>
        
    </tr>
    <tr style=" background-color: #DCDCDC;">
        <th>Emergenccy Phone No.1</th><th>:</th>
        <?php echo $td8; ?>
        <th></th>
        <th></th>
        <th></th>
        
    </tr>
    <tr style=" background-color: #DCDCDC;">
        <th>Emergenccy Phone No.2</th><th>:</th>
        <?php echo $td9; ?>
        <th></th>
        <th></th>
        <th></th>
        
    </tr>
    <tr style=" background-color: #DCDCDC;">
        <th>Emergenccy Phone No.3</th><th>:</th>
        <?php echo $td10; ?>
        <th></th>
        <th></th>
        <th></th>
        
    </tr>
    
    
</thead>
</table>

<table border="0" align="center" class="zui-table" style="width: 60%;" >
<thead>
    <tr>
        <th colspan='6' style=" background-color: #b3d1ff; font-size: 16px;"><h2>MEDICAL DETAILS</h2></th>
    </tr>
    <tr style=" background-color: #DCDCDC;">
        <th>Do you have diabetes?</th>
        <?php echo $td11; ?>
        <th>Do you have blood pressure?</th>
        <?php echo $td12; ?>
        
        
        
    </tr>
    
   
    
    <tr style=" background-color: #DCDCDC;">
        <th>Do you have breathing problem?</th>
        <?php echo $td13; ?>
        <th>Do you have arthritis?</th>
        <?php echo $td14; ?>

    </tr>
    
    <tr style=" background-color: #DCDCDC;">
        <th>Do you have flu complications?</th>
        <?php echo $td15; ?>
        <th>Did you have heart attack anytime?</th>
        <?php echo $td16; ?>
    </tr>
    
    <tr >
        <th colspan='4' style=" background-color: #b3d1ff; font-size: 16px;"><h2>Doctor Details</h2></th>
       
        
    </tr>
    <tr style=" background-color: #DCDCDC;">
        <th >Doctor Name</th><th>:</th>
        <?php echo $td17; ?>
        
        <th></th>
    </tr>
    <tr style=" background-color: #DCDCDC;">
        <th>Phone Number</th><th>:</th>
        <?php echo $td18; ?>
        <th></th>
        
    </tr>
    <tr style=" background-color: #DCDCDC;">
        <th>Address</th><th>:</th>
        <?php echo $td19; ?>
        <th></th>
        
    </tr>
    <tr style=" background-color: #DCDCDC;">
        <th>Specialization</th><th>:</th>
        <?php echo $td20; ?>
        <th></th>
        
    </tr>
    <tr style=" background-color: #DCDCDC;">
        <th>Treatment started from</th><th>:</th>
        <?php echo $td21; ?>
        <th></th>
        
    </tr>
    <tr style=" background-color: #DCDCDC;">
        <th colspan='4' style=" background-color: #b3d1ff; font-size: 12px;"><h3><a href="main.html">Go To Home Page</a></h3></th>
        
        <th></th>
        
    </tr>
    
    
</thead>
    </body>
    </html>