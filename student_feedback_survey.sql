-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 18, 2018 at 02:55 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
  `faculty_designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `faculty_username`, `faculty_password`, `department_name`, `faculty_designation`) VALUES
(3, 'Raj', 'raj43', '123it', 'IT', 'HOD'),
(4, 'Priya', 'priya03', 'civil', 'Civil', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` enum('0','1','2','3','4') NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `student_id`, `question_id`, `answer`, `time`) VALUES
(1, 1, 0, '3', '2018-10-18 11:04:40'),
(2, 1, 1, '2', '2018-10-18 11:04:40'),
(3, 1, 2, '2', '2018-10-18 11:04:40'),
(4, 1, 3, '2', '2018-10-18 11:04:40'),
(5, 1, 4, '2', '2018-10-18 11:04:40'),
(6, 1, 5, '1', '2018-10-18 11:04:40'),
(7, 1, 6, '2', '2018-10-18 11:04:40'),
(8, 1, 7, '3', '2018-10-18 11:04:40'),
(9, 1, 8, '2', '2018-10-18 11:04:40'),
(10, 1, 9, '3', '2018-10-18 11:04:40'),
(11, 2, 0, '2', '2018-10-18 11:06:16'),
(12, 2, 1, '2', '2018-10-18 11:06:16'),
(13, 2, 2, '2', '2018-10-18 11:06:16'),
(14, 2, 3, '1', '2018-10-18 11:06:16'),
(15, 2, 4, '1', '2018-10-18 11:06:16'),
(16, 2, 5, '2', '2018-10-18 11:06:16'),
(17, 2, 6, '2', '2018-10-18 11:06:16'),
(18, 2, 7, '1', '2018-10-18 11:06:16'),
(19, 2, 8, '2', '2018-10-18 11:06:16'),
(20, 2, 9, '3', '2018-10-18 11:06:16');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_backup`
--

CREATE TABLE `feedback_backup` (
  `The overall quality of teaching-learning process in your institu` enum('0','1','2','3','4') NOT NULL,
  `How much of the syllabus was covered in the class.` enum('0','1','2','3','4') NOT NULL,
  `The institute takes active interest in promoting internship, fie` enum('0','1','2','3','4') NOT NULL,
  `Teachers inform you about your expected competencies, course out` enum('0','1','2','3','4') NOT NULL,
  `Teachers illustrate the concept through examples and application` enum('0','1','2','3','4') NOT NULL,
  `Teachers identify your strengths and encourage you with providin` enum('0','1','2','3','4') NOT NULL,
  `Teachers are able to identify your weaknesses and help you to o` enum('0','1','2','3','4') NOT NULL,
  `The institution makes effort to engage students in the monitorin` enum('0','1','2','3','4') NOT NULL,
  `Teachers encourage you to participate in extracurricular activit` enum('0','1','2','3','4') NOT NULL,
  `Efforts are made by the institute/ teachers to inculcate soft s` enum('0','1','2','3','4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
,`answer` enum('0','1','2','3','4')
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
(0, 'The overall quality of teaching-learning process in your institute is very good.'),
(1, 'How much of the syllabus was covered in the class.'),
(2, 'The institute takes active interest in promoting internship, field/industry visit and facilitates you in social and emotional growth.'),
(3, 'Teachers inform you about your expected competencies, course outcomes and program outcomes.'),
(4, 'Teachers illustrate the concept through examples and applications.\r\n'),
(5, 'Teachers identify your strengths and encourage you with providing right level of challenges.'),
(6, 'Teachers are able to identify your weaknesses and help you to overcome them.\r\n'),
(7, 'The institution makes effort to engage students in the monitoring, review and continuous quality improvement of the teaching learning process.'),
(8, 'Teachers encourage you to participate in extracurricular activities.\r\n'),
(9, 'Efforts are made by the institute/ teachers to inculcate soft skills, life skills and employability skills to make you ready for the world of work.\r\n');

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
(1, '101', 'rahulIT', '123it', 'IT', '', 'YES'),
(2, '102', 'amanCivil', '123civil', 'Civil', 'A', 'YES'),
(9, '103', 'rohit', '123mech', 'Auto', 'A', 'NO'),
(11, '104', 'shyam', 'anuradha', 'Mech', 'A', 'NO');

-- --------------------------------------------------------

--
-- Structure for view `final_view`
--
DROP TABLE IF EXISTS `final_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `final_view`  AS  select distinct `student`.`student_id` AS `student_id`,`student`.`department` AS `department`,`student`.`division` AS `division`,`question`.`question_name` AS `question_name`,`feedback`.`answer` AS `answer` from ((`student` join `feedback`) join `question`) where (`question`.`question_id` = `feedback`.`question_id`) order by `student`.`student_id` ;

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
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `question-foreign` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `student-foreign` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
