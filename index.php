<?php
if(isset($_COOKIE['user_name']) and isset($_COOKIE['pwd'])){
    $conn =mysqli_connect("localhost","root","","sign");
	$query = "SELECT * FROM `sign`";
    $res = mysqli_query($conn,$query);
    $final = mysqli_fetch_assoc($res);
	if($_COOKIE['user_name']==$final['username'] and $_COOKIE['pwd']==$final['pwd']){
		header("Location: admin.php");
}
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
  margin-top: 30px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;
  padding-top: 2px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
  outline-style: double;
   outline-style: solid;
  outline-color: black;
}
h2{
    font-family: "Times New Roman", Times, serif;
    color: white;
    background-color: green;
    border-style: double;
    border-width: thick;
    border-color: red;
}
a{
    font-family: "Times New Roman", Times, serif;
    font-size: 20px;
}
</style>
	<title>Muthayammal</title>
</head>
<body>
	<center>
	<h2><b><p>MUTHAYAMMAL COLLEGE OF ENGINEERING, RASIPURAM - 637 408</p></b></h2>
	<h2><b><p> EXAM CONTROL OFFICE </p></b></h2>
	<b>
<hr style="width:100%; border-width: 2px; border-color: black;">
</svg>
<br>
<a href="civil.php"> CIVIL</a>
<br>
<br>
<a href="cse.php"> CSE </a>
<br>
<br>
<a href="ece.php"> ECE</a>
<br>
<br>
<a href="eee.php"> EEE </a>
<br>
<br>
<a href="agri.php"> AGRI </a>
<br>
<br>
<a href="mech.php"> MECH </a>
<br>
<br>
<hr style="width:100%; border-width: 2px; border-color: black;">
<br>
<br>
<a href="sign.php"> Login as Admin </a>
</b>
</center>
</body>
</html>
