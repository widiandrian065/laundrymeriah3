<?php

require 'db.php';

$id_paket      =$_POST['id_paket'];
$id_outlet     =$_POST['id_outlet'];
$jenis         =$_POST['jenis'];
$nama_paket    =$_POST['nama_paket'];
$harga         =$_POST['harga'];

$db = new Database();
$update = $db->update('paket',[
    'id_outlet'     => $id_outlet,
    'jenis'         => $jenis,
    'nama_paket'    => $nama_paket,
    'harga'         => $harga
], ['id_paket'     => $id_paket]);

if ( $update > 0 ) {
    header('Location:halaman_paket.php');
} else {
    echo mysqli_error($db->connect());
}