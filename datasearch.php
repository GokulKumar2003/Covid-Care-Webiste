<!DOCTYPE html>
<html>
	<head>
		<title>Search result</title>
		<link rel = "stylesheet" href = "styles.css">
	</head>

	<body class = "responsebody">
		<div class = "responsediv">
<?php

$search = $_POST['search'];
$column = $_POST['column'];

 
$server = "localhost";
$user = "root";
$pwd = "";

$conn = mysqli_connect($server, $user, $pwd, "company");

if (!$conn){
	echo("Connection failed: ". $conn->connect_error);
}

$sql5 = "SELECT * FROM financialhelp WHERE $column LIKE '%$search%'";

$result = mysqli_query($conn,$sql5);

if ($result->num_rows > 0){
while($row = mysqli_fetch_assoc($result) ){
	echo "<br><br><b>Name:</b> ".$row['Name']." <br><br><b>ID:</b> ".$row['ID']."<br><br><b>Mobile Number:</b> ". $row['Mobile']."<br><br><b>Email:</b> ".$row['Email'].
	"<br><br><b>Are tested positive for covid?</b> ".$row['Covidstatus']."<br><br><b>Are your family members affected?</b> ".$row['Familycovidstatus'].
	"<br><br><b>Reason to claim Financial Support:</b> ".$row['Reason']."<br><br><b>Expected Amount:</b> ".$row['Expectedamount'].
	"<br><br><b>Account Number:</b> ".$row['Accountno']."<br><br><b>Bank Name:</b> ".$row['Bank']."<br><br><b>IFSC Code:</b> ".$row['IFSC']."<br><br>";
}
} else {
	echo "<h2>Invalid ID\Name or Employee with this ID\Name does not need Financial Help</h2>";
}

mysqli_close($conn);

?>
<br><br>
<center>
<button class = "button btn" onclick = "document.location = 'searchemployee.php'">Go Back</button><br><br>
</center>
</div>
</body>
</html>