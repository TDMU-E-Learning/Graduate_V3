-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 28, 2023 lúc 03:53 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `graduate`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_05_035338_create_students_table', 1),
(6, '2023_06_19_085010_create_queue_table', 2),
(7, '2023_06_19_112159_create_queue_table', 3),
(8, '2023_06_19_112305_create_queue_table', 4),
(9, '2023_06_19_114909_create_queues_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `queues`
--

CREATE TABLE `queues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `time_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `queues`
--

INSERT INTO `queues` (`id`, `student_id`, `time_at`, `created_at`, `updated_at`) VALUES
(41, '1', '2023-06-25 13:44:43', NULL, '2023-06-25 06:44:43'),
(42, '2', '2023-06-25 13:45:24', NULL, NULL),
(43, '3', '2023-06-25 13:46:40', NULL, NULL),
(44, '4', '2023-06-25 13:47:03', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `degree` varchar(255) NOT NULL,
  `majour` varchar(255) NOT NULL,
  `participation_time` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`id`, `student_id`, `name`, `image`, `degree`, `majour`, `participation_time`, `location`, `seat`, `created_at`, `updated_at`) VALUES
(2, '2', '2', NULL, '2', '2', '2', '2', '2', '2023-06-25 06:42:16', '2023-06-25 06:42:16'),
(3, '1', '1', '1', '1', '1', '1', '1', '1', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(5, '3', '3', '3', '3', '3', '3', '3', '3', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(6, '4', '4', '4', '4', '4', '4', '4', '4', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(7, '5', '5', '5', '5', '5', '5', '5', '5', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(8, '6', '6', '6', '6', '6', '6', '6', '6', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(9, '7', '7', '7', '7', '7', '7', '7', '7', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(10, '8', '8', '8', '8', '8', '8', '8', '8', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(11, '9', '9', '9', '9', '9', '9', '9', '9', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(12, '10', '10', '10', '10', '10', '10', '10', '10', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(13, '11', '11', '11', '11', '11', '11', '11', '11', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(14, '12', '12', '12', '12', '12', '12', '12', '12', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(15, '13', '13', '13', '13', '13', '13', '13', '13', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(16, '14', '14', '14', '14', '14', '14', '14', '14', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(17, '15', '15', '15', '15', '15', '15', '15', '15', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(18, '16', '16', '16', '16', '16', '16', '16', '16', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(19, '17', '17', '17', '17', '17', '17', '17', '17', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(20, '18', '18', '18', '18', '18', '18', '18', '18', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(21, '19', '19', '19', '19', '19', '19', '19', '19', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(22, '20', '20', '20', '20', '20', '20', '20', '20', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(23, '21', '21', '21', '21', '21', '21', '21', '21', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(24, '22', '22', '22', '22', '22', '22', '22', '22', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(25, '23', '23', '23', '23', '23', '23', '23', '23', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(26, '24', '24', '24', '24', '24', '24', '24', '24', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(27, '25', '25', '25', '25', '25', '25', '25', '25', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(28, '26', '26', '26', '26', '26', '26', '26', '26', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(29, '27', '27', '27', '27', '27', '27', '27', '27', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(30, '28', '28', '28', '28', '28', '28', '28', '28', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(31, '29', '29', '29', '29', '29', '29', '29', '29', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(32, '30', '30', '30', '30', '30', '30', '30', '30', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(33, '31', '31', '31', '31', '31', '31', '31', '31', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(34, '32', '32', '32', '32', '32', '32', '32', '32', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(35, '33', '33', '33', '33', '33', '33', '33', '33', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(36, '34', '34', '34', '34', '34', '34', '34', '34', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(37, '35', '35', '35', '35', '35', '35', '35', '35', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(38, '36', '36', '36', '36', '36', '36', '36', '36', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(39, '37', '37', '37', '37', '37', '37', '37', '37', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(40, '38', '38', '38', '38', '38', '38', '38', '38', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(41, '39', '39', '39', '39', '39', '39', '39', '39', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(42, '40', '40', '40', '40', '40', '40', '40', '40', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(43, '41', '41', '41', '41', '41', '41', '41', '41', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(44, '42', '42', '42', '42', '42', '42', '42', '42', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(45, '43', '43', '43', '43', '43', '43', '43', '43', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(46, '44', '44', '44', '44', '44', '44', '44', '44', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(47, '45', '45', '45', '45', '45', '45', '45', '45', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(48, '46', '46', '46', '46', '46', '46', '46', '46', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(49, '47', '47', '47', '47', '47', '47', '47', '47', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(50, '48', '48', '48', '48', '48', '48', '48', '48', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(51, '49', '49', '49', '49', '49', '49', '49', '49', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(52, '50', '50', '50', '50', '50', '50', '50', '50', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(53, '51', '51', '51', '51', '51', '51', '51', '51', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(54, '52', '52', '52', '52', '52', '52', '52', '52', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(55, '53', '53', '53', '53', '53', '53', '53', '53', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(56, '54', '54', '54', '54', '54', '54', '54', '54', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(57, '55', '55', '55', '55', '55', '55', '55', '55', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(58, '56', '56', '56', '56', '56', '56', '56', '56', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(59, '57', '57', '57', '57', '57', '57', '57', '57', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(60, '58', '58', '58', '58', '58', '58', '58', '58', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(61, '59', '59', '59', '59', '59', '59', '59', '59', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(62, '60', '60', '60', '60', '60', '60', '60', '60', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(63, '61', '61', '61', '61', '61', '61', '61', '61', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(64, '62', '62', '62', '62', '62', '62', '62', '62', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(65, '63', '63', '63', '63', '63', '63', '63', '63', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(66, '64', '64', '64', '64', '64', '64', '64', '64', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(67, '65', '65', '65', '65', '65', '65', '65', '65', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(68, '66', '66', '66', '66', '66', '66', '66', '66', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(69, '67', '67', '67', '67', '67', '67', '67', '67', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(70, '68', '68', '68', '68', '68', '68', '68', '68', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(71, '69', '69', '69', '69', '69', '69', '69', '69', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(72, '70', '70', '70', '70', '70', '70', '70', '70', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(73, '71', '71', '71', '71', '71', '71', '71', '71', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(74, '72', '72', '72', '72', '72', '72', '72', '72', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(75, '73', '73', '73', '73', '73', '73', '73', '73', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(76, '74', '74', '74', '74', '74', '74', '74', '74', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(77, '75', '75', '75', '75', '75', '75', '75', '75', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(78, '76', '76', '76', '76', '76', '76', '76', '76', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(79, '77', '77', '77', '77', '77', '77', '77', '77', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(80, '78', '78', '78', '78', '78', '78', '78', '78', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(81, '79', '79', '79', '79', '79', '79', '79', '79', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(82, '80', '80', '80', '80', '80', '80', '80', '80', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(83, '81', '81', '81', '81', '81', '81', '81', '81', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(84, '82', '82', '82', '82', '82', '82', '82', '82', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(85, '83', '83', '83', '83', '83', '83', '83', '83', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(86, '84', '84', '84', '84', '84', '84', '84', '84', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(87, '85', '85', '85', '85', '85', '85', '85', '85', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(88, '86', '86', '86', '86', '86', '86', '86', '86', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(89, '87', '87', '87', '87', '87', '87', '87', '87', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(90, '88', '88', '88', '88', '88', '88', '88', '88', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(91, '89', '89', '89', '89', '89', '89', '89', '89', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(92, '90', '90', '90', '90', '90', '90', '90', '90', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(93, '91', '91', '91', '91', '91', '91', '91', '91', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(94, '92', '92', '92', '92', '92', '92', '92', '92', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(95, '93', '93', '93', '93', '93', '93', '93', '93', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(96, '94', '94', '94', '94', '94', '94', '94', '94', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(97, '95', '95', '95', '95', '95', '95', '95', '95', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(98, '96', '96', '96', '96', '96', '96', '96', '96', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(99, '97', '97', '97', '97', '97', '97', '97', '97', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(100, '98', '98', '98', '98', '98', '98', '98', '98', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(101, '99', '99', '99', '99', '99', '99', '99', '99', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(102, '100', '100', '100', '100', '100', '100', '100', '100', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(103, '101', '101', '101', '101', '101', '101', '101', '101', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(104, '102', '102', '102', '102', '102', '102', '102', '102', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(105, '103', '103', '103', '103', '103', '103', '103', '103', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(106, '104', '104', '104', '104', '104', '104', '104', '104', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(107, '105', '105', '105', '105', '105', '105', '105', '105', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(108, '106', '106', '106', '106', '106', '106', '106', '106', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(109, '107', '107', '107', '107', '107', '107', '107', '107', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(110, '108', '108', '108', '108', '108', '108', '108', '108', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(111, '109', '109', '109', '109', '109', '109', '109', '109', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(112, '110', '110', '110', '110', '110', '110', '110', '110', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(113, '111', '111', '111', '111', '111', '111', '111', '111', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(114, '112', '112', '112', '112', '112', '112', '112', '112', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(115, '113', '113', '113', '113', '113', '113', '113', '113', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(116, '114', '114', '114', '114', '114', '114', '114', '114', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(117, '115', '115', '115', '115', '115', '115', '115', '115', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(118, '116', '116', '116', '116', '116', '116', '116', '116', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(119, '117', '117', '117', '117', '117', '117', '117', '117', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(120, '118', '118', '118', '118', '118', '118', '118', '118', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(121, '119', '119', '119', '119', '119', '119', '119', '119', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(122, '120', '120', '120', '120', '120', '120', '120', '120', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(123, '121', '121', '121', '121', '121', '121', '121', '121', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(124, '122', '122', '122', '122', '122', '122', '122', '122', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(125, '123', '123', '123', '123', '123', '123', '123', '123', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(126, '124', '124', '124', '124', '124', '124', '124', '124', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(127, '125', '125', '125', '125', '125', '125', '125', '125', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(128, '126', '126', '126', '126', '126', '126', '126', '126', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(129, '127', '127', '127', '127', '127', '127', '127', '127', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(130, '128', '128', '128', '128', '128', '128', '128', '128', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(131, '129', '129', '129', '129', '129', '129', '129', '129', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(132, '130', '130', '130', '130', '130', '130', '130', '130', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(133, '131', '131', '131', '131', '131', '131', '131', '131', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(134, '132', '132', '132', '132', '132', '132', '132', '132', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(135, '133', '133', '133', '133', '133', '133', '133', '133', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(136, '134', '134', '134', '134', '134', '134', '134', '134', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(137, '135', '135', '135', '135', '135', '135', '135', '135', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(138, '136', '136', '136', '136', '136', '136', '136', '136', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(139, '137', '137', '137', '137', '137', '137', '137', '137', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(140, '138', '138', '138', '138', '138', '138', '138', '138', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(141, '139', '139', '139', '139', '139', '139', '139', '139', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(142, '140', '140', '140', '140', '140', '140', '140', '140', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(143, '141', '141', '141', '141', '141', '141', '141', '141', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(144, '142', '142', '142', '142', '142', '142', '142', '142', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(145, '143', '143', '143', '143', '143', '143', '143', '143', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(146, '144', '144', '144', '144', '144', '144', '144', '144', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(147, '145', '145', '145', '145', '145', '145', '145', '145', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(148, '146', '146', '146', '146', '146', '146', '146', '146', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(149, '147', '147', '147', '147', '147', '147', '147', '147', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(150, '148', '148', '148', '148', '148', '148', '148', '148', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(151, '149', '149', '149', '149', '149', '149', '149', '149', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(152, '150', '150', '150', '150', '150', '150', '150', '150', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(153, '151', '151', '151', '151', '151', '151', '151', '151', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(154, '152', '152', '152', '152', '152', '152', '152', '152', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(155, '153', '153', '153', '153', '153', '153', '153', '153', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(156, '154', '154', '154', '154', '154', '154', '154', '154', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(157, '155', '155', '155', '155', '155', '155', '155', '155', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(158, '156', '156', '156', '156', '156', '156', '156', '156', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(159, '157', '157', '157', '157', '157', '157', '157', '157', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(160, '158', '158', '158', '158', '158', '158', '158', '158', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(161, '159', '159', '159', '159', '159', '159', '159', '159', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(162, '160', '160', '160', '160', '160', '160', '160', '160', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(163, '161', '161', '161', '161', '161', '161', '161', '161', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(164, '162', '162', '162', '162', '162', '162', '162', '162', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(165, '163', '163', '163', '163', '163', '163', '163', '163', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(166, '164', '164', '164', '164', '164', '164', '164', '164', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(167, '165', '165', '165', '165', '165', '165', '165', '165', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(168, '166', '166', '166', '166', '166', '166', '166', '166', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(169, '167', '167', '167', '167', '167', '167', '167', '167', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(170, '168', '168', '168', '168', '168', '168', '168', '168', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(171, '169', '169', '169', '169', '169', '169', '169', '169', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(172, '170', '170', '170', '170', '170', '170', '170', '170', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(173, '171', '171', '171', '171', '171', '171', '171', '171', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(174, '172', '172', '172', '172', '172', '172', '172', '172', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(175, '173', '173', '173', '173', '173', '173', '173', '173', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(176, '174', '174', '174', '174', '174', '174', '174', '174', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(177, '175', '175', '175', '175', '175', '175', '175', '175', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(178, '176', '176', '176', '176', '176', '176', '176', '176', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(179, '177', '177', '177', '177', '177', '177', '177', '177', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(180, '178', '178', '178', '178', '178', '178', '178', '178', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(181, '179', '179', '179', '179', '179', '179', '179', '179', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(182, '180', '180', '180', '180', '180', '180', '180', '180', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(183, '181', '181', '181', '181', '181', '181', '181', '181', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(184, '182', '182', '182', '182', '182', '182', '182', '182', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(185, '183', '183', '183', '183', '183', '183', '183', '183', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(186, '184', '184', '184', '184', '184', '184', '184', '184', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(187, '185', '185', '185', '185', '185', '185', '185', '185', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(188, '186', '186', '186', '186', '186', '186', '186', '186', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(189, '187', '187', '187', '187', '187', '187', '187', '187', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(190, '188', '188', '188', '188', '188', '188', '188', '188', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(191, '189', '189', '189', '189', '189', '189', '189', '189', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(192, '190', '190', '190', '190', '190', '190', '190', '190', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(193, '191', '191', '191', '191', '191', '191', '191', '191', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(194, '192', '192', '192', '192', '192', '192', '192', '192', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(195, '193', '193', '193', '193', '193', '193', '193', '193', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(196, '194', '194', '194', '194', '194', '194', '194', '194', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(197, '195', '195', '195', '195', '195', '195', '195', '195', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(198, '196', '196', '196', '196', '196', '196', '196', '196', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(199, '197', '197', '197', '197', '197', '197', '197', '197', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(200, '198', '198', '198', '198', '198', '198', '198', '198', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(201, '199', '199', '199', '199', '199', '199', '199', '199', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(202, '200', '200', '200', '200', '200', '200', '200', '200', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(203, '201', '201', '201', '201', '201', '201', '201', '201', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(204, '202', '202', '202', '202', '202', '202', '202', '202', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(205, '203', '203', '203', '203', '203', '203', '203', '203', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(206, '204', '204', '204', '204', '204', '204', '204', '204', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(207, '205', '205', '205', '205', '205', '205', '205', '205', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(208, '206', '206', '206', '206', '206', '206', '206', '206', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(209, '207', '207', '207', '207', '207', '207', '207', '207', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(210, '208', '208', '208', '208', '208', '208', '208', '208', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(211, '209', '209', '209', '209', '209', '209', '209', '209', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(212, '210', '210', '210', '210', '210', '210', '210', '210', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(213, '211', '211', '211', '211', '211', '211', '211', '211', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(214, '212', '212', '212', '212', '212', '212', '212', '212', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(215, '213', '213', '213', '213', '213', '213', '213', '213', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(216, '214', '214', '214', '214', '214', '214', '214', '214', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(217, '215', '215', '215', '215', '215', '215', '215', '215', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(218, '216', '216', '216', '216', '216', '216', '216', '216', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(219, '217', '217', '217', '217', '217', '217', '217', '217', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(220, '218', '218', '218', '218', '218', '218', '218', '218', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(221, '219', '219', '219', '219', '219', '219', '219', '219', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(222, '220', '220', '220', '220', '220', '220', '220', '220', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(223, '221', '221', '221', '221', '221', '221', '221', '221', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(224, '222', '222', '222', '222', '222', '222', '222', '222', '2023-06-25 06:43:26', '2023-06-25 06:43:26'),
(225, '223', '223', '223', '223', '223', '223', '223', '223', '2023-06-25 06:43:26', '2023-06-25 06:43:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'a@gmail.com', NULL, '$2y$10$GOB7ZUHEs9UQ8lB7JoxaHuUwkZPdsRP/UPqbOdm64xZGFmcgszppy', 0, 'LEvYlg0voRA8RHVDMqBQQgpFRxNKN4LpIQbymRiHw74AT93nVFkhGzc3sHXB', '2023-06-19 01:14:01', '2023-06-19 01:14:01');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `queues`
--
ALTER TABLE `queues`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `queues`
--
ALTER TABLE `queues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
