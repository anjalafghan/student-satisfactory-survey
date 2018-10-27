SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `faculty_username` varchar(100) NOT NULL,
  `faculty_password` varchar(100) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `faculty_designation` varchar(100) NOT NULL DEFAULT 'Teacher'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `faculty_username`, `faculty_password`, `department_name`, `faculty_designation`) VALUES
(1, 'a', 'a', 'a', 'INFORMATION TECHNOLOGY', 'Teacher'),
(2, 'b', 'b', 'b', 'CIVIL', 'Teacher'),
(3, 'c', 'c', 'c', 'MECHANICAL', 'Teacher'),
(4, 'd', 'd', 'd', 'AUTOMOBILE', 'Teacher');

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `department` varchar(200) NOT NULL,
  `division` varchar(2) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(20, 4, 10, 3, 'MECHANICAL', 'A', '2018-10-24 15:25:03'),
(21, 10, 1, 5, 'MECHANICAL', 'B', '2018-10-27 13:06:29'),
(22, 10, 2, 4, 'MECHANICAL', 'B', '2018-10-27 13:06:29'),
(23, 10, 3, 3, 'MECHANICAL', 'B', '2018-10-27 13:06:29'),
(24, 10, 4, 4, 'MECHANICAL', 'B', '2018-10-27 13:06:29'),
(25, 10, 5, 3, 'MECHANICAL', 'B', '2018-10-27 13:06:29'),
(26, 10, 6, 4, 'MECHANICAL', 'B', '2018-10-27 13:06:29'),
(27, 10, 7, 3, 'MECHANICAL', 'B', '2018-10-27 13:06:29'),
(28, 10, 8, 4, 'MECHANICAL', 'B', '2018-10-27 13:06:29'),
(29, 10, 9, 4, 'MECHANICAL', 'B', '2018-10-27 13:06:29'),
(30, 10, 10, 4, 'MECHANICAL', 'B', '2018-10-27 13:06:29'),
(31, 8, 1, 2, 'INFORMATION TECHNOLOGY', '', '2018-10-27 13:13:26'),
(32, 8, 2, 2, 'INFORMATION TECHNOLOGY', '', '2018-10-27 13:13:26'),
(33, 8, 3, 2, 'INFORMATION TECHNOLOGY', '', '2018-10-27 13:13:26'),
(34, 8, 4, 3, 'INFORMATION TECHNOLOGY', '', '2018-10-27 13:13:26'),
(35, 8, 5, 3, 'INFORMATION TECHNOLOGY', '', '2018-10-27 13:13:26'),
(36, 8, 6, 3, 'INFORMATION TECHNOLOGY', '', '2018-10-27 13:13:26'),
(37, 8, 7, 4, 'INFORMATION TECHNOLOGY', '', '2018-10-27 13:13:26'),
(38, 8, 8, 5, 'INFORMATION TECHNOLOGY', '', '2018-10-27 13:13:26'),
(39, 8, 9, 4, 'INFORMATION TECHNOLOGY', '', '2018-10-27 13:13:26'),
(40, 8, 10, 5, 'INFORMATION TECHNOLOGY', '', '2018-10-27 13:13:26');

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `question_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `gr_no` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `department` varchar(100) NOT NULL,
  `division` varchar(2) NOT NULL,
  `has_filled` varchar(3) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `student` (`student_id`, `gr_no`, `username`, `password`, `department`, `division`, `has_filled`) VALUES
(3, '1', 'srk', 'srk', 'INFORMATION TECHNOLOGY', '', 'NO'),
(4, '3', 'amir', 'amir', 'MECHANICAL', 'A', 'YES'),
(5, '2', 'salman', 'salman', 'EXTC', '', 'NO'),
(6, '4', 'amitabh', 'amitabh', 'AUTOMOBILE', '', 'NO'),
(7, '5', 'a', 'a', 'INFORMATION TECHNOLOGY', '', 'YES'),
(8, '6', 'b', 'b', 'INFORMATION TECHNOLOGY', '', 'YES'),
(9, '7', 'c', 'c', 'MECHANICAL', 'A', 'NO'),
(10, '8', 'd', 'd', 'MECHANICAL', 'B', 'YES'),
(11, '9', 'e', 'e', 'INFORMATION TECHNOLOGY', '', 'NO'),
(12, '10', 'f', 'f', 'INFORMATION TECHNOLOGY', '', 'NO'),
(13, '11', 'g', 'g', 'MECHANICAL', '', 'NO');


ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `question-foreign` (`question_id`),
  ADD KEY `student-foreign` (`student_id`);

ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);


ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;


ALTER TABLE `feedback`
  ADD CONSTRAINT `question-foreign` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `student-foreign` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
