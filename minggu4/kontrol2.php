<?php

echo "Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000.
Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. Bantu
pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon <br><br>";

$hargaProduk = 120000;

if($hargaProduk > 100000){
    $hargaBayar = $hargaProduk - ($hargaProduk*0.2);
    echo "Total yang harus dibayar = " . $hargaBayar . " rupiah <br>";
    echo "[Diskon = " . ($hargaProduk*0.2) . "] <br>";
} else {
    echo "Total yang harus dibayar " . $hargaBayar . " rupiah<br>";
};

?>