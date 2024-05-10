<?php
include_once('koneksi.php');

// tangkap data dari form
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$tensi = $_POST['tensi'];
$keterangan = $_POST['keterangan'];
$pasien_id = $_POST['pasien_id'];
$dokter_id = $_POST['dokter_id'];

// buat query insert
$query = "UPDATE periksa SET tanggal='$tanggal', berat='$berat', tinggi='$tinggi', tensi='$tensi', keterangan='$keterangan', pasien_id='$pasien_id', dokter_id='$dokter_id' WHERE id='$id'";

// eksekusi query

if ($dbh->query($query)) {
    header('Location: periksa.php');   
} else {    
    echo "Gagal menyimpan data";  
}