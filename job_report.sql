-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2019 pada 08.47
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_report`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `e-gov`
--

CREATE TABLE `e-gov` (
  `id` int(20) UNSIGNED NOT NULL,
  `nama_opd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pic_opd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_jam_problem` datetime NOT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_jam_troubleshoot` datetime NOT NULL,
  `penanganan_permasalahan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `e-gov`
--

INSERT INTO `e-gov` (`id`, `nama_opd`, `nama_pic_opd`, `no_hp`, `tanggal_jam_problem`, `keluhan`, `tanggal_jam_troubleshoot`, `penanganan_permasalahan`, `created_at`, `updated_at`) VALUES
(5, 'Dinas Bapeda', 'Reko', '08215255375', '2019-02-18 12:01:00', 'Fingerprint bermasalah', '2019-02-16 11:00:00', 'Ganti FingerPrint', '2019-07-11 23:50:40', '2019-07-11 23:50:40'),
(6, 'Dinas PU', 'Titi', '0897375385835', '2019-02-01 12:00:00', 'njvnvndvndsv', '2019-01-01 12:00:00', 'nvjdnvjidnv', '2019-07-18 02:25:08', '2019-07-18 02:25:08'),
(8, 'Dinas Keuangan', 'Tino', '0821626373782', '2019-02-18 12:01:00', 'Fingerprint bermasalah', '2019-02-16 11:00:00', 'mmfkwmf', '2019-07-18 04:28:30', '2019-07-18 04:28:30'),
(9, 'Dinas Pertanian', 'Tio', '08377383', '2019-02-18 12:01:00', 'Fingerprint bermasalah', '2019-02-16 11:00:00', 'mmfkwmf', '2019-07-19 01:37:16', '2019-07-19 01:37:16'),
(10, 'Dinas Kominfo', 'Tino rezki', '0852763676181', '2019-02-18 12:01:02', 'Fingerprint bermasalah', '2019-02-16 11:00:00', 'mmfkwmf', '2019-07-19 01:47:07', '2019-07-19 01:47:07'),
(11, 'Dinas Kominfo', 'Tio Saputra', '0852763676181', '2019-02-18 12:01:00', '1. hwff 2.nvjeuiv', '2019-02-16 11:00:00', '1.nvihviuehviv 2.kdnsvkdnv', '2019-07-22 19:22:29', '2019-07-22 19:23:09'),
(12, 'Dinas Pertanian', 'Tio Sucipto', 'abcde1234', '2019-02-18 12:01:00', '1. fhufhuf', '2019-02-16 11:00:00', '1. cjhecuheuc', '2019-07-22 20:56:03', '2019-07-22 20:56:03'),
(13, 'Dinas Keuangan', 'Yoyo S', '89079777979', '2019-02-18 12:01:00', '1.nknff', '2019-02-16 11:00:00', '1.nkcnc 2. hjehje', '2019-07-24 19:17:04', '2019-07-24 19:18:00'),
(14, 'Dinas Keuangan', 'Tari', '8366476448', '2019-02-18 12:01:00', 'lknlknkl\r\nhhjhv', '2019-02-16 11:00:00', 'kldnvlkd\r\nknkdvnv', '2019-07-24 19:20:00', '2019-07-24 19:32:46'),
(15, 'BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH KAB. BANGKA', 'mklcsmlvsv', '86367674', '2019-02-18 12:01:00', 'jkvbjkvbekv', '2019-02-16 11:00:00', 'nlvcksnv', '2019-08-04 21:34:40', '2019-08-04 21:35:33'),
(16, 'BADAN PENGELOLAAN PAJAK DAN RETRIBUSI DAERAH KAB. BANGKA', 'nlkrmlmcs', '0852763676181', '2019-02-18 12:01:00', 'fwefjfjwf', '2019-02-16 11:00:00', 'cskcksvs', '2019-08-04 21:38:51', '2019-08-04 21:38:51'),
(17, 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SDMD KAB. BANGKA', 'mkdmvkmv', '083784784', '2019-02-18 12:01:00', 'jekgjeokgje', '2019-02-16 11:00:00', 'mdsvdvmlkdv', '2019-08-04 21:44:47', '2019-08-04 21:44:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_02_074908_create_e-gov_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$qpUDMTgfH4RbCCelV5E38um53JXSyARaDiaPCMAWrwgnLflVnmGS2', '2019-07-11 23:48:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gamil.com', NULL, '$2y$10$x3WJ8yLLwrgpMVAZYE73vuRjvC62ggm2yOexlWsEavx7/iYUOoo0a', NULL, '2019-07-02 08:04:02', '2019-07-02 08:04:02'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$HiQ0zIfYgFP7cmJDCGcaHOaiVQFpEQjXIyORPIcFPQGPsI8h3Yfh2', NULL, '2019-07-07 18:29:51', '2019-07-07 18:29:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `e-gov`
--
ALTER TABLE `e-gov`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `e-gov`
--
ALTER TABLE `e-gov`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
