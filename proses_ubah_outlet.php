<?php

require 'db.php';

$id_outlet  =$_POST['id_outlet'];
$nama       =$_POST['nama'];
$alamat     =$_POST['alamat'];
$hp       =$_POST['hp'];

$db = new Database();
$update = $db->update('outlet',[
    'nama'      => $nama,
    'alamat'    => $alamat,
    'hp'       => $hp
], ['id_outlet' => $id_outlet]);

if ( $update > 0 ) {
    header('Location:halaman_outlet.php');
} else {
    echo mysqli_error($db->connect());
}