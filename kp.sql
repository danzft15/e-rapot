-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 07:55 PM
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
(7, '6937748651110112', '121231750038080007', 'RACHMATULLAH', 'Bekasi', '05/06/1970', 'LAKI-LAKI', 'Jl. Dr. Ratna, Bekasi', 'NON PNS', 'BAHASA INDONESIA', 'AKTIF'),
(8, '1458757659110022', '121231750038280008', 'DEDI JUNAEDI, S.Kom', 'Jakarta', '26/01/1979', 'LAKI-LAKI', 'Jl. Pangkalan Jati V', 'NON PNS', 'Teknologi Informasi', 'AKTIF'),
(9, '0134748650110063', '121231750038040009', 'H. NASRUDIN, S.Pd.I', 'Jakarta', '02/08/1970', 'LAKI-LAKI', 'Jl. Amil Abas Ujung No. 49', 'NON PNS', ' Rumpun Pendidikan Agama Islam', 'AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `input_nilai`
--

CREATE TABLE `input_nilai` (
  `id` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `kelas` int(5) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `pai` int(5) NOT NULL,
  `pai_huruf` varchar(30) NOT NULL,
  `kkm_pai` int(5) NOT NULL,
  `bindo` int(5) NOT NULL,
  `bindo_huruf` varchar(30) NOT NULL,
  `kkm_bindo` int(5) NOT NULL,
  `binggris` int(5) NOT NULL,
  `binggris_huruf` int(30) NOT NULL,
  `kkm_binggris` int(5) NOT NULL,
  `barab` int(5) NOT NULL,
  `barab_huruf` int(30) NOT NULL,
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
  `predikat` varchar(10) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `budi_pekerti` varchar(30) NOT NULL,
  `sakit` int(5) NOT NULL,
  `izin` int(5) NOT NULL,
  `alfa` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(4, 'walikelas8a', '4be5a293b3b9bf302d726d386062cd77', 3, 'a'),
(5, 'walikelas9', '6e7ff666af42bea2120299a541ab715a', 4, 'walikelas9'),
(6, 'walikelas7', '6462d52a53b60aa78f2e6bc102c558de', 5, 'walikelas7'),
(15, '2015230056', '03aaf24f3b23c4150d75d40b330c9743', 1, 'siswa'),
(16, '121231750038160455', '639b5e4e626a20117c79441e2d09a0a0', 1, 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(5) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `mata_pelajaran`) VALUES
(1, 'Pendidikan Agama Islam (PAI)'),
(2, 'Bahasa Indonesia'),
(3, 'Bahasa Inggris'),
(4, 'Bahasa Arab'),
(5, 'Matematika'),
(6, 'Ilmu Pengetahuan Alam'),
(7, 'Ilmu Pengetahuan Sosial'),
(8, 'Aqidah Akhlak'),
(9, 'Fiqih'),
(10, 'Alqur\'an Hadist'),
(11, 'Sejarah Kebudayaan Islam'),
(12, 'Seni Budaya'),
(13, 'Penjaskes');

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
  `status_siswa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nisn`, `nis`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `kelas`, `alamat`, `provinsi`, `status_siswa`) VALUES
(1, '24671709', '121231750038150437', 'FEBRILIYANTI', 'JAKARTA', '06/02/2003', 'PEREMPUAN', 8, 'JL. SWAKARSA IV RT 009/03, PONDOK KELAPA\r\n', 'DKI Jakarta', 'AKTIF'),
(2, '26276901', '121231750038150438', 'IKHSAN FATHAN RAMADANI', 'BEKASI', '23/11/2002', 'LAKI-LAKI', 8, 'JL. PONDOK KELAPA NO. 17B\r\n', 'DKI Jakarta', 'AKTIF'),
(3, '4743122', '121231750038150439', 'JIHAN NURDINI ROHMAH', 'JAKARTA', '25/09/2000', 'PEREMPUAN', 8, 'JL. MELATI II RT 004/02\r\n', 'Jawa Barat', 'AKTIF'),
(4, '2508611', '121231750038140410', 'FAJAR MEI SYAFRUDIN', 'BANJARNEGARA', '24/05/2000', 'LAKI-LAKI', 9, 'JL. PONDOK KELAPA SELATAN RT. 010/05 NO. 09\r\n', 'DKI Jakarta', 'AKTIF'),
(5, '18369538', '121231750038140411', 'FARHAN MUZAKI', 'BEKASI', '22/12/2001', 'LAKI-LAKI', 9, 'JL. H. NADIH NO. 07 RT. 003/02', 'JAWA BARAT', 'AKTIF'),
(6, '21218788', '121231750038140414', 'KHAIRUL ALWAN ALBALDAN', 'JAKARTA', '19/01/2002', 'LAKI-LAKI', 9, 'JL.MASJID I RT 005/12 NO.35B', 'DKI Jakarta', 'AKTIF'),
(7, '37714990', '121231750038160452', 'ANNISA ROKHIMAH', 'Karanganyar', '20/05/2003', 'PEREMPUAN', 7, 'JL . Pondok Kelapa ', 'DKI Jakarta', 'AKTIF'),
(8, '48692792', '121231750038160453', 'ARIEF RACHMAN', 'JAKARTA', '08/12/2004', 'LAKI-LAKI', 7, 'JL. SWAKARSA I RT.004/03', 'DKI Jakarta', 'AKTIF'),
(9, '5127895', '121231750038160454', 'DEA AMANDA', 'BANDUNG', '23/11/2003', 'PEREMPUAN', 7, 'KOMP DKI BLOK PI/16 RT 009/02', 'DKI Jakarta', 'AKTIF'),
(10, '2015230056', '2015230056', 'Jordan Nur Akbar', 'Jakarta', '1998-04-07', 'laki-laki', 7, 'Jl. Serdang Raya', 'DKI Jakarta', 'laki-laki'),
(11, '0041336362', '121231750038160455', 'DECKA ANDASTEFHANA', 'BEKASI', '2004-08-18', 'laki-laki', 7, 'HARAPAN JAYA RT 007/11 NO. 5', 'Kota Bekasi', 'laki-laki');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `input_nilai`
--
ALTER TABLE `input_nilai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
