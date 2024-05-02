-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 04:24 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'SBL'),
(2, 'Dr. Recheweg'),
(3, 'ADEL'),
(4, 'Hapdco'),
(5, 'Herbal Hills'),
(6, 'Pantajali Divya'),
(7, 'Swadeshi'),
(8, 'Kerala Ayurveda');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_image` text NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES
(12, 2, '0', 0, 'iphone', '82d46b94d4c393d9d3d192b4063eb1cd.png', 1, 5000, 5000),
(17, 1, '0', 0, 'Samsung Duos', '82d46b94d4c393d9d3d192b4063eb1cd.png', 1, 5000, 5000),
(18, 3, '0', 0, '6s', '82d46b94d4c393d9d3d192b4063eb1cd.png', 1, 500, 500),
(19, 4, '0', 0, 'pad', '82d46b94d4c393d9d3d192b4063eb1cd.png', 1, 4, 4),
(52, 7, '0', 2, 'SBL Thuja Occidentalis Dilution 200 CH', 'dhgixu5orosn9fu7gc01.jpg', 3, 77, 231),
(53, 8, '0', 2, 'SBL Calcarea Phosphorica Biochemic Tablet 6X', 'qgibrwpj4zqirpmk4wwl.jpg', 1, 78, 78),
(54, 9, '0', 2, 'Dr. Reckeweg R5 Stomach and Digestion Drop', 'luil9of5ez9uikbljild.jpg', 1, 119, 119);

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `cashier_id` int(11) NOT NULL,
  `cashier_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` bigint(15) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`cashier_id`, `cashier_name`, `email`, `phone_no`, `address`) VALUES
(1, 'Varinder Gautam', 'varindergautam48@gmail.com', 7508068170, '7403, Amritsar');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Stomach Care'),
(3, 'Healthy Heart'),
(10, 'Respiratory Care'),
(11, 'Bone, Joint & Muscle Care'),
(12, 'Pain Relief');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_qty` int(100) NOT NULL,
  `p_status` varchar(100) NOT NULL,
  `trx_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `phar_id` int(11) NOT NULL,
  `phar_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone_no` bigint(15) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`phar_id`, `phar_name`, `email`, `username`, `phone_no`, `qualification`, `address`) VALUES
(1, 'karan sharma', 'karansharma@gmail.com', 'karansharma', 9958746252, 'MBBS', 'chandigarh');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist_login`
--

CREATE TABLE `pharmacist_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacist_login`
--

INSERT INTO `pharmacist_login` (`id`, `username`, `password`) VALUES
(1, 'karan sharma', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `brand_id` int(100) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_com` varchar(500) NOT NULL,
  `batch_no` varchar(30) NOT NULL,
  `man_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `product_keywords` text NOT NULL,
  `dose` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `brand_id`, `product_title`, `product_com`, `batch_no`, `man_date`, `exp_date`, `product_price`, `product_desc`, `product_image`, `quantity`, `product_keywords`, `dose`) VALUES
