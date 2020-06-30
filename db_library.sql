-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2020 at 06:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

CREATE TABLE `chude` (
  `cd_id` int(10) UNSIGNED NOT NULL,
  `cd_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chude`
--

INSERT INTO `chude` (`cd_id`, `cd_name`) VALUES
(1, 'Chu den 1'),
(2, 'Chu den 2'),
(3, 'Chu den 3'),
(4, 'Chu den 4');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commenter_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commenter_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '1',
  `child_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_bansao`
--

CREATE TABLE `db_bansao` (
  `bs_id` int(10) UNSIGNED NOT NULL,
  `bs_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bs_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bs_qty` int(11) NOT NULL,
  `id_sach` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_bansao`
--

INSERT INTO `db_bansao` (`bs_id`, `bs_code`, `bs_name`, `bs_qty`, `id_sach`, `created_at`, `updated_at`) VALUES
(19, 'COPY-19', 'Sach 2 - COPY', 1, 2, '2020-06-27 09:54:06', '2020-06-27 09:54:06'),
(20, 'COPY-20', 'Sach 1 - COPY', 1, 1, '2020-06-27 09:54:06', '2020-06-27 09:54:06'),
(21, 'COPY-21', 'Sach 1 - COPY', 1, 1, '2020-06-28 03:08:07', '2020-06-28 03:08:07'),
(22, 'COPY-22', 'Sach 1 - COPY', 1, 1, '2020-06-28 04:27:04', '2020-06-28 04:27:04'),
(23, 'COPY-23', 'Sach 2 - COPY', 1, 2, '2020-06-28 04:27:47', '2020-06-28 04:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `db_ct_phieumuon`
--

CREATE TABLE `db_ct_phieumuon` (
  `id` int(10) UNSIGNED NOT NULL,
  `ngay_muon` date NOT NULL,
  `ngay_tra` date NOT NULL,
  `id_phieumuon` int(10) UNSIGNED NOT NULL,
  `id_bansao` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_ct_phieumuon`
--

INSERT INTO `db_ct_phieumuon` (`id`, `ngay_muon`, `ngay_tra`, `id_phieumuon`, `id_bansao`) VALUES
(5, '2020-06-01', '2020-07-04', 7, 19),
(6, '2020-06-01', '2020-07-04', 7, 20),
(7, '2020-06-28', '2020-07-05', 8, 21),
(8, '2020-06-28', '2020-07-05', 9, 22),
(9, '2020-06-01', '2020-07-05', 10, 23);

-- --------------------------------------------------------

--
-- Table structure for table `db_ct_phieuphat`
--

CREATE TABLE `db_ct_phieuphat` (
  `id` int(10) UNSIGNED NOT NULL,
  `li_do` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `muc_phat` int(11) NOT NULL,
  `id_phieuphat` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_ct_phieuphat`
--

INSERT INTO `db_ct_phieuphat` (`id`, `li_do`, `muc_phat`, `id_phieuphat`) VALUES
(2, 'Nộp trễ 27 ngày', 135000, 5),
(3, 'Nộp trễ 27 ngày', 135000, 6);

-- --------------------------------------------------------

--
-- Table structure for table `db_ct_phieutra`
--

CREATE TABLE `db_ct_phieutra` (
  `id` int(10) UNSIGNED NOT NULL,
  `ngay_tra` date NOT NULL,
  `id_phieumuon` int(10) UNSIGNED NOT NULL,
  `id_phieutra` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_ct_phieutra`
--

INSERT INTO `db_ct_phieutra` (`id`, `ngay_tra`, `id_phieumuon`, `id_phieutra`) VALUES
(13, '2020-06-28', 8, 15),
(14, '2020-06-28', 7, 16),
(15, '2020-06-28', 9, 17),
(16, '2020-06-28', 10, 18);

-- --------------------------------------------------------

--
-- Table structure for table `db_nxb`
--

CREATE TABLE `db_nxb` (
  `nxb_id` int(10) UNSIGNED NOT NULL,
  `nxb_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_nxb`
--

INSERT INTO `db_nxb` (`nxb_id`, `nxb_name`) VALUES
(1, 'Nha xuat ban 1'),
(2, 'Nha xuat ban 2'),
(3, 'Nha xuat ban 3'),
(4, 'Nha xuat ban 4');

-- --------------------------------------------------------

--
-- Table structure for table `db_phieumuon`
--

CREATE TABLE `db_phieumuon` (
  `pm_id` int(10) UNSIGNED NOT NULL,
  `pm_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_status` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_phieumuon`
--

INSERT INTO `db_phieumuon` (`pm_id`, `pm_code`, `pm_status`, `id_user`, `created_at`, `updated_at`) VALUES
(7, 'PM-7', 2, 2, '2020-06-27 09:54:06', '2020-06-28 03:20:39'),
(8, 'PM-8', 2, 2, '2020-06-28 03:08:07', '2020-06-28 03:09:02'),
(9, 'PM-9', 2, 2, '2020-06-28 04:27:04', '2020-06-28 04:28:17'),
(10, 'PM-10', 2, 2, '2020-06-28 04:27:47', '2020-06-28 04:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `db_phieuphat`
--

CREATE TABLE `db_phieuphat` (
  `pp_id` int(10) UNSIGNED NOT NULL,
  `pp_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pp_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pp_status` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_phieuphat`
--

INSERT INTO `db_phieuphat` (`pp_id`, `pp_name`, `pp_code`, `pp_status`, `id_user`, `created_at`, `updated_at`) VALUES
(5, 'Phiếu phạt - 7', 'PP-5', 1, 2, '2020-06-28 03:20:39', '2020-06-28 03:20:39'),
(6, 'Phiếu phạt - 10', 'PP-6', 1, 2, '2020-06-28 04:28:32', '2020-06-28 04:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `db_phieutra`
--

CREATE TABLE `db_phieutra` (
  `pt_id` int(10) UNSIGNED NOT NULL,
  `pt_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pt_status` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_phieutra`
--

INSERT INTO `db_phieutra` (`pt_id`, `pt_code`, `pt_status`, `id_user`, `created_at`, `updated_at`) VALUES
(15, 'PT-15', 1, 2, '2020-06-28 03:09:02', '2020-06-28 03:09:02'),
(16, 'PT-16', 2, 2, '2020-06-28 03:20:39', '2020-06-28 03:20:39'),
(17, 'PT-17', 1, 2, '2020-06-28 04:28:17', '2020-06-28 04:28:17'),
(18, 'PT-18', 2, 2, '2020-06-28 04:28:32', '2020-06-28 04:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `db_tacgia`
--

CREATE TABLE `db_tacgia` (
  `tg_id` int(10) UNSIGNED NOT NULL,
  `tg_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_tacgia`
--

INSERT INTO `db_tacgia` (`tg_id`, `tg_name`) VALUES
(1, 'Tac gia 1', '2020-06-04'),
(2, 'Tac gia 2', '2020-06-19'),
(3, 'Tac gia 3', '2020-06-12'),
(4, 'Tac gia 4', '2020-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `db_vaitro`
--

CREATE TABLE `db_vaitro` (
  `vt_id` int(10) UNSIGNED NOT NULL,
  `vt_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_vaitro`
--

INSERT INTO `db_vaitro` (`vt_id`, `vt_name`) VALUES
(1, 'Admin'),
(2, 'Độc giả');

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
(120, '2018_06_30_113500_create_comments_table', 1),
(121, '2019_08_19_000000_create_failed_jobs_table', 1),
(122, '2020_06_20_002138_db_vaitro', 1),
(123, '2020_06_20_002139_tai_khoan', 1),
(124, '2020_06_20_173348_chude', 1),
(125, '2020_06_20_173349_db_tagia', 1),
(126, '2020_06_20_173350_db_nxb', 1),
(127, '2020_06_21_164711_sach', 1),
(128, '2020_06_26_011447_create_views_table', 1),
(129, '2020_06_26_025113_db_bansao', 1),
(130, '2020_06_26_025144_db_phieumuon', 1),
(131, '2020_06_26_025145_db_ct_phieumuon', 1),
(132, '2020_06_26_025222_db_phieutra', 1),
(133, '2020_06_26_025223_db_ct_phieutra', 1),
(134, '2020_06_26_025240_db_phieuphat', 1),
(135, '2020_06_26_035822_db_ct_phieuphat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `s_id` int(10) UNSIGNED NOT NULL,
  `s_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_status` int(11) NOT NULL,
  `views` int(11) DEFAULT NULL,
  `s_cd` int(10) UNSIGNED NOT NULL,
  `s_nxb` int(10) UNSIGNED NOT NULL,
  `s_tacgia` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`s_id`, `s_code`, `s_name`, `s_image`, `s_desc`, `s_status`, `views`, `s_cd`, `s_nxb`, `s_tacgia`, `created_at`, `updated_at`) VALUES
(1, 'BOOK-0001', 'Sach 1', 'PJYMB_1_N.jpg', '<p>adasdad</p>', 1, 11, 1, 1, 1, '2020-06-27 08:11:04', '2020-06-28 04:26:53'),
(2, 'BOOK-0002', 'Sach 2', '3QDa0_2_N.jpg', '<p>asdasdasd</p>', 1, 5, 1, 1, 1, '2020-06-27 08:11:16', '2020-06-28 04:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(10) UNSIGNED NOT NULL,
  `ma_user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `ma_user`, `ten_user`, `gioi_tinh`, `email`, `password`, `trang_thai`, `phone`, `level`, `created_at`, `updated_at`) VALUES
(1, 'NV-0001', 'Cao Vi', 1, 'admin@gmail.com', '$2y$10$0r.P9O1SNq0r7O8A8vVnheJgyM31wx4cGdCfsY6CT6hx/ROwUhVia', 1, '0762999994', 1, '2020-06-27 08:04:31', '2020-06-27 08:04:31'),
(2, 'Member-0002', 'Hung Huynh 123', 1, 'bb@gmail.com', '$2y$10$qe5JumAfux8mXftl.F3Ln.Hhg.0L9Yu9WovPzBbzU8/EUQV0qElV.', 1, '0762999994', 2, '2020-06-27 08:18:03', '2020-06-28 04:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `viewable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewable_id` bigint(20) UNSIGNED NOT NULL,
  `visitor` text COLLATE utf8mb4_unicode_ci,
  `collection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `viewable_type`, `viewable_id`, `visitor`, `collection`, `viewed_at`) VALUES
(1, 'App\\Models\\Sach', 1, '08oiedXunLnHxyVei724T5LS2ttes9VYh0nrwOBEzceKgzfIhYTXKZowf7TPSqGhvI5qf2JfYvAeuDBL', NULL, '2020-06-27 08:12:28'),
(2, 'App\\Models\\Sach', 1, 'typPWM1raPrG59oezWVwReydhPnB1nyZ0rKuRX7kt9IbhTA1tq6njXOQ4o6YzvnH9zn998shPHRGFGMP', NULL, '2020-06-27 08:13:06'),
(3, 'App\\Models\\Sach', 1, 'typPWM1raPrG59oezWVwReydhPnB1nyZ0rKuRX7kt9IbhTA1tq6njXOQ4o6YzvnH9zn998shPHRGFGMP', NULL, '2020-06-27 08:18:21'),
(4, 'App\\Models\\Sach', 1, 'typPWM1raPrG59oezWVwReydhPnB1nyZ0rKuRX7kt9IbhTA1tq6njXOQ4o6YzvnH9zn998shPHRGFGMP', NULL, '2020-06-27 09:09:25'),
(5, 'App\\Models\\Sach', 1, 'typPWM1raPrG59oezWVwReydhPnB1nyZ0rKuRX7kt9IbhTA1tq6njXOQ4o6YzvnH9zn998shPHRGFGMP', NULL, '2020-06-27 09:14:09'),
(6, 'App\\Models\\Sach', 1, 'typPWM1raPrG59oezWVwReydhPnB1nyZ0rKuRX7kt9IbhTA1tq6njXOQ4o6YzvnH9zn998shPHRGFGMP', NULL, '2020-06-27 09:20:13'),
(7, 'App\\Models\\Sach', 2, 'typPWM1raPrG59oezWVwReydhPnB1nyZ0rKuRX7kt9IbhTA1tq6njXOQ4o6YzvnH9zn998shPHRGFGMP', NULL, '2020-06-27 09:21:28'),
(8, 'App\\Models\\Sach', 2, 'typPWM1raPrG59oezWVwReydhPnB1nyZ0rKuRX7kt9IbhTA1tq6njXOQ4o6YzvnH9zn998shPHRGFGMP', NULL, '2020-06-27 09:24:29'),
(9, 'App\\Models\\Sach', 1, 'typPWM1raPrG59oezWVwReydhPnB1nyZ0rKuRX7kt9IbhTA1tq6njXOQ4o6YzvnH9zn998shPHRGFGMP', NULL, '2020-06-27 09:24:57'),
(10, 'App\\Models\\Sach', 2, 'typPWM1raPrG59oezWVwReydhPnB1nyZ0rKuRX7kt9IbhTA1tq6njXOQ4o6YzvnH9zn998shPHRGFGMP', NULL, '2020-06-27 11:17:22'),
(11, 'App\\Models\\Sach', 1, 'typPWM1raPrG59oezWVwReydhPnB1nyZ0rKuRX7kt9IbhTA1tq6njXOQ4o6YzvnH9zn998shPHRGFGMP', NULL, '2020-06-27 11:17:26'),
(12, 'App\\Models\\Sach', 1, 'typPWM1raPrG59oezWVwReydhPnB1nyZ0rKuRX7kt9IbhTA1tq6njXOQ4o6YzvnH9zn998shPHRGFGMP', NULL, '2020-06-28 03:07:58'),
(13, 'App\\Models\\Sach', 1, 'typPWM1raPrG59oezWVwReydhPnB1nyZ0rKuRX7kt9IbhTA1tq6njXOQ4o6YzvnH9zn998shPHRGFGMP', NULL, '2020-06-28 03:11:39'),
(14, 'App\\Models\\Sach', 2, 'typPWM1raPrG59oezWVwReydhPnB1nyZ0rKuRX7kt9IbhTA1tq6njXOQ4o6YzvnH9zn998shPHRGFGMP', NULL, '2020-06-28 03:11:46'),
(15, 'App\\Models\\Sach', 1, 'typPWM1raPrG59oezWVwReydhPnB1nyZ0rKuRX7kt9IbhTA1tq6njXOQ4o6YzvnH9zn998shPHRGFGMP', NULL, '2020-06-28 04:26:49'),
(16, 'App\\Models\\Sach', 2, 'typPWM1raPrG59oezWVwReydhPnB1nyZ0rKuRX7kt9IbhTA1tq6njXOQ4o6YzvnH9zn998shPHRGFGMP', NULL, '2020-06-28 04:27:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`cd_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commenter_id_commenter_type_index` (`commenter_id`,`commenter_type`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `comments_child_id_foreign` (`child_id`);

--
-- Indexes for table `db_bansao`
--
ALTER TABLE `db_bansao`
  ADD PRIMARY KEY (`bs_id`),
  ADD KEY `db_bansao_id_sach_foreign` (`id_sach`);

--
-- Indexes for table `db_ct_phieumuon`
--
ALTER TABLE `db_ct_phieumuon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `db_ct_phieumuon_id_phieumuon_foreign` (`id_phieumuon`),
  ADD KEY `db_ct_phieumuon_id_bansao_foreign` (`id_bansao`);

--
-- Indexes for table `db_ct_phieuphat`
--
ALTER TABLE `db_ct_phieuphat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `db_ct_phieuphat_id_phieuphat_foreign` (`id_phieuphat`);

--
-- Indexes for table `db_ct_phieutra`
--
ALTER TABLE `db_ct_phieutra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `db_ct_phieutra_id_phieumuon_foreign` (`id_phieumuon`),
  ADD KEY `db_ct_phieutra_id_phieutra_foreign` (`id_phieutra`);

--
-- Indexes for table `db_nxb`
--
ALTER TABLE `db_nxb`
  ADD PRIMARY KEY (`nxb_id`);

--
-- Indexes for table `db_phieumuon`
--
ALTER TABLE `db_phieumuon`
  ADD PRIMARY KEY (`pm_id`),
  ADD KEY `db_phieumuon_id_user_foreign` (`id_user`);

--
-- Indexes for table `db_phieuphat`
--
ALTER TABLE `db_phieuphat`
  ADD PRIMARY KEY (`pp_id`),
  ADD KEY `db_phieuphat_id_user_foreign` (`id_user`);

--
-- Indexes for table `db_phieutra`
--
ALTER TABLE `db_phieutra`
  ADD PRIMARY KEY (`pt_id`),
  ADD KEY `db_phieutra_id_user_foreign` (`id_user`);

--
-- Indexes for table `db_tacgia`
--
ALTER TABLE `db_tacgia`
  ADD PRIMARY KEY (`tg_id`);

--
-- Indexes for table `db_vaitro`
--
ALTER TABLE `db_vaitro`
  ADD PRIMARY KEY (`vt_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `sach_s_cd_foreign` (`s_cd`),
  ADD KEY `sach_s_nxb_foreign` (`s_nxb`),
  ADD KEY `sach_s_tacgia_foreign` (`s_tacgia`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tai_khoan_level_foreign` (`level`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_viewable_type_viewable_id_index` (`viewable_type`,`viewable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chude`
--
ALTER TABLE `chude`
  MODIFY `cd_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_bansao`
--
ALTER TABLE `db_bansao`
  MODIFY `bs_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `db_ct_phieumuon`
--
ALTER TABLE `db_ct_phieumuon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `db_ct_phieuphat`
--
ALTER TABLE `db_ct_phieuphat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_ct_phieutra`
--
ALTER TABLE `db_ct_phieutra`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `db_nxb`
--
ALTER TABLE `db_nxb`
  MODIFY `nxb_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `db_phieumuon`
--
ALTER TABLE `db_phieumuon`
  MODIFY `pm_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `db_phieuphat`
--
ALTER TABLE `db_phieuphat`
  MODIFY `pp_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `db_phieutra`
--
ALTER TABLE `db_phieutra`
  MODIFY `pt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `db_tacgia`
--
ALTER TABLE `db_tacgia`
  MODIFY `tg_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `db_vaitro`
--
ALTER TABLE `db_vaitro`
  MODIFY `vt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `s_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `db_bansao`
--
ALTER TABLE `db_bansao`
  ADD CONSTRAINT `db_bansao_id_sach_foreign` FOREIGN KEY (`id_sach`) REFERENCES `sach` (`s_id`) ON DELETE CASCADE;

--
-- Constraints for table `db_ct_phieumuon`
--
ALTER TABLE `db_ct_phieumuon`
  ADD CONSTRAINT `db_ct_phieumuon_id_bansao_foreign` FOREIGN KEY (`id_bansao`) REFERENCES `db_bansao` (`bs_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `db_ct_phieumuon_id_phieumuon_foreign` FOREIGN KEY (`id_phieumuon`) REFERENCES `db_phieumuon` (`pm_id`) ON DELETE CASCADE;

--
-- Constraints for table `db_ct_phieuphat`
--
ALTER TABLE `db_ct_phieuphat`
  ADD CONSTRAINT `db_ct_phieuphat_id_phieuphat_foreign` FOREIGN KEY (`id_phieuphat`) REFERENCES `db_phieuphat` (`pp_id`) ON DELETE CASCADE;

--
-- Constraints for table `db_ct_phieutra`
--
ALTER TABLE `db_ct_phieutra`
  ADD CONSTRAINT `db_ct_phieutra_id_phieumuon_foreign` FOREIGN KEY (`id_phieumuon`) REFERENCES `db_phieumuon` (`pm_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `db_ct_phieutra_id_phieutra_foreign` FOREIGN KEY (`id_phieutra`) REFERENCES `db_phieutra` (`pt_id`) ON DELETE CASCADE;

--
-- Constraints for table `db_phieumuon`
--
ALTER TABLE `db_phieumuon`
  ADD CONSTRAINT `db_phieumuon_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `tai_khoan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `db_phieuphat`
--
ALTER TABLE `db_phieuphat`
  ADD CONSTRAINT `db_phieuphat_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `tai_khoan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `db_phieutra`
--
ALTER TABLE `db_phieutra`
  ADD CONSTRAINT `db_phieutra_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `tai_khoan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_s_cd_foreign` FOREIGN KEY (`s_cd`) REFERENCES `chude` (`cd_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sach_s_nxb_foreign` FOREIGN KEY (`s_nxb`) REFERENCES `db_nxb` (`nxb_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sach_s_tacgia_foreign` FOREIGN KEY (`s_tacgia`) REFERENCES `db_tacgia` (`tg_id`) ON DELETE CASCADE;

--
-- Constraints for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD CONSTRAINT `tai_khoan_level_foreign` FOREIGN KEY (`level`) REFERENCES `db_vaitro` (`vt_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
