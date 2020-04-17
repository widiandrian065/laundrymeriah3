<?php

require 'db.php';

$id=$_GET['id'];

$db = new Database();
$delete = $db->delete('detail_transaksi', ['id_detail_transaksi' => $id]);

if ( $delete > 0 ) {
    header('Location:halaman_detail_transaksi.php');
} else {
    echo mysqli_error($db->connect());
}