-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Dec 18, 2022 at 01:59 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playup`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_book` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `name_book` varchar(255) NOT NULL,
  `phone_book` varchar(20) NOT NULL,
  `address_book` varchar(20) NOT NULL,
  `service_book` varchar(255) NOT NULL,
  `date_book` varchar(255) NOT NULL,
  `duration_book` int(20) NOT NULL,
  `status_book` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_book`, `id_user`, `name_book`, `phone_book`, `address_book`, `service_book`, `date_book`, `duration_book`, `status_book`) VALUES
('101516', '4516', 'Budi Makmur', '07283927429', 'Bali', 'Sony Playstation 4', '2022-12-24', 5, 'Completed'),
('183846', '7421', 'Insan Bulan', '0812384912', 'Medan', 'Sony Playstation 5', '2023-01-01', 2, 'Processed'),
('254589', '5869', 'Abidan Mulan', '081294719382', 'Bogor', 'Sony Playstation Portable', '2022-12-24', 1, 'Pending'),
('272455', '1538', 'Titi Pulan', '08638189223', 'bandung', 'Sony Playstation 5', '2022-12-18', 5, 'Cancelled'),
('646672', '5869', 'Andhika Ihsan Kamil', '08158492832', 'Bogor', 'Sony Playstation 4', '2022-12-20', 3, 'Processed'),
('680356', '4516', 'Andhika Ihsan Kamil', '08123842932', 'Bandung', 'Sony Playstation 5', '2022-12-19', 2, 'Cancelled'),
('746492', '7421', 'Marai Nuran', '081293784129', 'Singapore', 'Sony Playstation 4', '2022-12-17', 30, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  `role_user` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `name_user`, `email_user`, `pass_user`, `role_user`) VALUES
('1', 'admin', 'admin', 'admin', 'admin', 'admin'),
('1538', 'b', 'b', 'b', 'b', 'user'),
('4516', 'andhikaihs', 'Andhika Ihsan Kamil', 'andhikaihs@gmail.com', '123456', 'user'),
('5869', 'andhika', 'Andhika Ihsan Kamil', 'andhika.aik@gmail.com', '12345678', 'user'),
('7421', 'a', 'a', 'a', 'a', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
