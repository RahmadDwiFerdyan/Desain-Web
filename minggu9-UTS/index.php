<?php
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error = '';

    if (empty($username) || empty($password)) {
        $error = 'Username dan Password harus terisi';
    } elseif (strlen($password) > 6) {
        $error = 'Password maksimal 6 karakter';
    } elseif (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)) {
        $error = 'Password harus terdiri dari huruf besar dan kecil';
    } else {
        $_SESSION['username'] = $username;
        header('Location: home.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Laundry</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="body-login">
    <header class="header-login">
        <img src="title.png" alt="title">
    </header>
    <div class="login-container">
        <h2>Let's Login First!</h2>
        <form action="index.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <?php if (isset($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
    <script src="script.js"></script>

    <footer>
        <p>@ 2024 Laundry Cleaning</p>
    </footer>
</body>

</html>