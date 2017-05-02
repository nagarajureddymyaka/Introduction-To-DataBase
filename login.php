
<html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">  
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Hospital Management Systems</h1>
      <form action="signin.php" method="POST" ><br>
	<select id="soflow" name="account" required>
  <option value="" disabled selected hidden>Select Account Type<option>
  <option>Doctor</option>
 
  <option>Patient</option>
  
  <option>Lab Assistant</option>

  </select>	
        <p>&nbsp;&nbsp;&nbsp; <input type="email" name="email" value="" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter valid Email address" required></p>
        <p>&nbsp;&nbsp;&nbsp; <input type="password" name="password" value="" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Enter valid password" required></p>
       
        <p class="submit"><input type="submit" name="commit" value="Login"></p><br>
		 Not registered yet ?
		 <p class="submit1"><input type="submit" onclick="window.location.href='../project/register.php'"name="commit" value="Register Here..!"></p>
      </form>
    </div>

    
  </section>

 
</body>
</html>
