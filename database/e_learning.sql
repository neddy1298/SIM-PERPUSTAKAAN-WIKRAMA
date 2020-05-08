-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 03:40 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgsatu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgdua` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `deskripsi`, `cover`, `imgsatu`, `imgdua`, `author`, `views`, `id_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Android', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error doloribus dolor libero. Adipisci odio nemo quod omnis accusamus voluptatibus, repellat ab, ullam, voluptate delectus similique quidem eligendi suscipit aspernatur.</p>', 'android.jpg', NULL, NULL, 'Imam Firmansyah', 359, 1, '2020-01-29 06:58:29', '2020-01-29 06:58:29'),
(2, 'Laravel', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error doloribus dolor libero. Adipisci odio nemo quod omnis accusamus voluptatibus, repellat ab, ullam, voluptate delectus similique quidem eligendi suscipit aspernatur.</p>', 'laravel.jpg', NULL, NULL, 'Neddy AP', 819, 2, '2020-01-29 06:58:29', '2020-01-29 06:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE `ebook` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` int(11) NOT NULL,
  `pengarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_halaman` int(11) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`id`, `judul`, `isbn`, `pengarang`, `penerbit`, `jumlah_halaman`, `tahun_terbit`, `deskripsi`, `link`, `cover`, `views`, `id_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Android', 11706106, 'Imam Firmansyah', 'Jacks', 300, 2018, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error doloribus dolor libero. Adipisci odio nemo quod omnis accusamus voluptatibus, repellat ab, ullam, voluptate delectus similique quidem eligendi suscipit aspernatur.</p>', 'youtube.com', 'android.jpg', 509, 1, '2020-01-29 06:58:29', '2020-01-29 06:58:29'),
