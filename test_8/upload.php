<?php
// if (isset($_POST["submit"])){
//   $targetdir = "uploads/"; // Direktori tujuan untuk menyimpan file
//   $targetfile = $targetdir.basename($_FILES["myfile"]["name"]);

//   if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)){
//     echo "File berhasil diunggah.";
//   }else {
//     echo "Gagal menggunggah file";
//   }

// }

// if (isset($_POST["submit"])) {
//     $targetDirectory = "uploads/"; // direktori tujuan untuk menyimpan file
//     $targetFile = $targetDirectory . basename($_FILES["myfile"]["name"]);
//     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//     $allowedExtensions = array("jpg", "jpeg", "png", "gif");
//     $maxFileSize = 5 * 1024 * 1024;

//     if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxFileSize) {
//         if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
//             echo "File berhasil diunggah.";
//         } else {
//             echo "Gagal mengunggah file.";
//         }
//     } else {
//         echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
//     }
// }



//  if (isset($_POST["submit"])) {
//     $targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan dokumen
//     $targetFile = $targetDirectory . basename($_FILES["myfile"]["name"]);
//     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//     $allowedExtensions = array("jpg", "jpeg", "png", "gif");

//     $maxFileSize = 5 * 1024 * 1024; 

//     if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxFileSize) {
//         if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
//             echo "File berhasil diunggah.";
//             echo '<br><br><img src=" ' . $targetFile . '"width="200" "alt="thumbnail">';
//         } else {
//             echo "Gagal mengunggah dokumen.";
//         }
//     } else {
//         echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
//     }
// }

// if (isset($_POST["submit"])) {
//     $targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan dokumen
//     $targetFile = $targetDirectory . basename($_FILES["myfile"]["name"]);
//     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//     $allowedExtensions = array("txt", "pdf", "doc", "docx");

//     $maxSize = 3 * 1024 * 1024; // 5 MB

//     if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxSize) {
//         if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
//             echo "File berhasil diunggah.";
//         } else {
//             echo "Gagal mengunggah dokumen.";
//         }
//     } else {
//         echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
//     }
// }

if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan dokumen
    $targetFile = $targetDirectory . basename($_FILES["file"]["name"]); // Perbaikan di sini, ubah myfile ke file
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    $maxSize = 3 * 1024 * 1024; // 3 MB

    if (in_array($fileType, $allowedExtensions) && $_FILES["file"]["size"] <= $maxSize) { // Perbaikan di sini, myfile ke file
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) { // Perbaikan di sini, myfile ke file
            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah dokumen.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}