<?php

require 'db.php';

$id_transaksi      =$_POST['id_transaksi'];
$id_outlet         =$_POST['id_outlet'];
$id_member         =$_POST['id_member'];
$id_user           =$_POST['id_user'];
$kode_invoice      =$_POST['kode_invoice'];
$tgl               =$_POST['tgl'];
$batas_waktu       =$_POST['batas_waktu'];
$tgl_bayar         =$_POST['tgl_bayar'];
$biaya_tambahan    =$_POST['biaya_tambahan'];
$diskon            =$_POST['diskon'];
$pajak             =$_POST['pajak'];
$status            =$_POST['status'];
$dibayar           =$_POST['dibayar'];

$db = new Database();
$update = $db->update('transaksi',[
    'id_outlet'             => $id_outlet,
    'id_member'             => $id_member,
    'id_user'               => $id_user,
    'kode_invoice'          => $kode_invoice,
    'tgl'                   => $tgl,
    'batas_waktu'           => $batas_waktu,
    'tgl_bayar'             => $tgl_bayar,
    'biaya_tambahan'        => $biaya_tambahan,
    'diskon'                => $diskon,
    'pajak'                 => $pajak,
    'status'                => $status,
    'dibayar'               => $dibayar
], ['id_transaksi'   => $id_transaksi]);

if ( $update > 0 ) {
    header('Location:halaman_transaksi.php');
} else {
    echo mysqli_error($db->connect());
}