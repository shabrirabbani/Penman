-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 10:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penman`
--

-- --------------------------------------------------------

--
-- Table structure for table `cerita`
--

CREATE TABLE `cerita` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_cerita` text NOT NULL,
  `isi_cerita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cerita`
--

INSERT INTO `cerita` (`id`, `id_user`, `judul_cerita`, `isi_cerita`) VALUES
(1, 0, '', '0'),
(2, 3, '', '0'),
(3, 3, 'nothing', '0'),
(4, 3, 'u r my reason', 'yeah'),
(5, 3, 'moriya', '3'),
(6, 19, 'nothing', 'robotic'),
(7, 19, 'bismillah', 'rahmat mu ini ya Allah'),
(8, 2, 'bismillah', 'yeah'),
(11, 4, 'Yo dude', 'Yo dude the Empire is pretty chill'),
(12, 4, 'Joe', 'Jeo man');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2021_06_12_142039_create_pengguna_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '../assets/foto/User0.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `email`, `birthdate`, `password`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Mauriza Humaira', 'momo', 'mor@gm', '2021-06-12', '$2y$10$Sesjbmykm50Q5KJEgFhnju6f8QnVdZVrTZXJEvcRQ06jGo2YkpInK', '../assets/foto/User0.png', '2021-06-12 08:11:14', '2021-06-12 08:11:14'),
(2, 'Mauriza', 'mori', 'mor@gm', '2021-06-12', '$2y$10$04dyr15qBQKzlzoYIcZ1JeSIBU5cTWzaODmjfyuMI.Nxv.nrvp8Ae', '../assets/foto/User0.png', '2021-06-12 09:06:44', '2021-06-12 09:06:44'),
(3, 'Mizwar Zulfachri', 'mz0901', 'miswar_zul@mhs.unsyiah.ac.id', '2001-09-14', '$2y$10$UJ0TD2F31oicgxeTlhwyxuTWQTSGzWJ216ssiPrYDwmG3npE.DaPq', '../assets/foto/User1.png', '2021-06-14 09:58:09', '2021-06-14 09:58:09'),
(4, 'Nom', 'nom', 'nom@gm.cm', '2021-06-15', '$2y$10$CEuq73Y5621TIUPQ9Wabw.kibKaJD6B.XgXmQAYhHA0qTwvixb5pe', '../assets/foto/User0.png', '2021-06-14 19:53:43', '2021-06-14 19:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm` varchar(20) NOT NULL,
  `avatar` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `confirm`, `avatar`) VALUES
(1, 'simori22', 'e10adc3949ba59abbe56', 'e10adc3949ba59abbe56', 0),
(2, 'morizah', 'e10adc3949ba59abbe56', 'e10adc3949ba59abbe56', 0),
(3, 'penman', '123456', '123456', 0),
(4, 'Gizmo_Hey', '123456', '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_cerita` text NOT NULL,
  `isi_cerita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `id_user`, `judul_cerita`, `isi_cerita`) VALUES
(1, 0, '', '0'),
(2, 3, '', '0'),
(3, 3, 'nothing', '0'),
(4, 3, 'u r my reason', 'yeah'),
(5, 3, 'moriya', '3'),
(6, 19, 'nothing', 'robotic'),
(7, 19, 'bismillah', 'rahmat mu ini ya Allah'),
(8, 2, 'Yo dude', 'The empire is pretty chill.'),
(9, 2, 'Empire is...', 'Yo dude the empire is pretty chill, maybe you should like join it or something?');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` smallint(6) NOT NULL DEFAULT 0,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `avatar`, `nama`, `tgl_lahir`, `email`) VALUES
(1, 'momo', '$2y$10$voHgfqGsUj.Nw1kVv3AmzupMis3p.Ixrv9r6ue.M0vDOOUl..hCV2', 0, 'Mauriza Humaira', '2021-06-10', 'maurizahumaira14@gmail.com'),
(2, 'mz0901', '$2y$10$oWjdVpLN.U5cUxC8HmhBI.srNfxSxzOzpMAbnr.e5KPgIuziv/7w.', 1, 'Mizwar Zulfachri', '2001-09-14', 'miswar_zul@mhs.unsyiah.ac.id');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cerita`
--
ALTER TABLE `cerita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
