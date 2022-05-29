<?php
include 'koneksi.php';

  $target_dir = "gambar/";
  $target_file = $target_dir. basename($_FILES['foto']['name']);
  $judul = $_POST['judul'];
  $kategori = $_POST['kategori'];
  $deskripsi = $_POST['deskripsi'];
  $status = $_POST['status'];

  move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

$data = mysqli_query($koneksi, "insert into work values ('','$target_file', '$judul', '$kategori', '$deskripsi', '$status' )");

header( "location:u-our-work.php");

?>