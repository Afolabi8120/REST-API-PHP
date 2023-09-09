-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2023 at 08:46 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest_php_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`id`, `name`, `email`, `mobile`, `created_at`) VALUES
(1, 'Afolabi Olaonipekun', 'afolabi8120@gmail.com', '08090949669', '2023-09-09 20:24:28'),
(2, 'Afolabi Temitope Emmanuel', 'tpex@gmail.com', '07036000723', '2023-09-09 20:26:01'),
(3, 'Ayokanmi Balogun', 'balozy@gmail.com', '07036091723', '2023-09-09 20:26:30'),
(4, 'Albert Faith Segun', 'albert@gmail.com', '08090946783', '2023-09-09 20:26:58'),
(5, 'Akinremi Moyinoluwa', 'moyin@gmail.com', '08080946783', '2023-09-09 20:27:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
