-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2019 at 02:17 PM
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
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(5) NOT NULL,
  `nuptk` varchar(16) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `status_pegawai` varchar(10) NOT NULL,
  `mata_pelajaran` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nuptk`, `nip`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `status_pegawai`, `mata_pelajaran`, `status`) VALUES
(1, '3039737639110093', '121231750038020001', 'H. FAKHRUROZI, S.Ag', 'JAKARTA', '07/07/1959', 'LAKI-LAKI', 'Jl. Pondok Kelapa Selatan', 'NON-PNS', 'Pendidikan Agama Islam (PAI)', 'AKTIF'),
(2, '5459753656210023', '121231750038160002', 'NOVI EKA ARIYANTI, S.Pd', 'JOGYAKARTA', '27/11/1975', 'PEREMPUAN', 'Jl. Swakarsa IV', 'NON-PNS', ' IPA (Fisika, Biologi, Kimia)', 'AKTIF'),
(3, '6656757658210062', '121231750038030003', 'ITA NURLITA, S.Th.I', 'Jakarta', '24/03/1979', 'PEREMPUAN', 'Jl. Pondok Kelapa Selatan', 'NON-PNS', 'Pendidikan Agama Islam (PAI)', 'AKTIF'),
(4, '2552745647110062', '121231750038080004', 'H. JUNAEDI, S.Pd.I', 'Jakarta', '20/02/1967', 'LAKI-LAKI', 'Jl. Swakarsa IV', 'NON-PNS', 'Pendidikan Agama Islam (PAI)', 'AKTIF'),
(5, '6362755657210073', '121231750038090005', 'ST. BADRIAH, S.Pd.I', 'Jakarta', '30/10/1977', 'PEREMPUAN', 'Jl. Kenangan III', 'NON-PNS', 'Pendidikan Agama Islam (PAI)', 'AKTIF'),
(6, '5834765666210142', '121231750038070006', 'ELIE ROSMAWATI', 'Jakarta', '02/05/1987', 'PEREMPUAN', 'Jl. Pangkalan Jati No. 9', 'NON PNS', ' PGSD/PGMI', 'AKTIF'),
(8, '1458757659110022', '121231750038280008', 'DEDI JUNAEDI, S.Kom', 'Jakarta', '26/01/1979', 'LAKI-LAKI', 'Jl. Pangkalan Jati V', 'NON PNS', 'Teknologi Informasi', 'AKTIF'),
(9, '0134748650110063', '121231750038040009', 'H. NASRUDIN, S.Pd.I', 'Jakarta', '02/08/1970', 'LAKI-LAKI', 'Jl. Amil Abas Ujung No. 49', 'NON PNS', ' Rumpun Pendidikan Agama Islam', 'AKTIF'),
(14, '2015230056', '2015230056', 'Jordan Nur Akbar', 'Jakarta', '2016-07-31', 'Laki-Laki', 'Serdang', 'PNS', 'Pendidikan Agama Islam (PAI)', 'Aktif'),
(15, '201523001616', '2015230016', 'Gita Fitriana', 'Jakarta', '1997-05-03', 'Perempuan', '  Jl, Pasir Putih III  ', 'PNS', 'Sejarah Kebudayaan Islam', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `input_nilai`
--

CREATE TABLE `input_nilai` (
  `id` int(10) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `kelas` int(5) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `pai` int(5) NOT NULL,
  `pai_huruf` varchar(30) NOT NULL,
  `kkm_pai` int(5) NOT NULL,
  `bindo` int(5) NOT NULL,
  `bindo_huruf` varchar(30) NOT NULL,
  `kkm_bindo` int(5) NOT NULL,
  `binggris` int(5) NOT NULL,
  `binggris_huruf` varchar(30) NOT NULL,
  `kkm_binggris` int(5) NOT NULL,
  `barab` int(5) NOT NULL,
  `barab_huruf` varchar(30) NOT NULL,
  `kkm_barab` int(5) NOT NULL,
  `matematika` int(5) NOT NULL,
  `matematika_huruf` varchar(30) NOT NULL,
  `kkm_matematika` int(5) NOT NULL,
  `ipa` int(5) NOT NULL,
  `ipa_huruf` varchar(30) NOT NULL,
  `kkm_ipa` int(5) NOT NULL,
  `ips` int(5) NOT NULL,
  `ips_huruf` varchar(30) NOT NULL,
  `kkm_ips` int(5) NOT NULL,
  `aqidah` int(5) NOT NULL,
  `aqidah_huruf` varchar(30) NOT NULL,
  `kkm_aqidah` int(5) NOT NULL,
  `fiqih` int(5) NOT NULL,
  `fiqih_huruf` varchar(30) NOT NULL,
  `kkm_fiqih` int(5) NOT NULL,
  `qurdis` int(5) NOT NULL,
  `qurdis_huruf` varchar(30) NOT NULL,
  `kkm_qurdis` int(5) NOT NULL,
  `ski` int(5) NOT NULL,
  `ski_huruf` varchar(30) NOT NULL,
  `kkm_ski` int(5) NOT NULL,
  `senbud` int(5) NOT NULL,
  `senbud_huruf` varchar(30) NOT NULL,
  `kkm_senbud` int(5) NOT NULL,
  `penjaskes` int(5) NOT NULL,
  `penjaskes_huruf` varchar(30) NOT NULL,
  `kkm_penjaskes` int(5) NOT NULL,
  `budi_pekerti` varchar(30) NOT NULL,
  `sikap` varchar(10) NOT NULL,
  `kerajinan` varchar(10) NOT NULL,
  `kebersihan` varchar(10) NOT NULL,
  `sakit` int(5) NOT NULL,
  `izin` int(5) NOT NULL,
  `alfa` int(5) NOT NULL,
  `catatan_guru` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_nilai`
