-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 07:52 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shantanu Ray', 'shantanuray86@gmail.com', NULL, '$2y$10$3lGjoyzbG9yD7D1IswSBkOhhbINRXOULz7mPKdVGthbRIHr265kF.', 'OXas4E7GaS9VDDLxigfygXRarxzrgj0aPwcz5gHPwoxM38YHac8mbLlEKsyX', '2020-04-25 02:15:09', '2020-04-25 02:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'PHP', '2020-04-25 02:17:49', '2020-06-10 09:02:00'),
(2, 'Node Js', '2020-04-25 02:17:57', '2020-06-10 09:02:14'),
(3, 'Angular', '2020-04-25 02:18:05', '2020-06-10 09:02:28'),
(4, 'HTML', '2020-04-25 02:18:14', '2020-06-10 09:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `class_managements`
--

CREATE TABLE `class_managements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Web Application', '2020-04-25 02:16:58', '2020-06-10 09:08:16'),
(2, 'Front End', '2020-04-25 02:17:09', '2020-06-10 09:08:33'),
(3, 'Back End', '2020-04-25 02:17:17', '2020-06-10 09:08:49'),
(4, 'Desktop Application', '2020-04-25 02:17:26', '2020-06-10 09:09:07');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(55, '2009_11_19_234542_create_classes_table', 1),
(56, '2014_10_12_000000_create_users_table', 1),
(57, '2014_10_12_100000_create_password_resets_table', 1),
(58, '2019_08_19_000000_create_failed_jobs_table', 1),
(59, '2020_04_12_131204_create_admins_table', 1),
(60, '2020_04_17_144901_create_departments_table', 1),
(61, '2020_04_19_124446_create_subjects_table', 1),
(62, '2020_04_22_053751_create_class_managements_table', 1),
(63, '2020_04_22_055138_create_teachers_table', 1),
(64, '2020_04_23_125514_create_teachersubjectrelations_table', 1),
(65, '2020_04_24_115751_create_teacherclassrelations_table', 1),
(66, '2020_12_26_125017_create_students_table', 1),
(67, '2020_06_11_081644_create_student_subjects_table', 2);

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classes_id` int(11) NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `phone_number`, `email`, `roll`, `reg_id`, `department_id`, `classes_id`, `father_name`, `mother_name`, `present_address`, `permanent_address`, `home_number`, `created_at`, `updated_at`) VALUES
(3, 'Triple S Kalyan', '9674861448', 'tripleSkalyan@gmail.com', NULL, '678789', '2', 3, 'sray2', 'sraym2', '2ND FL C BY 234 SURVEY PARK', '2ND FL C BY 234 SURVEY PARK', '786876876786', '2020-04-25 07:03:45', '2020-04-25 07:03:45'),
(4, 'George Higgins', '9674861440', 'georgehiggins@gmail.com', NULL, '8932', '3', 1, 'sray3', 'sraym3', '2ND FL C BY 234 SURVEY PARK', '2ND FL C BY 234 SURVEY PARK', '7868761276786', '2020-04-25 07:06:00', '2020-04-25 07:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_subjects`
--

CREATE TABLE `student_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_subjects`
--

INSERT INTO `student_subjects` (`id`, `subject`, `student_id`, `created_at`, `updated_at`) VALUES
(1, '1', 3, '2020-06-11 03:28:48', '2020-06-11 03:28:48'),
(2, '4', 3, '2020-06-11 03:50:41', '2020-06-11 03:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', '2020-04-25 02:18:49', '2020-06-10 09:44:39'),
(2, 'English', '2020-04-25 02:18:59', '2020-04-25 02:18:59'),
(3, 'Express JS', '2020-04-25 02:19:11', '2020-06-10 09:45:45'),
(4, 'CodeIgniter', '2020-04-25 02:19:20', '2020-06-10 09:46:02'),
(5, 'Wordpress', '2020-04-25 02:19:30', '2020-06-10 09:46:24'),
(6, 'TypeScript', '2020-04-25 02:19:40', '2020-06-10 09:46:44'),
(7, 'JavaScript', '2020-04-25 02:19:53', '2020-06-10 09:46:59');

-- --------------------------------------------------------

--
-- Table structure for table `teacherclassrelations`
--

CREATE TABLE `teacherclassrelations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classes_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacherclassrelations`
--

INSERT INTO `teacherclassrelations` (`id`, `classes_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 1, 6, '2020-04-25 02:31:58', '2020-04-25 02:31:58'),
(2, 2, 6, '2020-04-25 02:31:58', '2020-04-25 02:31:58'),
(3, 3, 6, '2020-04-25 02:31:58', '2020-04-25 02:31:58'),
(4, 3, 7, '2020-04-25 02:34:05', '2020-04-25 02:34:05'),
(5, 4, 7, '2020-04-25 02:34:05', '2020-04-25 02:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `phone_number`, `email`, `father_name`, `mother_name`, `present_address`, `permanent_address`, `home_number`, `created_at`, `updated_at`) VALUES
(6, 'Rupert Young', '9674861449', 'rcd.young@gmail.com', 'Gilbert Young', 'Rosemary Young', '2ND FL C BY 234 SURVEY PARK', '2ND FL C BY 234 SURVEY PARK', '786876876786', '2020-04-25 02:31:58', '2020-04-25 02:31:58'),
(7, 'Babu Lal', '9674861442', 'babu.lal@gmail.com', 'sray', 'sraym', '2ND FL C BY 234 SURVEY PARK', '2ND FL C BY 234 SURVEY PARK', '786876876786', '2020-04-25 02:34:04', '2020-04-25 02:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `teachersubjectrelations`
--

CREATE TABLE `teachersubjectrelations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachersubjectrelations`
--

INSERT INTO `teachersubjectrelations` (`id`, `teacher_id`, `subject_id`, `created_at`, `updated_at`) VALUES
(1, 6, 1, '2020-04-25 02:31:58', '2020-04-25 02:31:58'),
(2, 6, 2, '2020-04-25 02:31:58', '2020-04-25 02:31:58'),
(3, 6, 3, '2020-04-25 02:31:58', '2020-04-25 02:31:58'),
(4, 7, 1, '2020-04-25 02:34:05', '2020-04-25 02:34:05'),
(5, 7, 3, '2020-04-25 02:34:05', '2020-04-25 02:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('teacher','student','staff') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'staff',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `father_name`, `mother_name`, `present_address`, `phone_number`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rupert Young', 'Gilbert Young', 'Rosemary Young', '2ND FL C BY 234 SURVEY PARK', '9674861449', 'rcd.young@gmail.com', 'teacher', NULL, '$2y$10$wJhqsNmEiiJsh8UbiGjruu4OEaJvfxHwcRI.4SJnMlahYhRzL9kkK', NULL, '2020-04-25 02:31:58', '2020-04-25 02:31:58'),
(2, 'Babu Lal', 'sray', 'sraym', '2ND FL C BY 234 SURVEY PARK', '9674861442', 'babu.lal@gmail.com', 'teacher', NULL, '$2y$10$V06UoVcH9t2PZb7Z1tPhQ.MKeLlhvkuycD98mOSQLNVR5X0sGqj6q', NULL, '2020-04-25 02:34:05', '2020-04-25 02:34:05'),
(3, 'Triple S Kalyan', 'sray2', 'sraym2', '2ND FL C BY 234 SURVEY PARK', '9674861448', 'tripleSkalyan@gmail.com', 'student', NULL, '$2y$10$e98oGr2UFcyJr.qz2c69D.HBd59xAQXSfoGKP9m9.uZaNueAa9yJu', NULL, '2020-04-25 07:03:45', '2020-04-25 07:03:45'),
(4, 'George Higgins', 'sray3', 'sraym3', '2ND FL C BY 234 SURVEY PARK', '9674861440', 'georgehiggins@gmail.com', 'student', NULL, '$2y$10$v10Rdq6NM/Bg9Gu1C5Wrm.5xmoWWUtBl8gLo1.cpHZqtMDn0wWnl2', NULL, '2020-04-25 07:06:01', '2020-04-25 07:06:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_managements`
--
ALTER TABLE `class_managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_subjects`
--
ALTER TABLE `student_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherclassrelations`
--
ALTER TABLE `teacherclassrelations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

--
-- Indexes for table `teachersubjectrelations`
--
ALTER TABLE `teachersubjectrelations`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class_managements`
--
ALTER TABLE `class_managements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_subjects`
--
ALTER TABLE `student_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teacherclassrelations`
--
ALTER TABLE `teacherclassrelations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teachersubjectrelations`
--
ALTER TABLE `teachersubjectrelations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
