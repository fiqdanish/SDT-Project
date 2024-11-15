-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2024 at 02:02 AM
-- Server version: 9.1.0
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `course` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `course`) VALUES
(6, 'Syahmi Azim', 'fs_syahmiey23@gmail.com', '0198876625', 'SECBH'),
(15, 'Khairulanam', 'anam.khairul89@yahoo.com', '0115651139', 'SECVH'),
(17, 'Muhammad Azim Mirza', 'azim.mrz90@gmail.com', '0172176858', 'SECVH'),
(18, 'Mukhritz al Iman', 'mukh.iman9@gmail.com', '0198827690', 'SECJH'),
(19, 'Hafizzudin', 'hafiz.udin@gmail.com', '0192280019', 'SECBH');

-- --------------------------------------------------------

--
-- Table structure for table `users_reg`
--

CREATE TABLE `users_reg` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_reg`
--

INSERT INTO `users_reg` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'ayam', '$2y$10$vmo5t/O9ahrOY1zMG56lIesaQYcoK6KzYWZyNN9PJD4HI71NdEyJW', '2024-11-14 18:33:36'),
(2, 'Afiq', '$2y$10$wHDt/kALxjTOWj8.HUAH0.9fuJf23sChVGGLZp5gq.8uL41Wqk9ei', '2024-11-14 19:47:30'),
(3, 'Akram', '$2y$10$X3w2IYPP0vPT4JIMPWz67OkeD.MVl30o/a7dWrFaTUoc97pw62k0.', '2024-11-14 19:48:01'),
(4, 'adam', '$2y$10$K.wG5TACisBG8TtaRT.1LuLcz3/TVnYt966YSc6EgOZbfCrDyHFSa', '2024-11-15 01:45:47'),
(6, 'baba', '$2y$10$RAdDaPDXfHLwPYLKg4Fnsu1AmUP5/OVN2eNqZsasNEaYqodDvqg2C', '2024-11-15 01:46:37'),
(8, 'lame', '$2y$10$VDv4uSXiUKZg27pX2OgkbOBEauzDTFTMgiC/9Z4ox1eeltFiZwtHi', '2024-11-15 01:47:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_reg`
--
ALTER TABLE `users_reg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users_reg`
--
ALTER TABLE `users_reg`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
