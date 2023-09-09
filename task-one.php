<?php
function cariBilanganTerbesar($bilangan1, $bilangan2) {
    if ($bilangan1 > $bilangan2) {
        return $bilangan1;
    } else {
        return $bilangan2;
    }
}

$bilangan1 = 50000;
$bilangan2 = 30000;
$terbesar = cariBilanganTerbesar($bilangan1, $bilangan2);

echo "Bilangan terbesar antara $bilangan1 dan $bilangan2 adalah: $terbesar";
?>
