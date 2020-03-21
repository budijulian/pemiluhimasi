-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 03:57 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pemilu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `user` varchar(25) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `foto` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `user`, `pass`, `nama`, `foto`, `email`) VALUES
(1, 'julian', '240796', 'budijulian', 'foto.png', 'budijulian96@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kandidat`
--

CREATE TABLE `tbl_kandidat` (
  `npm_kd` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tahun_pilih` int(4) NOT NULL,
  `no_urut` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kandidat`
--

INSERT INTO `tbl_kandidat` (`npm_kd`, `nama`, `tgl_lahir`, `jurusan`, `fakultas`, `visi`, `misi`, `tahun_pilih`, `no_urut`, `email`, `foto`) VALUES
('173112700651', 'Ahok', '1994-11-14', 'Teknik Informatika', 'FTKI', 'Sukses', 'Sukses', 2020, 1, 'ahok@gmail.com', 'ahok.jpg'),
('173112700652', 'Mark Kor', '2020-01-13', 'xfx', 'cvxv', 'xcvx', 'zxcxz', 2020, 2, 'sadad', 'mark.jpg'),
('173112700653', 'Justin Herlambang', '2000-01-06', 'Sistem Informasi', 'FTKI', 'apa aja', 'apa aja', 2020, 3, 'justin34@gmail.comm', 'justin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `npm_mhs` varchar(25) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `jalur` varchar(10) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `foto` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ktm` varchar(25) NOT NULL,
  `ket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`npm_mhs`, `pass`, `nama`, `tgl_lahir`, `jurusan`, `jalur`, `fakultas`, `angkatan`, `foto`, `email`, `ktm`, `ket`) VALUES
('173112700650047', 'intan', 'Intan', '2017-01-14', 'Teknik Informatika', 'Reguler', 'FTKI', 2017, 'my-foto.png', 'intan@gmail.com', 'ktm.jpg', 'Verifikasi'),
('173112700650049', 'ahmad', 'ahmadi', '2005-01-11', 'Teknik Informatika', 'Reguler', 'FTKI', 2018, 'my-foto.png', 'ahmad@gmail.com', 'ktm.jpg', 'Verifikasi'),
('173112700650050', '240796', 'antonio', '2020-01-12', 'Sistem Informasi', 'Reguler', 'FTKIi', 2016, '', 'antonio@gmail.comi', '', 'Verifikasi'),
('173112700650051', '', 'anton', '0000-00-00', '', '', '', 0, '', 'anton@gmail.com', '', ''),
('173112700650071', '', 'hermawan', '2019-12-30', 'TI', '', 'FTKI', 2019, '', 'hermawan@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vote`
--

CREATE TABLE `tbl_vote` (
  `id` int(11) NOT NULL,
  `npm_mhs` varchar(25) NOT NULL,
  `npm_kd` varchar(25) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pilihan` int(5) NOT NULL,
  `periode` varchar(5) NOT NULL,
  `ket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vote`
--

INSERT INTO `tbl_vote` (`id`, `npm_mhs`, `npm_kd`, `waktu`, `pilihan`, `periode`, `ket`) VALUES
(1, '173112700650047', '173112700653', '2020-01-14 02:02:47', 2, '2020', 'Tidak Sah'),
(3, '173112700650050', '173112700651', '2020-01-14 02:03:31', 3, '2020', 'Sah'),
(7, '173112700650049', '173112700652', '2020-01-14 09:55:34', 2, '2020', 'Sah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_waktu`
--

CREATE TABLE `tbl_waktu` (
  `id` int(11) NOT NULL,
  `waktu_buka` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `waktu_tutup` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_waktu`
--

INSERT INTO `tbl_waktu` (`id`, `waktu_buka`, `waktu_tutup`) VALUES
(1, '2020-01-12 06:03:20', '2020-01-12 07:01:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kandidat`
--
ALTER TABLE `tbl_kandidat`
  ADD PRIMARY KEY (`npm_kd`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`npm_mhs`);

--
-- Indexes for table `tbl_vote`
--
ALTER TABLE `tbl_vote`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npm_mhs_2` (`npm_mhs`),
  ADD KEY `npm_mhs_3` (`npm_mhs`);

--
-- Indexes for table `tbl_waktu`
--
ALTER TABLE `tbl_waktu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_vote`
--
ALTER TABLE `tbl_vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_waktu`
--
ALTER TABLE `tbl_waktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
