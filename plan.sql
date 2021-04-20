-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 01:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plan`
--

-- --------------------------------------------------------

--
-- Table structure for table `addevent`
--

CREATE TABLE `addevent` (
  `id` int(255) NOT NULL,
  `e_title` varchar(255) NOT NULL,
  `e_des` varchar(255) NOT NULL,
  `e_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addevent`
--

INSERT INTO `addevent` (`id`, `e_title`, `e_des`, `e_img`) VALUES
(2, 'Night Party', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'danny-howe-gwQAhisLnRA-unsplash.jpg'),
(3, 'Birthday Party', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'elena-de-soto-w423NnHFjFg-unsplash.jpg'),
(4, 'Marriage Event', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'ibrahim-boran-m8YjB0noWiY-unsplash.jpg'),
(5, 'Collage Event', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'karsten-winegeart-PuJPk_5jzqE-unsplash.jpg'),
(6, 'Marriage Event', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'chasse-sauvage-fSJSiczZBVQ-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addvenue`
--

CREATE TABLE `addvenue` (
  `id` int(255) NOT NULL,
  `v_name` varchar(255) NOT NULL,
  `v_add` varchar(255) NOT NULL,
  `v_phone` varchar(255) NOT NULL,
  `v_email` varchar(255) NOT NULL,
  `v_capacity` varchar(255) NOT NULL,
  `v_prefered` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `v_img` varchar(255) NOT NULL,
  `v_des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addvenue`
--

INSERT INTO `addvenue` (`id`, `v_name`, `v_add`, `v_phone`, `v_email`, `v_capacity`, `v_prefered`, `price`, `v_img`, `v_des`) VALUES
(1, 'Ritz-Carlton Hotel', 'Golf Course Square, Airport Rd, Yerawada, Pune, Maharashtra 411006', '07517090229', 'piyushbabhulakar12@gmail.com', '6000', 'All', '6000', '1672438.jpg', 't is aestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to'),
(2, 'Trident Hotel Udaipur', 'Malla Talai Chowk, Trident Rd, near Pichola, Haridas Ji Ki Magri, Udaipur, Rajasthan 313001', '0294 243 2200', 'trident@gmail.com', '9000', 'Marriage', '4500', '6785d0fa1dff0d7fc053bb5b36f90c06.gif', 't is aestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to'),
(3, 'The Leela Palace Udaipur ', 'Lake, Pichola, Udaipur, Rajasthan 313001', '0294 670 1234', 'leelapalace@gmail.com', '9000', 'All', '6000', 'mountains-4356017_1920.jpg', 't is aestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to'),
(4, 'Radisson Udaipur', 'Lakecity Mall, Ashok Nagar Main Rd, Udaipur, Rajasthan 313001', '0294 660 3333', 'radisson@gmail.com ', '9000', 'Marriage', '5600', 'pic1.jpg', 't is aestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to'),
(6, 'Hotel Lakend', 'Alkapuri. Fatehsagar lake shore, Ambamata, Udaipur, Rajasthan 313001', '0294 243 1401', 'lakend@gmail.com', '8000', 'All', '9000', '6785d0fa1dff0d7fc053bb5b36f90c06.gif', 'In an elegant building overlooking Fateh Sagar Lake, this upscale hotel is 2 km from the 16th-century City Palace.');

-- --------------------------------------------------------

--
-- Table structure for table `a_regi`
--

CREATE TABLE `a_regi` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a_regi`
--

INSERT INTO `a_regi` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `book_event`
--

CREATE TABLE `book_event` (
  `id` int(255) NOT NULL,
  `book_id` varchar(255) NOT NULL,
  `hotel_id` varchar(255) NOT NULL,
  `e_type` varchar(255) NOT NULL,
  `e_date` varchar(255) NOT NULL,
  `no_guest` varchar(255) NOT NULL,
  `equipm_dj` varchar(255) NOT NULL DEFAULT 'No',
  `equipm_stage` varchar(255) NOT NULL DEFAULT 'No',
  `equipm_mike_spka` varchar(255) NOT NULL DEFAULT 'No',
  `food_break` varchar(255) NOT NULL DEFAULT 'No',
  `food_lunch` varchar(255) NOT NULL DEFAULT 'No',
  `food_tea_sna` varchar(255) NOT NULL DEFAULT 'No',
  `food_dinner` varchar(255) NOT NULL DEFAULT 'No',
  `food_type` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `light_type` varchar(255) NOT NULL,
  `flower_type` varchar(255) NOT NULL,
  `seating_type` varchar(255) NOT NULL,
  `hotel_price` varchar(255) NOT NULL,
  `dj_price` varchar(255) NOT NULL,
  `stage_price` varchar(255) NOT NULL,
  `mike_spek_price` varchar(255) NOT NULL,
  `foodbreak_price` varchar(255) NOT NULL,
  `foodlunch_price` varchar(255) NOT NULL,
  `foodtea_price` varchar(255) NOT NULL,
  `fooddinner_price` varchar(255) NOT NULL,
  `light_price` varchar(255) NOT NULL,
  `flower_price` varchar(255) NOT NULL,
  `seat_price` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `bookby_fname` varchar(255) NOT NULL,
  `bookby_lname` varchar(255) NOT NULL,
  `bookby_email` varchar(255) NOT NULL,
  `bookby_phone` varchar(255) NOT NULL,
  `b_date` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_event`
--

INSERT INTO `book_event` (`id`, `book_id`, `hotel_id`, `e_type`, `e_date`, `no_guest`, `equipm_dj`, `equipm_stage`, `equipm_mike_spka`, `food_break`, `food_lunch`, `food_tea_sna`, `food_dinner`, `food_type`, `service`, `light_type`, `flower_type`, `seating_type`, `hotel_price`, `dj_price`, `stage_price`, `mike_spek_price`, `foodbreak_price`, `foodlunch_price`, `foodtea_price`, `fooddinner_price`, `light_price`, `flower_price`, `seat_price`, `total_price`, `bookby_fname`, `bookby_lname`, `bookby_email`, `bookby_phone`, `b_date`, `payment`, `action`) VALUES
(4, '60715db19b72e', '2', 'Marriage', '2021-04-28', '500', 'DJ', '', 'Mike and Speaker', '', 'Lunch', '', '', 'Veg', 'Normal', 'Delux', 'Delux', 'Chair & Sofa', '4500', '7000', '0', '3000', '0', '4000', '0', '0', '2000', '4000', '4000', '28500', 'Piyush', 'Babhulakar', 'piyushbabhulakar12@gmail.com', '07517090229', '2021/04/10', 'Done', 'Confirm'),
(5, '60719456e2055', '2', 'Marriage', '2021-04-28', '500', 'DJ', '', 'Mike and Speaker', '', 'Lunch', '', '', 'Veg', 'Normal', 'Delux', 'Delux', 'Chair & Sofa', '4500', '7000', '0', '3000', '0', '4000', '0', '0', '2000', '4000', '4000', '28500', 'Piyush', 'Babhulakar', 'piyushbabhulakar12@gmail.com', '07517090229', '2021/04/10', 'Done', 'Pending'),
(6, '6072b188b6573', '3', 'Marriage', '2021-04-21', '1000', 'DJ', 'Stage', '', '', 'Lunch', '', 'Dinner', 'Veg', 'Delux', 'Delux', 'Delux', 'Chair & Sofa', '6000', '7000', '3000', '0', '0', '4000', '0', '5000', '2000', '4000', '4000', '35000', 'Piyush', 'Babhulakar', 'piyushbabhulakar12@gmail.com', '07517090229', '2021/04/11', 'Done', 'Pending'),
(7, '6072f8cc8bead', '1', 'Marriage', '2021-04-30', '1000', 'DJ', 'Stage', '', 'Break Fast', 'Lunch', '', 'Dinner', 'Veg', 'Delux', 'Delux', 'Delux', 'Chair & Sofa', '6000', '7000', '3000', '0', '2000', '4000', '0', '5000', '2000', '4000', '4000', '37000', 'Piyush', 'Babhulakar', 'piyushbabhulakar12@gmail.com', '07517090229', '2021/04/11', 'Done', 'Pending'),
(9, '60746a8a8e930', '1', 'Marriage', '2021-04-30', '3000', 'DJ', '', 'Mike and Speaker', 'Break Fast', 'Lunch', '', 'Dinner', 'Veg', 'Delux', 'Delux', 'Delux', 'Chair & Sofa', '6000', '7000', '0', '3000', '2000', '4000', '0', '5000', '2000', '4000', '4000', '37000', 'Piyush', 'Babhulakar', 'piyushbabhulakar12@gmail.com', '07517090229', '2021/04/12', 'Done', 'Pending'),
(10, '60754bc476417', '1', 'Marriage', '2021-04-30', '1000', 'DJ', 'Stage', '', 'Break Fast', 'Lunch', '', 'Dinner', 'Veg', 'Delux', 'Delux', 'Delux', 'Chair & Sofa', '6000', '7000', '3000', '0', '2000', '4000', '0', '5000', '2000', '4000', '4000', '37000', 'Piyush', 'Babhulakar', 'piyushbabhulakar12@gmail.com', '7517090229', '2021/04/13', 'Done', 'Pending'),
(11, '60757cf3c11e7', '1', 'Marriage', '2021-04-15', '1000', 'DJ', 'Stage', 'Mike and Speaker', 'Break Fast', '', '', 'Dinner', 'Veg', 'Delux', 'Delux', 'Delux', 'Chair & Sofa', '6000', '7000', '3000', '3000', '2000', '0', '0', '5000', '2000', '4000', '4000', '36000', 'Piyush', 'Babhulakar', 'piyushbabhulakar12@gmail.com', '7517090229', '2021/04/13', 'Done', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `feed` varchar(255) NOT NULL,
  `v_id` varchar(255) NOT NULL,
  `send_by` varchar(255) NOT NULL,
  `sendby_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feed`, `v_id`, `send_by`, `sendby_id`) VALUES
(2, 'Good Service Provid', '1', 'Piyush Babhulakar', '2'),
(3, 'Good', '1', 'Piyush Babhulakar', '2'),
(4, 'Good', '1', 'Piyush Babhulakar', '2'),
(5, 'food is not good and not proper seat and not clean', '1', 'Piyush Babhulakar', '2');

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `cpass`) VALUES
(2, 'Piyush', 'Babhulakar', 'piyushbabhulakar12@gmail.com', '7517090229', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addevent`
--
ALTER TABLE `addevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addvenue`
--
ALTER TABLE `addvenue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_regi`
--
ALTER TABLE `a_regi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_event`
--
ALTER TABLE `book_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addevent`
--
ALTER TABLE `addevent`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `addvenue`
--
ALTER TABLE `addvenue`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `a_regi`
--
ALTER TABLE `a_regi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_event`
--
ALTER TABLE `book_event`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
