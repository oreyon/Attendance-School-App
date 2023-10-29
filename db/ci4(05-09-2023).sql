-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 09:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
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
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 2),
(2, 4);

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
(1, 2),
(2, 1);

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
(1, '::1', 'oreo@gmail.com', 1, '2023-07-09 20:32:22', 1),
(2, '::1', 'admin', NULL, '2023-07-09 20:35:19', 0),
(3, '::1', 'admin', 2, '2023-07-09 20:35:41', 0),
(4, '::1', 'admin@gmail.com', 2, '2023-07-09 20:36:04', 1),
(5, '::1', 'oreo@gmail.com', 1, '2023-07-09 20:45:42', 1),
(6, '::1', 'admin@gmail.com', 2, '2023-07-09 20:46:00', 1),
(7, '::1', 'oreoataya', NULL, '2023-07-09 20:50:17', 0),
(8, '::1', 'oreo@gmail.com', 1, '2023-07-09 20:50:26', 1),
(9, '::1', 'admin@gmail.com', 2, '2023-07-09 20:59:01', 1),
(10, '::1', 'oreo@gmail.com', 1, '2023-07-09 21:00:18', 1),
(11, '::1', 'admin@gmail.com', 2, '2023-07-10 05:25:33', 1),
(12, '::1', 'oreo@gmail.com', 1, '2023-07-16 00:11:56', 1),
(13, '::1', 'akhmadsyarwani', NULL, '2023-07-16 01:03:28', 0),
(14, '::1', 'akhmadsyarwani', NULL, '2023-07-16 01:03:47', 0),
(15, '::1', 'admin', NULL, '2023-07-16 01:04:18', 0),
(16, '::1', 'admin', NULL, '2023-07-16 01:04:25', 0),
(17, '::1', 'admin', NULL, '2023-07-16 01:04:52', 0),
(18, '::1', 'oreoataya', NULL, '2023-07-16 01:05:02', 0),
(19, '::1', 'oreoataya', NULL, '2023-07-16 01:05:17', 0),
(20, '::1', 'oreo@gmail.com', 1, '2023-07-16 01:08:03', 1),
(21, '::1', 'admin@gmail.com', 2, '2023-07-16 01:08:16', 1),
(22, '::1', 'admin@gmail.com', 2, '2023-08-17 02:15:56', 1),
(23, '::1', 'oreo@gmail.com', 1, '2023-08-17 05:06:21', 1),
(24, '::1', 'admin@gmail.com', 2, '2023-08-17 05:07:04', 1),
(25, '::1', 'admin@gmail.com', 2, '2023-08-18 01:33:55', 1),
(26, '::1', 'oreo@gmail.com', 1, '2023-08-18 02:33:04', 1),
(27, '::1', 'admin@gmail.com', 2, '2023-08-18 03:03:23', 1),
(28, '::1', 'oreo@gmail.com', 1, '2023-08-18 03:05:33', 1),
(29, '::1', 'oreo@gmail.com', 1, '2023-08-18 09:32:26', 1),
(30, '::1', 'admin@gmail.com', 2, '2023-08-18 09:32:32', 1),
(31, '::1', 'admin@gmail.com', 2, '2023-08-18 10:31:52', 1),
(32, '::1', 'admin@gmail.com', 2, '2023-08-18 10:55:36', 1),
(33, '::1', 'admin@gmail.com', 2, '2023-08-18 14:53:50', 1),
(34, '::1', 'admin@gmail.com', 2, '2023-08-18 14:54:15', 1),
(35, '::1', 'oreo@gmail.com', 1, '2023-08-18 14:54:31', 1),
(36, '::1', 'admin@gmail.com', 2, '2023-08-18 15:18:21', 1),
(37, '::1', 'admin@gmail.com', 2, '2023-08-18 15:29:33', 1),
(38, '::1', 'admin@gmail.com', 2, '2023-08-18 15:30:55', 1),
(39, '::1', 'admin@gmail.com', 2, '2023-08-19 07:46:12', 1),
(40, '::1', 'admin@gmail.com', 2, '2023-08-19 09:00:30', 1),
(41, '::1', 'admin@gmail.com', 2, '2023-08-19 09:02:58', 1),
(42, '::1', 'admin@gmail.com', 2, '2023-08-19 09:04:44', 1),
(43, '::1', 'oreo@gmail.com', 1, '2023-08-19 09:04:55', 1),
(44, '::1', 'oreo@gmail.com', 1, '2023-08-19 09:11:50', 1),
(45, '::1', 'admin@gmail.com', 2, '2023-08-19 09:14:03', 1),
(46, '::1', 'admin@gmail.com', 2, '2023-09-05 03:34:33', 1);

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
(2, 'manage-profile', 'Manage User\'s Profile'),
(3, 'manage-data', 'Can Manipulate All Data'),
(4, 'insert-data', 'Can Insert Data To Database');

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
(104, '2023-06-10-054358', 'App\\Database\\Migrations\\Guru', 'default', 'App', 1688590974, 1),
(105, '2023-06-13-180944', 'App\\Database\\Migrations\\Users', 'default', 'App', 1688590974, 1),
(106, '2023-06-28-095801', 'App\\Database\\Migrations\\Jurusan', 'default', 'App', 1688590974, 1),
(107, '2023-06-28-123220', 'App\\Database\\Migrations\\Kelas', 'default', 'App', 1688590974, 1),
(108, '2023-06-28-123757', 'App\\Database\\Migrations\\Students', 'default', 'App', 1688590974, 1),
(109, '2023-07-03-090817', 'App\\Database\\Migrations\\Bulan', 'default', 'App', 1688590974, 1),
(110, '2023-07-03-091801', 'App\\Database\\Migrations\\Tahun', 'default', 'App', 1688590974, 1),
(111, '2023-07-03-092717', 'App\\Database\\Migrations\\Semester', 'default', 'App', 1688590974, 1),
(112, '2023-07-03-093950', 'App\\Database\\Migrations\\Mapels', 'default', 'App', 1688590974, 1),
(113, '2023-07-03-095840', 'App\\Database\\Migrations\\Presents', 'default', 'App', 1688590974, 1),
(114, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1688933124, 2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) UNSIGNED NOT NULL,
  `sampul` varchar(255) DEFAULT NULL,
  `studentname` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `sampul`, `studentname`, `slug`, `date_created`, `date_updated`, `date_deleted`) VALUES
