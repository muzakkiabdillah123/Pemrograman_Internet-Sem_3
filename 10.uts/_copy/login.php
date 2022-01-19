<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

// Ke dashboard jika sudah login
if (isset($_SESSION["login"])) {
    header("Location: dashboard.php");
    exit;
}


// Apakah submit sudah di klik
if (isset($_POST["login"])) {

    // Mengambil data username dan password dari _POST
    $username = $_POST["username"];
    $password = $_POST["password"];

    $_SESSION['username'] = $_POST['username'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // Cek username
    if (mysqli_num_rows($result) === 1) {

        // Cek  password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;

            // Cek remember me
            if (isset($_POST['remember'])) {
                // buat cookie
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }

            header("Location: dashboard.php");
            exit;
        }
    }
    // Jika salah
    $error = true;
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/style_login.css">
</head>

<body>
    <div class="kotak-login">
        <h1>Login</h1>
        <form action="" method="post">
            <div class="text">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form_login" required><br>
            </div>
            <div class="text">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form_login" required><br>
            </div>

            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label> <br> <br>
            <button type="submit" name="login" class="tombol_login">Login</button>

            <!-- Pesan Error -->
            <?php if (isset($error)) : ?>
                <p style="color: rgb(255, 149, 149);">username / password salah</p>
            <?php endif; ?>

        </form>
    </div>
</body>

</html>