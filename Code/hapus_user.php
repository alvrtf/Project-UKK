<?php
session_start();
include "koneksi.php";

if ($_SESSION['level'] != "admin") {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM users WHERE id='$id'");
header("Location: users.php");
