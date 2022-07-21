

<?php
session_start();

$server = "localhost";
$user = "root";
$pwd = "";

$conn = mysqli_connect($server, $user, $pwd, "company"); 

 if (!$conn)
	echo "<h2>No connection</h2>";

$sno = "";
$sno = $_SESSION["sno"];
$row = "";

$sql2 = "SELECT * FROM financialhelp WHERE sno= '$sno'";
$res2 = mysqli_query($conn, $sql2);

$row = mysqli_fetch_assoc($res2);
		
mysqli_close($conn);
?>

<html>

<head>
<title>Claim your financial Aid money!</title>
<link rel = "stylesheet" href = "styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


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

                function amountValidation(){
                    var amount = document.getElementById("amt").value;
                    if(isFinite(amount) == true){
                        document.getElementById("amountval").style.visibility  = "hidden";
                        document.getElementById("amt").style.border = "2px solid rgba(1, 27, 50)";
                    }
                    else{
                        document.getElementById("amountval").style.visibility  = "visible";
                        document.getElementById("amt").style.border = "2px solid red";
                    }
               }
	
	function validateifsc(){
		var ifsc = document.getElementById("ifsc").value;
		var regx2 = /^[A-Z]{4}0[A-Z0-9]{6}$/;
		
		if(regx2.test(ifsc)){
			document.getElementById("ifscval").style.visibility  = "hidden";
			document.getElementById("ifsc").style.border = "2px solid rgba(1, 27, 50)";
			
		}
		else{
			document.getElementById("ifscval").style.visibility  = "visible";
            document.getElementById("ifsc").style.border = "2px solid red";
            
        }
	}
				
</script>
		
</head>

<body>
<div class = "formcontainer">
<form method = "POST" onsubmit = "return amountValidation() && mobileValidation() && validateifsc();" action = "financeupdate.php">

<h2 style = "text-align: center;color: rgba(1, 27, 50) ;border-bottom: 2px solid rgba(1, 27, 50);margin-bottom: 20px;padding-bottom: 20px;">FINANCIAL AID REQUEST FORM</h2>

<label for="name">Name</label><br>
<input type="text" id="uname"  name="name" value="<?php echo $row['Name'];?>" readonly/><br><br>

<label for="id" >ID Number</label><br>
<input type="text" min="1" max="50" step="1" class="input" id="id" name="id" value="<?php echo $row['ID'];?>" readonly/><br><br>

<label for="mobile">Mobile number</label><br>
<input type="text" min="1" id="mobile" name="mobile" onchange="mobileValidation()" value="<?php echo $row['Mobile'];?>" /><br>
<label for = "mobile" id = "mobileval" style = "visibility:hidden;color: red;font-size: 15px;" >Invalid Mobile number</label><br>


<label for="email">E-mail ID</label><br>
<input type="email" class="input" id="email" name="email" value="<?php echo $row['Email'];?>"/><br><br>

<p style = "margin-left: 27%;font-size:18px;font-family: cursive;color: rgba(1, 27, 50);">Are you tested positive for covid?</p>
<input type="radio" style = "margin-left:30%;" name="covidstatus" id="yes1" value="Yes" <?php if($row['Covidstatus']=='Yes'){echo "checked='true'";} ?>>
<label style = "margin-left:0%;" for="yes1">Yes</label>
<input type="radio" style = "margin-left:5%;" name="covidstatus" id="no1" value="No" <?php if($row['Covidstatus']=='No'){echo "checked='true'";} ?> >
<label style = "margin-left:0%;" for="no1">No</label>

<br><br>

<p style = "margin-left: 27%;font-size:18px;font-family: cursive;color: rgba(1, 27, 50);">Are your family members affected?</p>
<input type="radio" style = "margin-left:30%;" name="famcovidstatus" id="yes2" value="Yes" <?php if($row['Familycovidstatus']=='Yes'){echo "checked='true'";} ?>>
<label style = "margin-left:0%;" for="yes2">Yes</label>
<input type="radio" style = "margin-left:5%;" name="famcovidstatus" id="no2" value="No" <?php if($row['Familycovidstatus']=='No'){echo "checked='true'";} ?>>
<label style = "margin-left:0%;" for="no2">No</label><br><br>

<label for = "reason">Reason to claim financial support</label><br>
<input type = "text" name = "reason" value="<?php echo $row['Reason'];?>"/>
<br><br>

<label for="amount">Expected amount </label><br>
<input type="text" id="amt" onchange = "amountValidation()" name = "amount" value="<?php echo $row['Expectedamount'];?>" /><br>
<label for = "amount" id = "amountval" style = "visibility:hidden; color: red;font-size: 15px;" >Invalid Amount</label><br>

<label for="account">Account number </label><br>
<input type="text" min="1" maxlength="15" id="account" name="account" value="<?php echo $row['Accountno'];?>" /><br><br>

<label for="bankdet">Bank Name</label><br>
<input type = "text" class="input" id="bankdet" name="bank" value="<?php echo $row['Bank'];?>" required/><br><br>

<label for="ifsc">IFSC Code</label><br>
<input type="text" id="ifsc" name="ifsc" onchange = "validateifsc()" value="<?php echo $row['IFSC'];?>" /><br>

<label for = "ifsc" id = "ifscval" style = "visibility:hidden;color: red;font-size: 15px;" >Invalid IFSC Code</label><br>

<button style = "margin-left: 45%;" class = "button btn" type="submit">Submit</button>
<br>
</form>
</div>
<br><br>
<center>
    
    <a target="_top" style="color: red;font-weight: bold;" href="mailto:covidrelief21@gmail.com">Send the required files through mail by clicking here</a>
    <br><br>
</center>

</body>
</html>
