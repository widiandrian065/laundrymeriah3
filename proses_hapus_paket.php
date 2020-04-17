<?php

require 'db.php';

$id=$_GET['id'];

$db = new Database();
$delete = $db->delete('paket', ['id_paket' => $id]);

if ( $delete > 0 ) {
    header('Location:halaman_paket.php');
} else {
    echo mysqli_error($db->connect());
}