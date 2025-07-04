-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2025 at 05:33 AM
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
-- Database: `ibayandatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `barangay_id`, `username`, `password`, `email`, `fullname`, `gender`, `contact_number`, `position`, `status`, `created_at`, `updated_at`) VALUES
(7, 37, 'zyrellcali', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'zyrellhidalgo0@gmail.com', 'Zyrell Hidalgo', 'Female', '09495748300', 'staff', 'online', '2025-06-27 10:53:38', '2025-06-27 10:53:38'),
(8, 36, 'shainebubuyan', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'shainebubuyan@gmail.com', 'Shaine Inciong', 'Female', '09495748300', 'barangay official', 'offline', '2025-06-27 15:53:04', '2025-06-27 15:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barangay`
--

CREATE TABLE `tbl_barangay` (
  `id` int(11) NOT NULL,
  `barangay_name` varchar(255) NOT NULL,
  `municipality` varchar(100) NOT NULL DEFAULT 'mataasnakahoy',
  `zip` char(4) NOT NULL DEFAULT '4223',
  `mission` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_barangay`
--

INSERT INTO `tbl_barangay` (`id`, `barangay_name`, `municipality`, `zip`, `mission`, `vision`, `created_at`, `updated_at`) VALUES
(28, 'i', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:11:56', '2025-06-28 01:00:07'),
(29, 'ii', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:12:02', '2025-06-28 01:00:02'),
(30, 'ii-a', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:12:16', '2025-06-28 00:59:56'),
(31, 'iii', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:12:25', '2025-06-28 00:59:51'),
(32, 'iv', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:12:36', '2025-06-28 00:59:43'),
(35, 'bayorbor', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:12:49', '2025-06-28 01:00:12'),
(36, 'bubuyan', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:13:16', '2025-06-28 00:32:38'),
(37, 'calingatan', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:13:32', '2025-06-28 00:25:05'),
(38, 'kinalaglagan', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:13:51', '2025-06-28 00:58:27'),
(39, 'loob', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:14:05', '2025-06-28 00:46:32'),
(40, 'lumanglipa', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:14:13', '2025-06-28 00:46:25'),
(41, 'upa', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:14:26', '2025-06-28 00:45:35'),
(42, 'manggahan', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:14:32', '2025-06-28 00:46:17'),
(43, 'nangkaan', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:14:44', '2025-06-28 00:46:02'),
(44, 'san-sebastian', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:14:50', '2025-06-28 14:21:32'),
(45, 'santol', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:15:14', '2025-06-28 00:45:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barangay_officials`
--

CREATE TABLE `tbl_barangay_officials` (
  `id` int(11) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `barangay` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_barangay_officials`
--

INSERT INTO `tbl_barangay_officials` (`id`, `profile_picture`, `fullname`, `position`, `barangay`, `created_at`, `updated_at`) VALUES
(3, 'profile_picture/official_6862a7459dca19.82195854.jpg', 'Sample Cali', 'Sample Cali Captain', 37, '2025-06-28 14:11:38', '2025-06-30 23:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business_trade`
--

CREATE TABLE `tbl_business_trade` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_business_trade`
--

INSERT INTO `tbl_business_trade` (`id`, `code`, `name`, `price`, `created_at`, `updated_at`) VALUES
(7, 'BT0001', 'Water Refilling Stations', '1000.00', '2025-06-26 14:23:30', '2025-06-26 14:23:30'),
(8, 'BT0002', 'Water Retailing Stations', '500.00', '2025-06-26 14:23:40', '2025-06-26 14:23:40'),
(9, 'BT0003', 'Upholstery Shops', '1000.00', '2025-06-26 14:23:51', '2025-06-26 14:23:51'),
(10, 'BT0004', 'Trucking Services', '1000.00', '2025-06-26 14:24:06', '2025-06-26 14:24:06'),
(11, 'BT0005', 'Talipapa Sarisari Store', '1000.00', '2025-06-26 14:24:18', '2025-06-26 14:24:18'),
(12, 'BT0006', 'Talipapa Meatshop', '800.00', '2025-06-26 14:24:29', '2025-06-26 14:24:29'),
(13, 'BT0007', 'Talipapa Fish & Vegetable Store', '800.00', '2025-06-26 14:24:42', '2025-06-26 14:24:42'),
(14, 'BT0008', 'Talent Centers', '2000.00', '2025-06-26 14:24:52', '2025-06-26 14:24:52'),
(15, 'BT0009', 'Tailoring Shops', '1000.00', '2025-06-26 14:24:58', '2025-06-26 14:24:58'),
(16, 'BT0010', 'Swimming Pools/Resorts', '2000.00', '2025-06-26 14:25:09', '2025-06-26 14:25:09'),
(17, 'BT0011', 'STL', '2000.00', '2025-06-26 14:25:13', '2025-06-26 14:25:13'),
(18, 'BT0012', 'Shoe Repair Shops', '800.00', '2025-06-26 14:25:21', '2025-06-26 14:25:21'),
(19, 'BT0013', 'Sari-Sari Store', '500.00', '2025-06-26 14:25:29', '2025-06-26 14:25:29'),
(20, 'BT0014', 'Sari-Sari Store with Liquor and Cigarettes', '1000.00', '2025-06-26 14:25:42', '2025-06-26 14:25:42'),
(21, 'BT0015', 'Retailer', '1000.00', '2025-06-26 14:28:18', '2025-06-26 14:28:18'),
(22, 'BT0016', 'Restaurants & Eateries Establishments', '1000.00', '2025-06-26 14:28:36', '2025-06-26 14:28:36'),
(23, 'BT0017', 'Repair Shops for Mechanical & Electrical Devices', '1000.00', '2025-06-26 14:28:47', '2025-06-26 14:28:47'),
(24, 'BT0018', 'Refrigeration & Air-conditioning Shops', '1000.00', '2025-06-26 14:29:02', '2025-06-26 14:29:02'),
(25, 'BT0019', 'Reccaping Shops', '1000.00', '2025-06-26 14:29:11', '2025-06-26 14:29:11'),
(26, 'BT0020', 'Realtor', '1000.00', '2025-06-26 14:43:40', '2025-06-26 14:43:40'),
(27, 'BT0021', 'Radiator Repair Shops', '1000.00', '2025-06-26 14:43:54', '2025-06-26 14:43:54'),
(28, 'BT0022', 'PUJ/PUT Operator', '200.00', '2025-06-26 14:45:50', '2025-06-26 14:45:50'),
(29, 'BT0023', 'Printing & Bookbinding Shops', '500.00', '2025-06-26 14:46:02', '2025-06-26 14:46:02'),
(30, 'BT0024', 'Photographic Studios', '1000.00', '2025-06-26 14:46:12', '2025-06-26 14:46:12'),
(31, 'BT0025', 'Pawnshops', '2000.00', '2025-06-26 14:46:25', '2025-06-26 14:46:25'),
(32, 'BT0026', 'Parking Lots Establishments', '1000.00', '2025-06-26 14:46:42', '2025-06-26 14:46:42'),
(33, 'BT0027', 'Packaging', '2000.00', '2025-06-26 14:46:48', '2025-06-26 14:46:48'),
(34, 'BT0028', 'Optical Clinic', '1000.00', '2025-06-26 14:46:53', '2025-06-26 14:46:53'),
(35, 'BT0029', 'Motor Repainting Shops', '1000.00', '2025-06-26 14:47:01', '2025-06-26 14:47:01'),
(36, 'BT0030', 'Money Shops/Money Changer', '1500.00', '2025-06-26 14:47:12', '2025-06-26 14:47:12'),
(37, 'BT0031', 'Memorial Services', '2000.00', '2025-06-26 14:47:24', '2025-06-26 14:47:24'),
(38, 'BT0032', 'Medical Services', '800.00', '2025-06-26 14:47:34', '2025-06-26 14:47:34'),
(39, 'BT0033', 'Medical Foundation', '500.00', '2025-06-26 14:47:43', '2025-06-26 14:47:43'),
(40, 'BT0034', 'Medical Distributor', '500.00', '2025-06-26 14:47:55', '2025-06-26 14:47:55'),
(41, 'BT0035', 'Master Plumbing Shops', '1000.00', '2025-06-26 14:48:00', '2025-06-26 14:48:00'),
(42, 'BT0036', 'Machine Shop/Manufacturer', '1000.00', '2025-06-26 14:48:11', '2025-06-26 14:48:11'),
(43, 'BT0037', 'LPG Refilling Station', '1000.00', '2025-06-26 14:48:17', '2025-06-26 14:48:17'),
(44, 'BT0038', 'Litographic Shops', '1000.00', '2025-06-26 14:48:25', '2025-06-26 14:48:25'),
(45, 'BT0039', 'Lending Investor', '1000.00', '2025-06-26 14:48:30', '2025-06-26 14:48:30'),
(46, 'BT0040', 'Lamination Establishment', '1000.00', '2025-06-26 14:48:36', '2025-06-26 14:48:36'),
(47, 'BT0041', 'Key Duplicating Shops', '500.00', '2025-06-26 14:48:51', '2025-06-26 14:48:51'),
(48, 'BT0042', 'Junk Shops', '1000.00', '2025-06-26 14:48:54', '2025-06-26 14:48:54'),
(49, 'BT0043', 'Iron Works', '1000.00', '2025-06-26 14:48:59', '2025-06-26 14:48:59'),
(50, 'BT0044', 'Instruments & Apparatus', '1000.00', '2025-06-26 14:49:06', '2025-06-26 14:49:06'),
(51, 'BT0045', 'Installing Telecommunications Network', '2000.00', '2025-06-26 14:49:24', '2025-06-26 14:49:24'),
(52, 'BT0046', 'House & Sign Painting Shops', '1000.00', '2025-06-26 14:49:35', '2025-06-26 14:49:35'),
(53, 'BT0047', 'Hotel, Motels, & Lodging Houses', '5000.00', '2025-06-26 14:49:51', '2025-06-26 14:49:51'),
(54, 'BT0048', 'Hospital', '5000.00', '2025-06-26 14:49:58', '2025-06-26 14:49:58'),
(55, 'BT0049', 'Hardware', '4000.00', '2025-06-26 14:50:02', '2025-06-26 14:50:02'),
(56, 'BT0050', 'General Merchandise', '500.00', '2025-06-26 14:50:08', '2025-06-26 14:50:08'),
(57, 'BT0051', 'Gasoline Station', '2500.00', '2025-06-26 14:50:12', '2025-06-26 14:50:12'),
(58, 'BT0052', 'Garments', '1000.00', '2025-06-26 14:50:16', '2025-06-26 14:50:16'),
(59, 'BT0053', 'Furniture Shops', '1000.00', '2025-06-26 14:50:22', '2025-06-26 14:50:22'),
(60, 'BT0054', 'Funeral Parlors', '2000.00', '2025-06-26 14:50:29', '2025-06-26 14:50:29'),
(61, 'BT0055', 'Foundation', '1000.00', '2025-06-26 14:50:32', '2025-06-26 14:50:32'),
(62, 'BT0056', 'Food Processing Shops', '1000.00', '2025-06-26 14:50:37', '2025-06-26 14:50:37'),
(63, 'BT0057', 'Flower Shops', '500.00', '2025-06-26 14:50:42', '2025-06-26 14:50:42'),
(64, 'BT0058', 'Fast Food', '1000.00', '2025-06-26 14:50:46', '2025-06-26 14:50:46'),
(65, 'BT0059', 'Development/Research Center', '2000.00', '2025-06-26 14:50:52', '2025-06-26 14:50:52'),
(66, 'BT0060', 'Dress Shops', '500.00', '2025-06-26 14:50:57', '2025-06-26 14:50:57'),
(67, 'BT0061', 'Dental Clinics', '1000.00', '2025-06-26 14:51:06', '2025-06-26 14:51:06'),
(68, 'BT0062', 'Cooperatives', '500.00', '2025-06-26 14:51:11', '2025-06-26 14:51:11'),
(69, 'BT0063', 'Convenient Stores', '5000.00', '2025-06-26 14:51:17', '2025-06-26 14:51:17'),
(70, 'BT0064', 'Computer Shop', '1000.00', '2025-06-26 14:51:22', '2025-06-26 14:51:22'),
(71, 'BT0065', 'Catering', '1000.00', '2025-06-26 14:51:26', '2025-06-26 14:51:26'),
(72, 'BT0066', 'Brokerage', '500.00', '2025-06-26 14:51:50', '2025-06-26 14:51:50'),
(73, 'BT0067', 'Brake & Clutch Bonding', '500.00', '2025-06-26 14:52:00', '2025-06-26 14:52:00'),
(74, 'BT0068', 'Beauty Parlors', '1000.00', '2025-06-26 14:52:06', '2025-06-26 14:52:06'),
(75, 'BT0069', 'Barber Shop', '1000.00', '2025-06-26 14:52:11', '2025-06-26 14:52:11'),
(76, 'BT0070', 'Bakery or Bakeshops', '1000.00', '2025-06-26 14:52:17', '2025-06-26 14:52:17'),
(77, 'BT0071', 'Auto Parts Supply', '1000.00', '2025-06-26 14:52:30', '2025-06-26 14:52:30'),
(78, 'BT0072', 'Agricultural Products', '500.00', '2025-06-26 14:52:45', '2025-06-26 14:52:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_residents`
--

CREATE TABLE `tbl_residents` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `suffix` varchar(20) DEFAULT NULL,
  `gender` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `birthplace` varchar(255) NOT NULL,
  `is_working` varchar(255) NOT NULL,
  `school` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `barangay_address` int(11) NOT NULL,
  `purok` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `valid_id` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `is_online` enum('offline','online') DEFAULT 'offline',
  `remarks` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_residents`
--

INSERT INTO `tbl_residents` (`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `gender`, `civil_status`, `date_of_birth`, `birthplace`, `is_working`, `school`, `occupation`, `barangay_address`, `purok`, `username`, `password`, `email`, `valid_id`, `phone_number`, `is_approved`, `is_online`, `remarks`, `created_at`, `updated_at`) VALUES
(3, 'Sample Calingatan', 'Resident', 'Cuevas', '', 'Male', 'Single', '2001-12-26', 'Granja Lipa City', '1', '', 'Software Developer', 37, '4', 'samplecaliresident', '$2y$10$ilo6RnLxgFGO88PdojqFCugaT1ripJCC/JUL6JDsEUrgzC16DyLre', 'samplecali@gmail.com', 'public/valid_id/1751298398_me.jpg', '09495748300', 0, 'offline', NULL, '2025-06-30 09:46:38', '2025-07-04 02:13:35'),
(6, 'Sample', 'Bubuyan', 'Resident', '', 'Male', 'Single', '2001-12-26', 'Bubuyan', '2', 'La Purisima Concepcion Academy', '', 36, '4', 'samplebubuyanresident', '$2y$10$5JMa9DJkaUSxE0GqPWXAluIpNSdDtOK25s2IU03rprqBFkLBGHieG', 'russelcuevas01@gmail.com', 'public/valid_id/1751299142_me.jpg', '09495748302', 0, 'offline', NULL, '2025-06-30 09:59:02', '2025-07-04 03:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_superadmin`
--

CREATE TABLE `tbl_superadmin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_superadmin`
--

INSERT INTO `tbl_superadmin` (`id`, `first_name`, `last_name`, `age`, `phone_number`, `username`, `email`, `password`) VALUES
(1, 'Zyrell Superadmin', 'Hidalgo', 22, '09495748301', 'zyrellsuperadmin', 'zyrellhidalgo@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `tbl_barangay`
--
ALTER TABLE `tbl_barangay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_barangay_officials`
--
ALTER TABLE `tbl_barangay_officials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay` (`barangay`);

--
-- Indexes for table `tbl_business_trade`
--
ALTER TABLE `tbl_business_trade`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `tbl_residents`
--
ALTER TABLE `tbl_residents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_barangay` (`barangay_address`);

--
-- Indexes for table `tbl_superadmin`
--
ALTER TABLE `tbl_superadmin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_barangay`
--
ALTER TABLE `tbl_barangay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_barangay_officials`
--
ALTER TABLE `tbl_barangay_officials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_business_trade`
--
ALTER TABLE `tbl_business_trade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbl_residents`
--
ALTER TABLE `tbl_residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_superadmin`
--
ALTER TABLE `tbl_superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD CONSTRAINT `tbl_admin_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `tbl_barangay` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_barangay_officials`
--
ALTER TABLE `tbl_barangay_officials`
  ADD CONSTRAINT `tbl_barangay_officials_ibfk_1` FOREIGN KEY (`barangay`) REFERENCES `tbl_barangay` (`id`);

--
-- Constraints for table `tbl_residents`
--
ALTER TABLE `tbl_residents`
  ADD CONSTRAINT `fk_barangay` FOREIGN KEY (`barangay_address`) REFERENCES `tbl_barangay` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
