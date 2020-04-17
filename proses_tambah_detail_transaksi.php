<?php 

include 'db.php';

$id_transaksi    =$_POST['id_transaksi'];
$id_paket        =$_POST['id_paket'];
$qty             =$_POST['qty'];
$keterangan      =$_POST['keterangan'];


$db = new Database();
$insert = $db->insert('detail_transaksi', [
    'id_detail_transaksi'   => '',
    'id_transaksi'          =>$id_transaksi,
    'id_paket'              =>$id_paket,
    'qty'                   =>$qty,
    'keterangan'            =>$keterangan
]);

if ( $insert > 0) {
    header('Location:halaman_detail_transaksi.php');
} else {
    echo "Gagal menambahkan data".mysqli_error($db->connect());
}


