
    
   
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>
             Worker Details
        </title>
        <link rel = "stylesheet" href = "styles.css">
        <script>
            
                function mobileValidation(){
                    var regx = /^[6-9]{1}[0-9]{9}$/;
                    var num = document.getElementById("mobile").value;
                    
                    if((regx.test(num))){
                        document.getElementById("mobileval").style.visibility  = "hidden";
                        document.getElementById("mobile").style.border = "2px solid rgba(1, 27, 50)";
                    }
                    else{
                        document.getElementById("mobileval").style.visibility  = "visible";
                        document.getElementById("mobile").style.border = "2px solid red";
                    }
                }
    
        </script>
    </head>

    <body style = "background-color:  rgba(1, 27, 50);">
        <br><br><br>
        
        <div class = "formcontainer">
        <form method = "POST" action = "workerdetail.php">
            <h2 style = "text-align: center;color:  rgba(1, 27, 50);border-bottom: 2px solid rgba(1, 27, 50);margin-top: 20px;padding-bottom: 10px;">
                WORKER DETAILS</h2>
            <label for = "name">Name</label><br>
            <input type = "text" name = "name" required/><br><br>

            
            <label for = "idnumber">ID Number</label><br> 
            <input type = "text" name = "id" required/><br><br>

            <label for = "age">Age</label><br>
            <input type = "text" name = "age" required /><br><br>
            
            <label for = "gender">Gender</label><br>
            <select name = "gender">
                <option value = "Male">Male</option>
                <option value = "Female">Female</option>
                <option value = "othes">Others</option>
            </select><br><br>
            
            <label for = "mobile">Mobile Number</label><br>
            <input type = "text" id = "mobile" name = "mobile" onchange = "mobileValidation()" required/><br>
            <label for = "mobile" id = "mobileval" style = "visibility:hidden;color: red;font-size: 15px;" >Invalid Mobile number</label><br>

            <label for = "email" >E-mail</label><br>
            <input type = "email" name = "email" required/><br><br>

           
            <center>
            <button class = "btn button" style = "width:20%" type = "reset" name = "Reset">Reset</button>
            <button class = "btn button" type = "submit" style = "width:20%;" value = "Submit">Submit</button>
            </center>

        </form>
        
   
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST["name"];
    $id = $_POST["id"];
    $gender = $_POST["gender"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    session_start();
    
    $server = "localhost";
    $user = "root";
    $pwd = "";
    
    $conn = mysqli_connect($server, $user, $pwd, "company");
    if(!$conn){
        echo "Not connected to the database";
    }
    $sql1 = "INSERT INTO workerdetails (Name, ID, Age, Gender, Mobile, Email) 
    VALUES ('$name', '$id', '$age', '$gender', '$mobile', '$email')";
   $sql2 = mysqli_query($conn, $sql1);
   
   if($sql2){
       echo "<h3 style = 'font-family: cursive;text-align: center;'>Worker Details have been added.</h3>";
   }
   else{
        echo "<h3 style = 'font-family: cursive;'>Failed to add details.</h3>";
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
           