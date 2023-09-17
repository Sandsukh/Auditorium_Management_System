-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 05:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auditoriumdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookings`
--

CREATE TABLE `tbl_bookings` (
  `book_id` int(11) NOT NULL,
  `ticket_id` varchar(30) NOT NULL,
  `event_id` int(11) NOT NULL COMMENT 'theater id',
  `user_id` int(11) NOT NULL,
  `no_tickets` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_bookings`
--

INSERT INTO `tbl_bookings` (`book_id`, `ticket_id`, `event_id`, `user_id`, `no_tickets`, `date`) VALUES
(1, 'BKID9810426', 5, 1, 2, '0000-00-00'),
(2, 'BKID4691913', 3, 1, 3, '0000-00-00'),
(6, 'BKID1493822', 3, 1, 3, '0000-00-00'),
(8, 'BKID1733643', 3, 1, 5, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL COMMENT 'event organizer id',
  `event_name` varchar(255) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `seats` int(11) NOT NULL COMMENT 'number of seats',
  `t_price` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `o_id`, `event_name`, `desc`, `date`, `start_time`, `seats`, `t_price`, `image`) VALUES
(1, 1, 'Retona', 'This is a demo description', '2023-05-01', '16:00:00', 100, 600, 'images/1.jpg'),
(2, 1, 'Nimthera', 'This is a demo description', '2023-05-02', '19:00:00', 100, 500, 'images/2.jpg'),
(3, 1, 'Kanchana', 'This is a demo description', '2023-05-03', '07:03:00', 100, 600, 'images/3.jpg'),
(4, 1, 'Naaga Mandala', 'This is a demo description', '2023-05-04', '09:06:00', 230, 700, 'images/4.jpg'),
(5, 1, 'Amateur Theater Festival', 'This is a demo description', '2023-05-06', '10:07:00', 2, 500, 'images/5.jpg'),
(10, 2, 'Mathaka', 'A Musical show', '2023-05-16', '18:00:00', 300, 100, 'images/6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_e_organizer`
--

CREATE TABLE `tbl_e_organizer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_e_organizer`
--

INSERT INTO `tbl_e_organizer` (`id`, `name`, `address`, `email`, `phone`) VALUES
(1, 'Dilan', 'df,kl,jk', 'suki@gmail.com', '7451112450'),
(2, 'Chanuka', '234,greens road,colombo', 'cha@gmail.com', '0717932831'),
(3, 'Prabath', '234,greens road,colombo', 'cha@gmail.com', '0717932831');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL COMMENT 'email',
  `password` varchar(50) NOT NULL,
  `user_type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `user_id`, `username`, `password`, `user_type`) VALUES
(1, 1, 'admin', 'password', 0),
(4, 1, 'suki@gmail.com', '123', 2),
(6, 1, 'EVE528830', 'PWD589947', 1),
(7, 2, 'EVE437998', 'PWD836995', 1),
(8, 3, 'EVE497862', 'PWD525902', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`user_id`, `name`, `email`, `phone`, `age`, `gender`) VALUES
(1, 'Sukhitha', 'suki@gmail.com', '0717932831', 23, 'gender');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservations`
--

CREATE TABLE `tbl_reservations` (
  `res_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `request` varchar(1000) NOT NULL,
  `r-date` date NOT NULL,
  `r_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_reservations`
--

INSERT INTO `tbl_reservations` (`res_id`, `u_id`, `request`, `r-date`, `r_time`) VALUES
(1, 1, 'shdheshuhshdsjb', '2023-06-10', '11:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_e_organizer`
--
ALTER TABLE `tbl_e_organizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_reservations`
--
ALTER TABLE `tbl_reservations`
  ADD PRIMARY KEY (`res_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_e_organizer`
--
ALTER TABLE `tbl_e_organizer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_reservations`
--
ALTER TABLE `tbl_reservations`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
