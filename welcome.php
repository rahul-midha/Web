<?php
/**
 * Created by PhpStorm.
 * User: rahulmidha
 * Date: 2018-05-13
 * Time: 10:25 PM
 */
if (isset ($_POST['register'])){
    session_start();
    $db = mysqli_connect("127.0.0.1","root","rahulmidha","user") or die("problem");
    //    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    //    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
//    $email = mysqli_real_escape_string($db, $_POST['email']);
//    $password = mysqli_real_escape_string($db,  $_POST['password']);
//    $confirmpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);
//    $address = mysqli_real_escape_string($db, $_POST['address']);
//    $postalcode = mysqli_real_escape_string($db, $_POST['postalcode']);


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $address = $_POST['address'];
    $postalcode = $_POST['postalcode'];


    if ($password == $confirmpassword) {
        //create user
        //$password = md5($confirmpassword); //hash password before storing for security reasons

        $sql = "INSERT INTO users VALUES ('$firstname', '$lastname', '$email', '$password', '$confirmpassword', '$address', '$postalcode')";

        //mysqli_query($db, $sql);
        $db -> query($sql);
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['firstname'] = $firstname;
        header("location:welcome.php"); //redirect to welcome page
    }

    else{
        $_SESSION['message'] = "The passwords do not match";
    }


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <link rel = "stylesheet" href="style.css">
    <style>
h2{
    text-align:center;
            background:orange;
            color:white;
            padding:10px;
            border-radius:10px;
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

            <h2>Welcome <?php echo $_POST["first_name"]; ?><br></h2>
            <?php
            if (isset($_SESSION['message'])) {
                echo "<div id='error_msg'>".$_SESSION['message']."</div>";
                unset($_SESSION['message']);
            }
            ?>
    </div>


</div>


</body>
</html>