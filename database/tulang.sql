-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2019 at 09:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tulang`
--

-- --------------------------------------------------------

--
-- Table structure for table `cegah`
--

CREATE TABLE `cegah` (
  `id` int(2) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cegah`
--

INSERT INTO `cegah` (`id`, `judul`, `isi`) VALUES
(2, 'qweqeqweqw123123123', 'asdasdasdass		123123123123						'),
(3, '123123123', '123123qwwse1231'),
(4, '123123', 'qweqweqweadasd3123123');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kode` varchar(3) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kondisi_ya` varchar(3) NOT NULL,
  `kondisi_tidak` varchar(3) NOT NULL,
  `kode_penyakitY` varchar(3) NOT NULL,
  `kode_penyakitN` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode`, `keterangan`, `kondisi_ya`, `kondisi_tidak`, `kode_penyakitY`, `kode_penyakitN`) VALUES
('G01', 'Sakit pada bagian pinggul', 'G03', 'G02', 'P00', '0'),
('G02', 'Sakit kepala bagian tertentu', 'G07', 'G08', 'P00', '0'),
('G03', 'Spasme otot atau rasa nyeri akibat kesemutan', 'G05', 'G04', 'P00', '0'),
('G04', 'Sakit pada bagian kaki dan bahu', 'G05', 'G06', 'P00', '0'),
('G05', 'Mati rasa pada bagian kaki', 'G06', 'G06', 'P00', '0'),
('G06', 'Sakit terasa menjalar', 'G00', 'G00', 'P02', 'P03');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(2) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `judul`, `isi`) VALUES
(6, '21313123qweqweqwe', '123123wqeweqw111111111111111111111111112222222222222222221111																'),
(7, '123123', '123123qweqweqweqsadsdasd');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(2) NOT NULL,
  `username` varchar(10) NOT NULL,
  `sandi` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id`, `username`, `sandi`, `nama`) VALUES
(1, 'admin1', 'admin1', 'Admin1');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kode` varchar(3) NOT NULL,
  `penyakit` varchar(50) NOT NULL,
  `penjelasan` varchar(250) NOT NULL,
  `solusi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kode`, `penyakit`, `penjelasan`, `solusi`) VALUES
('P01', 'Cervical Syndrome', 'Penyakit yang menyerang tulang belakang pada bagian cervical atau bagian belakang leher', '.....'),
('P02', 'Heria Nukleus Pulposus', 'sering disebut dengan \"Saraf Kejepit\" adalah kondisi ketika bantalan atau cakram di antara vertebrata (tulang belakang) keluar dari posisi semula dan menjepit saraf yang berada di belakangnya', 'Makan 3x sehari'),
('P03', 'Low Back Pain', 'atau nyeri punggung bawah bisa dialami siapa saja. Pada prinsipnya, LBP merupakan nyeri yang dirasakan pada bagian punggung bawah yang dapat merupakan nyeri lokal (hanya di bagian pinggang atau lumbal), nyeri radikuler (menjalar ke tungkai bagian baw', 'Makan terus'),
('P04', 'Salah bantal', '', ''),
('P05', '123', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `rawat`
--

CREATE TABLE `rawat` (
  `id` int(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawat`
--

INSERT INTO `rawat` (`id`, `judul`, `isi`) VALUES
(1, 'qweqweqwe123123132', 'qweqweqwqw123123123123								'),
(2, 'qweqweasdq1w3ea', 'qwe123123qawwsdsqwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cegah`
--
ALTER TABLE `cegah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `rawat`
--
ALTER TABLE `rawat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cegah`
--
ALTER TABLE `cegah`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rawat`
--
ALTER TABLE `rawat`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
