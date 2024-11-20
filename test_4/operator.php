<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil dari {$a} + {$b} = {$hasilTambah}<br>";
echo "Hasil dari {$a} - {$b} = {$hasilKurang}<br>";
echo "Hasil dari {$a} x {$b} = {$hasilKali}<br>";
echo "Hasil dari {$a} : {$b} = {$hasilBagi}<br>";
echo "Hasil dari {$a} % {$b} = {$sisaBagi}<br>";
echo "Hasil dari {$a} ** {$b} = {$pangkat}<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;


echo "Hasil sama {$a} == {$b} = ";
var_dump($hasilSama);
echo "<br>Hasil tidak sama {$a} != {$b} = {$hasilTidakSama}<br>";
echo "Hasil lebih kecil {$a} < {$b} = ";
var_dump($hasilLebihKecil);
echo "<br>Hasil lebih besar {$a} > {$b} = {$hasilLebihBesar}<br>";
echo "Hasil lebih kecil sama {$a} <= {$b} = ";
var_dump($hasilLebihKecilSama);
echo "<br>Hasil lebih besar sama {$a} >= {$b} = {$hasilLebihBesarSama}<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And {$a} && {$b} = {$hasilAnd} <br>";
echo "Hasil Or {$a} || {$b} = {$hasilOr} <br>";
echo "Hasil NOT A {$a} = ";
var_dump($hasilNotA);
echo "<br>Hasil NOT B {$b} = ";
var_dump($hasilNotB);
echo"<br><br>";


$a += $b;
echo "After += operation, \$a = $a<br>";
$a -= $b;
echo "After -= operation, \$a = $a<br>";
$a *= $b;
echo "After *= operation, \$a = $a<br>";
$a /= $b;
echo "After /= operation, \$a = $a<br>";
$a %= $b;
echo "After %= operation, \$a = $a<br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil identik (===): " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Hasil tidak identik (!==): " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";




?>