-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 11:22 AM
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
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `idnilai` int(11) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `idpel` int(3) NOT NULL,
  `harian` int(3) DEFAULT NULL,
  `uts1` int(3) DEFAULT NULL,
  `pas1` int(3) DEFAULT NULL,
  `uts2` int(3) DEFAULT NULL,
  `pas2` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`idnilai`, `nis`, `idpel`, `harian`, `uts1`, `pas1`, `uts2`, `pas2`) VALUES
(1, '1920229010029', 1, 80, 75, 83, 85, NULL),
(2, '1920229010029', 2, 88, 75, 69, 77, NULL),
(3, '1920229010029', 3, 75, 79, 88, 67, NULL),
(4, '1920229010029', 4, 67, 78, 86, 90, NULL),
(5, '1920229010029', 5, 87, 67, 78, 86, NULL),
(6, '1920229010029', 6, 87, 77, 67, 92, NULL),
(7, '1920229010029', 7, 68, 76, 87, 83, NULL),
(8, '1920229010029', 8, 77, 68, 80, 87, NULL),
(9, '1920229010029', 9, 67, 75, 86, 77, NULL),
(10, '1920229010029', 10, 87, 66, 80, 90, NULL),
(11, '1920229010029', 11, 67, 75, 86, 77, NULL),
(12, '1920229010030', 1, 75, 70, 83, 67, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `idpel` int(3) NOT NULL,
  `namapel` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`idpel`, `namapel`) VALUES
(1, 'Pendidikan Agama Islam'),
(2, 'Bahasa Indonesia'),
(3, 'Pendidikan Pancasila dan Kewarganegaraan'),
(4, 'Ilmu Pengetahuan Alam dan Sosial'),
(5, 'Matematika'),
(6, 'Pendidikan Jasmani, Olahraga, dan Kesehatan'),
(7, 'Seni Rupa'),
(8, 'Seni Musik'),
(9, 'Seni Tari'),
(10, 'Seni Teater'),
(11, 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(15) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `umur` int(2) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `agama` set('Islam','Protestan','Katolik','Hindu','Buddha','Konghuchu') DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `umur`, `gender`, `agama`, `kelas`) VALUES
('1920229010029', 'ALMA FILZAH MARITZA', 10, 'P', 'Islam', '4B'),
('1920229010030', 'ANGELIA FITRI', 10, 'P', 'Islam', '4B'),
('1920229010031', 'AULIA RAHMA', 9, 'P', 'Islam', '4B'),
('1920229010032', 'BELVANA VARISHA SHOUMIE ROCHAENDY', 11, 'P', 'Protestan', '4B'),
('1920229010033', 'CAKRA', 10, 'L', 'Hindu', '4B'),
('1920229010034', 'DILA AL HUSNA', 9, 'P', 'Islam', '4B'),
('1920229010035', 'GILANG ANGGI PRATAMA PUTRA', 11, 'L', 'Islam', '4B'),
('1920229010036', 'INDAH ANGGRAENI HALAWA', 10, 'P', 'Islam', '4B'),
('1920229010037', 'KAYLA ASYIFA OKTAVIA', 9, 'P', 'Islam', '4B'),
('1920229010038', 'KHANSA SITI AULIA', 9, 'P', 'Islam', '4B'),
('1920229010039', 'LIONEL ALVARO ILHAM', 10, 'L', 'Islam', '4B'),
('1920229010040', 'MEYKA PUTRI JATI', 10, 'P', 'Islam', '4B'),
('1920229010041', 'MUHAMAD LUCKY ADI PUTRA', 11, 'L', 'Islam', '4B'),
('1920229010043', 'MUHAMMAD FAIQ AL GHIFARI', 9, 'L', 'Islam', '4B'),
('1920229010045', 'MUHAMMAD RIZKI SOPIAN', 11, 'L', 'Islam', '4B'),
('1920229010046', 'NABILLA PUTRI NOVIANTI', 10, 'P', 'Islam', '4B'),
('1920229010047', 'NAIMA MAUDY HASTARI', 9, 'P', 'Islam', '4B'),
('1920229010048', 'NATASHA RATU AYU', 10, 'P', 'Protestan', '4B'),
('1920229010049', 'PRASETYA ARNE NURMAULANI', 11, 'P', 'Islam', '4B'),
('1920229010050', 'RAMDAN SAHRONI', 10, 'L', 'Islam', '4B'),
('1920229010051', 'RIVERA AIREEN MYEASHA', 10, 'P', 'Protestan', '4B'),
('1920229010052', 'SALMAN PARISI', 11, 'L', 'Islam', '4B'),
('1920229010054', 'TANIA APRILIA', 9, 'P', 'Islam', '4B'),
('1920229010055', 'ZAHIRA FEBRIYANI', 10, 'P', 'Islam', '4B'),
('1920229010056', 'ZAIYAN AMALINA KHAIRIAH', 10, 'P', 'Islam', '4B'),
('2021229020057', 'KIMORA BALQIS MARINA SRINIRA', 11, 'P', 'Islam', '4B');

-- --------------------------------------------------------

--
-- Table structure for table `smt1`
--

CREATE TABLE `smt1` (
  `nis` varchar(15) NOT NULL,
  `pai` int(3) DEFAULT NULL,
  `bind` int(3) DEFAULT NULL,
  `ppkn` int(3) DEFAULT NULL,
  `ipas` int(3) DEFAULT NULL,
  `mtk` int(3) DEFAULT NULL,
  `pjok` int(3) DEFAULT NULL,
  `rupa` int(3) DEFAULT NULL,
  `musk` int(3) DEFAULT NULL,
  `tari` int(3) DEFAULT NULL,
  `tetr` int(3) DEFAULT NULL,
  `bing` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smt1`
--

INSERT INTO `smt1` (`nis`, `pai`, `bind`, `ppkn`, `ipas`, `mtk`, `pjok`, `rupa`, `musk`, `tari`, `tetr`, `bing`) VALUES
('1920229010029', 80, 79, 77, 85, 83, 80, 78, 88, 76, 78, 75);

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
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`idnilai`),
  ADD KEY `nis` (`nis`),
  ADD KEY `idpel` (`idpel`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`idpel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
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
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idnilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `idpel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`idpel`) REFERENCES `pelajaran` (`idpel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
