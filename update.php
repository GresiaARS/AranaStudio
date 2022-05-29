<?php 
include 'koneksi.php';

    $id = $_POST['id'];
    $target_dir = "gambar/";
    $target_file = $target_dir. basename($_FILES['foto']['name']);
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];
    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

mysqli_query($koneksi,"update `work` set foto='$target_file', `judul`='$judul', `kategori`='$kategori', `deskripsi`='$deskripsi', `status`='$status' where `work`.`id`='$id'");


header("location:our-work.php");

 ?>