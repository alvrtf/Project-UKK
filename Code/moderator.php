<?php
session_start();
if ($_SESSION['level'] != "moderator") {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moderator Dashboard - Hotel Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <div class="container">
            <a class="navbar-brand" href="#">HotelBooking - Moderator</a>
            <div class="d-flex">
                <span class="navbar-text text-dark me-3">
                    Halo, <?= $_SESSION['username']; ?> (Moderator)
                </span>
                <a href="logout.php" class="btn btn-dark btn-sm">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container mt-4">
        <h3>Dashboard Moderator</h3>
        <div class="row">
            <!-- Kelola Booking -->
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Kelola Booking</h5>
                        <p class="card-text">Verifikasi dan review pesanan kamar hotel.</p>
                        <a href="#" class="btn btn-warning">Lihat Booking</a>
                    </div>
                </div>
            </div>
            <!-- Review User -->
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Review User</h5>
                        <p class="card-text">Cek dan moderasi ulasan dari para user.</p>
                        <a href="#" class="btn btn-dark">Lihat Review</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>