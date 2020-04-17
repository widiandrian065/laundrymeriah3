<?php

require 'db.php';

$id_user       =$_POST['id_user'];
$id_outlet     =$_POST['id_outlet'];
$nama          =$_POST['nama'];
$username      =$_POST['username'];
$password      =$_POST['password'];
$role          =$_POST['role'];

$db = new Database();
$update = $db->update('user',[

    'id_outlet'     => $id_outlet,
    'nama'          => $nama,
    'username'      => $username,
    'password'      => $password,
    'role'          => $role
],['id_user'        => $id_user]);

if ( $update > 0 ) {
    header('Location:halaman_user.php');
} else {
    echo mysqli_error($db->connect());
}