(7, 1, 1, 'SBL Thuja Occidentalis Dilution 200 CH', 'SBL Pvt Ltd', 'ABC123', '2018-04-22', '2018-04-21', 77, 'Acidity in tea drinkers. Averse to eating onions.Toothache from drinking tea. \r\nBloated feeling in the abdomen and flatulence\r\nSensation as if a alive creature is crawling inside the abdomen.\r\nConstipation, stools that recede back.', 'dhgixu5orosn9fu7gc01.jpg', '0', 'SBL Thuja Occidentalis Dilution 200 CH', 'As prescribed by physician. It can be taken along with allopathy medicines.'),
(8, 1, 1, 'SBL Calcarea Phosphorica Biochemic Tablet 6X', 'SBL Pvt Ltd', 'GHT765', '2016-03-18', '2021-01-01', 78, 'This tissue salt remedy has the basic elements required by the body physiologically that are calcium and phosphate. This remedy is specially indicated for complaints during dentition and bone problems. It is specially suited for children who have anaemia with weak digestion and cold extremities.', 'qgibrwpj4zqirpmk4wwl.jpg', '0', 'SBL Calcarea Phosphorica Biochemic Tablet 6X', 'As prescribed by physician. Can be taken along with allopathic medicines.'),
(9, 1, 2, 'Dr. Reckeweg R5 Stomach and Digestion Drop', 'Dr Reckeweg & Co', 'KHY951', '2017-10-30', '2021-01-01', 119, 'In some patients, sensitive to drugs, the pains may grow worse after a few days of treatment, which is the socalled primary reaction. In such cases it will be advisable to discontinue the treatment completely for 1-2 days. Resumption of treatment will result in continued improvement. In other cases follow treatment with intermissions, or reduce the dose, or give the drops on a full stomach. \r\n\r\nIt is characteristic in the use of Dr.ReckewegR5, to see the usual relapses decrease progressive lying raveness and frequency, until they disappear completely. ', 'luil9of5ez9uikbljild.jpg', '170', 'Dr. Reckeweg R5 Stomach and Digestion Drop', 'Generally 3times a day 10-15 drops in some water before meals.   After complete disappearance of the symptoms, in order to prevent relapses and to regularize the neuro-vegetative system, once a day 10-15 drops in some water before the main meal'),
(10, 1, 2, 'Dr. Reckeweg Thuja Occ Dilution 200 CH', 'Dr Reckeweg & Co', 'AST532', '2017-12-31', '2020-01-01', 123, 'It is a homeopathic remedy prepared from the Arbor vitae plant. It is indicated in the following cases \r\n\r\nComplaints that start after vaccination\r\n\r\nSkin\r\n\r\nViral Warts on the skin. \r\nWarts on genitals. Soft and fleshy, fungus like growths\r\nOutgrowths on the skin, especially on the covered parts.\r\nBrown spots on arms and hands.\r\nExcessive sweating on exposed parts of skin, eruptions on covered parts', 'o7swlarokaid0uewe8vc.jpg', '25', 'Dr. Reckeweg Thuja Occ Dilution 200 CH', 'As prescribed by physician. It can be taken along with allopathy medicines.'),
(11, 3, 3, 'ADEL Calcarea Fluorica Dilution 200 CH', 'Adel Pekana Germany', 'BCK356', '2017-10-27', '2018-02-02', 200, 'Calcarea Flourica Dilution\r\nFlour Spar or Flouride of Lime as it is commonly known, Calcarea Flourica is a very good remedy for all the glands that have become hard and are on the verge of oozing out pus. More of its therapeutic effects include', 'v7xgf9ogznviybi0yylo.png', '30', 'ADEL Calcarea Fluorica Dilution 200 CH', 'As prescribed by physician. Can be taken along with allopathic medicines.'),
(12, 3, 3, 'ADEL Gelsemium Sempervirens Dilution 200 CH', 'Adel Pekana Germany', 'KJY257', '2018-09-27', '2022-02-01', 122, 'Commonly known as Yellow Jasmine, gelsemium is a deep acting remedy that is indicated in people who are quite, like to stay alone, and dull. This remedy acts on especially the nervous and muscular systems of the body and helps in resolving following symptoms. Complaints that start after side effects of fear, bad news, exciting news, sudden emotions, sun, summer heat. Patient is always thirstless with all complaints, even during fever.', 'wfw6v9bckwv93txh9u96.png', '56', 'ADEL Gelsemium Sempervirens Dilution 200 CH', 'As prescribed by physician. Can be taken along with other allopathic medicines.');

-- --------------------------------------------------------

--
-- Table structure for table `recieved_payment`
--

CREATE TABLE `recieved_payment` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `trx_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(2, 'Varinder', 'Kumar', 'varindergautam48@gmail.com', '25f9e794323b453885f5181f1b624d0b', '7508068170', 'ASR', 'Batala Road');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`cashier_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`phar_id`);

--
-- Indexes for table `pharmacist_login`
--
ALTER TABLE `pharmacist_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `recieved_payment`
--
ALTER TABLE `recieved_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `cashier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `phar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pharmacist_login`
--
ALTER TABLE `pharmacist_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `recieved_payment`
--
ALTER TABLE `recieved_payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
