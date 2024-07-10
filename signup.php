<?php
    include("connection.php");

    if(isset($_POST['submit'])) 
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = " select * from signup where email ='$email'";
        $result = mysqli_query($conn,$sql);
        $num =mysqli_num_rows($result);


        if($num >0)
        {
            echo"<script> alert('email already used')</script>";
        }
        else
        {
            $insert ="insert into signup(name,email,password)values('$name','$email','$password')";
            mysqli_query($conn,$insert);
            header("location:index.php");
        }
    }    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
<body>
    <div class="reg-container">
        <h1>User Registration</h1>
        <form id="registrationForm" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirm_password">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Register" class="button">
            </div>
            <div class="reg">
                <button><a href="index.php">Login Page</a></button>
            </div>
        </form>
    </div>
    <script src="reg.js"></script>
</body>

</html>
