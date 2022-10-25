<?php
require 'functions.php';

// get data from the url
$id = $_GET["id"];

// get data query using id as a parameter
$mhs = query("SELECT Id, Nama, Gambar, Nim, Tugas, Uts, Uas, round((tugas+uts+uas)/3,1) AS Akhir FROM mahasiswa WHERE id = $id")[0]; //because the id is integer we dont need any (" ").
//var_dump($mhs);

// checking is submit button has been press yet.
if ( isset($_POST["submit"]) ){
    
    if( edit($_POST) > 0 ){
       echo "
            <script>
                alert('data berhasil diubah!')
                document.location.href = 'index.php'
            </script>
       "; 
    } else {
        echo "
            <script>
                alert('data gagal diubah!')
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
    <title>Edit Data</title>
    <style>
        ul li{
            list-style-type: none;
            margin-bottom: 4px;
        }
    </style>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <input type="hidden" name="id" value="<?= $mhs["Id"]; ?>">
            </li>
            <li>
                <label for="Nim">Nim : </label>
                <input type="text" id="Nim" name="Nim" required value="<?= $mhs["Nim"]; ?>">
            </li>
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" id="Nama" name="Nama" required value="<?= $mhs["Nama"]; ?>">
            </li>
            <li>
                <label for="Gambar">Gambar : </label>
                <input type="text" id="Gambar" name="Gambar" required value="<?= $mhs["Gambar"]; ?>">
            </li>
            <li>
                <label for="Tugas">Nilai Tugas : </label>
                <input type="text" id="Tugas" name="Tugas" required value="<?= $mhs["Tugas"]; ?>">
            </li>
            <li>
                <label for="Uts">Nilai Uts : </label>
                <input type="text" id="Uts" name="Uts" required value="<?= $mhs["Uts"]; ?>">
            </li>
            <li>
                <label for="Uas">Nilai Uas : </label>
                <input type="text" id="Uas" name="Uas" required value="<?= $mhs["Uas"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Update Data!</button>
            </li>
        </ul>
    </form>

</body>
</html>