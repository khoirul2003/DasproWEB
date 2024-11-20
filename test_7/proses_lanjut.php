<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $seletedBuah = $_POST['buah'];

  if (isset($_POST['warna'])){
    $seletedWarna = $_POST['warna'];
  }else{
    $seletedWarna = [];
  }

  $seletedJenisKelamin = $_POST['jenis_kelamin'];

  echo "Anda memilih buah : " . $seletedBuah ."</br>";

  if(!empty($seletedWarna)){
    echo "Warna favorit Anda : " . implode(", ", $seletedWarna) . "<br>";
  }else {
    echo "Anda tidak memilih warna favorit.<br>";
  }

  echo "Jenis kelamin Anda: ". $seletedJenisKelamin;
}