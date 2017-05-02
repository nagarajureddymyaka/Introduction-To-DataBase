
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/lab.css">

<head>
<title>Lab</title>
<style>

body{
	overflow:scroll;
	
}

#outPopUp {
  position: absolute;
  width: 300px;
  height: 200px;
  z-index: 15;
  top: 50%;
  left: 50%;
  margin: -100px 0 0 -150px;
  background: red;
}

#bg {
  position: fixed; 
  top: 0; 
  left: 0; 
	
  /* Preserve aspet ratio */
  min-width: 100%;
  min-height: 100%;
}
div.register {
   
    width: 700px;
    height: 550px;
	
}
table, th, td {
   border: 1px solid black;
   padding: 15px;
}
th {
    background-color: #4CAF50;
    color: white;
}
 
</style>
</head>
<body >

<div class="icon-bar">
  <a class="active" href="laboratory.php"><i class="fa fa-home"></i></a> 
  <a href="#"><i class=""></i></a> 
  <a href="#"><i class=""></i></a> 
  <a href="#"><i class=""></i></a>
  <a href="login.php"><i class="fa fa-sign-out"></i></a> 
</div>

<div class="tab">
<br>
 
  <button class="fa fa-tachometer" onclick="window.location.href='../project/dash.php'">&nbsp;&nbsp;&nbsp; Dashboard</button>
  <button class="fa fa-flask" onclick="window.location.href='../project/laboratory.php'">&nbsp;&nbsp;&nbsp; laboratory</button>
</div>


<div class="outPopUp" align="center">
<br>
<br>
<br>
<br>

<button class="accordion" >Add Expenses</button>

<div class="panel" align="center">
 

  
    


  <section class="container1">
    <div class="register">
      <h1>Add Expenses of patient to Database</h1>
      <form method="post" action="lab.php"><br>
       
 <p> <label> Email<label>
  
  <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter valid Email address"value="" placeholder="Email Id" required>
	
<label> Phone:</label>	
  <input type="tel" placeholder="Enter Phone number" pattern="[0-9]{10}" title="Enter the 10 digit phone number" name="phonenumber" required></p>
  
 <p> <label> X-Ray:</label>
  <input type="text" name="xray" pattern="[0-9]{1,5}+\.[0-9]{2}$"  placeholder="0.00"value="" required>
  
  <label> Blood Test:</label>
  <input type="text" name="blood" pattern="[0-9]{1,5}+.[0-9]{2}$" placeholder="0.00"value="" required></p>
  
<p>  <label> Urine:</label>
  <input type="text" name="urine" pattern="[0-9]{1,5}+.[0-9]{2}$" placeholder="0.00" value="" required>
  
 &nbsp;&nbsp; <label> Viral Test:</label>
  <input type="text" name="viral" pattern="[0-9]{1,5}+.[0-9]{2}$" placeholder="0.00" value="" required></p>
  
<p>  <label> CT:</label>&nbsp;&nbsp;&nbsp;
  <input type="text" name="ct" pattern="[0-9]{1,5}+.[0-9]{2}$" placeholder="0.00" value="" required>
  
 &nbsp;&nbsp; <label>Endoscopy:</label>
  <input type="text" name="endoscopy" pattern="[0-9]{1,5}+.[0-9]{2}$" placeholder="0.00" value="" required></p>
 
  <p>  <label>HIV:</label>&nbsp;&nbsp;
  <input type="text" name="hiv" pattern="[0-9]{1,5}+.[0-9]{2}$" placeholder="0.00" value="" required>
  
 &nbsp;&nbsp; <label>MRI:</label>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="mri" pattern="[0-9]{1,5}+.[0-9]{2}$" placeholder="0.00" value="" required></p>
  
<br>
<br>
<br>

        <p class="submit"><input type="submit"  name="commit" value="ADD"></p><br>
      </form>
    </div>

   
  </section>

 
</div>

<button class="accordion">View the Expenses List</button>
<div class="panel">
  <?php
include ("database.php");

$query = "SELECT email,phonenumber, xray , bt , ut , vt , ct , endo , hiv , mri,( xray + bt + ut + vt + ct + endo + hiv + mri) AS Total  
          FROM expenses";
$result = $conn->query($query) 
or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#F5F5DC\"><tr> 
 

<td width=100>EMAIL:</td> 
<td width=100>PHONE</td> 
<td width=100>Total</td> 

</tr>"; 

while($row = $result->fetch_assoc()) 
{ 
print "<tr>"; 
print "<td>" . $row['email'] . "</td>"; 
print "<td>" . $row['phonenumber'] . "</td>"; 
print "<td>" . $row['Total'] . "</td>"; 



print "</tr>"; 
} 
print "</table>"; 

?>
</div>





<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}

</script>

</body>

</html>
