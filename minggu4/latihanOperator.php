<?php
$jmlKursi = 45;
$jmlKursiDitempati = 28;

echo "Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 28 kursi telah
ditempati oleh pelanggan. <br>Berapa persen kursi yang masih kosong di restoran tersebut? <br><br>";

echo "Jumlah kursi awal = " . $jmlKursi . "<br>";
echo "Jumlah kursi yang ditempati = " . $jmlKursiDitempati . "<br>";
echo "Sisa kursi kosong = " . ($jmlKursi - $jmlKursiDitempati) . "<br>";
echo "Sisa kursi kosong (dalam persen) = " . (($jmlKursi - $jmlKursiDitempati) / $jmlKursi * 100) . "%";
?>