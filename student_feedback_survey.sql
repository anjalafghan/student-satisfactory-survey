-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 25, 2018 at 01:46 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_feedback_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `faculty_username` varchar(100) NOT NULL,
  `faculty_password` varchar(100) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `faculty_designation` varchar(100) NOT NULL DEFAULT 'Teacher'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `faculty_username`, `faculty_password`, `department_name`, `faculty_designation`) VALUES
(1, 'a', 'a', 'a', 'INFORMATION TECHNOLOGY', 'Teacher'),
(2, 'b', 'b', 'b', 'CIVIL', 'Teacher'),
(3, 'c', 'c', 'c', 'MECHANICAL', 'Teacher'),
(4, 'd', 'd', 'd', 'AUTOMOBILE', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `department` varchar(200) NOT NULL,
  `division` varchar(2) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `student_id`, `question_id`, `answer`, `department`, `division`, `time`) VALUES
(1, 7, 1, 5, 'INFORMATION TECHNOLOGY', '', '2018-10-24 14:49:22'),
(2, 7, 2, 4, 'INFORMATION TECHNOLOGY', '', '2018-10-24 14:49:22'),
(3, 7, 3, 3, 'INFORMATION TECHNOLOGY', '', '2018-10-24 14:49:22'),
(4, 7, 4, 2, 'INFORMATION TECHNOLOGY', '', '2018-10-24 14:49:22'),
(5, 7, 5, 1, 'INFORMATION TECHNOLOGY', '', '2018-10-24 14:49:22'),
(6, 7, 6, 2, 'INFORMATION TECHNOLOGY', '', '2018-10-24 14:49:22'),
(7, 7, 7, 3, 'INFORMATION TECHNOLOGY', '', '2018-10-24 14:49:22'),
(8, 7, 8, 4, 'INFORMATION TECHNOLOGY', '', '2018-10-24 14:49:22'),
(9, 7, 9, 5, 'INFORMATION TECHNOLOGY', '', '2018-10-24 14:49:22'),
(10, 7, 10, 5, 'INFORMATION TECHNOLOGY', '', '2018-10-24 14:49:22'),
(11, 4, 1, 3, 'MECHANICAL', 'A', '2018-10-24 15:25:03'),
(12, 4, 2, 4, 'MECHANICAL', 'A', '2018-10-24 15:25:03'),
(13, 4, 3, 3, 'MECHANICAL', 'A', '2018-10-24 15:25:03'),
(14, 4, 4, 2, 'MECHANICAL', 'A', '2018-10-24 15:25:03'),
(15, 4, 5, 5, 'MECHANICAL', 'A', '2018-10-24 15:25:03'),
(16, 4, 6, 4, 'MECHANICAL', 'A', '2018-10-24 15:25:03'),
(17, 4, 7, 3, 'MECHANICAL', 'A', '2018-10-24 15:25:03'),
(18, 4, 8, 5, 'MECHANICAL', 'A', '2018-10-24 15:25:03'),
(19, 4, 9, 4, 'MECHANICAL', 'A', '2018-10-24 15:25:03'),
(20, 4, 10, 3, 'MECHANICAL', 'A', '2018-10-24 15:25:03');

-- --------------------------------------------------------

--
-- Stand-in structure for view `final_view`
-- (See below for the actual view)
--
CREATE TABLE `final_view` (
`student_id` int(11)
,`department` varchar(100)
,`division` varchar(2)
,`question_name` text
,`answer` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `new_view`
-- (See below for the actual view)
--
CREATE TABLE `new_view` (
`student_id` int(11)
,`answer` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `question_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question_name`) VALUES
(1, 'The overall quality of teaching-learning process in your institute is very good.'),
(2, 'How much of the syllabus was covered in the class.'),
(3, 'The institute takes active interest in promoting internship, field/industry visit and facilitates you in social and emotional growth.'),
(4, 'Teachers inform you about your expected competencies, course outcomes and program outcomes.'),
(5, 'Teachers illustrate the concept through examples and applications.\r\n'),
(6, 'Teachers identify your strengths and encourage you with providing right level of challenges.'),
(7, 'Teachers are able to identify your weaknesses and help you to overcome them.\r\n'),
(8, 'The institution makes effort to engage students in the monitoring, review and continuous quality improvement of the teaching learning process.'),
(9, 'Teachers encourage you to participate in extracurricular activities.\r\n'),
(10, 'Efforts are made by the institute/ teachers to inculcate soft skills, life skills and employability skills to make you ready for the world of work.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `gr_no` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `department` varchar(100) NOT NULL,
  `division` varchar(2) NOT NULL,
  `has_filled` varchar(3) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `gr_no`, `username`, `password`, `department`, `division`, `has_filled`) VALUES
(3, '1', 'srk', 'srk', 'INFORMATION TECHNOLOGY', '', 'NO'),
(4, '3', 'amir', 'amir', 'MECHANICAL', 'A', 'YES'),
(5, '2', 'salman', 'salman', 'EXTC', '', 'NO'),
(6, '4', 'amitabh', 'amitabh', 'AUTOMOBILE', '', 'NO'),
(7, '5', 'a', 'a', 'INFORMATION TECHNOLOGY', '', 'YES'),
(8, '6', 'b', 'b', 'INFORMATION TECHNOLOGY', '', 'NO'),
(9, '7', 'c', 'c', 'MECHANICAL', 'A', 'NO'),
(10, '8', 'd', 'd', 'MECHANICAL', 'B', 'NO'),
(11, '9', 'e', 'e', 'INFORMATION TECHNOLOGY', '', 'NO'),
(12, '10', 'f', 'f', 'INFORMATION TECHNOLOGY', '', 'NO'),
(13, '11', 'g', 'g', 'MECHANICAL', '', 'NO');

-- --------------------------------------------------------

--
-- Structure for view `final_view`
--
DROP TABLE IF EXISTS `final_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `final_view`  AS  select distinct `student`.`student_id` AS `student_id`,`student`.`department` AS `department`,`student`.`division` AS `division`,`question`.`question_name` AS `question_name`,`feedback`.`answer` AS `answer` from ((`student` join `feedback`) join `question`) where (`question`.`question_id` = `feedback`.`question_id`) order by `student`.`student_id` ;

-- --------------------------------------------------------

--
-- Structure for view `new_view`
--
DROP TABLE IF EXISTS `new_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `new_view`  AS  select `feedback`.`student_id` AS `student_id`,`feedback`.`answer` AS `answer` from `feedback` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `question-foreign` (`question_id`),
  ADD KEY `student-foreign` (`student_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `question-foreign` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `student-foreign` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
