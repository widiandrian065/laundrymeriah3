<?php

session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM register WHERE username = '$username' ");

if(mysqli_num_rows($query) ==1) {
    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);

        if (password_verify ($password, $result['password'] ) ) {
        $_SESSION= [
            'username' => $result['username'],
            'password' => $result['password']
        ];
        header('location: halaman_admin.php');

        }else {
            echo "password tidak cocok";
        }
} else {
    echo "akunnya tidak terdaftar";
}
