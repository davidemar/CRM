-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2016 at 01:47 AM
-- Server version: 5.5.41-log
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `classic models`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customerNumber` int(11) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `contactLN` varchar(50) NOT NULL,
  `contactFN` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) DEFAULT NULL,
  `postalCode` varchar(15) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `salesRepEmpNum` int(11) DEFAULT NULL,
  `creditLimit` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerNumber`, `customerName`, `contactLN`, `contactFN`, `phone`, `address`, `city`, `state`, `postalCode`, `country`, `salesRepEmpNum`, `creditLimit`) VALUES
(103, 'Altier', 'Schmitt', 'Carine ', '40.32.2555', '54, rue Royale', 'Nantes', NULL, '44000', 'France', 1370, 23100),
(112, 'Signal Gift Stores', 'King', 'Jean', '7025551838', '8489 Strong St.', 'Las Vegas', 'NV', '83030', 'USA', 1166, 78980),
(114, 'Australian Collectors, Co.', 'Ferguson', 'Peter', '03 9520 4555', '636 St Kilda Road', 'Melbourne', 'Victoria', '3004', 'Australia', 1611, 117300),
(121, 'Baane Mini Imports', 'Bergulfsen', 'Jonas ', '07-98 9555', 'Erling Skakkes gate 78', 'Stavern', NULL, '4110', 'Norway', 1504, 89870),
(128, 'Blauer See Auto, Co.', 'Keitel', 'Roland', '+49 69 66 90 2555', 'Lyonerstr. 34', 'Frankfurt', NULL, '60528', 'Germany', 1504, 65670),
(141, 'Euro+ Shopping Channel', 'Freyre', 'Diego ', '(91) 555 94 44', 'C/ Moralzarzal, 86', 'Madrid', NULL, '28034', 'Spain', 1370, 227600),
(181, 'Vitachrome Inc.', 'Frick', 'Michael', '2125551500', '2678 Kingston Rd.', 'NYC', 'NY', '10022', 'USA', 1286, 84040),
(363, 'Online Diecast Creations Co.', 'Young', 'Dorothy', '6035558647', '2304 Long Airport Avenue', 'Nashua', 'NH', '62005', 'USA', 1216, 114200);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `employeeNumber` int(11) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `extension` varchar(10) NOT NULL,
  `officeCode` varchar(10) NOT NULL,
  `reportsTo` int(11) DEFAULT NULL,
  `jobTitle` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employeeNumber`, `lastName`, `firstName`, `extension`, `officeCode`, `reportsTo`, `jobTitle`) VALUES
(1002, 'Murphy', 'Diane', 'x5800', '1', NULL, 'President'),
(1056, 'Patterson', 'Mary', 'x4611', '1', 1002, 'VP Sales'),
(1076, 'Firrelli', 'Jeff', 'x9273', '1', 1002, 'VP Marketing'),
(1088, 'Patterson', 'William', 'x4871', '6', 1056, 'Sales Manager (APAC)'),
(1102, 'Bondur', 'Gerard', 'x5408', '4', 1056, 'Sale Manager (EMEA)'),
(1143, 'Bow', 'Anthony', 'x5428', '1', 1056, 'Sales Manager (NA)'),
(1166, 'Thompson', 'Leslie', 'x4065', '1', 1143, 'Sales Rep'),
(1188, 'Firrelli', 'Julie', 'x2173', '2', 1143, 'Sales Rep'),
(1216, 'Patterson', 'Steve', 'x4334', '2', 1143, 'Sales Rep'),
(1286, 'Tseng', 'Foon Yue', 'x2248', '3', 1143, 'Sales Rep'),
(1323, 'Vanauf', 'George', 'x4102', '3', 1143, 'Sales Rep'),
(1337, 'Bondur', 'Loui', 'x6493', '4', 1102, 'Sales Rep'),
(1370, 'Hernandez', 'Gerard', 'x2028', '4', 1102, 'Sales Rep'),
(1401, 'Castillo', 'Pamela', 'x2759', '4', 1102, 'Sales Rep'),
(1501, 'Bott', 'Larry', 'x2311', '7', 1102, 'Sales Rep'),
(1504, 'Jones', 'Barry', 'x102', '7', 1102, 'Sales Rep'),
(1611, 'Fixter', 'Andy', 'x101', '1', 1002, 'Sales Rep');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE IF NOT EXISTS `offices` (
  `officeCode` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `addressLine1` varchar(50) NOT NULL,
  `addressLine2` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`officeCode`, `city`, `phone`, `addressLine1`, `addressLine2`, `state`, `country`, `zipcode`) VALUES
('1', 'San Francisco', '+1 650 219 4782', '100 Market Street', 'Suite 300', 'CA', 'USA', '94080'),
('2', 'Boston', '+1 215 837 0825', '1550 Court Place', 'Suite 102', 'MA', 'USA', '02107'),
('3', 'NYC', '+1 212 555 3000', '523 East 53rd Street', 'apt. 5A', 'NY', 'USA', '10022'),
('4', 'Paris', '+33 14 723 4404', '43 Rue Jouffroy D''abbans', NULL, NULL, 'France', '75017'),
('5', 'Tokyo', '+81 33 224 5000', '4-1 Kioicho', NULL, 'Chiyoda-Ku', 'Japan', '102-8578'),
('6', 'Sydney', '+61 2 9264 2451', '5-11 Wentworth Avenue', 'Floor #2', NULL, 'Australia', 'NSW 2010'),
('7', 'London', '+44 20 7877 2041', '25 Old Broad Street', 'Level 7', NULL, 'UK', 'EC2N 1HN');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `orderNumber` int(11) NOT NULL,
  `productCode` varchar(15) NOT NULL,
  `quantityOrdered` int(11) NOT NULL,
  `priceEach` double NOT NULL,
  `orderLineNumber` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderNumber`, `productCode`, `quantityOrdered`, `priceEach`, `orderLineNumber`) VALUES
