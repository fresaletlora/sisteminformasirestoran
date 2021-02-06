-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2021 at 01:18 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kampungbunga`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(15) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'Salad Syurgawi', 15000, 'Salad yang segar disajikan dengan bahan-bahan yang masih fresh', '01.jpg'),
(8, 'Beef Pizza', 60000, 'Pizza dengan daging sapi pilihan yang terbaik', '02.jpg'),
(9, 'Otak-Otak Sumedang', 11000, 'Otak-otak dengan cita rasa khas dari Sumedang', '03.jpg'),
(11, 'Kwetiaw Siram Malang', 27000, 'Kwetiaw Siram yang memiliki rasa yang unik dari Malang', '04.jpg'),
(12, 'Bakso Goreng Madiun', 20000, 'Bakso goreng yang enak dan cocok untuk ngumpul-ngumpul', '05.jpg'),
(13, 'Roti Bakar Blackberry', 30000, 'Roti bakar dengan irisan buah blackberry yang manis', '06.jpg'),
(14, 'Cah Kangkung', 21000, 'Cah kangkung dengan bumbu khas dari restoran kami', '07.jpg'),
(15, 'Choipan', 14000, 'Makanan yang sangat authentic dari daerah Pontianak', '08.jpg'),
(20, 'Nasi Goreng Kampung', 20000, 'Nasi Goreng dengan rasa yang sangat enak', '13.jpg'),
(21, 'Soto Betawi', 25000, 'Soto dengan bumbu khas ini sangat enak', '14.jpg'),
(22, 'Gurame Bakar', 50000, 'Gurame yang segar dicampur dengan saus matah', '15.jpg'),
(23, 'Udang Goreng Mentega', 30000, 'Udang goreng yang segar dengan bumbu mentega ', '16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `minuman`
--

CREATE TABLE IF NOT EXISTS `minuman` (
`id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minuman`
--

INSERT INTO `minuman` (`id`, `nama`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'Jus Alpukat', 18000, 'Jus alpukat dengan buah yang masih segar', '09.jpg'),
(2, 'Lime Mojito', 20000, 'Mojito terbaik dari buah lime segar pilihan', '10.jpg'),
(3, 'Orange Juice', 15000, 'Jus jeruk menggunakan jeruk segar pilihan', '11.jpg'),
(4, 'Air Mineral', 3000, 'Air mineral cocok untuk gaya hidup sehat', '12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE IF NOT EXISTS `reservasi` (
`id_reservasi` int(11) NOT NULL,
  `kode_reservasi` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(200) NOT NULL,
  `kegiatan` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `kode_reservasi`, `nama`, `tanggal`, `jam`, `kegiatan`) VALUES
(1, 2134, 'Wawan Hendrawan', '2021-01-13', '10.00 - 15.00', 'Arisan'),
(2, 1349, 'Citra Sholari', '2021-01-21', '09.00 - 14.00', 'Pernikahan'),
(3, 7429, 'Denny Sumargo', '2021-01-29', '12.00 - 20.00', 'Lamaran'),
(4, 4621, 'Ria Ricis', '2021-02-03', '16.00 - 22.00', 'Meeting');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minuman`
--
ALTER TABLE `minuman`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
 ADD PRIMARY KEY (`id_reservasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `minuman`
--
ALTER TABLE `minuman`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
