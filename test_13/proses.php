<?php
include('koneksi.php');

$aksi = $_GET['aksi'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

try {
    if ($aksi == 'tambah') {
        $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) 
                  VALUES (?, ?, ?, ?)";

        // Menyiapkan query
        $stmt = $koneksi->prepare($query);
        $params = array($nama, $jenis_kelamin, $alamat, $no_telp);

        // Menjalankan query
        $stmt->execute($params);

        // Cek jika data berhasil dimasukkan
        if ($stmt) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal menambahkan data.";
        }
    } 

    else if ($aksi == 'ubah') {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            $query = "UPDATE anggota 
                      SET nama = ?, jenis_kelamin = ?, alamat = ?, no_telp = ? 
                      WHERE id = ?";

            // Menyiapkan query
            $stmt = $koneksi->prepare($query);
            $params = array($nama, $jenis_kelamin, $alamat, $no_telp, $id);

            // Menjalankan query
            $stmt->execute($params);

            // Cek jika data berhasil diperbarui
            if ($stmt) {
                header("Location: index.php");
                exit();
            } else {
                echo "Gagal mengupdate data.";
            }
        } else {
            echo "ID tidak valid.";
        }
    } 

    else if ($aksi == 'hapus') {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $query = "DELETE FROM anggota WHERE id = ?";

            // Menyiapkan query
            $stmt = $koneksi->prepare($query);
            $params = array($id);

            // Menjalankan query
            $stmt->execute($params);

            // Cek jika data berhasil dihapus
            if ($stmt) {
                header("Location: index.php");
                exit();
            } else {
                echo "Gagal menghapus data.";
            }
        } else {
            echo "ID tidak valid.";
        }
    }
} catch (PDOException $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}

// Tutup koneksi (secara otomatis akan tertutup setelah selesai)
?>
