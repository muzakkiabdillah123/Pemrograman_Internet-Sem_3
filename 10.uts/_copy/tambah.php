<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST["submit"])) {

    // Jika tambah berhasil
    if (tambah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'menu.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'menu.php';
			</script>
		";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah data menu</title>
    <link rel="stylesheet" href="css/style_tambah.css">
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
    <div class="container">
        <div class="kotak">
            <h1>Tambah Data Menu</h1>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="text">
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" id="nama" class="form-tambah"><br>
                </div>
                <div class="text">
                    <label for="harga">Harga :</label>
                    <input type="text" name="harga" id="harga" class="form-tambah"><br>
                </div>
                <div class="text">
                    <label for="deskripsi">Deksripsi :</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-tambah"><br>
                </div>
                <div class="text">
                    <label for="gambar" style="margin-top:-8px ;">Gambar :</label>
                    <input type="file" name="gambar" id="gambar" class="form-tambah"><br>
                </div>
                <button type="submit" name="submit" class="tombol_submit">Tambah</button>
            </form>
        </div>
    </div>

</body>

</html>