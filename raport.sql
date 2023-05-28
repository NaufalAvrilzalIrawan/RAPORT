-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 03:44 PM
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
('1920229010038', 'KHANSA SITI AULIA', 11, 'P', 'Islam', '4B'),
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
('1920229010052', 'SALMAN PARISI', 10, 'L', 'Islam', '4B'),
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
('1920229010029', 80, 79, 77, 85, 83, 80, 78, 88, 76, 78, 75),
('1920229010030', 80, 88, 89, 90, 95, 75, 82, 77, 86, 78, 85),
('1920229010046', 80, 88, 78, 90, 92, 89, 88, 78, 76, 74, 80),
('1920229010031', 79, 80, 90, 80, 75, 67, 80, 78, 84, 76, 85),
('1920229010032', 75, 80, 70, 90, 97, 78, 82, 78, 80, 75, 87),
('2021229020057', 89, 95, 87, 80, 82, 90, 78, 90, 97, 78, 80),
('1920229010033', 75, 86, 90, 80, 77, 92, 80, 79, 92, 77, 70),
('1920229010034', 90, 85, 78, 89, 76, 93, 82, 79, 87, 86, 75),
('1920229010035', 95, 87, 79, 79, 67, 78, 89, 49, 87, 77, 76),
('1920229010036', 85, 78, 77, 89, 90, 78, 85, 75, 80, 76, 87),
('1920229010037', 80, 78, 89, 88, 79, 85, 90, 78, 85, 80, 78),
('1920229010038', 85, 83, 86, 80, 87, 97, 87, 76, 85, 80, 79),
('1920229010039', 78, 80, 82, 77, 75, 95, 76, 78, 85, 87, 80),
('1920229010040', 80, 87, 94, 85, 83, 78, 80, 77, 84, 90, 95),
('1920229010041', 84, 75, 80, 76, 80, 78, 94, 89, 85, 83, 90),
('1920229010043', 90, 85, 79, 78, 80, 85, 80, 78, 90, 76, 86),
('1920229010045', 83, 85, 75, 80, 79, 86, 78, 97, 79, 95, 90),
('1920229010047', 80, 78, 80, 85, 90, 82, 87, 84, 78, 84, 85),
('1920229010049', 83, 90, 88, 76, 79, 80, 85, 88, 90, 87, 78),
('1920229010048', 80, 76, 89, 76, 79, 87, 77, 90, 87, 96, 90),
('1920229010050', 90, 86, 69, 75, 80, 89, 84, 78, 70, 77, 75),
('1920229010051', 78, 80, 98, 85, 83, 90, 83, 75, 87, 92, 90),
('1920229010052', 85, 87, 83, 75, 86, 80, 97, 85, 78, 67, 90),
('1920229010054', 80, 85, 78, 85, 75, 89, 77, 79, 86, 98, 90),
('1920229010055', 76, 98, 86, 89, 80, 75, 78, 83, 89, 76, 78),
('1920229010056', 90, 86, 89, 85, 89, 78, 90, 77, 95, 81, 87);

-- --------------------------------------------------------

--
-- Table structure for table `smt2`
--

