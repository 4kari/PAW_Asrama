-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 06:06 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tapaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absen` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `tgl_absen` date NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `izin`
--

CREATE TABLE `izin` (
  `id_izin` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `tglmulai` date NOT NULL,
  `tglkembali` date NOT NULL,
  `ket_izin` varchar(50) NOT NULL,
  `id_musahil` int(11) NOT NULL,
  `id_pengurus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jk`
--

CREATE TABLE `jk` (
  `id_jk` int(11) NOT NULL,
  `jk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jk`
--

INSERT INTO `jk` (`id_jk`, `jk`) VALUES
(1, 'laki-laki'),
(2, 'perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `jenis_kegiatan` varchar(30) NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `jenis_kegiatan`, `tgl_kegiatan`, `waktu`) VALUES
(1, 'pulang', 'penting', '0000-00-00', '00:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `musahil`
--

CREATE TABLE `musahil` (
  `id_musahil` int(11) NOT NULL,
  `nama_musahil` varchar(50) NOT NULL,
  `kamar_musahil` int(11) NOT NULL,
  `gedung_musahil` varchar(11) NOT NULL,
  `nowa_musahil` varchar(30) NOT NULL,
  `user_musahil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musahil`
--

INSERT INTO `musahil` (`id_musahil`, `nama_musahil`, `kamar_musahil`, `gedung_musahil`, `nowa_musahil`, `user_musahil`) VALUES
(3, 'nur', 2, 'r', '2334', 'musahil');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `id_sanksi` int(11) NOT NULL,
  `ket_pelanggaran` varchar(50) NOT NULL,
  `tgl_pelanggaran` date NOT NULL,
  `id_pengurus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `id_pengurus` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jml_bayar` varchar(30) NOT NULL,
  `ket_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_daftar` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_jk` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `file_ktm` varchar(40) NOT NULL,
  `id_pengurus` int(11) DEFAULT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `nowa` varchar(25) NOT NULL,
  `bukti_bayar` varchar(50) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `namalengkap`, `nim`, `prodi`, `alamat`, `id_jk`, `foto`, `file_ktm`, `id_pengurus`, `tgl_lahir`, `nowa`, `bukti_bayar`, `keterangan`) VALUES
(2, 'Ria Rostiani', '170411100042', 'T. Informatika', 'Blega', 2, 'coba.jpg', 'ktm.jpg', NULL, '18/12/1998', '080888000888', 'images.png', 'Sudah di verivikasi silahkan buat akun'),
(3, 'Syaban', '170411100119', 'T. Informatika', 'Blega', 1, 'coba.jpg', 'ktm.jpg', NULL, '18/12/1998', '081000111000', NULL, 'tidak ada bukti pembayaran'),
(4, 'pita', '170411100035', 'T. Informatika', 'Jalan', 2, 'coba.JPG', 'ktm.JPG', NULL, '18/12/1998', '0082322889883', NULL, 'tidak ada bukti pembayaran'),
(6, 'Ashof Barkhia Ridwan', '170411100064', 'T. Informatika', 'Bangkalan', 1, 'coba.jpg', 'ktm.jpg', NULL, '22/10/97', '08521486524', NULL, 'tidak ada bukti pembayaran'),
(9, 'Anas Trikrisna', '170411100007', 'T. Informatika', 'nganjuk', 1, 'bisnis.png', '1.jpg', NULL, '11/02/1999', '085114235123', 'images1.png', 'Sudah di verivikasi silahkan buat akun');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `user_pengurus` varchar(50) NOT NULL,
  `nama_pengurus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `user_pengurus`, `nama_pengurus`) VALUES
(1, 'pengurus', 'yuuu');

-- --------------------------------------------------------

--
-- Table structure for table `sanksi`
--

CREATE TABLE `sanksi` (
  `id_sanksi` int(11) NOT NULL,
  `jenis_sanksi` varchar(30) NOT NULL,
  `ket_sanksi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanksi`
--

INSERT INTO `sanksi` (`id_sanksi`, `jenis_sanksi`, `ket_sanksi`) VALUES
(1, 'sakk', 'semangat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(500) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('musahil', 'd8ab3904af3c02efcc0ffcfa80c2f68c7261c84c79d6b5c6ae33a673ab029ee2', 2),
('pengurus', '36142a6978c1d7f3063996e964a1a644d280eaf4c55d44c2056fab086742e495', 1),
('test', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 3),
('warga', 'c85baf447fd328b85bb8eecd0604f714fec635b5663334cba9bdae13b05f57f4', 3);

-- --------------------------------------------------------

--
-- Table structure for table `wargaasrama`
--

CREATE TABLE `wargaasrama` (
  `id_warga` int(11) NOT NULL,
  `id_musahil` int(20) DEFAULT NULL,
  `nama_warga` varchar(50) NOT NULL,
  `nim_warga` varchar(20) NOT NULL,
  `prodi_warga` varchar(50) NOT NULL,
  `id_jk` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgllahir` varchar(30) NOT NULL,
  `kamar` varchar(10) DEFAULT NULL,
  `gedung` varchar(10) DEFAULT NULL,
  `user_warga` varchar(30) NOT NULL,
  `nowa_warga` varchar(20) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wargaasrama`
--

INSERT INTO `wargaasrama` (`id_warga`, `id_musahil`, `nama_warga`, `nim_warga`, `prodi_warga`, `id_jk`, `alamat`, `tgllahir`, `kamar`, `gedung`, `user_warga`, `nowa_warga`, `foto`) VALUES
(5, 3, 'test', 'test', 'test', 1, 'test', '2019-11-12', 'test', 'test', 'warga', 'test', ''),
(8, NULL, 'Ahmad Khairi Ramadan', '170411100099', 'T. Informatika', 1, 'Trunojoyo', '0000-00-00', NULL, NULL, 'test', '085203580638', 'coba.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `kegi` (`id_kegiatan`),
  ADD KEY `wra` (`id_warga`);

--
-- Indexes for table `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`id_izin`),
  ADD KEY `izin` (`id_warga`),
  ADD KEY `musahil` (`id_musahil`),
  ADD KEY `pengu` (`id_pengurus`);

