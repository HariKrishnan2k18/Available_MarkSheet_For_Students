<?php
if(isset($_POST['user'])){
	sign($_POST['user'],$_POST['pwd']);
}if(isset($_POST['eee'])){
	retrive('eee',$_POST['eee']);
}if(isset($_POST['ece'])){
	retrive('ece',$_POST['ece']);
}if(isset($_POST['mech'])){
	retrive('mech',$_POST['mech']);
}if(isset($_POST['civil'])){
	retrive('civil',$_POST['civil']);
}if(isset($_POST['agri'])){
	retrive('agri',$_POST['agri']);
}
function create_connection(){
	return mysqli_connect("localhost","root","","sign");
}
function sign($user,$pwd){
	$conn = create_connection();
	$query = "SELECT * FROM `sign` WHERE username= \"$user\" AND pwd= \"$pwd\"";
	$res = mysqli_query($conn,$query);
	if(mysqli_num_rows($res)>0){
		setcookie('user_name',$user);
		setcookie('pwd',$pwd);
		header("Location: index.php");
	}else{
		header("Location: sign.php");
	}
}
function retrive($tname,$rno){
	$conn = create_connection();
	$query = "SELECT * FROM `$tname` WHERE `$tname`.`Register Number`=\"$rno\";";
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
?>
<br>
<br>
</table>
<?php
if ($tname == 'eee'){
	?>	
	<br>
	<br>
		<center><a href=eee.php> Back </a></center>
		<?php
	}elseif ($tname == 'ece') {
		?>
		<br>
		<br>
		<center><a href=ece.php> Back </a></center>
		<?php
	}elseif ($tname == 'mech') {
		?>
		<br>
		<br>
		<center><a href=mech.php> Back </a></center>
		<?php
	}elseif ($tname == 'agri') {
		?>
		<br>
		<br>
		<center><a href=agri.php> Back </a></center>
		<?php
	}elseif ($tname == 'civil') {
		?>
		<br>
		<br>
		<center><a href=civil.php> Back </a></center>)
		<?php
	}
}
?>
</body>
</html>
