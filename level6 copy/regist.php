<?php
    require 'functions.php';

    // checking that user has pressed the register button;
    if( isset($_POST["register"]) ) {

       if( regist($_POST) > 0 ) {
        echo "
            <script>
                alert('user successfully added !')
                document.location.href = 'regist.php'
            </script>
       "; 
       } else {
        echo mysqli_error($conn);
       }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regist Page</title>
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
    
    <h1>Registration Page</h1>

    <form action="" method="POST">

    <ul>
        <li>
            <label for="username">username : </label>
            <input type="text" name="username" id="username">
        </li>
        
        <li>
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
        </li>
        
        <li>
            <label for="password2">Confirm your password : </label>
            <input type="password" name="password2" id="password2">
        </li>
        
        <li>
            <button type="submit" name="register"> Register! </button> <br> <br>
            <a href="login.php">Login</a>
        </li>
    </ul>

    </form>


</body>
</html>