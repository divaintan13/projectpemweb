<?php
include_once 'koneksi.php';

// tangkap input login
$email = $_POST["email"];
$password = md5($_POST["password"]);

$query = "SELECT * FROM users WHERE email = '$email' && password= '$password' ";

// jalankan query
$result = $dbh->query($query)->fetch();

// validasi login
if ("$result") {
    // set session
    session_start();
    $_SESSION ['name'] = $result ['name'];
    $_SESSION ['email'] = $result ['email'];
    header("location:dashboard.php");
} else {
    echo "Email atau Password Tidak Valid";
}