<?php
// connect to database (host name, username of sql [root], password of sql, database name)
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// get data from the table (using query) (string connection, sql query)
$result = mysqli_query($db, "SELECT * FROM mahasiswa" );
//var_dump($result); --> the easiest way to know if it work or not

// get data from the result object -> fetch
// there are 4 way : 
// mysqli_fetch_row($result) -> return array numeric
// mysqli_fetch_assoc($result) -> return array associative
// mysqli_fetch_array($result) -> return both of the array type -> wasting memory
// mysqli_fetch_object($result) -> return object

// while ( $mhs = mysqli_fetch_assoc($result) ){
//     var_dump($mhs["Nama"]);
// }

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

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nim</th>
        <th>Nama</th>
    </tr>

    <?php $i = 1; ?>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">Edit</a> |
            <a href="">Delete</a>
        </td>
        <td><img src="img/<?= $row["Gambar"]; ?>" width="60"></td>
        <td><?= $row["Nim"]; ?></td>
        <td><?= $row["Nama"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile ?>


</table>

</body>
</html>