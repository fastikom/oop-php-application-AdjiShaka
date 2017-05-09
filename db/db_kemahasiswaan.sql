-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 08:48 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kemahasiswaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `no_mhs` char(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kd_prodi` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`no_mhs`, `nama`, `alamat`, `kd_prodi`) VALUES
('02310110', 'Naili Suroya', 'Kendal', 'SH02'),
('02311110', 'Imam Arfianto', 'Wonosobo', 'T01'),
('02311111', 'Adji Nur Falkhan', 'Banjarnegara', 'T01'),
('02311113', 'Zainuddin', 'Kudus', 'T01'),
('02311114', 'Fajar Khoiranto', 'Wonosobo', 'T01'),
('02311115', 'Andi Julianto', 'Wonosobo', 'T01'),
('02311116', 'Siti Kholifah', 'Wonosobo', 'T01'),
('02312110', 'Tsania Fauzia', 'Magelang', 'FK03'),
('02312111', 'Asni Farida', 'Wonosobo', 'FK03'),
('02313111', 'Lailatul Firdaus', 'Purworejo', 'SH01'),
('02313112', 'Firdatus Soimah', 'Purworejo', 'SH01'),
('02313113', 'Ika Desi Rahayu', 'Wonosobo', 'SH01'),
('02321110', 'Ari Nur Aziz', 'Banjarnegara', 'SH01'),
('02331110', 'Bella Safina', 'Banarnegara', 'E02'),
('02331111', 'Laili Nafiah', 'Wonosobo', 'E02'),
('02341110', 'Widyaning Tyas', 'Banjarnegara', 'E01'),
('02341111', 'Rima Dayanti', 'Banjarnegara', 'E01'),
('02351110', 'Adi Nugroho', 'Banjarnegara', 'T02'),
('02351111', 'Sulistiawan', 'Banjarnegara', 'T02'),
('02351112', 'Haryanti', 'Banjarnegara', 'T02'),
('02351113', 'Adi Irzatiawan', 'Magelang', 'T02'),
('02351114', 'Umam Zakaria', 'Wonosobo', 'T02'),
('02361110', 'Aktiari Defana', 'Wonosobo', 'S01'),
('02371110', 'Fitroh Alimatul Jannah', 'Tangerang', 'FK01'),
('02371111', 'Dewi Aisyah', 'Surabaya', 'FK01'),
('02371112', 'Nur Rofiah', 'Magelang', 'FK01'),
('02381110', 'Assa Kamalia', 'Kudus', 'T03'),
('02391110', 'Siti Naimatul Jannah', 'Pati', 'FK02'),
('123456', 'saya', 'dieng', 'SH01');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kd_prodi` char(4) NOT NULL,
  `prodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kd_prodi`, `prodi`) VALUES
('E01', 'Ekonomi'),
('FK01', 'P. Agama Islam'),
('FK02', 'P. Fisika'),
('FK03', 'PGMI'),
('FK04', 'PB Arab'),
('S01', 'Sastra Inggris'),
('SH01', 'Perbankan Syariah'),
('SH02', 'Akhwalus Syakhsiyah'),
('T01', 'Teknik Informatika'),
('T02', 'Teknik Mesin'),
('T03', 'Teknik Arsitektur');

-- --------------------------------------------------------

--
-- Table structure for table `propinsi`
--

CREATE TABLE `propinsi` (
  `kd_propinsi` char(3) NOT NULL,
  `propinsi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propinsi`
--

INSERT INTO `propinsi` (`kd_propinsi`, `propinsi`) VALUES
('B01', 'Banten'),
('j01', 'Jawa Tengah'),
('j02', 'Jawa Timur'),
('j03', 'Jawa Barat'),
('K01', 'Kalimantan Tengah'),
('K02', 'Kalimantan Barat'),
('K03', 'Kalimantan Timur'),
('K04', 'Kalimantan Selatan'),
('S01', 'Sumatra Utara'),
('S02', 'Sumatra Timur'),
('S03', 'Sumatra Barat'),
('S04', 'Sumatra Selatan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`no_mhs`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kd_prodi`);

--
-- Indexes for table `propinsi`
--
ALTER TABLE `propinsi`
  ADD PRIMARY KEY (`kd_propinsi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
