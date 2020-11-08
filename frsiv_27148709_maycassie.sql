-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2020 at 01:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basisdatamayang`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `produk1` varchar(15) DEFAULT NULL,
  `produk2` varchar(15) DEFAULT NULL,
  `produk3` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `alamat`, `nomor`, `produk1`, `produk2`, `produk3`) VALUES
(17, 'Deo Ramadhan', 'Banyudono, Boyolali', '0812982001', 'Korean Garlic', '-', '-'),
(25, 'Nastiti Anugrahing', 'Griya Pulisen II, Boyolali', '0891009181', 'Korean Garlic', 'Donut', ''),
(26, 'Egi Risandi', 'Pengging, Boyolali', '081299812345', '', 'Donut', 'Pizza'),
(27, 'Miftakhul Jannah', 'Cepogo , Boyolali', '082133458765', 'Korean Garlic', '', ''),
(28, 'Dhany Yudi Prasetyo', 'Wiradesa, Pekalongan', '085280987765', 'Korean Garlic', 'Donut', 'Pizza'),
(29, 'Susanti', 'Padan, Klaten', '087623458932', 'Korean Garlic', '', ''),
(30, 'Eni Sumarti', 'Ngaliyan, Klaten', '089923451122', 'Korean Garlic', 'Donut', ''),
(31, 'Senodiharjo', 'Mranggen, Klaten', '082311239875', '', '', 'Pizza'),
(32, 'Eka Anugrah', 'Ceper, Klaten', '086522874456', 'Korean Garlic', 'Donut', ''),
(33, 'Ayu Gemilang ', 'Daleman, Klaten', '0877268127', 'Korean Garlic', 'Donut', 'Pizza'),
(34, 'Kartika Sari Dewi', 'Mampang Prapatan, Jakarta Selatan', '081234901876', 'Korean Garlic', 'Donut', 'Pizza'),
(35, 'Putri Juwita', 'Tangerang ', '08123765912', 'Korean Garlic', 'Donut', 'Pizza'),
(36, 'Mega Lintang', 'Slipi, Jakarta Timur', '081234761123', 'Korean Garlic', '', ''),
(37, 'Rahayu Puji', 'Kampil , Jawa Tengah', '088910346719', 'Korean Garlic', 'Donut', 'Pizza'),
(38, 'Keyza Sani Maulida', 'Bojong, Pekalongan', '081190873456', 'Korean Garlic', 'Donut', 'Pizza'),
(39, 'Irkham Aulady', 'Ketitang', '08776234561', '', 'Donut', ''),
(40, 'Ardito Pramana', 'Boyolali', '081299324567', 'Korean Garlic', '', ''),
(41, 'Ferry Aryanto', 'Kalideres', '0811345689098', 'Korean Garlic', 'Donut', ''),
(42, 'Senja Naladipa Manurung', 'Tangerang', '0812380989000', '', 'Donut', 'Pizza'),
(43, 'Arka Azril', 'Jakarta Selatan', '0899812347762', 'Korean Garlic', 'Donut', 'Pizza');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
