<?php

include ("database.php");

$name =$_POST['name'];
$email =$_POST['email'];
$num =$_POST['phonenumber'];
$age =$_POST['age'];
$ssn =$_POST['ssn'];
$dep =$_POST['department'];
$gender =$_POST['gender'];
$bloodgroup =$_POST['bloodgroup'];
$homeadd =$_POST['homeadd'];
$city =$_POST['city'];
$state =$_POST['state'];
$zip=$_POST['zip'];



$sql = "INSERT INTO Doctor (name, email,phonenumber,age, ssn,department, gender, bloodgroup, homeadd, city, state,zip)
VALUES ('$name', '$email', '$num','$age', '$ssn', '$dep', '$gender', '$bloodgroup', '$homeadd', '$city', '$state', '$zip')";

$result = $conn->query($sql);





header("Location: doctor.php");
?>