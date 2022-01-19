<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET["id"];

$menu = query("SELECT * FROM menu WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'menu.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'menu.php';
			</script>
		";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ubah Data Menu</title>
    <link rel="stylesheet" href="css/style_ubah.css">
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
            <h1>Ubah Data Menu</h1>

            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $menu["id"]; ?>">
                <input type="hidden" name="gambarLama" value="<?= $menu["gambar"]; ?>">

                <div class="text">
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" id="nama" value="<?= $menu["nama"]; ?>">
                </div>

                <div class="text">
                    <label for="harga">Harga :</label>
                    <input type="text" name="harga" id="harga" value="<?= $menu["harga"]; ?>">
                </div>

                <div class="text">
                    <label for="deskripsi">Deskripsi :</label>
                    <input type="text" name="deskripsi" id="deskripsi" value="<?= $menu["deskripsi"]; ?>">
                </div>

                <div class="text">
                    <label for="gambar" style="padding-top:17px">Gambar :</label>
                    <img src="img/pics/<?= $menu['gambar']; ?>" width="40"> <br>
                    <input type="file" name="gambar" id="gambar">
                </div>
                <button type="submit" name="submit">Ubah Data</button>
            </form>
        </div>
    </div>

</body>

</html>