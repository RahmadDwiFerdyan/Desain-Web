<?php

$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

echo "<h1>Hasil Input:</h1>";
echo "<p>" . $input . "</p>";

?>
