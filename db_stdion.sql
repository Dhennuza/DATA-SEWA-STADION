-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2023 pada 04.51
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_stdion`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'addin', '$2y$10$UTxXsb9SxOne6Ib2Mu9gju.iXD9ax18XmSwyEaQ2ttTUZGo3VJqtq'),
(2, 'lutfi', '$2y$10$mfw3FzEN1DiSfCievI0oWex0XJOEB4q6XQIOoNPqUKlC90tmWxuRG'),
(3, '', '$2y$10$7qK/xcNPC/c3gweAGzVPGepngUv14J3kazgXniYXOBkp7XSKZ2O46'),
(4, 'budak sunda', '$2y$10$PzmEDQHEgZAaXmC6NtJvfe/x8ss3UwSQHZP/AoPs1fS3LvWfiVXDe'),
(5, 'ade', '$2y$10$3kWJjsH13iw9q4RMR5IxieHEJ9cs0OhvQT1PjHfY2VV9NWY3LOw4G'),
(6, 'hendra', '$2y$10$/fNspARjwgcuZOJkGkrT3OFiJI27dQiJLk4yTKJGvsimZHm7PElmy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `waktu_mulai` time(4) NOT NULL,
  `waktu_selesai` time(4) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`id`, `nama_pemesan`, `email`, `waktu_mulai`, `waktu_selesai`, `created`) VALUES
(1, 'John Doe', 'johndoe@gmail.com', '02:00:00.0000', '05:00:00.0000', '2012-06-01 02:12:30'),
(2, 'David Costa', 'sam.mraz1996@yahoo.com', '05:00:00.0000', '07:00:00.0000', '2013-03-03 01:20:10'),
(5, 'addin nur zaman', 'nurzamanaddin@gmail.com', '08:57:36.0000', '08:57:36.0000', '2023-07-04 08:57:36'),
(6, 'dudung', 'dudung@gmail.com', '09:05:25.0000', '09:05:25.0000', '2023-07-04 09:05:25'),
(7, 'nijar', 'nijarpratama@gmail.com', '21:39:53.0000', '21:39:53.0000', '2023-07-04 21:39:53'),
(8, 'wiyono', 'wiyono123@gmail.com', '22:08:13.0000', '22:08:13.0000', '2023-07-04 22:08:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