CREATE TABLE `smt2` (
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
-- Dumping data for table `smt2`
--

INSERT INTO `smt2` (`nis`, `pai`, `bind`, `ppkn`, `ipas`, `mtk`, `pjok`, `rupa`, `musk`, `tari`, `tetr`, `bing`) VALUES
('1920229010030', 80, 88, 89, 90, 95, 75, 82, 77, 86, 78, 85),
('1920229010046', 80, 88, 78, 90, 92, 89, 88, 78, 76, 74, 80),
('1920229010031', 79, 80, 90, 80, 75, 67, 80, 78, 84, 76, 85),
('1920229010032', 75, 80, 70, 90, 97, 78, 82, 78, 80, 75, 87),
('2021229020057', 89, 95, 87, 80, 82, 90, 78, 90, 97, 78, 80),
('1920229010033', 75, 86, 90, 80, 77, 92, 80, 79, 92, 77, 70),
('1920229010034', 90, 85, 78, 89, 76, 93, 82, 79, 87, 86, 75),
('1920229010035', 95, 87, 79, 79, 67, 78, 89, 49, 87, 77, 76),
('1920229010036', 85, 78, 77, 89, 90, 78, 85, 75, 80, 76, 87),
('1920229010037', 80, 78, 89, 88, 79, 85, 90, 78, 85, 80, 78),
('1920229010038', 82, 77, 80, 79, 85, 95, 90, 80, 87, 78, 70),
('1920229010039', 78, 80, 82, 77, 75, 95, 76, 78, 85, 87, 80),
('1920229010040', 80, 87, 94, 85, 83, 78, 80, 77, 84, 90, 95),
('1920229010041', 84, 75, 80, 76, 80, 78, 94, 89, 85, 83, 90),
('1920229010043', 90, 85, 79, 78, 80, 85, 80, 78, 90, 76, 86),
('1920229010045', 83, 85, 75, 80, 79, 86, 78, 97, 79, 95, 90),
('1920229010047', 80, 78, 80, 85, 90, 82, 87, 84, 78, 84, 85),
('1920229010049', 83, 90, 88, 76, 79, 80, 85, 88, 90, 87, 78),
('1920229010048', 80, 76, 89, 76, 79, 87, 77, 90, 87, 96, 90),
('1920229010050', 90, 86, 69, 75, 80, 89, 84, 78, 70, 77, 75),
('1920229010051', 78, 80, 98, 85, 83, 90, 83, 75, 87, 92, 90),
('1920229010052', 85, 87, 83, 75, 86, 80, 97, 85, 78, 67, 90),
('1920229010054', 80, 85, 78, 85, 75, 89, 77, 79, 86, 98, 90),
('1920229010055', 76, 98, 86, 89, 80, 75, 78, 83, 89, 76, 78),
('1920229010056', 93, 90, 85, 90, 97, 83, 89, 81, 97, 85, 85),
('1920229010029', 90, 79, 85, 78, 95, 78, 89, 75, 78, 79, 87);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kid` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kid`, `password`, `nama`, `role`) VALUES
('1', 'jayaindonesia45', 'Naufal Avrilzal Irawan', 'Admin'),
('123456789', '123', 'Asep Fernandes', 'Guru'),
('1920229010029', 'alma', 'ALMA FILZAH MARITZA', 'Siswa'),
('1920229010030', 'angelia', 'ANGELIA FITRI', 'Siswa'),
('1920229010031', 'aulia', 'AULIA RAHMA', 'Siswa'),
('1920229010032', 'belvana', 'BELVANA VARISHA SHOUMIE ROCHAENDY', 'Siswa'),
('1920229010033', 'cakra', 'CAKRA', 'Siswa'),
('1920229010034', 'dila', 'DILA AL HUSNA', 'Siswa'),
('1920229010035', 'gilang', 'GILANG ANGGI PRATAMA PUTRA', 'Siswa'),
('1920229010036', 'indah', 'INDAH ANGGRAENI HALAWA', 'Siswa'),
('1920229010037', 'kayla', 'KAYLA ASYIFA OKTAVIA', 'Siswa'),
('1920229010038', 'khansa', 'KHANSA SITI AULIA', 'Siswa'),
('1920229010039', 'lionel', 'LIONEL ALVARO ILHAM', 'Siswa'),
('1920229010040', 'meyka', 'MEYKA PUTRI JATI', 'Siswa'),
('1920229010041', 'lucky', 'MUHAMAD LUCKY ADI PUTRA', 'Siswa'),
('1920229010043', 'faiq', 'MUHAMMAD FAIQ AL GHIFARI', 'Siswa'),
('1920229010045', 'rizki', 'MUHAMMAD RIZKI SOPIAN', 'Siswa'),
('1920229010046', 'nabilla', 'NABILLA PUTRI NOVIANTI', 'Siswa'),
('1920229010047', 'naima', 'NAIMA MAUDY HASTARI', 'Siswa'),
('1920229010048', 'natasha', 'NATASHA RATU AYU', 'Siswa'),
('1920229010049', 'prasetya', 'PRASETYA ARNE NURMAULANI', 'Siswa'),
('1920229010050', 'ramdan', 'RAMDAN SAHRONI', 'Siswa'),
('1920229010051', 'rivera', 'RIVERA AIREEN MYEASHA', 'Siswa'),
('1920229010052', 'salman', 'SALMAN PARISI', 'Siswa'),
('1920229010054', 'tania', 'TANIA APRILIA', 'Siswa'),
('1920229010055', 'zahira', 'ZAHIRA FEBRIYANI', 'Siswa'),
('1920229010056', 'zaiyan', 'ZAIYAN AMALINA KHAIRIAH', 'Siswa'),
('2021229020057', 'kimora', 'KIMORA BALQIS MARINA SRINIRA', 'Siswa'),
('4', '145', 'TNVR', 'Admin');

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
  ADD PRIMARY KEY (`kid`);

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
