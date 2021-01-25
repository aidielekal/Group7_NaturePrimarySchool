-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 18, 2020 at 06:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Group6`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactUs`
--

CREATE TABLE `contactUs` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactUs`
--

INSERT INTO `contactUs` (`Name`, `Email`, `Message`) VALUES
('aqilahkot', 'tryjer', 'byebye'),
('trujaprakan', 'qq@ma.com', 'mahu try sajaa'),
('ali bin talib', 'ali@gmail.com', 'saya hanya mengetry'),
('aliah', 'aliah@gmail.com', 'apakah inii'),
('aliah', 'aliah@gmail.com', 'apakah inii'),
('ALIAH', '111', '111'),
('guest', 'suest@gmail.com', 'saya guest'),
('tryjerrakan', 'alibaba@gmail.com', 'says mahu beritahu yang saya penat');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `event_description` varchar(300) NOT NULL,
  `event_location` varchar(300) NOT NULL,
  `event_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `event_description`, `event_location`, `event_date`) VALUES
(1, 'Orientation Day', 'Nature Primary School is organizing an orientation day for all new students. Join this event as it is a perfect opportunity for students to make new friends.', 'Nature Primary School', '2020-01-01'),
(2, 'Zoo Volunteering', 'To give back to society, Nature Primary School is organizing a zoo volunteering event. The school will be going to Zoo Negara to volunteer.', 'Zoo Negara Malaysia', '2020-02-15'),
(3, 'Maths is Fun!', 'Nature Primary School is organizing a mathematics class, taught by Math experts Puan Rosie and Encik Ahmad. Open to those 10 years old and above.', 'Nature Primary School', '2020-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_description` varchar(300) NOT NULL,
  `news_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_description`, `news_date`) VALUES
(1, 'Happy New Year', 'Happy new year! 2020 has finally arrived. This year,the teachers of Nature Primary School are more than delighted to meet new students who shall study here.', '2020-01-01'),
(2, 'Back To School', 'It\'s time to go back to school! The first day of school starts on the 5th of January,2020. Please prepare your exercise books and dress properly for the new year. Remember, a new year marks a new beginning.', '2020-01-03'),
(3, 'School Closed', 'Due to celebrating Chinese New Year 2020, year of the rat, the school has been given a 3 day holiday from 25-1-2020 until 27-1-2020. Mark your calendars now and plan ahead for a vacation with your family!', '2020-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `RegisterID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Zipcode` int(11) NOT NULL,
  `State` varchar(255) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`RegisterID`, `Name`, `DOB`, `Username`, `Password`, `Address`, `City`, `Zipcode`, `State`, `ContactNumber`, `Status`) VALUES
(1, 'Nur Sabrina Khan', '2020-02-14', 'nursabrinakhan99@gmail.com', 'sabrinakhan99', 'No 3, Jalan 2/5A', 'Cyberjaya', 63100, 'Selangor', '011-10027345', 'teacher'),
(2, 'Aqilah Ahmad Rafi', '2019-12-04', 'aqilah@gmail.com', 'aqilah99', 'No 20, Jalan 3/1', 'Cyberjaya', 63100, 'Selangor', '011-23434534', 'student'),
(3, 'Hanna Dahlan', '2020-02-13', 'hannadahlan@gmail.com', 'hanna99', 'No.19,Jalan 3/3,', 'Bandar Baru Bangi', 43650, 'Selangor', '012-36479344', 'teacher'),
(4, 'Puteri Aisyah', '2020-02-14', 'puteriaisyah@gmail.com', 'puteri99', 'No.6 Jalan 2/3', 'Shah Alam', 40450, 'Selangor', '011-10027345', 'student'),
(9, 'Aliah Ahmad', '2001-10-10', 'aliah@gmail.com', 'aliah99', 'No 1 Jalan 3/50 Seksyen 3', 'Bandar Baru Bangi', 43650, 'Selangor', '013-3605592', 'student'),
(10, 'Adib Ahmad', '2002-10-10', 'adib@gmail.com', 'adib99', 'No 1 Jalan 3/50 Seksyen 3', 'Bandar Baru Bangi', 43650, 'Selangor', '013-36055921', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `studentmarks`
--

CREATE TABLE `studentmarks` (
  `Student_ID` varchar(500) NOT NULL,
  `Student_Name` text NOT NULL,
  `English_Studies` int(100) NOT NULL,
  `Mathematics` int(100) NOT NULL,
  `Basic_Science_Technology` int(100) NOT NULL,
  `Social_Studies` int(100) NOT NULL,
  `Civic_Education` int(100) NOT NULL,
  `Cultural_Creative_Arts` int(100) NOT NULL,
  `Physical_Health_Education` int(100) NOT NULL,
  `Geography` int(100) NOT NULL,
  `Islamic_Studies` int(100) NOT NULL,
  `Visual_Arts` int(100) NOT NULL,
  `GPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentmarks`
--

INSERT INTO `studentmarks` (`Student_ID`, `Student_Name`, `English_Studies`, `Mathematics`, `Basic_Science_Technology`, `Social_Studies`, `Civic_Education`, `Cultural_Creative_Arts`, `Physical_Health_Education`, `Geography`, `Islamic_Studies`, `Visual_Arts`, `GPA`) VALUES
('10', 'Adib', 73, 97, 54, 76, 82, 70, 63, 84, 72, 80, 3.4),
('2', 'Aqilah Ahmad Rafi', 82, 63, 86, 96, 71, 91, 81, 57, 75, 78, 3.78),
('9', 'Aliah', 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 3.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`RegisterID`);

--
-- Indexes for table `studentmarks`
--
ALTER TABLE `studentmarks`
  ADD PRIMARY KEY (`Student_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `RegisterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
