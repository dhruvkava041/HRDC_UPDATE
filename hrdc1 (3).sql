-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 09:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrdc1`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `name of participant` varchar(100) NOT NULL,
  `attendence` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `batchwise_nomination`
--

CREATE TABLE `batchwise_nomination` (
  `CreatedDate` date NOT NULL DEFAULT current_timestamp(),
  `id` int(100) NOT NULL,
  `Event Name` varchar(255) NOT NULL,
  `Subevent Name` varchar(255) NOT NULL,
  `Employee ID` varchar(255) NOT NULL,
  `Name of Participant` varchar(255) NOT NULL,
  `Functional Department` varchar(250) NOT NULL,
  `Designation` varchar(250) NOT NULL,
  `Mobile Number` int(250) NOT NULL,
  `Email Id` varchar(250) NOT NULL,
  `Select Batch` varchar(250) NOT NULL,
  `Select slot` varchar(250) NOT NULL,
  `Report Authority` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batchwise_nomination`
--

INSERT INTO `batchwise_nomination` (`CreatedDate`, `id`, `Event Name`, `Subevent Name`, `Employee ID`, `Name of Participant`, `Functional Department`, `Designation`, `Mobile Number`, `Email Id`, `Select Batch`, `Select slot`, `Report Authority`) VALUES
('2021-07-09', 13, 'ddfd', 'sdf , sdfsss', 'dw', 'wef', 'CSPIT-CE', 'ew', 1211312312, 'gdfgsdfssts@gmail.com', 'B', 'BCA', 'Dr.Parth Shah'),
('2021-07-09', 14, 'gg', 'hh', 'ghg', 'tst', 'CSPIT-EE', 'ghggh', 2147483647, 'gdfgdfsts@gmail.com', 'A', 'Morning', 'Dr.Parth Shah'),
('2021-07-10', 15, 'sports', 'cricket', 'gh', 'fddbbbbbbbb', 'CSPIT-IT', 'db', 2147483647, 'dgfdgdfg@gmail.com', 'A', 'Morning', 'Dr.Parth Shah'),
('2021-10-27', 16, 'Test Cricket', 'The Ashes', '18ce041', 'Dhruv Kava', 'CSPIT-CE', 'cricketer', 2147483647, 'dhruvkava041@gmail.com', 'A', 'Morning', 'Dr.ritesh patel'),
('2021-11-09', 17, 'Test Cricket', 'The Ashes', '18ce041', 'Dhruv Kava', 'CSPIT-CE', 'CE student', 2147483647, 'dhruvkava041@gmail.com', 'A', 'Morning', 'Dr.ritesh patel'),
('2021-11-09', 18, 'Test Cricket', 'The Ashes', '18ce041', 'Dhruv Kava', 'CSPIT-CE', 'CE student', 2147483647, 'dhruvkava041@gmail.com', 'A', 'Morning', 'Dr.ritesh patel'),
('2021-11-09', 19, 'Charusat Spoual 2022', 'Charusat cricket tournament', '18ce041', 'Dhruv Kava', 'CSPIT-CE', 'Student', 2147483647, 'dhruvkava041@gmail.com', 'A', 'Morning', 'Dr.ritesh patel'),
('2021-11-09', 20, 'Charusat Spoual 2022', 'Charusat cricket tournament', '18ce041', 'Dhruv Kava', 'CSPIT-CE', 'Student', 2147483647, 'dhruvkava041@gmail.com', 'A', 'Morning', 'Dr.ritesh patel'),
('2021-11-09', 21, 'Charusat Spoual 2022', 'Dance Competation', '18ce135', 'Yatik Zalavadiya', 'CSPIT-CE', 'Student', 2147483647, '18ce135@charusat.edu.in', 'B', 'Afternoon', 'Dr.ritesh patel'),
('2021-11-16', 22, 'T20 World Cup', 'Cricket india', '18ce045', 'Harshil', 'CSPIT-CE', 'Student', 2147483647, '18ce045@charusat.edu.in', 'A', 'Morning', 'Dr.ritesh patel'),
('2022-01-01', 23, 'marriage function', 'Haldi', '18ce041', 'Dhruv Kava', 'CSPIT-CE', 'Student', 2147483647, 'dhruvkava041@gmail.com', 'A', 'Morning', 'Dr.ritesh patel');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `academic_year` int(10) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `no. of attendees` int(30) NOT NULL,
  `event days` int(10) NOT NULL,
  `event to date` date NOT NULL,
  `event from date` date NOT NULL,
  `event details` varchar(100) NOT NULL,
  `event type` varchar(50) NOT NULL,
  `event mode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `academic_year`, `event_name`, `no. of attendees`, `event days`, `event to date`, `event from date`, `event details`, `event type`, `event mode`) VALUES
(1, 0, 'Hockey', 0, 0, '0000-00-00', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `CreatedDate` date NOT NULL DEFAULT current_timestamp(),
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`CreatedDate`, `id`, `username`, `password`) VALUES
('2021-07-09', 1, 'xyz', '123'),
('2021-07-09', 2, 'xyz', '123'),
('2021-07-09', 3, 'jahan', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_event`
--

