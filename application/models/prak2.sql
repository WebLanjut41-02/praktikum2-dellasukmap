-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2018 pada 03.06
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_praass`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `NIP` varchar(10) NOT NULL,
  `Nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`NIP`, `Nama`) VALUES
('1234567890', 'Nenny');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `Id_Paket` int(11) NOT NULL,
  `Tgl_Datang` date NOT NULL,
  `Sasaran` varchar(16) NOT NULL,
  `Penerima` varchar(10) NOT NULL,
  `Isi_Paket` text NOT NULL,
  `Tgl_Terima` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`Id_Paket`, `Tgl_Datang`, `Sasaran`, `Penerima`, `Isi_Paket`, `Tgl_Terima`) VALUES
(1, '2018-11-02', '6701171069', '1234567890', 'Make UP', '2018-11-03'),
(2, '2018-11-01', '6701171069', '1234567890', 'makanan', '2018-11-12'),
(3, '2018-11-01', '6701171070', '1234567890', 'Laptop', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghuni`
--

CREATE TABLE `penghuni` (
  `No_KTP` varchar(16) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Unit` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penghuni`
--

INSERT INTO `penghuni` (`No_KTP`, `Nama`, `Unit`) VALUES
('6701171069', 'Nia', 'E-323'),
('6701171070', 'Fitria', 'E-116'),
('6701171089', 'Ria', 'E-414'),
('6701174116', 'Desi', 'E-111');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`Id_Paket`),
  ADD KEY `fk_penghuni` (`Sasaran`),
  ADD KEY `fk_karyawan` (`Penerima`);

--
-- Indeks untuk tabel `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`No_KTP`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `Id_Paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `paket_ibfk_1` FOREIGN KEY (`Penerima`) REFERENCES `karyawan` (`NIP`),
  ADD CONSTRAINT `paket_ibfk_2` FOREIGN KEY (`Sasaran`) REFERENCES `penghuni` (`No_KTP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
