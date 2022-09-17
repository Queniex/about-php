<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function add($data){
    global $conn;
    $nim = htmlspecialchars($data["Nim"]);
    $nama = htmlspecialchars($data["Nama"]);
    $gambar = htmlspecialchars($data["Gambar"]);

    $query = "INSERT INTO mahasiswa 
                VALUES
               ('', '$nama', '$nim', '$gambar')"; 
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>