CREATE TABLE `schedule_event` (
  `createdDate` date NOT NULL,
  `id` int(10) NOT NULL,
  `academicYear` int(10) NOT NULL,
  `eventName` varchar(50) NOT NULL,
  `noOfAttendees` int(10) NOT NULL,
  `eventsDays` int(10) NOT NULL,
  `eventToDate` date NOT NULL,
  `eventFromDate` date NOT NULL,
  `eventDetails` varchar(100) NOT NULL,
  `eventType` varchar(20) NOT NULL,
  `eventMode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_event`
--

INSERT INTO `schedule_event` (`createdDate`, `id`, `academicYear`, `eventName`, `noOfAttendees`, `eventsDays`, `eventToDate`, `eventFromDate`, `eventDetails`, `eventType`, `eventMode`) VALUES
('2021-10-12', 1, 2021, 'charusat', 30, 3, '2021-10-13', '2021-10-16', 'arhearhaeh', 'teaching', ' online'),
('2012-10-21', 2, 2021, 'sports', 50, 5, '2021-10-13', '2021-10-18', 'adsgdaryhQWEYAERYHwYHAEH', 'Non-teaching', ' Offline'),
('2012-10-21', 3, 2021, 'chess', 10, 4, '2021-10-13', '2021-10-16', 'drhsrturhnajnrgkaenjkhbejfh', 'Non-teaching', ' Offline'),
('2012-10-21', 4, 2021, 'computer', 40, 3, '2021-10-13', '2021-10-18', ' fufuffufuyfsdgkbdkgb', 'All', ' online'),
('2012-10-21', 5, 2020, 'Sports tournament', 50, 30, '2021-10-04', '2021-10-14', ' fdfdfdfdf', 'teaching', ' online'),
('2014-10-21', 6, 2020, 'cricket', 10000, 60, '2021-08-14', '2021-10-14', ' Cricket event', 'Non-teaching', ' Offline'),
('2023-10-21', 7, 2020, 'cricket tour', 50, 10, '2021-05-25', '2021-06-05', ' sdsffgfg', 'Non-teaching', ' Offline'),
('2024-10-21', 8, 2020, 'Tennis Tournaments', 500, 30, '2021-05-01', '2021-06-01', ' Tennis tournaments', 'Non-teaching', ' Offline'),
('2024-10-21', 9, 2020, 'Tennis Tournaments', 5000, 30, '2021-05-01', '2021-06-01', ' Tennis', 'Non-teaching', ' Offline'),
('2025-10-21', 10, 2020, 'icc TOURNAMENTS', 50000, 60, '2021-05-25', '2021-07-25', ' cRICKET international', 'Non-teaching', ' Offline'),
('2025-10-21', 11, 2020, 'Test Cricket', 50000, 730, '2021-05-06', '2023-05-06', 'Test Tournaments', 'Non-teaching', ' Offline'),
('2009-11-21', 12, 2020, 'Cognizance', 500, 2, '2021-02-05', '2021-02-06', 'Charusat CZ21', 'teaching', ' online'),
('2009-11-21', 13, 2020, 'CZ21', 500, 2, '2021-05-30', '2021-05-31', 'Charusat CZ21', 'Non-teaching', ' online'),
('2009-11-21', 14, 2021, 'Spoural 2022', 50000, 14, '2022-02-02', '2022-02-16', 'Charusat Sports Event', 'Non-teaching', ' Offline'),
('2009-11-21', 15, 2021, 'Charusat Spoual 2022', 50000, 14, '2022-02-02', '2022-02-16', 'Charusat Sports Event', 'Non-teaching', ' Offline'),
('2016-11-21', 16, 2021, 'T20 World Cup', 50000, 14, '2021-02-02', '2021-02-16', 'ICC T20 Wc', 'Non-teaching', ' Offline'),
('2001-01-22', 17, 2020, 'marriage function', 500, 4, '2022-01-11', '2022-01-15', 'wilson wedding', 'Non-teaching', ' Offline'),
('2001-01-22', 18, 2021, 'sneha maams marriage', 300, 5, '2021-12-04', '2021-12-09', 'madam marriage', 'Non-teaching', ' Offline'),
('2001-01-22', 19, 2022, 'Spoural 2023', 100, 14, '2023-02-04', '2023-02-18', 'spoural', 'Non-teaching', ' Offline'),
('2028-05-22', 20, 2020, 'Cricket', 50, 14, '2022-05-14', '2022-05-28', 'Cricket', 'teaching', ' online');

-- --------------------------------------------------------

--
-- Table structure for table `subevent`
--

CREATE TABLE `subevent` (
  `subevent_id` int(11) NOT NULL,
  `academicYear` int(4) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `subevent_name` varchar(50) NOT NULL,
  `No_of_attendees` int(10) NOT NULL,
  `event_batch` varchar(10) NOT NULL,
  `event_days` int(10) NOT NULL,
  `event_to_date` date NOT NULL,
  `event_from_date` date NOT NULL,
  `expert_name` varchar(50) NOT NULL,
  `event_details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subevent`
--

INSERT INTO `subevent` (`subevent_id`, `academicYear`, `event_name`, `subevent_name`, `No_of_attendees`, `event_batch`, `event_days`, `event_to_date`, `event_from_date`, `expert_name`, `event_details`) VALUES
(1, 2021, 'sports', 'cricket', 67, 'a1 d1 d2 ', 5, '2021-10-13', '2021-10-28', 'fgdfg,zdfgzfg,', 'SDgsdgzsdg'),
(3, 2020, 'Sports tournament', 'cricket', 50, 'A B C D ', 10, '2021-10-04', '2021-10-14', 'MS Dhoni ,Sachin Tendulkar ,', 'Cricket events'),
(4, 2020, 'Sports tournament', 'football', 50, 'A B C D ', 10, '2021-10-04', '2021-10-14', 'Ronaldo ,messy ,', 'football event'),
(5, 2020, 'cricket', 'IPL', 50000, 'A B C ', 60, '2021-08-14', '2021-10-14', 'MS Dhoni ,Sachin Tendulkar ,Virat Kohli ,', 'indian primier league'),
(6, 2020, 'cricket', 'BBL', 10000, 'E F G ', 60, '2021-08-14', '2021-10-14', 'Ricky Ponting ,heyden ,Smith ,', 'Australian primiar league'),
(7, 2020, 'cricket tour', 'ipl 12', 50, '', 10, '2021-05-25', '2021-06-05', 'Sachin Tendulkar ,MS Dhoni ,MS Dhoni ,', 'sddf'),
(8, 2020, 'Tennis Tournaments', 'US OPEN', 400, '', 30, '2021-05-01', '2021-06-01', 'Dhruv Kava ,', 'sdfryy'),
(10, 2020, 'Test Cricket', 'The Ashes', 50000, '', 45, '2021-07-15', '2021-08-30', 'Ricky Ponting ,Alister Cook ,', 'The Ashes'),
(11, 2020, 'Test Cricket', 'Border-Gavskar Trophy', 50000, '', 60, '2021-11-26', '2022-01-26', 'Sachin Tendulkar ,Ricky Ponting ,', 'India vs Australia'),
(12, 2020, 'CZ21', 'IT quiz', 500, '', 2, '2021-05-30', '2021-05-31', 'Dhruv Kava ,tufel Jariwala ,', 'Charusat CZ21'),
(13, 2021, 'Spoural 2022', 'Sp Cricket tournaments 2022', 150, '', 14, '2022-02-02', '2022-02-16', 'Dhruv Kava ,MS Dhoni ,Sachin Tendulkar ,', 'Spoural Cricket Tournament 2022 '),
(14, 2021, 'Spoural 2022', 'Dance Competation', 500, '', 7, '2022-02-02', '2022-02-09', 'Prabhudeva ,Remo desouza ,', 'Spoural Dance Compitation '),
(15, 2021, 'Charusat Spoual 2022', 'Charusat cricket tournament', 150, '', 14, '2022-02-02', '2022-02-16', 'MS Dhoni ,Sachin Tendulkar ,', 'Charusat Cricket Tournament (spoural 2022)'),
(16, 2021, 'Charusat Spoual 2022', 'Dance Competation', 500, '', 7, '2022-02-02', '2022-02-09', 'Prabhudeva ,Remo Dsuza ,', 'Charusat Dance Competition'),
(17, 2020, 'T20 World Cup', 'Cricket india', 50000, '', 14, '2021-02-02', '2021-02-16', 'MS Dhoni ,Sachin Tendulkar ,', 'Indian cricket'),
(18, 2020, 'marriage function', 'Haldi', 100, '', 1, '2022-01-13', '2022-01-13', 'AVC ,MNQ ,', 'haldi'),
(19, 2020, 'sneha maams marriage', 'Haldi', 50, '', 1, '2021-12-09', '2021-12-09', 'tkp ,tkg ,', 'enjoy'),
(20, 2022, 'Spoural 2023', 'cricket 2023', 10, '', 15, '2023-02-04', '2023-02-18', 'MS Dhoni ,Sachin Tendulkar ,', 'ssddg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batchwise_nomination`
--
ALTER TABLE `batchwise_nomination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_event`
--
ALTER TABLE `schedule_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subevent`
--
ALTER TABLE `subevent`
  ADD PRIMARY KEY (`subevent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `batchwise_nomination`
--
ALTER TABLE `batchwise_nomination`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule_event`
--
ALTER TABLE `schedule_event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subevent`
--
ALTER TABLE `subevent`
  MODIFY `subevent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
