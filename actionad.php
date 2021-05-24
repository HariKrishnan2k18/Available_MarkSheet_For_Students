<?php
if(isset($_POST['dept'])){
    if(isset($_POST['endav'])){
        insert($_POST['r_n'],$_POST['na'],$_POST['dept'],$_POST['endav'],$_POST['pro'],$_POST['cont'],$_POST['deg'],$_POST['con']);
    }else{
        insert($_POST['r_n'],$_POST['na'],$_POST['dept'],$_POST['endun'],$_POST['pro'],$_POST['cont'],$_POST['deg'],$_POST['con']);
    }
}elseif(isset($_POST['logout'])){
	logout();
}elseif (isset($_POST['np'])) {
	change_password($_POST['op'],$_POST['np'],$_POST['rp']);
}
else{
	del_row($_POST['d_n'],$_POST['d_d']);
}
function create_connection(){
	return mysqli_connect("localhost","root","","sign");
}
function insert($reg_num,$name,$dept,$end,$pro,$cont,$deg,$con){
	$conn = create_connection();
	$tabele_name = strtolower($dept);
	$query = "INSERT INTO `$tabele_name` VALUES (\"$reg_num\",\"$name\",\"$dept\",\"$end\",\"$pro\",\"$cont\",\"$deg\",$con)";
	mysqli_query($conn,$query);
	if ($tabele_name == 'eee'){
		header("Location: eeead.php");
	}elseif ($tabele_name == 'ece') {
		header("Location: ecead.php");
	}elseif ($tabele_name == 'mech') {
		header("Location: mechad.php");
	}elseif ($tabele_name == 'agri') {
		header("Location: agriad.php");
	}elseif ($tabele_name == 'civil') {
		header("Location: civilad.php");
	}elseif ($tabele_name == 'cse'){
        header("Location: csead.php");
    }
}
function del_row($reg,$dept){
	$conn = create_connection();
	$tabele_name = strtolower($dept);
	$dept = strtolower($dept);
	$query = "DELETE FROM `$dept` WHERE `$dept`.`Register Number`=$reg";
	mysqli_query($conn,$query);
	if ($tabele_name == 'eee'){
		header("Location: eeead.php");
	}elseif ($tabele_name == 'ece') {
		header("Location: ecead.php");
	}elseif ($tabele_name == 'mech') {
		header("Location: mechad.php");
	}elseif ($tabele_name == 'agri') {
		header("Location: agriad.php");
	}elseif ($tabele_name == 'civil') {
		header("Location: civilad.php");
	}elseif ($tabele_name == 'cse'){
        header("Location: csead.php");
    }
}

function change_password($old_password,$new_password,$re_password){
	if($new_password==$re_password){
		$conn = create_connection();
		$query = 'SELECT * FROM `sign`';
		$res = mysqli_query($conn,$query);
		$row = mysqli_fetch_assoc($res);
		if($old_password == $row['pwd']){
			$query = "UPDATE `sign` SET pwd = \"$new_password\"";
			mysqli_query($conn,$query);
			header("Location: sign.php");
		}else{
		header("Location: chpwd.php");
	}
	}
}
function logout(){
	setcookie('user_name',' ');
	setcookie('pwd',' ');
	header("Location: index.php");
}
?>