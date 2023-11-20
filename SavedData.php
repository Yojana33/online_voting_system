<?php
include('dbConnect.php');
?>

<?php
$candis = $_REQUEST['txtCand'];
$dbs=$pdo->prepare("SELECT name From candidates WHERE id=$candis");
$dbs->execute();
$res=$dbs->fetchALL();
foreach ($res as $row) {
    $candi = $row['name'];
}

$username = $_REQUEST['username'];
$name = $_REQUEST['txtName'];
$email   = $_REQUEST['txtEmail'];
$rollno =  $_REQUEST['txtRollNo'];
$reason =  $_REQUEST['txtReason'];
// $Branch =  $_REQUEST['txtBranch'];
// $year = $_REQUEST['txtYear'];

$year =  '1';


$dbcheck1=$pdo->query("SELECT * FROM users where year='1'");
$row1=$dbcheck1->fetch(PDO::FETCH_ASSOC);
{
    $remail=$row1['email'];
    $roll=$row1['rollno'];
    $uname=$row1['username'];
    if($uname==$username || $remail==$email || $roll==$rollno)
    {
        header("Location:year.php");
    }
    else{
        $dbcheck=$pdo->query("SELECT * FROM userinfo");
        $row=$dbcheck->fetch(PDO::FETCH_ASSOC) ;
        if($row)
        {
            $uname = $row['username'];
            // echo $username; echo $uname;
            if($username == null || $uname = $username)
            {
            
                // $sql = "INSERT into users(name,email,Branch,candidate,rollno,reason,username,year) values(:name,:email,:Branch,:candidate,:rollno,:reason,:username,:year)";
                $sql = "INSERT into users(name,email,candidate,rollno,reason,username,year,candidate_id) values(:name,:email,:candidate,:rollno,:reason,:username,:year,:candidate_id)";
                $stmt = $pdo->prepare($sql);
        
                $stmt->bindParam(":name",$name);
                $stmt->bindParam(":email",$email);
                // $stmt->bindParam(":Branch",$Branch);
                $stmt->bindParam(":candidate",$candi);
                $stmt->bindParam(":rollno",$rollno);
                $stmt->bindParam(":reason",$reason);
                $stmt->bindParam(":username",$username);
                $stmt->bindParam(":year",$year);
                $stmt->bindParam(":candidate_id",$candis);
        
                $stmt->execute();
// var_dump($stmt);die();

                header('location:successfully.php');
            }
            else{
                
                echo "<script>alert('')</script>";
               // die();
            }
        
        }
        
    }
}





?>  