--

INSERT INTO `input_nilai` (`id`, `nis`, `kelas`, `semester`, `pai`, `pai_huruf`, `kkm_pai`, `bindo`, `bindo_huruf`, `kkm_bindo`, `binggris`, `binggris_huruf`, `kkm_binggris`, `barab`, `barab_huruf`, `kkm_barab`, `matematika`, `matematika_huruf`, `kkm_matematika`, `ipa`, `ipa_huruf`, `kkm_ipa`, `ips`, `ips_huruf`, `kkm_ips`, `aqidah`, `aqidah_huruf`, `kkm_aqidah`, `fiqih`, `fiqih_huruf`, `kkm_fiqih`, `qurdis`, `qurdis_huruf`, `kkm_qurdis`, `ski`, `ski_huruf`, `kkm_ski`, `senbud`, `senbud_huruf`, `kkm_senbud`, `penjaskes`, `penjaskes_huruf`, `kkm_penjaskes`, `budi_pekerti`, `sikap`, `kerajinan`, `kebersihan`, `sakit`, `izin`, `alfa`, `catatan_guru`) VALUES
(1, '', 0, 'Ganjil', 75, 'Tujuh Puluh Lima', 70, 85, '', 80, 70, '0', 60, 70, '0', 65, 75, 'Tujuh Puluh Lima', 70, 70, 'Tujuh Puluh', 70, 80, 'Delapan Puluh', 75, 78, 'Tujuh Puluh Delapan', 75, 80, 'Delapan Puluh', 80, 80, 'Delapan Puluh', 75, 75, 'Tujuh Puluh Lima', 75, 80, 'Delapan Puluh', 80, 80, 'Delapan Puluh', 75, 'Disiplin', '', '', '', 1, 1, 1, 'Belajar Lebih Giat Yaa..'),
(4, '', 0, 'Ganjil', 75, 'Tujuh Puluh Lima', 0, 85, 'Delapan Puluh Lima', 0, 70, '0', 0, 70, '0', 0, 75, 'Tujuh Puluh Lima', 0, 70, 'Tujuh Puluh', 0, 80, 'Delapan Puluh', 0, 78, 'Tujuh Puluh Delapan', 0, 80, 'Delapan Puluh', 0, 80, 'Delapan Puluh', 0, 75, 'Tujuh Puluh Lima', 0, 80, 'Delapan Puluh', 0, 80, 'Delapan Puluh', 0, 'Tidak Disiplin', '', '', '', 1, 1, 1, 'Oyee'),
(18, '2015230056', 7, 'Ganjil', 75, 'Tujuh Puluh Lima', 60, 85, 'Delapan Puluh Lima', 60, 70, '0', 65, 70, '0', 60, 75, 'Tujuh Puluh Lima', 60, 70, 'Tujuh Puluh', 60, 80, 'Delapan Puluh', 60, 78, 'Tujuh Puluh Delapan', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 65, 75, 'Tujuh Puluh Lima', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 60, 'Disiplin', '', '', '', 1, 1, 1, 'Oyee'),
(23, '121231750038160452', 8, 'Genap', 75, 'Tujuh Puluh Lima', 60, 85, 'Delapan Puluh Lima', 60, 70, 'Tujuh Puluh', 65, 70, 'Tujuh Puluh', 60, 75, 'Tujuh Puluh Lima', 60, 70, 'Tujuh Puluh', 60, 80, 'Delapan Puluh', 60, 78, 'Tujuh Puluh Delapan', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 65, 75, 'Tujuh Puluh Lima', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 60, 'Disiplin', '', '', '', 1, 1, 1, 'Oyeee'),
(24, '2015230016', 8, 'Ganjil', 75, 'Tujuh Puluh Lima', 60, 85, 'Delapan Puluh Lima', 60, 70, 'Tujuh Puluh', 65, 70, 'Tujuh Puluh', 60, 75, 'Tujuh Puluh Lima', 60, 70, 'Tujuh Puluh', 60, 80, 'Delapan Puluh', 60, 78, 'Tujuh Puluh Delapan', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 65, 75, 'Tujuh Puluh Lima', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 60, 'Disiplin', 'A', 'B', 'A', 1, 1, 1, 'Baik'),
(25, '2015230098', 8, 'Ganjil', 75, 'Tujuh Puluh Lima', 60, 85, 'Delapan Puluh Lima', 60, 70, 'Tujuh Puluh', 65, 70, 'Tujuh Puluh', 60, 75, 'Tujuh Puluh Lima', 60, 70, 'Tujuh Puluh', 60, 80, 'Delapan Puluh', 60, 78, 'Tujuh Puluh Delapan', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 65, 75, 'Tujuh Puluh Lima', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 60, 'Disiplin', '', '', '', 1, 2, 1, 'Nilai lebih ditingkatkan'),
(26, '121231750038160453', 8, 'Ganjil', 75, 'Tujuh Puluh Lima', 60, 85, 'Delapan Puluh Lima', 60, 70, 'Tujuh Puluh', 65, 70, 'Tujuh Puluh', 60, 75, 'Tujuh Puluh Lima', 60, 70, 'Tujuh Puluh', 60, 80, 'Delapan Puluh', 60, 78, 'Tujuh Puluh Delapan', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 65, 75, 'Tujuh Puluh Lima', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 60, 'Disiplin', 'A', 'A', 'A', 1, 1, 1, 'Lebih rajin'),
(27, '121231750038160453', 8, 'Ganjil', 75, 'Tujuh Puluh Lima', 60, 85, 'Delapan Puluh Lima', 60, 70, 'Tujuh Puluh', 65, 70, 'Tujuh Puluh', 60, 75, 'Tujuh Puluh Lima', 60, 70, 'Tujuh Puluh', 60, 80, 'Delapan Puluh', 60, 78, 'Tujuh Puluh Delapan', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 65, 75, 'Tujuh Puluh Lima', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 60, 'Disiplin', 'A', 'A', 'A', 1, 1, 1, 'Lebih rajin'),
(28, '2015230055', 7, 'Ganjil', 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 65, 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 65, 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 65, 50, 'Lima Puluh', 65, 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 60, 'Disiplin', 'A', 'B', 'A', 1, 1, 5, 'Tingkat nilai kamu, kurangi bercanda dikelas'),
(29, '2015230055', 8, 'Ganjil', 75, 'Tujuh Puluh Lima', 60, 85, 'Delapan Puluh Lima', 60, 70, 'Tujuh Puluh', 65, 70, 'Tujuh Puluh', 60, 75, 'Tujuh Puluh Lima', 60, 70, 'Tujuh Puluh', 60, 80, 'Delapan Puluh', 60, 78, 'Tujuh Puluh Delapan', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 65, 75, 'Tujuh Puluh Lima', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 60, 'Disiplin', 'A', 'A', 'A', 1, 1, 1, 'Belajar Lebih Giat Yaa..');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(10) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`, `keterangan`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 'admin'),
(2, 'siswa', 'bcd724d15cde8c47650fda962968f102', 1, 'siswa'),
(3, 'orangtua', '344c999a63cd55b3035cbf76c2691f88', 2, 'orangtua'),
(4, 'walikelas8', '9eaf7b6a21d60ef9d1d0eaf02b15b3ff', 3, 'a'),
(5, 'walikelas9', '6e7ff666af42bea2120299a541ab715a', 4, 'walikelas9'),
(6, 'walikelas7', '6462d52a53b60aa78f2e6bc102c558de', 5, 'walikelas7'),
(19, '2015230016', '7c79faebf28f0eca3422271d1afe9f99', 1, 'siswa'),
(20, 'walikelas7c', '853ffde5aafc676f8c4a6eeceaaea123', 5, 'c'),
(21, 'walikelas7a', 'a93c028d66b9f8b38c6f1e14b58e5b84', 5, 'a'),
(22, 'walikelass', '29d2566bb2cd96e26659f021c8ead9b7', 5, 'b'),
(23, '2015230098', '277137b82ebcb9a4d1160d76eea79bfc', 1, 'siswa'),
(24, 'jordan', 'd16d377af76c99d27093abc22244b342', 5, 'c'),
(25, '121231750038160452', 'dcdc6f8c5ddeba2fdc9664ef8aa3e963', 1, 'siswa'),
(26, '2015230078', '6430f6923aeef2bd997f4c10df71898e', 1, 'siswa'),
(27, '2015230055', 'db2b2d49883dff7698fa27bd630d73b1', 1, 'siswa'),
(28, '2015230056', '03aaf24f3b23c4150d75d40b330c9743', 1, 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(5) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL,
  `kkm` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `mata_pelajaran`, `kkm`) VALUES
(1, 'Pendidikan Agama Islam (PAI)', 60),
(2, 'Bahasa Indonesia', 60),
(3, 'Bahasa Inggris', 65),
(4, 'Bahasa Arab', 60),
(5, 'Matematika', 60),
(6, 'Ilmu Pengetahuan Alam', 60),
(7, 'Ilmu Pengetahuan Sosial', 60),
(8, 'Aqidah Akhlak', 65),
(9, 'Fiqih', 60),
(10, 'Alqur\'an Hadist', 65),
(11, 'Sejarah Kebudayaan Islam', 65),
(12, 'Seni Budaya', 60),
(13, 'Penjaskes', 60);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(5) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `kelas` int(2) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `status_siswa` varchar(10) NOT NULL,
  `nama_orangtua` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nisn`, `nis`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `kelas`, `alamat`, `provinsi`, `status_siswa`, `nama_orangtua`) VALUES
