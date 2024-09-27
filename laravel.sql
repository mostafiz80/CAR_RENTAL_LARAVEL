-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2024 at 03:57 AM
-- Server version: 8.0.39
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('0286dd552c9bea9a69ecb3759e7b94777635514b', 'i:1;', 1727408459),
('0286dd552c9bea9a69ecb3759e7b94777635514b:timer', 'i:1727408459;', 1727408459),
('761f22b2c1593d0bb87e0b606f990ba4974706de', 'i:1;', 1727408287),
('761f22b2c1593d0bb87e0b606f990ba4974706de:timer', 'i:1727408287;', 1727408287);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int NOT NULL,
  `car_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daily_rent_price` decimal(8,2) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `brand`, `model`, `year`, `car_type`, `daily_rent_price`, `availability`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Zastava 128', 'Marshell', 'DG-C2', 2007, 'small', 497.00, 0, 'https://via.placeholder.com/1920x1080.png/00cc99?text=1+est', '2024-09-26 23:38:07', '2024-09-26 23:38:07'),
(3, 'Tarpan Honker 237', 'MINI', 'One', 2021, 'convertible', 100.00, 1, 'https://via.placeholder.com/1920x1080.png/00bb66?text=1+possimus', '2024-09-26 23:38:08', '2024-09-26 23:38:08'),
(4, 'Ford Bronco', 'Yugo', '511', 2017, 'sedan', 825.00, 1, 'https://via.placeholder.com/1920x1080.png/00aa88?text=1+qui', '2024-09-26 23:38:08', '2024-09-26 23:38:08'),
(5, 'Koenigsegg CCXR Trevita', 'Rover', 'Vitesse', 2021, 'coupe', 212.00, 1, 'https://via.placeholder.com/1920x1080.png/00bb77?text=1+earum', '2024-09-26 23:38:08', '2024-09-26 23:38:08'),
(6, 'Barkas (Баркас) 1001', 'Iveco', 'Daily 4x4', 2004, 'convertible', 338.00, 0, 'https://via.placeholder.com/1920x1080.png/00bb66?text=1+in', '2024-09-26 23:38:08', '2024-09-26 23:38:08'),
(7, 'Saipa Tiba', 'Daf', '200', 2023, 'coupe', 315.00, 1, 'https://via.placeholder.com/1920x1080.png/0088ee?text=1+sed', '2024-09-26 23:38:08', '2024-09-26 23:38:08'),
(8, 'Jaguar XJL', 'Sceo', 'C3', 2024, 'sedan', 281.00, 1, 'https://via.placeholder.com/1920x1080.png/005588?text=1+totam', '2024-09-26 23:38:08', '2024-09-26 23:38:08'),
(9, 'King Long Kingte', 'Iran Khodro', 'Runna', 2019, 'coupe', 354.00, 1, 'https://via.placeholder.com/1920x1080.png/007733?text=1+architecto', '2024-09-26 23:38:08', '2024-09-26 23:38:08'),
(10, 'Suzuki LJ 80', 'Maruti', 'Zen', 2017, 'SUV', 653.00, 1, 'https://via.placeholder.com/1920x1080.png/00bb22?text=1+id', '2024-09-26 23:38:08', '2024-09-26 23:38:08'),
(11, 'Innocenti Elba', 'Venturi', 'Atlantique', 2004, 'sedan', 349.00, 1, 'https://via.placeholder.com/1920x1080.png/00cc88?text=1+dolor', '2024-09-26 23:38:10', '2024-09-26 23:38:10'),
(12, 'LTI TX', 'Talbot', 'Horizon', 1997, 'hatchback', 103.00, 0, 'https://via.placeholder.com/1920x1080.png/00eedd?text=1+nemo', '2024-09-26 23:38:10', '2024-09-26 23:38:10'),
(13, 'Daewoo Damas', 'Volvo', '744', 2018, 'small', 735.00, 1, 'https://via.placeholder.com/1920x1080.png/004477?text=1+occaecati', '2024-09-26 23:38:10', '2024-09-26 23:38:10'),
(14, 'LDV Maxus', 'MG', 'Maestro', 1999, 'MPV', 479.00, 1, 'https://via.placeholder.com/1920x1080.png/00aa99?text=1+vel', '2024-09-26 23:38:10', '2024-09-26 23:38:10'),
(15, 'Wanfeng SHK', 'Vepr', 'Commander', 2019, 'coupe', 241.00, 0, 'https://via.placeholder.com/1920x1080.png/00bbbb?text=1+eum', '2024-09-26 23:38:10', '2024-09-26 23:38:10'),
(16, 'Saab 99', 'TATA', 'Xenon', 2002, 'SUV', 867.00, 0, 'https://via.placeholder.com/1920x1080.png/008888?text=1+porro', '2024-09-26 23:38:10', '2024-09-26 23:38:10'),
(17, 'Austin-Healey 3000', 'Dagger', 'GT', 2018, 'coupe', 878.00, 0, 'https://via.placeholder.com/1920x1080.png/0077dd?text=1+deserunt', '2024-09-26 23:38:10', '2024-09-26 23:38:10'),
(18, 'Yugo ZLM', 'KingWoo', 'KW 625W', 2000, 'hatchback', 100.00, 1, 'https://via.placeholder.com/1920x1080.png/00dd00?text=1+amet', '2024-09-26 23:38:10', '2024-09-26 23:38:10'),
(19, 'Ford Think', 'Triumph', 'Dolomite', 2011, 'hatchback', 279.00, 0, 'https://via.placeholder.com/1920x1080.png/0011aa?text=1+facilis', '2024-09-26 23:38:10', '2024-09-26 23:38:10'),
(20, 'Smart City', 'Mitsubishi', 'Tredia', 2023, 'station_wagon', 571.00, 0, 'https://via.placeholder.com/1920x1080.png/00cc33?text=1+ut', '2024-09-26 23:38:10', '2024-09-26 23:38:10'),
(21, 'Mazda CX-7', 'Autobianchi', 'A 112', 2002, 'small', 556.00, 0, 'https://via.placeholder.com/1920x1080.png/006611?text=1+dolor', '2024-09-26 23:38:11', '2024-09-26 23:38:11'),
(22, 'Asia Rocsta', 'Jeep', 'CJ', 2007, 'coupe', 659.00, 1, 'https://via.placeholder.com/1920x1080.png/0033bb?text=1+voluptas', '2024-09-26 23:38:11', '2024-09-26 23:38:11'),
(23, 'Wanfeng SHK', 'Daewoo', 'BV', 2002, 'station_wagon', 337.00, 1, 'https://via.placeholder.com/1920x1080.png/00ff66?text=1+doloribus', '2024-09-26 23:38:11', '2024-09-26 23:38:11'),
(24, 'Aro 246', 'Sceo', 'Shuanghuan', 2004, 'convertible', 312.00, 1, 'https://via.placeholder.com/1920x1080.png/0066dd?text=1+atque', '2024-09-26 23:38:11', '2024-09-26 23:38:11'),
(25, 'Morris Minor', 'Aston Martin', 'V12', 2015, 'sedan', 365.00, 1, 'https://via.placeholder.com/1920x1080.png/008855?text=1+doloremque', '2024-09-26 23:38:11', '2024-09-26 23:38:11'),
(26, 'Ultima GTR', 'Lexus', 'IS 200', 2023, 'convertible', 258.00, 0, 'https://via.placeholder.com/1920x1080.png/00dd99?text=1+ab', '2024-09-26 23:38:11', '2024-09-26 23:38:11'),
(27, 'Geely CK-2', 'SsangYong', 'Tivoli', 2000, 'coupe', 987.00, 0, 'https://via.placeholder.com/1920x1080.png/000099?text=1+omnis', '2024-09-26 23:38:11', '2024-09-26 23:38:11'),
(28, 'Alfa Romeo Gold Cloverleaf', 'Praga Baby', 'Tudor', 1999, 'coupe', 246.00, 1, 'https://via.placeholder.com/1920x1080.png/003399?text=1+commodi', '2024-09-26 23:38:11', '2024-09-26 23:38:11'),
(29, 'Daewoo Matiz', 'Bugatti', 'Galibier', 2021, 'SUV', 459.00, 0, 'https://via.placeholder.com/1920x1080.png/00aadd?text=1+quasi', '2024-09-26 23:38:11', '2024-09-26 23:38:11'),
(30, 'GMC Envoy', 'Bugatti', 'EB 112', 2016, 'hatchback', 558.00, 0, 'https://via.placeholder.com/1920x1080.png/002255?text=1+porro', '2024-09-26 23:38:11', '2024-09-26 23:38:11'),
(32, 'Keefe Elliott changed', 'Numquam occaecat in', 'Accusantium reiciend', 2012, 'Facere ex veritatis', 542.00, 0, 'cars/car_image/car_image_20240927_033817.jpg', '2024-09-27 10:38:17', '2024-09-27 10:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_17_140128_create_cars_table', 1),
(5, '2024_09_17_140240_create_rentals_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `car_id` bigint UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_cost` decimal(8,2) NOT NULL,
  `status` enum('ongoing','completed','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ongoing',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `user_id`, `car_id`, `start_date`, `end_date`, `total_cost`, `status`, `created_at`, `updated_at`) VALUES
(2, 7, 8, '2024-09-26', '2024-10-03', 281.00, 'completed', '2024-09-26 23:38:18', '2024-09-27 10:38:57'),
(5, 11, 16, '2024-09-26', '2024-10-03', 867.00, 'ongoing', '2024-09-26 23:38:18', '2024-09-26 23:38:18'),
(6, 28, 28, '2024-09-26', '2024-10-03', 246.00, 'ongoing', '2024-09-26 23:38:18', '2024-09-26 23:38:18'),
(7, 25, 18, '2024-09-26', '2024-10-03', 100.00, 'ongoing', '2024-09-26 23:38:18', '2024-09-26 23:38:18'),
(8, 6, 13, '2024-09-26', '2024-10-03', 735.00, 'ongoing', '2024-09-26 23:38:18', '2024-09-26 23:38:18'),
(9, 6, 24, '2024-09-26', '2024-10-03', 312.00, 'ongoing', '2024-09-26 23:38:18', '2024-09-26 23:38:18'),
(10, 12, 14, '2024-09-26', '2024-10-03', 479.00, 'ongoing', '2024-09-26 23:38:18', '2024-09-26 23:38:18'),
(11, 26, 19, '2024-09-26', '2024-10-03', 279.00, 'ongoing', '2024-09-26 23:38:21', '2024-09-26 23:38:21'),
(12, 17, 6, '2024-09-26', '2024-10-03', 338.00, 'ongoing', '2024-09-26 23:38:21', '2024-09-26 23:38:21'),
(13, 9, 22, '2024-09-26', '2024-10-03', 659.00, 'ongoing', '2024-09-26 23:38:21', '2024-09-26 23:38:21'),
(14, 8, 9, '2024-09-26', '2024-10-03', 354.00, 'ongoing', '2024-09-26 23:38:21', '2024-09-26 23:38:21'),
(15, 30, 20, '2024-09-26', '2024-10-03', 571.00, 'ongoing', '2024-09-26 23:38:21', '2024-09-26 23:38:21'),
(16, 7, 23, '2024-09-26', '2024-10-03', 337.00, 'ongoing', '2024-09-26 23:38:21', '2024-09-26 23:38:21'),
(17, 17, 14, '2024-09-26', '2024-10-03', 479.00, 'ongoing', '2024-09-26 23:38:21', '2024-09-26 23:38:21'),
(18, 11, 4, '2024-09-26', '2024-10-03', 825.00, 'ongoing', '2024-09-26 23:38:21', '2024-09-26 23:38:21'),
(19, 26, 14, '2024-09-26', '2024-10-03', 479.00, 'ongoing', '2024-09-26 23:38:21', '2024-09-26 23:38:21'),
(20, 25, 8, '2024-09-26', '2024-10-03', 281.00, 'ongoing', '2024-09-26 23:38:21', '2024-09-26 23:38:21'),
(21, 19, 8, '2024-09-26', '2024-10-03', 281.00, 'ongoing', '2024-09-26 23:38:22', '2024-09-26 23:38:22'),
(22, 25, 11, '2024-09-26', '2024-10-03', 349.00, 'ongoing', '2024-09-26 23:38:22', '2024-09-26 23:38:22'),
(23, 19, 8, '2024-09-26', '2024-10-03', 281.00, 'ongoing', '2024-09-26 23:38:22', '2024-09-26 23:38:22'),
(24, 26, 29, '2024-09-26', '2024-10-03', 459.00, 'ongoing', '2024-09-26 23:38:22', '2024-09-26 23:38:22'),
(25, 23, 20, '2024-09-26', '2024-10-03', 571.00, 'ongoing', '2024-09-26 23:38:22', '2024-09-26 23:38:22'),
(26, 23, 26, '2024-09-26', '2024-10-03', 258.00, 'ongoing', '2024-09-26 23:38:22', '2024-09-26 23:38:22'),
(27, 15, 6, '2024-09-26', '2024-10-03', 338.00, 'ongoing', '2024-09-26 23:38:22', '2024-09-26 23:38:22'),
(28, 27, 3, '2024-09-26', '2024-10-03', 100.00, 'ongoing', '2024-09-26 23:38:22', '2024-09-26 23:38:22'),
(29, 18, 29, '2024-09-26', '2024-10-03', 459.00, 'ongoing', '2024-09-26 23:38:22', '2024-09-26 23:38:22'),
(30, 4, 30, '2024-09-26', '2024-10-03', 558.00, 'ongoing', '2024-09-26 23:38:23', '2024-09-26 23:38:23'),
(42, 32, 3, '2025-01-01', '2025-09-18', 26100.00, 'canceled', '2024-09-27 00:09:26', '2024-09-27 00:11:17'),
(46, 43, 3, '2025-12-12', '2025-12-13', 200.00, 'canceled', '2024-09-27 10:42:05', '2024-09-27 10:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3Mmsdn3S7ybfaDuqmbaxzFz6eJ69xFNj1qYOvTGF', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWUlZMHRPTW5hZzJhbmpRb3NmVlBiTDZJWm5LNjBtdlBWRVdYelFZeiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHBzOi8vY2FyLnRlc3QiO319', 1727408627);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `email_verified_at`, `remember_token`, `role`, `address`, `created_at`, `updated_at`) VALUES
(3, 'Howard Robel', 'jermain34@example.com', '(272) 879-3444', '$2y$12$gBcUU4H8T60GUIRtMkhU6.Qopy0cikbom4MR9Anuy3Y2E6hXP9q3W', NULL, NULL, 'customer', '7629 Maryam Falls Apt. 195\nEast Arnoshire, MO 90690', '2024-09-26 23:37:55', '2024-09-26 23:37:55'),
(4, 'Javonte Dooley DDS', 'grant.vanessa@example.net', '+1-951-640-9935', '$2y$12$gBcUU4H8T60GUIRtMkhU6.Qopy0cikbom4MR9Anuy3Y2E6hXP9q3W', NULL, NULL, 'customer', '474 Runte Lights\nVonRuedenland, MD 29146-8922', '2024-09-26 23:37:55', '2024-09-26 23:37:55'),
(5, 'Vada Stark DVM', 'runolfsdottir.beaulah@example.com', '+1-678-695-1996', '$2y$12$gBcUU4H8T60GUIRtMkhU6.Qopy0cikbom4MR9Anuy3Y2E6hXP9q3W', NULL, NULL, 'customer', '1224 Coby Views Suite 655\nNedraville, DE 69528-7730', '2024-09-26 23:37:55', '2024-09-26 23:37:55'),
(6, 'Emily Corkery', 'dquigley@example.net', '+1 (757) 387-0918', '$2y$12$gBcUU4H8T60GUIRtMkhU6.Qopy0cikbom4MR9Anuy3Y2E6hXP9q3W', NULL, NULL, 'customer', '8508 Jonas Mill\nLake Mitchell, TX 03812', '2024-09-26 23:37:55', '2024-09-26 23:37:55'),
(7, 'Luella Kautzer', 'udubuque@example.net', '1-323-529-1024', '$2y$12$gBcUU4H8T60GUIRtMkhU6.Qopy0cikbom4MR9Anuy3Y2E6hXP9q3W', NULL, NULL, 'customer', '8151 Francesco Orchard Suite 819\nKuhicside, WV 99499', '2024-09-26 23:37:55', '2024-09-26 23:37:55'),
(8, 'Brendan Cormier', 'wolf.jennings@example.org', '+1-678-725-5185', '$2y$12$gBcUU4H8T60GUIRtMkhU6.Qopy0cikbom4MR9Anuy3Y2E6hXP9q3W', NULL, NULL, 'customer', '55679 Lilian Shoal Suite 422\nBeerport, MN 13474', '2024-09-26 23:37:55', '2024-09-26 23:37:55'),
(9, 'Davonte Stanton PhD', 'yschmidt@example.com', '+1-762-878-2074', '$2y$12$gBcUU4H8T60GUIRtMkhU6.Qopy0cikbom4MR9Anuy3Y2E6hXP9q3W', NULL, NULL, 'customer', '151 Thompson Summit Suite 290\nNorth Armandfurt, WY 41959-2899', '2024-09-26 23:37:55', '2024-09-26 23:37:55'),
(11, 'Velva Dicki', 'diego.strosin@example.net', '+1 (463) 295-8760', '$2y$12$yvzhEWy0ota4N.bDOINPmudq2lHosWr8h1Rt7.d.KkAG76df6cNyO', NULL, NULL, 'customer', '44151 Jedidiah Squares Apt. 863\nNew Arnoside, MD 82410-2998', '2024-09-26 23:37:57', '2024-09-26 23:37:57'),
(12, 'Lonzo Zboncak', 'creinger@example.org', '320-675-0494', '$2y$12$yvzhEWy0ota4N.bDOINPmudq2lHosWr8h1Rt7.d.KkAG76df6cNyO', NULL, NULL, 'customer', '78340 Rigoberto Row\nEast Rowlandport, IA 13460-4750', '2024-09-26 23:37:57', '2024-09-26 23:37:57'),
(13, 'Jamaal Casper V', 'layne.keeling@example.org', '+1.386.835.9641', '$2y$12$yvzhEWy0ota4N.bDOINPmudq2lHosWr8h1Rt7.d.KkAG76df6cNyO', NULL, NULL, 'customer', '154 Durgan Grove Suite 840\nSouth Eusebio, PA 89590', '2024-09-26 23:37:57', '2024-09-26 23:37:57'),
(14, 'Dr. Laisha Streich', 'ksporer@example.org', '+1-479-365-8698', '$2y$12$yvzhEWy0ota4N.bDOINPmudq2lHosWr8h1Rt7.d.KkAG76df6cNyO', NULL, NULL, 'customer', '9491 Felix Valley\nNorth Consuelo, NM 73729', '2024-09-26 23:37:57', '2024-09-26 23:37:57'),
(15, 'Ignatius Quigley', 'hermina85@example.com', '301.766.9172', '$2y$12$yvzhEWy0ota4N.bDOINPmudq2lHosWr8h1Rt7.d.KkAG76df6cNyO', NULL, NULL, 'customer', '72835 Sauer Walks\nEast Cordeliaville, GA 23202', '2024-09-26 23:37:57', '2024-09-26 23:37:57'),
(16, 'Rowland Blanda', 'felicia.barton@example.com', '+1-754-263-3910', '$2y$12$yvzhEWy0ota4N.bDOINPmudq2lHosWr8h1Rt7.d.KkAG76df6cNyO', NULL, NULL, 'customer', '29401 Weber Shore\nLucindaborough, WA 38852-7141', '2024-09-26 23:37:57', '2024-09-26 23:37:57'),
(17, 'Freda Huels', 'ratke.abbigail@example.org', '(551) 710-7712', '$2y$12$yvzhEWy0ota4N.bDOINPmudq2lHosWr8h1Rt7.d.KkAG76df6cNyO', NULL, NULL, 'customer', '740 Waelchi Mountains\nLourdeschester, AL 16501-1756', '2024-09-26 23:37:57', '2024-09-26 23:37:57'),
(18, 'Derrick Rutherford', 'rempel.cullen@example.org', '252.898.5598', '$2y$12$yvzhEWy0ota4N.bDOINPmudq2lHosWr8h1Rt7.d.KkAG76df6cNyO', NULL, NULL, 'customer', '531 Hilpert Road\nWildermanton, RI 82612-8690', '2024-09-26 23:37:57', '2024-09-26 23:37:57'),
(19, 'Prof. Mercedes Kulas', 'smetz@example.net', '+1-352-479-4158', '$2y$12$yvzhEWy0ota4N.bDOINPmudq2lHosWr8h1Rt7.d.KkAG76df6cNyO', NULL, NULL, 'customer', '693 Huel Mountains Apt. 188\nNorth Cecelia, ID 93689-0556', '2024-09-26 23:37:57', '2024-09-26 23:37:57'),
(20, 'Mr. Lavon Cartwright', 'weissnat.everette@example.org', '1-864-226-5036', '$2y$12$yvzhEWy0ota4N.bDOINPmudq2lHosWr8h1Rt7.d.KkAG76df6cNyO', NULL, NULL, 'customer', '46033 Cormier Keys\nLake Madyson, IL 15378', '2024-09-26 23:37:57', '2024-09-26 23:37:57'),
(21, 'Dr. Candice Schowalter', 'drew.quitzon@example.com', '+1-341-876-0645', '$2y$12$Lq5SnVUHi4OtN1qybXSFkOYezkNyVr.USNkcjUx9fj4i0PDMtX/pS', NULL, NULL, 'customer', '274 Elijah Alley\nNorth Cora, NH 82755-9921', '2024-09-26 23:38:00', '2024-09-26 23:38:00'),
(22, 'Erna Feeney', 'ihamill@example.net', '847.517.9849', '$2y$12$Lq5SnVUHi4OtN1qybXSFkOYezkNyVr.USNkcjUx9fj4i0PDMtX/pS', NULL, NULL, 'customer', '305 Jerde Gardens\nJerelchester, TN 01482-0382', '2024-09-26 23:38:00', '2024-09-26 23:38:00'),
(23, 'Shanna Daugherty', 'mkovacek@example.net', '734-842-2960', '$2y$12$Lq5SnVUHi4OtN1qybXSFkOYezkNyVr.USNkcjUx9fj4i0PDMtX/pS', NULL, NULL, 'customer', '53182 Saige Roads Suite 354\nGunnarberg, MT 35619', '2024-09-26 23:38:00', '2024-09-26 23:38:00'),
(24, 'Keyon Rowe', 'rafael24@example.com', '1-352-547-7046', '$2y$12$Lq5SnVUHi4OtN1qybXSFkOYezkNyVr.USNkcjUx9fj4i0PDMtX/pS', NULL, NULL, 'customer', '9019 Pfannerstill Vista Apt. 498\nSouth Isadoreshire, LA 56796', '2024-09-26 23:38:00', '2024-09-26 23:38:00'),
(25, 'Kip Wuckert III', 'era03@example.net', '(229) 966-5558', '$2y$12$Lq5SnVUHi4OtN1qybXSFkOYezkNyVr.USNkcjUx9fj4i0PDMtX/pS', NULL, NULL, 'customer', '13999 Paucek Street Suite 528\nLambertfurt, ME 98622', '2024-09-26 23:38:00', '2024-09-26 23:38:00'),
(26, 'Prof. Vladimir Grimes', 'ray18@example.com', '774.555.9000', '$2y$12$Lq5SnVUHi4OtN1qybXSFkOYezkNyVr.USNkcjUx9fj4i0PDMtX/pS', NULL, NULL, 'customer', '56447 Jayne Landing Apt. 508\nBlockfurt, ID 16894-7441', '2024-09-26 23:38:00', '2024-09-26 23:38:00'),
(27, 'Jaunita Wisoky', 'daugherty.ewald@example.org', '+1 (214) 289-5359', '$2y$12$Lq5SnVUHi4OtN1qybXSFkOYezkNyVr.USNkcjUx9fj4i0PDMtX/pS', NULL, NULL, 'customer', '9032 Reinger Mission Suite 715\nCandaceland, IN 18275', '2024-09-26 23:38:00', '2024-09-26 23:38:00'),
(28, 'Gianni Luettgen', 'isabella.lowe@example.com', '862.343.4568', '$2y$12$Lq5SnVUHi4OtN1qybXSFkOYezkNyVr.USNkcjUx9fj4i0PDMtX/pS', NULL, NULL, 'customer', '9882 Matteo Isle Apt. 028\nMelvinland, RI 77532-0308', '2024-09-26 23:38:00', '2024-09-26 23:38:00'),
(29, 'Robin Upton', 'morar.nicholaus@example.org', '+17433576732', '$2y$12$Lq5SnVUHi4OtN1qybXSFkOYezkNyVr.USNkcjUx9fj4i0PDMtX/pS', NULL, NULL, 'customer', '1170 Maia Crescent\nNorth Tiffany, TX 32359', '2024-09-26 23:38:00', '2024-09-26 23:38:00'),
(30, 'Amanda Kilback', 'shanna84@example.net', '810.858.2629', '$2y$12$Lq5SnVUHi4OtN1qybXSFkOYezkNyVr.USNkcjUx9fj4i0PDMtX/pS', NULL, NULL, 'customer', '2270 Lilyan Corners\nPort Esta, AR 81984', '2024-09-26 23:38:00', '2024-09-26 23:38:00'),
(32, 'Mostafiz admin', 'klhl@gmail.com', '01719843772', '$2y$12$kpm.1nNkOVb/Khrpur8H7.wIe7iSrX17ayTdNno0ETSouJ0Rfodd2', '2024-09-27 00:09:05', NULL, 'customer', 'Salmi ama adwd', '2024-09-27 00:08:39', '2024-09-27 00:10:58'),
(41, 'Administrator', 'mostafizq8@gmail.com', NULL, '$2y$12$kjFYwDOKVLM1LgkqO5rB6OgWFofe2eub1mdc5eiVd9hNTJRVEihyG', '2024-09-27 10:37:07', NULL, 'admin', NULL, '2024-09-27 10:36:36', '2024-09-27 10:37:07'),
(43, 'Mostafizur Rahman', 'shefa.mz@gmail.com', '01719843772', '$2y$12$ds..kaC6dxkSL8tc24Sh4Oj2AMWqBDONPWJou7EMa/56b04F5eK02', '2024-09-27 10:39:59', NULL, 'customer', 'Barisal, jhalakathi', '2024-09-27 10:39:26', '2024-09-27 10:40:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rentals_user_id_foreign` (`user_id`),
  ADD KEY `rentals_car_id_foreign` (`car_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `rentals_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`),
  ADD CONSTRAINT `rentals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
