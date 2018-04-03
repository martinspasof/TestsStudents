-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time:  3 апр 2018 в 12:53
-- Версия на сървъра: 10.1.30-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Структура на таблица `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `StudentNumber` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `students`
--

INSERT INTO `students` (`id`, `FirstName`, `LastName`, `StudentNumber`, `created_at`, `updated_at`) VALUES
(29, 'Martin', 'Spasov', '1331', '2018-04-03 10:02:57', '2018-04-03 10:02:57'),
(31, 'test test', 'test', '1332', '2018-04-03 10:04:07', '2018-04-03 10:04:07'),
(32, 'test test2', 'test2', '1333', '2018-04-03 10:12:11', '2018-04-03 10:12:11');

-- --------------------------------------------------------

--
-- Структура на таблица `student_test_registrations`
--

CREATE TABLE `student_test_registrations` (
  `id` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `TestId` int(11) NOT NULL,
  `TestRegDateTime` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `student_test_registrations`
--

INSERT INTO `student_test_registrations` (`id`, `StudentId`, `TestId`, `TestRegDateTime`, `created_at`, `updated_at`) VALUES
(3, 29, 1, '2018-04-03 10:05:23', '2018-04-03 10:05:23', '2018-04-03 10:05:23'),
(4, 31, 2, '2018-04-03 10:05:45', '2018-04-03 10:05:45', '2018-04-03 10:05:45');

-- --------------------------------------------------------

--
-- Структура на таблица `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `TestDateTime` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `ClassRoom` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `tests`
--

INSERT INTO `tests` (`id`, `TestDateTime`, `Course`, `ClassRoom`) VALUES
(1, '2018-04-02 18:37:17', 'Laravel', 'Room1'),
(2, '2018-04-03 18:37:17', 'Symfony', 'Room2'),
(3, '2018-04-05 18:37:17', 'Java Foundation', 'Room3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_test_registrations`
--
ALTER TABLE `student_test_registrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_student_id` (`StudentId`),
  ADD KEY `fk_test_id` (`TestId`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `student_test_registrations`
--
ALTER TABLE `student_test_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `student_test_registrations`
--
ALTER TABLE `student_test_registrations`
  ADD CONSTRAINT `fk_student_id` FOREIGN KEY (`StudentId`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `fk_test_id` FOREIGN KEY (`TestId`) REFERENCES `tests` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
