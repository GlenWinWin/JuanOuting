-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2017 at 10:19 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `juanouting`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Philippines-Laguna'),
(2, 'Philippines-Pangasinan');

-- --------------------------------------------------------

--
-- Table structure for table `custs`
--

CREATE TABLE `custs` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custs`
--

INSERT INTO `custs` (`id`, `name`) VALUES
(1, 'Glenwin'),
(2, 'Jason');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`id`, `user_id`, `model`) VALUES
(1, 4, 'Samsung Grand Duos'),
(2, 5, 'Samsung S6'),
(3, 4, 'Nokia');

-- --------------------------------------------------------

--
-- Table structure for table `presyo`
--

CREATE TABLE `presyo` (
  `ID` int(11) NOT NULL,
  `name` varchar(46) DEFAULT NULL,
  `price` int(5) DEFAULT NULL,
  `stars` int(10) NOT NULL,
  `reviews` varchar(99) NOT NULL,
  `kitchen` int(10) NOT NULL,
  `wifi` int(10) NOT NULL,
  `billiard` int(10) NOT NULL,
  `img_path` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `presyo`
--

INSERT INTO `presyo` (`ID`, `name`, `price`, `stars`, `reviews`, `kitchen`, `wifi`, `billiard`, `img_path`) VALUES
(1, 'Beadypop Spring', 10000, 2, 'good', 1, 1, 0, 'assets/images/jasooon.jpg'),
(2, 'ELENA VILLA Hot Spring Private Pool', 10000, 2, 'good', 0, 0, 0, ''),
(3, 'Solemar 24', 13000, 2, 'good', 0, 0, 0, ''),
(4, 'JP Crib', 14000, 2, 'good', 0, 0, 0, ''),
(5, 'Tricia Spring Villa Resort', 15000, 2, 'good', 0, 0, 0, ''),
(6, 'JL Crib', 13000, 4, 'good', 0, 0, 0, ''),
(7, 'Maria Villa', 8000, 4, 'good', 0, 0, 0, ''),
(8, 'Spa Villa', 13000, 4, 'good', 0, 0, 0, ''),
(9, 'Sheila Spring Villa', 13000, 4, 'good', 0, 0, 0, ''),
(10, 'Shadelle Spring Villa', 13000, 4, 'good', 0, 0, 0, ''),
(11, 'Villa Hot Spring', 15000, 4, 'good', 0, 0, 0, ''),
(12, 'Kolossi Hotspring Resort', 16000, 4, 'good', 0, 0, 0, ''),
(13, 'Emerald Villa Resort', 16000, 4, 'good', 0, 0, 0, ''),
(14, 'Kedon Residence Unit A', 18000, 4, 'good', 0, 0, 0, ''),
(15, 'Kedon Residence Unit B with Gazebo', 20000, 4, 'good', 0, 0, 0, ''),
(16, 'Kedon Residence Combined Unit', 36000, 4, 'good', 0, 0, 0, ''),
(17, 'Bob''s Hotspring Resort 1', 18000, 4, 'good', 0, 0, 0, ''),
(18, 'Bob''s Hotspring Resort 2', 18000, 4, 'good', 0, 0, 0, ''),
(19, 'Bob''s Hotspring Resort 3', 18000, 4, 'good', 1, 0, 1, 'assets/images/joyth.png'),
(20, '5 Corners Unit A', 18000, 4, 'good', 0, 0, 0, ''),
(21, '5 Corners Unit B', 18000, 4, 'good', 0, 0, 0, ''),
(22, '5 Corners Unit C', 30000, 4, 'good', 0, 0, 0, ''),
(23, 'B Hotspring', 25000, 4, 'good', 0, 0, 0, ''),
(24, 'Duplex Hot Spring Resort Villa 1', 16000, 4, 'good', 0, 0, 0, ''),
(25, 'Duplex Hot Spring Resort Villa 2', 18000, 4, 'good', 0, 0, 0, ''),
(26, 'Calidus Laguna Hot Spring Resort 1', 14000, 3, 'good', 0, 0, 0, ''),
(27, 'Calidus Laguna Hot Spring Resort 2', 22000, 3, 'good', 0, 0, 0, ''),
(28, 'Calidus Laguna Hot Spring Resort Combined Unit', 36000, 3, 'good', 0, 0, 0, ''),
(29, 'Duplex Hot Spring Resort 1&2 Combined', 34000, 3, 'good', 0, 0, 0, ''),
(30, 'Eric Glenda Private Resort Combined Unit', 36000, 3, 'good', 0, 0, 0, ''),
(31, 'Spring de Laguna', 22000, 3, 'good', 0, 0, 0, ''),
(32, 'Spring de Laguna Unit C', 23000, 3, 'good', 0, 0, 0, ''),
(33, 'The Inheritance Resort', 25000, 3, 'good', 0, 0, 0, ''),
(34, 'GP Place 1', 18000, 3, 'good', 0, 0, 0, ''),
(35, 'Joremi Private Resort', 17000, 3, 'good', 0, 0, 0, ''),
(36, 'Fort Mykonos Hotspring Resort', 16000, 3, 'good', 0, 0, 0, ''),
(37, 'Balai Ni Mamay - Libaba Side', 17000, 3, 'good', 0, 0, 0, ''),
(38, 'Balai Ni Mamay - Garetta Side', 18000, 3, 'good', 0, 0, 0, ''),
(39, 'Casa Grande', 20000, 3, 'good', 0, 0, 0, ''),
(40, 'Villa Camille 1 Private Resort', 24000, 3, 'good', 0, 0, 0, ''),
(41, 'Villa Sual Hot Spring Resort', 24000, 5, 'good', 0, 0, 0, ''),
(42, 'GP Place 2', 18000, 5, 'good', 0, 0, 0, ''),
(43, 'CJC Resort', 30000, 5, 'good', 0, 0, 0, ''),
(44, 'GP Place Combined Unit', 36000, 5, 'good', 0, 0, 0, ''),
(45, 'Balai ni Mamay Combined Unit', 33000, 5, 'good', 0, 0, 0, ''),
(46, 'Mountain View Resort - Building B', 25000, 5, 'good', 0, 0, 0, ''),
(47, 'Mountain View Resort - Bldg C', 22000, 5, 'good', 0, 0, 0, ''),
(48, 'Tiluma Laguna Hot Spring', 18000, 5, 'good', 0, 0, 0, ''),
(49, 'Mountain Peak Lower Level', 20000, 5, 'good', 0, 0, 0, ''),
(50, 'Mountain Peak Upper Level', 20000, 5, 'good', 0, 0, 0, ''),
(51, 'Mountain Peak Combined Unit', 40000, 5, 'good', 0, 0, 0, ''),
(52, 'JL Pool 2', 9000, 5, 'good', 0, 0, 0, ''),
(53, 'Villa Las Vegas Private Pool', 18000, 5, 'good', 0, 0, 0, ''),
(54, 'Martin''s Ville Private Resort', 15000, 5, 'good', 0, 0, 0, ''),
(55, 'JL Pool 1', 12000, 5, 'good', 0, 0, 0, ''),
(56, 'JL Pool Combined Unit', 21000, 5, 'good', 0, 0, 0, ''),
(57, 'Duplex Mart + Villa', 20000, 5, 'good', 0, 0, 0, ''),
(58, 'Amore Mio Resort', 45000, 5, 'good', 0, 0, 0, ''),
(59, '3Js Resort', 20000, 5, 'good', 0, 0, 0, ''),
(60, 'Eric Glenda Private Resort - Lillianne', 16000, 5, 'good', 0, 0, 0, ''),
(61, 'Eric Glenda Private Resort - Annelie', 23000, 1, 'good', 0, 0, 0, ''),
(62, 'Villa Camille 2 Unit A', 18000, 1, 'good', 0, 0, 0, ''),
(63, 'Villa Camille 2 Unit B', 18000, 1, 'good', 0, 0, 0, ''),
(64, 'The Royal Villa', 25000, 1, 'good', 0, 0, 0, ''),
(65, 'Villa Camille @ Park Merced', 22000, 1, 'good', 0, 0, 0, ''),
(66, 'Casa Rudy', 10000, 1, 'good', 0, 0, 0, ''),
(67, 'Bramasole', 8000, 1, 'good', 0, 0, 0, ''),
(68, 'Cayet''s Cabin Private Resort', 27500, 1, 'good', 0, 0, 0, ''),
(69, 'Casa del Pio Resort', 22000, 1, 'good', 0, 0, 0, ''),
(70, 'Bliss Private Pool and Vacation House', 13000, 1, 'good', 0, 0, 0, ''),
(71, 'Villa Camille 2 Combined Unit', 36000, 1, 'good', 0, 0, 0, ''),
(72, 'Villa Marciana Private Pool and Hot Spring', 20000, 1, 'good', 0, 0, 0, ''),
(73, 'Infinitus Hotspring Resort', 30000, 1, 'good', 0, 0, 0, ''),
(74, 'Justin Resort', 13000, 1, 'good', 0, 0, 0, ''),
(75, 'Casa Demetria Resort - Unit B', 18000, 1, 'good', 0, 0, 0, ''),
(76, 'Kedon Residence - Unit A', 16000, 1, 'good', 0, 0, 0, ''),
(77, 'Kedon Residence - Unit B', 18000, 1, 'good', 0, 0, 0, ''),
(78, 'Casa Demetria Resort - Unit A', 18000, 1, 'good', 0, 0, 0, ''),
(79, 'Royal Elizabeth Resort', 24000, 1, 'good', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Administrator'),
(2, 'Moderator');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(1, 4, 1),
(2, 4, 2),
(3, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_path` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `profile_path`, `country_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'glenwin', 'adminako@gmail.com', '$2y$10$aeAPQqD3Cd/3B5xwlwBr.uD77V4fajQHh3TxNvFFLwCx0gwpuwG.W', 'assets/images/profile_pictures/glen.jpg', 2, 'XGAefkR7grTk03taL8DaR2FO416zsDmBszgtMBD7o7ofcc8oOxEJp8yteFuU', '2017-02-14 00:11:15', '2017-02-14 00:11:15'),
(5, 'jason', 'jason@gmail.com', '$2y$10$qc4byWylGnuMhLAQPY3Luub42sxfkEezeTf2VW7nrib9ck7vFKnnG', 'assets/images/profile_pictures/jason.jpg', 1, 'KUWjOA8H2n0EVKI205eRmwX8NoZB6gbu6cK4keChJVlpD0ZyJHMgNOBcJi1K', '2017-02-14 00:28:43', '2017-02-14 00:28:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custs`
--
ALTER TABLE `custs`
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
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presyo`
--
ALTER TABLE `presyo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `custs`
--
ALTER TABLE `custs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `presyo`
--
ALTER TABLE `presyo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
