<?php
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (empty($nama) || empty($email) || empty($_POST['password'])) {
        echo "Error: Semua field harus diisi! <a href='signup.php'>Kembali</a>";
        exit;
    }

    $query = "INSERT INTO users (nama, email, password) VALUES (?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("sss", $nama, $email, $password);

    if ($stmt->execute()) {
        echo "<h1>Registrasi Berhasil!</h1>" ;
        echo "<p>Selamat, " . htmlspecialchars($nama) . "! Akun Anda telah dibuat.</p>";
        echo '<a href="login.php">Login Sekarang</a>';
    } else {
        if ($koneksi->errno == 1062) {
            echo "Error: Email " . htmlspecialchars($email) . " sudah terdaftar. <a href='signup.php'>Coba lagi</a>";
        } else {
            echo "Error saat registrasi: " . htmlspecialchars($stmt->error) . " <a href='signup.php'>Kembali</a>";
        }
    }
    $stmt->close();
} else {
    header('Location: signup.php');
    exit();
}

$koneksi->close();
?>