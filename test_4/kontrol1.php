<?php

$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($grades);
array_shift($grades); 
array_shift($grades); 
array_pop($grades); 
array_pop($grades); 
$totalGrades = array_sum($grades);

echo "Total grades after removing the highest and lowest grades: $totalGrades";

echo "<br><br>";

$originalPrice = 120000;
$discountPercentage = 20;

if ($originalPrice > 100000) {
    $discountAmount = ($originalPrice * $discountPercentage) / 100;
    $finalPrice = $originalPrice - $discountAmount;
} else {
    $finalPrice = $originalPrice;
}

echo "Original Price: Rp " . number_format($originalPrice, 2, ',', '.') . "<br>";
echo "Final Price after discount: Rp " . number_format($finalPrice, 2, ',', '.') . "<br>";
echo "<br><br><br>";



$points = 600;

echo "Player's total score is: $points<br>";

if ($points > 500) {
    echo "Do players get additional rewards? (YES)";
} else {
    echo "Do players get additional rewards? (NO)";
}
?>


