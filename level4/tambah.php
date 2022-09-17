<?php
require 'functions.php';
// connect to DBMS
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");

// checking is submit button has been press yet.
if ( isset($_POST["submit"]) ){
    
    // taking data from every element of the form
    // $nim = $_POST["Nim"];
    // $nama = $_POST["Nama"];
    // $gambar = $_POST["Gambar"];

    //insert query
    // $query = "INSERT INTO mahasiswa 
    //             VALUES
    //            ('', '$nama', '$nim', '$gambar')"; 
    // mysqli_query($conn, $query);

    // check if data successfully insert
    // if( mysqli_affected_rows($conn) > 0 ){
    //     echo "Berhasil";
    // } else{
    //     echo "gagal";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }

    if( tambah($_POST) > 0 ){
       echo "data berhasil ditambahkan!"; 
    } else {
        echo "data gagal ditambahkan!";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <style>
        ul li{
            list-style-type: none;
            margin-bottom: 4px;
        }
    </style>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="Nim">Nim : </label>
                <input type="text" id="Nim" name="Nim">
            </li>
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" id="Nama" name="Nama">
            </li>
            <li>
                <label for="Gambar">Gambar : </label>
                <input type="text" id="Gambar" name="Gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>

</body>
</html>