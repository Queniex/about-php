<?php
    //checking submit button (have been pressed or not)
    if( isset($_POST["submit"]) ) {
    // checking username & password (must be synchron)
        if( $_POST["username"] == "admin" && $_POST["password"] == "123" ){
    // if u&p is correct, then redirect to admin page
            header("Location: admin.php");
            exit;
        } else {
    // if u&p is incorrect, then give alert
           $error = true;     
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        p{
            color: red;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1>Login</h1>

    <?php if(isset($error)) : ?>
        <p>Wrong password/username!</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            
            <li>
                <!-- to connect between the label & input, use for & id -->
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>

            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>

            <li>
                <button type="submit" name="submit">submit</button>
            </li>

        </form>
    </ul>

</body>
</html>