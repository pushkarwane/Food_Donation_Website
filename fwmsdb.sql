-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 07:02 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fwmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Sai', 'sai', 9763439264, 'gaikwadsainath738@gmail.com', '528bc2d70c717c5ecd4bc6951b569e95', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

CREATE TABLE `tblcity` (
  `ID` int(10) NOT NULL,
  `StateID` int(10) DEFAULT NULL,
  `City` varchar(120) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`ID`, `StateID`, `City`, `CreationDate`) VALUES
(4, 3, 'Parbhani', '2023-12-10 10:45:20'),
(5, 3, 'Mumbai', '2023-12-10 10:50:20'),
(9, 8, 'Pune', '2023-12-10 10:50:20'),
(12, 2, 'Latur', '2023-12-10 10:50:20'),
(19, 9, 'Nanded', '2023-12-10 10:50:20'),
(20, 9, 'Nanded-Waghala', '2023-12-10 10:50:20'),
(21, 9, 'Parbhani', '2023-12-10 10:50:20'),
(22, 9, 'Hingoli', '2023-12-10 10:50:20'),
(23, 13, 'Hyderabad', '2023-12-10 11:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Phone` bigint(10) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`ID`, `FirstName`, `LastName`, `Email`, `Phone`, `Message`, `EnquiryDate`, `IsRead`) VALUES
(1, 'Sai', 'gaikwad', 'gaikwadsainath738@gmail.com', 9763439264, 'none', '2023-09-22 04:53:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbldonor`
--

CREATE TABLE `tbldonor` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldonor`
--

INSERT INTO `tbldonor` (`ID`, `FullName`, `Email`, `MobileNumber`, `Password`, `RegDate`) VALUES
(7, 'Sainath Atmaram Gaikwad', 'gaikwadsainath738@gmail.com', 9763439264, '8d85383280c4c6edcc6fda2d5a668777', '2023-10-09 16:40:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblfood`
--

CREATE TABLE `tblfood` (
  `ID` int(10) NOT NULL,
  `DonorID` int(10) DEFAULT NULL,
  `foodId` int(10) DEFAULT NULL,
  `FoodItems` mediumtext DEFAULT NULL,
  `StateName` varchar(200) DEFAULT NULL,
  `CityName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PickupDate` varchar(200) DEFAULT NULL,
  `PickupAddress` mediumtext DEFAULT NULL,
  `ContactPerson` varchar(200) DEFAULT NULL,
  `CPMobNumber` bigint(10) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfood`
--

INSERT INTO `tblfood` (`ID`, `DonorID`, `foodId`, `FoodItems`, `StateName`, `CityName`, `Description`, `PickupDate`, `PickupAddress`, `ContactPerson`, `CPMobNumber`, `Image`, `CreationDate`, `UpdationDate`) VALUES
(9, 7, 294053171, 'Dal chaval', 'Maharastra', 'Nanded', 'good food', '2023-10-10', 'Nanded,Mahrashtra', 'Sai', 8857901866, 'b25d177f097c0e58bd4cac22c5a95ad2.jpg', '2023-10-09 16:52:14', NULL),
(10, 7, 670938058, 'Panner-roti', 'Maharastra', 'Parbhani', 'Healthy food', '2023-12-11', 'Parbhani', 'Adityaji Chavan', 9763439264, '33edc25c52f5c23f684c1e29c498586d.jpg', '2023-12-10 17:29:48', NULL),
(11, 7, 832108234, 'Indian meal', 'Andhra Pradesh', 'Hyderabad', 'Healthy food', '2023-12-11', 'Hyderabad', 'Gaurav shinde', 8956234578, 'f18f8f26f05099d54eea298ccc74534d.jpg', '2023-12-10 17:37:30', NULL),
(12, 7, 529100415, 'Veg food', 'Maharastra', 'Nanded', 'None', '2023-12-13', 'Nanded', 'Aniket Mane', 7856894523, '61f9b9a4c48983caab337c609087b828.jpg', '2023-12-10 17:43:10', NULL),
(13, 7, 908472232, 'Dal-roti', 'Maharastra', 'Hingoli', 'Healthy', '2023-12-15', 'Hingoli', 'Raju kaju', 7556231548, '7ca388f0b298ee838d683def80a79f4a.jpg', '2023-12-10 17:45:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblfoodrequests`
--

CREATE TABLE `tblfoodrequests` (
  `id` int(11) NOT NULL,
  `requestNumber` bigint(12) DEFAULT NULL,
  `foodId` int(1) DEFAULT NULL,
  `fullName` varchar(150) DEFAULT NULL,
  `mobileNumber` bigint(12) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `requestDate` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(120) DEFAULT NULL,
  `donorRemark` mediumtext DEFAULT NULL,
  `requestCompletionDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfoodrequests`
--

INSERT INTO `tblfoodrequests` (`id`, `requestNumber`, `foodId`, `fullName`, `mobileNumber`, `message`, `requestDate`, `status`, `donorRemark`, `requestCompletionDate`) VALUES
(5, 504869645, 8, 'Pushkar wane', 9763439264, 'done', '2023-10-09 16:55:17', 'Food Take Away/ Request Completed', 'Done', '2023-10-09 16:55:47'),
(6, 818602882, 9, 'Sainath Atmaram Gaikwad', 9763439264, 'ok', '2023-10-26 16:03:57', 'Food Take Away/ Request Completed', 'done', '2023-10-26 16:04:23'),
(7, 298088419, 10, 'Pushkar wane', 8756234156, 'Urgent need food', '2023-12-10 17:31:39', 'Food Take Away/ Request Completed', 'Food takes away completed.', '2023-12-10 17:32:31'),
(8, 367528548, 11, 'Atmaram  Gaikwad', 8956547533, 'fghjk', '2023-12-10 17:38:18', 'Request Rejected', 'Rejected', '2023-12-10 17:38:48'),
(9, 235421646, 12, 'Saga', 8956234523, 'wdf', '2023-12-10 17:44:30', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `ID` int(11) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', '<div style=\"text-align: center;\"><b><font size=\"6\">Welcome to Sai\'s and Pushkar\'s Food Donation Website</font></b></div><div style=\"text-align: left;\"><br></div><div style=\"text-align: left;\"><p class=\"bodytext\" style=\"margin-bottom: 10px; color: rgb(33, 37, 41); line-height: 1.5; font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><span style=\"font-weight: 1000;\">Food waste&nbsp;</span>refers to the decrease in the quantity or quality of food resulting from decisions and actions by retailers, food service providers and consumers. &nbsp;Food is wasted in many ways:</p><ul style=\"margin-bottom: 10px; padding-left: 1.5em; color: rgb(33, 37, 41); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><li style=\"margin-bottom: 6px; position: relative; padding-right: 15px; line-height: 1.5;\">Fresh produce that deviates from what is considered optimal, for example in terms of shape, size and color, is often removed from the supply chain during sorting operations.</li><li style=\"margin-bottom: 6px; position: relative; padding-right: 15px; line-height: 1.5;\">Large quantities of wholesome edible food are often unused or left over and discarded from household kitchens and eating establishments.</li></ul><p class=\"bodytext\" style=\"margin-bottom: 10px; color: rgb(33, 37, 41); line-height: 1.5; font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Less food loss and waste would lead to more efficient land use and better water resource management with positive impacts on climate change and livelihoods.We have donated a 10000+ hungry people in all over the india</p><p><b><font size=\"4\">We have donated a 10000+ hungry people in all over the india.SAVE FOOD SHARE FOOD-This initiative brings together all thestakeholders of the community to prevent food being lost or wasted throughout its supply chain.</font></b></p></div>', '2023-11-20 15:33:07'),
(2, 'contactus', 'Contact Us', '<b>Sai\'s and Pushkar\'s Food Donation Website</b><div><b>Contact&nbsp;Number: +</b>91-9763439264</div><div><b>email: gaikwadsainath738</b>@gmail.com</div><div><b>Address:&nbsp;Jain mandir Gokul apartment, Malegaon&nbsp;road, Nanded</b></div>', '2023-10-09 16:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `tblstate`
--

CREATE TABLE `tblstate` (
  `ID` int(10) NOT NULL,
  `StateName` varchar(120) DEFAULT NULL,
  `RegState` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstate`
--

INSERT INTO `tblstate` (`ID`, `StateName`, `RegState`) VALUES
(9, 'Maharastra', '2023-12-10 11:42:36'),
(13, 'Andhra Pradesh', '2023-12-10 11:45:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldonor`
--
ALTER TABLE `tbldonor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfood`
--
ALTER TABLE `tblfood`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfoodrequests`
--
ALTER TABLE `tblfoodrequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstate`
--
ALTER TABLE `tblstate`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcity`
--
ALTER TABLE `tblcity`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbldonor`
--
ALTER TABLE `tbldonor`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblfood`
--
ALTER TABLE `tblfood`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblfoodrequests`
--
ALTER TABLE `tblfoodrequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblstate`
--
ALTER TABLE `tblstate`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
