<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
				alert('user baru berhasil ditambahkan!');
                document.location.href = 'petugas.php';
			  </script>";
        exit;
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Registrasi</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style_registrasi.css">
</head>

<body>
    <div class="sidebar">
        <ul class="nav-list">
            <li>
                <a href="dashboard.php">
                    <i class='bx bx-home-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="menu.php">
                    <i class='bx bx-menu'></i>
                    <span class="links_name">Menu</span>
                </a>
                <span class="tooltip">Menu</span>
            </li>
            <li>
                <a href="petugas.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Petugas</span>
                </a>
                <span class="tooltip">Petugas</span>
            </li>
            <?php
            echo "<li><a onClick=\"return confirm('Apakah Anda ingin logout?')\"  href='logout.php'>
            <i class='bx bx-log-out'></i>
            <span class='links_name'>Logout</span>
            </a><span class='tooltip'>Logout</span>
            </li>";
            ?>
        </ul>
    </div>
    <div class="container">
        <div class="kotak-login">
            <h1>Tambah Petugas</h1>
            <form action="" method="post">
                <div class="text">
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="text">
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="text">
                    <label for="password2">Konfirmasi password :</label>
                    <input type="password" name="password2" id="password2">
                </div>
                <button type="submit" name="register" class="tombol-register">Sign Up</button>
            </form>
        </div>
    </div>
</body>

</html>