-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 10:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_22_021607_create_blogs_table', 1),
(6, '2023_09_22_033000_create_posts_table', 2);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(32, '7X3YNoQsG5JC14b9n4P8SPc7yBKJU3aJqRUTH70J.jpg', 'Javascript', 'JavaScript adalah bahasa pemrograman yang banyak digunakan dalam pengembangan website, aplikasi, dan game.', '2023-11-30 10:14:41', '2023-11-30 10:14:41'),
(37, '0ajjwqQJw0N1O4nUwNyJ6euF1FqrjIehAkKDeaxT.jpg', 'Coding', 'Coding sendiri merupakan tahapan melakukan fungsi pemrograman dalam mengelola suatu software atau aplikasi agar dapat dikembangkan lebih baik', '2023-11-30 10:34:32', '2023-11-30 10:35:52'),
(41, 'kvl45TSepFrLnjWMkuiEsIGUX8pkCDJXtscOrdde.jpg', 'Bahasa pemograman HTML', 'HTML adalah bahasa markup untuk membuat halaman web. Kepanjangan dari&nbsp;<em>HTML adalah</em>&nbsp;Hypertext Markup Language.', '2023-11-30 17:06:20', '2023-11-30 17:10:29'),
(43, 'Bw2SbWBye2hZdJms8qIefar07EAAsMTORDDL93VC.jpg', 'Bahasa Pemograman PHP', 'PHP (Hypertext Preprocessor) adalah bahasa pemrograman open-source yang umumnya digunakan untuk membangun aplikasi web dinamis dan interaktif', '2023-11-30 17:08:44', '2023-11-30 17:11:03'),
(44, '80SR2TrQSwV8Fn5NCUpxl2hBAc66an9jl3Eu1rUm.jpg', 'Visual Studio', 'Visual Studio Code adalah editor kode yang didefinisikan ulang dan dioptimalkan untuk membangun dan men-debug aplikasi web dan cloud modern', '2023-11-30 17:09:48', '2023-11-30 19:33:24'),
(45, 'Xu4rwx0uy4lI7iU8UoF6kEXt5Bc52sxy7UOOGXuD.jpg', 'Nuxt JS', 'Nuxt JS adalah sebuah framework open-source tingkat tinggi yang dibangun di atas VueJS. Framework ini dipromosikan sebagai ‘meta framework for universal applications’ yang berarti pengguna dapat membangun tampilan web dalam JavaScript menggunakan sistem komponen dari VueJS\r\nBagi yang belum tahu, framework adalah kerangka kerja paling dasar dalam software development atau pengembangan perangkat lunak. Ini merupakan struktur yang mendasari sebuah sistem software seperti aplikasi desktop, mobile app, hingga website.', '2023-11-30 17:11:46', '2023-11-30 19:34:35'),
(46, '7lm9nAFs2x1EdR87Sy2SlVjYuoFDex5lpEXkGZJ6.jpg', 'Mengenal Apa itu Laravel', 'Laravel merupakan framework PHP yang open-source dan berisi banyak modul dasar untuk mengoptimalkan kinerja PHP dalam pengembangan aplikasi web, apalagi PHP adalah bahasa pemrograman yang dinamis dan Laravel disini bisa bertindak untuk membuat web development lebih cepat, lebih aman, dan lebih simpel.\r\nLaravel memberikan seperangkat alat dan sumber daya untuk membangun aplikasi berbasis PHP. Laravel memiliki ekosistem yang lengkap didukung oleh package dan ekstensi yang kompatibel. Laravel telah tumbuh pesat dan semakin besar dalam beberapa tahun terakhir. Hal ini juga ditunjukan dengan semakin besarnya minat developer untuk menggunakan framework Laravel karena dapat menyederhanakan pengembangan aplikasi.', '2023-11-30 17:18:19', '2023-11-30 19:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aan Fakturohman', 'Aan.com', NULL, '$2y$10$r1z7pODX/CQMVOEhO8iseOP0OOhCcUA6S1zhjwTleVf8zb/yQ/mtC', NULL, '2023-10-26 23:54:43', '2023-10-26 23:54:43'),
(2, 'diazkaka', 'ankyfzf@gmail.com', NULL, '$2y$10$xOGW8xWP8t3iONO6w4qQ5u6tnh8zJdeJkIzherNaNI4ycYB4lWfuy', NULL, '2023-11-23 19:35:41', '2023-11-23 19:35:41'),
(3, 'Diaz kaka', 'kakadiaz@gmail.com', NULL, '$2y$10$KLr.r.95zksHt2RVsFvpQ.M6zSnSEdWtab3Y6M2v2WtqgRZesU17y', NULL, '2023-11-23 23:59:51', '2023-11-23 23:59:51'),
(4, 'kaka', 'kucingoren@gmail.com', NULL, '$2y$10$E9Tr8LQWKN6pqd0X4FKyg.zdHJZPGCB/vPGn970WtSt9W8GJJa6tG', NULL, '2023-11-24 00:25:57', '2023-11-24 00:25:57'),
(5, 'kaka', 'diaz@gmail.com', NULL, '$2y$10$XC6Pjtc6lXW4J2wGIy0Ks.x1iKV4bJwAFjJELYYURvEK0FwoSe0je', NULL, '2023-11-24 03:02:00', '2023-11-24 03:02:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
