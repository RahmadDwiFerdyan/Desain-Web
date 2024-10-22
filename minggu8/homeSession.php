<html>

<head>
    <title>Halaman</title>
</head>

<body>
    <?php
    session_start();
    if ($_SESSION['status'] == 'login') {
        echo "Selamat datang " . $_SESSION['username'];
        ?>
        <br><a href="sessionLogout.php">Logout</a>
        <?php
    } else {
        echo "Anda belum login, silakan ";
        ?>
        <a href="sessionLoginForm.html">Login</a>
        <?php
    }
    ?>

</body>

</html>