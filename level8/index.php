<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// if find button was pressed
if ( isset($_POST["find"]) ){
    $mahasiswa = find($_POST["keyword"]);
}

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
    
    <a href="logout.php">Logout</a>

<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

    <form action="" method="POST">

        <input type="text" name="keyword" size="40" autofocus placeholder="Enter keyword.." autocomplete="off">
        <button type="submit" name="find">Find!</button>

    </form>
<br>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nim</th>
        <th>Nama</th>
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
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>


</table>

</body>
</html>