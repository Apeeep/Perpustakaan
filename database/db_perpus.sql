-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 08:23 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `nim` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `thn_masuk` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`nim`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `prodi`, `thn_masuk`) VALUES
(12192268, 'Puspita', 'Jawa barat', '2000-08-31', 'P', 'Sistem Informasi', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `thn_terbit` varchar(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` enum('rak1','rak2','rak3') NOT NULL,
  `tgl_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `judul`, `pengarang`, `penerbit`, `thn_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
(23, 'Matematika', 'Bukan Saya', 'Gramedia', '2015', '4871847h', 5, 'rak2', '0000-00-00 00:00:00'),
(24, 'Dasar PHP', 'Solihin', 'Toko bukbek', '2010', '943823jc4', 4, 'rak2', '0000-00-00 00:00:00'),
(25, 'Pintar CSS', 'Jack', 'Media Suar', '2012', '934748', 9, 'rak1', '0000-00-00 00:00:00'),
(26, 'Bahasa Arab', 'Soleh', 'Muslim post', '2015', '923847', 4, 'rak1', '0000-00-00 00:00:00'),
(29, 'Angular js', 'anggul', 'Raja Program', '2016', '943823jc4', 4, 'rak2', '0000-00-00 00:00:00'),
(30, 'Mahir MySQL', 'April', 'Megatama', '2014', '1234', 3, 'rak1', '2016-10-31 03:03:43'),
(31, 'Mahir PHP', 'Julian', 'Jorge', '2016', '4325', 2, 'rak3', '2016-10-31 09:06:05'),
(34, 'HTML Untuk Pemula', 'Surya', 'Penerbit 1', '2014', '2345', 5, 'rak1', '2016-11-05 12:16:37'),
(35, 'Javascript Untuk Pemula', 'Ira Sarita', 'Gramedia', '2009', '13425521', 3, 'rak1', '2020-11-20 14:43:33'),
(36, 'React Native', 'Fiko Supriadi', 'Gramedia', '2004', '13144', 9, 'rak2', '2020-11-20 14:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id` int(5) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(15) NOT NULL,
  `tgl_kembali` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `judul`, `nim`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`, `ket`) VALUES
(7, 'matematika', 2015804045, 'Wewen Nurwendi', '01-11-2015', '08-11-2015', 'Kembali', ''),
(9, 'PHP Dasar', 2015804065, 'Iqbal Rizqi Purnama', '24-10-2016', '07-11-2016', 'Kembali', ''),
(11, 'matematika', 2011140204, 'Erlang', '28-10-2016', '09-11-2016', 'perpanjang', 'pinjem lagi'),
(12, 'PHP Dasar', 2015804045, 'Wewen', '28-10-2016', '04-11-2016', 'Kembali', ''),
(13, 'Samudra PHP', 210234, 'maratus', '28-10-2016', '04-11-2016', 'Kembali', 'lope'),
(15, 'Pintar CSS', 210234, 'maratus', '04-11-2016', '11-11-2016', 'Kembali', 'pintar'),
(19, 'Mahir MySQL', 213834, 'Fariz', '04-11-2016', '25-11-2016', 'Kembali', 'daspd'),
(20, 'Pintar CSS', 201328, 'Cristine', '04-11-2016', '11-11-2016', 'perpanjang', ''),
(21, 'Pintar CSS', 201328, 'Cristine', '04-11-2016', '11-11-2016', 'Kembali', ''),
(22, 'Pintar CSS', 201328, 'Cristine', '30-11-2016', '09-11-2016', 'Kembali', ''),
(23, 'Angular js', 201238, 'Lala', '04-11-2016', '11-11-2016', 'Kembali', 'sdad'),
(24, 'Mahir PHP', 201238, 'Lala', '05-11-2016', '12-11-2016', 'Kembali', 'lal'),
(25, 'Matematika', 21394, 'Ria Putri', '05-11-2016', '12-11-2016', 'Kembali', 'lalsd'),
(26, 'Javascript Untuk Pemula', 12192268, 'Puspitaa cantik', '20-11-2020', '27-11-2020', 'Pinjam', 'Kelas 12.3C');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(3) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `email`, `foto`, `level`) VALUES
(1, 'Rafif Ahnafyusi', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'iniemailapip@yahoo.co.id', 'avatar5.png', 'admin'),
(11, 'Puspitaa', 'pitaa', 'b11e079eab8138a864bf621b4f4e15e9', 'pitaachuu31@gmail.com', '420288.jpg', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
