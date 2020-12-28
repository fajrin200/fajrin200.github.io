-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2020 pada 08.57
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sma1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nik` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pangkat` varchar(255) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `notelepon` varchar(50) NOT NULL,
  `jeniskelamin` varchar(1) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nik`, `nama`, `pangkat`, `mapel`, `agama`, `notelepon`, `jeniskelamin`, `asal`, `email`, `alamat`) VALUES
(8, 1, 'M Fajrin', '4A', 'Fisika', 'Islam', '085677567765', '1', 'Malang', 'muhammadfajrin412@gmail.com', 'Bima'),
(9, 2, 'Nurhayati', '3B', 'Biologi', 'Islam', '0885337236411', '2', 'Bima', 'Nurhayati@gmail.com', 'Bima'),
(10, 3, 'Ferawati', '3B', 'Fisika', 'Islam', '0897678765464', '2', 'Malang', 'nl7575891@gmail.com', 'Dompu'),
(11, 4, 'Furkan', '4A', 'Kimia', 'Khatolik', '08765654543', '1', 'manggenda', 'faam812@gmail.com', 'Dompu'),
(12, 5, 'Fitrah', '4A', 'Seni rupa', 'Islam', '098765432123', '1', 'MAnggeasi', 'Fitra@gmail.com', 'Dompu'),
(13, 6, 'Sinta', '3B', 'Fisika', 'Islam', '123456765432', '2', 'Malang', 'sinta@gmail.com', 'Dompu'),
(14, 7, 'Lala pocu', '4A', 'Fisika', 'Islam', '098767834677', '2', 'Malang', 'lala@gmail.com', 'Bima'),
(15, 8, 'Sifa', '4A', 'Matematika', 'Islam', '087677899008', '2', 'Malang', 'sifa@gmail.com', 'saka'),
(16, 9, 'Dinda', '3B', 'Fisika', 'Islam', '012345345346', '2', 'Malang', 'dinda@gmailcom', 'Dompu'),
(17, 10, 'Mimi', '4A', 'Seni rupa', 'Islam', '06543215671', '2', 'Malang', 'mimi@gmail.com', 'Dompu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(12) NOT NULL,
  `nik` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bagian` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `notelepon` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `jeniskelamin` varchar(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nik`, `nama`, `bagian`, `posisi`, `notelepon`, `agama`, `jeniskelamin`, `email`, `asal`, `alamat`) VALUES
(1, 1, 'adininsyah lima tul wakdiaya', 'pel', 'Kelas 1', '08266690918', 'Islam', '1', 'adin@gmail.com', 'wawonduru', 'wawonduru'),
(2, 2, 'cici', 'Siram Bunga', 'kelas 2', '081340239158', 'Islam', '1', 'cici@gmail.com', 'bima', 'bima'),
(3, 3, 'ismail', 'pel', 'kelas 3', '082402339158', 'Islam', '2', 'ismail@gmail.com', 'Dompu', 'Dompu'),
(4, 4, 'amanda', 'siram halaman', 'Kelas 1', '081342347329', 'Islam', '2', 'amanda@gmail.com', 'saka', 'saka'),
(5, 5, 'yuli', 'Siram Bunga', 'kelas 2', '083242347329', 'Islam', '2', 'yuli@gmail.com', 'Dompu', 'Dompu'),
(6, 6, 'cahaya', 'pel', 'kelas 3', '082146999303', 'Islam', '1', 'cahaya@gmail.com', 'sape', 'sape'),
(7, 7, 'rijal', 'sapu halaman', 'kelas 2', '0853911354', 'Islam', '1', 'rijal@gmail.com', 'rora', 'rora'),
(8, 8, 'herdin', 'sapu lantai', 'kelas 3', '08366690913', 'Islam', '1', 'herdin@gmail.com', 'manggelewa', 'manggelewa'),
(9, 9, 'Yamini', 'sapu', 'Perpustakaan', '087654456789', 'Islam', '2', 'yamini@gmai.com', 'Singgosari', 'Lawata'),
(10, 10, 'Indah Neventari', 'keamaanan', 'Pos Jaga', '098890098890', 'Islam', '1', 'indah@gmail.com', 'Dompu', 'Bima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(12) NOT NULL,
  `nis` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `tingkat` int(255) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `jeniskelamin` varchar(1) NOT NULL,
  `notelepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `kelas`, `tingkat`, `agama`, `jeniskelamin`, `notelepon`, `email`, `alamat`) VALUES
