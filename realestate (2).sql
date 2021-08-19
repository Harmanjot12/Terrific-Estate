-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 08:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `state`, `city`, `street`, `pincode`, `password`) VALUES
('abc12', 'Harmanjot Singh', 'singhharmanjot2k2@gmail.com', '8528295675', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', 'harman'),
('jas05', 'Jashanjot Singh', 'jashan@gmail.com', '9876543980', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', 'jashan');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `srnum` int(5) NOT NULL,
  `Enqdate` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `number` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`srnum`, `Enqdate`, `name`, `number`) VALUES
(6, '12-06-2021 Saturday', 'Baljot Singh', '123454321'),
(7, '13-06-2021 Sunday', 'Sukhbir Singh', '83793913833'),
(8, '13-06-2021 Sunday', 'Jasleen kaur', '12345123454'),
(9, '13-06-2021 Sunday', 'Ishpreet Kaur', '0987667890'),
(10, '13-06-2021 Sunday', 'Shinki  Arora', '7483738292'),
(11, '13-06-2021 Sunday', 'Shinki  Arora', '7483738292'),
(12, '03-08-2021 Tuesday', 'Harmanjot Singh', '8528295675'),
(16, '03-08-2021 Tuesday', 'My Name', '1234512345'),
(17, '03-08-2021 Tuesday', 'Harmanjot Singh', '8528295675'),
(18, '05-08-2021 Thursday', 'Ramneet KAur', '12345'),
(32, '07-08-2021 Saturday', 'Jaspreet Singh', '123517218'),
(33, '07-08-2021 Saturday', 'My Name', '8917'),
(34, '07-08-2021 Saturday', 'yo you', '9281028');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `srnum` int(11) NOT NULL,
  `propertyid` int(11) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`srnum`, `propertyid`, `images`, `date`, `time`) VALUES
