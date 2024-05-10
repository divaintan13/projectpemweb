<?php
include_once('koneksi.php');

// tangkap data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];


// buat query insert
$query = "INSERT INTO unit_kerja (id, nama) VALUES ('$id', '$nama')";


// eksekusi query
if ($dbh->query($query)) {
    header('Location: unit_kerja.php');
} else {
    echo "Gagal menyimpan data";
}