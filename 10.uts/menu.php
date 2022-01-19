<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$menu = query("SELECT * FROM menu");
$petugas = query("SELECT * FROM user");

// tombol cari ditekan
if (isset($_POST["search"])) {
    $menu = cari($_POST["txt_search"]);
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style_menu.css">
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
            <h1 class="subjudul">Daftar Menu</h1>
            <br>
        </center>

        <table>
            <tr>
                <td><a class="add-menu" href="tambah.php"><i class="bx bx-plus"></i> Add Menu</a></td>
                <td>
                    <form method="post" action="menu.php">
                        <input type="text" name="txt_search" placeholder="Search.." class="add-menu2">
                        <button type="submit" class="add-menu3" name="search"><i class="bx bx-search"></i></button>
                    </form>
                </td>
            </tr>
        </table>
        <br>
        <table cellpadding="20" style="margin-left:auto; margin-right:auto; width:1100px;">
            <thead>
                <tr>
                    <th style="width:70px;">
                        <h3>No</h3>
                    </th>
                    <th>
                        <h3>Gambar</h3>
                    </th>
                    <th>
                        <h3>Nama</h3>
                    </th>
                    <th>
                        <h3>Harga</h3>
                    </th>
                    <th style="width:480px;">
                        <h3>Deksripsi</h3>
                    </th>
                    <th>
                        <h3>Aksi</h3>
                    </th>
                </tr>
            </thead>

            <?php $i = 1; ?>
            <?php foreach ($menu as $row) : ?>
                <tr class="isi-tabel">
                    <td><?= $i; ?></td>
                    <td style="padding:13px"><img src="img/pics/<?= $row["gambar"]; ?>" width="80"></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["harga"]; ?>$</td>
                    <td style="padding:20px"><?= $row["deskripsi"]; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>"><i class='bx bx-edit' style="color: #e73f3f;"></i></a> |
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Hapus permanen data ini?');"><i class='bx bx-trash' style="color: #e73f3f;"></i></a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>
        <br>
    </section>
</body>

</html>