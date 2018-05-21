<?php
/**
 * Created by PhpStorm.
 * User: rahulmidha
 * Date: 2018-05-13
 * Time: 10:24 PM
 */


$db = mysqli_connect("127.0.0.1","root","rahulmidha","user") or die("problem");

//$sql = "INSERT INTO users VALUES('firstname', 'lastname', 'email', 'password', 'confirmpassword', 'address', 'postalcode')";
//die("".($db -> query($sql)));
//die("done");


// Check connection
if (mysqli_connect_errno())
{

    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<script>alert('connected!')</script>";
}




if (isset ($_POST['register'])){
    session_start();
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
        $password = md5($confirmpassword); //hash password before storing for security reasons

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
    <meta name=" "author" content= "Rahul Midha">
    <meta name=" "viewport" content= >
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

<?php
if (isset($_SESSION['message'])) {
    echo "<div id='error_msg'>".$_SESSION['message']."</div>";
    unset($_SESSION['message']);
}
?>


<div class ="wrap">
    <form method="post" action="welcome.php">
        <h2>Sign Up</h2>
        <input type="text" name="firstname" placeholder="First Name" required autofocus>
        <input type="text" name="lastname" placeholder="Last Name" required>
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