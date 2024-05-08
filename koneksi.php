<?php
// Informasi database
$servername = "localhost"; // Ganti dengan alamat server database Anda jika berbeda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "kesanpesan"; // Ganti dengan nama database yang Anda buat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

echo "Koneksi berhasil";

// Sekarang Anda dapat melakukan query dan operasi database lainnya di sini

// Jangan lupa untuk menutup koneksi setelah selesai
$conn->close();
?>

