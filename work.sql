-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2017 at 05:58 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `work`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `id_pelamar` int(30) NOT NULL,
  `id_perusahaan` int(30) NOT NULL,
  `file` varchar(100) NOT NULL,
`id_cv` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id_pelamar`, `id_perusahaan`, `file`, `id_cv`) VALUES
(1, 2, 'telkom logo (2).png', 9),
(1, 2, 'Ivan Crisnanda_3TKJ2_22_Remidi Trobjar.docx', 10),
(1, 1, 'Ivan Crisnanda_3TKJ2_22_Remidi Trobjar.docx', 11),
(126, 8, 'Curriculum Vitae.pdf', 12),
(126, 8, 'BAB 5.docx', 13),
(127, 9, '5b68f903-fed3-4f45-bedf-24db3d9d2d24.docx', 14);

-- --------------------------------------------------------

--
-- Table structure for table `login_work`
--

CREATE TABLE IF NOT EXISTS `login_work` (
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE IF NOT EXISTS `lowongan` (
  `id_perusahaan` int(11) NOT NULL,
`id_lowongan` int(20) NOT NULL,
  `posisi` varchar(30) NOT NULL,
  `lowongan` text NOT NULL,
  `syarat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_perusahaan`, `id_lowongan`, `posisi`, `lowongan`, `syarat`) VALUES
(1, 3, 'web developer', 'min.32 th laki laki', 'SMA'),
(2, 12, 'Hrd', 'minimal 19th laki laki berdomisili di jakarta mampu bekerja dengan team', 'smk'),
(3, 13, 'Web developer', 'Laki-laki', 'SMK'),
(1, 14, 'Programmer', 'minimal 19th laki laki berdomisili di jakarta mampu bekerja dengan team', 'SMK'),
(9, 15, 'IT SUPPORT', 'Min. 20th maks. 30th,\r\nberpenampilan rapi dan mampu berkerja dengan team', 'SMK');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE IF NOT EXISTS `pelamar` (
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
`id_pelamar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`nama`, `ttl`, `kelamin`, `alamat`, `email`, `password`, `id_pelamar`) VALUES
('ivan crisnanda', '1998-07-15', 'Laki-laki', 'jl.diponegoro 1/13', 'ivancrisnanda1@gmail.com', 'ivan1998', 1),
('ivan crisnanda', '2000-01-01', 'perempuan', 'gribig g5e 24', 'cc@cc.com', 'fitra2000', 125),
('vadis', '0000-00-00', 'laki laki', 'malang', 'vadis@vadis.com', 'vadis', 126),
('Crisnanda Anggi', '0000-00-00', 'Laki-Laki', 'Jl. Diponegoro/13 Kota Kediri', 'crisnanda@gmail.com', 'crisnanda', 127);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE IF NOT EXISTS `perusahaan` (
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
`id_perusahaan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`nama`, `alamat`, `telp`, `email`, `password`, `id_perusahaan`) VALUES
('telkom', 'jl,hayam wuruk', '35476892', 'telkom@gmail.com', 'telkom1998', 1),
('sip', 'jl.diponegoro jakarta', '2147483647', 'sip@gmail.com', 'sip', 2),
('m2', 'malang', '08123435851', 'm2@m2.com', 'm2', 7),
('Microsoft', 'jl. danau towuti', '08123456789', 'microsoft@microsoft.com', 'microsoft', 8),
('PT. Solusindo', 'Jl. Panglima Sudirman/13 Jakar', '08217838397', 'solusindo@gmail.com', 'solusindo', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
 ADD PRIMARY KEY (`id_cv`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
 ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
 ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
 ADD PRIMARY KEY (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
MODIFY `id_cv` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
MODIFY `id_lowongan` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
MODIFY `id_pelamar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
