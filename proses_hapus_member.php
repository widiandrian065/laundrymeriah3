<?php

require 'db.php';

$id=$_GET['id'];

$db = new Database();
$delete = $db->delete('member', ['id_member' => $id]);

if ( $delete > 0 ) {
    header('Location:halaman_member.php');
} else {
    echo mysqli_error($db->connect());
}