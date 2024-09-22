<?php
$nilaiSiswa = [85,92,78,64,90,55,88,79,70,96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai){
    if($nilai >= 70){
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang LULUS: " . implode(', ', $nilaiLulus);


echo "<br><br><br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan){
    if($karyawan[1] > 5){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan denganp pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);

echo "<br><br><br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswwa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<br><br><br>";

$daftarNilaiMat [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$jml = count($daftarNilaiMat);
$totalNilai = 0;

foreach ($daftarNilaiMat as $nilai){
    $totalNilai += $nilai;
}

$rataRata = $totalNilai/$jml;

foreach ($daftarNilaiMat as $nilai){
    if ($nilai[1] > $rataRata){
        $nilaidiatasRerata[] = $nilai[1];
    }
}

echo "Daftar siswa yang nilainya di atas rata-rata kelas: " . implode(", ", $nilaidiatasRerata);


?>