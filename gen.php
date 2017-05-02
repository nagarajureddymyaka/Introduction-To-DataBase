<?php

include ("database.php");

$name =$_POST['name'];
$email =$_POST['email'];
$num =$_POST['phonenumber'];
$ssn =$_POST['ssn'];
$bdonate =$_POST['bdonate'];
$dep =$_POST['department'];
$gender =$_POST['gender'];
$bloodgroup =$_POST['bloodgroup'];
$age =$_POST['age'];
$city =$_POST['city'];
$state =$_POST['state'];
$zip=$_POST['zip'];



$sql = "INSERT INTO employee (name, email,phonenumber, ssn,bdonate, department, gender, bloodgroup, age, city, state,zip)
VALUES ('$name', '$email', '$num','$ssn', '$bdonate', '$dep', '$gender', '$bloodgroup', '$age', '$city', '$state', '$zip')";

$result = $conn->query($sql);





header("Location: gen_emp.php");
?>