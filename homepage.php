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
<!--        <form>-->
<!--            <h2>Log In</h2>-->
<!--          <input type="password" name="password" placeholder="Password" required>-->
<!---->
<!--            <br>-->
<!---->
<!--            <br>-->
<!---->
<!--            <input type ="submit" value="Login">-->
<!---->
<!---->
<!--        </form>-->

        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis tortor vel nisl commodo, in aliquet eros porttitor. Nullam at purus diam. Nullam vulputate nunc non quam feugiat, sit amet vestibulum sapien mollis. Donec interdum est magna, blandit tristique est scelerisque vel. Aenean dapibus urna diam, non consequat arcu tincidunt sit amet. Cras eget libero sapien. Maecenas tortor velit, lobortis sit amet commodo nec, congue et libero. Etiam vitae venenatis justo. Duis dapibus interdum justo, in malesuada erat dignissim sit amet. Duis ultrices ligula a eros feugiat accumsan. Integer in porttitor neque, at posuere lorem. Sed est lorem, fringilla varius nunc rhoncus, malesuada viverra ipsum. Suspendisse in lectus cursus, malesuada lectus eu, dictum urna. Integer lectus leo, finibus sit amet justo at, posuere ultricies massa. Duis sapien enim, pretium ac feugiat nec, congue quis ex. Sed ut velit nec libero dapibus pharetra eu ut ipsum.</h3>
    </div>
</div>
</body>
</html>
