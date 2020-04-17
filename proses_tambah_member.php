<?php

require 'db.php';


$nama   = $_POST['nama'];
$alamat = $_POST['Alamat'];
$jenis_kelamin  = $_POST['Jenis_kelamin'];
$telephone = $_POST['Telephone'];


$db = new Database();

$update = $db->insert('member', [
    'id_member' => '',
    'nama'   => $nama,
    'Alamat' => $alamat,
    'Jenis_kelamin' => $jenis_kelamin,
    'Telephone'   => $telephone
], [ 'id_member' => $id_member ] );

if ( $update > 0 ) {
    header('Location: halaman_member.php');
} else {
    echo "Gagal menambah data..".mysqli_error($db->connect());
}