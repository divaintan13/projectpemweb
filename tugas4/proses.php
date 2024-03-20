<?php
$email = $_POST["email"];
$password = $_POST["password"];

if ($email == "divaintan107@gmail.com" && $password == "makeu123") {
    header("location:menu.php");
} else {
    echo "Email atau Password Tidak Valid";
}