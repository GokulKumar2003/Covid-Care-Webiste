
<html>
	<head>
		<title>Login form</title>
		<link rel = "stylesheet" href = "styles.css">
		<meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <meta charset = "UTF-8">
		
	</head>
	
	<body>
	
			<br><br><br><<br>
			<div class = "formcontainer">
				<h2 style = "text-align: center;border-bottom: 2px solid rgba(1, 27, 50) ;color: rgba(1, 27, 50);padding-bottom: 10px;">ADMIN LOGIN</h2>
			<form name="f1" action = "loginform.php" method = "POST"> 
					<label> Username</label>  
					<input type = "text" id ="username" name  = "username" required/> <br> <br>
				 				 
					<label> Password</label> <br>
					<input type = "password" id ="pass" name  = "pass" required /><br>  
				 	<br>
					<center>
					<button class = "button btn" type =  "submit" id = "btn" >Login</button>
					</center>		
			</form> 
			


<?php
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$server = "localhost";
		$user = "root";
		$pwd = "";
		
		$conn = mysqli_connect($server, $user, $pwd, "company");
		if(!$conn){
			echo "Not connected to the database";
		}
		
		$username = $_POST["username"];
		$pass = $_POST["pass"];
		
		
		$sql8 = "SELECT * FROM adminlogin WHERE username = '$username' AND password = '$pass' ";
		$result = mysqli_query($conn,$sql8);
		
		if (mysqli_num_rows($result)){	
			header("Location:adminpage.html"); 	
		}
		else{
			echo "<h3 style='text-align:center;font-family: cursive;color: red;'>Access denied</h3>";
		}
	}
?>
			</div>
		
		</body>
	</html>