<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $query);
$data   = mysqli_fetch_assoc($result);

if ($data) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['level']    = $data['level'];

    if ($data['level'] == "admin") {
        header("Location: admin.php");
    } elseif ($data['level'] == "moderator") {
        header("Location: moderator.php");
    } elseif ($data['level'] == "user") {
        header("Location: user.php");
    }
} else {
    echo "<script>alert('Username atau Password salah!'); window.location='login.php';</script>";
}
