<?php
$serverName = "KHOIRUL"; // atau IP server
$database = "prakwebdb";
$username = ""; // username jika ada
$password = ""; // password jika ada

try {
    // Membuat koneksi PDO untuk SQL Server
    $koneksi = new PDO("sqlsrv:Server=$serverName;Database=$database", $username, $password);
    // Set mode error untuk menangani error
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
