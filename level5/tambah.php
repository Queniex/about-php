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

    if( add($_POST) > 0 ){
       echo "
            <script>
                alert('data berhasil ditambahkan!')
                document.location.href = 'index.php'
            </script>
       "; 
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!')
                document.location.href = 'index.php'
            </script>
       "; 
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
                <input type="text" id="Nim" name="Nim" required>
            </li>
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" id="Nama" name="Nama" required>
            </li>
            <li>
                <label for="Gambar">Gambar : </label>
                <input type="text" id="Gambar" name="Gambar" required>
            </li>
            <li>
                <label for="Tugas">Nilai Tugas : </label>
                <input type="text" id="Tugas" name="Tugas" required>
            </li>
            <li>
                <label for="Uts">Nilai Uts : </label>
                <input type="text" id="Uts" name="Uts" required>
            </li>
            <li>
                <label for="Uas">Nilai Uas : </label>
                <input type="text" id="Uas" name="Uas" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>

</body>
</html>