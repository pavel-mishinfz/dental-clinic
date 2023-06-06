-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 31 2023 г., 10:09
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dental_clinic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `services` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `departments`
--

INSERT INTO `departments` (`id`, `name`, `image`, `icon`, `description`, `services`, `created_at`, `updated_at`) VALUES
(1, 'Хирургия', 'surgery.png', 'icon-1.svg', 'Удаление зуба является одной из самых распространенных операций в стоматологической практике.', 'Удаление зубов любой сложности', '2023-04-16 17:40:23', '2023-05-24 11:08:45'),
(2, 'Терапия', 'therapy.png', 'icon-2.svg', 'Лечение напрямую зависит от стадии заболевания. Мы подбираем наиболее эффективные методы диагностики и терапии.', 'Кариозных и некариозных поражений, Пульпитов и периодонтитов, Художественная реставрация зубов', '2023-04-16 17:40:23', '2023-04-16 17:40:23'),
(3, 'Ортопедия', 'orthopedics.png', 'icon-3.svg', 'Помогает решить проблемы, связанные с аномалиями, приобретенными дефектами, повреждениями и деформациями органов жевательно-речевого аппарата.', 'Коронки и мосты керамические, Коронки и мосты циркониевые, Съёмное протезирование (протезы, бюгеля, мягкие протезы), Установка виниров', '2023-04-16 17:40:23', '2023-05-17 12:00:51'),
(4, 'Имплантация', 'Implantation.png', 'icon-4.svg', 'Это операция по установке в челюстную ткань специального стоматологического штифта, который будет играть роль корня.', 'Установка имплантов OSSTEM implant, Наращивание кости (все виды аугментации) OSSTEM implant, Имплантация зубов по системе All ON4-All ON6', '2023-04-16 17:40:23', '2023-04-16 17:40:23'),
(5, 'Ортодонтия', 'orthodontics.png', 'icon-5.svg', 'Поможет сделать вашу улыбку красивой и исправит прикус. Исправляет аномалии челюстей, положения челюстей в черепе, формы, величины, соотношения зубных дуг.', 'Установка брекет систем, Цифровое ортодонтическое лечение прозрачными каппами, Полная диагностика и лечение взрослых и детей', '2023-04-16 17:40:23', '2023-04-16 17:40:23'),
(6, 'Отбеливание зубов', 'bleaching.png', 'icon-6.svg', 'Стоматологическая процедура изменения оттенка зубной эмали. Отбеливание зубов относится к области косметической стоматологии.', ' Система Opalescence Boost', '2023-04-16 17:40:23', '2023-04-16 17:40:23');

-- --------------------------------------------------------

--
-- Структура таблицы `department_doctors`
--

