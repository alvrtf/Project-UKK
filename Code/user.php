<?php
session_start();
if ($_SESSION['level'] != "user") {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Hotel Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">HotelBooking</a>
            <div class="d-flex">
                <span class="navbar-text text-white me-3">
                    Halo, <?= $_SESSION['username']; ?> (User)
                </span>
                <a href="logout.php" class="btn btn-light btn-sm">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container mt-4">
        <h3>Pesan Kamar Hotel</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="https://source.unsplash.com/400x250/?hotel,room" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Deluxe Room</h5>
                        <p class="card-text">Rp 500.000 / malam</p>
                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Bisa tambahin lebih banyak kamar -->
        </div>
    </div>
</body>

</html>