(2, 15, 'Nurlaila Majmunah', '2', 2, 'Islam', '2', '087877655455', 'Nurlaila@gmail.com', 'Dompu'),
(3, 2, 'Muhammad Fitra', '2', 2, 'Islam', '1', '087655455321', 'muhammadfitra@gmail.com', 'Sape'),
(4, 3, 'M riski farhan', '1', 1, 'Islam', '1', '08233954712', 'riskifarhan@gmail.com', 'woja'),
(5, 4, 'shaifulla', '3', 3, 'Islam', '1', '083444214637', 'shaifulla@gmail.com', 'manggelewa'),
(6, 5, 'ikbal', '2', 2, 'Islam', '1', '084512347420', 'ikbal@gmail.com', 'mangge asi'),
(7, 6, 'sakinah', '1', 1, 'Islam', '2', '082333480321', 'sakinah@gmail.com', 'Dompu'),
(8, 7, 'roni', '3', 3, 'Islam', '1', '081238666246', 'roni@gmail.com', 'sawe'),
(9, 8, 'iman', '2', 2, 'Islam', '1', '083999462318', 'iman@gmail.com', 'sila'),
(10, 9, 'jamilah', '3', 3, 'Islam', '2', '082333190835', 'jamilah@gmail.com', 'sape'),
(11, 10, 'dela', '1', 1, 'Islam', '2', '081866787654', 'dela@gmail.com', 'rora');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` enum('gudang','admin') NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `role`, `password`, `created_at`, `foto`, `is_active`) VALUES
(1, 'Adminisitrator', 'admin', 'admin@admin.com', '025123456789', 'admin', '$2y$10$wMgi9s3FEDEPEU6dEmbp8eAAEBUXIXUy3np3ND2Oih.MOY.q/Kpoy', 1568689561, 'ccd65d7ee101f756f73f29e081babcee.JPG', 1),
(3, 'Lila rislastii', 'Lila', 'lila@gmail.com', '085677455676', 'admin', '$2y$10$qQxfpSMvehzARQC5Nmi2COSdmXs070y9pnTfpDQRHAZ6Z2OOx9exC', 1609076247, 'user.png', 0),
(4, 'Mita', 'Mita', 'Mita@gmail.com', '087677567544', 'admin', '$2y$10$Qv5.DGq9UUdWKebb9LzXAeES3FseE00UPsKsbSaj0XWDYp/qKTmGa', 1609076285, 'user.png', 0),
(5, 'Andi', 'Andi', 'Andi@gmail.com', '0987899678789', 'admin', '$2y$10$OfhX7mB5PtqCLC5lr4oSl.0EQH0nbZULEtkPzokR70nvfERGgDZla', 1609076381, 'user.png', 0),
(6, 'Nurdinda', 'DindaNur', 'dindanur@gmail.com', '087677877899', 'admin', '$2y$10$I0cIkE8vMM6EMZZfg3JbzOg.iDHIcBdisRhqzrmFtyuCN2uaf9hl2', 1609076427, 'user.png', 0),
(7, 'Furkan', 'Furkan', 'furka@gmai.com', '098668544322', 'admin', '$2y$10$KEFyisCcBgJU7P0Y3FSLje4akrhhDV5keMU8ODlK5XBEHEun/qbPS', 1609076469, 'user.png', 0),
(8, 'fadhil', 'fadhil', 'fadhil@gmail.com', '012321345543', 'admin', '$2y$10$nSLUomLq.I8oFaIgGFt89et4H9S5971bji21uiqXPcd01dulh5xiy', 1609076754, 'user.png', 0),
(9, 'baso', 'Baso', 'baso@gmail.com', '086655554334', 'admin', '$2y$10$5Pr1IkFqdQyQ.ZhMpkvfLu.iHEOf3FlBI1C6aprTnIF03kjgCziBm', 1609076793, 'user.png', 0),
(10, 'fajrin', 'Fajrin', 'fajrin@gmail.com', '08765567654', 'admin', '$2y$10$QH/C7H.trM5moALxAwvWJOjU6nZ1Vf149uMxlkGWd0uoarHaReAHm', 1609076842, 'user.png', 0),
(11, 'Muhammad', 'Muhammad', 'Muhammad@gmail.com', '08776787651', 'admin', '$2y$10$mcTwMF0cBQ6BL9POVOBA9u4iCwvBsrdKvofvHMCda/4n/jAwO8q7q', 1609076878, 'user.png', 0),
(12, 'Fedo', 'Fedo', 'fedo@gmail.com', '098789876789', 'admin', '$2y$10$k6LDXyjyUQbfLhbV1CV56.cH0Z5WIxhjKwG07xjXWUEEPbOSk.BXW', 1609076908, 'user.png', 0),
(13, 'Fajrin Andi', 'FajrinAndi', 'FajrinAndi@gmail.com', '087866755544', 'admin', '$2y$10$SJN0iPKMPkOY25h4scMfC.drnnwwC.jQ5.7KyculH9zP4NEz7jr/a', 1609125504, 'user.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
