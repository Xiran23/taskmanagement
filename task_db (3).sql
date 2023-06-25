-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 07:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(10) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` text NOT NULL,
  `due_date` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `task_priority` int(11) DEFAULT 1 CHECK (`task_priority` in (1,2,3))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `title`, `description`, `due_date`, `emp_id`, `task_priority`) VALUES
(19, 'low task', ' sdfasdfasdfasdf', 2023, 4, 3),
(20, 'MAKE A THIS THIS part2', ' hey this will be new statement ', 2023, 7, 2),
(21, 'medium ', ' do slowly', 2023, 8, 2),
(22, 'low proprity task', ' will this be done by today ?', 2023, 6, 1),
(23, 'MAKE A THIS THIS ', ' will be done ', 2023, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` tinyint(4) DEFAULT NULL CHECK (`role` in (1,2,3)),
  `password` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `role`, `password`, `phonenumber`) VALUES
(1, 'admin', 'admin', 'admin', '1234', 1, '1234', '1233'),
(3, 'testname', 'name ', 'testname', 'thapachiran88@gmail.com', 1, '12345678', '9813075098'),
(4, 'Chiran thapa ', 'Thapa', 'chiran ', 'thapachiran88@gmail.com', 1, '9841787511', '9813075098'),
(5, 'Chiran thapa ', 'Thapa', '04138260', 'thapachiran88@gmail.com', 1, '12345678', '9813075098'),
(6, 'Chiran thapa ', 'Thapa', '04138260', 'thapachiran88@gmail.com', 1, '12345678', '9813075098'),
(7, 'Chiran thapa ', 'Thapa', '04138260', 'thapachiran88@gmail.com', 1, '12345678', '9813075098'),
(8, 'tesy22', 'Thapa', '04138260', 'thapachiran88@gmail.com', 1, '12345678', '9813075098');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
