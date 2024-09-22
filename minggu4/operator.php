<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai A = " . $a . "<br>";
echo "Nilai B = " . $b . "<br>";
echo "Hasil A tambah B  = " . $hasilTambah . "<br>";
echo "Hasil A kurang B  = " . $hasilKurang . "<br>";
echo "Hasil A kali B    = " . $hasilKali . "<br>";
echo "Hasil A bagi B    = " . $hasilBagi . "<br>";
echo "Sisa  A bagi B    = " . $sisaBagi . "<br>";
echo "Hasil A pangkat B = " . $pangkat . "<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "$a == $b : " . ($hasilSama ? "true" : "false") . "<br>";
echo "$a != $b : " . ($hasilTidakSama ? "true" : "false") . "<br>";
echo "$a < $b : " . ($hasilLebihKecil ? "true" : "false") . "<br>";
echo "$a > $b : " . ($hasilLebihBesar ? "true" : "false") . "<br>";
echo "$a <= $b : " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
echo "$a >= $b : " . ($hasilLebihBesarSama ? "true" : "false") . "<br>";

echo "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b; 

echo "Hasil AND (a && b) = " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR (a || b) = " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT a (!a) = " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil NOT b (!b) = " . ($hasilNotB ? 'true' : 'false') . "<br>";


/*$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Hasil $a += $b = " . ($a += $b) . "<br>";
echo "Hasil $a -= $b = " . ($a -= $b) . "<br>";
echo "Hasil $a *= $b = " . ($a *= $b) . "<br>";
echo "Hasil $a /= $b = " . ($a /= $b) . "<br>";
echo "Hasil $a %= $b = " . ($a %= $b) . "<br>";*/

echo "<br><br>";

$hasilIdentik = $a === $b;
$hasilTakIdentik = $a !== $b;

echo "Hasil Identik : " . ($hasilIdentik ? "true" : "false") . "<br>";
echo "Hasil Tak Identik: " . ($hasilTakIdentik ? "true" : "false") . "<br>";


?>