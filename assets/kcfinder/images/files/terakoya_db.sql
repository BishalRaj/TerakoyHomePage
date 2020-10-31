-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 11:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `terakoya_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogposts`
--

CREATE TABLE `blogposts` (
  `b_id` int(11) NOT NULL,
  `b_title` int(50) NOT NULL,
  `b_alias` varchar(50) NOT NULL,
  `b_content` varchar(255) NOT NULL,
  `b_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ter_career`
--

CREATE TABLE `ter_career` (
  `ca_id` int(11) NOT NULL,
  `ca_name` varchar(50) NOT NULL,
  `ca_dob` date NOT NULL,
  `ca_email` varchar(50) NOT NULL,
  `ca_phone` int(10) NOT NULL,
  `ca_qualifications` varchar(255) NOT NULL,
  `ca_skills` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ter_career`
--

INSERT INTO `ter_career` (`ca_id`, `ca_name`, `ca_dob`, `ca_email`, `ca_phone`, `ca_qualifications`, `ca_skills`) VALUES
(1, 'adasdsad', '2020-08-27', 'asdas@asdas.com', 89456123, 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `ter_contact`
--

CREATE TABLE `ter_contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_phone` varchar(10) NOT NULL,
  `c_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ter_contact`
--

INSERT INTO `ter_contact` (`c_id`, `c_name`, `c_email`, `c_phone`, `c_desc`) VALUES
(1, 'asdjh', 'gj@sss.com', '8518452', 'jh            '),
(2, 'habsjh', 'jhb@asdasd.com', '4541351', 'adasdasaca aasccc a asc            ');

-- --------------------------------------------------------

--
-- Table structure for table `ter_gallery`
--

CREATE TABLE `ter_gallery` (
  `g_id` int(11) NOT NULL,
  `g_title` varchar(255) NOT NULL,
  `g_image` varchar(255) NOT NULL,
  `g_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ter_gallery`
--

INSERT INTO `ter_gallery` (`g_id`, `g_title`, `g_image`, `g_type`) VALUES
(1, 'Cars', 'http://localhost/website-html/assets/kcfinder/images/files/21131197.jpg', 'Cars'),
(2, 'Intern', 'http://localhost/website-html/assets/kcfinder/images/files/aaa.jpg', 'Internship'),
(3, 'asd', 'http://localhost/website-html/assets/kcfinder/images/files/black-treble-clef-metal-wall-art-with-swirl-by-skstyle-3786-p.jpg', 'Cars');

-- --------------------------------------------------------

--
-- Table structure for table `ter_sitedetails`
--

CREATE TABLE `ter_sitedetails` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_contact` varchar(255) NOT NULL,
  `s_address` varchar(255) NOT NULL,
  `s_cv` varchar(255) NOT NULL,
  `s_desc` text NOT NULL,
  `s_tasks` text NOT NULL,
  `s_logo` varchar(255) NOT NULL,
  `s_bg_img` varchar(255) NOT NULL,
  `s_pp_img` varchar(255) NOT NULL,
  `s_normal_img` varchar(255) NOT NULL,
  `s_remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ter_teams`
--

CREATE TABLE `ter_teams` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `t_position` varchar(15) NOT NULL,
  `t_image` varchar(255) NOT NULL,
  `t_branch` varchar(25) NOT NULL,
  `t_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ter_teams`
--

INSERT INTO `ter_teams` (`t_id`, `t_name`, `t_position`, `t_image`, `t_branch`, `t_status`) VALUES
(1, 'Bishal', 'Member', 'http://localhost/website-html/assets/kcfinder/images/files/black-treble-clef-metal-wall-art-with-swirl-by-skstyle-3786-p.jpg', 'Kathmandu', '1'),
(2, 'Biiiii', 'iaisoa', 'demo', 'oaisoais', '0'),
(3, 'asd', 'asdsd', 'http://localhost/website-html/assets/kcfinder/images/files/21131197.jpg', 'adasdasd', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ter_testimonial`
--

CREATE TABLE `ter_testimonial` (
  `tes_id` int(11) NOT NULL,
  `tes_name` varchar(25) NOT NULL,
  `tes_position` varchar(25) NOT NULL,
  `tes_desc` varchar(255) NOT NULL,
  `tes_image` varchar(255) NOT NULL,
  `tes_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ter_testimonial`
--

INSERT INTO `ter_testimonial` (`tes_id`, `tes_name`, `tes_position`, `tes_desc`, `tes_image`, `tes_status`) VALUES
(1, 'Bishal', 'asjaksj', 'kjsnkajncknianskjcn\r\nhgvgvhgv', 'http://localhost/website-html/assets/kcfinder/images/files/aaa.jpg', 1),
(2, 'xdcgfbh', 'dfcgvbh', 'fcgvbhj', 'http://localhost/website-html/assets/kcfinder/images/files/21131197.jpg', 1),
(3, 'jkasdaskjdn', 'asjkdnadksn', 'lalalalalalala', 'http://localhost/website-html/assets/kcfinder/images/files/black-treble-clef-metal-wall-art-with-swirl-by-skstyle-3786-p.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ter_user`
--

CREATE TABLE `ter_user` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ter_user`
--

INSERT INTO `ter_user` (`u_id`, `u_email`, `u_password`) VALUES
(1, 'admin@admin.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogposts`
--
ALTER TABLE `blogposts`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `ter_career`
--
ALTER TABLE `ter_career`
  ADD PRIMARY KEY (`ca_id`);

--
-- Indexes for table `ter_contact`
--
ALTER TABLE `ter_contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `ter_gallery`
--
ALTER TABLE `ter_gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `ter_sitedetails`
--
ALTER TABLE `ter_sitedetails`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `ter_teams`
--
ALTER TABLE `ter_teams`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `name` (`t_name`),
  ADD UNIQUE KEY `image` (`t_image`);

--
-- Indexes for table `ter_testimonial`
--
ALTER TABLE `ter_testimonial`
  ADD PRIMARY KEY (`tes_id`);

--
-- Indexes for table `ter_user`
--
ALTER TABLE `ter_user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email` (`u_email`),
  ADD UNIQUE KEY `u_password` (`u_password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ter_career`
--
ALTER TABLE `ter_career`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ter_contact`
--
ALTER TABLE `ter_contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ter_gallery`
--
ALTER TABLE `ter_gallery`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ter_sitedetails`
--
ALTER TABLE `ter_sitedetails`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ter_teams`
--
ALTER TABLE `ter_teams`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ter_testimonial`
--
ALTER TABLE `ter_testimonial`
  MODIFY `tes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ter_user`
--
ALTER TABLE `ter_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
