<?php

require 'db.php';

$id_member      =$_POST['id_member'];
$nama           =$_POST['nama'];
$alamat         =$_POST['Alamat'];
$jenis_kelamin  =$_POST['Jenis_kelamin'];
$telephone      =$_POST['Telephone'];

$db = new Database();
$update = $db->update('member',[
    'nama'          => $nama,
    'Alamat'        => $alamat,
    'Jenis_kelamin' => $jenis_kelamin,
    'Telephone'     => $telephone
], ['id_member'     => $id_member]);

if ( $update > 0 ) {
    header('Location:halaman_member.php');
} else {
    echo mysqli_error($db->connect());
}