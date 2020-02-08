-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2020 pada 11.09
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `programmer_salary_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `name`
--

CREATE TABLE `name` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) DEFAULT NULL,
  `id_work` int(11) DEFAULT NULL,
  `id_salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `name`
--

INSERT INTO `name` (`id`, `nama`, `id_work`, `id_salary`) VALUES
(1, 'Rebecca', 1, 1),
(2, 'Vita', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `salary` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `salary`
--

INSERT INTO `salary` (`id`, `salary`) VALUES
(1, 10000000),
(2, 12000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `id_salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `work`
--

INSERT INTO `work` (`id`, `name`, `id_salary`) VALUES
(1, 'Frontend Dev', 1),
(2, 'Backend Dev', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `name`
--
ALTER TABLE `name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
