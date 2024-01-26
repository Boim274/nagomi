-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2024 pada 02.24
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_nagomi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `interviewuser`
--

CREATE TABLE `interviewuser` (
  `id_interview` int(11) NOT NULL,
  `namauser` text NOT NULL,
  `gender` text NOT NULL,
  `no_tlp` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `interviewuser`
--

INSERT INTO `interviewuser` (`id_interview`, `namauser`, `gender`, `no_tlp`, `id_user`) VALUES
(24, 'ibrahim', 'Laki-laki', '08953315386366', 0),
(36, 'awwfaw', 'Laki-laki', 'wafwf', 0),
(37, 'agus', 'Laki-laki', '087633248759', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaanadmin`
--

CREATE TABLE `pertanyaanadmin` (
  `no` int(11) NOT NULL,
  `isiPertanyaan` text NOT NULL,
  `id_admin` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pertanyaanadmin`
--

INSERT INTO `pertanyaanadmin` (`no`, `isiPertanyaan`, `id_admin`) VALUES
(26, 'gg', 0),
(27, '2+2=', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanyajawab`
--

CREATE TABLE `tanyajawab` (
  `id_interview` int(11) NOT NULL,
  `no_soal` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `id_tanyajawab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tanyajawab`
--

INSERT INTO `tanyajawab` (`id_interview`, `no_soal`, `jawaban`, `id_tanyajawab`) VALUES
(24, 26, 'awf', 7),
(24, 27, 'awfw', 8),
(36, 26, 'awfw', 31),
(36, 27, 'afwfw', 32),
(37, 26, 'gg', 33),
(37, 27, 'awd', 34);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `id_role`) VALUES
(10, 'user', 'user', '$2y$10$pp3aIi5iWZXoHKoFwqmzjeHsrpDYQkiA8h314JOhWlyJb2v7tHl8m', 2),
(11, 'musa', 'musa12', '$2y$10$pYeaOp4UQRr/jBne1yMrEuOZ5kdTqLDSa53M5aWoyDorYACPART0i', 2),
(12, 'admin', 'admin', '$2y$10$0wwkgw1SbbFBaNFastmgpeFGocPrPCp0YT.44acwoUFseOwZNHbjS', 1),
(13, 'ibrahim', 'boim', '$2y$10$nz6GHDbO2XiDqZH3icBrGOmWcTtvGcLnCqu1z7X6x2Lg/J8IdN6OG', 2),
(14, 'ibrahim', 'gg', '$2y$10$o3rs7NUhe5n3VVZFeEpzf.8iUFnWNTboaIm8VbNFc9TKAqIK1COCK', 2),
(15, 'nama', 'namasaya', '$2y$10$pDDkJZjouBdb/my/iR5pjOJ.tny9f5HDM/jC2ELjizoSpj2SWdM8.', 2),
(16, 'rian', 'rian', '$2y$10$rcTjJTZ.17OcKvip.vFnYOgolRNQ/peIULBFWEwWwhjXsm6LMBrN2', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `interviewuser`
--
ALTER TABLE `interviewuser`
  ADD PRIMARY KEY (`id_interview`);

--
-- Indeks untuk tabel `pertanyaanadmin`
--
ALTER TABLE `pertanyaanadmin`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tanyajawab`
--
ALTER TABLE `tanyajawab`
  ADD PRIMARY KEY (`id_tanyajawab`),
  ADD KEY `id_interview` (`id_interview`),
  ADD KEY `no_soal` (`no_soal`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `interviewuser`
--
ALTER TABLE `interviewuser`
  MODIFY `id_interview` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `pertanyaanadmin`
--
ALTER TABLE `pertanyaanadmin`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tanyajawab`
--
ALTER TABLE `tanyajawab`
  MODIFY `id_tanyajawab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tanyajawab`
--
ALTER TABLE `tanyajawab`
  ADD CONSTRAINT `tanyajawab_ibfk_1` FOREIGN KEY (`id_interview`) REFERENCES `interviewuser` (`id_interview`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tanyajawab_ibfk_2` FOREIGN KEY (`no_soal`) REFERENCES `pertanyaanadmin` (`no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