CREATE TABLE `department_doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `department_doctors`
--

INSERT INTO `department_doctors` (`id`, `department_id`, `doctor_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 5, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 6, NULL, NULL),
(5, 2, 5, NULL, NULL),
(6, 2, 4, NULL, NULL),
(7, 2, 3, NULL, NULL),
(8, 2, 6, NULL, NULL),
(9, 3, 1, NULL, NULL),
(10, 3, 5, NULL, NULL),
(11, 3, 3, NULL, NULL),
(12, 4, 2, NULL, NULL),
(13, 5, 4, NULL, NULL),
(14, 6, 3, NULL, NULL),
(15, 6, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orientation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` int(11) NOT NULL,
  `certificates` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `surname`, `lastname`, `image`, `icon`, `position`, `orientation`, `experience`, `certificates`, `created_at`, `updated_at`) VALUES
(1, 'Шамсулло', 'Саидов', 'Нарзуллоевич', 'person-1.png', 'face-icon-1.svg', 'Врач-стоматолог', 'съемные, несъемные, безметалловые конструкции, цирконий, протезирование на имплантах, драгметаллах, вкладки, виниры, гнатология и хирургия', 25, 'стоматология ортопедическая; стоматология хирургическая', '2023-04-16 17:44:30', '2023-04-16 17:44:30'),
(2, 'Дмитрий', 'Анисимов', 'Владимирович', 'person-2.png', 'face-icon-2.svg', 'Врач-стоматолог', 'имплантация, пародонтология, удаление зубов любой сложности', 5, 'стоматология общей практики; стоматология хирургическая', '2023-04-16 17:44:30', '2023-04-16 17:44:30'),
(3, 'Давид', 'Варданян', 'Араевич', 'person-3.png', 'face-icon-3.svg', 'Врач-стоматолог', 'протезирование зубов, хирургическое удаление, терапевтическое лечение и отбеливание', 5, 'стоматология общей практики; стоматология хирургическая', '2023-04-16 17:44:30', '2023-04-16 17:44:30'),
(4, 'Анастасия', 'Соха', 'Юрьевна', 'person-4.png', 'face-icon-4.svg', 'Врач-стоматолог', 'терапевтическое лечение, эстетическая реставрация зубов и исправление прикуса любой сложности', 10, 'стоматология общей практики; стоматология терапевтическая; стоматология ортодонтическая', '2023-04-16 17:44:30', '2023-04-16 17:44:30'),
(5, 'Оксана', 'Иванова', 'Григорьевна', 'person-5.png', 'face-icon-5.svg', 'Врач-стоматолог', 'терапевтическое лечение, все виды протезирования, хирургическое удаление зубов', 20, 'стоматология общей практики; стоматология ортопедическая', '2023-04-16 17:44:30', '2023-04-16 17:44:30'),
(6, 'Елена', 'Синельщикова', 'Дмитриевна', 'person-6.png', 'face-icon-6.svg', 'Врач-стоматолог', 'терапевтическое лечение, эстетическая реставрация, хирургическое удаление зубов , профессиональная гигиена и отбеливание', 5, 'стоматология общей практики; стоматология хирургическая', '2023-04-16 17:44:30', '2023-04-16 17:44:30');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `form_patients`
--

CREATE TABLE `form_patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `form_patients`
--

INSERT INTO `form_patients` (`id`, `patient_id`, `doctor_id`, `created_at`, `updated_at`) VALUES
(1, 62, 1, '2023-05-10 15:26:08', '2023-05-10 15:26:08'),
(2, 63, 2, '2023-05-10 20:44:22', '2023-05-10 20:44:22'),
(3, 63, 4, '2023-05-10 20:44:40', '2023-05-10 20:44:40');

-- --------------------------------------------------------

--
-- Структура таблицы `licenses`
--

CREATE TABLE `licenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `licenses`
--

INSERT INTO `licenses` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'img-license-1.png', NULL, NULL),
(2, 'img-license-2.png', NULL, NULL),
(3, 'img-license-3.png', NULL, NULL),
(4, 'img-license-4.png', NULL, NULL),
(5, 'img-license-1.png', NULL, NULL),
(6, 'img-license-2.png', NULL, NULL),
(7, 'img-license-3.png', NULL, NULL),
(8, 'img-license-4.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_13_161424_create_departments_table', 1),
(6, '2023_04_13_162151_create_doctors_table', 1),
(7, '2023_04_13_164617_create_patients_table', 1),
(8, '2023_04_13_165316_create_form_patients_table', 1),
(9, '2023_04_16_040516_create_department_doctors_table', 1),
(10, '2023_04_20_183242_rename_small_image_to_doctors_table', 2),
(11, '2023_04_20_192530_rename_small_image_to_departments_table', 3),
(12, '2023_04_21_080007_create_licenses_table', 4),
(13, '2023_04_22_200655_delete_phone_to_patients_table', 5),
(14, '2023_04_22_201247_add_column_phone_to_patients_table', 6),
(15, '2023_04_25_103736_add_columns_to_patients_table', 7),
(16, '2023_05_13_192904_create_reviews_table', 8),
(17, '2023_05_14_174056_delete_added_at_to_reviews_table', 9),
(18, '2023_05_26_164046_add_column_role_to_users_table', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `patients`
--

INSERT INTO `patients` (`id`, `name`, `surname`, `lastname`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Павел', '', '', '', '2023-04-22 16:53:58', '2023-04-22 16:53:58'),
(2, 'Павел', '', '', '+7(953)029-42-44', '2023-04-22 17:14:06', '2023-04-22 17:14:06'),
(3, 'Павел', '', '', '+7(953)029-42-44', '2023-04-22 17:16:29', '2023-04-22 17:16:29'),
(4, 'Полина', '', '', '+7(927)183-27-45', '2023-04-22 17:17:16', '2023-04-22 17:17:16'),
(5, 'Владимир', '', '', '+7(123)456-67-89', '2023-04-22 17:20:11', '2023-04-22 17:20:11'),
(6, 'Новый пользователь', '', '', '+7(345)345-33-21', '2023-04-22 17:36:22', '2023-04-22 17:36:22'),
(7, 'User', '', '', '+7(123)142-42-32', '2023-04-22 17:37:45', '2023-04-22 17:37:45'),
(8, 'Павел', '', '', '+7(795)302-94-24', '2023-04-22 17:47:11', '2023-04-22 17:47:11'),
(9, 'User', '', '', '+7(989)349-34-94', '2023-04-22 17:48:28', '2023-04-22 17:48:28'),
(10, '123', '', '', '+7(953)029-42-44', '2023-04-22 17:49:45', '2023-04-22 17:49:45'),
(11, '242', '', '', '+7(953)029-42-44', '2023-04-22 17:52:13', '2023-04-22 17:52:13'),
(12, '123', '', '', '+7(953)029-42-44', '2023-04-22 17:53:27', '2023-04-22 17:53:27'),
(13, '123', '', '', '+7(953)029-42-44', '2023-04-24 14:11:13', '2023-04-24 14:11:13'),
(14, '123', '', '', '+7(795)302-94-24', '2023-04-24 14:13:53', '2023-04-24 14:13:53'),
(15, '124', '', '', '+7(795)302-94-24', '2023-04-24 14:15:24', '2023-04-24 14:15:24'),
(16, '324', '', '', '+7(953)029-42-44', '2023-04-24 14:15:57', '2023-04-24 14:15:57'),
(17, '324', '', '', '+7(953)029-42-44', '2023-04-24 14:16:18', '2023-04-24 14:16:18'),
(18, '24324', '', '', '+7(953)029-42-44', '2023-04-24 14:18:23', '2023-04-24 14:18:23'),
(19, '423', '', '', '+7(953)029-42-44', '2023-04-24 14:19:08', '2023-04-24 14:19:08'),
(20, '423', '', '', '+7(953)029-42-44', '2023-04-24 14:19:20', '2023-04-24 14:19:20'),
(21, '134', '', '', '+7(953)029-42-44', '2023-04-24 14:21:05', '2023-04-24 14:21:05'),
(22, '123', '', '', '+7(953)029-42-44', '2023-04-24 14:25:59', '2023-04-24 14:25:59'),
(23, '123', '', '', '+7(953)029-42-44', '2023-04-24 14:26:06', '2023-04-24 14:26:06'),
(24, '123', '', '', '+7(953)029-42-44', '2023-04-24 14:27:04', '2023-04-24 14:27:04'),
(25, '123', '', '', '+7(953)029-42-44', '2023-04-24 14:29:28', '2023-04-24 14:29:28'),
(26, '123', '', '', '+7(953)029-42-44', '2023-04-24 14:29:33', '2023-04-24 14:29:33'),
(27, 'wer', '', '', '+7(953)029-42-44', '2023-04-25 06:40:33', '2023-04-25 06:40:33'),
(28, 'wer', '', '', '+7(953)029-42-44', '2023-04-25 06:40:46', '2023-04-25 06:40:46'),
(29, 'wer', '', '', '+7(953)029-42-44', '2023-04-25 06:40:59', '2023-04-25 06:40:59'),
(30, 'ssf', '', '', '+7(953)029-42-44', '2023-04-25 06:43:22', '2023-04-25 06:43:22'),
(31, 'ssf', '', '', '+7(953)029-42-44', '2023-04-25 06:43:28', '2023-04-25 06:43:28'),
(32, 'ssf', '', '', '+7(953)029-42-44', '2023-04-25 06:44:03', '2023-04-25 06:44:03'),
(33, 'ssf', '', '', '+7(953)029-42-44', '2023-04-25 06:44:42', '2023-04-25 06:44:42'),
(34, 'ssf', '', '', '+7(953)029-42-44', '2023-04-25 06:45:12', '2023-04-25 06:45:12'),
(35, 'ssf', '', '', '+7(953)029-42-44', '2023-04-25 06:47:04', '2023-04-25 06:47:04'),
(36, 'ssf', '', '', '+7(953)029-42-44', '2023-04-25 06:47:13', '2023-04-25 06:47:13'),
(37, 'Павел', 'Мишин', 'Александрович', '+7(953)029-42-44', '2023-04-25 07:42:46', '2023-05-14 20:25:05'),
(38, 'Мишин', 'Павел', 'Александрович', '+7(953)029-42-44', '2023-04-25 13:39:51', '2023-04-25 13:39:51'),
(39, 'Павел', 'Мишин', 'Александрович', '+7(953)029-42-44', '2023-04-25 15:18:31', '2023-04-25 15:18:31'),
(40, 'fsdas', 'asdfasdf', 'sdfasdf', '+7(953)029-42-44', '2023-04-25 15:42:22', '2023-04-25 15:42:22'),
(41, 'xcxv', 'xvwerw', 'qryutuy', '+7(453)434-53-45', '2023-04-25 15:50:09', '2023-04-25 15:50:09'),
(42, '1111', '111', '11111', '+7(111)111-11-11', '2023-04-25 15:50:54', '2023-04-25 15:50:54'),
(43, '123', '1231', '324', '+7(234)234-23-42', '2023-04-25 15:52:04', '2023-04-25 15:52:04'),
(44, '123', '1231', '324', '+7(234)234-23-42', '2023-04-25 15:52:14', '2023-04-25 15:52:14'),
(45, '1231', 'rwerwer', 'ssgsfg', '+7(242)342-34-23', '2023-05-05 09:52:26', '2023-05-05 09:52:26'),
(46, '123', 'wrtw', 'twerwre', '+7(425)453-45-35', '2023-05-05 10:16:32', '2023-05-05 10:16:32'),
(47, 'ssf', 'sdfds', 'sdsdfs', '+7(324)242-42-34', '2023-05-05 10:20:51', '2023-05-05 10:20:51'),
(48, '123', 'erwrre', 'wrwerwer', '+7(234)234-23-42', '2023-05-05 10:21:36', '2023-05-05 10:21:36'),
(49, 'eqweq', 'qweqqwe', 'qweqwe', '+7(132)312-31-23', '2023-05-05 10:25:19', '2023-05-05 10:25:19'),
(50, 'wreer', 'werwerw', 'rwerwe', '+7(123)123-12-12', '2023-05-05 10:26:15', '2023-05-05 10:26:15'),
(51, 'fdsffd', 'sdfsdfs', 'sdfasf', '+7(123)123-12-31', '2023-05-05 10:28:08', '2023-05-05 10:28:08'),
(52, 'afsdf', 'sdfasdf', 'dsfsdfsdf', '+7(123)123-12-31', '2023-05-05 10:30:47', '2023-05-05 10:30:47'),
(53, '13245', '23456', '3456', '+7(123)457-62-23', '2023-05-05 10:31:32', '2023-05-05 10:31:32'),
(54, 'sfsdf', 'sdfsdfsd', 'sdfsdfsdf', '+7(134)234-24-23', '2023-05-10 15:13:24', '2023-05-10 15:13:24'),
(55, 'werwe', 'werwer', 'werwerw', '+7(132)423-42-34', '2023-05-10 15:14:44', '2023-05-10 15:14:44'),
(56, 'sdffd', 'sdfsdfs', 'sdfsdfsdf', '+7(234)524-23-42', '2023-05-10 15:15:39', '2023-05-10 15:15:39'),
(57, '111', '1111', '111', '+7(111)111-11-11', '2023-05-10 15:17:18', '2023-05-10 15:17:18'),
(58, '111', '111', '111', '+7(111)111-11-11', '2023-05-10 15:20:10', '2023-05-10 15:20:10'),
(59, '123', '12312', '12312', '+7(123)123-12-31', '2023-05-10 15:21:33', '2023-05-10 15:21:33'),
(60, 'sdf', 'asdfas', 'a', '+7(123)124-23-23', '2023-05-10 15:22:39', '2023-05-10 15:22:39'),
(61, 'aads', 'add', 'assad', '+7(123)121-23-13', '2023-05-10 15:23:14', '2023-05-10 15:23:14'),
(62, 'Павел', 'Мишин', 'Александрович', '+7(953)029-42-44', '2023-05-10 15:26:08', '2023-05-10 15:26:08'),
(63, 'Павел', 'Павел', 'Павел', '+7(999)999-99-99', '2023-05-10 17:19:32', '2023-05-10 20:44:40'),
(64, 'Павел', 'Павел', 'Павел', '+7(953)029-42-44', '2023-05-10 17:21:07', '2023-05-10 17:21:07'),
(65, 'Павел', 'Павел', 'Павел', '+7(121)231-23-12', '2023-05-10 17:23:03', '2023-05-10 17:23:03'),
(66, '123', '123123', '123123', '+7(111)111-11-12', '2023-05-10 20:40:59', '2023-05-10 20:40:58'),
(67, '132', '123', '11', '+7(111)123-12-42', '2023-05-10 20:41:09', '2023-05-10 20:41:08'),
(68, 'adsf', 'dfgh', 'dfgh', '+7(345)678-97-65', '2023-05-14 20:34:31', '2023-05-14 20:34:31'),
(69, '3456', '4567', '456', '+7(345)678-76-54', '2023-05-14 20:36:37', '2023-05-14 20:36:37'),
(70, 'ads', 'adfsf', 'sdffsad', '+7(314)252-32-34', '2023-05-14 21:14:17', '2023-05-14 21:14:17');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `surname`, `review`, `img`, `created_at`, `updated_at`) VALUES
(18, 'Павел', 'Мишин', 'Респект разработчикам!', '1684791796.png', '2023-05-22 21:43:27', '2023-05-22 21:43:27'),
(19, 'Полина', 'Мишина', 'Еще один новый отзыв!', '1684791852.png', '2023-05-22 21:44:17', '2023-05-22 21:44:17'),
(20, 'Pavel', 'Mishin', 'New review!', '1684866299.png', '2023-05-23 18:25:11', '2023-05-23 18:25:11'),
(22, 'Павел', 'Мишин', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores corporis cupiditate dicta dolorem ducimus eligendi error, illo illum impedit ipsum, laudantium magni natus nesciunt nulla omnis quasi quibusdam, quo repellendus tempore veritatis! Ab esse ex explicabo laborum, laudantium magni maxime nesciunt quod sequi vel. Animi corporis delectus dicta dignissimos distinctio doloremque doloribus eos esse id ipsam minus molestiae, mollitia pariatur perspiciatis provident quidem reiciendis vel! Amet animi culpa distinctio eius eos ipsum libero natus nulla, praesentium quas repellat repellendus temporibus unde vel, voluptatibus. Ad, commodi deserunt dolore ducimus earum enim fuga fugit omnis perferendis placeat quasi quo saepe voluptatem voluptatum!', '1684917536.png', '2023-05-24 08:42:56', '2023-05-24 08:42:56');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pavel', 'pavel.mishinfz@gmail.com', 'admin', NULL, '$2y$10$.WdW29kMQjCcZtSIqZzC2OIuh4601ubc94tl11Yp1.mmbNvdDs5U6', NULL, '2023-05-26 12:41:58', '2023-05-26 12:41:58');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_name_unique` (`name`);

--
-- Индексы таблицы `department_doctors`
--
ALTER TABLE `department_doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_doctor_department_idx` (`department_id`),
  ADD KEY `department_doctor_doctor_idx` (`doctor_id`);

--
-- Индексы таблицы `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `form_patients`
--
ALTER TABLE `form_patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_patient_patient_idx` (`patient_id`),
  ADD KEY `form_patient_doctor_idx` (`doctor_id`);

--
-- Индексы таблицы `licenses`
--
ALTER TABLE `licenses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `department_doctors`
--
ALTER TABLE `department_doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `form_patients`
--
ALTER TABLE `form_patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `licenses`
--
ALTER TABLE `licenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `department_doctors`
--
ALTER TABLE `department_doctors`
  ADD CONSTRAINT `department_doctor_department_fk` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `department_doctor_doctor_fk` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Ограничения внешнего ключа таблицы `form_patients`
--
ALTER TABLE `form_patients`
  ADD CONSTRAINT `form_patient_doctor_fk` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `form_patient_patient_fk` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
