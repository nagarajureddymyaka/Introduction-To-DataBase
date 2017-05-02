   <?php

$conn= mysqli_connect("localhost", "root", "", "project");

if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}

$query = "SELECT department, count (*) as number FROM doctor NATURAL JOIN nurse GROUP BY department";
$result = $conn->query($query);
while($row = mysqli_fetch_array($result))
		{
			echo "['".$row["department"]."', ".$row["number"]." ],";
		}
?>
