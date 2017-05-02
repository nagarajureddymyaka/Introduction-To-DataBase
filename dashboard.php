<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/dash.css">
<head>
<style>


</style>
</head>
<body>

<div class="icon-bar">
  <a class="active" href="dashboard.php"><i class="fa fa-home"></i></a> 
  <a href="#"><i class=""></i></a> 
  <a href="#"><i class=""></i></a> 
  <a href="#"><i class=""></i></a>
  <a href="login.php"><i class="fa fa-sign-out" ></i></a> 
</div>


<div class="tab">
<br>
  <button class="fa fa-tachometer" onclick="window.location.href='../project/dashboard.php'" >&nbsp;&nbsp;&nbsp;Dashboard</button>
  <button class="fa fa-user-md  " onclick="window.location.href='../project/doctor.php'" >&nbsp;&nbsp;&nbsp;Doctor</button>
  <button class="fa fa-user-md" onclick="window.location.href='../project/nurse.php'">&nbsp;&nbsp;&nbsp;Nurse</button>
  <button class="fa fa-user" onclick="window.location.href='../project/gen_emp.php'">&nbsp;&nbsp;&nbsp;General employees</button>
  
</div>




<div id="chart-container">FusionCharts will render here</div>
  <script src="js/jquery-2.1.4.js"></script>
  <script src="js/fusioncharts.js"></script>
  <script src="js/fusioncharts.charts.js"></script>
  <script src="js/themes/fusioncharts.theme.zune.js"></script>
  
  


     <script src="js/app.js"></script>







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