(2, 21, 'realestate7.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `landlord`
--

CREATE TABLE `landlord` (
  `id` varchar(100) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `proof` varchar(100) DEFAULT NULL,
  `property_added` varchar(100) DEFAULT NULL,
  `property_sold` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `landlord`
--

INSERT INTO `landlord` (`id`, `fname`, `lname`, `email`, `contact`, `state`, `city`, `street`, `pincode`, `proof`, `property_added`, `property_sold`, `password`) VALUES
('abcd1', 'Harmanjot', 'Singh', 'singhharmanjot2k2@gmail.com', '8528295675', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', 'famous2.jpg', NULL, NULL, 'harman'),
('abcd12', 'Harmanjot', 'Singh', 'singhharmanjot2k2@gmail.com', '8528295675', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', NULL, NULL, NULL, 'harmanjot2002'),
('abcde12', 'Harmanjot', 'Singh', 'singhharmanjot2k2@gmail.com', '8528295675', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', 'C:xampphtdocs\realestatelandlordidFortuner.jpg', NULL, NULL, 'harman'),
('har12', 'Harmanjot', 'Singh', 'singhharmanjot2k2@gmail.com', '8528295675', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', NULL, NULL, NULL, 'harmanjot12'),
('har2002', 'Harmanjot', 'Singh', 'singhharmanjot2k2@gmail.com', '8528295675', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', NULL, NULL, NULL, 'harmanjot12'),
('Inder05', 'Inderbir', 'Singh', 'inderbir@gmail.com', '9417403030', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', 'Offer letter.pdf', NULL, NULL, 'inder01'),
('jashan09', 'Jashanjot', 'Singh', 'jashan@gmail.com', '9876543980', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', '', NULL, NULL, 'jashan'),
('myid12', 'Harmanjot', 'Singh', 'singhharmanjot2k2@gmail.com', '8528295675', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', '', NULL, NULL, '123');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(100) NOT NULL,
  `catogary` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(12) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `catogary`, `name`, `email`, `contact`, `password`) VALUES
('har12', NULL, NULL, NULL, NULL, 'harmanjot12'),
('jas05', NULL, NULL, NULL, NULL, 'jashan');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `ownerid` varchar(100) DEFAULT NULL,
  `propertyid` int(100) NOT NULL,
  `sellrent` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `rooms` varchar(100) DEFAULT NULL,
  `bathrooms` varchar(100) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `gov` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `distict` varchar(100) DEFAULT NULL,
  `Street` varchar(100) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`ownerid`, `propertyid`, `sellrent`, `type`, `size`, `price`, `rooms`, `bathrooms`, `info`, `gov`, `country`, `state`, `distict`, `Street`, `pincode`) VALUES
('jas98', 19, 'Sell', 'Plot', '247.6', '25Lac', '0', '0', 'Oh! very beautiful I’m falling in love with eye catching view around the plot.Its going to be heaven on earth after construction of your accomodation here.', 'Yes', 'India', 'Andhra Pradesh', 'Tirupati', 'P-87H Jagananna Colony', '517101'),
('jashan09', 21, 'Rent', 'Flat', '144', '10000', '3', '2', 'We spent a week at Top flat and lowest price in area and the view was just amazing on the Douro, with beautiful sunsets.', 'Yes', 'India', 'Andhra Pradesh', 'Visakhapatnam', 'Flat 65', '506'),
('Inderbir07', 22, 'Sell', 'House', '255', '25 Laac', '3', '2', 'Very clean and quiet. We spent a week at Top flat, the apartment was perfect, beautiful, super equiped for our baby! ', 'Yes', 'India', 'Arunachal Pradesh', 'Tawang', '#873 Dorjee Khandu Colony', '790104'),
('Sukhbir179', 23, 'Sell', 'House', '250', '70 Lac', '3', '2', 'This beautiful home is located in city center. Near to market area. walking distance of railway station and bus stand', 'Yes', 'India', 'Assam', 'Guwahati', '#876 Vasant Nagar ', '781001'),
('Inderbir07', 25, 'Rent', 'House', '200', '3000', '3', '2', 'Near to market. Double story accomodation. First floor already on rent.Here to find renter for ground floor.', 'Yes', 'India', 'Bihar', 'Patna', '#4332-B Nehru Vihar', '800001'),
('Inderbir07', 26, 'Sell', 'Flat', '120', '250000', '2', '1', 'Here are just a few of its wonderful features:  new kitchen cabinets, stainless steel sink, modern quartz and so much more!', 'Yes', 'India', 'Bihar', 'Chapra', 'Flat 65 Fisrt Floor Ramnagari', '841301'),
('jashan09', 27, 'Sell', 'Plot', '230', '70lac', '0', '0', 'This site in location near super market and bus stand', 'Yes', 'India', 'Chhattisgarh', 'Raipur', 'Plot 6 New Model Town', '490042'),
('jashan09', 28, 'Rent', 'Bungalow', '2500', '1.25Crore', '6', '4', 'Close to Heaven! Light and bright. Everything you could need. Walking distance from bus stand and Railway Station ', 'Yes', 'India', 'Chhattisgarh', 'Bilaspur', 'B-67 Krishna Street', '495001'),
('har12', 29, 'Sell', 'Plot', '1', '1', '1', '1', 'We spent a week at Top flat,super equiped for our baby! ', 'No', 'India', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001'),
('har12', 30, 'Sell', 'Plot', '1', '1', '1', '1', 'We spent a week at Top flat, the apartment was perfect, beautiful, super equiped for our baby! ', 'No', 'India', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001'),
('har12', 32, 'Sell', 'Farm House', '3000', '2Crore', '6', '3', 'Our farmhouse is not a building but a heaven on earth that also have a beautyful garden ,swimming pool and many more', 'No', 'India', 'Himachal Pardesh', 'Shimla', '32 Satya Marg', '171001'),
('har12', 33, 'Sell', 'House', '433 Giani Zail Singh Nagar', '4500000', '8', '2', 'Located near canal . Wonderful Location .Peaceful area ', 'Yes', 'India', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001'),
('abc12', 34, 'Sell', 'Flat', '433 Giani Zail Singh Nagar', '300', '1', '3', 'Good Locality,24 hour electricity and water', 'Yes', 'India', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001'),
('abc12', 35, 'Sell', 'Flat', '433 Giani Zail Singh Nagar', '300', '1', '3', 'Good Locality,24 hour electricity and water', 'Yes', 'India', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001');

-- --------------------------------------------------------

--
-- Table structure for table `propertyowner`
--

CREATE TABLE `propertyowner` (
  `id` varchar(100) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propertyowner`
--

INSERT INTO `propertyowner` (`id`, `fname`, `lname`, `email`, `contact`, `state`, `city`, `street`, `pincode`, `password`) VALUES
('', '', '', '', '', '', '', '', '', ''),
('Amit23', 'Amit ', 'Kaur', 'amir@gmail.com', '7382738262', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', 'harman'),
('Baljot0071', 'Baljot ', 'Singh', 'baljot@gmail.com', '9098789876', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', 'baljot'),
('har12', 'Harmanjot', 'Singh', 'singhharmanjot2k2@gmail.com', '8528295675', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', 'harmanjot'),
('Inderbir07', 'Inderbir ', 'Singh', 'inderbir@gmail.com', '9417403030', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', 'harman'),
('Ishu66', 'Ishpreet', 'Kaur', 'ishu6668@gmail.com', '9826179299', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', 'ishpreet'),
('jas98', 'Jasleen', 'Kaur', 'jasleen@gmail.com', '123455431', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', 'jasleen'),
('jashan09', 'Jashanjot', 'Singh', 'jashan@gmail.com', '9876543980', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', 'jashan'),
('Ravinder01', 'Ravinder', 'Singh', 'rctcrr@gmail.com', '1212121212', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', 'ravinder'),
('Sukhbir179', 'Sukhbir ', 'Singh', 'sukhbir@gmail.com', '1221214600', 'Punjab', 'Rupnagar', '433 Giani Zail Singh Nagar', '140001', 'sukhbir');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `propertyid` varchar(100) DEFAULT NULL,
  `visitorid` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`propertyid`, `visitorid`, `date`, `time`) VALUES
('6', 'har12', '2021-06-08', '15:09'),
('13', 'jashan09', '2021-08-19', '12:00'),
('9', 'jashan09', '2021-07-22', '11:00'),
('9', 'jashan09', '2021-07-22', '11:00'),
('11', 'jashan09', '2021-07-01', '21:45'),
('11', 'jashan09', '2021-07-01', '21:45'),
('11', 'jashan09', '2021-07-01', '21:45'),
('11', 'jashan09', '2021-07-01', '21:45'),
('22', 'jashan09', '2021-06-16', '06:15'),
('22', 'jashan09', '2021-06-16', '06:15'),
('25', 'jashan09', '2021-06-11', '21:41'),
('19', 'abc12', '2021-08-12', '15:21'),
('19', 'abc12', '2021-08-12', '15:21'),
('19', 'abc12', '2021-08-12', '15:21'),
('19', 'abc12', '2021-08-12', '15:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`srnum`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`srnum`);

--
-- Indexes for table `landlord`
--
ALTER TABLE `landlord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`propertyid`);

--
-- Indexes for table `propertyowner`
--
ALTER TABLE `propertyowner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `srnum` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `srnum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `propertyid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