(2, 'kiruru.png', 'Shandika Galih', 'shandika-galih', NULL, '2023-06-07 15:48:00', NULL),
(25, 'bongocat.jpg', 'Muhammad Faisal', 'muhammad-faisal', '2023-06-07 15:37:13', '2023-06-07 15:46:17', NULL),
(26, 'kitagawa.png', 'Zaenal Arifin', 'zaenal-arifin', '2023-06-07 15:48:27', '2023-06-07 15:48:27', NULL),
(27, '1686154547_d62a5f93037e82a6868d.png', 'Yusuke Murata', 'yusuke-murata', '2023-06-07 16:15:47', '2023-06-07 16:15:47', NULL),
(46, '1686315314_13e76b0739977019d585.jpg', 'Chonk', 'chonk', '2023-06-09 12:55:14', '2023-06-09 12:55:14', NULL),
(47, '1686670341_eb1abf30fe67bf7de9e8.jpg', 'HAMDIYAH', 'hamdiyah', '2023-06-13 15:32:21', '2023-06-13 15:32:21', NULL),
(48, '1686670371_b293e150880687450cd6.jpg', 'ALFINO JOSHUA', 'alfino-joshua', '2023-06-13 15:32:51', '2023-06-13 15:32:51', NULL),
(49, '1686670393_1f6db49f742ee89ea2f9.jpg', 'IRFAN', 'irfan', '2023-06-13 15:33:13', '2023-06-13 15:33:13', NULL),
(50, '1686670413_f385ec17be74720e4ae7.jpg', 'SUSIANA', 'susiana', '2023-06-13 15:33:33', '2023-06-13 15:33:33', NULL),
(51, '1686670443_7ced70955556ae575db9.jpg', 'M. HARUN NUSA AL MU`MININ', 'm-harun-nusa-al-muminin', '2023-06-13 15:34:03', '2023-06-13 15:34:03', NULL),
(52, '1687799522_52a9a3d8d67a2bcd8560.png', 'Syarwani Akhmad', 'syarwani-akhmad', '2023-06-26 17:12:02', '2023-06-26 17:12:02', NULL),
(53, '1687807656_ca3ad2637744da19b2ad.jpg', 'Kaguya', 'kaguya', '2023-06-26 19:27:36', '2023-06-26 19:27:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bulan`
--

CREATE TABLE `tb_bulan` (
  `db_idbulan` int(5) UNSIGNED NOT NULL,
  `db_namabulan` varchar(100) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_bulan`
--

INSERT INTO `tb_bulan` (`db_idbulan`, `db_namabulan`, `date_created`, `date_updated`, `date_deleted`) VALUES
(1, 'JANUARI', NULL, NULL, NULL),
(2, 'FEBRUARI', NULL, NULL, NULL),
(3, 'MARET', NULL, NULL, NULL),
(4, 'APRIL', NULL, NULL, NULL),
(5, 'MEI', NULL, NULL, NULL),
(6, 'JUNI', NULL, NULL, NULL),
(7, 'JULY', NULL, NULL, NULL),
(8, 'AGUSTUS', NULL, NULL, NULL),
(9, 'SEPTEMBER', NULL, NULL, NULL),
(10, 'OKTOBER', NULL, NULL, NULL),
(11, 'NOVEMBER', NULL, NULL, NULL),
(12, 'DESEMBER', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `db_idguru` int(5) UNSIGNED NOT NULL,
  `db_nisn` int(10) NOT NULL,
  `db_namaguru` varchar(100) NOT NULL,
  `db_namauser` varchar(100) NOT NULL,
  `db_password` varchar(100) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`db_idguru`, `db_nisn`, `db_namaguru`, `db_namauser`, `db_password`, `date_created`, `date_updated`, `date_deleted`) VALUES
(1, 2147483647, 'Admin', 'admin', '$2y$10$GHswfaDRN2/FCZ.5xomsmOO/0/DdWyFNZXtpDZ/xfsODpE7AaSy5e', NULL, NULL, NULL),
(2, 2147483647, 'Akhmad Syarwani', 'akhmadsyarwani', '$2y$10$n3TNbbla2/xbJCxdg6RicOVsRw2xloluBZ80ZunXfX/tUREUs2eT6', NULL, NULL, NULL),
(3, 2147483647, 'Kenti Yuliana', 'kentiyuliana', '$2y$10$6kHhnlBGKvpziMEtYxjnRuClvp7UDbfrSt9GygIhIav32z054lMbC', NULL, NULL, NULL),
(4, 2147483647, 'M. Hidayat', 'mhidayat', '$2y$10$dj6Eet0k.4r8kh4S1wFUDewpa31C08NIskw0.XVjULNycTRvdqD3W', NULL, NULL, NULL),
(5, 2147483647, 'Root', 'root', '$2y$10$N.zu4D.TS.Zbp/rpaVEFyOwqq84lOiSlfemzWk9o2ckdSkEvNM352', NULL, NULL, NULL),
(6, 2147483647, 'Andi', 'andi', '$2y$10$0Y2A4w.FzDSKuObi2puWNOYtDPhomFZ2p4T/UAGrc/yvlxFatsgES', NULL, NULL, NULL),
(7, 2147483647, 'Budi', 'budi', '$2y$10$xfi6EjJo3kZ19Ks8xFaq2OJ0Vt61mHkbs9zQOrpvzfOKoLUWW167a', NULL, NULL, NULL),
(8, 2147483647, 'Ani', 'ani', '$2y$10$7UhRWxEBGSidKN8bJWlj5.zdveJZj69ZNTJyGu21cjoHsudsUQqQG', NULL, NULL, NULL),
(9, 2147483647, 'Anang', 'anang', '$2y$10$YzEq/uuo026777KrQVq0Wuwm0frVtXThQDZn9yYnhuV8OoHIYjcNq', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `db_idjurusan` int(5) UNSIGNED NOT NULL,
  `db_namajurusan` varchar(100) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`db_idjurusan`, `db_namajurusan`, `date_created`, `date_updated`, `date_deleted`) VALUES
(1, 'MANAJEMEN PERKANTORAN', NULL, NULL, NULL),
(2, 'PEMASARAN', NULL, NULL, NULL),
(3, 'USAHA PERJALANAN WISATA', NULL, NULL, NULL),
(4, 'AKUTANSI DAN KEUANGAN LEMBAGA', NULL, NULL, NULL),
(5, 'PERHOTELAN', NULL, NULL, NULL),
(6, 'DESAIN KOMUNIKASI VISUAL', NULL, NULL, NULL),
(7, 'TEKNIK KOMPUTER JARINGAN DAN TELEKOMUNIKASI', NULL, NULL, NULL),
(8, 'BROADCASTING DAN PERFILMAN', NULL, NULL, NULL),
(9, 'KULINER', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `db_idkelas` int(5) UNSIGNED NOT NULL,
  `db_tingkatkelas` varchar(100) NOT NULL,
  `db_namakelas` varchar(100) NOT NULL,
  `db_tahunangkatan` varchar(100) NOT NULL,
  `db_jurusanid` int(5) UNSIGNED NOT NULL,
  `db_guruid` int(5) UNSIGNED NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`db_idkelas`, `db_tingkatkelas`, `db_namakelas`, `db_tahunangkatan`, `db_jurusanid`, `db_guruid`, `date_created`, `date_updated`, `date_deleted`) VALUES
(1, 'X', 'A', '2020', 1, 1, NULL, NULL, NULL),
(2, 'XI', 'A', '2020', 1, 1, NULL, NULL, NULL),
(3, 'XII', 'A', '2020', 1, 1, NULL, NULL, NULL),
(4, 'X', 'B', '2020', 2, 2, NULL, NULL, NULL),
(5, 'XI', 'B', '2020', 2, 2, NULL, NULL, NULL),
(6, 'XII', 'B', '2020', 2, 2, NULL, NULL, NULL),
(7, 'X', 'C', '2020', 3, 3, NULL, NULL, NULL),
(8, 'XI', 'C', '2020', 3, 3, NULL, NULL, NULL),
(9, 'XII', 'C', '2020', 3, 3, NULL, NULL, NULL),
(10, 'X', 'D', '2020', 4, 4, NULL, NULL, NULL),
(11, 'XI', 'D', '2020', 4, 4, NULL, NULL, NULL),
(12, 'XII', 'D', '2020', 4, 4, NULL, NULL, NULL),
(13, 'X', 'E', '2020', 5, 5, NULL, NULL, NULL),
(14, 'XI', 'E', '2020', 5, 5, NULL, NULL, NULL),
(15, 'XII', 'E', '2020', 5, 5, NULL, NULL, NULL),
(16, 'X', 'F', '2020', 6, 6, NULL, NULL, NULL),
(17, 'XI', 'F', '2020', 6, 6, NULL, NULL, NULL),
(18, 'XII', 'F', '2020', 6, 6, NULL, NULL, NULL),
(19, 'X', 'G', '2020', 7, 7, NULL, NULL, NULL),
(20, 'XI', 'G', '2020', 7, 7, NULL, NULL, NULL),
(21, 'XII', 'G', '2020', 7, 7, NULL, NULL, NULL),
(22, 'X', 'H', '2020', 8, 8, NULL, NULL, NULL),
(23, 'XI', 'H', '2020', 8, 8, NULL, NULL, NULL),
(24, 'XII', 'H', '2020', 8, 8, NULL, NULL, NULL),
(25, 'X', 'I', '2020', 9, 9, NULL, NULL, NULL),
(26, 'XI', 'I', '2020', 9, 9, NULL, NULL, NULL),
(27, 'XII', 'I', '2020', 9, 9, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapels`
--

CREATE TABLE `tb_mapels` (
  `db_idmapel` int(5) UNSIGNED NOT NULL,
  `db_namamapel` varchar(100) NOT NULL,
  `db_kelasid` int(5) UNSIGNED NOT NULL,
  `db_jurusanid` int(5) UNSIGNED NOT NULL,
  `db_guruid` int(5) UNSIGNED NOT NULL,
  `db_tahunid` int(5) UNSIGNED NOT NULL,
  `db_semesterid` int(5) UNSIGNED NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_mapels`
--

INSERT INTO `tb_mapels` (`db_idmapel`, `db_namamapel`, `db_kelasid`, `db_jurusanid`, `db_guruid`, `db_tahunid`, `db_semesterid`, `date_created`, `date_updated`, `date_deleted`) VALUES
(1, 'MATEMATIKA', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(2, 'KEWARGANEGARAAN', 1, 1, 1, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_presents`
--

CREATE TABLE `tb_presents` (
  `db_idpresent` int(5) UNSIGNED NOT NULL,
  `db_kelasid` int(5) UNSIGNED NOT NULL,
  `db_mapelid` int(5) UNSIGNED NOT NULL,
  `db_date` date DEFAULT NULL,
  `db_bulanid` int(5) UNSIGNED NOT NULL,
  `db_tahunid` int(5) UNSIGNED NOT NULL,
  `db_semesterid` int(5) UNSIGNED NOT NULL,
  `db_studentid` int(11) UNSIGNED NOT NULL,
  `db_keterangan` int(5) UNSIGNED NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_presents`
--

INSERT INTO `tb_presents` (`db_idpresent`, `db_kelasid`, `db_mapelid`, `db_date`, `db_bulanid`, `db_tahunid`, `db_semesterid`, `db_studentid`, `db_keterangan`, `date_created`, `date_updated`, `date_deleted`) VALUES
(21, 1, 1, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(22, 1, 1, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(23, 1, 1, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(24, 1, 1, '0000-00-00', 1, 1, 1, 4, 1, NULL, NULL, NULL),
(25, 1, 1, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(26, 1, 1, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(27, 1, 1, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(28, 1, 1, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(29, 1, 1, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(30, 1, 1, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(31, 1, 1, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(32, 1, 1, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(33, 1, 1, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(34, 1, 1, '0000-00-00', 1, 1, 1, 4, 1, NULL, NULL, NULL),
(35, 1, 1, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(36, 1, 1, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(37, 1, 1, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(38, 1, 1, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(39, 1, 1, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(40, 1, 1, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(41, 1, 1, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(42, 1, 1, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(43, 1, 1, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(44, 1, 1, '0000-00-00', 1, 1, 1, 4, 1, NULL, NULL, NULL),
(45, 1, 1, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(46, 1, 1, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(47, 1, 1, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(48, 1, 1, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(49, 1, 1, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(50, 1, 1, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(51, 1, 1, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(52, 1, 1, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(53, 1, 1, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(54, 1, 1, '0000-00-00', 1, 1, 1, 4, 1, NULL, NULL, NULL),
(55, 1, 1, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(56, 1, 1, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(57, 1, 1, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(58, 1, 1, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(59, 1, 1, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(60, 1, 1, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(61, 1, 1, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(62, 1, 1, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(63, 1, 1, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(64, 1, 1, '0000-00-00', 1, 1, 1, 4, 1, NULL, NULL, NULL),
(65, 1, 1, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(66, 1, 1, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(67, 1, 1, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(68, 1, 1, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(69, 1, 1, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(70, 1, 1, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(71, 1, 1, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(72, 1, 1, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(73, 1, 1, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(74, 1, 1, '0000-00-00', 1, 1, 1, 4, 1, NULL, NULL, NULL),
(75, 1, 1, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(76, 1, 1, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(77, 1, 1, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(78, 1, 1, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(79, 1, 1, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(80, 1, 1, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(81, 1, 1, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(82, 1, 1, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(83, 1, 1, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(84, 1, 1, '0000-00-00', 1, 1, 1, 4, 1, NULL, NULL, NULL),
(85, 1, 1, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(86, 1, 1, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(87, 1, 1, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(88, 1, 1, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(89, 1, 1, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(90, 1, 1, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(91, 1, 1, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(92, 1, 1, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(93, 1, 1, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(94, 1, 1, '0000-00-00', 1, 1, 1, 4, 1, NULL, NULL, NULL),
(95, 1, 1, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(96, 1, 1, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(97, 1, 1, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(98, 1, 1, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(99, 1, 1, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(100, 1, 1, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(101, 1, 1, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(102, 1, 1, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(103, 1, 1, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(104, 1, 1, '0000-00-00', 1, 1, 1, 4, 1, NULL, NULL, NULL),
(105, 1, 1, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(106, 1, 1, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(107, 1, 1, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(108, 1, 1, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(109, 1, 1, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(110, 1, 1, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(111, 1, 1, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(112, 1, 1, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(113, 1, 1, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(114, 1, 1, '0000-00-00', 1, 1, 1, 4, 1, NULL, NULL, NULL),
(115, 1, 1, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(116, 1, 1, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(117, 1, 1, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(118, 1, 1, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(119, 1, 1, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(120, 1, 1, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(121, 1, 1, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(122, 1, 1, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(123, 1, 1, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(124, 1, 1, '0000-00-00', 1, 1, 1, 4, 1, NULL, NULL, NULL),
(125, 1, 1, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(126, 1, 1, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(127, 1, 1, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(128, 1, 1, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(129, 1, 1, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(130, 1, 1, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(131, 1, 1, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(132, 1, 1, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(133, 1, 1, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(134, 1, 1, '0000-00-00', 1, 1, 1, 4, 1, NULL, NULL, NULL),
(135, 1, 1, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(136, 1, 1, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(137, 1, 1, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(138, 1, 1, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(139, 1, 1, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(140, 1, 1, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(141, 1, 1, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(142, 1, 1, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(143, 1, 1, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(144, 1, 1, '0000-00-00', 1, 1, 1, 4, 1, NULL, NULL, NULL),
(145, 1, 1, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(146, 1, 1, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(147, 1, 1, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(148, 1, 1, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(149, 1, 1, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(150, 1, 1, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(151, 1, 1, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(152, 1, 1, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(153, 1, 1, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(154, 1, 1, '0000-00-00', 1, 1, 1, 4, 1, NULL, NULL, NULL),
(155, 1, 1, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(156, 1, 1, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(157, 1, 1, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(158, 1, 1, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(159, 1, 1, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(160, 1, 1, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(161, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(162, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(163, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(164, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(165, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(166, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(167, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(168, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(169, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(170, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(171, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(172, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(173, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(174, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(175, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(176, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(177, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(178, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(179, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(180, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(181, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(182, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(183, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(184, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(185, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(186, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(187, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(188, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(189, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(190, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(191, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(192, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(193, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(194, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(195, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(196, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(197, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(198, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(199, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(200, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(201, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(202, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(203, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(204, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(205, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(206, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(207, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(208, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(209, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(210, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(211, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(212, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(213, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(214, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(215, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(216, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(217, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(218, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(219, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(220, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(221, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(222, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(223, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(224, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(225, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(226, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(227, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(228, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(229, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(230, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(231, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(232, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(233, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(234, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(235, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(236, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(237, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(238, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(239, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(240, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(241, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(242, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(243, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(244, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(245, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(246, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(247, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(248, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(249, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(250, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(251, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(252, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(253, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(254, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(255, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(256, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(257, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(258, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(259, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(260, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(261, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(262, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(263, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(264, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(265, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(266, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(267, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(268, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(269, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(270, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(271, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(272, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(273, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(274, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(275, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(276, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(277, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(278, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(279, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(280, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(281, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(282, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(283, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(284, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(285, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(286, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(287, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(288, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(289, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(290, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(291, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(292, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(293, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(294, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(295, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(296, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(297, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(298, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(299, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(300, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(301, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(302, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(303, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(304, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(305, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(306, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(307, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(308, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(309, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(310, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(311, 1, 2, '0000-00-00', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(312, 1, 2, '0000-00-00', 1, 1, 1, 2, 1, NULL, NULL, NULL),
(313, 1, 2, '0000-00-00', 1, 1, 1, 3, 1, NULL, NULL, NULL),
(314, 1, 2, '0000-00-00', 1, 1, 1, 4, 4, NULL, NULL, NULL),
(315, 1, 2, '0000-00-00', 1, 1, 1, 5, 1, NULL, NULL, NULL),
(316, 1, 2, '0000-00-00', 1, 1, 1, 6, 1, NULL, NULL, NULL),
(317, 1, 2, '0000-00-00', 1, 1, 1, 7, 1, NULL, NULL, NULL),
(318, 1, 2, '0000-00-00', 1, 1, 1, 8, 1, NULL, NULL, NULL),
(319, 1, 2, '0000-00-00', 1, 1, 1, 9, 1, NULL, NULL, NULL),
(320, 1, 2, '0000-00-00', 1, 1, 1, 10, 1, NULL, NULL, NULL),
(893, 1, 1, '2023-08-18', 8, 1, 1, 1, 1, NULL, NULL, NULL),
(894, 1, 1, '2023-08-18', 8, 1, 1, 2, 1, NULL, NULL, NULL),
(895, 1, 1, '2023-08-18', 8, 1, 1, 3, 1, NULL, NULL, NULL),
(896, 1, 1, '2023-08-18', 8, 1, 1, 4, 1, NULL, NULL, NULL),
(897, 1, 1, '2023-08-18', 8, 1, 1, 5, 1, NULL, NULL, NULL),
(898, 1, 1, '2023-08-18', 8, 1, 1, 6, 1, NULL, NULL, NULL),
(899, 1, 1, '2023-08-18', 8, 1, 1, 7, 1, NULL, NULL, NULL),
(900, 1, 1, '2023-08-18', 8, 1, 1, 8, 1, NULL, NULL, NULL),
(901, 1, 1, '2023-08-18', 8, 1, 1, 9, 1, NULL, NULL, NULL),
(902, 1, 1, '2023-08-18', 8, 1, 1, 10, 1, NULL, NULL, NULL),
(903, 1, 1, '2023-08-18', 8, 1, 1, 1, 1, NULL, NULL, NULL),
(904, 1, 1, '2023-08-18', 8, 1, 1, 2, 1, NULL, NULL, NULL),
(905, 1, 1, '2023-08-18', 8, 1, 1, 3, 1, NULL, NULL, NULL),
(906, 1, 1, '2023-08-18', 8, 1, 1, 4, 1, NULL, NULL, NULL),
(907, 1, 1, '2023-08-18', 8, 1, 1, 5, 1, NULL, NULL, NULL),
(908, 1, 1, '2023-08-18', 8, 1, 1, 6, 1, NULL, NULL, NULL),
(909, 1, 1, '2023-08-18', 8, 1, 1, 7, 1, NULL, NULL, NULL),
(910, 1, 1, '2023-08-18', 8, 1, 1, 8, 1, NULL, NULL, NULL),
(911, 1, 1, '2023-08-18', 8, 1, 1, 9, 1, NULL, NULL, NULL),
(912, 1, 1, '2023-08-18', 8, 1, 1, 10, 1, NULL, NULL, NULL),
(913, 1, 2, '2023-08-19', 8, 1, 1, 1, 1, NULL, NULL, NULL),
(914, 1, 2, '2023-08-19', 8, 1, 1, 2, 2, NULL, NULL, NULL),
(915, 1, 2, '2023-08-19', 8, 1, 1, 3, 1, NULL, NULL, NULL),
(916, 1, 2, '2023-08-19', 8, 1, 1, 4, 1, NULL, NULL, NULL),
(917, 1, 2, '2023-08-19', 8, 1, 1, 5, 1, NULL, NULL, NULL),
(918, 1, 2, '2023-08-19', 8, 1, 1, 6, 1, NULL, NULL, NULL),
(919, 1, 2, '2023-08-19', 8, 1, 1, 7, 1, NULL, NULL, NULL),
(920, 1, 2, '2023-08-19', 8, 1, 1, 8, 1, NULL, NULL, NULL),
(921, 1, 2, '2023-08-19', 8, 1, 1, 9, 1, NULL, NULL, NULL),
(922, 1, 2, '2023-08-19', 8, 1, 1, 10, 1, NULL, NULL, NULL),
(923, 1, 1, '2023-08-19', 8, 1, 1, 1, 1, NULL, NULL, NULL),
(924, 1, 1, '2023-08-19', 8, 1, 1, 2, 1, NULL, NULL, NULL),
(925, 1, 1, '2023-08-19', 8, 1, 1, 3, 1, NULL, NULL, NULL),
(926, 1, 1, '2023-08-19', 8, 1, 1, 4, 1, NULL, NULL, NULL),
(927, 1, 1, '2023-08-19', 8, 1, 1, 5, 1, NULL, NULL, NULL),
(928, 1, 1, '2023-08-19', 8, 1, 1, 6, 1, NULL, NULL, NULL),
(929, 1, 1, '2023-08-19', 8, 1, 1, 7, 1, NULL, NULL, NULL),
(930, 1, 1, '2023-08-19', 8, 1, 1, 8, 1, NULL, NULL, NULL),
(931, 1, 1, '2023-08-19', 8, 1, 1, 9, 1, NULL, NULL, NULL),
(932, 1, 1, '2023-08-19', 8, 1, 1, 10, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_semester`
--

CREATE TABLE `tb_semester` (
  `db_idsemester` int(5) UNSIGNED NOT NULL,
  `db_namasemester` varchar(100) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_semester`
--

INSERT INTO `tb_semester` (`db_idsemester`, `db_namasemester`, `date_created`, `date_updated`, `date_deleted`) VALUES
(1, 'GENAP', NULL, NULL, NULL),
(2, 'GANJIL', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_students`
--

CREATE TABLE `tb_students` (
  `id` int(11) UNSIGNED NOT NULL,
  `sampul` varchar(255) DEFAULT NULL,
  `studentname` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `db_kelasid` int(5) UNSIGNED NOT NULL,
  `db_jurusanid` int(5) UNSIGNED NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_students`
--

INSERT INTO `tb_students` (`id`, `sampul`, `studentname`, `slug`, `db_kelasid`, `db_jurusanid`, `date_created`, `date_updated`, `date_deleted`) VALUES
(1, 'default.png', 'Shandika Galih', 'shandika-galih', 1, 1, NULL, NULL, NULL),
(2, 'default.png', 'Philip Miles', 'philip-miles', 1, 1, NULL, NULL, NULL),
(3, 'default.png', 'Denni Halloway', 'denni-halloway', 1, 1, NULL, NULL, NULL),
(4, 'default.png', 'Muhammad Andi', 'muhammad-andi', 1, 1, NULL, NULL, NULL),
(5, 'default.png', 'Muhammad Shandi', 'muhammad-shandi', 1, 1, NULL, NULL, NULL),
(6, 'default.png', 'Diana Caitilin', 'diana-caitilin', 1, 1, NULL, NULL, NULL),
(7, 'default.png', 'Try Hansen', 'try-hansen', 1, 1, NULL, NULL, NULL),
(8, 'default.png', 'Adam Sandler', 'adam-sandler', 1, 1, NULL, NULL, NULL),
(9, 'default.png', 'Captain Marvel', 'captain-marvel', 1, 1, NULL, NULL, NULL),
(10, 'default.png', 'Steve Roger', 'steve-roger', 1, 1, NULL, NULL, NULL),
(11, 'default.png', 'Steve Roger', 'steve-roger', 2, 1, NULL, NULL, NULL),
(12, 'default.png', 'Muhammad Fikran', 'muhammad-fikran', 2, 1, NULL, NULL, NULL),
(13, 'default.png', 'Muhammad Fikri', 'muhammad-fikri', 2, 1, NULL, NULL, NULL),
(14, 'default.png', 'Ai Hosino', 'ai-hosino', 2, 1, NULL, NULL, NULL),
(15, 'default.png', 'Aqua Hoshino', 'aqua-hosino', 2, 1, NULL, NULL, NULL),
(16, 'default.png', 'Ruby Hosino', 'ruby-hosino', 3, 1, NULL, NULL, NULL),
(17, 'default.png', 'Kanna Hanazawa', 'kanna-hanazawa', 3, 1, NULL, NULL, NULL),
(18, 'default.png', 'Tommy Blackburn', 'tommy-blackburn', 3, 1, NULL, NULL, NULL),
(19, 'default.png', 'Jane Hayes', 'jane-hayes', 3, 1, NULL, NULL, NULL),
(20, 'default.png', 'Robbie Kent', 'robbie-kent', 3, 1, NULL, NULL, NULL),
(21, 'default.png', 'Andrea Craig', 'andrea-craig', 3, 1, NULL, NULL, NULL),
(22, 'default.png', 'michael-french', '', 3, 1, NULL, NULL, NULL),
(23, 'default.png', 'Aida Gilbert', 'aida-gilbert', 3, 1, NULL, NULL, NULL),
(24, 'default.png', 'Cecil Dickson', 'cecil-dickson', 3, 1, NULL, NULL, NULL),
(25, 'default.png', 'Lydia Ayers', 'lydia-ayers', 3, 1, NULL, NULL, NULL),
(26, 'default.png', 'Claud Mcintosh', 'claud-mcintosh', 4, 2, NULL, NULL, NULL),
(27, 'default.png', 'Candy Christian', 'candy-christian', 4, 2, NULL, NULL, NULL),
(28, 'default.png', 'Teddy Sweeney', 'teddy-sweeney', 4, 2, NULL, NULL, NULL),
(29, 'default.png', 'Miquel Wheeler', 'miquel-wheeler', 4, 2, NULL, NULL, NULL),
(30, 'default.png', 'August Beck', 'august-beck', 4, 2, NULL, NULL, NULL),
(31, 'default.png', 'Rodger Potter', 'rodger-potter', 4, 2, NULL, NULL, NULL),
(32, 'default.png', 'Bettie Wade', 'bettie-wade', 4, 2, NULL, NULL, NULL),
(33, 'default.png', 'George Lambert', 'george-lambert', 4, 2, NULL, NULL, NULL),
(34, 'default.png', 'Emory Stanton', 'emory-stanton', 4, 2, NULL, NULL, NULL),
(35, 'default.png', 'Sheila Branch', 'sheila-branch', 4, 2, NULL, NULL, NULL),
(36, 'default.png', 'Cassandra Harrington', 'cassandra-harrington', 5, 2, NULL, NULL, NULL),
(37, 'default.png', 'Jerrod Parsons', 'jerrod-parsons', 5, 2, NULL, NULL, NULL),
(38, 'default.png', 'Claudio Watkins', 'claudio-watkins', 5, 2, NULL, NULL, NULL),
(39, 'default.png', 'Eddy Fuller', 'eddy-fuller', 5, 2, NULL, NULL, NULL),
(40, 'default.png', 'Raphael Ross', 'raphael-ross', 5, 2, NULL, NULL, NULL),
(41, 'default.png', 'Kristen Carroll', 'kristen-carroll', 5, 2, NULL, NULL, NULL),
(42, 'default.png', 'Aimee Warner', 'aimee-warner', 5, 2, NULL, NULL, NULL),
(43, 'default.png', 'Harlan Andrade', 'harlan-andrade', 5, 2, NULL, NULL, NULL),
(44, 'default.png', 'David Cobb', 'david-cobb', 5, 2, NULL, NULL, NULL),
(45, 'default.png', 'Meagan Wells', 'meagan-wells', 5, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahun`
--

CREATE TABLE `tb_tahun` (
  `db_idtahun` int(5) UNSIGNED NOT NULL,
  `db_tahunajar` varchar(100) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_tahun`
--

INSERT INTO `tb_tahun` (`db_idtahun`, `db_tahunajar`, `date_created`, `date_updated`, `date_deleted`) VALUES
(1, '2020/2021', NULL, NULL, NULL),
(2, '2021/2022', NULL, NULL, NULL),
(3, '2022/2023', NULL, NULL, NULL),
(4, '2023/2024', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `db_iduser` int(10) UNSIGNED NOT NULL,
  `db_nisn` int(10) NOT NULL,
  `db_namauser` varchar(100) NOT NULL,
  `db_password` varchar(100) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`db_iduser`, `db_nisn`, `db_namauser`, `db_password`, `date_created`, `date_updated`, `date_deleted`) VALUES
(1, 2147483647, 'admin', '$2y$10$5CEj.fdHjnjLzFmPgl.YoOQQoZVkYReZHPN/14ot6.hcLWhdjtvq.', NULL, NULL, NULL),
(2, 2147483647, 'akhmadsyarwani', '$2y$10$fE/v9BBbTGRkzIMvV3P6Wec0aPKnYOezXlM0htkQNtV7lkt3SVjPy', NULL, NULL, NULL),
(3, 2147483647, 'kentiyuliana', '$2y$10$y1mIsVXrD7tKOZbn27Ca0O/6V3qaaOnVge7nPVFFmbJ8OEPHyBa8a', NULL, NULL, NULL),
(4, 2147483647, 'mhidayat', '$2y$10$AUZ3YxW1N3ZRitxqqm9W7OgrCcxXNVr1KjqQwel7Ko8ihpCL55BX.', NULL, NULL, NULL),
(5, 2147483647, 'root', '$2y$10$JY6QaHlNAsZjjn/albdzDeeHHXR/.hge0GE9dq4kDepJbO56Uiu4W', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `nisn` int(11) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.png',
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

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `nisn`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'oreo@gmail.com', 'oreoataya', NULL, NULL, 'default.png', '$2y$10$5q9aBPxB60hmCoUNJkI6Ku.2uWDEHk6xN23oIfUWGHUk3OnL.Kaaq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-07-09 20:29:38', '2023-07-09 20:29:38', NULL),
(2, 'admin@gmail.com', 'admin', NULL, NULL, 'default.png', '$2y$10$5q9aBPxB60hmCoUNJkI6Ku.2uWDEHk6xN23oIfUWGHUk3OnL.Kaaq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL);

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bulan`
--
ALTER TABLE `tb_bulan`
  ADD PRIMARY KEY (`db_idbulan`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`db_idguru`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`db_idjurusan`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`db_idkelas`),
  ADD KEY `tb_kelas_db_guruid_foreign` (`db_guruid`),
  ADD KEY `tb_kelas_db_jurusanid_foreign` (`db_jurusanid`);

--
-- Indexes for table `tb_mapels`
--
ALTER TABLE `tb_mapels`
  ADD PRIMARY KEY (`db_idmapel`),
  ADD KEY `tb_mapels_db_kelasid_foreign` (`db_kelasid`),
  ADD KEY `tb_mapels_db_jurusanid_foreign` (`db_jurusanid`),
  ADD KEY `tb_mapels_db_guruid_foreign` (`db_guruid`),
  ADD KEY `tb_mapels_db_tahunid_foreign` (`db_tahunid`),
  ADD KEY `tb_mapels_db_semesterid_foreign` (`db_semesterid`);

--
-- Indexes for table `tb_presents`
--
ALTER TABLE `tb_presents`
  ADD PRIMARY KEY (`db_idpresent`),
  ADD KEY `tb_presents_db_bulanid_foreign` (`db_bulanid`),
  ADD KEY `tb_presents_db_kelasid_foreign` (`db_kelasid`),
  ADD KEY `tb_presents_db_mapelid_foreign` (`db_mapelid`),
  ADD KEY `tb_presents_db_semesterid_foreign` (`db_semesterid`),
  ADD KEY `tb_presents_db_studentid_foreign` (`db_studentid`),
  ADD KEY `tb_presents_db_tahunid_foreign` (`db_tahunid`);

--
-- Indexes for table `tb_semester`
--
ALTER TABLE `tb_semester`
  ADD PRIMARY KEY (`db_idsemester`);

--
-- Indexes for table `tb_students`
--
ALTER TABLE `tb_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_students_db_kelasid_foreign` (`db_kelasid`),
  ADD KEY `tb_students_db_jurusanid_foreign` (`db_jurusanid`);

--
-- Indexes for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  ADD PRIMARY KEY (`db_idtahun`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`db_iduser`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_bulan`
--
ALTER TABLE `tb_bulan`
  MODIFY `db_idbulan` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `db_idguru` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `db_idjurusan` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `db_idkelas` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_mapels`
--
ALTER TABLE `tb_mapels`
  MODIFY `db_idmapel` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_presents`
--
ALTER TABLE `tb_presents`
  MODIFY `db_idpresent` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=933;

--
-- AUTO_INCREMENT for table `tb_semester`
--
ALTER TABLE `tb_semester`
  MODIFY `db_idsemester` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_students`
--
ALTER TABLE `tb_students`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  MODIFY `db_idtahun` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `db_iduser` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

--
-- Constraints for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD CONSTRAINT `tb_kelas_db_guruid_foreign` FOREIGN KEY (`db_guruid`) REFERENCES `tb_guru` (`db_idguru`),
  ADD CONSTRAINT `tb_kelas_db_jurusanid_foreign` FOREIGN KEY (`db_jurusanid`) REFERENCES `tb_jurusan` (`db_idjurusan`);

--
-- Constraints for table `tb_mapels`
--
ALTER TABLE `tb_mapels`
  ADD CONSTRAINT `tb_mapels_db_guruid_foreign` FOREIGN KEY (`db_guruid`) REFERENCES `tb_guru` (`db_idguru`),
  ADD CONSTRAINT `tb_mapels_db_jurusanid_foreign` FOREIGN KEY (`db_jurusanid`) REFERENCES `tb_jurusan` (`db_idjurusan`),
  ADD CONSTRAINT `tb_mapels_db_kelasid_foreign` FOREIGN KEY (`db_kelasid`) REFERENCES `tb_kelas` (`db_idkelas`),
  ADD CONSTRAINT `tb_mapels_db_semesterid_foreign` FOREIGN KEY (`db_semesterid`) REFERENCES `tb_semester` (`db_idsemester`),
  ADD CONSTRAINT `tb_mapels_db_tahunid_foreign` FOREIGN KEY (`db_tahunid`) REFERENCES `tb_tahun` (`db_idtahun`);

--
-- Constraints for table `tb_presents`
--
ALTER TABLE `tb_presents`
  ADD CONSTRAINT `tb_presents_db_bulanid_foreign` FOREIGN KEY (`db_bulanid`) REFERENCES `tb_bulan` (`db_idbulan`),
  ADD CONSTRAINT `tb_presents_db_kelasid_foreign` FOREIGN KEY (`db_kelasid`) REFERENCES `tb_kelas` (`db_idkelas`),
  ADD CONSTRAINT `tb_presents_db_mapelid_foreign` FOREIGN KEY (`db_mapelid`) REFERENCES `tb_mapels` (`db_idmapel`),
  ADD CONSTRAINT `tb_presents_db_semesterid_foreign` FOREIGN KEY (`db_semesterid`) REFERENCES `tb_semester` (`db_idsemester`),
  ADD CONSTRAINT `tb_presents_db_studentid_foreign` FOREIGN KEY (`db_studentid`) REFERENCES `tb_students` (`id`),
  ADD CONSTRAINT `tb_presents_db_tahunid_foreign` FOREIGN KEY (`db_tahunid`) REFERENCES `tb_tahun` (`db_idtahun`);

--
-- Constraints for table `tb_students`
--
ALTER TABLE `tb_students`
  ADD CONSTRAINT `tb_students_db_jurusanid_foreign` FOREIGN KEY (`db_jurusanid`) REFERENCES `tb_jurusan` (`db_idjurusan`),
  ADD CONSTRAINT `tb_students_db_kelasid_foreign` FOREIGN KEY (`db_kelasid`) REFERENCES `tb_kelas` (`db_idkelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