(10106, 'S700_2610', 32, 113.9, 1),
(10106, 'S32_1268', 33, 65.35, 5),
(10106, 'S24_1937', 26, 71, 3),
(10106, 'S24_2300', 28, 107.23, 4),
(10106, 'S18_1749', 34, 81.1, 2),
(10105, 'S700_2610', 31, 60.72, 3),
(10105, 'S24_1937', 50, 75.47, 1),
(10105, 'S10_4757', 50, 127.84, 2),
(10104, 'S50_1514', 32, 53.31, 2),
(10104, 'S32_1268', 49, 56.55, 4),
(10104, 'S24_3969', 26, 106.45, 5),
(10104, 'S24_1937', 35, 52.02, 6),
(10104, 'S18_4027', 38, 119.2, 3),
(10104, 'S18_2248', 34, 131.44, 1),
(10103, 'S32_1268', 31, 92.46, 3),
(10103, 'S24_2300', 36, 107.34, 1),
(10103, 'S18_2248', 22, 58.34, 2),
(10102, 'S18_1367', 41, 43.13, 1),
(10102, 'S18_1342', 39, 95.55, 2),
(10101, 'S24_2022', 46, 44.35, 2),
(10101, 'S24_1937', 45, 32.53, 3),
(10101, 'S18_2795', 26, 167.06, 1),
(10101, 'S18_1749', 25, 108.06, 4),
(10100, 'S24_3969', 49, 35.29, 1),
(10100, 'S18_4409', 22, 75.46, 4),
(10100, 'S18_2248', 50, 55.09, 2),
(10100, 'S18_1749', 30, 136, 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderNumber` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `requiredDate` date NOT NULL,
  `shippedDate` date DEFAULT NULL,
  `status` varchar(15) NOT NULL,
  `comments` text,
  `customerNumber` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderNumber`, `orderDate`, `requiredDate`, `shippedDate`, `status`, `comments`, `customerNumber`) VALUES
