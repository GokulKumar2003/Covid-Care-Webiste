<?php
	$testsql = "SELECT * FROM workerdetails WHERE ID = '$id'";
	$res = mysqli_query($conn,$testsql);
	$flag = 0;
	if (mysqli_num_rows($res)){
		
		$row = mysqli_fetch_assoc($res);
		
		if(strtolower($row["Name"]) == $lowercaseName){
			$sql1 = "INSERT INTO donate (Name, ID, Mobile, Email, Amount) 
			VALUES ('$name', '$id', '$mobile','$email', '$amount')";
			
			if(mysqli_query($conn, $sql1)){
				// echo "<center><h2>Your data has been submitted successfully!!</h2></center>";
				$flag = 1;
				echo "<h3>Your Form is submitted successfully</h3><br>";
				
			}
			
			else{
				echo "not inserted in table".mysqli_error($conn);
			}
		}   
		else{
			$flag = 2;
			echo "<h3> Warning: Name does not match with ID. Fill the form again</h3>";
			
			
		}
	}
	else{
		$flag = 3;
		echo "<h3>Warning: No employee with this ID. Fill the form again</h3>";
		
		
	}?>
	<?php if(($flag == 1)):?>
		<button class = "button btn" onclick = "location.href = 'donatetocompanydup.php'">Edit your response</button>
	<?php endif; ?>
	<?php if(($flag==2)||($flag==3)): ?>
	<button class = "button btn" onclick="location.href='donatetocompany.html'">Go Back to Form</button><br>
	<?php endif; ?>	