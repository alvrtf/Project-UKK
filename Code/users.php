<?php
session_start();
include "koneksi.php";

if ($_SESSION['level'] != "admin") {
    header("Location: login.php");
    exit;
}

// Update role user
if (isset($_POST['update_role'])) {
    $user_id = $_POST['user_id'];
    $level = $_POST['level'];
    $sql = "UPDATE users SET level='$level' WHERE id='$user_id'";
    mysqli_query($conn, $sql);
    header("Location: users.php");
    exit;
}

// Ambil semua user
$result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola User - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h3>Kelola User</h3>
        <table class="table table-bordered table-hover mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td>
                            <form method="POST" class="d-flex">
                                <input type="hidden" name="user_id" value="<?= $row['id']; ?>">
                                <select name="level" class="form-select me-2">
                                    <option value="admin" <?= $row['level'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
                                    <option value="kasir" <?= $row['level'] == 'kasir' ? 'selected' : ''; ?>>Kasir</option>
                                    <option value="user" <?= $row['level'] == 'user' ? 'selected' : ''; ?>>User</option>
                                </select>
                                <button type="submit" name="update_role" class="btn btn-primary btn-sm">Update</button>
                            </form>
                        </td>
                        <td>
                            <a href="hapus_user.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm"
                                onclick="return confirm('Hapus user ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
