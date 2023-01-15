-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 01:58 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guvi_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `lname`, `email`, `gender`, `contact`, `dob`, `password`, `image`) VALUES
(8, 'Ellakiya', 'S', 'ellakiya@gmail.com', 'female', 9898786767, '2022-11-07', '27a8d3f083b1fc32f0e265672652e0ed', 'Ellipse -2@2x.png'),
(9, 'Jeevi', 'S', 'jeevi12@gmail.com', 'female', 9898786767, '2022-11-02', '2572a123204a590f8cfe27da5f5fe3ba', 'Ellipse -3@2x.png'),
(10, 'Anu', 'K', 'anu@gmail.com', 'female', 6578905678, '2022-11-02', 'be2e262efcdb57ac0948887c69558d26', 'Ellipse -4@2x.png'),
(11, 'John', 'S', 'john@gmail.com', 'male', 9898786767, '2022-11-09', '31340e3cd72095548722edb48698472e', 'Ellipse -10@2x.png'),
(12, 'Caley', 'Mike', 'caley@gmail.com', 'male', 8870986950, '2022-11-24', '8dc8e09c41236f76fef685dd4050071e', 'Ellipse -8@2x.png'),
(13, 'Swathi', 'S', 'swathi@gmail.com', 'female', 8870967890, '2022-11-30', '74807b31df82a71fc46174f2f0a98634', 'Ellipse -3@2x.png'),
(14, 'Dhanu', 'S', 'dhanu@gmail.com', 'female', 8870986980, '2022-12-07', 'cd51c8ca590632d3b19649e1c37f6bab', 'Ellipse -2@2x.png'),
(15, 'Anushaya', 's', 'anu12@gmail.com', 'female', 6383825907, '2022-11-30', '8285c7889aa77cadd32d4db9b1502ef2', 'Ellipse 148-1.png'),
(20, 'Pragathi', 'S', 'pargathi@gmail.com', 'female', 8870986950, '2022-11-04', '3e8258a18ae417ffec5b07d7cb6e717b', 'Ellipse -2@2x.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
