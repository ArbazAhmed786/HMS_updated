-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 03:45 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_id` varchar(255) NOT NULL,
  `a_contact` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`, `a_name`, `a_id`, `a_contact`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', '12345', 1234567896),
(8, 'admin2@gmail.com', 'admin', 'admin2', '12345', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_sn` varchar(255) NOT NULL,
  `course_fn` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_sn`, `course_fn`, `posting_date`) VALUES
(1, 'B10992', 'B.Tech', 'Bachelor  of Technology', '2016-04-11 19:31:42'),
(2, 'BCOM1453', 'B.Com', 'Bachelor Of commerce ', '2016-04-11 19:32:46'),
(3, 'BSC1233', 'BSC', 'Bachelor  of Science', '2016-04-11 19:33:23'),
(4, 'BC36356', 'BCA', 'Bachelor Of Computer Application', '2016-04-11 19:34:18'),
(5, 'MCA565', 'MCA', 'Master of Computer Application', '2016-04-11 19:34:40'),
(6, 'MBA75', 'MBA', 'Master of Business Administration', '2016-04-11 19:34:59'),
(7, 'BE765667', 'BE', 'Bachelor of Engineering', '2016-04-11 19:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_reg`
--

CREATE TABLE `hostel_reg` (
  `id` int(11) NOT NULL,
  `roomno` int(250) NOT NULL,
  `feespm` int(250) NOT NULL,
  `food_status` varchar(250) NOT NULL,
  `stay_from` date NOT NULL,
  `duration` int(250) NOT NULL,
  `total_amount` int(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `reg_no` int(250) NOT NULL,
  `sfname` varchar(250) NOT NULL,
  `smname` varchar(250) NOT NULL,
  `slname` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `contact_no` int(250) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `emer_contact_no` int(250) NOT NULL,
  `guardian_name` varchar(250) NOT NULL,
  `guardian_no` int(250) NOT NULL,
  `guad_address` varchar(350) NOT NULL,
  `stu_address` varchar(350) NOT NULL,
  `city` varchar(250) NOT NULL,
  `pincode` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_reg`
--

INSERT INTO `hostel_reg` (`id`, `roomno`, `feespm`, `food_status`, `stay_from`, `duration`, `total_amount`, `course`, `reg_no`, `sfname`, `smname`, `slname`, `gender`, `contact_no`, `email_id`, `emer_contact_no`, `guardian_name`, `guardian_no`, `guad_address`, `stu_address`, `city`, `pincode`) VALUES
(3, 983, 3000, 'option1', '2020-03-14', 10, 20000, '10', 222, 'tempuser', 'b', 'm', 'm', 2147483647, 'temp@gmail.com', 1234569874, 'dada', 2147483647, 'bbbbbbbbbbbbbbb', 'bbbbbbbbbbbbb', 'bangalore', 566656),
(4, 895, 5656, 'with food', '2020-03-15', 10, 4545, '3', 1212121, 'ghgh', 'g', 'h', 'm', 2147483647, 'gh@gmail.com', 2147483647, 'asas', 2147483647, 'nbjbbs d', 'saaaanf', 'ndjfnj', 5656),
(5, 0, 0, '', '0000-00-00', 0, 0, '', 0, '', '', '', '', 0, '', 0, '', 0, '', '', '', 0),
(6, 2003, 3000, 'without food', '2020-03-27', 4, 4545, '11', 454545, 'virat', 'v', 'v', 'm', 2147483647, 'virat@gmail.com', 2147483647, 'aaa', 2147483647, 'asdfghjkl', 'dfghjk', 'ban', 56699),
(8, 401, 1000, 'with food', '2020-03-26', 10, 30000, 'cs', 1010, 'sss', 'sss', 'ss', 'm', 1021021022, 'sss@gnail.com', 1111111111, 'nnn', 1021236547, 'aaaaaaaaaaa', 'aaaaaaaa', 'bnagalore', 560011),
(9, 401, 1111, 'without food', '2020-03-20', 6, 20000, 'Bachelor Of Computer Application', 102, 'madiha', 'm', 'm', 'm', 2147483647, 'ma@gmail.com', 1234569877, 'saa', 656454444, 'aaaaaaa', 'aaaaaaaa', 'aaaa', 555655);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `user`, `subject`, `Description`, `Date`) VALUES
(3, 'virat@gmail.com', 'admin', 'virat come to staff room', '2020-03-10 17:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `seater`, `room_no`, `fees`, `posting_date`) VALUES
(9, 0, 401, 30, '2020-03-10 05:23:22'),
(16, 0, 5653, 2000, '2020-03-10 07:27:17'),
(17, 3, 5198, 3000, '2020-03-13 14:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `student-room-detail`
--

CREATE TABLE `student-room-detail` (
  `id` int(11) NOT NULL,
  `block-id` varchar(255) NOT NULL,
  `room_no` int(30) NOT NULL,
  `room_type` varchar(250) NOT NULL,
  `no_of_beds` int(30) NOT NULL,
  `type_of_room` varchar(250) NOT NULL,
  `need` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student-room-detail`
--

INSERT INTO `student-room-detail` (`id`, `block-id`, `room_no`, `room_type`, `no_of_beds`, `type_of_room`, `need`, `email`) VALUES
(1, '12', 401, 'AC', 1, 'shared', 'loundary', 'virat@gmail.com'),
(2, '12', 5198, 'NON-AC', 1, 'NON-Shared', 'gym', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dob` datetime NOT NULL,
  `regid` varchar(30) NOT NULL,
  `pmob` varchar(250) NOT NULL,
  `fatherName` varchar(250) NOT NULL,
  `motherName` varchar(250) NOT NULL,
  `BloodGroup` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mname`, `lname`, `email`, `pass`, `mobile`, `gender`, `image`, `dob`, `regid`, `pmob`, `fatherName`, `motherName`, `BloodGroup`) VALUES
(39, 'virat', 'v', 'vv', 'virat@gmail.com', '6ebe76c9fb411be97b3b0d48b791a7c9', 9741156996, 'm', 'high-tech-background.jpg', '1971-10-09 00:00:00', '2147483647', '', 'xyz', 'abc', 'AB+'),
(46, 'mama', '', '', 'mama@gmail.com', '25f9e794323b453885f5181f1b624d0b', 9741156993, 'm', 'wallpapers laptop free 1600x900.jpg', '1950-03-04 00:00:00', '2147483647', '', '', '', ''),
(48, 'Arbaz Ahmed', '', '', 'Arbaz12@gmail.com', 'e0ec043b3f9e198ec09041687e4d4e8d', 8888888888, 'm', 'Apple-Wallpapers-Photos.jpg', '1950-06-08 00:00:00', '2147483647', '', 'aaaa', 'sss', 'A-'),
(49, 'code', '', '', 'code@gmail.com', 'e11170b8cbd2d74102651cb967fa28e5', 9874554789, 'm', 'wallpapers laptop free 1600x900.jpg', '1950-03-03 00:00:00', '2147483647', '1234567890', 'asas', 'asas', 'A-'),
(50, 'sss', '', '', 'sss@gmail.com', '3eeb20b1bc5e9facbf8c9d70ecfab47f', 6546546546, 'm', 'wallpapers laptop free 1600x900.jpg', '1974-07-07 00:00:00', '573', '12345678333', 'ddd', 'ddd', 'O+'),
(51, 'fff', '', '', 'fff@gmail.com', '1ec8fbeaaed47174f7934f2b7dd58a09', 4545454545, 'm', 'wallpapers laptop free 1600x900.jpg', '1950-05-08 00:00:00', '589', '', 'aaaa', 'aaaaaa', 'A+'),
(52, 'sasa', 's', 'a', 'sasaa@gmail.com', '1ec8fbeaaed47174f7934f2b7dd58a09', 5454545454, 'm', 'Technology-Wallpaper-16.jpg', '1950-02-06 00:00:00', '578', '', 'ghfgc', 'hgfbnvgf', 'A-'),
(53, 'gg', 'g', 'g', 'g@gmail.com', '1ec8fbeaaed47174f7934f2b7dd58a09', 45454545454, 'm', 'Technology-Wallpaper-16.jpg', '1951-04-07 00:00:00', '545', '', 'fhgh', 'fvc', 'A+'),
(54, 'xyz', 'x', 'y', 'xyz@gmail.com', '6ebe76c9fb411be97b3b0d48b791a7c9', 4564564566, 'm', 'Technology-Wallpaper-16.jpg', '1951-03-04 00:00:00', '504', '', 'aaaaa', 'aa', 'O+'),
(55, 'madiha', 'm', 'm', 'ma@gmail.com', '6ebe76c9fb411be97b3b0d48b791a7c9', 3216547899, 'm', 'wallpapers laptop free 1600x900.jpg', '2002-05-19 00:00:00', '102cs4444', '1201021456', 'aaa', 'tttt', 'B+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel_reg`
--
ALTER TABLE `hostel_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student-room-detail`
--
ALTER TABLE `student-room-detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `user` ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hostel_reg`
--
ALTER TABLE `hostel_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student-room-detail`
--
ALTER TABLE `student-room-detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
