<?php

require 'db.php';

$id_outlet    = $_POST['id_outlet'];
$jenis        = $_POST['jenis'];
$nama_paket   = $_POST['nama_paket'];
$harga        = $_POST['harga'];


$db = new Database();

$insert= $db->insert('paket', [
    'id_paket'    => '',
    'id_outlet'   => $id_outlet,
    'jenis'       => $jenis,
    'nama_paket'  => $nama_paket,
    'harga'       => $harga
     ] );

if ( $insert > 0 ) {
    header('Location: halaman_paket.php');
} else {
    echo "Gagal menambah data..".mysqli_error($db->connect());
}