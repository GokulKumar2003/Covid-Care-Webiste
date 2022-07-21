<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "styles.css" >
        <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
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
            </script>         

    </head>

    <body style = "background-color: rgba(1, 27, 50); ">
        
       <?php

       $serialno = $_SESSION['sno'];

       $server = "localhost";
       $user = "root";
       $pwd = "";
       
       $conn = mysqli_connect($server,$user,$pwd,"company");
       if($conn) {
          // echo 'connection success';
       }

       $sql2 = "SELECT * FROM donate WHERE sno = $serialno";
       
       $sql3= mysqli_query($conn,$sql2);
       $row = mysqli_fetch_assoc($sql3);
       if(!$row) {
           echo 'Data selection failed';
       }
       $curr_sno = $row['sno'];
       $curr_name = $row['Name'];
       $curr_id = $row['ID'];
       $curr_mobile = $row['Mobile'];
       $curr_email = $row['Email'];
       $curr_amount = $row['Amount'];
       ?>

    <div class = "formcontainer">
        <marquee style = "font-family: cursive;font-size: 16px;color: red;">
        Donating amount will be deducted from your salary. No need to pay to the company account.</marquee>
        <form onsubmit = "return amountValidation() && mobileValidation();" method = "POST" action = "donatetocompanyresponsedup.php">
            <h2 style = "text-align: center;color: rgba(1, 27, 50);border-bottom: 2px solid rgba(1, 27, 50);margin-top: 20px;padding-bottom: 10px;">
            DONATION FORM</h2>
            <label for = "name">Name</label><br>
            <input type = "text" name = "name" value = "<?php echo $curr_name;?>" readonly/><br><br>

           <!-- <label for = "age">Age</label><br>
            <input type = "text" name = "age" required /><br><br> -->
            
            <label for = "id">ID Number</label><br> 
            <input type = "text" name = "id" value = "<?php echo $curr_id;?>" readonly/><br><br>
            
            <label for = "mobile">Mobile Number</label><br>
            <input type = "text" id = "mobile" name = "mobile" onchange = "mobileValidation()" value = "<?php echo $curr_mobile;?>" required/><br>
            <label for = "mobile" id = "mobileval" style = "visibility:hidden;color: red;font-size: 15px;" >Invalid Mobile number</label><br>

            <label for = "email" >E-mail</label><br>
            <input type = "email" name = "email" value = "<?php echo $curr_email;?>" required/><br><br>

            <label for = "amount">Donating Amount</label>
            <input id = "amt" type = "text" name = "amount" onchange = "amountValidation()" value = "<?php echo $curr_amount;?>"  required/><br>
            <label for = "amount" id = "amountval" style = "visibility:hidden;color: red;font-size: 15px;" >Invalid Amount</label><br>

            <button class = "btn button" type = "submit" style = "margin-left: 45%;" value = "Submit">Submit</button>
            
        </form>
        </div>
    </body>
</html>