-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 03:57 PM
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
-- Database: `diagnose`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'jgodstime10@gmail.com', '2dafbd76b05a71d15db7c91776bb532d996e5ef7');

-- --------------------------------------------------------

--
-- Table structure for table `malaria_tbl`
--

CREATE TABLE `malaria_tbl` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fever` int(11) NOT NULL,
  `chill` int(11) NOT NULL,
  `headache` int(11) NOT NULL,
  `nausea_and_vomiting` int(11) NOT NULL,
  `muscle_pain` int(11) NOT NULL,
  `fatigue` int(11) NOT NULL,
  `sweating` int(11) NOT NULL,
  `cough` int(11) NOT NULL,
  `seizure` int(11) NOT NULL,
  `body_aches` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `malaria_tbl`
--

INSERT INTO `malaria_tbl` (`id`, `user_id`, `fever`, `chill`, `headache`, `nausea_and_vomiting`, `muscle_pain`, `fatigue`, `sweating`, `cough`, `seizure`, `body_aches`, `result`, `comment`, `created_at`) VALUES
(1, 5, 2, 0, 2, 2, 0, 2, 1, 0, 2, 2, 13, '', '2019-08-28 10:51:11'),
(2, 5, 2, 0, 0, 0, 1, 1, 0, 1, 0, 3, 8, 'Based on your selection, we detected a little bit of malaria.', '2019-08-28 11:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `typhoid_tbl`
--

CREATE TABLE `typhoid_tbl` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `high_fever` int(11) NOT NULL,
  `soar_throat` int(11) NOT NULL,
  `loss_of_appetite` int(11) NOT NULL,
  `joint_pain` int(11) NOT NULL,
  `diarrhoea` int(11) NOT NULL,
  `rashes` int(11) NOT NULL,
  `weight_loss_and_weakness` int(11) NOT NULL,
  `constipation` int(11) NOT NULL,
  `abdominal_pain` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typhoid_tbl`
--

INSERT INTO `typhoid_tbl` (`id`, `user_id`, `high_fever`, `soar_throat`, `loss_of_appetite`, `joint_pain`, `diarrhoea`, `rashes`, `weight_loss_and_weakness`, `constipation`, `abdominal_pain`, `result`, `comment`, `created_at`) VALUES
(1, 5, 2, 3, 3, 1, 0, 0, 2, 0, 0, 14, '20 Based on your selection, we detected a little bit of malaria.', '2019-08-28 12:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `name`, `email`, `phone`, `address`, `password`, `created_at`) VALUES
(1, 'John Godstime', 'jgoo@yahoo.com', '0990909', 'No Ikot ubo', 'jjjdjd', '2019-08-04 17:12:06'),
(2, 'Magdalene', 'magdalene@yahoo.com', '08166848962', '3 Eberechi Close Woji', '2dafbd76b05a71d15db7c91776bb532d996e5ef7', '2019-08-05 04:40:50'),
(3, 'Enoobong', 'magdalene23@yahoo.com', '08166848962', '3 Eberechi Close Woji', '2dafbd76b05a71d15db7c91776bb532d996e5ef7', '2019-08-05 04:42:54'),
(4, 'John Effiong', 'magdalene455@yahoo.com', '0816684894', '10 Eberechi Close Woji', '2dafbd76b05a71d15db7c91776bb532d996e5ef7', '2019-08-05 04:45:40'),
(5, 'John Godstime', 'jgodstime10@yahoo.com', '08166848962', '3 Eberechi Close Woji', '2dafbd76b05a71d15db7c91776bb532d996e5ef7', '2019-08-28 04:09:14'),
(6, 'John Godstime', 'jgodstime10@yahoo.com', '08166848962', '3 Eberechi Close Woji', '2dafbd76b05a71d15db7c91776bb532d996e5ef7', '2019-08-28 12:36:44'),
(7, 'John Godstime', 'jgodstime10@gmail.com', '08166848962', '3 Eberechi Close Woji', '2dafbd76b05a71d15db7c91776bb532d996e5ef7', '2019-08-28 13:13:36'),
(8, 'John Godstime', 'jgodstide10@gmail.com', '08166848962', '3 Eberechi Close Woji', '2dafbd76b05a71d15db7c91776bb532d996e5ef7', '2019-08-28 13:14:19'),
(9, 'John Godstime', 'jgodstidde10@gmail.com', '08166848962', '3 Eberechi Close Woji', '2dafbd76b05a71d15db7c91776bb532d996e5ef7', '2019-08-28 13:20:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `malaria_tbl`
--
ALTER TABLE `malaria_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typhoid_tbl`
--
ALTER TABLE `typhoid_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `malaria_tbl`
--
ALTER TABLE `malaria_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `typhoid_tbl`
--
ALTER TABLE `typhoid_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
