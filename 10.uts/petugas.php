<?php
include('functions.php');

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$petugas = query("SELECT * FROM user");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Petugas</title>
    <link rel="stylesheet" href="css/style_petugas.css">
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
            <h1 class="subjudul">Petugas</h1>
        </center>

        <table class="add">
            <tr>
                <td><a class="add-petugas" href="registrasi.php"><i class="bx bx-plus"></i> Tambah Petugas</a></td>
            </tr>
        </table>
        <br><br><br>

        <table cellpadding="20" style="margin-left:auto;margin-right:auto">
            <thead>
                <tr>
                    <th style="width:80px;">
                        <h3>No</h3>
                    </th>
                    <th style="width:150px;">
                        <h3>Username</h3>
                    </th>
                    <th style="width:680px;">
                        <h3>Password</h3>
                    </th>
                </tr>
            </thead>

            <?php $i = 1; ?>
            <?php foreach ($petugas as $row) : ?>
                <tr class="isi-tabel">
                    <td style="padding:13px"><?= $i; ?></td>
                    <td><?= $row["username"]; ?></td>
                    <td><?= $row["password"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
        <br><br>
    </section>
</body>

</html>