<?php
$students = [
    ["Quenie Salbiyah", 18 , 2107411030],
    ["Salbiyah Quenie", 18 , 2107411031]
];
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
    <ul>
        <li>Name : <?php echo $student[0]; ?></li>
        <li>Age : <?php echo $student[1]; ?></li>
        <li>Id : <?php echo $student[2]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>