<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Laundry</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <header>
        <div class="header-title"><img src="title.png" alt="title-head"></div>
        <nav>
            <a href="home.php" style="text-decoration: underline"><b>Home</b></a>
            <a href="cek_harga.php">Cek Harga</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <div class="home-container">
        <h2>Hello <?= $_SESSION['username']; ?>! Welcome to Laundry Ferdy</h2>
        <div class="slider">
            <div class="slider-wrapper">
                <img src="laundry1.png" alt="Banner 1">
                <img src="laundry2.png" alt="Banner 2">
            </div>
        </div>
        <p>Laundry Ferdy is a laundry service company that prioritizes cleanliness, speed, and customer satisfaction.
            Established several years ago, Laundry Ferdy has grown to become one of the top choices for locals seeking
            a practical solution for their daily laundry needs. Equipped with modern technology and a well-trained
            staff,
            Laundry Ferdy ensures that every garment, linen, and fabric is handled with the utmost care and attention.
            The company offers a wide range of services, including washing, ironing, and dry cleaning, catering to both
            individual and commercial clients.</p>
        <p>Committed to environmental sustainability, Laundry Ferdy also uses eco-friendly detergents and
            energy-efficient
            equipment to minimize its impact on the environment. With a convenient pickup and delivery system, customers
            can enjoy high-quality laundry services without leaving the comfort of their homes. Laundry Ferdy’s
            reputation
            for reliability and exceptional service has made it a trusted name in the community, always striving to meet
            the needs of its customers with professionalism and dedication.</p>
        <p>Committed to environmental sustainability, Laundry Ferdy also uses eco-friendly detergents and
            energy-efficient
            equipment to minimize its impact on the environment. With a convenient pickup and delivery system, customers
            can enjoy high-quality laundry services without leaving the comfort of their homes. Laundry Ferdy’s
            reputation
            for reliability and exceptional service has made it a trusted name in the community, always striving to meet
            the needs of its customers with professionalism and dedication.</p>
    </div>

    <footer>
        <p>@ 2024 Laundry Cleaning</p>
    </footer>

    <script>
        $(document).ready(function () {
            let totalImages = $('.slider img').length;
            let currentIndex = 0;

            setInterval(function () {
                currentIndex = (currentIndex + 1) % totalImages;
                $('.slider-wrapper').css('transform', 'translateX(' + (-currentIndex * 100) + '%)');
            }, 2000);
        });
    </script>


</body>

</html>