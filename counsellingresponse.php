
<html>
    <head>
        <title>Response</title>
        <link rel = "stylesheet" href = "styles.css">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <meta charset = "UTF-8">
    </head>
    <?php
        //include 'navigbar.html' ;
    ?>
    
    <body class = "responsebody">
        
        
        <div class = "responsediv">
            <h2 style = "text-align: center;">Your Response</h2>
            <?php
                $name = $_POST["name"];
                $lowercasename = strtolower($_POST["name"]);
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
                include 'counsellingservervalidate.php';
                
                $_SESSION["sno"] = mysqli_insert_id($conn);
                
                mysqli_close($conn);
                
            ?>
            <center>
            <button class = "btn button" onclick = "document.location = 'index.php'">Back to Home Page</button><br><br>
            </center>
        </div>
    </body>
</html>