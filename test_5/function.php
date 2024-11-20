<?php
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Nindy<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }
// perkenalan();
// echo"<br><br>";

// function perkenalan($nama, $salam)
// {
//     echo $salam . ", ";
//     echo "Perkenalkan, nama saya " . $nama . "<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Nindy", "Hallo");

// echo "<hr>";

// $saya = "Nindy";
// $ucapanSalam = "Selamat Pagi";

// perkenalan($saya, $ucapanSalam);

// function perkenalan($nama, $salam = "Assalamualaikum")
// {
//     echo $salam . ", ";
//     echo "Perkenalkan, nama saya " . $nama . "<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Nindy", "Hallo");

// echo "<hr>";

// $saya = "Nindy";
// $ucapanSalam = "Selamat Pagi";

// perkenalan($saya);

// echo'<br><br><br>';

// function hitungUmur($thn_lahir, $thn_sekarang)
// {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// echo "Umur saya adalah " . hitungUmur(2003, 2023) . " tahun";

// echo"<br><br>";

function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam = "Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";

    //memanggil fungsi lain
    echo "Saya berusia " . hitungUmur(2003, 2023) . " tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
//memanggil dungsi perekenalan
perkenalan("Nindy");