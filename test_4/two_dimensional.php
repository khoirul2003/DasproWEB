<?php

$daftarSiswa = [
    ['Adzin', 85],
    ['Khen', 92],
    ['Bayu', 78],
    ['David', 64],
    ['Rudi', 90],
];

$totalNilai = 0;
$jumlahSiswa = count($daftarSiswa);

foreach ($daftarSiswa as $siswa) {
    $totalNilai += $siswa[1]; 
}

$averageNilai = $totalNilai / $jumlahSiswa; 

echo "Daftar siswa dengan nilai di atas rata-rata ($averageNilai): <br>";
foreach ($daftarSiswa as $siswa) {
    if ($siswa[1] > $averageNilai) {
        echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]} <br>";
    }
}
