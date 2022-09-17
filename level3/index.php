<?php
// connect to database (host name, username of sql [root], password of sql, database name)
mysqli_connect("localhost", "root", "", "phpdasar");

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

    <tr>
        <td>1</td>
        <td>
            <a href="">Edit</a> |
            <a href="">Delete</a>
        </td>
        <td><img src="img/cat.jpg.png" width="100"></td>
        <td>2107411030</td>
        <td>Quenie Salbiyah</td>
    </tr>


</table>

</body>
</html>