<?php
session_start();

if (!isset($_SESSION['password'])|| !isset($_SESSION['email']) ) 
{
    // echo "<script> alert('please login')</script>";
    header("Location: index.php");
    exit;
    

}

include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Logout</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.logout-container {
    max-width: 600px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    font-family: Arial, sans-serif;
}

p {

    margin-bottom: 20px;
    font: bolder;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>
<div class="logout-container">
    <h1>welcome..</h1>
    <h3>Hello.... <?php echo $_SESSION['name'];?></h3>
    <p>Email id : <?php echo $_SESSION['email'];?></p>
    <p>Password : <?php echo $_SESSION['password'];?></p>
    <form  method="post">
        <button  type="submit" name="logout">Logout</button>
    </form>
</div>
<?php


if (isset($_POST['logout'])) {

    session_destroy();
    header("Location: index.php");
    exit;
}
?>
</body>
</html>
