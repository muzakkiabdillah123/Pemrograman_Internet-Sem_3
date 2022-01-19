-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 04:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `promnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(3) NOT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'SUP BAYAM', 15, 'Bayam, telur, susu, bawang merah, bawang putih, kentang, ayam, lemon', '61834d1917be0.png'),
(2, 'SUP TOMAT', 16, 'Tomat, bawang merah, wortel, seledri, minyak zaitun, pure tomat, gula, sup sayur', '61834d3a4240b.png'),
(3, 'SUP JAMUR', 18, 'Jamur, minyak zaitun, bawang putih, bawang merah, garam laut, lada hitam, keju', '61834d4f06071.png'),
(4, 'SALAD ORIGINAL', 16, 'Paha ayam, merica, minyak zaitun, garam, pancetta, alpukat, tomat, keju, buttermilk', '61834d5eefb65.png'),
(1635859842, 'SALAD PEDAS', 19, 'Anggur, lemon, minyak zaitun, garam laut, lada hitam, kenari, yoghurt, seledri', '61834d69a97de.png'),
(1635859843, 'SALAD ASIN', 15, 'Asparagus, bayam, bawang merah, susu, keju, lada hitam', '61834d7599d93.png'),
(1635859844, 'AYAM BAKAR', 21, 'Dada ayam tanpa kulit, lada hitam, paprika merah, passata, jahe, bawang putih', '61834d980f0f8.png'),
(1635859845, 'BBQ', 25, 'Iga pendek, minyak zaitun, biji jintan, yoghurt, wortel, bawang, kol putih', '61834da013990.png'),
(1635859846, 'AYAM PEDAS', 17, 'Paha ayam, stik drum ayam, kentang, ayenne pepper, wortel, bawang, kol putih', '61834daa2849c.png'),
(1635859847, 'TUNA GORENG', 29, 'Steak tuna, cabai merah, lemon, bawang putih, minyak zaitun', '61834dc35bd1e.png'),
(1635859848, 'KALKUN REBUS', 28, 'Dada kalkun, cabai merah, minyak zaitun, tuna kaleng, lemon, lada hitam', '61834dcd9f43b.png'),
(1635859849, 'STEAK MEWAH', 35, 'Steak sayap, bawang bombay, mentega, minyak zaitun, anggur', '61834dd716fbb.png'),
(1635859850, 'CHOCOLATE CAKE', 14, 'Dark chocolate, gula, lemon, stik vanila, krim kocok, madu, gula, garam', '61834de0ec11b.png'),
(1635859851, 'STRAWBERRY CAKE', 16, 'Strawberry, sirup, gula merah, krim keju, kayu manis, madu, gula, garam', '61834de99f59b.png'),
(1635859852, 'VANILLA CAKE', 18, 'Pod vanilla, gula, jeruk, susu, krim, krim kocok, madu, gula, garam', '61834df46d3fc.png'),
(1635859853, 'PANNA COTA', 20, 'Susu, agar-agar bubuk, krim kocok, madu, gula, garam, buah beri', '61834dfe78813.png'),
(1635859854, 'TIRAMISU CAKE', 21, 'Kuning telur, gula, susu, keju, kopi, coklat bubuk, coklat', '61834e08cd56f.png'),
(1635859855, 'ORANGE CAKE', 13, 'Jeruk, vanilla stick, susu, gula merah, krim, krim kocok, madu, gula, garam', '61834e1226fc2.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'muzakki', '$2y$10$cDMLy3O3MgVah7g7yol6qeXdGtE4fE6hYoF5JBnx6gEAsnLWK2CbO'),
(7, 'asep', '$2y$10$scymAhM4IOdbQTwoKs2gZuQWACX6msfwBFvPJ1HC7V9tMX93KtKR2'),
(8, 'koswara', '$2y$10$gqbGvlMeDlrEyWkweiEwzOvoKVAA8QOtsYlubrQw7Hz3vrLdKFBjO'),
(14, 'dadang', '$2y$10$DzJGUw3XAmN2S6u8vzDn7e2Hj/tdQFkpdmGGPixZiO2dDNk59JAmu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1635859873;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
