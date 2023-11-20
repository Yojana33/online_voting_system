<?php
    include("dbConnect.php");
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    
    <style>
        
        fieldset{
            margin-top: 10%;
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
<body style= "background:linear-gradient(to right, white )" text="black">
    <div class="header">
        
    </div>
    <div class= "body">
        <form action="" method="POST">
            <fieldset class="box-3 float-container">
            
            <legend><h1>User Registration</h1></legend>
            <table align="center" >
                        
                        <tr>
                            <td><label>Name: </label></td>
                            <td><input type="text" name="name" id="name" Required></td>
                        </tr><br>
                        <tr>
                            <td>
                            Username:
                            </td>
                            <td><label><input type="text" name="username"></label></td>
                        </tr>
                        <tr>
                            <td><label>Password: </label></td>
                            <td><input type="password" name="password" id="password"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="submit" name="submit"></td>
                        </tr>
                        
                        <tr><td><br>Goto Login<br><a href="index.php"><input type="submit" value="login"></a></td></tr>
                </table>
                </fieldset>
        </form>
    </div>

    </body>
</html>
<?php

    if(isset($_POST['submit']))
    {
        $name= $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        // echo ($name);
        // echo ($username);
        // echo ($password);
        

        $db = $pdo->prepare("INSERT INTO userinfo(name,username,password) VALUES(:name,:username,:password)");
        $db->bindValue('name',$name);
        $db->bindValue('username',$username);
        $db->bindValue('password',$password);
        $res=$db->execute();
        if($res){
            header("Location:index.php");
        }
        
    }

    
?>