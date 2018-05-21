

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
        <h2>Submitted By Rahul Midha</h2>
    </header>
    <nav>
        <ul class = "main_menu">
            <li><a href="welcome.php">Welcome Page</a> </li>
            <li><a href="homepage.php">Home Page</a> </li>
            <li><a href="login.php">Login Page</a> </li>
            <li><a href="index.php">Registraton</a> </li>
        </ul>


    </nav>


    <div class ="wrap">
        <form method="POST">
            <h2>Log In</h2>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <br>

            <br>

            <input type ="submit" name="submit" value="Log-In" onclick="login()">


        </form>
    </div>
</div>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: rahulmidha
 * Date: 2018-05-13
 * Time: 10:28 PM
 */

session_start();

// connect to database
$db = mysqli_connect("127.0.0.1","root","rahulmidha","user") or die("problem");




//if (isset ($_POST['submit'])) {
//    //session_start();
////    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
////    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
////    $email = mysqli_real_escape_string($db, $_POST['email']);
////    $password = mysqli_real_escape_string($db,  $_POST['password']);
////    $confirmpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);
////    $address = mysqli_real_escape_string($db, $_POST['address']);
////    $postalcode = mysqli_real_escape_string($db, $_POST['postalcode']);
//
//    $email = $_POST['email'];
//    $password = $_POST['password'];
//
//    $password = md5($password);
//    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
//    $result = mysqli_query($db, $sql);
//
//    if(mysqli_num_rows($result)==1){
//        $_SESSION['message'] = "You are now logged in";
//        $_SESSION['email']= $email;
//        header("location: welcomeoutput.php"); //redirecting to home page
//    }
//    else{
//        echo "<script>alert('invalid');</script>";
//        $_SESSION['message'] = "Username/Password combination incorrect";
//
//    }
//
//}
 //checking the 'user' name which is from Sign-In.html, is it empty or have some text
if (isset ($_POST['submit'])) {
//
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $email = mysqli_real_escape_string($db, $_POST['email']);

    $user_check_query = "SELECT * FROM users WHERE password='$password' and email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION['firstname'] = $row['first_name'];
    $_SESSION['lastname'] = $row['last_name'];
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['email'] = $email;
        //$_SESSION['firstname'] = $firstname;
        //$_SESSION['lastname'] = $lastname;
        //$_SESSION['postalcode'] = $postalcode;
        header("location:welcomeoutput.php");
    }
    else{
        //header("location:index.php");
        echo "<script>alert('Incorrect combination of Email/Password'); location.href='login.php';</script>";
    }
}

function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}




?>