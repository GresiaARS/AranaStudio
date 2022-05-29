<?php
include ("koneksi.php");
date_default_timezone_set('Asia/Jakarta');
session_start();

$username2 = $_POST['username'];
$password1 = $_POST['password'];

$username = mysqli_real_escape_string($koneksi, $username2);
$password = mysqli_real_escape_string($koneksi, $password1);

if (empty($username) && empty($password)) {
    header('location:../login.php?error=Username dan Password Kosong!');
} else if (empty($username)) {
    header('location:../login.php?error=Username Kosong!');
} else if (empty($password)) {
    header('location:../login.php?error=Password Kosong!');
}

$q = mysqli_query($koneksi, "select * from user where username='$username'");
$row = mysqli_fetch_array ($q);

$hash   = mysqli_fetch_assoc($q)['password'];
if (password_verify($password, $hash)) {
    $_SESSION['username'] = $username;
                
    header('Location: index.php');
}

if (mysqli_num_rows($q) == 1) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['role']    = $row['role'];
    
    if ($_SESSION['role'] == 'admin'){
        header('location:index2.php');
    } else if ($_SESSION['role'] == 'user'){
        header('location:index.php');
    } 
   
} else {
    header('location:../login.php?error=Anda Belum Terdaftar!');
}
?>