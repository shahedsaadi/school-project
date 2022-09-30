-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 يناير 2020 الساعة 15:08
-- إصدار الخادم: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- بنية الجدول `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(5) NOT NULL,
  `password` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `admin`
--

INSERT INTO `admin` (`admin_name`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- بنية الجدول `content_table`
--

CREATE TABLE `content_table` (
  `id_content` int(5) NOT NULL,
  `title` text NOT NULL,
  `information` text NOT NULL,
  `page` varchar(10) NOT NULL,
  `admin_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `content_table`
--

INSERT INTO `content_table` (`id_content`, `title`, `information`, `page`, `admin_id`) VALUES
(11, 'Going to the Zoo', 'The school trip to the zoo will be  <br> on Sunday, 1-20-20,<br> don\'t late', 'home', 'admin'),
(12, 'School Bus', 'On Tuesday 5-1-2020,<br>registration time for school buses <br> will begin.', 'home', 'admin'),
(13, 'Exams Time', 'The date of the exams is approaching,<br> please see the exam schedule<br> for more details.', 'home', 'admin'),
(14, 'About School', 'Our Mission is Educating children to become caring,\r\ncapable citizens and lifelong learners\r\nin a global community.', 'home', 'admin'),
(15, 'Hours', 'Sonday - Thrusday\r\n<br>\r\n7.30am - 12.30pm', 'home', 'admin'),
(16, 'Location', 'Saudi Arabia - Hail', 'home', 'admin'),
(17, 'Regestration Time', 'sunday 14/2/2020', 'home', 'admin'),
(21, 'Mission', 'Educating children to become caring, capable citizens and lifelong learners\r\nin a global community...', 'about', 'admin'),
(22, 'Vision', '● Students will take a responsible role in learning process and actively participate in the school community.\r\n<br><br>\r\n● Parents will collaborate with teachers and support their child\'s academic and social goals.\r\n<br><br>\r\n● Teachers will collaborate to prepare challenging and motivating program that requires students to demonstrate growth in all subject areas.\r\n<br><br>\r\n● Administrators will assist in educating all students to high levels of academic performance and provide a safe, culturally enriching learning environment.', 'about', 'admin'),
(23, 'Goals', 'In order for each student to become a self-fulfilled person and a successful productive citizen, the school shall provide experiences that\r\nenable the student to:\r\n<br>\r\n● Attain a level of mastery in the basic areas of reading, mathematics, and communication skills appropriate to the student\'s individual abilities.\r\n<br>\r\n● Gain insight into the nature of human relationships, respect the rights of others and develop successful interpersonal skills.\r\n<br>\r\n● Understand and practice personal behaviors which lead to sound mental and physical health.\r\n<br>\r\n● Develop an understanding of natural laws of science, especially as they affect ecological balance and to appreciate and participate in the maintence of that balance.\r\n<br>\r\n● Practice a system of values and ethics conducive to the well-being of the students, the school, and society.\r\n<br>\r\n● Develop creative and critical thinking, and an intellectual curiosity for lifelong learning.', 'about', 'admin'),
(31, 'Phone Number', '01-55555555555', 'contact', 'admin'),
(32, 'E-mail	', 'ssssss@aaaa.aaaa', 'contact', 'admin'),
(33, 'Facebook Link	', 'https://www.facebook.com/', 'contact', 'admin'),
(34, 'Instagram Link	', 'https://en.instagram-brand.com/', 'contact', 'admin'),
(35, 'Twitter Link	', 'https://twitter.com/', 'contact', 'admin'),
(36, 'Snapchat Link	', 'https://www.snapchat.com//', 'contact', 'admin');

-- --------------------------------------------------------

--
-- بنية الجدول `exam_schedule`
--