(1, '24671709', '121231750038150437', 'FEBRILIYANTI', 'JAKARTA', '06/02/2003', 'PEREMPUAN', 8, 'JL. SWAKARSA IV RT 009/03, PONDOK KELAPA\r\n', 'DKI Jakarta', 'AKTIF', ''),
(2, '26276901', '121231750038150438', 'IKHSAN FATHAN RAMADANI', 'BEKASI', '23/11/2002', 'LAKI-LAKI', 8, 'JL. PONDOK KELAPA NO. 17B\r\n', 'DKI Jakarta', 'AKTIF', ''),
(3, '4743122', '121231750038150439', 'JIHAN NURDINI ROHMAH', 'JAKARTA', '25/09/2000', 'PEREMPUAN', 8, 'JL. MELATI II RT 004/02\r\n', 'Jawa Barat', 'AKTIF', ''),
(4, '2508611', '121231750038140410', 'FAJAR MEI SYAFRUDIN', 'BANJARNEGARA', '24/05/2000', 'LAKI-LAKI', 9, 'JL. PONDOK KELAPA SELATAN RT. 010/05 NO. 09\r\n', 'DKI Jakarta', 'AKTIF', ''),
(5, '18369538', '121231750038140411', 'FARHAN MUZAKI', 'BEKASI', '22/12/2001', 'LAKI-LAKI', 9, 'JL. H. NADIH NO. 07 RT. 003/02', 'JAWA BARAT', 'AKTIF', ''),
(6, '21218788', '121231750038140414', 'KHAIRUL ALWAN ALBALDAN', 'JAKARTA', '19/01/2002', 'LAKI-LAKI', 9, 'JL.MASJID I RT 005/12 NO.35B', 'DKI Jakarta', 'AKTIF', ''),
(8, '48692792', '121231750038160453', 'ARIEF RACHMAN', 'JAKARTA', '08/12/2004', 'LAKI-LAKI', 7, 'JL. SWAKARSA I RT.004/03', 'DKI Jakarta', 'AKTIF', ''),
(9, '5127895', '121231750038160454', 'DEA AMANDA', 'BANDUNG', '23/11/2003', 'PEREMPUAN', 7, 'KOMP DKI BLOK PI/16 RT 009/02', 'DKI Jakarta', 'AKTIF', ''),
(19, '2015230056', '2015230056', 'Jordan Nur Akbar', 'Jakarta', '1998-04-07', 'laki-laki', 7, 'Jl. Serdang Raya, Kemayoran JKT Pusat', 'DKI Jakarta', 'Aktif', 'Suryaman');

-- --------------------------------------------------------

--
-- Table structure for table `walimurid`
--

CREATE TABLE `walimurid` (
  `id` int(10) NOT NULL,
  `nama_walimurid` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nis` varchar(50) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_nilai`
--
ALTER TABLE `input_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `walimurid`
--
ALTER TABLE `walimurid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `input_nilai`
--
ALTER TABLE `input_nilai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `walimurid`
--
ALTER TABLE `walimurid`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
