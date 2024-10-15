<?php
//soal nomer 09
$pattern = '/[a-z]/';
$text = 'This is a Sample Text';
if(preg_match($pattern, $text)){
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil";
}

echo "<br><br>";

//soal nomer 10
$pattern = '/[0-9]+/'; 
$text = 'There are 123 apples and 199 bananas.';
if (preg_match($pattern, $text, $matches)) {
echo "Cocokkan: " . $matches[0];
} else {
echo "Tidak ada yang cocok!";
}

echo "<br><br>";
//soal nomer 11
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;

echo "<br><br>";

//soal nomer 12

$pattern = '/[o]{1,3}/';
$text = 'god is good.';
if(preg_match($pattern, $text, $matches)){
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>