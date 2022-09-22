<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// pagination
// configuration
$totalDataPage = 2;
$totalData = count(query("SELECT * FROM mahasiswa"));
$totalPage = ceil($totalData / $totalDataPage);
$activePage = ( isset($_GET["page"]) ) ? $_GET["page"] : 1;
$data = ($totalDataPage * $activePage ) - $totalDataPage;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $data, $totalDataPage");

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
    <!-- Navigation -->

    <?php if( $activePage > 1 ) : ?>
        <a href="?page=<?= $activePage - 1; ?>">&laquo;</a>
    <?php endif; ?>  

    <?php for( $i = 1; $i <= $totalPage; $i++ ) : ?>
        <?php if( $i == $activePage ) : ?>
            <a style="font-weight: bold; color: red;" href="?page=<?= $i; ?>"><?= $i; ?></a>
        <?php else : ?>
            <a href="?page=<?= $i; ?>"><?= $i; ?></a>    
        <?php endif; ?>
            
    <?php endfor; ?>

    <?php if( $activePage < $totalPage ) : ?>
        <a href="?page=<?= $activePage + 1; ?>">&raquo;</a>
    <?php endif; ?>  
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