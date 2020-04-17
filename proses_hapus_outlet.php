<?php

require 'db.php';

$id=$_GET['id'];

$db = new Database();
$delete = $db->delete('outlet', ['id_outlet' => $id]);

if ( $delete > 0 ) {
    header('Location:halaman_outlet.php');
} else {
    echo mysqli_error($db->connect());
}