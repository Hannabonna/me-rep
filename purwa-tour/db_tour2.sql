-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Mei 2016 pada 07.41
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tour2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `infopar`
--

CREATE TABLE IF NOT EXISTS `infopar` (
  `kota` varchar(30) NOT NULL,
  `namatempat` varchar(50) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`kota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `itinerary`
--

CREATE TABLE IF NOT EXISTS `itinerary` (
  `kodepaket` int(10) NOT NULL,
  `tujuan` text NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paketwisata`
--

CREATE TABLE IF NOT EXISTS `paketwisata` (
  `kodepaket` int(10) NOT NULL AUTO_INCREMENT,
  `kriteria` varchar(8) NOT NULL,
  `namapaket` varchar(30) NOT NULL,
  `tujuan` text NOT NULL,
  `lama` varchar(15) NOT NULL,
  `hari` varchar(8) NOT NULL,
  `fasilitas` text NOT NULL,
  `penginapan` varchar(30) NOT NULL,
  `kapasitas` varchar(10) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`kodepaket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `no_pesan` int(10) NOT NULL AUTO_INCREMENT,
  `namapaket` varchar(30) NOT NULL,
  `kapasitas` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `notlp` varchar(20) NOT NULL,
  `tanggalpergi` date NOT NULL,
  `totalbayar` varchar(30) NOT NULL,
  PRIMARY KEY (`no_pesan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
