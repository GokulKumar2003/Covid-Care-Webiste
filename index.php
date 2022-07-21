<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <meta charset = "UTF-8">
        <title>Soft Solutions - Covid care</title>
       <!-- <link rel = "stylesheet" href = "homepagestyle.css"> -->
        <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "styles.css" >
             
    </head>

    <body>
        <center>
        
            <h1 style = "font-size: 50px;color: white;">SOFT SOLUTIONS</h1>
            <q style = "color: yellow;font-size: 25px;font-family: cursive;">The software you need</q>
        </center>
        </div>
        <ul>
            <li><a href = "#" class = "active">Home</a></li>
            <li><a href = "advise.html">Health Advisories</a></li>
            <li><a href = "finance.html">Financial Support</a></li>
            <li><a href = "donate.html">Donate</a></li>
            <li><a href = "counselling.html">Need Counselling?</a></li>
            <li style = "float:right;"><a href = "contact.html">Contact Us</a></li>
            <li style = "float:right;border-left: 1px solid black;"><a href = "loginform.php">Admin Login</a></li>

        </ul>
        <br><br>
        <div id = "about" class = "homepagecontent">
            <h2 style = "border-bottom: 2px solid #bbb;color: white;margin-bottom: 10px;text-align: center;padding-bottom: 20px;">ABOUT</h2>
           <p style = "font-family: cursive;"> Soft Solutions is standing with you during this pandemic.
            This website can help you to seek financial needs and to donate amount.
            It also provides some health advisories. During this pandemic season, we all stand together and make life return to normal.
        </div>
        <br><br>
        <div class = "homepagecontent">
            <h2 style = "border-bottom: 2px solid #bbb;color: white;margin-bottom: 10px;text-align: center;padding-bottom: 20px;">DONATION</h2>
            <p style = "font-family: cursive;">
            The COVID-19 pandemic is one of the worst health and economic crisis in modern history and it continues to require the best of humanity to overcome.
            Your donation will help many of our family members. You can donate to the company or an individual. Surely donations will be used 
            for only covid related issues.</p>
            
        </div>
        <h2 style = "font-family: cursive;text-align: center;color: #bbb;">TOP DONORS</h2>
        
        <div class="tablediv">
           
        
        <?php 
        include "topdonors.php" ;
        ?> 
        
        </div>

        <br><br>
        <div class = "homepagecontent">
        <h2 style = " border-bottom: 2px solid #bbb;margin-bottom: 10px;color: white;text-align: center;padding-bottom: 20px;">FINANCIAL HELP</h2>
           <p style = "font-family: cursive;"> We provide enough financial help to all needed employees either from the company fund or from employee donations. 
            Please feel free to seek any help. If needed fill the form on the respective page and send the documents through email.<br>
            <b>Form and the documents required are given on the Financial Help Page.</b><br>
            <b>Email - id: softsolutionscovidcare@gmail.com</b><br></p><br>
        </div>
        <div class="homepagecontent">
        <h2 style = " border-bottom: 2px solid #bbb;margin-bottom: 10px;color: white;text-align: center;padding-bottom: 20px;">COUNSELLING</h2>
           <p style = "font-family: cursive;"> Are you feeling depressed about working from home?<br>
            Are you in a confusion about how to fight against covid-19 mentally?<br>
            No worries. We are giving counselling and answer all your health-related questions with expert doctors.<br> 
            <b>Fill the form given on the Counselling Page so that doctors can reach you.<b></p><br><br>
        </div>  
    </body>
</html>
