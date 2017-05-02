

<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Registration Form</title>
  <link rel="stylesheet" href="css/style.css"> 

</head>
<body background= "hms1.jpg">
  <section class="container1">
    <div class="register">
      <h1>Hospital Management Systems</h1>
      <form action="signup.php" method="POST"><br>
        <p>&nbsp;&nbsp;&nbsp; <input type="text" name="name" value="" placeholder="Enter fullname" required> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter valid Email address"value="" placeholder="Email Id" required></p>
		
        
         <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" pattern="[0-9]{2}" placeholder="Age" name="age" required>
		&nbsp;&nbsp;<select id="soflow" name="account"required>
     <option value="" disabled selected hidden>Signup account type<option>
    <option>Patient</option>
    
  
   </select>
   </p>
	

    <select required id="soflow" name="gender" required>
    <option value="" disabled selected hidden>Select Gender</option>
    <option>Male</option>
    <option>Female</option>
    </select >
    &nbsp;&nbsp;&nbsp;<select id="soflow" name="bloodgroup" required >
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
	     
		 <p>&nbsp;&nbsp;&nbsp;  <input type="text" placeholder="H.NO, Street" name="homeadd" value="" required>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <input type="text" placeholder="City" name="city" value="" required></p>
	     
		 
		 <p>&nbsp;&nbsp;&nbsp;  <input type="text" placeholder="State" name="state" value="" required>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="text" pattern="[0-9]{5}" title="Enter the 5 digit ZIP code" placeholder="ZIP" name="zip" required></p>
	  
	
	    <p>&nbsp;&nbsp;&nbsp;  <input type="tel" placeholder="Enter Phone number" pattern="[0-9]{10}" title="Enter the 10 digit phone number" name="phonenumber" required>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"value="" placeholder="Choose Password" required></p>
	
	<br>

        <p class="submit"><input type="submit" name="commit" value="Registration" ></p><br>
		
		&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;   Already have an account ?
		 <p class="submit1"><input type="submit" onclick="window.location.href='../project/login.php'"  name="commit" value="Login Here..!"></p>  
      </form>
	
    </div>

   
  </section>

 
</body>
</html>

