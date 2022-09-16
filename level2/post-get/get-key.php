<?php
    // $animals = [
    //     ["name" => "cat", "type" => "carnivore", "leg" => 4, "image" => "about-php/level2/img/cat.jpg.png"],
    //     ["name" => "cow", "type" => "herbivore", "leg" => 4, "image" => "about-php/level2/img/cow.jpg.png"],
    //     ["name" => "monkey", "type" => "omnivore", "leg" => 2, "image" => "about-php/level2/img/monkey.jpg.png"]
    // ];

    // checking data from the $_GET key :
    if( !isset($_GET["name"]) || !isset($_GET["type"]) || !isset($_GET["leg"]) ){
        // redirect (to push user to enter from the link b4 (so there is key))
        header("location: get-post.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Detail</title>
</head>
<body>
    <ul>
        <li>Name : <?= $_GET["name"]; ?></li>
        <li>Type : <?= $_GET["type"]; ?></li>
        <li>Leg : <?= $_GET["leg"]; ?></li>
    </ul>
</body>
</html>