
<html>
    <head>
        <title>Response</title>
        <link rel = "stylesheet" href = "styles.css">
    </head>
   
    <body class = "responsebody">
        
        
        <div class = "responsediv">
            <h2 style = "text-align: center;">Your Response</h2>
            <?php
                $name = strtolower($_POST["name"]);
                $id = $_POST["id"];
                $mobile = $_POST["mobile"];
                $email = $_POST["email"];
                $age = $_POST["age"];
                $problem = $_POST["problem"];
        
                echo "<br><br><b>Name:</b> ".$name."<br><br>";
                echo "<b>ID:</b> ".$id."<br><br>";
                echo "<b>Age:</b> ".$age."<br><br>";
                
                echo "<b>Mobile Number:</b> ".$mobile."<br><br>";
                echo "<b>E-mail:</b> ".$email."<br><br>";     
                echo "<b>Problem:</b> ".$problem."<br><br>";
            ?>
            
            
            <?php
                session_start();
                
                $server = "localhost";
                $user = "root";
                $pwd = "";
                
                $conn = mysqli_connect($server, $user, $pwd, "company");
                if(!$conn){
                    echo "Not connected to the database";
                }
                ?>
             
                
                <?php
                 $sno = $_SESSION["sno"];
                 $sql1 = " UPDATE counselling 
            SET Age = '$age',  Mobile = '$mobile', Email = '$email' , Problem = '$problem' 
			WHERE sno = '$sno'";
			
			if(mysqli_query($conn, $sql1)){
				// echo "<center><h2>Your data has been submitted successfully!!</h2></center>";
				$flag = 1;
				echo "<h2>Information is updated.</h2><br><br>";
				
			}
			
			else{
               
				echo "not inserted in table".mysqli_error($conn);
            }                   
            
            mysqli_close($conn);
                
            ?>
            <center>
            <button class = "btn button" onclick = "document.location = 'homepage.php'">Back to Home Page</button><br><br>
            </center>
        </div>
    </body>
</html>