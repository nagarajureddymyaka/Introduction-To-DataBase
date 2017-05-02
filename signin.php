   <?php
   

 $conn= mysqli_connect("localhost", "root", "", "project");

if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}

$acc = $_POST['account'];
$uid = $_POST['email'];
$pwd = $_POST['password'];



$sql = "SELECT account,email,password FROM signup WHERE account='$acc' AND email = '$uid' AND password = '$pwd' ";
$result = $conn->query($sql) or die(mysqli_error($conn));
$numrows = mysqli_num_rows($result);
if($numrows == 1)
  {
    if($acc == 'Doctor')
	{
		header("Location: doctor.php");
	}
	elseif($acc == 'Patient')
		{
	    
		header("Location: home.php");	
		}
	
    elseif($acc == 'Lab Assistant')
		{
		header("Location: dash.php");	
		}	
	else
	{
		header("Location: dashboard.php");
	
	}
  }
else
   {
    echo "<script type='text/javascript'>alert('reddy');</script>";
	header("Location: login.php");
   }
   ?>