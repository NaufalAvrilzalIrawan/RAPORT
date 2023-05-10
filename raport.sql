-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 01:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raport`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `kode` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`kode`, `nama`) VALUES
(1, 'Pendidikan Agama Islam'),
(2, 'Pendidikan Pancasila dan\r\nKewarganegaraan'),
(3, 'Bahasa Indonesia'),
(4, 'Matematika'),
(5, 'Ilmu Pengetahuan Alam '),
(6, 'Ilmu Pengetahuan Sosial'),
(7, 'Seni Budaya dan Prakarya'),
(8, 'Pendidikan Jasmani,\r\nOlahraga, dan Kesehatan'),
(9, 'Bahasa Sunda'),
(10, 'PLH'),
(11, 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `suswa`
--

CREATE TABLE `suswa` (
  `nis` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `alamat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suswa`
--

INSERT INTO `suswa` (`nis`, `nama`, `kelas`, `alamat`) VALUES
(212210420, 'Naufal Avrilzal Irawan', 'XI PPLG 1]', 'Jl. Caringin blk no. 16'),
(212238902, 'Adnan Pekerjaan Rumah', 'XI ELEKTRO', 'Jl. Aqua Sabotol No. 5000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nisnip` int(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nisnip`, `password`, `nama`, `role`) VALUES
(1, 'jayaindonesia45', 'Naufal Avrilzal Irawan', 'Admin'),
(123456789, '123', 'Asep Fernandes', 'Guru'),
(212210420, '420', 'Naufal Avrilzal Irawan', 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `suswa`
--
ALTER TABLE `suswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nisnip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
