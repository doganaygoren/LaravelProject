-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Haz 2020, 01:46:59
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `laravel_application`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `visio` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `mission` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `short_text` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `content` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `about_us`
--

INSERT INTO `about_us` (`id`, `visio`, `mission`, `short_text`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Our Visio', 'Our Mission', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-07-22 13:18:28', '2019-08-04 12:06:16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `header` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `short_content` varchar(300) COLLATE utf8_turkish_ci DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `tags` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `images` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slug` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `header`, `content`, `short_content`, `author`, `tags`, `images`, `slug`, `category`, `created_at`, `updated_at`) VALUES
(1, 'test header', '<p>test content</p>', 'test short content', 1, 'test,tag', NULL, 'test-header-2019-07-29-065254', NULL, '2019-07-29 06:52:54', '2019-08-04 15:08:07'),
(20, 'test header2', '<p><ins>test content2</ins></p>', 'test short content 2', 1, 'test,header,2', NULL, 'test-header2-2019-07-31-094748', NULL, '2019-07-31 09:47:48', '2019-08-04 15:11:15'),
(26, 'test header3', '<p>test header 3</p>', 'test short content 3', 1, 'test,tag,3', NULL, 'test-header3-2019-07-31-095941', NULL, '2019-07-31 09:59:41', '2019-08-04 15:09:31'),
(27, 'test header4', '<p>test content4</p>', 'test short content 4', 1, 'test,tag,4,new', NULL, 'test-header-4-2019-07-31-100104', NULL, '2019-07-31 10:01:04', '2019-08-04 15:09:50'),
(28, 'test header5', '<p>test content 5</p>', 'test short content 5', 1, 'test,tag,5', NULL, 'test-header5-2019-08-01-085432', NULL, '2019-08-01 08:54:34', '2019-08-05 15:09:52'),
(29, 'test header6', '<p>test content 6</p>', 'test short content 6', 1, 'test,tag,6', NULL, 'test-header6-2019-08-04-110337', NULL, '2019-08-04 11:03:37', '2019-08-04 15:06:08'),
(30, 'test header7', '<p><strong>test content 7</strong></p>', 'test short content 7', 1, 'test,tag,7', NULL, 'test-header7-2019-08-06-143115', NULL, '2019-08-06 14:31:15', '2019-08-06 14:31:15'),
(33, 'Laravel Application', '<p><strong>Laravel Framework</strong></p>\r\n\r\n<p><em>Doğanay G&ouml;ren 01-08-19</em></p>', 'This blog page is about Laravel Framework.', 1, 'tag,laravel ,framework', NULL, 'laravel-application-2019-08-07-125115', 9, '2019-08-07 12:51:15', '2019-08-07 12:56:14'),
(34, 'test header8', '<p>test content 8</p>', 'test short content 8', 1, 'test,tag,8', NULL, 'test-header8-2019-08-07-125910', 10, '2019-08-07 12:59:10', '2019-08-07 12:59:10'),
(35, 'test header9', '<p>test</p>', 'test short content 9', 1, 'test', NULL, 'test-header9-2019-08-07-130509', 9, '2019-08-07 13:05:09', '2019-08-07 13:05:09'),
(36, 'test header10', '<p>test content 10</p>', 'test short content 10', 1, 'test,tag,10', NULL, 'test-header10-2019-08-07-132644', NULL, '2019-08-07 13:26:44', '2019-08-07 13:28:59'),
(37, 'test header11(no image)', '<p>test content11</p>', 'test short content 11', 1, 'test,tag,11', NULL, 'test-header11no-image-2019-08-07-133123', 5, '2019-08-07 13:31:23', '2019-08-07 13:31:23');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `upper_category` int(11) DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `upper_category`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Test Category Name', 0, 'test-category-name', '2019-08-06 11:30:45', '2019-08-06 11:30:45'),
(3, 'PHP', 0, 'php', '2019-08-06 11:31:37', '2019-08-06 11:31:37'),
(4, 'Javascript', 0, 'javascript', '2019-08-06 11:31:47', '2019-08-06 11:31:47'),
(5, 'HTML', 0, 'html', '2019-08-06 11:31:54', '2019-08-06 11:31:54'),
(6, 'CSS', 0, 'css', '2019-08-06 11:32:00', '2019-08-06 11:32:00'),
(7, 'Framework', 3, 'framework', '2019-08-06 12:07:10', '2019-08-06 12:07:10'),
(9, 'Laravel', 7, 'laravel', '2019-08-06 12:11:51', '2019-08-06 12:11:51'),
(10, 'Codeigniter', 7, 'codeigniter', '2019-08-06 12:26:12', '2019-08-06 12:26:12'),
(11, 'asd', 5, 'asd', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `content` text COLLATE utf8_turkish_ci NOT NULL,
  `blog` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `upper_comment` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `content`, `blog`, `upper_comment`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Doganay Goren', 'doganaygoren97@gmail.com', 'test content', 'laravel-application-2019-08-07-125115', 0, 0, '2019-08-28 14:22:08', '2019-08-28 14:22:08'),
(3, 'Doganay Goren', 'doganaygoren@gmail.com', 'Test Comment 06-08-19', 'test-header9-2019-08-07-130509', 0, 0, '2019-08-28 19:06:08', '2019-08-28 19:06:08'),
(4, 'Test User', 'testuser@gmail.com', 'test comment', 'test-header9-2019-08-07-130509', 0, 0, '2019-08-28 19:19:45', '2019-08-28 19:19:45'),
(5, 'User', 'user@gmail.com', 'test reply', 'test-header9-2019-08-07-130509', 4, 0, '2019-08-28 19:27:51', '2019-08-28 19:27:51'),
(6, NULL, NULL, 'test registered user', 'test-header9-2019-08-07-130509', 0, 1, '2019-08-29 12:27:19', '2019-08-29 12:27:19'),
(7, NULL, NULL, 'comment', 'test-header11no-image-2019-08-07-133123', 0, 1, '2019-08-29 18:27:50', '2019-08-29 18:27:50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `url` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `keyword` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `author` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fax` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mail` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `google` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `recapctha` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `map` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `analystic` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `youtube` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtp_user` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtp_password` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtp_host` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtp_port` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `logo`, `url`, `title`, `description`, `keyword`, `author`, `phone`, `mobile`, `fax`, `mail`, `address`, `google`, `recapctha`, `map`, `analystic`, `facebook`, `twitter`, `instagram`, `youtube`, `smtp_user`, `smtp_password`, `smtp_host`, `smtp_port`, `created_at`, `updated_at`) VALUES
(1, 'logo.jpg', 'test address', 'Test Title', 'test description', 'title,test,site', NULL, '02120701020', '05056789999', '1234567890', 'doganaygoren97@gmail.com', 'Silivri/Istanbul', 'test account', 'test recapctha', 'test map', 'test analystic', 'Test Facebook', 'Test Twitter', 'Test Instagram', 'Test Youtube', 'doganay', '123123', '5mlab', '587', '2019-07-10 14:13:43', '2019-08-30 02:46:58'),
(2, NULL, NULL, 'test2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-10 14:14:55', '2019-07-10 14:14:55');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authority` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `slug`, `email_verified_at`, `password`, `authority`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Doganay', 'doganaygoren97@gmail.com', 'doganay', NULL, '$2y$10$PJd.M8rl20qk/sGB8/C5DuWKHoapNXM0jICtqFHQPt3jknfa11z3m', '9', '6zkbJzSQy3vwNFWcjK8S493zwG8L9qPxEuFXqpPeN8oetNJBKCTopMbdEBl3', '2019-08-05 09:42:51', '2019-08-05 09:42:51'),
(2, 'Register_Test', 'test@gmail.com', 'register-test', NULL, '$2y$10$Z4Txpa/3fRNIDLj5EpQAfO.lBYYfOykNDbdVF/hcKmCvz.ugbZH3W', '0', NULL, '2019-08-29 17:24:53', '2019-08-29 17:24:53');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
