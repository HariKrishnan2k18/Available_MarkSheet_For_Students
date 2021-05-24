<?php
if(isset($_COOKIE['user_name']) and isset($_COOKIE['pwd'])){
    $conn =mysqli_connect("localhost","root","","sign");
	$query = "SELECT * FROM `sign`";
    $res = mysqli_query($conn,$query);
    $final = mysqli_fetch_assoc($res);
	if($_COOKIE['user_name']==$final['username'] and $_COOKIE['pwd']==$final['pwd']){
		?>
<!DOCTYPE html>
<html>
<style type="text/css">
	form{
		font-family: "Times New Roman", Times, serif;
	}
</style>
<body>
	<center>
<p> <b>To Insert New Student </b></p>
<form action = actionad.php method = post>
	Register Number <input type="name" name="r_n"><br><br>
	Name of the Student<input type="name" name="na"><br><br>
	Department <input type="name" name="dept"><br><br>
	End Semester Mark Sheet <input type="checkbox" name="endav" value="Available">
  <label for="endav"> Available</label><t>
  <input type="checkbox" name="endun" value="Unavailable">
  <label for="endun">Unavailable</label><br><br>
	Provisional Certificate <input type = "name" name="pro"><br><br>
	Consolidate Certificate <input type = "name" name="cont"><br><br>
	Degree Certificate <input type = "name" name="deg"><br><br>
	Contact Number <input type = "name" name="con"><br><br>
	<input type="submit">
</form>
<br>
<p> <b>To Delete Student </b> </p>
<form action = actionad.php method = post>
	Register Number <input type="name" name="d_n"><br><br>
	Department <input type="name" name="d_d"><br><br>
	<input type="submit">
</form>
<br>
<br>
<form action = actionad.php method="post">
	Logout <input type="submit" name = "logout">
</form>
</center>
<table align="center" border="1" cellpadding="3" cellspacing="0">
<?php
function retrive($tname){
	$conn =mysqli_connect("localhost","root","","sign");
	$query = "SELECT * FROM `$tname`";
	?>
    <style>
    td{
        padding: 15px;
        text-align: center;
    }
    </style>
	<table align="center" border="1" cellpadding="3" cellspacing="0">
	<?php
	$res = mysqli_query($conn,$query);
	if(mysqli_num_rows($res)>0){
		echo "<tr>";
		echo "<td style=\"background-color: green; color: white;\"><b>Register Number</td>";
		echo "<td style=\"background-color: green; color: white;\"><b>Name of the Student</td> ";
		echo "<td style=\"background-color: green; color: white;\"><b>Department</td> ";
		echo "<td style=\"background-color: green; color: white;\"><b>End Semester Mark Sheet</td>";
		echo "<td style=\"background-color: green; color: white;\"><b>Provisional Certificate</td>";
		echo "<td style=\"background-color: green; color: white;\"><b>Consolidate Certificate</td>";
		echo "<td style=\"background-color: green; color: white;\"><b>Degree Certificate</td>";
		echo "<td style=\"background-color: green; color: white;\"><b>Contact Number</b></td>";

		echo "</tr>";
		while($row = mysqli_fetch_assoc($res)){
			echo "<tr>";
			echo "<td>".$row["Register Number"]."</td>";
			echo "<td> ".$row["Name of the Student"]."</td>";
			echo "<td>".$row["Department"]."</td>";
			echo "<td> ".$row["End Semester Mark Sheet"]."</td>";
			echo "<td>".$row["Provisional Certificate"]."</td>";
			echo "<td>".$row["Consolidate Certificate"]."</td>";
			echo "<td>".$row["Degree Certificate"]."</td>";
			echo "<td>".$row["Contact Number"]."</td>";
			echo "</tr>";
		}
}
}
retrive("cse");
?>
</body>
</html>
<?php
	}else{
		header("Location: sign.php");
	}
}else{
	header("Location: sign.php");
}