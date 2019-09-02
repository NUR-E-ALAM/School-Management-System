-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 11:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r37_lara_pfmulti`
--

-- --------------------------------------------------------

--
-- Table structure for table `academyinfos`
--

CREATE TABLE `academyinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED DEFAULT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `shift_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academyinfos`
--

INSERT INTO `academyinfos` (`id`, `student_id`, `user_id`, `reg_no`, `roll_no`, `session_id`, `section_id`, `class_id`, `shift_id`, `created_at`, `updated_at`) VALUES
(5, 4, 43, '343423', '32432', 1, 3, 3, 2, '2019-04-22 19:54:31', '2019-04-23 17:08:27'),
(6, 5, 44, '12524', '1254', 1, 1, 1, 1, '2019-04-23 17:14:55', '2019-04-23 17:14:55'),
(7, 6, 45, '12', '1', 1, 1, 1, 1, '2019-04-23 17:52:13', '2019-04-23 17:52:13'),
(8, 7, 46, '43254', '2534', 1, 1, 1, 1, '2019-04-23 17:57:38', '2019-04-23 17:57:38'),
(9, 8, 47, '342534', '324543', 1, 2, 1, 1, '2019-04-23 17:58:52', '2019-04-23 17:58:52'),
(10, 9, 48, '435345', '435345', 1, 5, 3, 3, '2019-04-23 18:00:56', '2019-04-23 18:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `actives`
--

CREATE TABLE `actives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actives`
--

INSERT INTO `actives` (`id`, `active_name`, `created_at`, `updated_at`) VALUES
(1, 'Active', NULL, NULL),
(2, 'Inactive', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `add_students`
--

CREATE TABLE `add_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gurdian_id` bigint(20) UNSIGNED DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facontact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` bigint(20) UNSIGNED DEFAULT NULL,
  `religion_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blood_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gender_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nationality_id` bigint(20) UNSIGNED DEFAULT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_students`
--

INSERT INTO `add_students` (`id`, `user_id`, `gurdian_id`, `first_name`, `last_name`, `father_name`, `mother_name`, `date_of_birth`, `picture`, `facontact`, `contact_no`, `language_id`, `religion_id`, `blood_id`, `gender_id`, `nationality_id`, `present_address`, `permanent_address`, `active_id`, `created_at`, `updated_at`) VALUES
(1, 40, NULL, 'zahd', 'sdfsdf', 'retgre', 'reterter', '2019-04-01', '1555985492_2801.jpg', '4353454353454', '56423534534', 1, 1, 1, 1, 1, 'dsf  sdfadsfsda esf sdf sd sefasda dsaf fds', 'sdfsd sdf sdf ssd fsdf sadf dssdfsdfsd', 1, '2019-04-22 20:11:33', '2019-04-22 20:11:33'),
(2, 41, NULL, 'hakk', 'lak', 'efefgf dsfdas', 'dsfsad sdfsd', '2019-04-16', '1555989726_4287.jpg', '3245435345345', '45345234534', 1, 1, 1, 1, 1, 'df dsf sdff sdfads fds', 'sdfa sdfsdf sdsdf dsdsf', 1, '2019-04-22 21:22:07', '2019-04-22 21:22:07'),
(4, 43, NULL, 'zahddd', 'dsfsadf', 'fdsfsdafs', 'dsfds adsfds f', '2019-04-11', '1556006070_2609.jpg', '245423532', '34534534534', 1, 1, 1, 1, 1, 'dsf adsf dsfd dsf sdafds', 'dsafds fasd dsaf sdfa sadfdsafsdf sd', 1, '2019-04-23 01:54:31', '2019-04-23 01:54:31'),
(5, 44, NULL, 'kalami', 'tahura', 'gfdg', 'fgadsf', '2019-04-25', '1556082894_3890.jpeg', '23465445654', '456466565', 1, 1, 1, 1, 1, 'dsfg sdf sdf sdfsd dsfds', 'sdf sda asfsdfsd fsd fsd', 1, '2019-04-23 23:14:55', '2019-04-23 23:14:55'),
(6, 45, NULL, 'Hosneara', 'Himo', 'kjlhslafj', 'asf sadfdsf', '2019-04-17', '1556085131_3207.jpg', '2456655', '2466875595', 1, 1, 1, 1, 1, 'fsad sfo sfd fsja ljfapfasjljfsa fsafsfd s', 'asfsadf fsadf fasdfsdfsdf aFfsdfsf', 1, '2019-04-23 23:52:13', '2019-04-23 23:52:13'),
(7, 46, NULL, 'kalidlm', 'hilatakd', 'fewfsadf', 'dsfd sdfds', '2019-04-30', '1556085458_4616.png', '4534534534', '435324534', 2, 2, 1, 1, 1, 'df adsfs sdfsd dsf dsf ds', 'dsfsda fdssdf sdsfds f', 1, '2019-04-23 23:57:38', '2019-04-23 23:57:38'),
(8, 47, NULL, 'wer', 'ewrewr', 'ds sdf sdfds', 'dsfsdf', '2019-04-12', '1556085532_3696.png', '45345435', '625465454', 1, 1, 1, 1, 1, 'f fsdaadsf sd sdf sdaf adsfds', 'sdf sdf df fdsf dsfd', 1, '2019-04-23 23:58:52', '2019-04-23 23:58:52'),
(9, 48, NULL, 'ewrwqe', 'wer wer', 'dsf sdfsdf', 'dsf asfd', '2019-04-22', '1556085656_4060.jpg', '345342543534', '452354435', 3, 1, 1, 1, 1, 'dfa dssdaf sdfsdf ds', 'ds fsfdsf sdfdsf dsfds fdsf', 1, '2019-04-24 00:00:56', '2019-04-24 00:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

CREATE TABLE `blood_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blood_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_groups`
--

INSERT INTO `blood_groups` (`id`, `blood_name`, `active_id`, `created_at`, `updated_at`) VALUES
(1, 'A+', 1, NULL, NULL),
(2, 'A-', NULL, NULL, NULL),
(3, 'AB+', 1, NULL, NULL),
(4, 'AB-', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`id`, `class_name`, `session_id`, `active_id`, `created_at`, `updated_at`) VALUES
(1, 'One', 1, 1, '2019-04-23 22:48:49', '2019-04-23 22:48:49'),
(2, 'One', 2, 1, '2019-04-23 22:49:03', '2019-04-23 22:49:03'),
(3, 'Two', 1, 1, '2019-04-23 22:49:13', '2019-04-23 22:49:13'),
(4, 'Two', 2, 1, '2019-04-23 22:49:32', '2019-04-23 22:49:32'),
(5, 'Three', 1, 1, '2019-04-23 22:50:06', '2019-04-23 22:50:06'),
(6, 'Three', 2, 1, '2019-04-23 22:50:15', '2019-04-23 22:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `classrutines`
--

CREATE TABLE `classrutines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` bigint(20) UNSIGNED DEFAULT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `shift_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `professor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `day_id` bigint(20) UNSIGNED DEFAULT NULL,
  `s_hour_id` bigint(20) UNSIGNED DEFAULT NULL,
  `s_minute_id` bigint(20) UNSIGNED DEFAULT NULL,
  `e_hour_id` bigint(20) UNSIGNED DEFAULT NULL,
  `e_minute_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `day_name`, `created_at`, `updated_at`) VALUES
(4, 'Saturday', '2019-04-08 22:05:35', '2019-04-08 22:05:35'),
(5, 'Sunday', '2019-04-08 22:05:44', '2019-04-08 22:05:44'),
(6, 'Monday', '2019-04-08 22:05:56', '2019-04-08 22:05:56'),
(8, 'Tuesday', '2019-04-08 22:06:24', '2019-04-08 22:06:24'),
(9, 'Wednesday', '2019-04-08 22:07:10', '2019-04-08 22:07:10'),
(10, 'Turasday', '2019-04-08 22:08:04', '2019-04-08 22:08:04'),
(11, 'Friday', '2019-04-08 22:08:14', '2019-04-08 22:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`, `active_id`, `created_at`, `updated_at`) VALUES
(1, 'Economice', 1, '2019-04-05 03:37:33', '2019-04-05 03:37:33'),
(3, 'Bangla', 1, '2019-04-05 03:49:01', '2019-04-05 03:49:01'),
(4, 'English', 2, '2019-04-05 11:55:57', '2019-04-05 11:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'Demo Event-1', '2017-09-11', '2017-09-12', '2019-05-05 23:27:02', '2019-05-05 23:27:02'),
(2, 'Demo Event-2', '2017-09-11', '2017-09-13', '2019-05-05 23:27:02', '2019-05-05 23:27:02'),
(3, 'Demo Event-3', '2017-09-14', '2017-09-14', '2019-05-05 23:27:02', '2019-05-05 23:27:02'),
(4, 'Demo Event-3', '2017-09-17', '2017-09-17', '2019-05-05 23:27:03', '2019-05-05 23:27:03'),
(5, 'Bari jabo', '2019-05-06', '2019-05-08', NULL, NULL),
(6, 'Tanzir nur kotodur job ki hobe', '2019-05-16', '2019-05-16', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classexamname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examstart` date DEFAULT NULL,
  `examend` date DEFAULT NULL,
  `active_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `classexamname`, `examstart`, `examend`, `active_id`, `created_at`, `updated_at`) VALUES
(1, 'Fast year exam', '2019-05-09', '2019-05-15', 1, '2019-05-06 03:36:23', '2019-05-06 03:36:23'),
(2, 'Englasih exam', '2019-05-09', '2019-05-16', 1, '2019-05-08 03:18:12', '2019-05-08 03:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `gender_name`, `active_id`, `created_at`, `updated_at`) VALUES
(1, 'Male', 1, NULL, NULL),
(2, 'Female', 1, NULL, NULL),
(3, 'Other', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `graden` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gradep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `markform` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `markupto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hours`
--

CREATE TABLE `hours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hour_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hours`
--

INSERT INTO `hours` (`id`, `hour_name`, `created_at`, `updated_at`) VALUES
(1, '1 :00 PM', '2019-04-08 14:42:28', '2019-04-08 14:42:28'),
(2, '2:00 PM', '2019-04-08 22:08:30', '2019-04-08 22:08:30'),
(3, '3:00 PM', '2019-04-08 22:08:38', '2019-04-08 22:08:38'),
(4, '4:00 PM', '2019-04-08 22:08:49', '2019-04-08 22:08:49'),
(5, '5 :00 PM', '2019-04-08 22:09:02', '2019-04-08 22:09:02'),
(6, '6 :00 PM', '2019-04-08 22:09:17', '2019-04-08 22:09:17'),
(7, '7.00 AM', '2019-04-08 22:09:42', '2019-04-08 22:09:42'),
(8, '8.00 AM', '2019-04-08 22:09:56', '2019-04-08 22:09:56'),
(9, '9.00 AM', '2019-04-08 22:10:08', '2019-04-08 22:10:08'),
(10, '10.00 AM', '2019-04-08 22:10:20', '2019-04-08 22:10:20'),
(11, '11.00 AM', '2019-04-08 22:10:34', '2019-04-08 22:10:34'),
(12, '12.00 AM', '2019-04-08 22:10:49', '2019-04-08 22:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `languagename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `languagename`, `created_at`, `updated_at`) VALUES
(1, 'Bangla', NULL, NULL),
(2, 'English', NULL, NULL),
(3, 'Hindi', NULL, NULL),
(4, 'Urdu', NULL, NULL);

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
(1, '2018_01_22_035957_create_active_table', 1),
(2, '2019_01_12_000000_create_users_table', 1),
(3, '2019_01_12_100000_create_password_resets_table', 1),
(4, '2019_01_22_020603_blood_groups', 1),
(5, '2019_01_22_041630_create_genders_table', 1),
(7, '2019_01_22_095232_create_religions_table', 1),
(9, '2019_01_22_102442_create_exams_table', 1),
(10, '2019_01_22_102757_create_nationalities_table', 1),
(11, '2019_01_22_104936_create_languages_table', 1),
(15, '2019_01_22_170552_create_grades_table', 1),
(16, '2019_01_22_184552_create_teacherinfos_table', 1),
(17, '2019_01_22_200536_create_roles_table', 1),
(21, '2019_02_23_122005_create_subjects_table', 2),
(23, '2019_04_05_090727_create_departments_table', 3),
(28, '2019_04_05_103827_create_syllabi_table', 4),
(29, '2019_04_05_203118_create_add_students_table', 4),
(32, '2019_04_06_051820_create_academyinfos_table', 5),
(36, '2019_04_08_193025_create_days_table', 9),
(37, '2019_04_08_193311_create_hours_table', 10),
(38, '2019_04_08_193532_create_minutes_table', 10),
(39, '2019_04_08_193823_create_months_table', 10),
(40, '2019_04_08_193857_create_years_table', 10),
(42, '2019_04_15_181029_create_classrutines_table', 11),
(49, '2019_01_22_061400_create_sessions_table', 13),
(50, '2019_01_22_072007_create_classrooms_table', 13),
(51, '2019_01_22_105925_create_shifts_table', 13),
(52, '2019_02_23_105826_create_sections_table', 13),
(53, '2019_05_06_050807_create_events_table', 14),
(62, '2019_04_22_132902_create_student_attendances_table', 17),
(66, '2019_05_08_094428_create_results_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `minutes`
--

CREATE TABLE `minutes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `minute_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `minutes`
--

INSERT INTO `minutes` (`id`, `minute_name`, `created_at`, `updated_at`) VALUES
(1, '12', '2019-04-08 22:47:42', '2019-04-08 22:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `month_name`, `created_at`, `updated_at`) VALUES
(1, 'January', '2019-04-08 22:27:09', '2019-04-08 22:27:09'),
(2, 'February', '2019-04-08 22:27:24', '2019-04-08 22:27:24'),
(3, 'March', '2019-04-08 22:27:31', '2019-04-08 22:27:31'),
(4, 'April', '2019-04-08 22:27:44', '2019-04-08 22:27:44'),
(5, 'May', '2019-04-08 22:27:50', '2019-04-08 22:27:50'),
(6, 'June', '2019-04-08 22:27:57', '2019-04-08 22:27:57'),
(7, 'July', '2019-04-08 22:28:04', '2019-04-08 22:28:04'),
(8, 'Augost', '2019-04-08 22:28:14', '2019-04-08 22:28:14'),
(9, 'September', '2019-04-08 22:28:26', '2019-04-08 22:28:26'),
(10, 'Octrober', '2019-04-08 22:28:36', '2019-04-08 22:28:36'),
(11, 'November', '2019-04-08 22:28:46', '2019-04-08 22:28:46'),
(12, 'December', '2019-04-08 22:28:57', '2019-04-08 22:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

CREATE TABLE `nationalities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nation_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nationalities`
--

INSERT INTO `nationalities` (`id`, `nation_name`, `created_at`, `updated_at`) VALUES
(1, 'Bangladeshi', NULL, NULL),
(2, 'Indian', NULL, NULL),
(3, 'USA', NULL, NULL),
(4, 'England', NULL, NULL);

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
-- Table structure for table `religions`
--

CREATE TABLE `religions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `religion_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`id`, `religion_name`, `created_at`, `updated_at`) VALUES
(1, 'Islam', NULL, NULL),
(2, 'Hindu', NULL, NULL),
(3, 'Kista', NULL, NULL),
(4, 'Buddu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `session_id` bigint(20) UNSIGNED DEFAULT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED DEFAULT NULL,
  `shift_id` bigint(20) UNSIGNED DEFAULT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `mark`, `roll`, `exam_id`, `subject_id`, `session_id`, `class_id`, `section_id`, `shift_id`, `student_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '20', '1254', 1, 1, 1, 1, 1, 1, 5, 1, '2019-05-09 22:21:54', '2019-05-09 22:21:54'),
(2, '39', '1', 1, 1, 1, 1, 1, 1, 6, 1, '2019-05-09 22:21:55', '2019-05-09 22:21:55'),
(3, '30', '2534', 1, 1, 1, 1, 1, 1, 7, 1, '2019-05-09 22:21:55', '2019-05-09 22:21:55'),
(4, '40', '1', 1, 3, 1, 1, 1, 1, 6, 1, '2019-05-09 22:21:55', '2019-05-09 22:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` bigint(20) UNSIGNED DEFAULT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `shift_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `session_id`, `class_id`, `shift_id`, `active_id`, `created_at`, `updated_at`) VALUES
(1, 'A Section', 1, 1, 1, 1, '2019-04-23 22:55:02', '2019-04-23 22:55:02'),
(2, 'B Section', 1, 1, 1, 1, '2019-04-23 22:57:45', '2019-04-23 22:57:45'),
(3, 'A Section', 1, 3, 2, 1, '2019-04-23 22:58:35', '2019-04-23 22:58:35'),
(4, 'B Section', 1, 3, 2, 1, '2019-04-23 22:58:49', '2019-04-23 22:58:49'),
(5, 'C Section', 1, 3, 3, 1, '2019-04-23 22:59:07', '2019-04-23 22:59:07'),
(6, 'D Section', 1, 3, 3, 1, '2019-04-23 22:59:20', '2019-04-23 22:59:20'),
(7, 'A Section', 1, 5, 4, 1, '2019-04-23 22:59:36', '2019-04-23 22:59:36'),
(8, 'B Section', 1, 5, 4, 1, '2019-04-23 22:59:52', '2019-04-23 22:59:52'),
(9, 'A Section', 2, 2, 5, 1, '2019-04-23 23:00:09', '2019-04-23 23:00:09'),
(10, 'A Section', 2, 4, 6, 1, '2019-04-23 23:00:24', '2019-04-23 23:00:24'),
(11, 'A Section', 2, 4, 8, 1, '2019-04-23 23:00:37', '2019-04-23 23:00:37'),
(12, 'B Section', 2, 4, 8, 1, '2019-04-23 23:00:50', '2019-04-23 23:00:50'),
(13, 'C Section', 2, 6, 7, 1, '2019-04-23 23:03:59', '2019-04-23 23:03:59'),
(14, 'D Section', 2, 6, 7, 1, '2019-04-23 23:04:12', '2019-04-23 23:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `session_name`, `active_id`, `created_at`, `updated_at`) VALUES
(1, '2018-2019', 1, '2019-04-23 22:48:19', '2019-04-23 22:48:19'),
(2, '2019-2020', 1, '2019-04-23 22:48:29', '2019-04-23 22:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shift_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` bigint(20) UNSIGNED DEFAULT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shifts`
--

INSERT INTO `shifts` (`id`, `shift_name`, `session_id`, `class_id`, `active_id`, `created_at`, `updated_at`) VALUES
(1, 'Morning', 1, 1, 1, '2019-04-23 22:50:56', '2019-04-23 22:50:56'),
(2, 'Morning', 1, 3, 1, '2019-04-23 22:51:34', '2019-04-23 22:51:34'),
(3, 'Evening', 1, 3, 1, '2019-04-23 22:52:01', '2019-04-23 22:52:01'),
(4, 'Evening', 1, 5, 1, '2019-04-23 22:52:24', '2019-04-23 22:52:24'),
(5, 'Morning', 2, 2, 1, '2019-04-23 22:52:50', '2019-04-23 22:52:50'),
(6, 'Morning', 2, 4, 1, '2019-04-23 22:53:04', '2019-04-23 22:53:04'),
(7, 'Evening', 2, 6, 1, '2019-04-23 22:53:25', '2019-04-23 22:53:25'),
(8, 'Evening', 2, 4, 1, '2019-04-23 22:54:00', '2019-04-23 22:54:00'),
(9, 'Evening', 1, 1, 1, '2019-04-23 23:13:32', '2019-04-23 23:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendances`
--

CREATE TABLE `student_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `session_id` bigint(20) UNSIGNED DEFAULT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED DEFAULT NULL,
  `shift_id` bigint(20) UNSIGNED DEFAULT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_attendances`
--

INSERT INTO `student_attendances` (`id`, `date`, `session_id`, `class_id`, `section_id`, `shift_id`, `student_id`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2019-05-09', 1, 1, 1, 1, 5, '1', 1, '2019-05-09 08:14:35', '2019-05-09 08:14:35'),
(2, '2019-05-09', 1, 1, 1, 1, 6, '0', 1, '2019-05-09 08:14:35', '2019-05-09 08:14:35'),
(3, '2019-05-09', 1, 1, 1, 1, 7, '1', 1, '2019-05-09 08:14:35', '2019-05-09 08:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `class_id`, `active_id`, `created_at`, `updated_at`) VALUES
(1, 'Bangla', 1, 1, '2019-05-06 07:16:15', '2019-05-06 07:16:15'),
(2, 'Bangla', 2, 1, '2019-05-06 07:16:34', '2019-05-06 07:16:34'),
(3, 'English', 4, 1, '2019-05-06 07:17:03', '2019-05-06 07:17:03'),
(4, 'English', 2, 1, '2019-05-06 07:17:20', '2019-05-06 07:17:20'),
(5, 'Math', 5, 1, '2019-05-06 07:17:30', '2019-05-06 07:17:30'),
(6, 'Math', 2, 1, '2019-05-06 07:17:43', '2019-05-06 07:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `syllabi`
--

CREATE TABLE `syllabi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `syllabus_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacherinfos`
--

CREATE TABLE `teacherinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `gender_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blood_id` bigint(20) UNSIGNED DEFAULT NULL,
  `language_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nationaliti_id` bigint(20) UNSIGNED DEFAULT NULL,
  `religion_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active_id` bigint(20) UNSIGNED DEFAULT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_idcard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '5',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `role_id`, `slug`, `email`, `email_verified_at`, `deleted_at`, `password`, `remember_token`, `active_id`, `created_at`, `updated_at`) VALUES
(1, 'Zahidul', '1555342924_4818.jpg', 1, NULL, 'admin1234@gmail.com', NULL, NULL, '$2y$10$KhKsVQuOOqqZRixxX6L4VOr7JuKlcAuTGHV0zgtRi5Tu6FsKn4YMe', NULL, 1, NULL, NULL),
(38, 'TANZIR', '1555912095_1319.JPG', 3, 'tanzir', 'tanzirnur@gmail.com', NULL, NULL, '$2y$10$j6J2ISjLznQBmLlVKZrUkux4XyOaqfvpsRDEHl8cMLaocnXaMQs5q', NULL, NULL, '2019-04-21 23:48:16', '2019-04-21 23:48:16'),
(39, 'Zahidul', '1555912177_1505.jpg', 3, 'zahidul', 'user@gmail.com', NULL, NULL, '$2y$10$R196wP1KcW2R/Xl2oV.gku7UBUK/nI6.CP1yfWMqgTEfAku5gsFpm', NULL, NULL, '2019-04-21 23:49:38', '2019-04-21 23:49:38'),
(40, 'zahd', '1555985492_2801.jpg', 4, 'zahd', 'adm3234in1234@gmail.com', NULL, NULL, '$2y$10$6HLMSoSuyXoo1QR9.fZ7XOpZ6kqgt8mfFfhMSv/rlD9t5WRtiLT4i', NULL, NULL, '2019-04-22 20:11:33', '2019-04-22 20:11:33'),
(41, 'hakk', '1555989726_4287.jpg', 4, 'hakk', 'admin324231234@gmail.com', NULL, NULL, '$2y$10$EkyJPlbcHPRXee2BWnr0iuNYBZss9natuymCdoIu1rYZeSzZH5syq', NULL, NULL, '2019-04-22 21:22:07', '2019-04-22 21:22:07'),
(43, 'zahddd', '1556006070_2609.jpg', 4, 'zahddd', 'adminertert1234@gmail.com', NULL, NULL, '$2y$10$DlT9N2VMSHnThX4Bn1poU.FGxUza5ARvUpyDHbz.AoZK1xaG.eYtW', NULL, NULL, '2019-04-23 01:54:31', '2019-04-23 01:54:31'),
(44, 'kalami', '1556082894_3890.jpeg', 4, 'kalami', 'admin12efsda34@gmail.com', NULL, NULL, '$2y$10$EiagFH4acZ1Ui.QnlWZnGOTtWD0slXlst1zwZh0aad4AitxlD8WNO', NULL, NULL, '2019-04-23 23:14:55', '2019-04-23 23:14:55'),
(45, 'Hosneara', '1556085131_3207.jpg', 4, 'hosneara', 'admin123dff4@gmail.com', NULL, NULL, '$2y$10$AyRnApIUJH9BqIZAaiUhie50AcMzljn4kIC1QIF1/lscZxbtfN46m', NULL, NULL, '2019-04-23 23:52:12', '2019-04-23 23:52:12'),
(46, 'kalidlm', '1556085458_4616.png', 4, 'kalidlm', 'adretermin1234@gmail.com', NULL, NULL, '$2y$10$QDpO.SDG8DhRVhg1Mj2AbOkcyL1TNL.qNOIoTx0zSXGqtbEEvMOvC', NULL, NULL, '2019-04-23 23:57:38', '2019-04-23 23:57:38'),
(47, 'wer', '1556085532_3696.png', 4, 'wer', 'adminfdsf1234@gmail.com', NULL, NULL, '$2y$10$pRC79R1tbDTCJFs4ou9Fz..bQG/I/IvqKCREsr6hVyN5iBbzZqbMe', NULL, NULL, '2019-04-23 23:58:52', '2019-04-23 23:58:52'),
(48, 'ewrwqe', '1556085656_4060.jpg', 4, 'ewrwqe', 'admindsfsdf1234@gmail.com', NULL, NULL, '$2y$10$8AOdGXYvHBzOM7k9VNDqh.0cWBI9x3mIA0iJ7Bgu9TO6qpTMhh7G6', NULL, NULL, '2019-04-24 00:00:56', '2019-04-24 00:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `year_name`, `created_at`, `updated_at`) VALUES
(1, '2012', '2019-04-09 02:10:13', '2019-04-09 02:12:28'),
(2, '2013', '2019-04-09 02:12:39', '2019-04-09 02:12:39'),
(3, '2014', '2019-04-09 02:12:48', '2019-04-09 02:12:48'),
(4, '2015', '2019-04-09 02:12:59', '2019-04-09 02:12:59'),
(5, '2016', '2019-04-09 02:13:07', '2019-04-09 02:13:07'),
(6, '2017', '2019-04-09 02:13:14', '2019-04-09 02:13:14'),
(7, '2018', '2019-04-09 02:13:24', '2019-04-09 02:13:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academyinfos`
--
ALTER TABLE `academyinfos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academyinfos_student_id_foreign` (`student_id`),
  ADD KEY `academyinfos_user_id_foreign` (`user_id`),
  ADD KEY `academyinfos_session_id_foreign` (`session_id`),
  ADD KEY `academyinfos_section_id_foreign` (`section_id`),
  ADD KEY `academyinfos_class_id_foreign` (`class_id`),
  ADD KEY `academyinfos_shift_id_foreign` (`shift_id`);

--
-- Indexes for table `actives`
--
ALTER TABLE `actives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_students`
--
ALTER TABLE `add_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `add_students_user_id_foreign` (`user_id`),
  ADD KEY `add_students_gurdian_id_foreign` (`gurdian_id`),
  ADD KEY `add_students_language_id_foreign` (`language_id`),
  ADD KEY `add_students_religion_id_foreign` (`religion_id`),
  ADD KEY `add_students_blood_id_foreign` (`blood_id`),
  ADD KEY `add_students_gender_id_foreign` (`gender_id`),
  ADD KEY `add_students_nationality_id_foreign` (`nationality_id`),
  ADD KEY `add_students_active_id_foreign` (`active_id`);

--
-- Indexes for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blood_groups_active_id_foreign` (`active_id`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classrooms_session_id_foreign` (`session_id`),
  ADD KEY `classrooms_active_id_foreign` (`active_id`);

--
-- Indexes for table `classrutines`
--
ALTER TABLE `classrutines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classrutines_session_id_foreign` (`session_id`),
  ADD KEY `classrutines_class_id_foreign` (`class_id`),
  ADD KEY `classrutines_shift_id_foreign` (`shift_id`),
  ADD KEY `classrutines_subject_id_foreign` (`subject_id`),
  ADD KEY `classrutines_professor_id_foreign` (`professor_id`),
  ADD KEY `classrutines_day_id_foreign` (`day_id`),
  ADD KEY `classrutines_s_hour_id_foreign` (`s_hour_id`),
  ADD KEY `classrutines_s_minute_id_foreign` (`s_minute_id`),
  ADD KEY `classrutines_e_hour_id_foreign` (`e_hour_id`),
  ADD KEY `classrutines_e_minute_id_foreign` (`e_minute_id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_active_id_foreign` (`active_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_active_id_foreign` (`active_id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genders_active_id_foreign` (`active_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hours`
--
ALTER TABLE `hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minutes`
--
ALTER TABLE `minutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nationalities`
--
ALTER TABLE `nationalities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_exam_id_foreign` (`exam_id`),
  ADD KEY `results_subject_id_foreign` (`subject_id`),
  ADD KEY `results_session_id_foreign` (`session_id`),
  ADD KEY `results_class_id_foreign` (`class_id`),
  ADD KEY `results_section_id_foreign` (`section_id`),
  ADD KEY `results_shift_id_foreign` (`shift_id`),
  ADD KEY `results_student_id_foreign` (`student_id`),
  ADD KEY `results_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_session_id_foreign` (`session_id`),
  ADD KEY `sections_class_id_foreign` (`class_id`),
  ADD KEY `sections_shift_id_foreign` (`shift_id`),
  ADD KEY `sections_active_id_foreign` (`active_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_active_id_foreign` (`active_id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shifts_session_id_foreign` (`session_id`),
  ADD KEY `shifts_class_id_foreign` (`class_id`),
  ADD KEY `shifts_active_id_foreign` (`active_id`);

--
-- Indexes for table `student_attendances`
--
ALTER TABLE `student_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_attendances_session_id_foreign` (`session_id`),
  ADD KEY `student_attendances_class_id_foreign` (`class_id`),
  ADD KEY `student_attendances_section_id_foreign` (`section_id`),
  ADD KEY `student_attendances_shift_id_foreign` (`shift_id`),
  ADD KEY `student_attendances_student_id_foreign` (`student_id`),
  ADD KEY `student_attendances_user_id_foreign` (`user_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_class_id_foreign` (`class_id`),
  ADD KEY `subjects_active_id_foreign` (`active_id`);

--
-- Indexes for table `syllabi`
--
ALTER TABLE `syllabi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `syllabi_class_id_foreign` (`class_id`),
  ADD KEY `syllabi_active_id_foreign` (`active_id`);

--
-- Indexes for table `teacherinfos`
--
ALTER TABLE `teacherinfos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacherinfos_user_id_foreign` (`user_id`),
  ADD KEY `teacherinfos_gender_id_foreign` (`gender_id`),
  ADD KEY `teacherinfos_blood_id_foreign` (`blood_id`),
  ADD KEY `teacherinfos_language_id_foreign` (`language_id`),
  ADD KEY `teacherinfos_subject_id_foreign` (`subject_id`),
  ADD KEY `teacherinfos_nationaliti_id_foreign` (`nationaliti_id`),
  ADD KEY `teacherinfos_religion_id_foreign` (`religion_id`),
  ADD KEY `teacherinfos_active_id_foreign` (`active_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_active_id_foreign` (`active_id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academyinfos`
--
ALTER TABLE `academyinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `actives`
--
ALTER TABLE `actives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_students`
--
ALTER TABLE `add_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blood_groups`
--
ALTER TABLE `blood_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `classrutines`
--
ALTER TABLE `classrutines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hours`
--
ALTER TABLE `hours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `minutes`
--
ALTER TABLE `minutes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nationalities`
--
ALTER TABLE `nationalities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_attendances`
--
ALTER TABLE `student_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `syllabi`
--
ALTER TABLE `syllabi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacherinfos`
--
ALTER TABLE `teacherinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_students`
--
ALTER TABLE `add_students`
  ADD CONSTRAINT `add_students_active_id_foreign` FOREIGN KEY (`active_id`) REFERENCES `actives` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `add_students_blood_id_foreign` FOREIGN KEY (`blood_id`) REFERENCES `blood_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `add_students_gender_id_foreign` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `add_students_gurdian_id_foreign` FOREIGN KEY (`gurdian_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `add_students_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `add_students_nationality_id_foreign` FOREIGN KEY (`nationality_id`) REFERENCES `nationalities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `add_students_religion_id_foreign` FOREIGN KEY (`religion_id`) REFERENCES `religions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `add_students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `add_students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_attendances`
--
ALTER TABLE `student_attendances`
  ADD CONSTRAINT `student_attendances_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendances_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendances_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendances_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendances_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `add_students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendances_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