(10106, '2003-02-17', '2003-02-24', '2003-02-21', 'Shipped', 'NULL', 363),
(10105, '2003-02-11', '2003-02-21', '2003-02-12', 'Shipped', 'NULL', 128),
(10100, '2003-01-06', '2003-01-13', '2003-01-10', 'Shipped', 'NULL', 363),
(10101, '2003-01-09', '2003-01-18', '2003-01-11', 'Shipped', 'Check on availability.', 128),
(10102, '2003-01-10', '2003-01-18', '2003-01-14', 'Shipped', 'NULL', 181),
(10103, '2003-01-29', '2003-02-07', '2003-02-02', 'Shipped', 'NULL', 121),
(10104, '2003-01-31', '2003-02-09', '2003-02-01', 'Shipped', 'NULL', 141);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `customerNumber` int(11) NOT NULL,
  `checkNumber` varchar(50) NOT NULL,
  `paymentDate` date NOT NULL,
  `amount` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`customerNumber`, `checkNumber`, `paymentDate`, `amount`) VALUES
(121, 'DB889831', '2003-02-16', 50218.95),
(121, 'FD317790', '2003-10-28', 1491.38),
(121, 'KI831359', '2004-11-04', 17876.32),
(121, 'MA302151', '2004-11-28', 34638.14),
(128, 'DI925118', '2003-01-28', 10549.01),
(128, 'FA465482', '2003-10-18', 24101.81),
(128, 'FH668230', '2004-03-24', 33820.62),
(128, 'IP383901', '2004-11-18', 7466.32),
(141, 'AU364101', '2003-07-19', 36251.03),
(141, 'DB583216', '2004-11-01', 36140.38),
(141, 'DL460618', '2005-05-19', 46895.48),
(141, 'HJ32686', '2004-01-30', 59830.55),
(141, 'ID10962', '2004-12-31', 116208.4),
(141, 'IN446258', '2005-03-25', 65071.26),
(141, 'JE105477', '2005-03-18', 120166.58),
(141, 'JN355280', '2003-10-26', 49539.37),
(141, 'JN722010', '2003-02-25', 40206.2),
(141, 'KT52578', '2003-12-09', 63843.55),
(141, 'MC46946', '2004-07-09', 35420.74),
(141, 'MF629602', '2004-08-16', 20009.53),
(141, 'NU627706', '2004-05-17', 26155.91),
(181, 'CM564612', '2004-04-25', 22602.36),
(181, 'GQ132144', '2003-01-30', 5494.78),
(181, 'OH367219', '2004-11-16', 44400.5),
(363, 'HL575273', '2004-11-17', 50799.69),
(363, 'IS232033', '2003-01-16', 10223.83),
(363, 'PN238558', '2003-12-05', 55425.77);

-- --------------------------------------------------------

--
-- Table structure for table `productlines`
--

