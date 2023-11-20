<?php
    include("dbConnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Voting System Login</title>
    
    <style>
        fieldset{
            
            border:4px solid seagreen;
            margin-left:30%;
            margin-right:25%;
            
        }
        legend{
            margin-left: 5%;
        }
        .footer{
            text-align: center;
        }
        .footer ul {
            display:inline-flex;
        }
        a{
            text-decoration: none;
            color: blue;
        }
       
        
    </style>
</head>
<body style="background:linear-gradient(to right, white )" text="black" >
    <div class="header"><br><br><br>
        
    </div>
    <div class="body">
    <br><br><br>
    <fieldset>
        <legend><h1>Voting system login</h1></legend>
        <table align="center">
                <form action="" method="POST">
                        <tr>
                            <td><label>Username: </label></td>
                            <td><input type="text" name="username" placeholder="username" id="uname"></td>
                        </tr>
                        <tr>
                            <td><label>Password: </label></td>
                            <td><input type="password" name="password" placeholder="password*" id="password"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="login" name="login"></td>
                        </tr>
                </form>
                        <tr><td>Not registered yet? Regsiter here</td></tr>
                        <tr><td><a href="register.php"><input type="submit" value="register" name="register"></a></td></tr>
                        
            </table>
    </fieldset>
        
            
    </div>
    <div class="footer">
        <ul type="none">
            <li ><a href="admin_login.php"> Go to Admin</a></li>
        </ul>
    </div>
</body>
</html>
<?php
    session_start();
    if(isset($_POST['login']))
    {
        $username= $_POST['username'];
        $password= $_POST['password'];

        $db=$pdo->prepare("SELECT * From userinfo WHERE username='$username' AND password='$password'");
        $db->execute();
        $res=$db->fetchALL();
        if($res)
        {
            foreach ($res as $row) {
                $uid = $row['id'];
                $uname = $row['name'];
            }
            if($_SESSION['username']=$username)
            {
                $_SESSION['user_id']=$uid;
                $_SESSION['user_name']=$uname;
                header("Location:homepage.php");
            }
           
        }
        else{
            sleep(1);
            echo "<script>alert('Wrong user! try again')</script>";   
         }
    }
    
?>