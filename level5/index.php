<?php
require 'functions.php';
$mahasiswa = query("SELECT Id, Nama, Gambar, Nim, Tugas, Uts, Uas, round((tugas+uts+uas)/3,1) AS Akhir FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Nilai Tugas</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="edit.php?id=<?= $row["Id"]; ?>">Edit</a> |
            <a href="delete.php?id=<?= $row["Id"]; ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
        <td><img src="img/<?= $row["Gambar"]; ?>" width="60"></td>
        <td><?php echo $row["Nim"]; ?></td>
        <td><?php echo $row["Nama"]; ?></td>
        <td><?php echo $row["Tugas"]; ?></td>
        <td><?php echo $row["Uts"]; ?></td>
        <td><?php echo $row["Uas"]; ?></td>
        <td><?php echo $row["Akhir"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>


</table>

</body>
</html>