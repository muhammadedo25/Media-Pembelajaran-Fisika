-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220510.314f251104
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2022 pada 15.52
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fisika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwals`
--

CREATE TABLE `jadwals` (
  `jadwal_id` int(11) NOT NULL,
  `kegiatan` varchar(255) DEFAULT NULL,
  `mulai` timestamp NULL DEFAULT NULL,
  `selesai` timestamp NULL DEFAULT NULL,
  `nis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwals`
--

INSERT INTO `jadwals` (`jadwal_id`, `kegiatan`, `mulai`, `selesai`, `nis`) VALUES
(12, 'tugas 4', '2022-05-11 10:21:00', '2022-05-12 10:21:00', '190411100175'),
(14, 'tugas 5', '2022-05-15 10:21:00', '2022-05-16 10:21:00', '190411100175'),
(15, 'rapat CO 1 (online)', '2022-05-05 13:14:00', '2022-05-05 16:14:00', '190411100085'),
(17, 'Rapat akbar 1 (online', '2022-05-07 13:23:00', '2022-05-07 13:23:00', '190411100085'),
(18, 'Rapat CO 2 (online)', '2022-05-12 13:24:00', '2022-05-12 13:24:00', '190411100085'),
(19, 'Rapat Akbar 2 Progres (online)', '2022-05-14 13:25:00', '2022-05-14 13:25:00', '190411100085'),
(20, 'Rapat CO 3 (Ofline)', '2022-05-19 13:26:00', '2022-05-19 13:26:00', '190411100085'),
(21, 'Rapat Akbar 3 Teknis (Ofline)', '2022-05-21 13:26:00', '2022-05-21 13:26:00', '190411100085'),
(22, 'rapat CO 4 (online)', '2022-05-26 13:37:00', '2022-05-26 13:38:00', '190411100085'),
(23, 'Rapat Akbar 4 pengefixan (online)', '2022-05-28 13:38:00', '2022-05-28 13:38:00', '190411100085'),
(25, 'Pengumpulan karya', '2022-05-31 13:50:00', '2022-06-09 13:50:00', '190411100085'),
(27, 'Penilaian Karya', '2022-06-11 13:56:00', '2022-06-18 13:56:00', '190411100085'),
(28, 'Pengumuman Karya', '2022-06-20 13:57:00', '2022-06-20 13:57:00', '190411100085'),
(29, 'ComingSoon', '2022-05-29 13:59:00', '2022-05-29 13:59:00', '190411100085'),
(30, 'CountDown  -3Hari', '2022-06-06 13:59:00', '2022-06-06 13:59:00', '190411100085');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nis` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `wali` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`nama`, `username`, `nis`, `password`, `kelas`, `wali`) VALUES
('rachmad bima f', 'rbimaf', '190211100202', 'bulakbanteng', NULL, NULL),
('Muhammad Edo Ardiansyah', 'Edoardnsyah', '190411100025', 'muhammadedo25', 'kelas 4', 'Bu Eka'),
('Muhammad Edo Ardiansyah', 'Edoardiansyah', '190411100085', 'muhammadedo25', 'Kelas 3', 'Pak Kautsar'),
('Achmad Alif Nurdiansyah Dhofir', 'AchmadAlif', '190411100175', 'wolumania', 'Kelas 5', 'Bu Ifadah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`jadwal_id`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD CONSTRAINT `jadwals_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `users` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