CREATE TABLE IF NOT EXISTS `productlines` (
  `productLine` varchar(50) NOT NULL,
  `textDescription` varchar(400) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productlines`
--

INSERT INTO `productlines` (`productLine`, `textDescription`) VALUES
('Vintage Cars', 'Our Vintage Car models realistically portray automobiles produced from the early 1900s through the 1940s.'),
('Ships', 'The perfect holiday or anniversary gift for executives, clients, friends, and family. These handcrafted model ships are unique, stunning works of art'),
('Trains', 'Model trains are a rewarding hobby for enthusiasts of all ages. Whether you are looking for collectible wooden trains, electric streetcars or locomotives'),
('Planes', 'Unique, diecast airplane and helicopter replicas suitable for collections, as well as home, office or classroom decorations. Models contain stunning details'),
('Motorcycles', 'Our motorcycles are state of the art replicas of classic as well as contemporary motorcycle legends such as Harley Davidson, Ducati and Vespa.'),
('Classic Cars', 'Attention car enthusiasts: Make your wildest car ownership dreams come true. Whether you are looking for classic muscle cars, dream sports cars or movie-inspired miniatures'),
('Trucks and Buses', 'The Truck and Bus models are realistic replicas of buses and specialized trucks produced from the early 1920s to present.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productCode` varchar(15) NOT NULL,
  `productName` varchar(70) NOT NULL,
  `productLine` varchar(50) NOT NULL,
  `productVendor` varchar(50) NOT NULL,
  `productDescription` text NOT NULL,
  `quantityInStock` smallint(6) NOT NULL,
  `buyPrice` double NOT NULL,
  `MSRP` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productCode`, `productName`, `productLine`, `productVendor`, `productDescription`, `quantityInStock`, `buyPrice`, `MSRP`) VALUES
('S10_4757', '1972 Alfa Romeo GTA', 'Classic Cars', 'Motor City Art Classics', 'Features include: Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.', 3252, 85.68, 136),
('S18_1342', '1937 Lincoln Berline', 'Vintage Cars', 'Motor City Art Classics', 'Features opening engine cover, doors, trunk, and fuel filler cap. Color black', 8693, 60.62, 102.74),
('S18_1367', '1936 Mercedes-Benz 500K Special Roadster', 'Vintage Cars', 'Studio M Art Models', 'This 1:18 scale replica is constructed of heavy die-cast metal and has all the features of the original: working doors and rumble seat, independent spring suspension, detailed interior, working steering system', 8635, 24.26, 53.91),
('S18_1749', '1917 Grand Touring Sedan', 'Vintage Cars', 'Welly Diecast Productions', 'This 1:18 scale replica of the 1917 Grand Touring car has all the features you would expect from museum quality reproductions: all four doors and bi-fold hood opening, detailed engine and instrument panel', 2724, 86.7, 170),
('S18_2238', '1969 Harley Davidson Ultimate Chopper', 'Motorcycles', 'Min Lin Diecast', 'This replica features working kickstand, front suspension, gear-shift lever, footbrake lever, drive chain, wheels and steering. All parts are particularly delicate due to their precise scale and require special care and attention.', 7933, 48.81, 95.7),
('S18_2248', '1952 Alpine Renault 1300', 'Classic Cars', 'Classic Metal Creations', 'Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.', 7305, 98.58, 214.3),
('S18_2795', '1996 Moto Guzzi 1100i', 'Motorcycles', 'Highway 66 Mini Classics', 'Official Moto Guzzi logos and insignias, saddle bags located on side of motorcycle, detailed engine, working steering, working suspension, two leather seats, luggage rack, dual exhaust pipes, small saddle bag located on handle bars', 6625, 68.99, 118.94),
('S18_4027', '2003 Harley Davidson Eagle Drag Bike', 'Motorcycles', 'Red Start Diecast', 'Model features, official Harley Davidson logos and insignias, detachable rear wheelie bar, heavy diecast metal with resin parts, authentic multi-color tampo-printed graphics, separate engine drive belts, free-turning front fork, rotating tires', 2300, 72.5, 98.5),
('S18-4409', '1972 Alfa Romeo GTA', 'Classic Cars', 'Motor City Art Classics', 'Features include: Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.', 3252, 85.68, 136),
('S24-1937', '1962 LanciaA Delta 16V', 'Classic Cars', 'Second Gear Diecast', 'Features include: Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.', 6791, 103.42, 147.74),
('S24_2022', '1968 Ford Mustang', 'Classic Cars', 'Autoart Studio Design', 'Hood, doors and trunk all open to reveal highly detailed interior features. Steering wheel actually turns the front wheels. Color dark green.', 68, 95.34, 194.57),
('S24_2300', '2001 Ferrari Enzo', 'Classic Cars', 'Second Gear Diecast', 'Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.', 3619, 95.59, 207.8),
('S24_3969', '1958 Setra Bus', 'Trucks and Buses', 'Welly Diecast Productions', 'Model features 30 windows, skylights & glare resistant glass, working steering system, original logos', 1579, 77.9, 136.67),
('S32_1268', '2002 Harley Davidson', 'Motorcycles', 'Unimax Art Galleries', 'Official logos and insignias, saddle bags located on side of motorcycle, detailed engine, working steering, working suspension, two leather seats, luggage rack, dual exhaust pipes, small saddle bag located on handle bars', 9997, 66.27, 150.62),
('S50_1341', '1969 Corvair Monza', 'Classic Cars', 'Welly Diecast Productions', '1:18 scale die-cast about 10" long doors open, hood opens, trunk opens and wheels roll', 6906, 89.14, 151.08),
('S50_1514', '1968 Dodge Charger', 'Classic Cars', 'Welly Diecast Productions', '1:12 scale model of a 1968 Dodge Charger. Hood, doors and trunk all open to reveal highly detailed interior features. Steering wheel actually turns the front wheels. Color black', 9123, 75.16, 117.44),
('S700_2610', '1957 Chevy Pickup', 'Trucks and Buses', 'Exoto Designs', '1:12 scale die-cast about 20" long Hood opens, Rubber wheels', 6125, 55.7, 118.5);

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE IF NOT EXISTS `total` (
  `customernumber` int(11) DEFAULT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`customernumber`, `total`) VALUES
(121, 0.00),
(128, 0.00),
(141, 0.00),
(181, 0.00),
(363, 0.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
 ADD PRIMARY KEY (`customerNumber`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
 ADD PRIMARY KEY (`employeeNumber`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
 ADD PRIMARY KEY (`officeCode`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
 ADD PRIMARY KEY (`orderNumber`,`productCode`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`orderNumber`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
 ADD PRIMARY KEY (`customerNumber`,`checkNumber`);

--
-- Indexes for table `productlines`
--
ALTER TABLE `productlines`
 ADD PRIMARY KEY (`productLine`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`productCode`);
--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dname` varchar(15) NOT NULL,
  `dnumber` int(11) NOT NULL,
  `mgr_ssn` char(9) NOT NULL,
  `mgr_start_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dependent`
--

CREATE TABLE IF NOT EXISTS `dependent` (
  `essn` char(9) NOT NULL,
  `dependent_name` varchar(15) NOT NULL,
  `sex` char(1) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `relationship` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `dependent`
--
DELIMITER //
CREATE TRIGGER `dinsert` AFTER INSERT ON `dependent`
 FOR EACH ROW begin
	UPDATE EMPLOYEE SET
  	salary = salary + (salary*.10)
    	WHERE ssn = new.essn;
  end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dept_locations`
--

CREATE TABLE IF NOT EXISTS `dept_locations` (
  `dnumber` int(11) NOT NULL,
  `dlocation` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `fname` varchar(20) DEFAULT NULL,
  `minit` char(2) DEFAULT NULL,
  `lname` varchar(40) DEFAULT NULL,
  `ssn` char(9) NOT NULL,
  `bdate` date DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `super_ssn` char(9) DEFAULT NULL,
  `degree` varchar(50) NOT NULL,
  `dno` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `employee`
--
DELIMITER //
CREATE TRIGGER `employeeHistory` BEFORE DELETE ON `employee`
 FOR EACH ROW begin 
insert into employee_history
(Newfname,Newminit,Newlname,Newsalary,Newssn)
values(old.fname,old.minit,old.lname,old.salary,old.ssn);
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `pname` varchar(15) NOT NULL,
  `pnumber` int(11) NOT NULL,
  `plocation` varchar(15) DEFAULT NULL,
  `dnum` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `works_on`
--

CREATE TABLE IF NOT EXISTS `works_on` (
  `essn` char(9) NOT NULL,
  `pno` int(11) NOT NULL,
  `hours` decimal(3,1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`dnumber`), ADD FULLTEXT KEY `dname` (`dname`);

--
-- Indexes for table `dependent`
--
ALTER TABLE `dependent`
 ADD PRIMARY KEY (`essn`,`dependent_name`);

--
-- Indexes for table `dept_locations`
--
ALTER TABLE `dept_locations`
 ADD PRIMARY KEY (`dnumber`,`dlocation`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`ssn`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`pnumber`), ADD KEY `dnum` (`dnum`);

--
-- Indexes for table `works_on`
--
ALTER TABLE `works_on`
 ADD PRIMARY KEY (`essn`,`pno`), ADD KEY `pno` (`pno`);
--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`username`, `password`) VALUES
('david', 'david');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `Co-workers` varchar(10) NOT NULL,
  `Friends` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Co-workers`, `Friends`) VALUES
('yo', 'el'),
('yo', 'el');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `catid` varchar(15) NOT NULL DEFAULT '',
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`catid`, `name`, `email`, `phone`) VALUES
('Co-workers', 'asdasd', 'asdasdg@hotmail.com', '12335345'),
('Friends', 'david', 'blablabla@hotmail.co', '1231231231');

