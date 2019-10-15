-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Okt 2015 pada 20.11
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_newqa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_approv`
--

CREATE TABLE IF NOT EXISTS `t_approv` (
  `no_project` varchar(30) NOT NULL,
  `rft` varchar(30) NOT NULL,
  `rfc` varchar(30) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `pic_it` varchar(50) NOT NULL,
  `ket` varchar(1000) NOT NULL,
  `precentage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dev`
--

CREATE TABLE IF NOT EXISTS `t_dev` (
  `no_project` varchar(30) NOT NULL,
  `rft` varchar(30) NOT NULL,
  `rfc` varchar(20) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `pic_it` varchar(50) NOT NULL,
  `ket` varchar(1000) NOT NULL,
  `percentage` varchar(20) NOT NULL,
  `approval` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_lpm`
--

CREATE TABLE IF NOT EXISTS `t_lpm` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `ket` varchar(1000) NOT NULL,
  `div_lain` varchar(10) NOT NULL,
  `div_it` varchar(10) NOT NULL,
  `jenis` varchar(3) NOT NULL,
  `sub` varchar(3) NOT NULL,
  `modul_fitur` varchar(1000) NOT NULL,
  `div_pengaju` varchar(50) NOT NULL,
  `angg_pengaju` varchar(1000) NOT NULL,
  `grup_it` varchar(50) NOT NULL,
  `angg_it` varchar(1000) NOT NULL,
  `pic_it` varchar(50) NOT NULL,
  `angg_pic` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_lpm`
--

INSERT INTO `t_lpm` (`id`, `project_name`, `ket`, `div_lain`, `div_it`, `jenis`, `sub`, `modul_fitur`, `div_pengaju`, `angg_pengaju`, `grup_it`, `angg_it`, `pic_it`, `angg_pic`, `date`) VALUES
(1, 'SI QA', 'blabla', 'RBB', 'NRBB', 'A', '3', 'gini', 'IT', '', 'QAS', '', 'Adong', '', '2015-10-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_noproj`
--

CREATE TABLE IF NOT EXISTS `t_noproj` (
  `no_project` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_qa`
--

CREATE TABLE IF NOT EXISTS `t_qa` (
  `rft` varchar(30) NOT NULL,
  `tgl_pengerjaan` date NOT NULL,
  `progress` varchar(50) NOT NULL,
  `pic_it` varchar(50) NOT NULL,
  `tgl_uat` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgl_implemen` date NOT NULL,
  `catatan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_approv`
--
ALTER TABLE `t_approv`
  ADD PRIMARY KEY (`no_project`);

--
-- Indexes for table `t_dev`
--
ALTER TABLE `t_dev`
  ADD PRIMARY KEY (`no_project`);

--
-- Indexes for table `t_lpm`
--
ALTER TABLE `t_lpm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_noproj`
--
ALTER TABLE `t_noproj`
  ADD PRIMARY KEY (`no_project`);

--
-- Indexes for table `t_qa`
--
ALTER TABLE `t_qa`
  ADD PRIMARY KEY (`rft`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_lpm`
--
ALTER TABLE `t_lpm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
