    <!DOCTYPE html>
    <title>Doctor : Challenge-Response</title>
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
     
    $idn = $_SESSION['patid'];
    $_SESSION['paid'] = $idn;
      
    $sql = "SELECT challenges FROM docreg where doc_id = '$idn'"; 
    //$_SESSION['chal'] = $sql;
    $retval=mysqli_query($conn, $sql);
    

    
      
    if(mysqli_num_rows($retval) > 0){  
     while($row = mysqli_fetch_assoc($retval)){
        echo "<h2 class='c1'> Your Challenge.....</h2>";  
        //echo "<h3 class='crpbox'> Your Challenge...<br>
        //{$row['challenges']}  </h3><br> ".  
            echo "<h3 class='crpbox'>". $row['challenges'] . "</h3>";
            //echo "<h3> Challenge" . $row['challenges'] . "<h3>";
        


             "--------------------------------<br>";  
     }
    
    //end of while  
    }else{  
    echo "0 results";  
    } 


    
    
    mysqli_close($conn); 
    
    ?>  
    
    <html>
    <head>
        <title></title>
    </head>
    <style type="text/css">
       body {
        background-image:url(h3.jpg);
        max-width:100%;
        height:100vh;
        background-size:cover;
        background-position:center;
        background-attachment: fixed;
        font-family: Times New Roman, serif;}
      * {box-sizing: border-box;}
      table {
      table-align:center;;
      }

      th {
      font-family: Times New Roman, serif;
      font-size: .7em;
      background: #666;
      left: 50%;
      color: #FFF;
      padding: 2px 6px;
      border-collapse: separate;
      border: 1px solid #000;
      }

      td {
      font-family: Arial, Helvetica, sans-serif;
      font-size: .7em;
      border: 1px solid #DDD;
      }
      .c1{
          width:40%;
            height:40px;
            background: #f2f2f2;
            color:black;
            top:10%;
            
            left:50%;
            position:absolute;
            transform:translate(-50%,-50%);
            box-sizing:border-box;
            padding:10px 30px;
            border-radius: 4px;
      }
      .crpbox{
            width:40%;
            height:40px;
            background: #f2f2f2;
            color:black;
            top:16.5%;
            
            left:50%;
            position:absolute;
            transform:translate(-50%,-50%);
            box-sizing:border-box;
            padding:10px 30px;
            border-radius: 4px;
      }
      .c1 h{
          margin-top: -50px;
      }

       .c2{
          width:40%;
            height:25%;
            background: #f2f2f2;
            color:black;
            top:34%;
            
            left:50%;
            position:absolute;
            transform:translate(-50%,-50%);
            box-sizing:border-box;
            padding:10px 30px;
            border-radius: 4px;
      }   
       
      input[type=text]{
        padding: 10px;
        margin: 10px 0px 30px 0;
        display: inline-block;
        border: 100px;

        background: #fff;
        border-radius: 4px;
        border-color: blue;
        width: 100%;
      } 
      input[type=text]:focus, input[type=password]:focus, input[type=tel]:focus {
        background-color: #ddd;
        border:1px solid #4CAF50;
       
      }
      .c2 input[type="submit"]
      {
        border:none;
        outline:none;
        height:40px;
        width: 100%;
        background:#6495ED;
        color:#fff;
        font-size:18px;
        padding: 1px;
        align: center;
        margin: 1px 0px 30px 0;
        font-family: Times New Roman, serif;
      }
      .c2 input[type="submit"]:hover
      {
        cursor:pointer;
        background:#6495ED;
        color:#000;
      }
      }
</style>
    <body>
    <div class = "c2">
        
        <form action="doc2show.php" method="post">
        <input type="text" placeholder="Enter your answer" name="ans_chal" required><br>
        <input type="submit" name="submit" value="submit">
        </form>
</div>
    </body>

    </html>

    