
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/lab.css">

<head>
<title>Home</title>

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
 
  <button class="fa fa-home" onclick="window.location.href='../project/home.php'">&nbsp;&nbsp;&nbsp; Home</button>
   <button class="fa fa-money" onclick="window.location.href='../project/expenses.php'">&nbsp;&nbsp;&nbsp; Your Expenses</button>
  
</div>


<div class="outPopUp" align="center">
<br>
<br>
<br>
<br>




<button class="accordion">View the Expenses List</button>
<div class="panel">
  <?php
include ("database.php");


$query = "SELECT email,phonenumber,xray,bt,ut,vt,ct,endo,hiv,mri,( xray + bt + ut + vt + ct + endo + hiv + mri) AS Total  
          FROM expenses
		  WHERE email='mani@gmail.com'";
$result = $conn->query($query) 
or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#F5F5DC\"><tr> 
 

<td width=100>EMAIL</td> 
<td width=100>PHONE</td> 
<td width=100>X-Ray</td> 
<td width=100>Blood Test</td> 
<td width=100>Urine</td> 
<td width=100>Viral Test</td> 
<td width=100>CT Scan</td> 
<td width=100>Endo</td> 
<td width=100>HIV</td> 
<td width=100>MRI</td> 
<td width=100>Total Amount</td> 

</tr>"; 

while($row = $result->fetch_assoc()) 
{ 
print "<tr>"; 
print "<td>" . $row['email'] . "</td>"; 
print "<td>" . $row['phonenumber'] . "</td>"; 
print "<td>" . $row['xray'] . "</td>"; 
print "<td>" . $row['bt'] . "</td>"; 
print "<td>" . $row['ut'] . "</td>"; 
print "<td>" . $row['vt'] . "</td>"; 
print "<td>" . $row['ct'] . "</td>"; 
print "<td>" . $row['endo'] . "</td>"; 
print "<td>" . $row['hiv'] . "</td>"; 
print "<td>" . $row['mri'] . "</td>"; 
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
