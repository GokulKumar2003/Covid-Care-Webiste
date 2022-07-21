
    
   
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>
             Add Admin
        </title>
        <link rel = "stylesheet" href = "styles.css">
       
    </head>

    <body style = "background-color:  rgba(1, 27, 50);">
        <br><br><br>
        
        <div class = "formcontainer">
        <form method = "POST" action = "addadmin.php">
            <h2 style = "text-align: center;color:  rgba(1, 27, 50);border-bottom: 2px solid rgba(1, 27, 50);margin-top: 20px;padding-bottom: 10px;">
                ADD ADMIN</h2>
            <label for = "username">Username</label><br>
            <input type = "text" name = "username" placeholder = "Create new username" required/><br><br>

            
            <label for = "password">Password</label><br> 
            <input type = "password" name = "password" required/><br><br>

            
            <center>
            <button class = "btn button" style = "width:20%" type = "reset" name = "Reset">Reset</button>
            <button class = "btn button" type = "submit" style = "width:20%;" value = "Submit">Submit</button>
            </center>

        </form>
        
   
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST["username"];
    $password = $_POST["password"];
    

    session_start();
    
    $server = "localhost";
    $user = "root";
    $pwd = "";
    
    $conn = mysqli_connect($server, $user, $pwd, "company");
    if(!$conn){
        echo "Not connected to the database";
    }
    $sql1 = "INSERT INTO adminlogin (username, password) 
    VALUES ('$username', '$password')";
   $sql2 = mysqli_query($conn, $sql1);
   
   if($sql2){
       echo "<h3 style = 'font-family: cursive;text-align: center;'>Username is created.</h3>";
   }
   else{
        echo "<h3 style = 'font-family: cursive;'>Failed to create username.</h3>";
   }
   
   mysqli_close($conn);
}
?>

<center>
    <br><br>
    <button class = "btn button" onclick = "document.location = 'adminpage.html'">Go Back</button>
    <br>
</center>
</div>
 </body>
</html>
           