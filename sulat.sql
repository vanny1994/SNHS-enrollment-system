-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 07:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sulat`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrollee`
--

CREATE TABLE `enrollee` (
  `enrolleeId` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'PENDING',
  `email` varchar(255) DEFAULT NULL,
  `school_year` varchar(255) DEFAULT NULL,
  `grade_level` varchar(255) DEFAULT NULL,
  `track` varchar(255) DEFAULT NULL,
  `strand` varchar(255) DEFAULT NULL,
  `PSA_Birth_Cert_Num` varchar(255) DEFAULT NULL,
  `LRN` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `extensionName` varchar(255) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `indigenous_people_Community` varchar(255) DEFAULT NULL,
  `motherTongue` varchar(255) DEFAULT NULL,
  `houseNum_street` varchar(255) DEFAULT NULL,
  `brgy` varchar(255) DEFAULT NULL,
  `municipality` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `zipCode` varchar(255) DEFAULT NULL,
  `fatherName` varchar(255) DEFAULT NULL,
  `motherName` varchar(255) DEFAULT NULL,
  `guardianName` varchar(255) DEFAULT NULL,
  `telephoneNumber` varchar(255) DEFAULT NULL,
  `cellphoneNumber` varchar(255) DEFAULT NULL,
  `form9` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollee`
--

INSERT INTO `enrollee` (`enrolleeId`, `status`, `email`, `school_year`, `grade_level`, `track`, `strand`, `PSA_Birth_Cert_Num`, `LRN`, `firstName`, `middleName`, `lastName`, `extensionName`, `dateOfBirth`, `sex`, `age`, `indigenous_people_Community`, `motherTongue`, `houseNum_street`, `brgy`, `municipality`, `province`, `zipCode`, `fatherName`, `motherName`, `guardianName`, `telephoneNumber`, `cellphoneNumber`, `form9`) VALUES
(1, 'ENROLLED', 'anaquevanny@gmail.com', '2022-2023', '7', '', '', '', '', 'JOE VANNY', 'TEOXON', 'ANAQUE', 'JR', '2023-03-08', 'MALE', 11, '', 'FILIPINO', 'PUROK 2', 'LALAWIGAN', 'BORONGAN', 'EASTERN SAMAR', '6800', 'JOSE BADIOLA', 'LIZA DALA', 'LIZA DALA', '09374848284', '09355670578', NULL),
(8, 'PENDING', 'admin@example.com', '2022-2023', '8', '', '', '12341324232435', '', 'DFGFDGF', 'FDGDFG', 'DSFGFDGFDG', '', '2023-02-27', 'MALE', 23, '', 'FILIPINO', 'FGFBHGFNB', 'LALAWIGAN', 'BORONGAN', 'EASTERN SAMAR', '6800', 'JOSE BADIOLA', 'LIZA DALA', 'LIZA DALA', '09374848284', '09355670578', 'Screenshot (7).png'),
(9, 'PENDING', 'admin@example.com', '2022-2023', '7', '', '', '654768787659', '', 'RAKEL', 'FGFG', 'GTFHFHGJHJ', '', '2023-02-26', 'MALE', 11, '', 'FILIPINO', 'PUROK 2', 'LALAWIGAN', 'BORONGAN', 'EASTERN SAMAR', '6800', 'JOSE BADIOLA', 'LIZA DALA', 'LIZA DALA', '09374848284', '09355670578', 'Screenshot (4).png');

-- --------------------------------------------------------

--
-- Table structure for table `transferee_returnee`
--

CREATE TABLE `transferee_returnee` (
  `transferee_returneeId` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'PENDING',
  `email` varchar(255) DEFAULT NULL,
  `school_year` varchar(255) DEFAULT NULL,
  `grade_level` varchar(255) DEFAULT NULL,
  `track` varchar(255) DEFAULT NULL,
  `strand` varchar(255) DEFAULT NULL,
  `PSA_Birth_Cert_Num` varchar(255) DEFAULT NULL,
  `LRN` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `extensionName` varchar(255) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `indigenous_people_Community` varchar(255) DEFAULT NULL,
  `motherTongue` varchar(255) DEFAULT NULL,
  `houseNum_street` varchar(255) DEFAULT NULL,
  `brgy` varchar(255) DEFAULT NULL,
  `municipality` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `zipCode` varchar(255) DEFAULT NULL,
  `fatherName` varchar(255) DEFAULT NULL,
  `motherName` varchar(255) DEFAULT NULL,
  `guardianName` varchar(255) DEFAULT NULL,
  `telephoneNumber` varchar(255) DEFAULT NULL,
  `cellphoneNumber` varchar(255) DEFAULT NULL,
  `lastGradeLevel_Completed` varchar(255) DEFAULT NULL,
  `lastSchoolYear_Completed` varchar(255) DEFAULT NULL,
  `schoolName` varchar(255) DEFAULT NULL,
  `school_ID` int(11) DEFAULT NULL,
  `schoolAddress` varchar(255) DEFAULT NULL,
  `form9` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transferee_returnee`
--

INSERT INTO `transferee_returnee` (`transferee_returneeId`, `status`, `email`, `school_year`, `grade_level`, `track`, `strand`, `PSA_Birth_Cert_Num`, `LRN`, `firstName`, `middleName`, `lastName`, `extensionName`, `dateOfBirth`, `sex`, `age`, `indigenous_people_Community`, `motherTongue`, `houseNum_street`, `brgy`, `municipality`, `province`, `zipCode`, `fatherName`, `motherName`, `guardianName`, `telephoneNumber`, `cellphoneNumber`, `lastGradeLevel_Completed`, `lastSchoolYear_Completed`, `schoolName`, `school_ID`, `schoolAddress`, `form9`) VALUES
(1, 'ENROLLED', 'sirbobo1994@gmail.com', '2022-2023', '8', '', '', '', '', 'MALIC', 'DADIA', 'DALA', '', '2007-04-16', 'MALE', 15, '', 'FILIPINO', 'TRETYH', 'FGHGGJ', 'GHFJMN', 'HFGH', '6800', 'EDEN DALA', 'TONETE DALA', 'EDEN DALA', '09474848284', '09474848284', '', '2017-2018', 'FDGFDGG GFDGFDGH', 546657, 'GFHHJNHG RTRTFGHGHJN RRFGHGFHGJ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verificationToken` varchar(255) DEFAULT NULL,
  `status` enum('verified','not verified') NOT NULL DEFAULT 'not verified',
  `user-type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `verificationToken`, `status`, `user-type`) VALUES
(0, 'sirbobo1994@gmail.com', 'fe703d258c7ef5f50b71e06565a65aa07194907f', '325851', 'verified', 'user'),
(1, 'anaquevanny@gmail.com', 'fe703d258c7ef5f50b71e06565a65aa07194907f', '426166', 'verified', 'user'),
(2, 'admin@example.com', '036d0ef7567a20b5a4ad24a354ea4a945ddab676', NULL, 'verified', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrollee`
--
ALTER TABLE `enrollee`
  ADD PRIMARY KEY (`enrolleeId`);

--
-- Indexes for table `transferee_returnee`
--
ALTER TABLE `transferee_returnee`
  ADD PRIMARY KEY (`transferee_returneeId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrollee`
--
ALTER TABLE `enrollee`
  MODIFY `enrolleeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transferee_returnee`
--
ALTER TABLE `transferee_returnee`
  MODIFY `transferee_returneeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
