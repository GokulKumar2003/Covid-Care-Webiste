<?php
	$testsql = "SELECT * FROM workerdetails WHERE ID = '$id'";
	$res = mysqli_query($conn,$testsql);
	$flag = 0;
	if (mysqli_num_rows($res)){
		
		$row = mysqli_fetch_assoc($res);
		
		if(strtolower($row["Name"]) == $lowercasename){
			$sql1 = "INSERT INTO counselling (Name, Age, ID, Mobile, Email, Problem) 
			VALUES ('$name', '$age', '$id', '$mobile','$email', '$problem')";
			
			if(mysqli_query($conn, $sql1)){
				// echo "<center><h2>Your data has been submitted successfully!!</h2></center>";
				$flag = 1;
				echo "<h3>Your Form is submitted successfully.</h3><br>";                                                                                  
			}
			
			else{
				echo "not inserted in table".mysqli_error($conn);
			}
		}   
		else{
			$flag = 2;
			echo "<h3>Warning: Name and ID does not match. Fill the form again</h3>";
			
			
		}
	}
	else{
		$flag = 3;
		echo "<h3>Warning: No employee with this ID. Fill the form again</h3>";
		
		
	}?>
	<?php if(($flag == 1)):?>
        <center>
		<button class = "button btn" onclick = "location.href = 'counsellingedit.php'">Edit your response</button><br>
    </center>
	<?php endif; ?>
	<?php if(($flag==2)||($flag==3)): ?>
    <center>
	<button class = "button btn" onclick="location.href='counselling.html'">Go Back to Form</button><br>
    </center>
	<?php endif; ?>	