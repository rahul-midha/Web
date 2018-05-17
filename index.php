<?php
/**
 * Created by PhpStorm.
 * User: rahulmidha
 * Date: 2018-05-13
 * Time: 10:24 PM
 */

$con = mysqli_connect("localhost","root","","users");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}





























?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>My Website</title>
    <link rel = "stylesheet" href="style.css">

<style>
body{
    background:#323232;
}
.wrap{
    width: 350px;
    margin:auto;
    background: #00adee;
    margin-top: 50px;
    padding:5px;
}
form{
    padding:10px;
    font-family:arial;
    border:1px dotted white;
    margin: 10px;
}
h2{
    text-align:center;
    background:orange;
    color:white;
    padding:10px;
    border-radius:10px;
}
input{
    padding:10px;
    margin:5px;
    border-radius:5px;
    border:none;
}
input[type=text], input[type=email], input[type=number], input[type=password]{
    width:90%;
}
input[type=submit]{
    width:95%;
    background:orange;
    cursor:pointer;
    font-size:15px;
    font-weight:bold;
    color:white;
}
input[type=submit]:hover{
    background:#59d5d8;
}
select {
    padding:10px;
    width:32%;
    border-radius:5px;
}


</style>

</head>

<body>

<div id ="wrapper">
    <header>
        <h1>Customer Registration Website</h1>
        <h2>portfolio with navbar</h2>
    </header>
<nav>
    <ul class = "main_menu">
        <li><a href="welcome.php">Welcome Page</a> </li>
        <li><a href="#">Home Page</a> </li>
        <li><a href="login.php">Login Page</a> </li>
        <li><a href="index.php">Registraton</a> </li>
    </ul>


</nav>


<div class ="wrap">
    <form method="post">
        <h2>Sign Up</h2>
        <input type="text" name="yourname" placeholder="First Name" required autofocus>
        <input type="text" name="yourname" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirmpassword" placeholder="Confirm Password" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="text" name="postalcode" placeholder="Postal Code" required>

        <br>

        <br>

        <input type ="submit" name = 'register' value="Submit Now">


    </form>
</div>


</div>


</body>



</html>