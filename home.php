

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




</body>

</html>
