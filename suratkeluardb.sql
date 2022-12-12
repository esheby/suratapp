-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 03:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suratkeluardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kodedua`
--

CREATE TABLE `kodedua` (
  `id` int(10) NOT NULL,
  `noksatu` varchar(10) NOT NULL,
  `nokdua` varchar(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kodedua`
--

INSERT INTO `kodedua` (`id`, `noksatu`, `nokdua`, `judul`, `deskripsi`) VALUES
(1, '01', '00', 'Analisa Intelijen Terorisme', 'Naskah-naskah yang berkaitan dengan kegiatan analisa intelijen terhadap dukungan teknis di bidang operasional intelijen dan analisis intelijen.'),
(2, '01', '01', 'Koordinasi Intelijen Terorisme', 'Naskah-naskah yang berkaitan dengan kegiatan koordinasi intelijen terhadap dukungan teknis di bidang operasional intelijen dan analisis intelijen.'),
(3, '01', '02', 'Pelaksanaan Intelijen Terorisme', 'Naskah-naskah yang berkaitan dengan kegiatan pelaksanaan intelijen terhadap dukungan teknis di bidang operasional intelijen dan analisis intelijen.'),
(4, '01', '03', 'Monitoring dan Evaluasi Pelaksanaan Intelijen Terorisme', 'Naskah-naskah yang berkaitan dengan kegiatan monitoring dan evaluasi pelaksanaan intelijen terhadap dukungan teknis di bidang operasional intelijen dan analisis intelijen.'),
(5, '02', '00', 'Pengumpulan dan Pengolahan Data Terorisme', 'Naskah-naskah yang berkaitan dengan kegiatan pengumpulan dan pengolahan data kejahatan terorisme.'),
(6, '02', '01', 'Koordinasi Penanggulangan Teroris di Bidang Teknologi Informasi', 'Naskah-naskah yang berkaitan dengan kegiatan koordinasi penanggulangan teroris di bidang teknologi informasi.'),
(7, '02', '02', 'Monitoring dan Evaluasi Pelaksanaan Program Teknologi Informasi Penanggulangan Terorisme', 'Naskah-naskah yang berkaitan dengan kegiatan monitoring dan evaluasi Pelaksanaan Program Teknologi Informasi Penanggulangan Terorisme.'),
(8, '03', '00', 'Penyiapan Informasi Penanggulangan Tindak Pidana Terorisme', 'Naskah-naskah yang berkaitan dengan kegiatan penyiapan informasi penanggulangan tindak pidana terorisme di bidang kesiapsiagaan dan pengendalian krisis tindak pidana terorisme.'),
(9, '03', '01', 'Koordinasi Pelaksanaan Kesiapsiagaan dan Pengendalian Krisis Terorisme', 'Naskah-naskah yang berkaitan dengan kegiatan koordinasi pelaksanaan dan pengendalian krisis terorisme.'),
(10, '03', '02', 'Monitoring dan Evaluasi Pelaksanaan terhadap Kesiapsiagaan dan Pengendalian Krisis Terorisme', 'Naskah-naskah yang berkaitan dengan kegiatan monitoring dan evaluasi pelaksanaan dan pengendalian krisis terorisme.');

-- --------------------------------------------------------

--
-- Table structure for table `kodesatu`
--

