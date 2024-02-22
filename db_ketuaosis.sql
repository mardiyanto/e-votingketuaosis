-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 10:12 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ketuaosis`
--

-- --------------------------------------------------------

--
-- Table structure for table `paslon`
--

CREATE TABLE `paslon` (
  `id_paslon` int(100) NOT NULL,
  `nama_paslon` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paslon`
--

INSERT INTO `paslon` (`id_paslon`, `nama_paslon`, `foto`) VALUES
(1, 'mardi', '1708590719_65d7067f03d06.jpg'),
(2, 'g', '1708590710_product2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemilih`
--

CREATE TABLE `pemilih` (
  `id_pemilih` int(100) NOT NULL,
  `nama_pemilih` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilih`
--

INSERT INTO `pemilih` (`id_pemilih`, `nama_pemilih`, `nisn`, `no_hp`, `kelas`) VALUES
(1, 'MARIYANTO', '878789', '0854754874', 'MOXI');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(20) NOT NULL,
  `nama_app` varchar(100) NOT NULL,
  `tahun` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alias` varchar(350) NOT NULL,
  `alamat` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `akabest` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_app`, `tahun`, `nama`, `alias`, `alamat`, `isi`, `gambar`, `akabest`) VALUES
(1, 'PILKETOS', '2022/2023', 'DEWAN PENGAWAS PROGRAMING', 'DPRD PRINGSEWU', 'JL Wismarini No 09 Pringsewu Lampung', '', '22022024075913.jpg', 'mardybest@gmail.com'),
(2, 're', '', 'MARDIYANTO', '19081989578978975', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `suara`
--

CREATE TABLE `suara` (
  `id_suara` int(100) NOT NULL,
  `id_pemilih` int(100) NOT NULL,
  `id_paslon` int(100) NOT NULL,
  `suara_sah` varchar(100) NOT NULL,
  `suara_rusak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`) VALUES
(1, 'Adminatun Jhony', 'admin', '21232f297a57a5a743894a0e4a801fc3', '482937136_avatar.png'),
(10, 'aka', 'aka', 'c4ca4238a0b923820dcc509a6f75849b', '1869563217_ilustrasi-ikan-lele-1_169.jpeg'),
(11, 'tes', '123', '202cb962ac59075b964b07152d234b70', ''),
(12, 'bangsat', 'bangsat', '528f980649c80a7269402447b51e815a', '1638032220_17-52-06-IMG-20221008-WA0001.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paslon`
--
ALTER TABLE `paslon`
  ADD PRIMARY KEY (`id_paslon`);

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id_pemilih`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `suara`
--
ALTER TABLE `suara`
  ADD PRIMARY KEY (`id_suara`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paslon`
--
ALTER TABLE `paslon`
  MODIFY `id_paslon` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id_pemilih` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suara`
--
ALTER TABLE `suara`
  MODIFY `id_suara` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
