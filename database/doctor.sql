-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 05:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_logs`
--

CREATE TABLE `ad_logs` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ad_logs`
--

INSERT INTO `ad_logs` (`email`, `password`, `ad_id`, `name`) VALUES
('admin@gmail.com', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `cl_id` int(11) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `c_phone` varchar(200) NOT NULL,
  `c_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`cl_id`, `c_name`, `age`, `date`, `time`, `doc_name`, `gender`, `c_phone`, `c_email`) VALUES
(4, 'anu s', '32', '2024-07-06', '09:00:00', 'Dr. Varun S', 'Female', '85451445', 'anu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `prof` varchar(200) NOT NULL,
  `exp` varchar(200) NOT NULL,
  `ward` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `prof`, `exp`, `ward`, `phone`, `email`, `gender`) VALUES
(3, 'Anitha a', 'General', '10', '5', '452152154', 'anitha@gmail.com', 'Female'),
(4, 'Dr. Varun S', 'Cardiologist', '15', '3', '55524155', 'varun@gmail.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `doc_logs`
--

CREATE TABLE `doc_logs` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doc_logs`
--

INSERT INTO `doc_logs` (`email`, `password`, `doc_id`) VALUES
('doctor4@gmail.com', 'c9563e0e51bdec8f93af36d0ee56a4cce160806c', 3),
('doctor4@gmail.com', 'c9563e0e51bdec8f93af36d0ee56a4cce160806c', 3);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass_word` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `name`, `email`, `pass_word`) VALUES
(5, 'Nisarga', 'nnisarga1611@gmail.com', '10470c3b4b1fed12c3baac014be15fac67c6e815'),
(6, 'abc', 'abc@gmail.com', 'fe703d258c7ef5f50b71e06565a65aa07194907f'),
(7, 'Nishanth', 'nishanth@gmail.com', '6a18e739d7cef0bfa06969db046b2f7c6aa776e1');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `n_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `con-ward` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `res_logs`
--

CREATE TABLE `res_logs` (
  `res_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res_logs`
--

INSERT INTO `res_logs` (`res_id`, `email`, `password`) VALUES
(1, 'res@gmail.com', 'd9a472a51fe18e3273d9cdff675c2aa6da0be16b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_logs`
--
ALTER TABLE `ad_logs`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cl_id`,`c_name`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`,`name`);

--
-- Indexes for table `doc_logs`
--
ALTER TABLE `doc_logs`
  ADD KEY `nisarga2` (`doc_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`n_id`,`name`);

--
-- Indexes for table `res_logs`
--
ALTER TABLE `res_logs`
  ADD PRIMARY KEY (`res_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_logs`
--
ALTER TABLE `ad_logs`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `res_logs`
--
ALTER TABLE `res_logs`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doc_logs`
--
ALTER TABLE `doc_logs`
  ADD CONSTRAINT `nisarga2` FOREIGN KEY (`doc_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
