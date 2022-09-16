<?php
// it was empty b4
// but, with this way it could be filled
// $_GET["name"] = "Quenie Salbiyah";
// $_GET["gender"] = "Girl";
//var_dump($_GET);

$animals = [
    ["name" => "cat", "type" => "carnivore", "leg" => 4, "image" => "about-php/level2/img/cat.jpg.png"],
    ["name" => "cow", "type" => "herbivore", "leg" => 4, "image" => "about-php/level2/img/cow.jpg.png"],
    ["name" => "monkey", "type" => "omnivore", "leg" => 2, "image" => "about-php/level2/img/monkey.jpg.png"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    <h1>Animal</h1>
    <ul>
        <?php foreach( $animals as $animal) : ?>
            <li> 
                <a href="get.php?name=<?= $animal["name"]; ?>&type=<?= $animal["type"];?>&leg=<?= $animal["leg"];?>"> 
            <?= $animal["name"]; ?></a>
            </li>
        <?php endforeach ?> 
    </ul>
</body>
</html>