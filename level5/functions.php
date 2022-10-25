<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function add($data) {
    global $conn;
    $nim = htmlspecialchars($data["Nim"]);
    $nama = htmlspecialchars($data["Nama"]);
    $gambar = htmlspecialchars($data["Gambar"]);
    $tugas = htmlspecialchars($data["Tugas"]);
    $uts = htmlspecialchars($data["Uts"]);
    $uas = htmlspecialchars($data["Uas"]);

    $query = "INSERT INTO mahasiswa 
                VALUES
               ('', '$nama', '$nim', '$gambar', '$tugas', '$uts', '$uas')"; 
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deletes($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE Id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;

    $id = $data["id"];
    $nim = htmlspecialchars($data["Nim"]);
    $nama = htmlspecialchars($data["Nama"]);
    $gambar = htmlspecialchars($data["Gambar"]);
    $tugas = htmlspecialchars($data["Tugas"]);
    $uts = htmlspecialchars($data["Uts"]);
    $uas = htmlspecialchars($data["Uas"]);

    $query = "UPDATE mahasiswa SET
               Nama = '$nama',
               Nim = '$nim',
               Gambar = '$gambar',
               Tugas = '$tugas',
               Uts = '$uts',
               Uas = '$uas'
               WHERE Id = $id"; 

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>