-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 07:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(22, 7, 1, '2022-01-21 13:03:25', '2022-01-21 13:03:25'),
(23, 6, 1, '2022-01-21 13:03:30', '2022-01-21 13:03:30'),
(24, 2, 1, '2022-01-21 13:03:35', '2022-01-21 13:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_01_14_185401_create_users_table', 1),
(3, '2022_01_15_172605_create_products_table', 2),
(4, '2022_01_16_163314_create_cart_table', 3),
(5, '2022_01_19_202707_ceate_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_methid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `status`, `payment_methid`, `payment_status`, `address`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'pending', 'cash on delivery', 'pending', 'Dhobi Ghaat Fiasalabad...', '2022-01-21 10:45:30', '2022-01-21 10:45:30'),
(2, 2, 1, 'pending', 'cash on delivery', 'pending', 'Dhobi Ghaat Fiasalabad...', '2022-01-21 10:45:30', '2022-01-21 10:45:30'),
(3, 7, 1, 'pending', 'cash on delivery', 'pending', 'Dhobi Ghaat Fiasalabad...', '2022-01-21 10:45:30', '2022-01-21 10:45:30'),
(4, 7, 2, 'pending', 'EIM', 'pending', 'Model Town A block Moter Markeet Lahore..', '2022-01-21 10:53:10', '2022-01-21 10:53:10'),
(5, 3, 2, 'pending', 'EIM', 'pending', 'Model Town A block Moter Markeet Lahore..', '2022-01-21 10:53:10', '2022-01-21 10:53:10'),
(6, 6, 2, 'pending', 'EIM', 'pending', 'Model Town A block Moter Markeet Lahore..', '2022-01-21 10:53:10', '2022-01-21 10:53:10'),
(7, 8, 2, 'pending', 'EIM', 'pending', 'Model Town A block Moter Markeet Lahore..', '2022-01-21 10:53:10', '2022-01-21 10:53:10'),
(8, 6, 1, 'pending', 'Online', 'pending', 'FSD....', '2022-01-21 12:11:24', '2022-01-21 12:11:24'),
(9, 2, 1, 'pending', 'Online', 'pending', 'FSD....', '2022-01-21 12:11:24', '2022-01-21 12:11:24'),
(10, 2, 3, 'pending', 'cash on delivery', 'pending', 'Menghran Shrif ,Chistian , Bahawalnagar..', '2022-01-21 12:43:47', '2022-01-21 12:43:47'),
(11, 7, 3, 'pending', 'cash on delivery', 'pending', 'Menghran Shrif ,Chistian , Bahawalnagar..', '2022-01-21 12:43:47', '2022-01-21 12:43:47'),
(12, 8, 3, 'pending', 'cash on delivery', 'pending', 'Menghran Shrif ,Chistian , Bahawalnagar..', '2022-01-21 12:43:47', '2022-01-21 12:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Discription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Name`, `Price`, `Category`, `Discription`, `Gallery`, `created_at`, `updated_at`) VALUES
(2, 'Vivo Mobile V23', '30000', 'Mobile', 'Vivo mobile with 8Gb Ram and 128 GB Room', 'gallery\\Vivo-X30.jpg', NULL, NULL),
(3, 'IPhone 11', '130000', 'Mobile', 'Iphone 11 mobile with 8Gb Ram and 128 GB Room', 'gallery\\iphone-11.jpg', NULL, NULL),
(4, 'LED TV ', '110000', 'TV', 'LED Tv with greate vision 4k', 'gallery\\led-tv.png', NULL, NULL),
(5, 'LED TV ', '120000', 'TV', 'LED Tv with greate vision 4k', 'gallery\\led-tv2.jpg', NULL, NULL),
(6, 'LED TV ', '150000', 'TV', 'LED Tv with greate vision 4k', 'gallery\\led-tv3.png', NULL, NULL),
(7, 'Android Watch ', '10000', 'Watch', 'Android watch smart with heigh resulation', 'gallery\\Android-watch1.jpg', NULL, NULL),
(8, 'Android Watch ', '12000', 'Watch', 'Android watch smart with heigh resulation', 'gallery\\android-watch.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Password`, `created_at`, `updated_at`) VALUES
(1, 'Affi Baloch', 'affi@gmail.com', '$2y$10$tbBJ1mjZNS4OLv0Dfj9sje.xSQPTn9oo3n0CNjhVsZihj5.cujzb2', NULL, NULL),
(2, 'Waqar Ali', 'wiki@gmail.com', '$2y$10$X97Ejp0Q9PcOna9tyFpKuOx/EwBGG7YnmdtQxihH40s.eurDsnn7q', NULL, NULL),
(3, 'Muhammad Usman Khan', 'musman@yahoo.com', '$2y$10$CnkeIU46QCaW8UlR9rp2cOHONFzkApDBecGrwasBv3qGpAleJQJgW', '2022-01-21 12:39:07', '2022-01-21 12:39:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
