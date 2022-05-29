<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query ($koneksi, "delete from contact where id='$id'");

header( "location:a-contactus.php");

?>