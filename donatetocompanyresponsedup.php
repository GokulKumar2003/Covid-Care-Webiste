<?php
        session_start();
?>
<!DOCTYPE html>
<head>
<link rel = "stylesheet" href = "styles.css" >
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <meta charset = "UTF-8">
</head>


<body class = "responsebody">
<div class = "responsediv">

<?php
        $server = "localhost";
        $user = "root";
        $pwd = "";
        
        
        $name = $_POST['name'];

        $id = $_POST['id'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $serialno = $_SESSION['sno'];

        echo "<b>Name:</b> ".$name."<br><br>";
       
        echo "<b>ID:</b> ".$id."<br><br>";
        echo "<b>Mobile Number:</b> ".$mobile."<br><br>";
        echo "<b>E-mail:</b> ".$email."<br><br>";
        echo "<b>Donating Amount:</b>".$amount."<br><br>";

        $conn = mysqli_connect($server, $user, $pwd, "company");
         if($conn){
           //echo "Connected to database succesfully";
         }
         else{
             echo "Not connected to the database";
         }

         $sql6 = "UPDATE donate
                   SET  Name = '$name', ID = '$id', Mobile = '$mobile', Email = '$email', Amount = '$amount'
                   WHERE sno = $serialno";
        if(mysqli_query($conn,$sql6)){
          echo "<h2 style = 'text-align:center;'>Information is updated</h2>";
        }
        mysqli_close($conn);
?>
       <br><br>
      
      <button class = "btn button" onclick = "document.location = 'index.php'">Go Back to Home Page</button>
      </div>
     
      <body>
</html>