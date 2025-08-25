<?php
session_start();
if ($_SESSION['level'] != "admin") {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Hotel Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">HotelBooking - Admin</a>
            <div class="d-flex">
                <span class="navbar-text text-white me-3">
                    Halo, <?= $_SESSION['username']; ?> (Admin)
                </span>
                <a href="logout.php" class="btn btn-light btn-sm">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container mt-4">
        <h3>Dashboard Admin</h3>
        <div class="row">
            <!-- Kelola User -->
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kelola User</h5>
                        <p class="card-text">Tambah, hapus, atau ubah role user (Admin/Moderator/User).</p>
                        <a href="#" class="btn btn-primary">Lihat User</a>
                    </div>
                </div>
            </div>
            <!-- Kelola Kamar -->
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kelola Kamar</h5>
                        <p class="card-text">Tambah, edit, atau hapus data kamar hotel.</p>
                        <a href="#" class="btn btn-success">Lihat Kamar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>