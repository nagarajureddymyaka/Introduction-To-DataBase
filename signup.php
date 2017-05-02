<?php

include ("database.php");

$name =$_POST['name'];
$email =$_POST['email'];
$age =$_POST['age'];
$account =$_POST['account'];
$gender =$_POST['gender'];
$bloodgroup =$_POST['bloodgroup'];
$homeadd =$_POST['homeadd'];
$city =$_POST['city'];
$state =$_POST['state'];
$zip=$_POST['zip'];
$phonenumber =$_POST['phonenumber'];
$password =$_POST['password'];


$sql = "INSERT INTO signup (name, email,age, account, gender, bloodgroup, homeadd, city, state,zip, phonenumber, password)
VALUES ('$name', '$email', '$age','$account', '$gender', '$bloodgroup', '$homeadd', '$city', '$state', '$zip','$phonenumber', '$password')";

$result = $conn->query($sql);

header("Location: login.php");

?>


