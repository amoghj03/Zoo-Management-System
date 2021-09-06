-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 10:32 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoo`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GETCUSTDETAILS` ()  BEGIN
	SELECT * from customer;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GETEMPDETAILS` ()  NO SQL
BEGIN
	SELECT * FROM employee;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `Aid` int(15) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Cage_Number` int(11) NOT NULL,
  `Feed_Time` varchar(30) NOT NULL,
  `image_url` varchar(200) DEFAULT NULL,
  `Akid` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`Aid`, `Gender`, `Cage_Number`, `Feed_Time`, `image_url`, `Akid`) VALUES
(61, 'MALE', 21, '2:00', 'https://upload.wikimedia.org/wikipedia/commons/7/73/Lion_waiting_in_Namibia.jpg', 51),
(62, 'MALE', 56, '1:30', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Grosser_Panda.JPG/1280px-Grosser_Panda.JPG', 52),
(63, 'FEMALE', 57, '2:00', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Bengal_tiger_%28Panthera_tigris_tigris%29_female_3_crop.jpg/1280px-Bengal_tiger_%28Panthera_tigris_tigris%29_female_3_crop.jpg', 53),
(64, 'FEMALE', 23, '1:20', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Squirrel_in_Seurasaari_autumn.JPG/1280px-Squirrel_in_Seurasaari_autumn.JPG', 54),
(65, 'MALE', 45, '2:00', 'https://www.thesprucepets.com/thmb/aB6Dj_ZD9iulkqn7wzFynzFuz5Q=/960x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/horse-galloping-in-grass-688899769-587673275f9b584db3a44cdf.jpg', 55),
(66, 'FEMALE', 98, '3:00', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Elephas_maximus_%28Bandipur%29.jpg/1280px-Elephas_maximus_%28Bandipur%29.jpg', 56),
(67, 'MALE', 24, '1:00', 'https://s.abcnews.com/images/US/giraffe-gty-jt-201014_1602687277857_hpMain_16x9_992.jpg', 57),
(68, 'MALE', 45, '1:30', 'https://upload.wikimedia.org/wikipedia/commons/4/43/Bonnet_macaque_%28Macaca_radiata%29_Photograph_By_Shantanu_Kuveskar.jpg', 58);

-- --------------------------------------------------------

--
-- Table structure for table `animaldetail`
--

CREATE TABLE `animaldetail` (
  `ADid` int(15) NOT NULL,
  `Height` varchar(10) DEFAULT NULL,
  `Weights` varchar(10) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Aid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animaldetail`
--

INSERT INTO `animaldetail` (`ADid`, `Height`, `Weights`, `Age`, `Aid`) VALUES
(71, '2FT', '100KG', 20, 61),
(72, '3FT', '150KG', 15, 62),
(73, '2FT', '100KG', 20, 63),
(74, '0.5FT', '1KG', 7, 64),
(75, '6FT', '100KG', 15, 65),
(76, '8FT', '500KG', 13, 66);

-- --------------------------------------------------------

--
-- Table structure for table `animalguide`
--

CREATE TABLE `animalguide` (
  `AGid` int(15) NOT NULL,
  `Zoo_Introduction` varchar(100) NOT NULL,
  `Updated_Year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animalguide`
--

INSERT INTO `animalguide` (`AGid`, `Zoo_Introduction`, `Updated_Year`) VALUES
(21, 'OUR ZOO IS BEAUTIFUL.', 2000),
(22, 'OUR ZOO IS BEAUTIFUL.', 2010),
(23, 'OUR ZOO IS BEAUTIFUL.', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `animalkind`
--

CREATE TABLE `animalkind` (
  `AKid` int(15) NOT NULL,
  `AName` varchar(30) NOT NULL,
  `Physical_Characteristics` text NOT NULL,
  `Zoo_Region` varchar(50) NOT NULL,
  `Diet` varchar(30) NOT NULL,
  `Population_Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animalkind`
--

INSERT INTO `animalkind` (`AKid`, `AName`, `Physical_Characteristics`, `Zoo_Region`, `Diet`, `Population_Status`) VALUES
(51, 'LION', 'YELLOW AND FEROCIOUS', 'TIGER SAFARI', 'MEAT', 'MEDIOCRE'),
(52, 'PANDA', 'FAT AND LAZY', 'VEG SAFARI', 'BAMBOO', 'VERY LOW'),
(53, 'TIGER', 'BLACK STRIPES ON BODY', 'TIGER SAFARI', 'MEAT', 'HIGH'),
(54, 'SQUIRREL', 'SMALL IN SIZE', 'MINI SAFARI', 'NUTS', 'MEDIOCRE'),
(55, 'HORSE', 'RACE GURRAM', 'VEG SAFARI', 'GRASS', 'HIGH'),
(56, 'ELEPHANT', 'GIANT AND STRONG', 'VEG SAFARI', 'GRASS', 'HIGH'),
(57, 'GIRAFFE', 'LONG NECK', 'VEG SAFARI', 'GRASS', 'LOW'),
(58, 'monkey', 'brown and have long tail', 'monkey zone', 'fruits', 'high');

-- --------------------------------------------------------

--
-- Table structure for table `contains`
--

CREATE TABLE `contains` (
  `AKid` int(15) NOT NULL,
  `AGid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cid` int(15) NOT NULL,
  `CFname` varchar(30) NOT NULL,
  `CLname` varchar(30) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Addresses` varchar(100) DEFAULT NULL,
  `Credit_Card_Info` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cid`, `CFname`, `CLname`, `Email`, `Addresses`, `Credit_Card_Info`) VALUES
(1, 'Deepak', 'ksheera', 'deepak@gmail.com', 'BANGALORE', '123456789876'),
(2, 'NANDA', 'KUMAR', 'nandakumar@gmail.com', 'KANAKAPURA', '234156789876'),
(3, 'AMOGH', 'JUTOOR', 'amogh@gmail.com', 'BALLARI', '342156789876'),
(4, 'PARIKSHITH', 'S', 'parikshiths@gmail.com', 'BENGALURU', '432156789867'),
(5, 'DHRUV', 'VARSH', 'dhruvv@gmail.com', 'DELHI', '456743211256'),
(6, 'DEEKSHI', 'NG', 'DEEKSHI@GMAIL.COM', '', '842153678945'),
(7, 'DEEPAK', 'KR', 'DEEPAK@GMAIL.COM', 'BENGALURU', '124578652345');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Eid` int(15) NOT NULL,
  `EFname` varchar(30) NOT NULL,
  `ELname` varchar(30) NOT NULL,
  `Phone_No` varchar(30) NOT NULL,
  `Salary` int(11) NOT NULL,
  `passwrd` varchar(100) NOT NULL,
  `Zid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Eid`, `EFname`, `ELname`, `Phone_No`, `Salary`, `passwrd`, `Zid`) VALUES
(41, 'DEEPAK', 'R', '9807654321', 25000, 'DEEPAK', 31),
(42, 'NANDA', 'KUMAR', '9876543298', 25000, 'NANDA', 31),
(43, 'PARIKSHITH', 'S', '8907656574', 25000, 'PARIKSHITH', 32),
(44, 'AMOGH', 'J', '8907896543', 25000, 'AMOGH', 33),
(45, 'DHRUV', 'V', '8790678909', 25000, 'DHRUV', 33),
(46, 'DEEKSHITH', 'NG', '8102501235', 20000, 'DEEKSHITH', 32);

-- --------------------------------------------------------

--
-- Table structure for table `goes_to`
--

CREATE TABLE `goes_to` (
  `Cid` int(15) NOT NULL,
  `Zid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `looks_after`
--

CREATE TABLE `looks_after` (
  `Eid` int(15) NOT NULL,
  `Aid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

CREATE TABLE `manages` (
  `Eid` int(15) NOT NULL,
  `Tid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `Tid` int(15) NOT NULL,
  `Price` int(11) NOT NULL,
  `Cid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`Tid`, `Price`, `Cid`) VALUES
(11, 1000, 1),
(12, 1000, 2),
(13, 500, 3),
(14, 1500, 4),
(15, 500, 5),
(16, 1000, 6),
(17, 500, 7);

-- --------------------------------------------------------

--
-- Table structure for table `zoo`
--

CREATE TABLE `zoo` (
  `Zid` int(15) NOT NULL,
  `ZName` varchar(50) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Hours` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `AGid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zoo`
--

INSERT INTO `zoo` (`Zid`, `ZName`, `Location`, `Hours`, `Contact`, `AGid`) VALUES
(31, 'BANNERGATTA', 'BENGALURU', '8HRS', '345672', 21),
(32, 'BANDIPURA', 'GUNDLUPET', '8HRS', '675493', 22),
(33, 'NAGARAHOLE', 'HUNSUR', '8HRS', '879654', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`Aid`),
  ADD KEY `fk_ani_akid` (`Akid`);

--
-- Indexes for table `animaldetail`
--
ALTER TABLE `animaldetail`
  ADD PRIMARY KEY (`ADid`),
  ADD KEY `fk_ad_aid` (`Aid`);

--
-- Indexes for table `animalguide`
--
ALTER TABLE `animalguide`
  ADD PRIMARY KEY (`AGid`);

--
-- Indexes for table `animalkind`
--
ALTER TABLE `animalkind`
  ADD PRIMARY KEY (`AKid`);

--
-- Indexes for table `contains`
--
ALTER TABLE `contains`
  ADD PRIMARY KEY (`AKid`,`AGid`),
  ADD KEY `fk2_contains_agid` (`AGid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Eid`),
  ADD KEY `fk_emp_zid` (`Zid`);

--
-- Indexes for table `goes_to`
--
ALTER TABLE `goes_to`
  ADD PRIMARY KEY (`Cid`,`Zid`),
  ADD KEY `fk2_gt_zid` (`Zid`);

--
-- Indexes for table `looks_after`
--
ALTER TABLE `looks_after`
  ADD PRIMARY KEY (`Eid`,`Aid`),
  ADD KEY `fk2_looka_aid` (`Aid`);

--
-- Indexes for table `manages`
--
ALTER TABLE `manages`
  ADD PRIMARY KEY (`Eid`,`Tid`),
  ADD KEY `fk2_manages_tid` (`Tid`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`Tid`),
  ADD KEY `fk_ticket_cid` (`Cid`);

--
-- Indexes for table `zoo`
--
ALTER TABLE `zoo`
  ADD PRIMARY KEY (`Zid`),
  ADD KEY `fk_zoo_AGid` (`AGid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `fk_ani_akid` FOREIGN KEY (`Akid`) REFERENCES `animalkind` (`AKid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `animaldetail`
--
ALTER TABLE `animaldetail`
  ADD CONSTRAINT `fk_ad_aid` FOREIGN KEY (`Aid`) REFERENCES `animal` (`Aid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contains`
--
ALTER TABLE `contains`
  ADD CONSTRAINT `fk1_cont_akid` FOREIGN KEY (`AKid`) REFERENCES `animalkind` (`AKid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_contains_agid` FOREIGN KEY (`AGid`) REFERENCES `animalguide` (`AGid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_emp_zid` FOREIGN KEY (`Zid`) REFERENCES `zoo` (`Zid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `goes_to`
--
ALTER TABLE `goes_to`
  ADD CONSTRAINT `fk1_gt_cid` FOREIGN KEY (`Cid`) REFERENCES `customer` (`Cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_gt_zid` FOREIGN KEY (`Zid`) REFERENCES `zoo` (`Zid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `looks_after`
--
ALTER TABLE `looks_after`
  ADD CONSTRAINT `fk1_la_eid` FOREIGN KEY (`Eid`) REFERENCES `employee` (`Eid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_looka_aid` FOREIGN KEY (`Aid`) REFERENCES `animal` (`Aid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manages`
--
ALTER TABLE `manages`
  ADD CONSTRAINT `fk1_man_eid` FOREIGN KEY (`Eid`) REFERENCES `employee` (`Eid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_manages_tid` FOREIGN KEY (`Tid`) REFERENCES `ticket` (`Tid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fk_ticket_cid` FOREIGN KEY (`Cid`) REFERENCES `customer` (`Cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zoo`
--
ALTER TABLE `zoo`
  ADD CONSTRAINT `fk_zoo_AGid` FOREIGN KEY (`AGid`) REFERENCES `animalguide` (`AGid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
