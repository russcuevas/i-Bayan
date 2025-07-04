-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2025 at 05:55 PM
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
(28, 'BARANGAY I', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:11:56', '2025-06-26 22:11:56'),
(29, 'BARANGAY II', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:12:02', '2025-06-26 22:12:02'),
(30, 'BARANGAY II-A', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:12:16', '2025-06-26 22:12:16'),
(31, 'BARANGAY III', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:12:25', '2025-06-26 22:12:25'),
(32, 'BARANGAY IV', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:12:36', '2025-06-26 22:12:36'),
(35, 'BARANGAY BAYORBOR', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:12:49', '2025-06-26 22:12:49'),
(36, 'BARANGAY BUBUYAN', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:13:16', '2025-06-26 22:13:16'),
(37, 'BARANGAY CALINGATAN', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:13:32', '2025-06-26 22:13:32'),
(38, 'BARANGAY KINALAGLAGAN', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:13:51', '2025-06-26 22:13:51'),
(39, 'BARANGAY LOOB', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:14:05', '2025-06-26 22:14:05'),
(40, 'BARANGAY LUMANGLIPA', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:14:13', '2025-06-26 22:14:13'),
(41, 'BARANGAY UPA', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:14:26', '2025-06-26 22:14:26'),
(42, 'BARANGAY MANGGAHAN', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:14:32', '2025-06-26 22:14:32'),
(43, 'BARANGAY NANGKAAN', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:14:44', '2025-06-26 22:14:44'),
(44, 'BARANGAY SAN SEBASTIAN', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:14:50', '2025-06-26 22:14:50'),
(45, 'BARANGAY SANTOL', 'mataasnakahoy', '4223', NULL, NULL, '2025-06-26 22:15:14', '2025-06-26 22:15:14');

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
(1, 'Zyrell Superadmin', 'Hidalgo', 22, '09495748301', 'zyrellhidalgo', 'zyrellhidalgo@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441');

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
-- Indexes for table `tbl_business_trade`
--
ALTER TABLE `tbl_business_trade`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_barangay`
--
ALTER TABLE `tbl_barangay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_business_trade`
--
ALTER TABLE `tbl_business_trade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
