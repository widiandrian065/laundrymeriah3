<?php

require 'db.php';

$id=$_GET['id'];

$db = new Database();
$delete = $db->delete('transaksi', ['id_transaksi' => $id]);

if ( $delete > 0 ) {
    header('Location:halaman_transaksi.php');
} else {
    echo mysqli_error($db->connect());
}