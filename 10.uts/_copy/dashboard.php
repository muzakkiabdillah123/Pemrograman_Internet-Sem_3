<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$menu = query("SELECT * FROM menu");
$petugas = query("SELECT * FROM user");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style_dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
    <section class="container">
        <center>
            <div class="kotak-judul">
                <h1 class="judul">Warteg Asep<br></h1>
            </div>
        </center>
        <a onClick="return confirm('Do you want to logout?')" href='logout.php' style="color: white;">
            <div class="kotak-user">
                <i class="bx bx-user"></i>
                <h2><?= $_SESSION['username'] ?></h2>
            </div>
        </a>
        <center>
            <h1 class="subjudul">Dashboard</h1>
            <br><br>
        </center>
        <a href="menu.php">
            <div class="kotak">
                <center>
                    <i class="bx bx-menu"></i>
                    <br><br>
                    <?php $i = 0;
                    foreach ($menu as $row) :
                        $i++; ?>
                    <?php endforeach; ?>
                    <h1 style="color: white;"><?= $i ?> MENU</h1>
                </center>
            </div>
        </a>
        <a href="petugas.php">
            <div class="kotak2">
                <center>
                    <i class="bx bx-user"></i>
                    <br><br>
                    <?php $i = 0;
                    foreach ($petugas as $row) :
                        $i++; ?>
                    <?php endforeach; ?>
                    <h1 style="color: white;"><?= $i ?> PETUGAS</h1>
                </center>
            </div>
        </a>
    </section>
</body>

</html>