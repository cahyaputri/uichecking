-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2020 at 11:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master`
--

CREATE TABLE `tbl_master` (
  `id` varchar(100) NOT NULL,
  `ts_name` varchar(100) NOT NULL,
  `device_name` varchar(100) NOT NULL,
  `tc_scenario` varchar(100) NOT NULL,
  `tc_name` varchar(100) NOT NULL,
  `platform` varchar(100) NOT NULL,
  `v_os` varchar(100) NOT NULL,
  `ref_dev` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `img_dir` text NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_master`
--

INSERT INTO `tbl_master` (`id`, `ts_name`, `device_name`, `tc_scenario`, `tc_name`, `platform`, `v_os`, `ref_dev`, `status`, `img_dir`, `tanggal`) VALUES
('05849c6b-d524-4e1c-af27-d6054cf13b8f', 'Mandiri Online 1.4', 'iPhone 7', 'TSI001_LoginUsingRightInformation', 'Login', 'iOS', '12.4', '', 'none', 'SS_1582528270632.png', '1582517125402'),
('3cfa344d-18ea-45fd-89ae-21ed7fbb3372', '', 'iPhone 7', 'TSI003_TrfInHouse_End-To-End', 'Login', 'iOS', '12.4', '', 'none', 'SS_1582536254592.png', '1582515763884'),
('49675982-3fb8-479d-a7f7-d0974918b95b', 'TestSuiteIos', 'iPhone 8', 'TSI001_LoginUsingRightInformation', 'Login', 'iOS', '11.2.2', '', 'none', 'SS_1582516921292.png', '1582512283645'),
('564e808c-3db3-47ac-ace8-e3943336799e', 'Mandiri Online 1.4', 'OPPO CPH1819 (Android 9)', 'TSA001_LoginUsingRightInformation', 'Login', 'Android', '9', '', 'none', 'SS_1582283819568.png', '1582282802274'),
('8810154a-6ebd-4ce2-b050-bde0710bc486', '', 'iPhone 7', 'TSI002_TrfInHouse', 'Login', 'iOS', '12.4', '', 'none', 'SS_1582523687903.png', '1582522407685'),
('abb0bdf9-0e4f-4fbe-a381-a62415fb339b', 'Mandiri Online 1.4', 'OPPO CPH1819 (Android 9)', 'TSA001_LoginUsingRightInformation', 'Verify Login', 'Android', '9', '', 'none', 'SS_1582283830452.png', '1582282813191'),
('af190a6c-59ff-40eb-8592-82dcb7cc186e', '', 'iPhone 7', 'TSI001_LoginUsingRightInformation', 'Login', 'iOS', '12.4', '', 'none', 'SS_1582522312430.png', '1582522099662'),
('c3570c89-6845-4c02-a6a9-92f71a5940bd', '', 'iPhone 8', 'TSI002_TrfInHouse', 'Login', 'iOS', '11.2.2', '', 'none', 'SS_1582524826512.png', '1582524683410'),
('d3cc8488-3fa3-44b7-b39c-29ed7cf61fe1', 'Mandiri Online 1.4', 'Xiaomi MI 6 (Android 8.0.0)', 'TSA001_LoginUsingRightInformation', 'Verify Login', 'Android', '8.0.0', '', 'none', 'SS_1582283834481.png', '1582282816629'),
('d5aaa130-fe19-4d43-b1f4-379e77e22414', 'TestSuiteIos', 'iPhone 7', 'TSI001_LoginUsingRightInformation', 'Login', 'iOS', '12.4', '', 'none', 'SS_1582516928381.png', '1582515510094'),
('d92a680d-f265-477b-9333-648c855c1562', '', 'iPhone 8', 'TSI003_TrfInHouse_End-To-End', 'Login', 'iOS', '11.2.2', '', 'none', 'SS_1582536018306.png', '1582529074139'),
('df707eb8-1b78-46ff-b60e-74e9f3c1149e', 'Mandiri Online 1.4', 'iPhone 8', 'TSI001_LoginUsingRightInformation', 'Login', 'iOS', '11.2.2', '', 'none', 'SS_1582528258670.png', '1582517101251'),
('fceb88e8-d668-41a6-80a5-05e0672a1c25', 'Mandiri Online 1.4', 'Xiaomi MI 6 (Android 8.0.0)', 'TSA001_LoginUsingRightInformation', 'Login', 'Android', '8.0.0', '', 'none', 'SS_1582283826249.png', '1582282808672');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_master`
--
ALTER TABLE `tbl_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_3` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
