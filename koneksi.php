<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_topup";

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// buat database dan tabel
$create_db = "CREATE DATABASE IF NOT EXISTS db_topup";
mysqli_query($koneksi, $create_db);

$create_table = "CREATE TABLE IF NOT EXISTS topup (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(50) NOT NULL,
    game VARCHAR(100) NOT NULL,
    nominal INT NOT NULL,
    metode_pembayaran VARCHAR(50) NOT NULL,
    status VARCHAR(20) DEFAULT 'Pending',
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
mysqli_query($koneksi, $create_table);
?>