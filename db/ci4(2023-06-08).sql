-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 04:32 AM
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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `sampul` varchar(255) DEFAULT NULL,
  `studentname` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `sampul`, `studentname`, `slug`, `kelas`, `jurusan`, `date_created`, `date_updated`, `date_deleted`) VALUES
(2, 'kiruru.png', 'Shandika Galih', 'shandika-galih', 'XII', 'TKJ', NULL, '2023-06-07 15:48:00', NULL),
(25, 'bongocat.jpg', 'Muhammad Faisal', 'muhammad-faisal', 'X', 'TKJ', '2023-06-07 15:37:13', '2023-06-07 15:46:17', NULL),
(26, 'kitagawa.png', 'Zaenal Arifin', 'zaenal-arifin', 'X', 'TKJ', '2023-06-07 15:48:27', '2023-06-07 15:48:27', NULL),
(27, '1686154547_d62a5f93037e82a6868d.png', 'Yusuke Murata', 'yusuke-murata', 'XII', 'MULTIMEDIA', '2023-06-07 16:15:47', '2023-06-07 16:15:47', NULL),
(44, '1686166646_e0b3b8a1311fb65af47a.jpg', 'Chonk', 'chonk', '', '', '2023-06-07 19:37:26', '2023-06-07 19:37:26', NULL),
(45, '1686168489_f2eb43069bb341bc4900.jpg', 'Ajojing', 'ajojing', '', '', '2023-06-07 20:08:09', '2023-06-07 20:08:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
