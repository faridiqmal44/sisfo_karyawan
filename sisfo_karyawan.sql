-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 06:23 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_depan` varchar(15) NOT NULL,
  `nama_belakang` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_depan`, `nama_belakang`, `username`, `password`, `foto_admin`) VALUES
(2, 'Farid', 'Iqmal', 'farid', 'persib', 'farid.jpg'),
(3, 'Gagan', 'Ramdani', 'gagan', 'persib', 'gagan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `nik` varchar(9) NOT NULL DEFAULT '',
  `nama` varchar(30) NOT NULL,
  `namafoto` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `jab` varchar(10) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `tmp_lhr` varchar(15) NOT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`nik`, `nama`, `namafoto`, `jk`, `jab`, `id_divisi`, `tmp_lhr`, `tgl_lhr`, `gol_darah`, `agama`, `status`, `telp`, `email`) VALUES
('11151406', 'Gilang Septiansyah', 'gilang.jpg', 'L', 'Staff', 2, 'Bandung', '1997-09-08', 'B', 'Islam', 'K1', '08765432908', 'gilangsept@gmail.com'),
('11156090', 'Sandri Rusmawan', 'sandri.jpg', 'L', 'Staff', 1, 'Semarang', '1997-02-01', 'O', 'Islam', 'K1', '089777666112', 'sandri@gmail.com'),
('11156678', 'Fikri Nurfikri', 'fikri.jpg', 'L', 'Kepala', 5, 'Ambon', '1965-09-22', 'B', 'islam', 'K3', '087646574838', 'fikrif@gmail.com'),
('11158787', 'Meri Riana', 'meri.jpg', 'P', 'Staff', 3, 'Surabaya', '1983-12-13', 'B', 'Islam', 'K1', '098765432123', 'meririana@gmail.com'),
('12150093', 'Siti Sarah Masruroh', 'sitisarah.jpg', 'P', 'Staff', 5, 'Bandung', '1990-06-28', 'A', 'Islam', 'K1', '089777666114', 'sitisarah@gmail.com'),
('12150102', 'Heri Susanto', 'heri.jpg', 'L', 'Staff', 2, 'Madiun', '1993-09-19', 'B', 'Islam', 'K1', '089777666111', 'heri@gmail.com'),
('12154137', 'Farid Iqmal Hakim', 'farid.jpg', 'L', 'Owner', 1, 'Bandung', '1996-11-17', 'O', 'Islam', 'K1', '089656309177', 'faridiqmal44@gmail.com'),
('12156461', 'Imas Siti Khodijah', 'imas.jpg', 'P', 'Staff', 4, 'Bandung', '1992-05-30', 'O', 'Islam', 'K1', '089777666115', 'imas@gmail.com'),
('12156666', 'Jajang Jaka Lesmana', 'jajang.jpg', 'L', 'Staff', 3, 'Cimahi', '1997-04-18', 'AB', 'Islam', 'K4', '098765432123', 'jajangjaka@gmail.com'),
('12157839', 'Hadi Islami', 'hadi.jpg', 'L', 'Staff', 6, 'Medan', '1989-03-21', 'O', 'Islam', 'K1', '089777666113', 'hadiislami@gmail.com'),
('12159192', 'Toni sansudin', 'toni.jpg', 'P', 'Pengendali', 4, 'Jakarta', '1990-05-09', 'A', 'Islam', 'K1', '089765432123', 'toniwahyudi@gmail.com'),
('12907788', 'Miftah Khoerudin', 'miftah.jpg', 'L', 'Staff', 6, 'Bandung', '1990-05-08', 'A', 'islam', 'K1', '082181191969', 'miftah@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`, `keterangan`) VALUES
(1, 'Keuangan', 'Mengurus tentang kegiatan keuangan perusahaan'),
(2, 'Produksi', 'Mengurus tentang kegiatan produksi perusahaan'),
(3, 'Support', 'Mengurus tentang kegiatan support perusahaan'),
(4, 'Teknologi Informasi (IT)', 'Mengurus tentang kegiatan IT perusahaan'),
(12, 'Marketing', 'Mengurus tentang kegiatan pemasaran perusahaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
