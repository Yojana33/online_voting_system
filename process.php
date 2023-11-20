<?php
session_start();
// if(isset($_SESSION['']))
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

include 'dbConnect.php';

$sql = "select * from admin where username='$username'";
$stmt = $pdo->prepare($sql);
//$stmt->bindParam(":username",$username);
$stmt->execute();
//print_r($stmt); //exit;

if($stmt->rowCount()>0){

	$row = $stmt->fetch();
	if($row['password']==$password){
		
		$_SESSION['aid'] = $row['aid']; //admin id
		$_SESSION['admin_id'] = $username; // username
		$_SESSION['aname']  = $row['aname']; //admin name
		header("location:admin_dashboard.php"); //exit;

	}else{
		$_SESSION['error'] = "Wrong Password"; exit;
		//header("location:admin_login.php");
	}

}else
{
	$_SESSION['error'] = "Wrong User ID"; exit;
	//header("location:admin_login.php");
}
?>