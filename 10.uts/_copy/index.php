<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WARTEG ASEP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="topnav">
        <a href="#home">HOME</a>
        <a href="#about">ABOUT</a>
        <a href="#reservation">RESERVATION</a>
        <a href="login.php" target="_blank" style="float:right">LOGIN</a>
    </div>
    <div class="header">
        <div class="header-img">
            <img src="img/page-titles/page-title-2.jpg">
        </div>
        <div class="header-title">
            <h1>WARTEG ASEP</h1>
            <h3 style="font-family:'Lucida Sans'">~ Taste is Our Priority ~</h3>
        </div>
    </div>

    <!-- koneksi ke database -->
    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "promnet") or die("Koneksi Gagal");
    $sql = "SELECT * FROM menu";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div class="wrapper">
        <div class="title">
            <h4>OUR MENU</h4>
        </div>
        <div class="menu">
            <?php
            $i = 0;
            while ($data = mysqli_fetch_array($query)) {
                $i++;
            ?>
                <div class="single-menu">
                    <img src="img/pics/<?php echo $data['gambar']; ?>" alt="">
                    <div class="menu-content">
                        <h4><?php echo $data['nama'] ?><span><?php echo "$" . $data['harga']; ?></span></h4>
                        <p><?php echo $data['deskripsi']; ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <!-- footer start -->
    <div class="footer">
        <br>
        <h3>WARTEG ASEP</h3>
    </div>
</body>

</html>