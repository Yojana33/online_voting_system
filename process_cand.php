<?php
session_start();
$username = $_SESSION['username'];
if(!$username){
  header("Location:index.php");
}
?>
<?php
include('dbConnect.php');
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    session_start();
$user_info_id = $_SESSION['user_id'];
$name = $_POST['txtName'];
$email   = $_POST['txtEmail'];
//$number = $_POST['txtNumber'];
$branch =  $_POST['txtbranch'];
$rollno =  $_POST['txtRollNo'];
//$enroll =  $_POST['txtEnrollID'];
//$enroll =  $_POST['txtEnrollID'];
$year =  $_POST['txtYear'];

$sql = "INSERT into candidates(name,email,branch,rollno,year,user_info_id) values(:name,:email,:branch,:rollno,:year,:user_info_id)";
// $sql = "INSERT into candidates where year=2() values()";


$stmt = $pdo->prepare($sql);

$stmt->bindParam(":name",$name);
$stmt->bindParam(":email",$email);
//$stmt->bindParam(":mobile",$number);
$stmt->bindParam(":branch",$branch);
$stmt->bindParam(":rollno",$rollno);
//$stmt->bindParam(":enrollid",$enroll);
$stmt->bindParam(":year",$year);
$stmt->bindParam(":user_info_id",$user_info_id);

// try{
    $stmt->execute();
// }catch(Exception $e){
//     echo $e->getMessage();
// }


header('location: pending.php');

}else{
    header("Location: /Project/");
}
?>
