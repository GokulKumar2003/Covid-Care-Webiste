<!DOCTYPE html>
<html>
    <head>
     <link rel = "stylesheet" href = "styles.css">
     <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <meta charset = "UTF-8">
     <style>
         div{
           margin-left: auto;
           margin-right: auto;
           width: 40%;
           background-color: #bbb;
           font-family: "Brush Script MT", cursive;
           font-size: 18px;  
         }
         </style>

    </head>
    <body>
    <div style = "padding-left: 15%;padding-right: 15%;">
        <?php
            
            $server = "localhost";
            $user = "root";
            $pwd = "";
            
            $conn = mysqli_connect($server, $user, $pwd, "company");
            
            if (!$conn){
                echo("Connection failed: ". mysqli_error($conn));
            }
            
            $sql6 = "SELECT * FROM financialhelp ORDER BY Expectedamount DESC";
            $res = mysqli_query($conn,$sql6);
            
                
                for($x = 1;($row = mysqli_fetch_assoc($res)); $x++){
                    
                    echo "<h3 style = 'text-align: center;'>".$x."</h3>";                  
                    echo "<b>Name:</b> ".$row['Name']." <br><br><b>ID: </b>".$row['ID']."<br><br><b>Mobile Number:</b> ". $row['Mobile']."<br><br><b>Email:</b> ".$row['Email'].
                    "<br><br><b>Are tested positive for covid?</b> ".$row['Covidstatus']."<br><br><b>Are your family members affected?</b> ".$row['Familycovidstatus'].
                    "<br><br><b>Reason to claim Financial Support:</b> ".$row['Reason']."<br><br><b>Expected Amount:</b> ".$row['Expectedamount'].
                    "<br><br><b>Account Number: </b>".$row['Accountno']."<br><br><b>Bank Name: </b>".$row['Bank']."<br><br><b>IFSC Code:</b> ".$row['IFSC']."<br><br><hr>";
                }
            
            
            
            mysqli_close($conn);
        ?>
        <center>
        <button class = "button btn" onclick = "document.location = 'adminpage.html'">Go Back</button>
            </center>
            <br><br>
        </div>
        </body>
    </html>    