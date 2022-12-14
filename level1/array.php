<?php
// array
// array could contain many value

// old method
$day = array("monday", "tuesday");

// new method
$month = ["jan", "feb", "march"];

// array could containt many type of value
$arr1 = [123, "text"];

// preview of array
// var_dump() /print_r()
echo "<br>";
var_dump($day);
echo "<br>";
echo "<hr>";
echo $month[1];

// adding new element on array
echo "<br>";
echo "<hr>";
$day[] = "wednesday";
$day[] = "thursday";
var_dump($day);

// looping on array
echo "<br>";
echo "<hr>";
$numbers = [1,2,3,4,5];

// array of array
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
    <title>array</title>
    <style>
        .square{
            width: 50px;
            height: 50px;
            background-color: pink;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .square2{
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            background-color:yellow;
        }
        .square3{
            line-height: 30px;
            margin: 3px;
            background-color:purple;
            margin-bottom: 5px;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php 
    $numbers = [1,5,3,9,7];
    for($i = 0; $i < count($numbers); $i++) { ?>
    <div class="square"><?php echo $numbers[$i] ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach( $numbers as $number) { ?>  
        <div class="square2"><?php echo $number; ?> </div>
    <?php } ?>   

    <div class="clear"></div>

    <?php foreach( $numbers as $number) : ?>  
        <div class="square2" style="background-color: lightblue"><?= $number; ?> </div>
    <?php endforeach; ?>   

    <div class="clear"></div>

    <!-- Preview array of array (but still error :3) -->
    <!-- <?php // foreach ( $students as $student) : ?>
        <div class="square3">
            <ul>
                <li>Name : <? // = student[0]; ?></li>
                <li>Age : <? // = student[1]; ?></li>
                <li>Id : <? // = student[2]; ?></li>
            </ul>
        </div>
    <?php // endforeach; ?> -->

</body>
</html>

