<?php
$serverName = "KHOIRUL";
$database = "prakwebdb";
$username = ""; 
$password = "";

try {
    $koneksi = new PDO("sqlsrv:Server=$serverName;Database=$database", $username, $password);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
