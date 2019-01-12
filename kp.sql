-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 03:46 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(5) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `kelas` int(2) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `status_siswa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nisn`, `nis`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `kelas`, `alamat`, `provinsi`, `status_siswa`) VALUES
(1, 24671709, '121231750038150437', 'FEBRILIYANTI', 'JAKARTA', '06/02/2003', 'PEREMPUAN', 8, 'JL. SWAKARSA IV RT 009/03, PONDOK KELAPA\r\n', 'DKI Jakarta', 'AKTIF'),
(2, 26276901, '121231750038150438', 'IKHSAN FATHAN RAMADANI', 'BEKASI', '23/11/2002', 'LAKI-LAKI', 8, 'JL. PONDOK KELAPA NO. 17B\r\n', 'DKI Jakarta', 'AKTIF'),
(3, 4743122, '121231750038150439', 'JIHAN NURDINI ROHMAH', 'JAKARTA', '25/09/2000', 'PEREMPUAN', 8, 'JL. MELATI II RT 004/02\r\n', 'Jawa Barat', 'AKTIF'),
(4, 2508611, '121231750038140410', 'FAJAR MEI SYAFRUDIN', 'BANJARNEGARA', '24/05/2000', 'LAKI-LAKI', 9, 'JL. PONDOK KELAPA SELATAN RT. 010/05 NO. 09\r\n', 'DKI Jakarta', 'AKTIF'),
(5, 18369538, '121231750038140411', 'FARHAN MUZAKI', 'BEKASI', '22/12/2001', 'LAKI-LAKI', 9, 'JL. H. NADIH NO. 07 RT. 003/02', 'JAWA BARAT', 'AKTIF'),
(6, 21218788, '121231750038140414', 'KHAIRUL ALWAN ALBALDAN', 'JAKARTA', '19/01/2002', 'LAKI-LAKI', 9, 'JL.MASJID I RT 005/12 NO.35B', 'DKI Jakarta', 'AKTIF'),
(7, 37714990, '121231750038160452', 'ANNISA ROKHIMAH', 'Karanganyar', '20/05/2003', 'PEREMPUAN', 7, 'JL . Pondok Kelapa ', 'DKI Jakarta', 'AKTIF'),
(8, 48692792, '121231750038160453', 'ARIEF RACHMAN', 'JAKARTA', '08/12/2004', 'LAKI-LAKI', 7, 'JL. SWAKARSA I RT.004/03', 'DKI Jakarta', 'AKTIF'),
(9, 5127895, '121231750038160454', 'DEA AMANDA', 'BANDUNG', '23/11/2003', 'PEREMPUAN', 7, 'KOMP DKI BLOK PI/16 RT 009/02', 'DKI Jakarta', 'AKTIF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
