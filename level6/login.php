<?php
require 'functions.php';

if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // check username
    

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        label{
            display : block;
        }
        ul li{
            list-style-type: none;
            margin-bottom: 4px;
        }
    </style>
</head>
<body>
    
    <h1>Login Page</h1>

    <form action="" method="post">

        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="username" name="username" id="username">
            </li>

            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            
            <li>
                <button type="submit" name="login">login</button>
            </li>
        </ul>

    </form>

</body>
</html>