CREATE TABLE `exam_schedule` (
  `id_exam` int(5) NOT NULL,
  `day` text NOT NULL,
  `date` date NOT NULL,
  `grade1` text NOT NULL,
  `grade2` text NOT NULL,
  `grade3` text NOT NULL,
  `admin_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `exam_schedule`
--

INSERT INTO `exam_schedule` (`id_exam`, `day`, `date`, `grade1`, `grade2`, `grade3`, `admin_id`) VALUES
(1, 'Sunday', '2019-11-20', 'math', 'class2', 'class3', 'admin'),
(2, 'Monday', '2019-11-20', 'math', 'math', 'math', 'admin'),
(3, 'Tuseday', '2019-11-20', 'math', 'math', 'math', 'admin'),
(4, 'Wednesday', '2019-11-12', 'math', 'math', 'math', 'admin'),
(5, 'Thursday', '2019-11-25', 'art', 'math', 'math', 'admin');

-- --------------------------------------------------------

--
-- بنية الجدول `homework`
--

CREATE TABLE `homework` (
  `id_work` varchar(5) NOT NULL,
  `date` date NOT NULL,
  `sub1` text NOT NULL,
  `hw1` text NOT NULL,
  `sub2` text NOT NULL,
  `hw2` text NOT NULL,
  `sub3` text NOT NULL,
  `hw3` text NOT NULL,
  `sub4` text NOT NULL,
  `hw4` text NOT NULL,
  `sub5` text NOT NULL,
  `hw5` text NOT NULL,
  `grade` varchar(10) NOT NULL,
  `admin_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `homework`
--

INSERT INTO `homework` (`id_work`, `date`, `sub1`, `hw1`, `sub2`, `hw2`, `sub3`, `hw3`, `sub4`, `hw4`, `sub5`, `hw5`, `grade`, `admin_id`) VALUES
('f1', '2019-12-03', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'grade1', 'admin'),
('f2', '2019-11-19', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'grade1', 'admin'),
('f3', '2019-11-24', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'grade1', 'admin'),
('f4', '2019-11-25', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'grade1', 'admin'),
('f5', '2019-11-28', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'grade1', 'admin'),
('s1', '2019-11-20', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'grade2', 'admin'),
('s2', '2019-12-03', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'grade2', 'admin'),
('s3', '2019-11-14', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'grade2', 'admin'),
('s4', '2019-12-12', 'art', 'aaa', 'art', 'art', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'grade2', 'admin'),
('s5', '2019-11-19', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'grade2', 'admin'),
('t1', '2019-12-12', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'grade3', 'admin'),
('t2', '2019-11-19', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'grade3', 'admin'),
('t3', '2019-12-12', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'grade3', 'admin'),
('t4', '2019-11-25', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'grade3', 'admin'),
('t5', '2019-12-12', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'art', 'aaa', 'grade3', 'admin');

-- --------------------------------------------------------

--
-- بنية الجدول `timetable`
--

CREATE TABLE `timetable` (
  `day_time` varchar(5) NOT NULL,
  `ta1` text NOT NULL,
  `ta2` text NOT NULL,
  `ta3` text NOT NULL,
  `ta4` text NOT NULL,
  `ta5` text NOT NULL,
  `grade` varchar(10) NOT NULL,
  `admin_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `timetable`
--

INSERT INTO `timetable` (`day_time`, `ta1`, `ta2`, `ta3`, `ta4`, `ta5`, `grade`, `admin_id`) VALUES
('mon1', 'Science', 'Math', 'Language', 'Rligion', 'Art', 'grade1', 'admin'),
('mon2', 'Science', 'Math', 'Language', 'Rligion', 'Art', 'grade2', 'admin'),
('mon3', 'Science', 'Math', 'Language', 'Rligion', 'Art', 'grade3', 'admin'),
('sun1', 'Math', 'Science', 'Language', 'Rligion', 'Art', 'grade1', 'admin'),
('sun2', 'Math', 'Science', 'Language', 'Rligion', 'Art', 'grade2', 'admin'),
('sun3', 'Math', 'Science', 'Language', 'Rligion', 'Art', 'grade3', 'admin'),
('thu1', 'Art', 'Science', 'Rligion', 'Math', 'Language', 'grade1', 'admin'),
('thu2', 'Science', 'Language', 'Rligion', 'Math', 'Art', 'grade2', 'admin'),
('thu3', 'Science', 'Language', 'Rligion', 'Math', 'Art', 'grade3', 'admin'),
('tue1', 'Science', 'Math', 'Language', 'Art', 'Rligion', 'grade1', 'admin'),
('tue2', 'Rligion', 'Language', 'Art', 'Math', 'Science', 'grade2', 'admin'),
('tue3', 'Rligion', 'Language', 'Art', 'Math', 'Science', 'grade3', 'admin'),
('wed1', 'Language', 'Art', 'Math', 'Science', 'Rligion', 'grade1', 'admin'),
('wed2', 'Art', 'Math', 'Rligion', 'Science', 'Language', 'grade2', 'admin'),
('wed3', 'Art', 'Math', 'Rligion', 'Science', 'Language', 'grade3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_name`);

--
-- Indexes for table `content_table`
--
ALTER TABLE `content_table`
  ADD PRIMARY KEY (`id_content`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `exam_schedule`
--
ALTER TABLE `exam_schedule`
  ADD PRIMARY KEY (`id_exam`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`id_work`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`day_time`),
  ADD KEY `admin_id` (`admin_id`);

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `content_table`
--
ALTER TABLE `content_table`
  ADD CONSTRAINT `content_table_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_name`);

--
-- القيود للجدول `exam_schedule`
--
ALTER TABLE `exam_schedule`
  ADD CONSTRAINT `exam_schedule_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_name`);

--
-- القيود للجدول `homework`
--
ALTER TABLE `homework`
  ADD CONSTRAINT `homework_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_name`);

--
-- القيود للجدول `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `timetable_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
