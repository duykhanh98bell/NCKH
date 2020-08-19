-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 08, 2020 lúc 02:51 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nckh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluans`
--

CREATE TABLE `binhluans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cv` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviecs`
--

CREATE TABLE `congviecs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_da` int(11) NOT NULL,
  `name_job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota_job` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline_job` date DEFAULT NULL,
  `deadline_nowjob` date DEFAULT NULL,
  `file_job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uutien` int(11) NOT NULL,
  `status_job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `congviecs`
--

INSERT INTO `congviecs` (`id`, `id_da`, `name_job`, `mota_job`, `deadline_job`, `deadline_nowjob`, `file_job`, `uutien`, `status_job`, `created_at`, `updated_at`) VALUES
(1, 1, 'Congviec1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 1, '3', NULL, '2020-07-06 19:28:40'),
(2, 1, 'Congviec2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 1, '3', NULL, '2020-07-06 19:27:44'),
(3, 1, 'Congviec3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 1, '3', NULL, '2020-07-06 19:28:55'),
(4, 1, 'Congviec4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 1, '1', NULL, '2020-07-06 19:27:51'),
(5, 1, 'Congviec5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 2, '1', NULL, '2020-07-06 19:28:12'),
(6, 1, 'Congviec6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', '2020-12-12', '2020-12-12', NULL, 1, '3', NULL, '2020-07-06 22:04:15'),
(7, 1, 'Congviec7', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 3, '2', NULL, '2020-07-06 19:28:46'),
(8, 1, 'Congviec8', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 1, '2', NULL, '2020-07-06 19:29:25'),
(9, 1, 'Congviec9', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 1, '1', NULL, NULL),
(10, 1, 'Congviec10', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 1, '1', NULL, '2020-07-06 19:28:27'),
(11, 1, 'Congviec11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 1, '1', NULL, NULL),
(12, 1, 'Congviec12', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 1, '1', NULL, NULL),
(13, 2, 'Congviec1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 1, '3', NULL, '2020-07-06 19:54:18'),
(14, 2, 'Congviec2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 1, '2', NULL, '2020-07-06 19:54:12'),
(15, 2, 'Congviec3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 2, '2', NULL, '2020-07-06 19:53:41'),
(16, 2, 'Congviec4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 3, '1', NULL, NULL),
(17, 2, 'Congviec5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 1, '1', NULL, '2020-07-06 19:53:31'),
(18, 2, 'Congviec6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 1, '1', NULL, '2020-07-06 19:53:20'),
(19, 2, 'Congviec7', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 2, '1', NULL, NULL),
(20, 2, 'Congviec8', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 3, '1', NULL, NULL),
(21, 2, 'Congviec9', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 1, '1', NULL, '2020-07-06 19:53:26'),
(22, 2, 'Congviec10', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 1, '1', NULL, '2020-07-06 19:53:35'),
(23, 2, 'Congviec11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 2, '1', NULL, NULL),
(24, 2, 'Congviec12', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, aperiam!', NULL, NULL, NULL, 3, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cv_users`
--

CREATE TABLE `cv_users` (
  `id_cv` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nhom` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cv_users`
--

INSERT INTO `cv_users` (`id_cv`, `id_user`, `nhom`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, '2020-07-06 19:27:44', '2020-07-06 19:27:44'),
(4, 2, NULL, '2020-07-06 19:27:51', '2020-07-06 19:27:51'),
(3, 5, NULL, '2020-07-06 19:28:00', '2020-07-06 19:28:55'),
(1, 1, NULL, '2020-07-06 19:28:07', '2020-07-06 19:28:40'),
(5, 1, NULL, '2020-07-06 19:28:12', '2020-07-06 19:28:12'),
(7, 2, NULL, '2020-07-06 19:28:18', '2020-07-06 19:28:46'),
(10, 2, NULL, '2020-07-06 19:28:27', '2020-07-06 19:28:27'),
(8, 1, NULL, '2020-07-06 19:29:18', '2020-07-06 19:29:25'),
(13, 1, NULL, '2020-07-06 19:53:09', '2020-07-06 19:54:18'),
(15, 1, NULL, '2020-07-06 19:53:15', '2020-07-06 19:53:41'),
(18, 3, NULL, '2020-07-06 19:53:20', '2020-07-06 19:53:20'),
(21, 4, NULL, '2020-07-06 19:53:26', '2020-07-06 19:53:26'),
(17, 3, NULL, '2020-07-06 19:53:31', '2020-07-06 19:53:31'),
(22, 3, NULL, '2020-07-06 19:53:35', '2020-07-06 19:53:35'),
(14, 4, NULL, '2020-07-06 19:53:50', '2020-07-06 19:54:12'),
(6, 5, NULL, '2020-07-06 22:03:13', '2020-07-06 22:04:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `da_users`
--

CREATE TABLE `da_users` (
  `id_da` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isActive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `da_users`
--

INSERT INTO `da_users` (`id_da`, `id_user`, `isActive`, `created_at`, `updated_at`) VALUES
(1, 1, 'True', '2020-07-06 19:26:31', '2020-07-06 19:26:31'),
(1, 2, 'True', '2020-07-06 19:26:31', '2020-07-06 19:26:31'),
(1, 5, 'True', '2020-07-06 19:26:31', '2020-07-06 19:26:31'),
(1, 6, 'True', '2020-07-06 19:26:31', '2020-07-06 19:26:31'),
(1, 3, 'False', '2020-07-06 19:26:31', '2020-07-06 19:26:31'),
(1, 4, 'True', '2020-07-06 19:26:31', '2020-07-06 19:46:48'),
(2, 1, 'True', '2020-07-06 19:52:52', '2020-07-06 19:52:52'),
(2, 3, 'True', '2020-07-06 19:52:52', '2020-07-06 19:52:52'),
(2, 4, 'True', '2020-07-06 19:52:52', '2020-07-06 19:52:52'),
(2, 2, 'False', '2020-07-06 19:52:52', '2020-07-06 19:52:52'),
(2, 5, 'False', '2020-07-06 19:52:52', '2020-07-06 19:52:52'),
(2, 6, 'False', '2020-07-06 19:52:52', '2020-07-06 19:52:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duans`
--

CREATE TABLE `duans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_duan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_duan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tomtat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chitiet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `deadline_now` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `duans`
--

INSERT INTO `duans` (`id`, `name_duan`, `ma_duan`, `tomtat`, `chitiet`, `deadline`, `deadline_now`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nghiên cứu khoa học', 'DA1', 'Xây dựng website quản lý tiến độ công việc trong các dự án công nghệ thông tin', NULL, '2020-12-12', NULL, '3', '2020-07-06 19:26:31', '2020-07-06 19:50:50'),
(2, 'Xây dựng phần mềm học tập', 'DA2', 'Xây dựng phần mềm học tập', NULL, '2020-12-12', NULL, '1', '2020-07-06 19:52:52', '2020-07-06 19:52:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_03_01_093119_create_duans_table', 1),
(4, '2020_03_01_093245_create_tailieus_table', 1),
(5, '2020_03_01_5_create_users_table', 1),
(6, '2020_03_01_6_create_congviecs_table', 1),
(7, '2020_03_01_8_create_binhluans_table', 1),
(8, '2020_03_01_9_create_roles_table', 1),
(9, '2020_06_19_101036_create_da_users_table', 1),
(10, '2020_06_20_065452_create_cv_users_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permisions`
--

CREATE TABLE `permisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `level`, `created_at`, `updated_at`) VALUES
(1, 'PM', NULL, NULL),
(2, 'BA', NULL, NULL),
(3, 'Tester', NULL, NULL),
(4, 'Developer', NULL, NULL),
(5, 'Marketing', NULL, NULL),
(6, 'QA', NULL, NULL),
(7, 'QC', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_permision`
--

CREATE TABLE `role_permision` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `per_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tailieus`
--

CREATE TABLE `tailieus` (
  `id_tailieu` int(10) UNSIGNED NOT NULL,
  `id_da` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tailieus`
--

INSERT INTO `tailieus` (`id_tailieu`, `id_da`, `link`, `created_at`, `updated_at`) VALUES
(1, 1, 'duan1.xlsx', '2020-07-06 19:26:32', '2020-07-06 19:26:32'),
(2, 2, 'duan2.xlsx', '2020-07-06 19:52:53', '2020-07-06 19:52:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `address`, `phone`, `gender`, `birth`, `email`, `password`, `status_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Khánh', '77408888_521096411811821_818160745555427328_n (2).jpg', 'Minh Cường - Thường Tín - Hà Nội', '0336378689', 'Nam', '1998-10-15', 'duykhanh98bell@gmail.com', '$2y$10$dm6dVPAz.DNGbniGS3L38.xUV72L4QBTURnRBDoE6LJrsYSQDeaFm', 'fresher', NULL, '2020-06-30 10:27:52', '2020-06-30 10:27:52'),
(2, 'Trần Thị Lan', 'Lan.jpg', 'Thanh Hóa', '0123456789', 'Nu', '1998-12-12', 'lantranit@gmail.com', '$2y$10$UOKFxfJw8nHnBtAXOQDnHeB8ti33YGA8JlCJc5QB721lSGqeDZD82', 'fresher', NULL, '2020-06-30 10:28:25', '2020-06-30 10:28:25'),
(3, 'Vũ Thành Long', 'Long.jpg', 'Thanh Hóa', '0123456789', 'Nam', '2020-12-12', 'longvu1998@gmail.com', '$2y$10$secaczHKM3oJ6xvRQ2l0gu0F5OPjUwF9euJiguZT8xTL6QIkJUHF.', 'fresher', NULL, '2020-06-30 15:03:40', '2020-06-30 15:03:40'),
(4, 'Đoàn Đình Tâm', 'Tâm.jpg', 'Quảng Ninh', '0123456789', 'Nam', '2020-12-12', 'datmk123456789@gmail.com', '$2y$10$4qlvjYmjlYx22RksvNe3RewoKddlfMEkIePHrK9tcz.bjHRSuzJbS', 'fresher', NULL, '2020-06-30 15:04:20', '2020-06-30 15:04:20'),
(5, 'Đặng Xuân Bằng', 'Bằng.jpg', 'Hà Nội', '0123456789', 'Nam', '2020-12-12', 'bang@gmail.com', '$2y$10$ZlUlcH94dljah4DsVJb6vu6d2Jl9WFrNEniYdpFud85TU9AASz1Iy', 'fresher', NULL, '2020-06-30 15:05:01', '2020-06-30 15:05:01'),
(6, 'Phạm Quang Hiển', 'anh-dep-chup-dien-thoai.jpg', 'Hà Nội', '0123456789', 'Nam', '1999-12-12', 'phamquanghien@humg.com', '$2y$10$wY81vuqH1FMBUVWVarF07uygKgPUAQsSBxwi6Z.9nFcJVtXrrFiTS', 'senior', NULL, '2020-07-06 13:12:09', '2020-07-06 13:12:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2020-06-30 10:27:52', '2020-06-30 10:27:52'),
(2, 2, 3, '2020-06-30 10:28:25', '2020-06-30 10:28:25'),
(3, 3, 4, '2020-06-30 15:03:40', '2020-06-30 15:03:40'),
(4, 4, 4, '2020-06-30 15:04:20', '2020-06-30 15:04:20'),
(5, 5, 4, '2020-06-30 15:05:01', '2020-06-30 15:05:01'),
(6, 6, 1, '2020-07-06 13:12:09', '2020-07-06 13:12:09');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluans`
--
ALTER TABLE `binhluans`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `congviecs`
--
ALTER TABLE `congviecs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `duans`
--
ALTER TABLE `duans`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permisions`
--
ALTER TABLE `permisions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_permision`
--
ALTER TABLE `role_permision`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_permision_role_id_foreign` (`role_id`),
  ADD KEY `role_permision_per_id_foreign` (`per_id`);

--
-- Chỉ mục cho bảng `tailieus`
--
ALTER TABLE `tailieus`
  ADD PRIMARY KEY (`id_tailieu`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_roles_user_id_foreign` (`user_id`),
  ADD KEY `user_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluans`
--
ALTER TABLE `binhluans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `congviecs`
--
ALTER TABLE `congviecs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `duans`
--
ALTER TABLE `duans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `permisions`
--
ALTER TABLE `permisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `role_permision`
--
ALTER TABLE `role_permision`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tailieus`
--
ALTER TABLE `tailieus`
  MODIFY `id_tailieu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `role_permision`
--
ALTER TABLE `role_permision`
  ADD CONSTRAINT `role_permision_per_id_foreign` FOREIGN KEY (`per_id`) REFERENCES `permisions` (`id`),
  ADD CONSTRAINT `role_permision_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Các ràng buộc cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
