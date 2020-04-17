<?php

require 'db.php';

$id_detail_transaksi     =$_POST['id_detail_transaksi'];
$id_paket                =$_POST['id_paket'];
$id_transaksi            =$_POST['id_transaksi'];
$qty                     =$_POST['qty'];
$keterangan              =$_POST['keterangan'];

$db = new Database();
$update = $db->update('detail_transaksi',[
    'id_paket'             => $id_paket,
    'id_transaksi'         => $id_transaksi,
    'qty'                  => $qty,
    'keterangan'           => $keterangan
], ['id_detail_transaksi'  => $id_detail_transaksi]);

if ( $update > 0 ) {
    header('Location:halaman_detail_transaksi.php');
} else {
    echo mysqli_error($db->connect());
}