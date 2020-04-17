<?php

require 'db.php';

$id_outlet     =$_POST['id_outlet'];
$nama          =$_POST['nama'];
$username      =$_POST['username'];
$password      =$_POST['password'];
$role          =$_POST['role'];

$db = new Database();
$insert = $db->insert('user',[
    'id_user'       => '',
    'id_outlet'     => $id_outlet,
    'nama'          => $nama,
    'username'      => $username,
    'password'      => $password,
    'role'          => $role
    ] );

if ( $insert> 0 ) {
    header('Location: halaman_user.php');
} else {
    echo "Gagal menambah data..".mysqli_error($db->connect());
}


