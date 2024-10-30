<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

$laundryCount = isset($_SESSION['laundry_count']) ? $_SESSION['laundry_count'] : 1; 

$total = '';
if (isset($_POST['check'])) {
    $berat = (int) $_POST['berat'];
    $jenis = $_POST['jenis'];
    $kecepatan = $_POST['kecepatan'];
    $member = $_POST['member'];
    $kupon = FALSE;

    $harga_perkilo = 0;
    switch ($jenis) {
        case 'Cuci Kering':
            $harga_perkilo = 5000;
            break;
        case 'Cuci Setrika':
            $harga_perkilo = 8000;
            break;
        case 'Setrika':
            $harga_perkilo = 6000;
            break;
    }

    if ($laundryCount % 6 == 0 && $laundryCount != 0) {
        $berat -= 2;
        if ($berat < 0) {
            $berat = 0; 
        }
        $kupon = TRUE;
    }

    $total = $berat * $harga_perkilo;

    if ($kecepatan == 'Ekspress') {
        $total += 2000 * $berat;
    }

    if ($member == 'Member') {
        $diskon = $total*0.1;
        $total -= $total * 0.1;
    }

    $_SESSION['laundry_count'] = $laundryCount + 1; 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Harga - Laundry</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
    <div class="header-title"><img src="title.png" alt="title-head"></div>
        <nav>
            <a href="home.php">Home</a>
            <a href="cek_harga.php"><b>Cek Harga</b></a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>


    <div class="cek-harga-container">
        <h2>Cek Harga Laundry</h2>
        <form action="cek_harga.php" method="POST">
            <label for="berat">Berat (Kg):</label>
            <input type="number" name="berat" id="berat" required>

            <label for="jenis">Jenis Layanan:</label>
            <select name="jenis" id="jenis" required>
                <option value="Cuci Kering">Cuci Kering</option>
                <option value="Cuci Setrika">Cuci Setrika</option>
                <option value="Setrika">Setrika</option>
            </select>

            <label for="kecepatan">Kecepatan:</label>
            <select name="kecepatan" id="kecepatan" required>
                <option value="Reguler">Reguler</option>
                <option value="Ekspress">Ekspress</option>
            </select>

            <label for="member">Membership:</label>
            <select name="member" id="member" required>
                <option value="Non Member">Non Member</option>
                <option value="Member">Member</option>
            </select>

            <button type="submit" name="check">CHECK</button>
        </form>

        <?php if (!empty($total)): ?>
            <p style="color: red; font-weight: bold; font-size: 20px">
                Total Harga: <?php echo number_format($total); ?> IDR
            </p>
            <?php
             if(!empty($diskon)) {
                echo "[Anda mendapat diskon -" . number_format($diskon) . " IDR]<br>";
             }
            ?>
            <?php 
            if($kupon){
                echo "Anda mendapat kupon diskon: GRATIS LAUNDRY 2KG";
            } else {
                
            }
            ?>
        <?php endif; ?>
    </div>

    <footer>
        <p>@ 2024 Laundry Cleaning</p>
    </footer>
</body>

</html>