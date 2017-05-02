<?php

include ("database.php");


$email =$_POST['email'];
$num =$_POST['phonenumber'];
$xray =$_POST['xray'];
$bt =$_POST['blood'];
$ut =$_POST['urine'];
$vt =$_POST['viral'];
$ct =$_POST['ct'];
$endo =$_POST['endoscopy'];
$hiv =$_POST['hiv'];
$mri =$_POST['mri'];




$sql = "INSERT INTO expenses (email,phonenumber,xray, bt, ut, vt, ct, endo, hiv, mri)
VALUES ('$email', '$num','$xray', '$bt', '$ut', '$vt', '$ct', '$endo', '$hiv', '$mri')";

$result = $conn->query($sql);





header("Location: laboratory.php");
?>