
        <?php
            
            $server = "localhost";
            $user = "root";
            $pwd = "";
            
            $conn = mysqli_connect($server, $user, $pwd, "company");
            
            if (!$conn){
                echo("Connection failed: ". mysqli_error($conn));
            }
            
            $sql6 = "SELECT * FROM donate ORDER BY Amount DESC";
            $res = mysqli_query($conn,$sql6);
            
            
            if (mysqli_num_rows($res) > 0){
                
                for($x=0; ($x<3)&&($row = mysqli_fetch_assoc($res)); $x++){
                    $a = $x + 1;
                    echo "<h2 style = 'text-align: center;'>".$a."</h2>";                  
                    echo "Name of the Donor:    ".$row["Name"]."<br>";
                    echo "ID:    ".$row["ID"]."<br>";
                    echo "Amount Donated:    ".$row["Amount"]."<br><hr><br>";
                }
            }
            else {
                echo "No records";
            }
            
            mysqli_close($conn);
        ?>
           