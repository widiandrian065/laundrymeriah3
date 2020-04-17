<?php

require 'db.php';

$id=$_GET['id'];

$db = new Database();
$delete = $db->delete('user', ['id_user' => $id]);

if ( $delete > 0 ) {
    header('Location:halaman_user.php');
} else {
    echo mysqli_error($db->connect());
}