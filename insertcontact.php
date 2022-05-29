<?php
include 'koneksi.php';

  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $message = $_POST['message'];

 $data = mysqli_query($koneksi, "insert into contact values ('','$nama', '$email', '$message')");

header( "location:index.php");

?>
