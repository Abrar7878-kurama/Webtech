-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 06:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysql_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `religion` varchar(20) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `parmanent_address` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `dob`, `religion`, `present_address`, `parmanent_address`, `phone`, `email`, `website`, `username`, `password`) VALUES
(1, 'asdasdasd', 'asdasdasd', 'Male', '2021-08-12', 'other', 'asdas', 'sdasdas', '0561651611', 'abrar.nirjhor@gmail.com', 'asdasd.com', 'Abrar', '123456789'),
(2, 'asdasdasd', 'dfsdfsdf', 'Female', '2021-08-19', 'hindu', 'asdas', 'sdfsdfsdfsd', '05616516114565', 'nirjhor.abrar@gmail.com', 'qweqweqw.com', 'sdsa', 'sdasdas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
