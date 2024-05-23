-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 09:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE `institution` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `physical_code` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`id`, `name`, `physical_code`, `email`, `phone`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'IPRC KIGALI', '001', 'iprckigali@gmail.com', '0783434232', 'admin', '2024-02-26 11:03:10', '2024-03-05 06:52:05'),
(2, 'IPRC TUMBA', '002', 'iprctumba@gmail.com', '0789986563', 'admin', '2024-02-26 11:03:10', '2024-03-05 06:52:05'),
(3, 'IPRC MUSANZE', '003', 'iprcmusanze@gmail.com', '0799767678', 'admin', '2024-02-26 11:06:19', '2024-02-26 11:06:19'),
(4, 'IPRC KARONGI', '004', 'iprckarongi@gmail.com', '0788884565', 'admin', '2024-02-26 11:06:19', '2024-02-26 11:06:19'),
(12, 'mount keny', '005', 'mountkenya@gmail.com', '0788820687', NULL, '2024-03-07 09:14:04', '2024-03-07 09:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `institution_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `institution_id`, `name`, `user_id`, `phone`, `email`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'gafeza', NULL, '0788824687', 'gafeza@gmail.com', 'gaga', '2024-03-06 14:14:27', '2024-03-06 14:14:27'),
(2, 2, 'betty', NULL, '078768980', 'betty@gmail.com', 'bet', '2024-03-06 19:33:51', '2024-03-06 19:33:51'),
(3, 12, 'adele', 20, '0788820687', 'adele@gmail.com', 'adele', '2024-03-11 19:41:35', '2024-03-14 09:33:09'),
(4, 2, 'jack', NULL, '0980-090980', 'jack@gmail.com', 'jack', '2024-03-24 08:21:14', '2024-03-24 08:21:14'),
(5, 1, 'lyza', NULL, '9867987907', 'lyza@gmail.com', 'lyza', '2024-03-24 10:53:47', '2024-03-24 10:53:47'),
(6, 1, 'jaja', NULL, '0780898780', 'jaja@gmail.com', 'jaja', '2024-03-24 10:55:03', '2024-03-24 10:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_course`
--

CREATE TABLE `lecturer_course` (
  `id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `lecturer_id` int(11) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecturer_course`
--

INSERT INTO `lecturer_course` (`id`, `course_id`, `lecturer_id`, `created_by`, `created_at`, `updated_at`) VALUES
(5, 5, 3, NULL, '2024-03-14 07:29:03', '2024-03-14 07:29:03'),
(6, 4, 4, NULL, '2024-03-24 08:22:27', '2024-03-24 08:22:27'),
(7, 8, 5, NULL, '2024-03-24 10:55:48', '2024-03-24 10:55:48'),
(8, 7, 6, NULL, '2024-03-24 10:55:56', '2024-03-24 10:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `institution_id` int(11) DEFAULT NULL,
  `course_code` varchar(255) DEFAULT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `institution_id`, `course_code`, `course_name`, `created_by`, `created_at`, `updated_at`) VALUES
(4, 4, 'tmng024', 'team management', NULL, '2024-03-06 23:28:15', '2024-03-06 23:28:15'),
(5, 1, 'kiny024', 'kinyarwanda', NULL, '2024-03-07 08:59:25', '2024-03-07 08:59:25'),
(6, 1, 'fr024', 'french', NULL, '2024-03-07 09:10:34', '2024-03-07 09:10:34'),
(7, 1, 'back end', 'php024', NULL, '2024-03-24 10:50:41', '2024-03-24 10:50:41'),
(8, 1, 'internet of things', 'IOT024', NULL, '2024-03-24 10:51:19', '2024-03-24 10:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(3, 'admin'),
(2, 'lecturer'),
(1, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `institution_id` int(11) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `reg_no`, `name`, `institution_id`, `created_by`, `created_at`, `updated_at`) VALUES
(5, '21rp09778', 'jp', 4, 'rayge', '2024-03-06 14:00:15', '2024-04-09 09:06:11'),
(6, '21rp54454', NULL, 12, 'deni', '2024-03-11 19:50:01', '2024-04-17 09:16:46'),
(7, '21rp09867', 'pauline', 3, 'popo', '2024-03-11 20:22:28', '2024-03-11 20:22:28'),
(8, '21rp09898', 'obin', 4, 'roy', '2024-03-11 20:23:17', '2024-03-11 20:23:17'),
(13, '21rp45645', 'meya', NULL, NULL, '2024-04-09 09:05:04', '2024-04-09 09:05:04'),
(15, '21rp00998', 'fofo', 3, 'self', '2024-04-17 09:24:58', '2024-05-07 07:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `attendance` varchar(255) DEFAULT NULL,
  `lecturer_id` int(11) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`id`, `course_id`, `student_id`, `date`, `attendance`, `lecturer_id`, `created_by`, `created_at`, `updated_at`) VALUES
(35, 8, 6, '0000-00-00', 'present', NULL, '', '2024-03-24 21:07:02', '2024-03-24 21:07:02'),
(36, 8, 7, '0000-00-00', 'absent', NULL, '', '2024-03-24 21:07:02', '2024-03-24 21:07:02'),
(37, 5, 5, '2024-03-27', 'present', NULL, '', '2024-03-26 07:58:50', '2024-03-26 07:58:50'),
(38, 5, 7, '2024-03-27', 'absent', NULL, '', '2024-03-26 07:58:50', '2024-03-26 07:58:50'),
(39, 5, 5, '2024-03-27', 'present', NULL, '', '2024-03-26 07:59:02', '2024-03-26 07:59:02'),
(40, 5, 7, '2024-03-27', 'absent', NULL, '', '2024-03-26 07:59:02', '2024-03-26 07:59:02'),
(42, 5, 5, '2024-03-26', 'present', NULL, '', '2024-03-26 08:46:49', '2024-03-26 08:46:49'),
(43, 5, 7, '2024-03-26', 'present', NULL, '', '2024-03-26 08:46:49', '2024-03-26 08:46:49'),
(44, 5, 5, '2024-03-29', 'absent', 3, 'adele', '2024-03-26 09:01:51', '2024-03-26 09:01:51'),
(45, 5, 7, '2024-03-29', 'absent', 3, 'adele', '2024-03-26 09:01:51', '2024-03-26 09:01:51'),
(46, 5, 5, '2024-04-02', 'present', 3, 'adele', '2024-03-26 09:07:24', '2024-03-26 09:07:24'),
(47, 5, 7, '2024-04-02', 'present', 3, 'adele', '2024-03-26 09:07:24', '2024-03-26 09:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`id`, `student_id`, `course_id`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 5, 6, NULL, '2024-03-11 11:56:18', '2024-03-11 11:56:18'),
(3, 6, 6, NULL, '2024-03-11 20:20:17', '2024-03-11 20:20:17'),
(4, 7, 6, NULL, '2024-03-11 20:23:35', '2024-03-11 20:23:35'),
(5, 8, 6, NULL, '2024-03-11 20:23:41', '2024-03-11 20:23:41'),
(6, 5, 5, NULL, '2024-03-14 07:29:27', '2024-03-14 07:29:27'),
(7, 7, 5, NULL, '2024-03-14 07:29:50', '2024-03-14 07:29:50'),
(8, 5, 4, NULL, '2024-03-24 08:22:45', '2024-03-24 08:22:45'),
(9, 5, 4, NULL, '2024-03-24 10:49:38', '2024-03-24 10:49:38'),
(10, 6, 8, NULL, '2024-03-24 10:56:45', '2024-03-24 10:56:45'),
(11, 7, 8, NULL, '2024-03-24 10:57:05', '2024-03-24 10:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `user_name`, `password`, `created_by`, `created_at`, `updated_at`) VALUES
(18, 3, 'admin', '$2y$10$NA7QjYoEql9Xz9DGNs.nMeSoS6jCDRDmTgw3qS2UEe9M/O1PXIuoS', 'admin', '2024-03-07 08:06:59', '2024-03-12 07:26:01'),
(20, 2, 'adele', '$2y$10$/2Vntihiq1Y3x26TmiYxvu5e4OriQqfX/8ksfC6mU2MnjXqvTLTca', NULL, '2024-03-11 19:41:35', '2024-03-11 19:41:35'),
(21, 1, 'deni', '$2y$10$swOU/llyHl92ucKU/SgvgO5q82rrMlgUhZm8YEhkkUs25Au4oet86', NULL, '2024-03-11 19:50:01', '2024-03-11 19:50:01'),
(22, 1, 'popo', '$2y$10$AM6rUgS6vip0RZxRJwbkIOD6tUKuhUYlxOU6PcbIKs604Itqimckq', NULL, '2024-03-11 20:22:28', '2024-03-11 20:22:28'),
(23, 1, 'roy', '$2a$12$aftI1FWKDteF8W7UhQ3YeuU6GolY9zSCb4HtKtmvt2MDt2.QYgRSe', NULL, '2024-03-11 20:23:17', '2024-04-17 09:05:03'),
(24, 1, 'sasha', '$2y$10$e25dke70KMo2nI6tpltEqecny5ln4VJ0Lp3Ta4U0SxhOtEvscSj96', NULL, '2024-03-11 20:59:44', '2024-03-11 20:59:44'),
(25, 2, 'jack', '$2y$10$KlG.9rzy1l8xiTKT3HpU5eZhRAPR2Evnc.EfDUKuXC3WIFzWN0Oh2', NULL, '2024-03-24 08:21:14', '2024-03-24 08:21:14'),
(26, 2, 'lyza', '$2y$10$jCVDOatqOn/A8OuMJPJ9ruaI4hbriTLOrwGj6MkgKXmbF2qyCvcXC', NULL, '2024-03-24 10:53:47', '2024-03-24 10:53:47'),
(27, 2, 'jaja', '$2y$10$ZHptxbAIykrgZIX8VwC0iOQV3S0lNTUSNmAfQmgUePF7e2AnySsAi', NULL, '2024-03-24 10:55:03', '2024-03-24 10:55:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email_phone` (`email`,`phone`),
  ADD KEY `institution_id` (`institution_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `lecturer_course`
--
ALTER TABLE `lecturer_course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_module_id_lecturer_id` (`course_id`,`lecturer_id`),
  ADD KEY `lecturer_id` (`lecturer_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `institution_id` (`institution_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_role_name` (`role_name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_reg_no` (`reg_no`),
  ADD KEY `institution_id` (`institution_id`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `lecturer_id` (`lecturer_id`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `institution`
--
ALTER TABLE `institution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lecturer_course`
--
ALTER TABLE `lecturer_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `student_course`
--
ALTER TABLE `student_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD CONSTRAINT `lecturers_ibfk_1` FOREIGN KEY (`institution_id`) REFERENCES `institution` (`id`),
  ADD CONSTRAINT `lecturers_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `lecturer_course`
--
ALTER TABLE `lecturer_course`
  ADD CONSTRAINT `lecturer_course_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `modules` (`id`),
  ADD CONSTRAINT `lecturer_course_ibfk_2` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`id`);

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_ibfk_1` FOREIGN KEY (`institution_id`) REFERENCES `institution` (`id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`institution_id`) REFERENCES `institution` (`id`);

--
-- Constraints for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD CONSTRAINT `student_attendance_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `modules` (`id`),
  ADD CONSTRAINT `student_attendance_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `student_attendance_ibfk_3` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`id`);

--
-- Constraints for table `student_course`
--
ALTER TABLE `student_course`
  ADD CONSTRAINT `student_course_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `student_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `modules` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
