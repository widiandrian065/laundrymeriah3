<?php

require 'db.php';


$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$hp   = $_POST['hp'];

$db = new Database();

$update = $db->insert('outlet', [
    'id_outlet' => '',
    'nama'   => $nama,
    'alamat' => $alamat,
    'hp'   => $hp,
], [ 'id_outlet' => $id_outlet ] );

if ( $update > 0 ) {
    header('Location: halaman_outlet.php');
} else {
    echo "Gagal menambah data..".mysqli_error($db->connect());
}