(2, 'Laravel', 11706278, 'Neddy AP', 'Jacks', 100, 2019, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error doloribus dolor libero. Adipisci odio nemo quod omnis accusamus voluptatibus, repellat ab, ullam, voluptate delectus similique quidem eligendi suscipit aspernatur.</p>', 'youtube.com', 'laravel.jpg', 919, 2, '2020-01-29 06:58:29', '2020-01-29 06:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `name`, `address`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'johndoe', 'johndoe@gmail.com', 'Subject 01', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error doloribus dolor libero. Adipisci odio nemo quod omnis accusamus voluptatibus, repellat ab, ullam, voluptate delectus similique quidem eligendi suscipit aspernatur.', 'read', '2020-01-29 06:58:28', '2020-01-29 06:58:28'),
(2, 'janedoe', 'janedoe@gmail.com', 'Subject 02', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus perspiciatis, amet laborum labore ipsa adipisci ut distinctio fugiat, et qui esse hic. Nihil fugit similique minus, dolore deleniti tenetur repellat. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis dolor ab fuga exercitationem animi voluptas officia, necessitatibus tenetur aut aliquam consectetur laboriosam culpa magni totam illum nulla! A, iste aut.', 'unread', '2020-01-29 06:58:28', '2020-01-29 06:58:28'),
(3, 'cha', 'cha@gmail.com', 'Subject 03', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In veniam iusto perferendis sint facilis? Vitae ducimus explicabo, praesentium dolorum dicta commodi maxime incidunt atque deleniti numquam cum amet doloremque modi?', 'unread', '2020-01-29 06:58:28', '2020-01-29 06:58:28'),
(4, 'adamant', 'adamant@gmail.com', 'Subject 04', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quo facilis nobis voluptatibus consequuntur, ex similique quisquam, quas quia, omnis dolore laudantium officia harum et. Ratione corrupti sequi iure et.', 'read', '2020-01-29 06:58:28', '2020-01-29 06:58:28'),
(5, 'jolly', 'jolly@gmail.com', 'Subject 05', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum dolore aut, reiciendis accusantium excepturi quaerat ex consequuntur ipsum atque, soluta praesentium velit consequatur dolor iure deserunt laudantium tenetur nobis enim!', 'unread', '2020-01-29 06:58:28', '2020-01-29 06:58:28'),
(6, 'pulse', 'pulse@gmail.com', 'Subject 06', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facere sit eius, at doloremque ducimus architecto ipsam magnam, impedit debitis eum vitae itaque porro sunt doloribus provident iusto voluptas esse?', 'unread', '2020-01-29 06:58:28', '2020-01-29 06:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `etube`
--

CREATE TABLE `etube` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `etube`
--

INSERT INTO `etube` (`id`, `judul`, `link`, `deskripsi`, `author`, `views`, `id_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Android', 'Emr2q3DYlN0', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error doloribus dolor libero. Adipisci odio nemo quod omnis accusamus voluptatibus, repellat ab, ullam, voluptate delectus similique quidem eligendi suscipit aspernatur.</p>', 'Imam Firmansyah', 719, 1, '2020-01-29 06:58:28', '2020-01-29 06:58:28'),
(2, 'Laravel', 'ISK6o60cCQo', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptate possimus labore non necessitatibus provident soluta officia molestiae sint enim debitis quae quia reiciendis, qui quod ab atque, nobis ea?</p>', 'Neddy AP', 124, 1, '2020-01-29 06:58:28', '2020-01-29 06:58:28'),
(3, 'Python', 'SsUF-7X3ehM', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptate possimus labore non necessitatibus provident soluta officia molestiae sint enim debitis quae quia reiciendis, qui quod ab atque, nobis ea?</p>', 'Neddy AP', 405, 1, '2020-01-29 06:58:28', '2020-01-29 06:58:28');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Technology', '2020-01-29 06:58:28', NULL),
(2, 'Art', '2020-01-29 06:58:28', NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_14_000311_create_kategoris_table', 1),
(5, '2019_11_14_021754_create_ebook_table', 1),
(6, '2019_11_15_072146_create_etube_table', 1),
(7, '2019_11_27_115115_create_artikel_table', 1),
(8, '2019_11_29_040532_create_email_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_profile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_me` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `title`, `position`, `img_profile`, `address`, `instagram`, `twitter`, `github`, `about_me`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Imam Firmansyah', 'Firmansyah', 'admin@gmail.com', NULL, '$2y$10$DQNNiGKd1A0PapBzUNNCGOkHj0IFvlUh2Z6zfmbbcyRgRs0zPiUu2', 'M.Kom', 'Kepala Sekolah', 'man1.png', 'Cibaregbeg - Jawa Barat', 'instagram.com', 'twitter.com', 'github.com', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae ducimus fuga, praesentium placeat possimus laudantium explicabo. Doloribus odit ab tenetur repellat hic itaque, blanditiis necessitatibus voluptas, qui illum ut atque!', NULL, '2020-01-29 06:58:28', '2020-01-29 06:58:28'),
(2, 'Neddy AP', 'Neddy', 'neddy@admin.com', NULL, '$2y$10$z0wUtafgc/VR/Tj6swjNAOF.sk6Fk8wGZ1IgLsWDO8w9QGm33J6dO', 'S.Kom', 'Kepala Sekolah', 'man2.png', 'Cicurug - Sukabumi', 'instagram.com', 'twitter.com', 'github.com', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis obcaecati aut aliquid sint. Quia, beatae quaerat sapiente sed in cumque numquam ad facilis odio quidem voluptas ut, aperiam, neque mollitia.', NULL, '2020-01-29 06:58:28', '2020-01-29 06:58:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikel_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ebook_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etube`
--
ALTER TABLE `etube`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etube_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `etube`
--
ALTER TABLE `etube`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id_kategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id_kategori`) ON DELETE CASCADE;

--
-- Constraints for table `ebook`
--
ALTER TABLE `ebook`
  ADD CONSTRAINT `ebook_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id_kategori`) ON DELETE CASCADE;

--
-- Constraints for table `etube`
--
ALTER TABLE `etube`
  ADD CONSTRAINT `etube_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id_kategori`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
