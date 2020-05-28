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
    
    $sql = $sql = "SELECT personaldetails.firstname, personaldetails.lastname FROM docreg INNER JOIN medicaldetails ON medicaldetails.doc_name = docreg.firstname INNER JOIN personaldetails ON personaldetails.pat_id = medicaldetails.pat_id where docreg.doc_id = 7 ";  
    $retval=mysqli_query($conn, $sql);  
     
    //SELECT Products.Title, Product_Lines.pl_Title, Manufacturers.man_Title
 //FROM Products INNER JOIN Product_Lines ON Products.pl_ID = Product_Lines.pl_ID INNER JOIN Manufacturers ON Product_Lines.man_ID = Manufacturers.man_ID 

    if(mysqli_num_rows($retval) > 0){  
     while($row = mysqli_fetch_assoc($retval)){  
        echo "Patient name: " . $row['firstname'] ."&nbsp;&nbsp;". $row['lastname']  . "<br>";
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
        <title></title>
        
    <style type="text/css">
        
    </body>
    </html>