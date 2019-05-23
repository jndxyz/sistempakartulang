-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2019 at 07:28 PM
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
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id_diagnosa` int(2) NOT NULL,
  `kode_gejala` varchar(3) NOT NULL,
  `kode_penyakit` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kode` varchar(3) NOT NULL,
  `gejala` varchar(50) NOT NULL,
  `kondisi_ya` varchar(3) NOT NULL,
  `kondisi_tidak` varchar(3) NOT NULL,
  `mulai` varchar(1) NOT NULL,
  `selesai` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode`, `gejala`, `kondisi_ya`, `kondisi_tidak`, `mulai`, `selesai`) VALUES
('G01', 'Sakit pada bagian pinggul', 'G03', 'G02', 'Y', 'N'),
('G02', 'Sakit kepala bagian kepala tertentu', 'G07', 'G08', 'N', 'N'),
('G03', 'Sakit pada bagian kaki dan bahu', 'G05', 'G04', 'N', 'N'),
('G04', 'Sakit pada bagian kaki dan bahu', 'G05', 'G06', 'N', 'N'),
('G05', 'Mati rasa pada bagian kaki', 'G06', 'G06', 'N', 'N'),
('G06', 'Rasa sakit yang menjalar', 'P02', 'P03', 'N', 'N'),
('G07', 'asdwadasd', 'G08', 'G09', 'N', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kode` varchar(3) NOT NULL,
  `penyakit` varchar(50) NOT NULL,
  `penjelasan` varchar(250) NOT NULL,
  `solusi` varchar(250) NOT NULL,
  `mulai` varchar(1) NOT NULL,
  `selesai` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kode`, `penyakit`, `penjelasan`, `solusi`, `mulai`, `selesai`) VALUES
('P01', 'Cervical Syndrome', 'Penyakit yang menyerang tulang belakang pada bagian cervical atau bagian belakang leher', '.....', '', ''),
('P02', 'Heria Nukleus Pulposus', 'Atau yang sering disebut dengan \"Saraf Kejepit\" adalah kondisi ketika bantalan atau cakram di antara vertebrata (tulang belakang) keluar dari posisi semula dan menjepit saraf yang berada di belakangnya', '', '', ''),
('P03', 'Low Back Pain', 'atau nyeri punggung bawah bisa dialami siapa saja. Pada prinsipnya, LBP merupakan nyeri yang dirasakan pada bagian punggung bawah yang dapat merupakan nyeri lokal (hanya di bagian pinggang atau lumbal), nyeri radikuler (menjalar ke tungkai bagian baw', '', '', ''),
('P04', 'Salah bantal', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `kode_gejala` (`kode_gejala`),
  ADD KEY `kode_penyakit` (`kode_penyakit`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kode`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD CONSTRAINT `diagnosa_ibfk_1` FOREIGN KEY (`kode_gejala`) REFERENCES `gejala` (`kode`),
  ADD CONSTRAINT `diagnosa_ibfk_2` FOREIGN KEY (`kode_penyakit`) REFERENCES `penyakit` (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