CREATE TABLE `kodesatu` (
  `id` int(10) NOT NULL,
  `noksatu` varchar(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kodesatu`
--

INSERT INTO `kodesatu` (`id`, `noksatu`, `judul`, `deskripsi`) VALUES
(1, '00', 'Kebijakan Penindakan Terorisme', 'Naskah-naskah yang berkaitan dengan penyusunan kebijakan penindakan terorisme.\r\nMulai dari perencanaan, pelaksanaan sampai penetapan.'),
(2, '01', 'Intelijen Terorisme', NULL),
(3, '02', 'Pengumpulan dan Pengolahan Data Informasi Kejahatan Terorisme', NULL),
(4, '03', 'Kesiapsiagaan dan Pengendalian Krisis Terorisme', NULL),
(5, '04', 'Satuan Tugas Penindakan Terorisme', 'Naskah-naskah yang berkaitan dengan kegiatan satuan tugas dalam rangka pelaksanaan penindakan terorisme.');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2022_12_10_095145_create_sk2022s_table', 1),
(14, '2014_10_12_000000_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sk2022s`
--

CREATE TABLE `sk2022s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `kepada` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `konseptor` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sk2022s`
--

INSERT INTO `sk2022s` (`id`, `tanggal_surat`, `nomor`, `kepada`, `perihal`, `konseptor`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '2022-12-05', NULL, 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Permohonan Peserta', 'Shabrina', 'Nodin', '2022-12-11 04:00:03', '2022-12-11 04:00:03'),
(2, '2022-12-05', NULL, 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Permohonan Peserta', 'Shabrina', 'Nodin', '2022-12-11 04:01:51', '2022-12-11 04:01:51'),
(3, '2022-12-05', NULL, 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Permohonan Peserta', 'Shabrina', 'Nodin', '2022-12-11 04:02:58', '2022-12-11 04:02:58'),
(4, '2022-12-05', NULL, 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Permohonan Peserta', 'Shabrina', 'Nodin', '2022-12-11 04:05:00', '2022-12-11 04:05:00'),
(5, '2022-12-11', 'KP.05.01/5/2022', 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Permohonan Peserta Diklat', 'Shabrina', 'Nodin', '2022-12-11 04:06:17', '2022-12-11 04:06:17'),
(6, '2022-12-09', NULL, 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Permohonan Peserta', 'Shabrina', 'Nodin', '2022-12-11 04:12:56', '2022-12-11 04:12:56'),
(7, '2022-12-05', NULL, 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Permohonan Peserta', 'Shabrina', 'Nodin', '2022-12-11 04:14:18', '2022-12-11 04:14:18'),
(8, '2022-12-09', NULL, 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Permohonan Peserta', 'Shabrina', 'Nodin', '2022-12-11 04:14:59', '2022-12-11 04:14:59'),
(9, '2022-12-08', NULL, 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Permohonan Peserta', 'Shabrina', 'Nodin', '2022-12-11 04:16:19', '2022-12-11 04:16:19'),
(10, '2022-12-05', NULL, 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Permohonan Peserta', 'Shabrina', 'Nodin', '2022-12-11 04:17:18', '2022-12-11 04:17:18'),
(11, '2022-12-05', 'KP.05.01/11/2022', 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Permohonan Peserta', 'Shabrina', 'Nodin', '2022-12-11 04:17:56', '2022-12-11 04:17:56'),
(12, '2022-12-05', 'KP.05.01/12/2022-12-05', 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Permohonan Peserta', 'Shabrina', 'Nodin', '2022-12-11 04:18:44', '2022-12-11 04:18:44'),
(14, '2023-01-01', 'KP.05.01/14/2023', 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Permohonan Peserta', 'Shabrina', 'Nodin', '2022-12-11 04:22:15', '2022-12-11 04:22:15'),
(15, '2022-12-13', 'PN.02.01/15/2022', 'Direktur Penindakan', 'Laporan Informasi Laporan Pemblokiran', 'Arini', 'Nodin', '2022-12-11 04:31:58', '2022-12-11 04:31:58'),
(16, '2022-12-12', 'PN.04/16/2022', 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Surat Pernyataan Satuan Tugas Penindakan', 'Shabrina', 'Surat', '2022-12-11 04:32:49', '2022-12-11 06:33:36'),
(17, '2022-12-12', 'PN.02.00/17/2022', 'Direktur Penindakan', 'Laporan Informasi Laporan Pemblokiran', 'Arini', 'Nodin', '2022-12-11 09:20:08', '2022-12-11 09:20:08'),
(18, '2022-12-05', 'KP.05.01/18/2022', 'Direktur Penindakan', 'Permohonan Peserta Diklat', 'Arini', 'Nodin', '2022-12-11 09:21:40', '2022-12-11 09:21:40'),
(19, '2022-12-14', 'PN.02.00/19/2022', 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Laporan Informasi Laporan Pemblokiran', 'Shabrina', 'Nodin', '2022-12-11 09:23:32', '2022-12-11 09:23:32'),
(20, '2022-12-12', 'KP.05.02/20/2022', 'Direktur Penindakan', 'Permohonan Peserta Diklat', 'Arini', 'Surat', '2022-12-11 09:25:19', '2022-12-11 12:19:58'),
(21, '2022-12-12', 'KP.05.01/21/2022j', 'Deputi Bidang Penindakan dan Pembinaan Kemampuan', 'Permohonan Peserta Diklat', 'Shabrina', 'Surat', '2022-12-11 12:21:40', '2022-12-11 12:32:52'),
(22, '2022-12-07', 'PN.02.01/22/2022', 'Direktur Penindakan', 'Laporan Informasi Laporan Pemblokiran', 'Sandi', 'Nodin', '2022-12-12 02:10:22', '2022-12-12 02:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kodedua`
--
ALTER TABLE `kodedua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kodesatu`
--
ALTER TABLE `kodesatu`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sk2022s`
--
ALTER TABLE `sk2022s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kodedua`
--
ALTER TABLE `kodedua`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kodesatu`
--
ALTER TABLE `kodesatu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sk2022s`
--
ALTER TABLE `sk2022s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
