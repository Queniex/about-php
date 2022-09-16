<?php
$students = [
    ["Quenie Salbiyah", 18 , 2107411030],
    ["Salbiyah Quenie", 18 , 2107411031]
];

// Array Associative
// Same as the numeric array, but using a string as the key (infront of)
$animals = [
    [ "Name" => "cat", "Food" => "carnivore", "leg" => 4 ],
    [ "Name" => "dog", "Food" => "carnivore", "leg" => 4 ]
];

// How to preview of array associative
// echo $animals[0]["Name"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asso-Array</title>
</head>
<body>
    <h1> List of People </h1>

    <?php foreach( $students as $student) : ?>
        
    <hr>    
    <ul>
        <li>Name : <?php echo $student[0]; ?></li>
        <h3>Fav Animal</h1>
        <?php foreach ( $animals as $animal) : ?>
          <ul>
            <li>Type : <?php echo $animal["Name"]; ?></li>
            <li>Kind : <?php echo $animal["Food"]; ?></li>
          </ul>
        <?php endforeach; ?>
        <li>Age : <?php echo $student[1]; ?></li>
        <li>Id : <?php echo $student[2]; ?></li>
    </ul>
    <hr>
    <?php endforeach; ?>
</body>
</html>