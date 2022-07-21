<!DOCTYPE html>
<html>
<head>
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" href = "styles.css">
<style>

.button1{
        cursor: pointer;
        font-size: 16px;
        padding: 14px 21px;
        margin: 5px;
        font-family: cursive;
        
    }
    .btn1{
        color: rgba(1, 27, 50);
        background-color: #bbb;
        border: 1px solid black;

    }
    .btn1:hover{
      border: 3px solid black;
    }

    
</style>
<script>
function inputvalidation(){
  var input = document.getElementById("search").value;
  
  
  if(input == ""){
    document.getElementById("inputval").style.visibility = "visible";
    document.getElementById("search").style.border = "2px solid red";
    return false;
  }
  else{
    return true;
  }
}
  </script>
<body>

<br><br><br>
<form class = "formcontainer" id="submitform" onsubmit = "return inputvalidation();" action = "datasearch.php" method="POST">


<label style="font-size:18px">Search by</label><br>
<select id = "option" name="column">

	<option value="Name">Name</option>
	<option value="ID">ID</option>
	</select></p><br><br>


<input type="text" id="search" name="search" placeholder="Type here.." ><br>
<label id = "inputval" style = "color: red;font-size: 15px;visibility: hidden;">Can't be empty</label><br><br>
<center>
<button class = "button btn" type = "submit">Search</button><br><br>
</center>
</form>
<br><br>
<h2 style = "color: #bbb;font-family: cursive">Do you want to see the list of employees who need financial help?</h2>
<p style = "font-size: 18px;font-family:cursive;color: #bbb;">Click the below button to see the list.</p>
<button class = "button1 btn1" onclick = "document.location = 'financelist.php'">Display List </button>
<br><br>
<center>
<button class = "button1 btn1" onclick = "document.location = 'donate.html'">Go Back</button>
</center>

</body>
</html>