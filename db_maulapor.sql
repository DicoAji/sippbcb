-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2024 pada 09.52
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_maulapor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'b027adfaba30b4dbfc6488479b65e604', '2022-03-06 08:51:38'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', '0b9ce81dd3fa080ad5c91c8e7252e28d', '2022-03-06 09:00:51'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', '99536babf5ce7c9fd9040c17e34e327b', '2022-06-01 07:25:05'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'c484bd62a54abfe42785c56daab3f88c', '2022-06-24 13:18:08'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '6b2542a070d67d4a3cbd725a1c7d7b7f', '2023-09-12 00:56:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'Dicoaji', NULL, '2022-03-06 04:16:50', 0),
(2, '::1', 'Dicoaji', 2, '2022-03-06 04:29:14', 0),
(3, '::1', 'dicoaji12@gmail.com', 5, '2022-03-06 08:51:47', 1),
(4, '::1', 'adasda', NULL, '2022-03-06 08:52:48', 0),
(5, '::1', 'dsdas', NULL, '2022-03-06 08:53:05', 0),
(6, '::1', 'adadas', NULL, '2022-03-06 08:53:32', 0),
(7, '::1', 'dicoaji12@gmail.com', 7, '2022-03-06 09:00:58', 1),
(8, '::1', 'dicoaji12@gmail.com', 7, '2022-03-06 09:19:08', 1),
(9, '::1', 'dassdada', NULL, '2022-03-06 09:31:51', 0),
(10, '::1', 'daasdas', NULL, '2022-03-06 09:32:09', 0),
(11, '::1', 'sadsada', NULL, '2022-03-06 09:33:07', 0),
(12, '::1', 'dicoaji12@gmail.com', 7, '2022-03-06 09:35:01', 1),
(13, '::1', 'Dicoaji', NULL, '2022-03-07 08:55:40', 0),
(14, '::1', 'Dicoaji', NULL, '2022-03-07 08:55:51', 0),
(15, '::1', 'dicoaji12@gmail.com', 7, '2022-03-07 08:56:02', 1),
(16, '::1', 'dicoaji12@gmail.com', 7, '2022-03-07 08:57:13', 1),
(17, '::1', 'dicoaji12@gmail.com', 7, '2022-03-07 09:49:17', 1),
(18, '::1', 'dicoaji12@gmail.com', 7, '2022-03-07 10:49:31', 1),
(19, '::1', 'dicoaji12@gmail.com', 7, '2022-03-07 10:54:50', 1),
(20, '::1', 'dicoaji12@gmail.com', 7, '2022-03-07 11:31:31', 1),
(21, '::1', 'dicoaji12@gmail.com', 7, '2022-03-07 12:18:24', 1),
(22, '::1', 'dicoaji12@gmail.com', 7, '2022-03-07 23:58:35', 1),
(23, '::1', 'Dicoaji', NULL, '2022-03-08 08:34:12', 0),
(24, '::1', 'dicoaji12@gmail.com', 7, '2022-03-08 08:34:21', 1),
(25, '::1', 'dicoaji12@gmail.com', 7, '2022-03-08 22:58:15', 1),
(26, '::1', 'dicoaji12@gmail.com', 7, '2022-03-10 21:06:34', 1),
(27, '::1', 'dicoaji12@gmail.com', 7, '2022-03-13 20:02:02', 1),
(28, '::1', 'dicoaji12@gmail.com', 7, '2022-03-14 20:13:00', 1),
(29, '::1', 'dicoaji12@gmail.com', 7, '2022-03-16 18:58:08', 1),
(30, '::1', 'dicoaji12@gmail.com', 7, '2022-03-17 19:38:12', 1),
(31, '::1', 'dicoaji12@gmail.com', 7, '2022-03-17 20:50:14', 1),
(32, '::1', 'dicoaji12@gmail.com', 7, '2022-03-18 00:37:04', 1),
(33, '::1', 'dicoaji12@gmail.com', 7, '2022-03-18 00:37:05', 1),
(34, '::1', 'dicoaji12@gmail.com', 7, '2022-03-18 01:48:41', 1),
(35, '::1', 'dicoaji12@gmail.com', 7, '2022-03-19 09:51:39', 1),
(36, '::1', 'dicoaji12@gmail.com', 7, '2022-03-19 11:57:50', 1),
(37, '::1', 'dicoaji12@gmail.com', 7, '2022-03-19 20:04:26', 1),
(38, '::1', 'dicoaji12@gmail.com', 7, '2022-03-19 23:26:16', 1),
(39, '::1', 'dicoaji12@gmail.com', 7, '2022-03-20 23:27:15', 1),
(40, '::1', 'dicoaji12@gmail.com', 7, '2022-03-22 06:52:41', 1),
(41, '::1', 'dicoaji12@gmail.com', 7, '2022-03-23 07:04:08', 1),
(42, '::1', 'dicoaji12@gmail.com', 7, '2022-03-24 01:08:59', 1),
(43, '::1', 'dicoaji12@gmail.com', 7, '2022-03-24 01:20:49', 1),
(44, '::1', 'dicoaji12@gmail.com', 7, '2022-03-24 01:25:26', 1),
(45, '::1', 'dicoaji12@gmail.com', 7, '2022-03-30 10:22:13', 1),
(46, '::1', 'dicoaji12@gmail.com', 7, '2022-03-30 22:21:22', 1),
(47, '::1', 'dicoaji12@gmail.com', 7, '2022-03-30 22:39:03', 1),
(48, '::1', 'dicoaji12@gmail.com', 7, '2022-03-31 02:47:14', 1),
(49, '::1', 'dicoaji12@gmail.com', 7, '2022-03-31 03:31:48', 1),
(50, '::1', 'dicoaji12@gmail.com', 7, '2022-03-31 04:23:02', 1),
(51, '::1', 'dicoaji12@gmail.com', 7, '2022-04-12 23:59:36', 1),
(52, '::1', 'dicoaji12@gmail.com', 7, '2022-04-13 10:45:03', 1),
(53, '::1', 'dicoaji12@gmail.com', 7, '2022-04-13 11:03:49', 1),
(54, '::1', 'dicoaji12@gmail.com', 7, '2022-04-13 11:43:20', 1),
(55, '::1', 'dicoaji12@gmail.com', 7, '2022-04-13 21:51:41', 1),
(56, '::1', 'dicoaji12@gmail.com', 7, '2022-04-13 21:54:45', 1),
(57, '::1', 'dicoaji12@gmail.com', 7, '2022-04-16 00:07:55', 1),
(58, '::1', 'dicoaji12@gmail.com', 7, '2022-04-16 04:11:04', 1),
(59, '::1', 'dicoaji12@gmail.com', 7, '2022-04-16 11:51:04', 1),
(60, '::1', 'dicoaji12@gmail.com', 7, '2022-04-16 23:17:23', 1),
(61, '::1', 'dicoaji12@gmail.com', 7, '2022-04-17 18:14:59', 1),
(62, '::1', 'dicoaji12@gmail.com', 7, '2022-04-18 02:39:18', 1),
(63, '::1', 'dicoaji12@gmail.com', 7, '2022-04-18 08:54:19', 1),
(64, '::1', 'dicoaji12@gmail.com', 7, '2022-04-18 20:38:06', 1),
(65, '::1', 'dicoaji12@gmail.com', 7, '2022-04-19 02:54:19', 1),
(66, '::1', 'dicoaji12@gmail.com', 7, '2022-04-19 03:07:40', 1),
(67, '::1', 'dicoaji12@gmail.com', 7, '2022-04-20 00:15:07', 1),
(68, '::1', 'dicoaji12@gmail.com', 7, '2022-04-22 11:30:16', 1),
(69, '::1', 'dicoaji12@gmail.com', 7, '2022-04-25 10:58:42', 1),
(70, '::1', 'dicoaji12@gmail.com', 7, '2022-04-25 11:07:50', 1),
(71, '::1', 'dicoaji12@gmail.com', 7, '2022-04-25 11:11:14', 1),
(72, '::1', 'dicoaji12@gmail.com', 7, '2022-04-25 11:14:55', 1),
(73, '::1', 'dicoaji12@gmail.com', 7, '2022-04-25 11:14:55', 1),
(74, '::1', 'dicoaji12@gmail.com', 7, '2022-04-25 11:26:40', 1),
(75, '::1', 'dicoaji12@gmail.com', 7, '2022-04-27 23:40:35', 1),
(76, '::1', 'dicoaji12@gmail.com', 7, '2022-05-07 00:27:44', 1),
(77, '::1', 'dicoaji12@gmail.com', 7, '2022-05-07 00:39:38', 1),
(78, '::1', 'dicoaji12@gmail.com', 7, '2022-05-07 01:34:29', 1),
(79, '::1', 'dicoaji12@gmail.com', 7, '2022-05-07 01:34:30', 1),
(80, '::1', 'dicoaji12@gmail.com', 7, '2022-05-07 06:57:31', 1),
(81, '::1', 'dicoaji12@gmail.com', 7, '2022-05-07 19:50:13', 1),
(82, '::1', 'dicoaji12@gmail.com', 7, '2022-05-10 07:53:08', 1),
(83, '::1', 'Dicoaji', NULL, '2022-05-10 07:53:23', 0),
(84, '::1', 'Dicoajippp', NULL, '2022-05-10 07:53:36', 0),
(85, '::1', 'dicoaji12@gmail.com', 7, '2022-05-10 07:53:52', 1),
(86, '::1', 'rafliferdian', NULL, '2022-05-10 07:58:22', 0),
(87, '::1', 'dicoaji12@gmail.com', 7, '2022-05-10 08:22:48', 1),
(88, '::1', 'dicoaji12@gmail.com', 7, '2022-05-11 03:40:24', 1),
(89, '::1', 'dicoaji12@gmail.com', 7, '2022-05-11 23:45:37', 1),
(90, '::1', 'dicoaji12@gmail.com', 7, '2022-05-12 00:29:14', 1),
(91, '::1', 'dicoaji12@gmail.com', 7, '2022-05-12 06:47:16', 1),
(92, '::1', 'dicoaji12@gmail.com', 7, '2022-05-13 00:54:37', 1),
(93, '::1', 'dicoaji12@gmail.com', 7, '2022-05-13 06:52:57', 1),
(94, '::1', 'dicoaji12@gmail.com', 7, '2022-05-13 19:33:16', 1),
(95, '::1', 'dicoaji12@gmail.com', 7, '2022-05-14 20:56:16', 1),
(96, '::1', 'dicoaji12@gmail.com', 7, '2022-05-14 23:39:19', 1),
(97, '::1', 'dicoaji12@gmail.com', 7, '2022-05-15 20:35:21', 1),
(98, '::1', 'Dicoaji', NULL, '2022-05-15 21:23:21', 0),
(99, '::1', 'dicoaji12@gmail.com', 7, '2022-05-15 21:23:30', 1),
(100, '::1', 'dicoaji12@gmail.com', 7, '2022-05-17 19:03:30', 1),
(101, '::1', 'dicoaji12@gmail.com', 7, '2022-05-17 23:56:35', 1),
(102, '::1', 'dicoaji12@gmail.com', 7, '2022-05-18 02:59:48', 1),
(103, '::1', 'dicoaji12@gmail.com', 7, '2022-05-18 21:04:10', 1),
(104, '::1', 'Dicoaji', NULL, '2022-05-21 03:32:02', 0),
(105, '::1', 'dicoaji12@gmail.com', 7, '2022-05-21 03:32:11', 1),
(106, '::1', 'dicoaji12@gmail.com', 7, '2022-05-21 05:43:25', 1),
(107, '::1', 'dicoaji12@gmail.com', 7, '2022-05-22 06:34:49', 1),
(108, '::1', 'dicoaji12@gmail.com', 7, '2022-05-22 09:52:52', 1),
(109, '::1', 'dicoaji12@gmail.com', 7, '2022-05-22 10:16:32', 1),
(110, '::1', 'dicoaji12@gmail.com', 7, '2022-05-22 19:04:52', 1),
(111, '::1', 'dicoaji12@gmail.com', 7, '2022-05-22 23:19:57', 1),
(112, '::1', 'dicoaji12@gmail.com', 7, '2022-05-23 00:00:17', 1),
(113, '::1', 'dicoaji12@gmail.com', 7, '2022-05-23 05:35:28', 1),
(114, '::1', 'dicoaji12@gmail.com', 7, '2022-05-23 17:32:14', 1),
(115, '::1', 'dicoaji12@gmail.com', 7, '2022-05-23 23:42:01', 1),
(116, '::1', 'dicoaji12@gmail.com', 7, '2022-05-24 05:20:09', 1),
(117, '::1', 'dicoaji12@gmail.com', 7, '2022-05-24 09:10:58', 1),
(118, '::1', 'dicoaji12@gmail.com', 7, '2022-05-24 21:26:44', 1),
(119, '::1', 'dicoaji12@gmail.com', 7, '2022-05-25 17:06:14', 1),
(120, '::1', 'dicoaji12@gmail.com', 7, '2022-05-25 22:24:30', 1),
(121, '::1', 'Dicoaji', NULL, '2022-05-25 22:32:23', 0),
(122, '::1', 'dicoaji12@gmail.com', 7, '2022-05-25 22:32:34', 1),
(123, '::1', 'dicoaji12@gmail.com', NULL, '2022-05-26 02:02:54', 0),
(124, '::1', 'dicoaji12@gmail.com', 7, '2022-05-26 02:03:01', 1),
(125, '::1', 'dicoaji12@gmail.com', 7, '2022-05-26 02:11:09', 1),
(126, '::1', 'dicoaji12@gmail.com', 7, '2022-05-26 05:17:05', 1),
(127, '::1', 'dicoaji12@gmail.com', 7, '2022-05-28 00:47:18', 1),
(128, '::1', 'Dicoaji', NULL, '2022-05-28 05:15:24', 0),
(129, '::1', 'dicoaji12@gmail.com', 7, '2022-05-28 05:27:22', 1),
(130, '::1', 'dicoaji12@gmail.com', 7, '2022-05-29 23:48:36', 1),
(131, '::1', 'Dicoaji', NULL, '2022-05-30 01:04:35', 0),
(132, '::1', 'dicoaji12@gmail.com', 7, '2022-05-30 01:04:42', 1),
(133, '::1', 'Dicoaji', NULL, '2022-06-01 04:14:07', 0),
(134, '::1', 'dicoaji12@gmail.com', 7, '2022-06-01 04:15:03', 1),
(135, '::1', 'dicoaji12@gmail.com', 7, '2022-06-01 07:15:22', 1),
(136, '::1', 'dicoajiprasetyo12@gmail.com', 9, '2022-06-01 07:25:28', 1),
(137, '::1', 'dicoaji12@gmail.com', 7, '2022-06-01 07:52:56', 1),
(138, '::1', 'dicoaji12@gmail.com', 7, '2022-06-03 02:11:03', 1),
(139, '::1', 'dicoaji12@gmail.com', 7, '2022-06-03 03:05:42', 1),
(140, '::1', 'dicoaji12@gmail.com', 7, '2022-06-03 08:19:59', 1),
(141, '::1', 'dicoaji12@gmail.com', 7, '2022-06-03 09:03:20', 1),
(142, '::1', 'dicoaji12@gmail.com', 7, '2022-06-03 09:20:30', 1),
(143, '::1', 'dicoaji12@gmail.com', 7, '2022-06-03 23:33:47', 1),
(144, '::1', 'dicoaji12@gmail.com', 7, '2022-06-04 00:21:35', 1),
(145, '::1', 'dicoaji12@gmail.com', 7, '2022-06-04 22:27:37', 1),
(146, '::1', 'dicoaji12@gmail.com', 7, '2022-06-04 23:33:11', 1),
(147, '::1', 'dicoaji12@gmail.com', 7, '2022-06-05 00:32:35', 1),
(148, '::1', 'disdikbud@batangkab.go.id', 11, '2022-06-05 01:03:59', 1),
(149, '::1', 'dicoaji12@gmail.com', 7, '2022-06-05 10:02:54', 1),
(150, '::1', 'dicoaji12@gmail.com', 7, '2022-06-07 00:15:45', 1),
(151, '::1', 'disdikbud@batangkab.go.id', 11, '2022-06-12 02:57:51', 1),
(152, '::1', 'dicoaji12@gmail.com', 7, '2022-06-13 01:51:34', 1),
(153, '::1', 'dicoaji12@gmail.com', 7, '2022-06-13 02:49:16', 1),
(154, '::1', 'dicoaji12@gmail.com', 7, '2022-06-13 03:11:20', 1),
(155, '::1', 'dicoaji12@gmail.com', 7, '2022-06-13 23:44:02', 1),
(156, '::1', 'dicoaji12@gmail.com', 7, '2022-06-14 02:05:37', 1),
(157, '::1', 'dicoaji12@gmail.com', 7, '2022-06-14 08:05:04', 1),
(158, '::1', 'dicoaji12@gmail.com', 7, '2022-06-15 00:12:53', 1),
(159, '::1', 'dicoaji12@gmail.com', 7, '2022-06-15 00:13:21', 1),
(160, '::1', 'dicoaji12@gmail.com', 7, '2022-06-15 00:56:17', 1),
(161, '::1', 'dicoaji12@gmail.com', 7, '2022-06-16 08:00:02', 1),
(162, '::1', 'dicoaji12@gmail.com', 7, '2022-06-17 00:56:34', 1),
(163, '::1', 'Dicoaji', NULL, '2022-06-17 01:13:32', 0),
(164, '::1', 'dicoaji12@gmail.com', 7, '2022-06-17 01:13:38', 1),
(165, '::1', 'dicoaji12@gmail.com', 7, '2022-06-17 05:01:26', 1),
(166, '::1', 'dicoaji12@gmail.com', 7, '2022-06-17 05:04:09', 1),
(167, '::1', 'dicoaji12@gmail.com', 7, '2022-06-17 05:04:54', 1),
(168, '::1', 'dicoaji12@gmail.com', 7, '2022-06-17 23:11:33', 1),
(169, '::1', 'dicoaji12@gmail.com', 7, '2022-06-18 03:29:15', 1),
(170, '::1', 'Dicoaji', NULL, '2022-06-19 10:26:27', 0),
(171, '::1', 'dicoaji12@gmail.com', 7, '2022-06-19 10:26:37', 1),
(172, '::1', 'dicoaji12@gmail.com', 7, '2022-06-19 19:21:58', 1),
(173, '::1', 'dicoaji12@gmail.com', 7, '2022-06-20 17:36:44', 1),
(174, '::1', 'dicoaji12@gmail.com', 7, '2022-06-20 17:38:29', 1),
(175, '::1', 'dicoaji12@gmail.com', 7, '2022-06-21 14:26:12', 1),
(176, '::1', 'dicoaji12@gmail.com', 7, '2022-06-24 07:29:33', 1),
(177, '::1', 'dicoaji12@gmail.com', 7, '2022-06-24 07:31:14', 1),
(178, '::1', 'dicoaji12@gmail.com', 7, '2022-06-24 07:31:58', 1),
(179, '::1', 'dicoajiprasetyo12@gmail.com', 12, '2022-06-24 13:19:33', 1),
(180, '::1', 'dicoajiprasetyo12@gmail.com', 12, '2022-06-24 13:22:01', 1),
(181, '::1', 'Admin', NULL, '2022-06-24 13:24:33', 0),
(182, '::1', 'dicoajiprasetyo12@gmail.com', 12, '2022-06-24 13:24:44', 1),
(183, '::1', 'dicoajiprasetyo12@gmail.com', 12, '2022-06-24 13:36:58', 1),
(184, '::1', 'dicoajiprasetyo12@gmail.com', 12, '2022-06-25 00:16:56', 1),
(185, '::1', 'dicoajiprasetyo12@gmail.com', 12, '2022-06-25 07:22:44', 1),
(186, '::1', 'dicoajiprasetyo12@gmail.com', 12, '2022-06-25 07:23:59', 1),
(187, '::1', 'Admin', NULL, '2022-06-25 07:58:39', 0),
(188, '::1', 'dicoajiprasetyo12@gmail.com', 12, '2022-06-25 07:58:46', 1),
(189, '::1', 'Admin', NULL, '2022-06-25 09:03:07', 0),
(190, '::1', 'Admin', NULL, '2022-06-25 09:03:08', 0),
(191, '::1', 'dicoajiprasetyo12@gmail.com', 12, '2022-06-25 09:03:14', 1),
(192, '::1', 'dicoajiprasetyo12@gmail.com', 12, '2022-06-25 09:45:31', 1),
(193, '::1', 'dicoajiprasetyo12@gmail.com', 12, '2022-06-25 10:32:27', 1),
(194, '::1', 'Admin', NULL, '2022-07-03 23:51:02', 0),
(195, '::1', 'dicoajiprasetyo12@gmail.com', 12, '2022-07-03 23:51:10', 1),
(196, '::1', 'dicoajiprasetyo12@gmail.com', 12, '2022-07-10 20:48:42', 1),
(197, '::1', 'Dico Aji', NULL, '2023-07-16 02:54:56', 0),
(198, '::1', 'Dico Aji', NULL, '2023-07-16 02:56:42', 0),
(199, '::1', 'Dico Aji', NULL, '2023-07-16 02:59:08', 0),
(200, '::1', 'dicoaji12@gmail.com', 7, '2023-07-16 02:59:25', 1),
(201, '::1', 'di', NULL, '2023-07-16 03:09:59', 0),
(202, '::1', 'dicoaji12@gmail.com', 7, '2023-07-16 03:10:11', 1),
(203, '::1', 'Dico Aji', NULL, '2023-07-16 15:12:04', 0),
(204, '::1', 'Dico Aji', NULL, '2023-07-16 15:13:19', 0),
(205, '::1', 'dicoaji12@gmail.com', 7, '2023-07-16 15:13:31', 1),
(206, '::1', 'dicoaji12@gmail.com', 7, '2023-07-16 15:16:29', 1),
(207, '::1', 'dicoajiprasetyo12@gmail.com', 12, '2023-07-16 15:25:55', 1),
(208, '::1', 'dicoaji12@gmail.com', 7, '2023-07-16 16:04:44', 1),
(209, '::1', 'dicoajiprasetyo12@gmail.com', 13, '2023-09-12 00:57:05', 1),
(210, '::1', 'DicoAji', NULL, '2023-10-27 03:43:29', 0),
(211, '::1', 'dicoaji12@gmail.com', 7, '2023-10-27 03:43:40', 1),
(212, '::1', 'DicoAji', NULL, '2023-10-29 19:03:56', 0),
(213, '::1', 'Admin', NULL, '2023-10-29 19:04:02', 0),
(214, '::1', 'Admin', NULL, '2023-11-05 00:10:07', 0),
(215, '::1', 'DicoAji', NULL, '2023-11-05 00:10:15', 0),
(216, '::1', 'dicoajiprasetyo12@gmail.com', 13, '2023-11-05 00:10:26', 1),
(217, '::1', 'DicoAji', NULL, '2023-11-08 13:05:19', 0),
(218, '::1', 'DicoAji', NULL, '2023-11-08 13:05:27', 0),
(219, '::1', 'DicoAji', NULL, '2023-11-08 13:06:12', 0),
(220, '::1', 'dicoaji12@gmail.com', 7, '2023-11-08 13:06:20', 1),
(221, '::1', 'dicoaji12@gmail.com', 7, '2023-11-08 13:14:28', 1),
(222, '::1', 'DicoAji', NULL, '2024-03-07 19:14:51', 0),
(223, '::1', 'DicoAji', NULL, '2024-03-07 19:15:05', 0),
(224, '::1', 'dicoaji12@gmail.com', 7, '2024-03-07 19:15:23', 1),
(225, '::1', 'DicoAji1', NULL, '2024-05-21 17:02:54', 0),
(226, '::1', 'admin1', NULL, '2024-05-21 17:03:01', 0),
(227, '::1', 'DicoAji', NULL, '2024-05-21 17:05:49', 0),
(228, '::1', 'DicoAji', NULL, '2024-05-21 17:05:57', 0),
(229, '::1', 'dicoaji12@gmail.com', 7, '2024-05-21 17:06:08', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, 'dicoaji12@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36', 'c5cdac5a044cd484dc5a875d06c23446 ', '2022-05-07 01:34:20'),
(2, 'dicoajiprasetyo12@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '84642f28b4e9539df334f8f48260e011 ', '2022-06-24 13:24:22'),
(3, 'dicoajiprasetyo12@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'a39d555a9e1c93fafa9219b1952ca1a2 ', '2022-06-25 09:51:45'),
(4, 'dicoaji12@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '7a5c28e4ad5bbf1bd094c654c17aadf0 ', '2023-07-16 02:58:54'),
(5, 'dicoaji12@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '9131803d2f9a58433d9f18ea6a2ecd6d ', '2023-07-16 15:13:09'),
(6, 'dicoajiprasetyo12@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.82', 'c773aedd37e8a93fffe7ed658adaa0f2 ', '2023-07-16 15:25:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `benda`
--

CREATE TABLE `benda` (
  `id_benda` int(11) NOT NULL,
  `id_jenis_benda` int(11) DEFAULT NULL,
  `nama_benda` varchar(255) NOT NULL,
  `lokasi_saat_ini` text NOT NULL,
  `gambar` text DEFAULT NULL,
  `juru_pemelihara` varchar(25) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `gambar2` text DEFAULT NULL,
  `gambar3` text DEFAULT NULL,
  `tanggal_ditemukan` date DEFAULT NULL,
  `kegunaan` text DEFAULT NULL,
  `koordinat` varchar(50) DEFAULT NULL,
  `sejarah` text DEFAULT NULL,
  `id_pendata` int(11) NOT NULL,
  `id_laporan` int(11) DEFAULT NULL,
  `gambar4` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisbenda`
--

CREATE TABLE `jenisbenda` (
  `id_jenis_benda` int(11) NOT NULL,
  `jenis_benda` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenisbenda`
--

INSERT INTO `jenisbenda` (`id_jenis_benda`, `jenis_benda`) VALUES
(1, 'Keris'),
(2, 'Benda'),
(3, 'Bangunan'),
(4, 'Makam'),
(5, 'Goa'),
(6, 'Tombak'),
(11, 'Situs'),
(12, 'Kawasan'),
(17, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_pelapor` int(11) NOT NULL,
  `tanggal_penemuan` date DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `gambar` text NOT NULL,
  `gambar2` text DEFAULT NULL,
  `gambar3` text DEFAULT NULL,
  `gambar4` text DEFAULT NULL,
  `desa_penemuan` text DEFAULT NULL,
  `dusun_penemuan` text DEFAULT NULL,
  `rt_penemuan` int(11) DEFAULT NULL,
  `rw_penemuan` int(11) DEFAULT NULL,
  `kec_penemuan` varchar(50) DEFAULT NULL,
  `id_jenis_benda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1646561699, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelapor`
--

CREATE TABLE `pelapor` (
  `id_pelapor` int(11) NOT NULL,
  `nama_pelapor` varchar(25) NOT NULL,
  `nomor_hubung` varchar(20) NOT NULL,
  `email` text DEFAULT NULL,
  `nik` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelapor`
--

INSERT INTO `pelapor` (`id_pelapor`, `nama_pelapor`, `nomor_hubung`, `email`, `nik`) VALUES
(1, 'Dico', '66867', 'dicoaji12@gmail.com', '676757'),
(2, 'Dico', '66867', 'dicoaji12@gmail.com', '676757'),
(3, 'Dico', '66867', 'dicoaji12@gmail.com', '676757'),
(4, 'jhhj', '662153671576', 'dicoaji12@gmail.com', '676757'),
(5, 'dssad', '213321321', 'wwankurniawan00@gmail.com', '4444455'),
(6, 'Musa Alfian ', '21313', 'irulroz@gmail.com', '2221212313213'),
(7, 'Dico', '2123321', 'dicoaji12@gmail.com', '1112111'),
(8, 'Musa Alfian  Maulana', '232132', 'ferdianrafli125@gmail.com', '222222'),
(9, 'Dico', '2131312312', 'dicoaji12@gmail.com', '31232131312'),
(10, 'Dico Aji Prasetyo', '098889898788', 'dicoaji12@gmail.com', '5231653153251263'),
(11, 'musaaa', '231321', 'ferdianrafli125@gmail.com', '2113213123'),
(12, 'sdad', '9821918930', 'dicoajiprasetyo12@gmail.com', '123132123123'),
(13, 'Dico Aji Prasetyo', '612387216872168', 'dicoaji12@gmail.com', '1253416346143'),
(14, 'Musa Alfian ', '123123213213', 'dicoaji12@gmail.com', '2121313123'),
(15, 'Dico Aji', '12812632781', 'wwankurniawan00@gmail.com', '12871368712'),
(16, 'wawan', '218368127', 'dicoaji12@gmail.com', '2358157'),
(17, 'adsdssadsad', '1223132', 'dicoajiprasetyo12@gmail.com', '213312'),
(18, 'Dico Aji Prasetyo', '088767657778', 'dicoaji12@gmail.com', '6381378126836816'),
(19, 'Dico Aji Prasetyo', '0898077', 'dicoaji12@gmail.com', '5767575757123'),
(20, 'Musa Alfian ', '0987667876', 'irulroz@gmail.com', '3123783821'),
(21, 'Musa Alfian ', '99080998', 'ferdianrafli125@gmail.com', '11111111'),
(22, 'Dico Aji Prasetyo', '325715372', 'dicoaji12@gmail.com', '2187163613286872'),
(23, 'Musa Alfian ', '2132213', 'dicoaji12@gmail.com', '123321312'),
(24, 'adsasdsa', '12302813091', 'dicoaji12@gmail.com', '23132132'),
(25, 'Dico Aji Prasetyo', '088721667265', 'dicoaji12@gmail.com', '09123091831280'),
(26, 'asdad', '123132131322', 'dicoaji12@gmail.com', '1321738126376127'),
(27, 'Musa Alfian ', '0888787878', 'dicoaji12@gmail.com', '532131753613'),
(28, 'Musa Alfian ', '0888718718', 'dicoaji12@gmail.com', '211531735215'),
(29, 'Dico', '08898989', 'dicoaji12@gmail.com', '261236812638'),
(30, 'Musa Alfian ', '082131312836', 'dicoaji12@gmail.com', '21313'),
(31, 'Musa Alfian ', '2135173516', 'dicoaji12@gmail.com', '786178367812'),
(32, 'Dico Aji Prasetyo', '088211275377', 'dicoaji12@gmail.com', '0231381972391778'),
(33, 'sdasda', '012839173', 'dicoajiprasetyo12@gmail.com', '31213'),
(34, 'sdgasjhgdj', '08882165371', 'dicoajiprasetyo12@gmail.com', '123561283516835'),
(35, 'Musa Alfian', '087765425565', 'dicoajiprasetyo12@gmail.com', '3355266617766254'),
(36, 'wawan', '09787453543543', 'wwankurniawan00@gmail.com', '23432432424234'),
(37, 'sda', '096755253241', 'dicoaji12@gmail.com', '2131231231');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendata`
--

CREATE TABLE `pendata` (
  `id_pendata` int(11) NOT NULL,
  `pendata` varchar(255) DEFAULT NULL,
  `waktu_pendataan` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendata`
--

INSERT INTO `pendata` (`id_pendata`, `pendata`, `waktu_pendataan`) VALUES
(52, 'wahyu', '2022-06-03 21:09:41'),
(60, 'Tim Pendata Cagar Budaya Disdikbud Batang Tahun 2021', '2022-06-05 12:03:09'),
(94, 'Tim Pendata Cagar Budaya Disdikbud Batang Tahun 2021', '2022-06-17 14:05:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'dicoaji12@gmail.com', 'DicoAji', '$2y$10$TmyiDRTrM6u9u4SrGtetG.bhyuqxQJ82YZ9dSP9lbOGtV6TxVqUla', '6cc3f602f742277fdcf8b45873157304', '2023-07-16 15:13:10', '2023-10-29 20:04:45', NULL, NULL, NULL, 1, 0, '2022-03-06 08:59:19', '2023-10-29 19:04:45', NULL),
(13, 'dicoajiprasetyo12@gmail.com', 'Dico Aji', '$2y$10$b.qYfrsC0GyiERN12gMTkOgyEcQuiyNBdh9nB/HuCT01GYeAw1c7S', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-09-12 00:55:53', '2023-09-12 00:56:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `benda`
--
ALTER TABLE `benda`
  ADD PRIMARY KEY (`id_benda`),
  ADD KEY `id_jenis_benda` (`id_jenis_benda`),
  ADD KEY `id_pendata` (`id_pendata`),
  ADD KEY `id_laporan` (`id_laporan`);

--
-- Indeks untuk tabel `jenisbenda`
--
ALTER TABLE `jenisbenda`
  ADD PRIMARY KEY (`id_jenis_benda`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `nik` (`id_pelapor`),
  ADD KEY `id_jenis_benda` (`id_jenis_benda`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`id_pelapor`);

--
-- Indeks untuk tabel `pendata`
--
ALTER TABLE `pendata`
  ADD PRIMARY KEY (`id_pendata`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `benda`
--
ALTER TABLE `benda`
  MODIFY `id_benda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT untuk tabel `jenisbenda`
--
ALTER TABLE `jenisbenda`
  MODIFY `id_jenis_benda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelapor`
--
ALTER TABLE `pelapor`
  MODIFY `id_pelapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `pendata`
--
ALTER TABLE `pendata`
  MODIFY `id_pendata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `benda`
--
ALTER TABLE `benda`
  ADD CONSTRAINT `benda_ibfk_1` FOREIGN KEY (`id_jenis_benda`) REFERENCES `jenisbenda` (`id_jenis_benda`),
  ADD CONSTRAINT `benda_ibfk_2` FOREIGN KEY (`id_pendata`) REFERENCES `pendata` (`id_pendata`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `benda_ibfk_3` FOREIGN KEY (`id_laporan`) REFERENCES `laporan` (`id_laporan`);

--
-- Ketidakleluasaan untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_4` FOREIGN KEY (`id_jenis_benda`) REFERENCES `jenisbenda` (`id_jenis_benda`),
  ADD CONSTRAINT `laporan_ibfk_5` FOREIGN KEY (`id_pelapor`) REFERENCES `pelapor` (`id_pelapor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
