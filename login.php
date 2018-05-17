<?php
/**
 * Created by PhpStorm.
 * User: rahulmidha
 * Date: 2018-05-13
 * Time: 10:28 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
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
        input[type=email], input[type=password]{
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
            background:blue;
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
        <form>
            <h2>Log In</h2>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <br>

            <br>

            <input type ="submit" value="Login">


        </form>
    </div>
</div>
</body>
</html>
