<?php
/**
 * Created by PhpStorm.
 * User: rahulmidha
 * Date: 2018-05-13
 * Time: 10:25 PM
 */
session_start();

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


<!--    <div class ="wrap">-->
<!---->
<!--        <h2>Welcome --><?php //echo $_POST["email"]; ?><!--<br></h2>-->
<!--        --><?php
//        if (isset($_SESSION['message'])) {
//            echo "<div id='error_msg'>".$_SESSION['message']."</div>";
//            unset($_SESSION['message']);
//        }
//        ?>
<!--    </div>-->


</div>
<?php
if (isset($_SESSION['message'])) {
    echo "<div id='error_msg'>".$_SESSION['message']."</div>";
    unset($_SESSION['message']);
}
?>

<div><h4>Welcome <?php echo $_SESSION['firstname'];  ?> <?php echo $_SESSION['lastname'];  ?>  </h4></div>


</body>
</html>