-- --------------------------------------------------------

--
-- Table structure for table `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `factura_id` varchar(6) NOT NULL DEFAULT '',
  `usuario_id` varchar(6) NOT NULL DEFAULT '',
  `orden_id` varchar(6) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orden`
--

CREATE TABLE IF NOT EXISTS `orden` (
  `orden_id` varchar(6) NOT NULL,
  `impuesto` decimal(3,2) DEFAULT NULL,
  `precio` decimal(8,2) DEFAULT NULL,
  `subtotal` decimal(9,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `cant` decimal(6,2) DEFAULT NULL,
  `total` decimal(9,2) DEFAULT NULL,
  `costo_envio` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `producto_id` varchar(6) NOT NULL,
  `precio` decimal(8,2) DEFAULT NULL,
  `ncompania` varchar(15) DEFAULT NULL,
  `enstock` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `proveedor_id` varchar(6) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `horario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `queja`
--

CREATE TABLE IF NOT EXISTS `queja` (
  `queja_id` varchar(6) DEFAULT NULL,
  `usuario_id` varchar(6) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `queja` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario_id` varchar(6) NOT NULL,
  `ncompania` varchar(15) DEFAULT NULL,
  `contrasena` varchar(14) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `pnombre` varchar(15) DEFAULT NULL,
  `papellido` varchar(15) DEFAULT NULL,
  `sapellido` varchar(15) DEFAULT NULL,
  `calle` varchar(10) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `colonia` varchar(10) DEFAULT NULL,
  `ciudad` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `ncompania`, `contrasena`, `email`, `pnombre`, `papellido`, `sapellido`, `calle`, `numero`, `colonia`, `ciudad`) VALUES
('lalo12', 'asda', 'lknasd', 'lalo@hotmail.com', 'lkansd', 'lknasd', 'lknasd', 'lknasd', 4, 'lknasd', 'lknasda'),
('mrilyn', 'cdg', 'hola', 'marilyn@hotmail.com', 'marilyn', 'garcia', 'medina', 'morelos', 898, 'morelos', 'aldama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `factura`
--
ALTER TABLE `factura`
 ADD PRIMARY KEY (`factura_id`,`usuario_id`,`orden_id`);

--
-- Indexes for table `orden`
--
ALTER TABLE `orden`
 ADD PRIMARY KEY (`orden_id`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
 ADD PRIMARY KEY (`producto_id`);

--
-- Indexes for table `proveedor`
--
ALTER TABLE `proveedor`
 ADD PRIMARY KEY (`proveedor_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`usuario_id`);
--
-- Database: `david`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--
-- in use(#1146 - Table 'david.usuarios' doesn't exist)
-- Error reading data: (#1146 - Table 'david.usuarios' doesn't exist)

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
