<?php
session_start(); // WAJIB untuk menyimpan login state
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = $_POST['password'];

    // Cek apakah email ada di database
    $query = "SELECT id, nama, email, password FROM users WHERE email = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Login berhasil
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nama'] = $user['nama'];
            $_SESSION['user_email'] = $user['email'];
            
            // Arahkan ke halaman home atau admin
            header("Location: home.php");
            exit();
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Email tidak ditemukan!";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Gagal</title>
</head>
<body style ="font-family: Arial, sans-serif; text-align: center; margin-top: 50px;">
    <h2>Login Gagal</h2>
    <p><?= isset($error) ? htmlspecialchars($error) : "Terjadi kesalahan." ?></p>
    <a href="login.php">Kembali ke Login</a>
</body>
</html>