<?php
    session_start();   

    include("connection.php");

    if(isset($_POST['submit'])) 
    {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = " select * from signup where email ='$email'and password='$password'";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        $row=mysqli_fetch_assoc($result);
        if($num > 0)
        {
            $name = $_POST['name'];
            $_SESSION['name']= $row['name'];
            $_SESSION['email']=$row['email'];
            $_SESSION['password']=$row['password'];
            header("location:welcome.php");
        }
        else
        {
            echo"<script> alert('incorrect email id and password')</script>";
        }
    }   

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h2>LOGIN</h2>
        <form method="post" >
            <div class="form">
                <label>EMAIL</label>
                <input type="text" name="email" >
            </div>
            <div class="form">
                <label>PASSWORD</label>
                <input type="password" name="password" >
            </div>
            <div class="form">
                <input type="submit" value="SUBMIT" name="submit" class="button">      
            </div>
            <div class="reg">
                <button><a href="signup.php">create account</a></button>
            </div>
        </form>
    </div>
</body>
</html>