--
-- Indexes for table `jk`
--
ALTER TABLE `jk`
  ADD PRIMARY KEY (`id_jk`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `musahil`
--
ALTER TABLE `musahil`
  ADD PRIMARY KEY (`id_musahil`),
  ADD KEY `user_musahil` (`user_musahil`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`),
  ADD KEY `pelanggaran` (`id_warga`),
  ADD KEY `sanksi` (`id_sanksi`),
  ADD KEY `pengurus` (`id_pengurus`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `warga` (`id_warga`),
  ADD KEY `pengur` (`id_pengurus`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `peng` (`id_pengurus`),
  ADD KEY `jkk` (`id_jk`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`),
  ADD KEY `user_pengurus` (`user_pengurus`);

--
-- Indexes for table `sanksi`
--
ALTER TABLE `sanksi`
  ADD PRIMARY KEY (`id_sanksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `wargaasrama`
--
ALTER TABLE `wargaasrama`
  ADD PRIMARY KEY (`id_warga`),
  ADD KEY `idmusahil` (`id_musahil`),
  ADD KEY `jk` (`id_jk`),
  ADD KEY `user_warga` (`user_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `id_izin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jk`
--
ALTER TABLE `jk`
  MODIFY `id_jk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `musahil`
--
ALTER TABLE `musahil`
  MODIFY `id_musahil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sanksi`
--
ALTER TABLE `sanksi`
  MODIFY `id_sanksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wargaasrama`
--
ALTER TABLE `wargaasrama`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `kegi` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wra` FOREIGN KEY (`id_warga`) REFERENCES `wargaasrama` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `izin`
--
ALTER TABLE `izin`
  ADD CONSTRAINT `izin` FOREIGN KEY (`id_warga`) REFERENCES `wargaasrama` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `musahil` FOREIGN KEY (`id_musahil`) REFERENCES `musahil` (`id_musahil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengu` FOREIGN KEY (`id_pengurus`) REFERENCES `pengurus` (`id_pengurus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `musahil`
--
ALTER TABLE `musahil`
  ADD CONSTRAINT `user_musahil` FOREIGN KEY (`user_musahil`) REFERENCES `user` (`username`) ON UPDATE CASCADE;

--
-- Constraints for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD CONSTRAINT `pelanggaran` FOREIGN KEY (`id_warga`) REFERENCES `wargaasrama` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengurus` FOREIGN KEY (`id_pengurus`) REFERENCES `pengurus` (`id_pengurus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanksi` FOREIGN KEY (`id_sanksi`) REFERENCES `sanksi` (`id_sanksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pengur` FOREIGN KEY (`id_pengurus`) REFERENCES `pengurus` (`id_pengurus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga` FOREIGN KEY (`id_warga`) REFERENCES `wargaasrama` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `jkk` FOREIGN KEY (`id_jk`) REFERENCES `jk` (`id_jk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peng` FOREIGN KEY (`id_pengurus`) REFERENCES `pengurus` (`id_pengurus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD CONSTRAINT `user_pengurus` FOREIGN KEY (`user_pengurus`) REFERENCES `user` (`username`) ON UPDATE CASCADE;

--
-- Constraints for table `wargaasrama`
--
ALTER TABLE `wargaasrama`
  ADD CONSTRAINT `idmusahil` FOREIGN KEY (`id_musahil`) REFERENCES `musahil` (`id_musahil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jk` FOREIGN KEY (`id_jk`) REFERENCES `jk` (`id_jk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wargaasrama_ibfk_1` FOREIGN KEY (`user_warga`) REFERENCES `user` (`username`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
