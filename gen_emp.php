
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/docnur.css">

<head>
<title>Gen_employee</title>
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
  <a class="active" href="dashboard.php"><i class="fa fa-arrow-circle-left"></i></a> 
  <a href="#"><i class=""></i></a> 
  <a href="#"><i class=""></i></a> 
  <a href="#"><i class=""></i></a>
  <a href="login.php"><i class="fa fa-sign-out"></i></a> 
</div>

<div class="tab">
<br>
  <button class="fa fa-tachometer" onclick="window.location.href='../project/dashboard.php'" >&nbsp;&nbsp;&nbsp; Dashboard</button>
  <button class="fa fa-user-md  " onclick="window.location.href='../project/doctor.php'" >&nbsp;&nbsp;&nbsp;Doctor</button>
  <button class="fa fa-user-md" onclick="window.location.href='../project/nurse.php'">&nbsp;&nbsp;&nbsp;Nurse</button>
  <button class="fa fa-user" onclick="window.location.href='../project/gen_emp.php'">&nbsp;&nbsp;&nbsp; General employees</button>
  
</div>


<div class="outPopUp" align="center">
<br>
<br>
<br>
<br>

<button class="accordion" >Add a General Empolyee</button>

<div class="panel" align="center">
 

  
    


  <section class="container1">
    <div class="register">
      <h1>Add an Employee to Database</h1>
      <form method="post" action="gen.php"><br>
        <p>&nbsp;&nbsp;&nbsp; <input type="text" name="name" value="" placeholder="Enter fullname" required> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter valid Email address"value="" placeholder="Email Id" required></p>
		
        
        <p>&nbsp;&nbsp;&nbsp;  <input type="tel" placeholder="Enter Phone number"pattern="[0-9]{10}" title="Enter the 10 digit phone number" name="phonenumber" required> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="text" pattern="[0-9]{9}" placeholder="Enter SSN" title="Enter the 9 digit SSN" name="ssn" required></p>
	
        <p><select name="bdonate" id="soflow" required>
     <option value="" disabled selected hidden>Are you ready to donate blood..??</option>
     <option>Yes</option>
     <option>No</option>
    </select > 
        &nbsp;&nbsp;<select name="department" id="soflow">
         <option value="" disabled selected hidden>Select Employee Type<option>
         <option>Lab technician</option>
         <option>Receptionist</option>
         <option>Accountant</option>
         <option>General Duty Assistant</option>
         <option>DERMATOLOGY</option>
  
  
        </select>
		</p>
  <p> &nbsp;&nbsp;<select name="gender" id="soflow" required>
     <option value="" disabled selected hidden>Select Gender</option>
     <option>Male</option>
     <option>Female</option>
    </select >
  <select name="bloodgroup" id="soflow">
  <option value="" disabled selected hidden>Blood Group<option>
  <option>O-</option>
  <option>O+</option>
  <option>A-</option>
  <option>A+</option>
  <option>B-</option>
  <option>B+</option>
  <option>AB-</option>
  <option>AB+</option>
  
  </select>
  </p>
	     
		 <p>&nbsp;&nbsp;&nbsp; <input type="text" pattern="[0-9]{2}" title="Enter the 2 digit age"placeholder="Age(XX)" name="age" required>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <input type="text" placeholder="City" name="city" required></p>
	     
		 
		 <p>&nbsp;&nbsp;&nbsp;  <input type="text" placeholder="State" name="state" required>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="text" pattern="[0-9]{5}" title="Enter the 5 digit ZIP code"placeholder="ZIP" name="zip" required></p>
	  
	
	   
	
	<br>

        <p class="submit"><input type="submit"  name="commit" value="ADD"></p><br>
      </form>
    </div>

   
  </section>

 
</div>

<button class="accordion">View the list of General Employees</button>
<div class="panel">
  <?php
include ("database.php");

$query = "SELECT name,email,phonenumber,ssn,department 
          FROM employee";
$result = $conn->query($query) 
or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#F5F5DC\"><tr> 
 
<td width=100>NAME:</td> 
<td width=100>EMAIL:</td> 
<td width=100>PHONE</td> 
<td width=100>SSN</td> 
<td width=100>DEPARTMENT</td>

</tr>"; 

while($row = $result->fetch_assoc()) 
{ 
print "<tr>"; 
print "<td>" . $row['name'] . "</td>"; 
print "<td>" . $row['email'] . "</td>"; 
print "<td>" . $row['phonenumber'] . "</td>"; 
print "<td>" . $row['ssn'] . "</td>";
print "<td>" . $row['department'] . "</td>";


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
