-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 10, 2022 at 07:01 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `overdrive`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `click` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `id_produk`, `click`) VALUES
(1, 1, 4),
(2, 2, 4),
(3, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `nama_produk` varchar(80) NOT NULL,
  `deskripsi_produk` varchar(400) NOT NULL,
  `harga_produk` varchar(20) NOT NULL,
  `interior_produk` varchar(400) NOT NULL,
  `luas_produk` varchar(20) NOT NULL,
  `sertifikat` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `harga_produk`, `interior_produk`, `luas_produk`, `sertifikat`, `gambar`) VALUES
(1, 'Samira Regency', 'Samira Regency Bekasi hunian modern minimalis dengan konsep Smart Green House. ', 'Rp 500 juta', 'Tidak berperabot', '39 m²', 'SHGB - Hak Guna Bangunan', 'item-h-1.png'),
(2, 'The Green Park Residence', 'Project Green Park ini di dirikan mulai tahun 2010. Luas Area 11,6 Ha dengan lokasi strategis.', 'Rp 1 miliar', 'Berperabot', '40 m²', 'SHGB - Hak Guna Bangunan', 'item-h-2.png'),
(3, 'Apartemen St.Moritz', 'Superblok Elite dengan 11 Fasilitas dalam 1 Area terdiri dari Kondominium Mewah.', 'Rp 1.3M', ' Berperabot', '37m²', 'SHGB - Hak Guna Bangunan', 'item-h-3.png'),
(4, 'Anabuki Residence', 'Rumah mewah 2 lantai, Private Cluster, Dengan design modern minimalis bergaya jepang. ', 'Rp 800 juta', 'Berperabot', '45 m²', 'SHGB - Hak Guna Bangunan', 'item-a-1.png'),
(5, 'Pasadena Gading Serpong', 'Paramount Land mempersembahkan Hunian Premium di Cluster Pasadena Gading Serpong.', 'Rp 600 juta', 'Tidak berperabot', '34 m²', 'SHGB - Hak Guna Bangunan', 'item-a-2.png'),
(6, 'Apartemen PGV Cimanggis', 'Dijual Apartemen Podomoro Golf View Cimanggis Type Studio Gress Murah Tower Cordia Lantai 9 Type Studio.', 'Rp 950 juta', 'Tidak berperabot', '34 m²', 'SHGB - Hak Guna Bangunan', 'item-a-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `role` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `role`, `email`, `password`) VALUES
(1, 'Singkolang', 'user', 'yulismunandar17@gmail.com', '$2y$10$u5uloaaLCZB.njtxzE9.BuQOgRhBUQZGuefWmZ6KHgGPdp2YhI3Ca'),
(2, 'hendi Juniar', 'user', 'hendijuniar@gmail.com', '$2y$10$rjzAPptxPnax7axO45d6POiFn4vowesz28R139lmXyvzxL3Dxb/96'),
(3, 'tes', 'user', 'tes@gmail.com', '$2y$10$Q.LKXnrLtuzS6cgAMCjaQe5CHle6jDOiNn/kGUiPMfRt21w4Bf6U2'),
(4, 'anas', 'admin', 'anas@gmail.com', '$2y$10$Qhb4NNREPTCGN2W7tnO05ORMVGnT21iRmsajXVc6g4ZmzJIJqBRG6'),
(5, 'hani Chuby', 'user', 'hani@gmail.com', '$2y$10$shczEoK16u67a92KykIVFO4whWLRebrhpxNYXwV0g/iaD6vvkgABO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
