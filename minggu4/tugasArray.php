<?php

$daftarNilaiMat = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$jml = count($daftarNilaiMat);
$totalNilai = 0;

foreach ($daftarNilaiMat as $nilai){
    $totalNilai += $nilai[1];
}

$rataRata = $totalNilai/$jml;
echo "Rata-rata kelas: " . $rataRata . "<br>";

foreach ($daftarNilaiMat as $nilai){
    if ($nilai[1] > $rataRata){
        $nilaidiatasRerata[] = $nilai[1];
    }
}

echo "Daftar siswa yang nilainya di atas rata-rata kelas: " . implode(", ", $nilaidiatasRerata);


?>