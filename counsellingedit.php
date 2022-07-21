

<?php
session_start();

$server = "localhost";
$user = "root";
$pwd = "";

$conn = mysqli_connect($server, $user, $pwd, "company"); 

 if (!$conn)
	echo "<h2>No connection</h2>";


$sno = $_SESSION["sno"];
$row = "";

$sql2 = "SELECT * FROM counselling WHERE sno = '$sno'";
$res2 = mysqli_query($conn, $sql2);

$row = mysqli_fetch_assoc($res2);
		
mysqli_close($conn);
?>

<html>

<head>
<title>Counselling Form</title>
<link rel = "stylesheet" href = "styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<script>

function mobileValidation(){
                    var regx = /^[6-9]{1}[0-9]{9}$/;
                    var num = document.getElementById("mobile").value;
                    
                    if((regx.test(num))){
                        document.getElementById("mobileval").style.visibility  = "hidden";
                        document.getElementById("mobile").style.border = "2px solid rgba(1, 27, 50)";
                        return true;
                    }
                    else{
                        document.getElementById("mobileval").style.visibility  = "visible";
                        document.getElementById("mobile").style.border = "2px solid red";
                        document.getElementById("mobile").focus;
                        return false;
                    }
                }
</script>
		
</head>

<body>
<div class = "formcontainer">
<form onsubmit = "return mobileValidation();" method = "POST" action = "counsellingupdate.php">
            <h2 style = "text-align: center;color:  rgba(1, 27, 50);border-bottom: 2px solid rgba(1, 27, 50);margin-top: 20px;padding-bottom: 10px;">COUNSELLING REQUEST FORM</h2>
            <label for = "name">Name</label><br>
            <input type = "text" name = "name" value="<?php echo $row['Name'];?>" readonly/><br><br>

            <label for = "age">Age</label><br>
            <input type = "text" name = "age" value="<?php echo $row['Age'];?>" required /><br><br>
            
            <label for = "idnumber">ID Number</label><br> 
            <input type = "text" name = "id" value="<?php echo $row['ID'];?>" readonly/><br><br>
            
            <label for = "mobile">Mobile Number</label><br>
            <input type = "text" id = "mobile" name = "mobile" value="<?php echo $row['Mobile'];?>" required/><br>
            <label for = "mobile" id = "mobileval" style = "visibility:hidden;color: red;font-size: 15px;" >Invalid Mobile number</label><br>

            <label for = "email" >E-mail</label><br>
            <input type = "email" name = "email" value="<?php echo $row['Email'];?>" required/><br><br>

            <label for = "problem">Problem</label><br>
            <input type = "text" name = "problem" value="<?php echo $row['Problem'];?>" required /><br><br>

            <button class = "btn button" type = "submit" style = "width:20%;margin-left: 40%;" value = "Submit">Submit</button>


</div>

</body>
</html>
