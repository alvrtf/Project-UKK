<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']); // enkripsi sederhana

// Cek apakah username sudah ada
$cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
if (mysqli_num_rows($cek) > 0) {
    echo "<script>alert('Username sudah digunakan!'); window.location='register.php';</script>";
} else {
    $query = "INSERT INTO users (username, password, level) VALUES ('$username', '$password', 'user')";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
