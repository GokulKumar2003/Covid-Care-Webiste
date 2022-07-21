
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
                $lowercaseName = strtolower($_POST["name"]);
                $id = $_POST["id"];
                $mobile = $_POST["mobile"];
                $email = $_POST["email"];
                $covidstatus = $_POST["covidstatus"];
                $familystatus = $_POST["famcovidstatus"];
                $reason = $_POST["reason"];
                $amount = $_POST["amount"];
                $account = $_POST["account"];
                $bank = $_POST["bank"];
                $ifsc = $_POST["ifsc"];
                
                echo "<b>Name:</b> ".$name."<br><br>";
                echo "<b>ID:</b> ".$id."<br><br>";
                echo "<b>Mobile Number:</b> ".$mobile."<br><br>";
                echo "<b>E-mail:</b> ".$email."<br><br>";
                echo "<b>Are you tested positive for covid?</b>  ".$covidstatus."<br><br>";
                echo "<b>Are your family members affected?</b>  ".$familystatus."<br><br>";
                echo "<b>Reason to claim financial support:</b> ".$reason."<br><br>";
                echo "<b>Expecting Amount: </b>".$amount."<br><br>";
                echo "<b>Account Number:</b> ".$account."<br><br>";
                echo "<b>Bank Name:</b> ".$bank."<br><br>";
                echo "<b>IFSC Code:</b> ".$ifsc."<br><br>";
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
                include 'financeservervalidate.php';
                
                $_SESSION["sno"] = mysqli_insert_id($conn);
                
                mysqli_close($conn);
                
            ?>
            
            <button class = "btn button" onclick = "document.location = 'index.php'">Back to Home Page</button><br><br>
        </div>
    </body>
</html>