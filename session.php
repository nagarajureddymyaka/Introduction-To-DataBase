<?php


 $conn= mysqli_connect("localhost", "root", "", "project");

session_start();// Starting Session


$sql = "SELECT email FROM signup WHERE email = '$user_check'";
$result = $conn->query($sql) or die(mysqli_error($conn));
$row = mysqli_num_rows($result);


$login_session =$row['email'];
if(!isset($login_session)){
mysqli_close($conn); // Closing Connection
header('Location: home.php'); // Redirecting To Home Page
}
?>