-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 02:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE `bagian` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_bagian` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id`, `nama_bagian`, `kode`, `created_at`, `updated_at`) VALUES
(1, 'SEKRETARIS PERUSAHAAN', '9.0SL', '2019-11-11 20:01:55', '2019-11-11 20:01:55'),
(2, 'SATUAN PENGAWAS INTERNAL', '9.1SL', '2019-11-11 20:17:09', '2019-11-11 20:17:09'),
(3, 'TANAMAN', '9.2S', '2019-11-11 20:17:21', '2019-11-11 20:17:21'),
(4, 'TEKNIK', '9.3S', '2019-11-12 11:42:24', '2019-11-12 11:42:24'),
(5, 'PENGOLAHAN', '9.4S', '2019-11-12 11:43:14', '2019-11-12 11:43:14'),
(6, 'PEMBIAYAAN', '9.5S', '2019-11-12 11:43:37', '2019-11-12 11:43:37'),
(9, NULL, 'sfdf', '2019-11-17 17:49:33', '2019-11-17 17:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lhp`
--

CREATE TABLE `lhp` (
  `id` int(10) UNSIGNED NOT NULL,
  `bagian_id` int(10) UNSIGNED DEFAULT NULL,
  `no_lhp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pemeriksaan` date DEFAULT NULL,
  `no_surat_direksi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_surat_direksi` date DEFAULT NULL,
  `no_surat_penegasan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_surat_penegasan` date DEFAULT NULL,
  `no_tindak_lanjut` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_tindak_lanjut` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lhp`
--

INSERT INTO `lhp` (`id`, `bagian_id`, `no_lhp`, `tgl_pemeriksaan`, `no_surat_direksi`, `tgl_surat_direksi`, `no_surat_penegasan`, `tgl_surat_penegasan`, `no_tindak_lanjut`, `tgl_tindak_lanjut`, `created_at`, `updated_at`) VALUES
(2, 1, 'tes', '2019-11-13', 'tes', '2019-11-13', 'tes', '2019-11-13', 'tes', '2019-11-13', NULL, '2019-11-17 00:16:26'),
(3, 3, 'sfs', '2019-11-14', 'sdfsd', '2019-11-14', 'sdfsdf', '2019-11-14', 'sfsdf', '2019-11-20', NULL, NULL),
(5, 3, 'sdsd12232', '2019-10-30', 'dsd12e', '2019-10-31', 'dsd232', '2019-11-28', 'sds2', '2019-11-28', '2019-11-16 23:39:28', '2019-11-16 23:39:28'),
(6, 3, 'awoakwokaowk', '2019-10-30', 'sdwd', '2019-11-06', 'sdsdsd', '2019-11-20', 'sdsd', '2019-11-20', '2019-11-16 23:57:22', '2019-11-17 00:00:12'),
(7, 3, 'sdsdsd', '2019-10-30', 'dsd2', '2019-11-20', 'dsd232', '2019-10-29', 'dsd2', '2019-12-04', '2019-11-17 00:04:37', '2019-11-17 00:04:37'),
(8, 3, 'dsdsd', '2019-10-30', 'sdsds', '2019-12-04', 'sds', '2018-11-08', 'dsd2', '2019-11-27', '2019-11-17 00:06:42', '2019-11-17 00:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_10_030220_create_bagian_table', 1),
(5, '2019_11_10_030258_create-lhp_table', 1),
(6, '2019_11_10_030354_create_temuan_pemeriksaan_table', 1),
(7, '2019_11_10_030439_create_rekomendasi_table', 1),
(8, '2019_11_10_030653_create_tindak_lanjut_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `lhp_id` int(10) UNSIGNED NOT NULL,
  `isi_rekomendasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temuan`
--

CREATE TABLE `temuan` (
  `id` int(10) UNSIGNED NOT NULL,
  `lhp_id` int(10) UNSIGNED NOT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenggang_waktu` int(11) NOT NULL,
  `nilai_rupiah` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_temuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `temuan`
--

INSERT INTO `temuan` (`id`, `lhp_id`, `pic`, `tenggang_waktu`, `nilai_rupiah`, `status`, `isi_temuan`, `created_at`, `updated_at`) VALUES
(1, 2, 'su', 1232, 21, 'Sukses', 'asd', NULL, NULL),
(2, 8, 'sdsd', 332, 323, 'Sukses', 'asd', NULL, NULL),
(3, 7, 'dsd', 2323, 123, 'Sukses', 'sd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tindak_lanjut`
--

CREATE TABLE `tindak_lanjut` (
  `id` int(10) UNSIGNED NOT NULL,
  `lhp_id` int(10) UNSIGNED NOT NULL,
  `isi_tindak` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rafsa', 'rafsa34@gmail.com', NULL, '$2y$10$B6XQamUBFQTk7K.94PiYC.XF1dPAtoahcRMGa7f.khIlQxtXQ3G8O', NULL, '2019-11-12 12:49:01', '2019-11-12 12:49:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lhp`
--
ALTER TABLE `lhp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lhp_bagian_id_foreign` (`bagian_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rekomendasi_lhp_id_foreign` (`lhp_id`);

--
-- Indexes for table `temuan`
--
ALTER TABLE `temuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `temuan_pemeriksaan_lhp_id_foreign` (`lhp_id`);

--
-- Indexes for table `tindak_lanjut`
--
ALTER TABLE `tindak_lanjut`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tindak_lanjut_lhp_id_foreign` (`lhp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lhp`
--
ALTER TABLE `lhp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temuan`
--
ALTER TABLE `temuan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tindak_lanjut`
--
ALTER TABLE `tindak_lanjut`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lhp`
--
ALTER TABLE `lhp`
  ADD CONSTRAINT `lhp_bagian_id_foreign` FOREIGN KEY (`bagian_id`) REFERENCES `bagian` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD CONSTRAINT `rekomendasi_lhp_id_foreign` FOREIGN KEY (`lhp_id`) REFERENCES `lhp` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `temuan`
--
ALTER TABLE `temuan`
  ADD CONSTRAINT `temuan_pemeriksaan_lhp_id_foreign` FOREIGN KEY (`lhp_id`) REFERENCES `lhp` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tindak_lanjut`
--
ALTER TABLE `tindak_lanjut`
  ADD CONSTRAINT `tindak_lanjut_lhp_id_foreign` FOREIGN KEY (`lhp_id`) REFERENCES `lhp` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
