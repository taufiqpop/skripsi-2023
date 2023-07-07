-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 09:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rapmafm`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'jurnalistik', 'Jurnalistik'),
(3, 'produksi', 'Produksi'),
(4, 'user', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2),
(2, 3),
(3, 4),
(3, 5),
(4, 6),
(4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'teknisionair', NULL, '2023-04-17 08:57:10', 0),
(2, '::1', 'ainunafi', NULL, '2023-04-17 09:08:17', 0),
(3, '::1', 'ainunafi@gmail.com', 2, '2023-04-17 09:11:41', 1),
(4, '::1', 'safinaff@gmail.com', 3, '2023-04-17 09:16:39', 1),
(5, '::1', 'alexandria@gmail.com', 4, '2023-04-17 09:18:56', 1),
(6, '::1', 'dazuf@gmail.com', 5, '2023-04-17 09:19:33', 1),
(7, '::1', 'teknisionair@gmail.com', 1, '2023-04-17 09:24:52', 1),
(8, '::1', 'teknisionair@gmail.com', 1, '2023-04-17 12:49:50', 1),
(9, '::1', 'teknisionair@gmail.com', 1, '2023-04-17 15:10:43', 1),
(10, '::1', 'teknisionair@gmail.com', 1, '2023-04-18 07:25:56', 1),
(11, '::1', 'crewrpm21@gmail.com', 6, '2023-04-18 08:12:27', 1),
(12, '::1', 'teknisionair@gmail.com', 1, '2023-04-18 08:17:04', 1),
(13, '::1', 'crewrpm21@gmail.com', 6, '2023-04-18 08:17:20', 1),
(14, '::1', 'teknisionair@gmail.com', 1, '2023-04-18 08:28:13', 1),
(15, '::1', 'crewrpm21@gmail.com', 6, '2023-04-18 08:44:06', 1),
(16, '::1', 'crewrpm21', NULL, '2023-04-18 08:51:14', 0),
(17, '::1', 'teknisionair', NULL, '2023-04-18 08:51:18', 0),
(18, '::1', 'crewrpm21', NULL, '2023-04-18 08:51:26', 0),
(19, '::1', 'crewrpm21@gmail.com', 6, '2023-04-18 08:51:32', 1),
(20, '::1', 'teknisionair@gmail.com', 1, '2023-04-18 08:51:51', 1),
(21, '::1', 'teknisionair', NULL, '2023-04-18 08:53:44', 0),
(22, '::1', 'teknisionair@gmail.com', 1, '2023-04-18 08:53:49', 1),
(23, '::1', 'teknisionair', NULL, '2023-04-18 08:57:41', 0),
(24, '::1', 'teknisionair@gmail.com', 1, '2023-04-18 08:57:48', 1),
(25, '::1', 'teknisionair@gmail.com', 1, '2023-04-18 08:58:03', 1),
(26, '::1', 'teknisionair@gmail.com', 1, '2023-04-18 08:58:36', 1),
(27, '::1', 'alexandria@gmail.com', 4, '2023-04-18 09:30:34', 1),
(28, '::1', 'dazuf', NULL, '2023-04-18 09:31:46', 0),
(29, '::1', 'dazuf@gmail.com', 5, '2023-04-18 09:31:58', 1),
(30, '::1', 'teknisionair@gmail.com', 1, '2023-04-18 09:36:16', 1),
(31, '::1', 'dazuf@gmail.com', 5, '2023-04-18 09:41:08', 1),
(32, '::1', 'teknisionair@gmail.com', 1, '2023-04-18 09:52:33', 1),
(33, '::1', 'teknisionair@gmail.com', 1, '2023-04-18 09:54:39', 1),
(34, '::1', 'teknisionair@gmail.com', 1, '2023-04-24 04:11:23', 1),
(35, '::1', 'teknisionair@gmail.com', 1, '2023-04-24 12:59:39', 1),
(36, '::1', 'teknisionair@gmail.com', 1, '2023-04-24 13:11:00', 1),
(37, '::1', 'teknisionair@gmail.com', 1, '2023-04-24 17:52:01', 1),
(38, '::1', 'teknisionair@gmail.com', 1, '2023-04-25 16:00:16', 1),
(39, '::1', 'teknisionair@gmail.com', 1, '2023-04-25 16:05:07', 1),
(40, '::1', 'teknisionair@gmail.com', 1, '2023-04-26 11:30:51', 1),
(41, '::1', 'teknisionair@gmail.com', 1, '2023-04-26 11:31:32', 1),
(42, '::1', 'teknisionair', NULL, '2023-04-26 11:31:45', 0),
(43, '::1', 'teknisionair@gmail.com', 1, '2023-04-26 11:31:46', 1),
(44, '::1', 'teknisionair@gmail.com', 1, '2023-04-26 11:34:09', 1),
(45, '::1', 'teknisionair@gmail.com', 1, '2023-05-02 00:23:55', 1),
(46, '::1', 'teknisionair@gmail.com', 1, '2023-05-02 09:12:43', 1),
(47, '::1', 'teknisionair@gmail.com', 1, '2023-05-03 16:30:33', 1),
(48, '::1', 'ainunafi@gmail.com', 2, '2023-05-14 10:58:56', 1),
(49, '::1', 'teknisionair@gmail.com', 1, '2023-05-14 11:04:35', 1),
(50, '::1', 'crewrpm21@gmail.com', 6, '2023-05-14 11:16:00', 1),
(51, '::1', 'teknisionair@gmail.com', 1, '2023-05-14 11:18:00', 1),
(52, '::1', 'teknisionair@gmail.com', 1, '2023-05-19 04:04:09', 1),
(53, '::1', 'teknisionair@gmail.com', 1, '2023-05-19 04:07:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage User\'s Profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5, '2023-04-17-085226', 'App\\Database\\Migrations\\Newsflash', 'default', 'App', 1681721804, 1),
(6, '2023-04-17-085230', 'App\\Database\\Migrations\\Podcast', 'default', 'App', 1681721804, 1),
(7, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1681721822, 2),
(8, '2023-04-24-190218', 'App\\Database\\Migrations\\Pesan', 'default', 'App', 1682362953, 3);

-- --------------------------------------------------------

--
-- Table structure for table `newsflash`
--

CREATE TABLE `newsflash` (
  `id` int(11) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `newsflash`
--

INSERT INTO `newsflash` (`id`, `judul`, `deskripsi`, `link`, `images`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Catat Tanggalnya! Red Velvet akan Gelar Konser di Indonesia!', 'Girl group asal Korea, Red Velvet akan menggelar konser bertajuk ', 'http://rapmafm.ukm.ums.ac.id/2023/03/catat-tanggalnya-red-velvet-akan-gelar.html', 'red-velvet.png', '2023-04-17 09:06:12', '2023-04-17 09:06:19', NULL),
(2, 'LIBUR TELAH TIBA, UMS UMUMKAN LIBUR IDUL FITRI 1444H', 'Nah, dilansir dari @umsofficialid informasi mengenai hari libur Idul Fitri 1444 H telah di umumkan. Berdasarkan surat No. 372/A.2-VII/BR/III/2023 dalam rangka memberikan kesempatan kepada keluarga besar Universitas Muhammadiyah Surakarta untuk merayakan H', 'http://rapmafm.ukm.ums.ac.id/2023/04/libur-telah-tiba-ums-umumkan-libur-idul.html', 'libur-lebaran.png', '2023-04-17 09:07:12', '2023-04-17 09:07:12', NULL),
(3, 'Pisang Goreng, Camilan Autentik Indonesia Terpilih Menjadi Dessert Terenak di Dunia !', 'Camilan pisang goreng asal Indonesia dinobatkan sebagai dessert terenak di dunia versi TasteAtlas. Hal yang sangat membanggakan yaitu pisang goreng bersanding dengan 50 daftar makanan penutup lainnya dari berbagai negara di belahan dunia, dan pisang goren', 'http://rapmafm.ukm.ums.ac.id/2023/02/pisang-goreng-camilan-autentik.html', 'pisang-goreng.png', '2023-04-17 09:12:27', '2023-04-17 09:12:27', NULL),
(4, 'Taylor Swift Resmi Memulai Konser The Eras Tour!', 'Gelaran konser perdana dalam tur tersebut disebut mendatangkan lebih dari 65 ribu penonton di stadion tersebut. Kabarnya, Swift membawakan sebanyak 44 lagu yang terbagi menjadi 10 tema, dengan durasi kurang lebih selama 3 jam penuh tanpa jeda loh, CampusB', 'http://rapmafm.ukm.ums.ac.id/2023/03/taylor-swift-resmi-memulai-konser-eras.html', 'taylor swift.png', '2023-04-17 09:13:21', '2023-04-17 09:13:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `name`, `subject`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Taufiq Pop', 'Pop', 'Halo Sayang', '2023-04-24 19:27:15', '2023-04-24 19:27:15', NULL),
(2, 'Anonymous', 'Hayo Siapa', 'Heyo', '2023-04-24 19:27:45', '2023-04-24 19:27:45', NULL),
(3, 'Taufiq Pop', 'Halo Min', 'Coba Aja', '2023-04-24 19:52:03', '2023-04-24 19:52:03', NULL),
(4, 'Siapa Hayo', 'Kepo Lho', 'Hehhee', '2023-04-24 19:58:33', '2023-04-24 19:58:33', NULL),
(5, 'kapan rilis pop?', 'aku poplovers >_<', 'jgn lupa subscribe youtube \"Taufiq Pop\" yaa :D', '2023-04-25 16:05:00', '2023-04-25 16:05:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `id` int(11) UNSIGNED NOT NULL,
  `program` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`id`, `program`, `judul`, `deskripsi`, `link`, `images`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'TOP 15', 'Cinta, Cita, Perjuangan dan Patah Hati', 'Rapma Top15 hadir untuk menyajikan 15 deretan lagu terpopuler yang ada di Rapma Fm. Rapma Top15 terbagi dalam dua bagian yang berisikan chart Indo dan Mancanegara. Chart Indo berada di minggu ganjil dan chart mancanegara berada di minggu genap.', 'https://open.spotify.com/episode/3SzzwZRfHLyEJFSdhM9gVW?si=gHnNpteCTS2om-hHrP32oA', 'TOP15_1.png', '2023-04-17 09:24:01', '2023-04-17 09:24:15', NULL),
(2, 'NOSATNIGHT', 'Mencintai atau Dicintai?', 'Program ini berisi tentang topik pembicaraan seputar cinta atau hubungan anak remaja jaman sekarang yang disampaikan dengan relax dan fun. Program ini bertujuan agar Campusbrainers lupa akan “malam minggu” dan larut dalam keseruan No Satnight.', 'https://open.spotify.com/episode/2mru4VWHqOk0g702FerJDl?si=1ab330e8de2d41f9', 'NoSatnight_1.png', '2023-04-17 09:25:30', '2023-04-17 09:25:30', NULL),
(3, 'CLASSIC NIGHT', 'Ke Warnet Ngapain Aja Sih?', 'Classic Night adalah Special Program dimana Penyiar memutarkan lagu tahun 90an dan 2000an (maksimal tahun 2009) dengan Konten yang membahas mengenai gaya hidup, film, lagu, sampai dengan acara TV yang lagi hype di era 90an dan 2000an.', 'https://open.spotify.com/episode/55unnCEFHtseDyaKI9REcs?si=70cf567daa564741&nd=1', 'ClassicNight_1.png', '2023-04-17 09:26:32', '2023-04-17 09:26:32', NULL),
(4, 'MERINDING', 'Kisah Mistis Di Lubang Buaya', 'Merinding adalah Special Program dimana CampusBrainers mendapatkan pengalaman horror dari penyiar. Disiarkan menjelang tengah malam, malam jumat CampusBrainers akan semakin mencekam dengan hadirnya #HORROR dan #PARAMEX yang akan membuat bulu kuduk merindi', 'https://open.spotify.com/episode/1T4gXy589d4nDZ820F0W2q?si=b43b7113efea4f2b&nd=1', 'Merinding_1.png', '2023-04-17 09:26:57', '2023-04-17 09:27:09', NULL),
(5, 'TOP 15', 'Hadapi Berdua Biar \'Smooth Like Butter', 'Rapma Top15 hadir untuk menyajikan 15 deretan lagu terpopuler yang ada di Rapma Fm. Rapma Top15 terbagi dalam dua bagian yang berisikan chart Indo dan Mancanegara. Chart Indo berada di minggu ganjil dan chart mancanegara berada di minggu genap.', 'https://open.spotify.com/episode/7sngXCShTucBWehBeIAvqE', 'TOP15_2.png', '2023-04-17 09:29:11', '2023-04-17 09:29:11', NULL),
(6, 'KING & QUEEN', 'Travelling Sampai Kuliner Legend, Cocok Dimasukin List Kamu!', 'Program ini menyajikan informasi seputar travelling, fashion dan Culinary. King and Queen akan menjawab kebingungan campus brainers untuk mencari referensi dan informasi seputar dunia travelling, fashion dan culinary', 'https://open.spotify.com/episode/3UQz9EO6DUvuurHthAvlkI', 'KingNQueen_1.png', '2023-04-17 09:29:50', '2023-04-24 06:48:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'teknisionair@gmail.com', 'teknisionair', 'Taufiq Pop', '1681722207_65a2ea9787cbac7b5ec0.jpg', '$2y$10$t6rYza03FkmXCSdyiRHUQue4/YR3rYfTO9CH7PTzM9TlrMgAb/wNa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-04-17 08:57:47', '2023-05-14 11:38:11', NULL),
(2, 'ainunafi@gmail.com', 'ainunafi', 'Ainunafi', '1681722985_214a0a401d223bc7fba0.jpg', '$2y$10$KZMDMg.udSPWGqAIas4Xbe3dovYRTaIzjZAMe8ZKv3F.VgCmCBSJi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-04-17 09:09:11', '2023-05-14 11:04:17', NULL),
(3, 'safinaff@gmail.com', 'safinaff', 'Safina', '1681723036_fd5c874742c6ea6c3f30.jpg', '$2y$10$2lZxqGwDyBdqvF5tSHpJduHfTD/wOSBCIiJimdV/ais.AA.xq/k2q', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-04-17 09:09:37', '2023-04-17 09:17:16', NULL),
(4, 'alexandria@gmail.com', 'alexandria', 'Alexandria', '1681723160_ead7c23f27f6fab3a8a8.jpg', '$2y$10$Llc7wtm1IvwwqIK58KASmudZ9ZEsqiQYd1FeCRXjjtJmz5lkkiIje', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-04-17 09:09:48', '2023-04-17 09:19:20', NULL),
(5, 'dazuf@gmail.com', 'dazuf', 'Dazuf', '1681723229_97ab1e0322d48b4d29df.jpg', '$2y$10$UEm5FKXHBDUdkV55Ddk9COzkgShu.CtuEko6yU6WuQJmneAUaC7Wu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-04-17 09:10:29', '2023-04-18 09:31:19', NULL),
(6, 'crewrpm21@gmail.com', 'crewrpm21', 'Crew RPM 21', 'default.svg', '$2y$10$NOfqq72jxfFzr8bzy/0L..3dm7A07RyX4b1n/DgS2NVzgsL1U5yFi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-04-17 09:10:49', '2023-05-14 11:16:11', NULL),
(7, 'hutao@gmail.com', 'hutao', 'Hu Tao', 'default.svg', '$2y$10$.bEXYKLOAb.5X5laUNLybOigMbmEtsfgQutXLHxsZCFvfLi/d0RNa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-04-18 09:54:31', '2023-05-14 11:37:41', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsflash`
--
ALTER TABLE `newsflash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `newsflash`
--
ALTER TABLE `newsflash`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
