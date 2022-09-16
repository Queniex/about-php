<?php
// variable global 
$x = 10;

function showX(){
    // Access variable global
    global $x;
    // variable local
    // $x = 20;
    echo $x;
}

showX();
echo "<br>";
echo $x;

// variable Superglobals -- they are kind of associative array
// $_GET; { }
// $_POST; { }
// $_REQUEST;
// $_SESSION;
// $_COOKIE;
// $_SERVER; { INFORMATION ABOUT OUR SERVER }
// $_ENV;

?>