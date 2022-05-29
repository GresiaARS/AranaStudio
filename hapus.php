<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query ($koneksi, "delete from work where id='$id'");

header( "location:our-work.php");

?>