<?php
include_once('koneksi.php');

// tangkap data dari form
$id = $_GET['id'];

// buat query insert
$query = "DELETE FROM paramedik WHERE id='$id'";

// eksekusi query

if ($dbh->query($query)) {
    header('Location: paramedik.php');   
} else {    
    echo "Gagal menghapus data";  
}