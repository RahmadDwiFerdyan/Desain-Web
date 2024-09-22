<?php
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$n = count($nilai);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - 1 - $i; $j++) {
        if ($nilai[$j] > $nilai[$j + 1]) {
            $temp = $nilai[$j];
            $nilai[$j] = $nilai[$j + 1];
            $nilai[$j + 1] = $temp;
        }
    }
}

$totalNilai = 0;
$count = 0;

for ($i = 2; $i < $n - 2; $i++) {
    $totalNilai += $nilai[$i];
    $count++;
}

$rataRata = $totalNilai / $count;

echo "Total nilai yang digunakan untuk menghitung rata-rata: " . $totalNilai . "<br><br>";
echo "Rata-rata nilai setelah mengabaikan nilai dua tertinggi dan dua terendah: " . $rataRata . "<br>";
?>
