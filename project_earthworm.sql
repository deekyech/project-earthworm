-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 08:33 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_earthworm`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `line_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `line_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pincode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `landmark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `full_name`, `line_1`, `line_2`, `pincode`, `landmark`, `city`, `state`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `additional_description`) VALUES
(1, 'Consuelo View', '555 Kshlerin Mills', 'Circles', '12312', 'bury', 'Kuphalburgh', 'Minnesota', 1, 2, '2021-04-17 13:00:50', '2021-05-07 00:02:28', NULL, NULL),
(2, 'Marjolaine Union', '9204 Emmalee Lodge', 'Run', '01112', 'mouth', 'Erinfort', 'Missouri', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(3, 'Pagac Pike', '5591 Crist Summit', 'Ramp', '00324', 'view', 'Nikitaberg', 'Michigan', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(4, 'Emery Row', '5662 McDermott Pine', 'Harbors', '17307-5742', 'town', 'Ethylport', 'Georgia', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(5, 'Brown Hill', '45415 Kunde Estates Apt. 426', 'Radial', '99313-9761', 'chester', 'South Brisa', 'Maryland', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(6, 'Caterina Place', '47037 Dicki Mountains', 'Cliff', '25224-7169', 'berg', 'Port Brandymouth', 'Oregon', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(7, 'Asia Mountain', '22856 Senger Parkway', 'Fords', '22503-7404', 'haven', 'Schmittstad', 'North Carolina', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(8, 'Cleve Cliffs', '41705 Chandler Mall', 'Grove', '29088', 'view', 'Milfordview', 'Texas', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(9, 'Rafaela Shoals', '87978 Eliezer Route', 'Parks', '61410', 'borough', 'West Monroebury', 'West Virginia', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(10, 'Issac Prairie', '22735 Fay Mission', 'Circles', '32692-9717', 'berg', 'Luluport', 'Nevada', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(11, 'Kristina Throughway', '91127 Madelyn Road Apt. 844', 'Mountains', '75705-6852', 'side', 'West Mayside', 'Virginia', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(12, 'Heller Mills', '4394 Rodriguez Ports', 'Freeway', '52720', 'fort', 'Tommieborough', 'Tennessee', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(13, 'Jennings Dam', '84240 Kautzer Stravenue Apt. 887', 'Crossing', '88923', 'furt', 'East Marinamouth', 'Delaware', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(14, 'Cole Flats', '23996 Alvera Spring Suite 390', 'Landing', '93684-1202', 'view', 'Jabariberg', 'California', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(15, 'Elda Islands', '581 Linda Squares', 'Mountain', '14341-3904', 'furt', 'Josueland', 'Montana', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(16, 'Patro Mansion', '802 Patro Mansion', 'Patro lane', '400610', 'Near Patro Villa', 'Kalyan', 'Maharashtra', 2, NULL, '2021-05-07 00:03:20', '2021-05-07 00:03:30', '2021-05-07 00:03:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `credit_ledgers`
--

CREATE TABLE `credit_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `investor_id` bigint(20) UNSIGNED NOT NULL,
  `fundraiser_ledger_id` bigint(20) UNSIGNED NOT NULL,
  `payment_transaction_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `credit_ledgers`
--

INSERT INTO `credit_ledgers` (`id`, `investor_id`, `fundraiser_ledger_id`, `payment_transaction_id`, `amount`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `additional_description`) VALUES
(1, 2, 2, 1, 500, 6, NULL, '2021-04-28 06:45:31', '2021-04-28 06:45:31', NULL, NULL),
(2, 2, 1, 2, 5000, 6, NULL, '2021-04-28 06:47:31', '2021-04-28 06:47:31', NULL, NULL),
(3, 2, 5, 3, 5000, 6, NULL, '2021-05-07 00:00:19', '2021-05-07 00:00:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `crop_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`id`, `crop_name`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `additional_description`) VALUES
(1, 'Rice', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(2, 'Wheat', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(3, 'Millet', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(4, 'Pulses', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(5, 'Cotton', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(6, 'Tea', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(7, 'Apple', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(8, 'Mango', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(9, 'Stem Vegetables', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(10, 'Leaf Vegetables', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `crop_types`
--

CREATE TABLE `crop_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `crop_id` bigint(20) UNSIGNED NOT NULL,
  `crop_type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `crop_types`
--

INSERT INTO `crop_types` (`id`, `crop_id`, `crop_type_name`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `additional_description`) VALUES
(1, 1, 'Arborio Rice', 1, 1, '2021-04-17 13:00:50', '2021-05-07 04:07:00', NULL, NULL),
(2, 1, 'Basmati Rice', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(3, 1, 'Jasmine Rice', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(4, 1, 'Brown Rice', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(5, 1, 'Black Rice', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(6, 1, 'Red Cargo', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(7, 1, 'Parboiled Rice', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(8, 2, 'Common Wheat', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(9, 2, 'Sharmasaar', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(10, 2, 'Vartanee', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(11, 2, 'Durum', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(12, 2, 'Ahankar', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(14, 3, 'Bajra', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(15, 3, 'Jawar', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(16, 3, 'Raagee', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(17, 3, 'Bari', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(18, 3, 'Kangni', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(19, 3, 'Kodra', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(21, 4, 'Masoor Dal', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(22, 4, 'Toor Dal', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(23, 4, 'Chori', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(24, 4, 'Dry Peas', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(25, 4, 'Kabuuli Chana', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(26, 4, 'Matar', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(27, 5, 'Pima Kapas', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(28, 5, 'Sooti Kapada', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(29, 5, 'Misr Kapas', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(31, 6, 'Black Tea', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(32, 6, 'Green Tea', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(33, 6, 'Oolong Tea', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(34, 6, 'Fermented Tea', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(35, 6, 'Yellow Tea', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(36, 7, 'Green Apple', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(37, 7, 'Pink Pearl', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(38, 7, 'Honey Crisp', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(39, 7, 'Cortland', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(40, 8, 'Alphonso', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(41, 8, 'Kesar', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(42, 8, 'Rajapuri', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(43, 8, 'Vanraj', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(44, 9, 'Asparagus', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(45, 9, 'Brocoli', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(46, 9, 'Kohlrabi', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(48, 10, 'Spinach', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(49, 10, 'Cabbage', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(50, 10, 'Beet Greens', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(51, 10, 'Watercress', 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(52, 4, 'Bambara Beans', 20210506010524, NULL, NULL, NULL, NULL, NULL),
(53, 4, 'Arahar', 20210506010524, NULL, NULL, NULL, NULL, NULL),
(54, 7, 'Winsap', 20210506010821, NULL, NULL, NULL, NULL, NULL),
(55, 7, 'Opal', 20210506010821, NULL, NULL, NULL, NULL, NULL),
(56, 8, 'Jamadar', 20210506010953, NULL, NULL, NULL, NULL, NULL),
(57, 8, 'Totapuri', 20210506010953, NULL, NULL, NULL, NULL, NULL),
(58, 8, 'Neelum', 20210506011033, NULL, NULL, NULL, NULL, NULL),
(59, 8, 'Dashehari', 20210506011033, NULL, NULL, NULL, NULL, NULL),
(60, 8, 'Langra', 20210506011053, NULL, NULL, NULL, NULL, NULL),
(61, 10, 'Romaine Lettuce', 20210506011256, NULL, NULL, NULL, NULL, NULL),
(62, 10, 'Collard Greens', 20210506011256, NULL, NULL, NULL, NULL, NULL),
(63, 6, 'Tea Type 1', 1, 1, '2021-05-07 04:06:29', '2021-05-07 04:06:42', '2021-05-07 04:06:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expense_ledgers`
--

CREATE TABLE `expense_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fundraiser_ledger_id` bigint(20) UNSIGNED NOT NULL,
  `expense_type_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_image_path` longtext COLLATE utf8_unicode_ci,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` longtext COLLATE utf8_unicode_ci,
  `expense_ledger_status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `approved_amount` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `expense_ledgers`
--

INSERT INTO `expense_ledgers` (`id`, `fundraiser_ledger_id`, `expense_type_id`, `user_id`, `amount`, `notes`, `bill_image_path`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `additional_description`, `expense_ledger_status_id`, `approved_amount`) VALUES
(1, 1, 2, 2, 5200, 'Notes', 'expenseimages/1619955707.png', 2, 2, '2021-04-17 13:08:49', '2021-04-17 14:44:28', NULL, NULL, 1, NULL),
(2, 1, 4, 2, 20000, 'Notes', 'expenseimages/1619955707.png', 2, 2, '2021-04-17 15:03:48', '2021-04-17 15:06:00', NULL, NULL, 2, 10000),
(3, 1, 7, 2, 23000, 'Aur notes', 'expenseimages/1619955707.png', 2, 2, '2021-04-17 15:04:07', '2021-04-17 15:06:26', NULL, NULL, 3, NULL),
(4, 1, 3, 2, 2150, 'Notes', 'expenseimages/1619955707.png', 2, 2, '2021-04-17 15:39:16', '2021-05-07 00:06:10', NULL, NULL, 1, NULL),
(5, 3, 4, 2, 5000, 'Notes', 'expenseimages/1619955707.png', 2, 2, '2021-05-02 06:11:47', '2021-05-02 06:12:42', NULL, NULL, 1, NULL),
(6, 4, 3, 2, 2000, 'Ploughing', 'expenseimages/1620365739.jpg', 2, 2, '2021-05-07 00:05:39', '2021-05-07 00:06:37', NULL, NULL, 2, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `expense_ledger_status`
--

CREATE TABLE `expense_ledger_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expense_ledger_status_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expense_ledger_status`
--

INSERT INTO `expense_ledger_status` (`id`, `expense_ledger_status_name`, `created_at`, `updated_at`) VALUES
(1, 'Approved', NULL, NULL),
(2, 'Approved Partially', NULL, NULL),
(3, 'Rejected', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expense_type`
--

CREATE TABLE `expense_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expense_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `upper_limit_amount` double NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `expense_type`
--

INSERT INTO `expense_type` (`id`, `expense_name`, `upper_limit_amount`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `additional_description`) VALUES
(1, 'Expense Type 1', 5000, 1, NULL, NULL, NULL, NULL, NULL),
(2, 'Expense Type 2', 10000, 1, NULL, NULL, NULL, NULL, NULL),
(3, 'Expense Type 3', 15000, 1, NULL, NULL, NULL, NULL, NULL),
(4, 'Expense Type 4', 20000, 1, NULL, NULL, NULL, NULL, NULL),
(5, 'Expense Type 5', 25000, 1, NULL, NULL, NULL, NULL, NULL),
(6, 'Expense Type 6', 30000, 1, NULL, NULL, NULL, NULL, NULL),
(7, 'Expense Type 7', 35000, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `experience` int(10) UNSIGNED DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `user_id`, `experience`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `additional_description`) VALUES
(1, 2, 5, 1, 1, NULL, NULL, NULL, NULL),
(2, 3, 3, 1, 1, NULL, NULL, NULL, NULL),
(3, 4, 8, 1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `farming_addresses`
--

CREATE TABLE `farming_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `farmer_id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `land_area` double NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `farming_addresses`
--

INSERT INTO `farming_addresses` (`id`, `farmer_id`, `address_id`, `land_area`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `additional_description`) VALUES
(1, 1, 1, 7095, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(2, 1, 2, 5165, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(3, 2, 3, 8849, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(4, 2, 4, 8319, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(5, 3, 5, 8249, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(6, 3, 6, 1570, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(7, 1, 7, 2301, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(8, 1, 16, 2000, 2, NULL, '2021-05-07 00:03:20', '2021-05-07 00:03:30', '2021-05-07 00:03:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `farming_histories`
--

CREATE TABLE `farming_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `farmer_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `farming_address_id` bigint(20) UNSIGNED NOT NULL,
  `crop_type_id` bigint(20) UNSIGNED NOT NULL,
  `quantity_in_kg` double NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `farming_histories`
--

INSERT INTO `farming_histories` (`id`, `farmer_id`, `start_date`, `end_date`, `farming_address_id`, `crop_type_id`, `quantity_in_kg`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `additional_description`) VALUES
(1, 2, '2011-09-12', '2013-02-09', 3, 44, 4209, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(2, 2, '2015-02-22', '2016-10-30', 3, 35, 4522, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(3, 3, '2020-11-28', '2022-08-01', 5, 12, 1011, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(4, 2, '2016-03-02', '2017-08-31', 4, 16, 2214, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(5, 2, '2017-01-11', '2019-01-11', 4, 23, 4113, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(6, 1, '2013-01-22', '2013-10-30', 7, 17, 2899, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(7, 2, '2018-03-10', '2018-03-17', 3, 32, 4652, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(10, 1, '2016-11-20', '2018-07-15', 7, 43, 3208, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(11, 3, '2016-11-03', '2017-04-11', 5, 19, 2262, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(12, 1, '2015-04-02', '2016-07-21', 7, 46, 4800, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(13, 1, '2015-04-06', '2015-10-20', 7, 38, 2650, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(14, 1, '2020-07-01', '2021-05-03', 1, 49, 3027, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(15, 1, '2019-12-09', '2020-04-18', 2, 3, 3499, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(16, 2, '2016-12-31', '2018-12-04', 3, 38, 2845, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(18, 1, '2014-02-04', '2014-03-03', 7, 33, 1171, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(19, 2, '2017-01-02', '2018-06-30', 4, 3, 4676, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(20, 2, '2015-07-26', '2016-02-17', 4, 35, 1652, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `farming_status`
--

CREATE TABLE `farming_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `farming_status`
--

INSERT INTO `farming_status` (`id`, `status_name`, `created_at`, `updated_at`) VALUES
(1, 'Preparation', NULL, NULL),
(2, 'Sowing', NULL, NULL),
(3, 'Fertilization', NULL, NULL),
(4, 'Irrigation', NULL, NULL),
(5, 'Harvesting', NULL, NULL),
(6, 'Storage', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fundraiser_ledgers`
--

CREATE TABLE `fundraiser_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `farmer_id` bigint(20) UNSIGNED NOT NULL,
  `crop_type_id` bigint(20) UNSIGNED NOT NULL,
  `farming_address_id` bigint(20) UNSIGNED NOT NULL,
  `farming_status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` double NOT NULL,
  `share_percentage` int(11) NOT NULL,
  `estimated_outcome` double NOT NULL,
  `end_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estimated_yield_timestamp` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fundraiser_ledgers`
--

INSERT INTO `fundraiser_ledgers` (`id`, `farmer_id`, `crop_type_id`, `farming_address_id`, `farming_status_id`, `amount`, `share_percentage`, `estimated_outcome`, `end_timestamp`, `estimated_yield_timestamp`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `additional_description`) VALUES
(1, 1, 1, 1, 1, 15000, 5, 2000, '2021-04-17 18:38:24', '2021-04-29 18:30:00', 2, 2, '2021-04-17 13:08:24', '2021-04-17 13:08:24', NULL, NULL),
(2, 1, 25, 2, 3, 10000, 5, 200, '2021-04-28 10:42:41', '2021-04-29 18:30:00', 2, 2, '2021-04-28 05:12:41', '2021-04-28 05:12:41', NULL, NULL),
(3, 1, 24, 7, 1, 20000, 10, 2000, '2021-05-02 11:27:02', '2021-11-29 18:30:00', 2, 2, '2021-05-02 05:57:02', '2021-05-02 05:57:02', NULL, NULL),
(4, 1, 26, 2, 1, 20000, 10, 2000, '2021-05-07 05:25:48', '2021-12-30 18:30:00', 2, 2, '2021-05-06 23:55:48', '2021-05-06 23:55:48', NULL, NULL),
(5, 1, 2, 7, 2, 10000, 5, 3000, '2021-05-07 05:28:16', '2021-11-29 18:30:00', 2, 2, '2021-05-06 23:58:16', '2021-05-06 23:58:16', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `goods_pickups`
--

CREATE TABLE `goods_pickups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fundraiser_ledger_id` bigint(20) UNSIGNED NOT NULL,
  `pickup_address` bigint(20) UNSIGNED DEFAULT NULL,
  `drop_address` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `when_to_go` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `help_jobs`
--

CREATE TABLE `help_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `goods_pickup_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`id`, `user_id`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `additional_description`) VALUES
(1, 5, 1, 1, NULL, NULL, NULL, NULL),
(2, 6, 1, 1, NULL, NULL, NULL, NULL),
(3, 7, NULL, NULL, '2021-04-30 04:59:41', '2021-04-30 04:59:41', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_volunteers`
--

CREATE TABLE `job_volunteers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `help_job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_03_30_124550_update_users_table', 1),
(2, '2021_04_17_154448_create_expense_ledger_status_table', 2),
(3, '2021_04_16_174743_update_expense_ledgers_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mode_of_payments`
--

CREATE TABLE `mode_of_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mode_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `otp_managers`
--

CREATE TABLE `otp_managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `otp` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `no_of_chances` tinyint(4) NOT NULL,
  `no_of_retry` tinyint(4) NOT NULL DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_transactions`
--

CREATE TABLE `payment_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment_transactions`
--

INSERT INTO `payment_transactions` (`id`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `additional_description`) VALUES
(1, 6, NULL, '2021-04-28 06:45:31', '2021-04-28 06:45:31', NULL, NULL),
(2, 6, NULL, '2021-04-28 06:47:31', '2021-04-28 06:47:31', NULL, NULL),
(3, 6, NULL, '2021-05-07 00:00:19', '2021-05-07 00:00:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reimbursement_ledgers`
--

CREATE TABLE `reimbursement_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expense_ledger_id` bigint(20) UNSIGNED NOT NULL,
  `mode_of_payment_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `residential_addresses`
--

CREATE TABLE `residential_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `is_primary` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `residential_addresses`
--

INSERT INTO `residential_addresses` (`id`, `user_id`, `address_id`, `is_primary`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `additional_description`) VALUES
(1, 2, 8, 0, 1, 1, '2021-04-17 13:00:50', '2021-05-02 05:53:14', NULL, NULL),
(2, 2, 9, 1, 1, 1, '2021-04-17 13:00:50', '2021-05-02 05:53:14', NULL, NULL),
(3, 3, 10, 1, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(4, 4, 11, 1, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(5, 5, 12, 1, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(6, 6, 13, 1, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(7, 5, 14, 0, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL),
(8, 6, 15, 0, 1, 1, '2021-04-17 13:00:50', '2021-04-17 13:00:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_no` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone_no_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` int(10) UNSIGNED DEFAULT NULL,
  `role` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `additional_description` text COLLATE utf8_unicode_ci,
  `username` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `average_rating` decimal(8,2) NOT NULL DEFAULT '0.00',
  `no_of_ratings` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_no`, `email_verified_at`, `phone_no_verified_at`, `password`, `dob`, `gender`, `role`, `remember_token`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`, `additional_description`, `username`, `bio`, `average_rating`, `no_of_ratings`) VALUES
(1, 'Dhiresh Hirani', 'dhireshk.hirani@gmail.com', '9867371111', '2021-04-17 13:00:49', '2021-04-17 13:00:49', '$2y$10$13PWIT9R0B9Suka/l2Z5Pe7K8aGYWbt/bAFmjP/HCGNPVyPv1cOK6', '1999-06-01', 1, 1, NULL, 1, 1, NULL, NULL, NULL, NULL, 'dhiresh_hirani', NULL, '0.00', 0),
(2, 'Pranay Patro', 'pranaypatro@gmail.com', '7666375563', '2021-04-17 13:00:49', '2021-04-17 13:00:49', '$2y$10$k0IGJwkJHR4/rKMepYZsvuLhfnaHoh8M/Q7vOi662emSbN/eEzBeu', '1999-06-01', 1, 2, NULL, 1, 1, '2021-04-08 09:30:00', '2021-04-30 13:04:41', NULL, NULL, 'pranay_patro', 'Quia fuga nesciunt ea odit tempore ipsa veniam. \r\nVoluptatem saepe est possimus dolores et neque quasi.\r\n Deserunt minima harum quis.', '4.97', 136),
(3, 'Arjun Parmani', 'arjunparmani@gmail.com', '9930970203', '2021-04-17 13:00:49', '2021-04-17 13:00:49', '$2y$10$5qH7x3Fq/vcw.WsFEvXVoOPyAAVFUX.uTH4LjziqXU9A6QzaByGqa', '1999-06-01', 1, 2, NULL, 1, 1, '2021-04-07 18:30:00', '2021-04-07 18:30:00', NULL, NULL, 'arjun_parmani', 'Debitis earum et qui delectus id aut aut recusandae. Quas delectus totam temporibus molestiae ex ipsam. Culpa soluta vel delectus totam. Natus enim eos aliquam molestiae reiciendis nobis.', '1.42', 64),
(4, 'Kishore Hirani', 'kishore.hirani@gmail.com', '8980802525', '2021-04-17 13:00:49', '2021-04-17 13:00:49', '$2y$10$wEkiPiC/0xhZTGwPxNyXG.mL7v2FJlf3jIrCL3cny9fGM.M90V8S2', '1999-06-01', 1, 2, NULL, 1, 1, '2021-04-07 18:30:00', '2021-04-07 18:30:00', NULL, NULL, 'kishore_hirani', 'Magnam esse voluptas dolores officiis non inventore ut laudantium. Iste dolores officiis voluptatem sunt. Aut hic qui est ipsum perspiciatis. Tempora quidem maiores neque voluptatem nulla.', '1.88', 76),
(5, 'Dharmik Doshi', 'ddsi@gmail.com', '9769722566', '2021-04-17 13:00:50', '2021-04-17 13:00:50', '$2y$10$E28lxLk02GwN0xALCYdA4uAO6CkqItnHDSMzi/xsgFmYEPXNew1IK', '1999-06-01', 1, 3, NULL, 1, 1, '2021-04-07 18:30:00', '2021-04-07 18:30:00', NULL, NULL, 'dharmik_doshi', 'Aliquam non et aperiam eum et facilis pariatur. Doloribus expedita ullam tenetur accusantium et. Et rerum qui similique magnam vitae hic.', '4.70', 84),
(6, 'Parth Nagarkar', 'parthnagarkar@gmail.com', '9930426913', '2021-04-17 13:00:50', '2021-04-17 13:00:50', '$2y$10$6IDbktg12f8lRalGOpcFW.jzL39QD/c039wetB6/TgT8LcEYx1Noe', '1999-06-01', 1, 3, NULL, 1, 1, '2021-04-07 18:30:00', '2021-04-07 18:30:00', NULL, NULL, 'parth_nagarkar', 'Odit sed accusantium rerum voluptate et. Dolor quod aut ut. Autem nostrum laudantium illum doloribus ut expedita maxime inventore.', '2.89', 127),
(7, 'Rhea Hirani', 'rheakhirani@gmail.com', NULL, NULL, NULL, '$2y$10$/234pbDVb4DN3VVRgsOR0uhHF3ExE/89GS3HovtkPXlOnMHWmAz7y', NULL, NULL, 3, NULL, NULL, NULL, '2021-04-30 04:59:41', '2021-04-30 04:59:41', NULL, NULL, 'rhea_hirani', NULL, '0.00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_ledgers`
--
ALTER TABLE `credit_ledgers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `credit_ledgers_fundraiser_ledger_id_index` (`fundraiser_ledger_id`),
  ADD KEY `credit_ledgers_investor_id_index` (`investor_id`),
  ADD KEY `credit_ledgers_payment_transaction_id_index` (`payment_transaction_id`);

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crops_crop_name_unique` (`crop_name`);

--
-- Indexes for table `crop_types`
--
ALTER TABLE `crop_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop_types_crop_type_name_unique` (`crop_type_name`),
  ADD KEY `crop_types_crop_id_index` (`crop_id`);

--
-- Indexes for table `expense_ledgers`
--
ALTER TABLE `expense_ledgers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expense_ledgers_expense_type_id_index` (`expense_type_id`),
  ADD KEY `expense_ledgers_fundraiser_ledger_id_index` (`fundraiser_ledger_id`),
  ADD KEY `expense_ledgers_user_id_index` (`user_id`),
  ADD KEY `expense_ledgers_expense_ledger_status_id_foreign` (`expense_ledger_status_id`);

--
-- Indexes for table `expense_ledger_status`
--
ALTER TABLE `expense_ledger_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_type`
--
ALTER TABLE `expense_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `farmers_user_id_index` (`user_id`);

--
-- Indexes for table `farming_addresses`
--
ALTER TABLE `farming_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `farming_addresses_address_id_index` (`address_id`),
  ADD KEY `farming_addresses_farmer_id_index` (`farmer_id`);

--
-- Indexes for table `farming_histories`
--
ALTER TABLE `farming_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `farming_histories_crop_type_id_index` (`crop_type_id`),
  ADD KEY `farming_histories_farmer_id_index` (`farmer_id`),
  ADD KEY `farming_histories_farming_address_id_index` (`farming_address_id`);

--
-- Indexes for table `farming_status`
--
ALTER TABLE `farming_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fundraiser_ledgers`
--
ALTER TABLE `fundraiser_ledgers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fundraiser_ledgers_crop_type_id_index` (`crop_type_id`),
  ADD KEY `fundraiser_ledgers_farmer_id_index` (`farmer_id`),
  ADD KEY `fundraiser_ledgers_farming_address_id_index` (`farming_address_id`),
  ADD KEY `fundraiser_ledgers_farming_status_id_index` (`farming_status_id`);

--
-- Indexes for table `goods_pickups`
--
ALTER TABLE `goods_pickups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `goods_pickups_fundraiser_ledger_id_unique` (`fundraiser_ledger_id`),
  ADD KEY `goods_pickups_drop_address_index` (`drop_address`),
  ADD KEY `goods_pickups_pickup_address_index` (`pickup_address`),
  ADD KEY `goods_pickups_user_id_index` (`user_id`);

--
-- Indexes for table `help_jobs`
--
ALTER TABLE `help_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `help_jobs_goods_pickup_id_index` (`goods_pickup_id`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `investors_user_id_index` (`user_id`);

--
-- Indexes for table `job_volunteers`
--
ALTER TABLE `job_volunteers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_volunteers_help_job_id_index` (`help_job_id`),
  ADD KEY `job_volunteers_user_id_index` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mode_of_payments`
--
ALTER TABLE `mode_of_payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mode_of_payments_mode_name_unique` (`mode_name`);

--
-- Indexes for table `otp_managers`
--
ALTER TABLE `otp_managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `otp_managers_user_id_unique` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_transactions`
--
ALTER TABLE `payment_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reimbursement_ledgers`
--
ALTER TABLE `reimbursement_ledgers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reimbursement_ledgers_expense_ledger_id_index` (`expense_ledger_id`),
  ADD KEY `reimbursement_ledgers_mode_of_payment_id_index` (`mode_of_payment_id`);

--
-- Indexes for table `residential_addresses`
--
ALTER TABLE `residential_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `residential_addresses_address_id_index` (`address_id`),
  ADD KEY `residential_addresses_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_phone_no_unique` (`phone_no`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `credit_ledgers`
--
ALTER TABLE `credit_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `crop_types`
--
ALTER TABLE `crop_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `expense_ledgers`
--
ALTER TABLE `expense_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `expense_ledger_status`
--
ALTER TABLE `expense_ledger_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expense_type`
--
ALTER TABLE `expense_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `farming_addresses`
--
ALTER TABLE `farming_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `farming_histories`
--
ALTER TABLE `farming_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `farming_status`
--
ALTER TABLE `farming_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fundraiser_ledgers`
--
ALTER TABLE `fundraiser_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `goods_pickups`
--
ALTER TABLE `goods_pickups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `help_jobs`
--
ALTER TABLE `help_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investors`
--
ALTER TABLE `investors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_volunteers`
--
ALTER TABLE `job_volunteers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mode_of_payments`
--
ALTER TABLE `mode_of_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otp_managers`
--
ALTER TABLE `otp_managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_transactions`
--
ALTER TABLE `payment_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reimbursement_ledgers`
--
ALTER TABLE `reimbursement_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `residential_addresses`
--
ALTER TABLE `residential_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `credit_ledgers`
--
ALTER TABLE `credit_ledgers`
  ADD CONSTRAINT `credit_ledgers_fundraiser_ledger_id_foreign` FOREIGN KEY (`fundraiser_ledger_id`) REFERENCES `fundraiser_ledgers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `credit_ledgers_investor_id_foreign` FOREIGN KEY (`investor_id`) REFERENCES `investors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `credit_ledgers_payment_transaction_id_foreign` FOREIGN KEY (`payment_transaction_id`) REFERENCES `payment_transactions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `crop_types`
--
ALTER TABLE `crop_types`
  ADD CONSTRAINT `crop_types_crop_id_foreign` FOREIGN KEY (`crop_id`) REFERENCES `crops` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `expense_ledgers`
--
ALTER TABLE `expense_ledgers`
  ADD CONSTRAINT `expense_ledgers_expense_ledger_status_id_foreign` FOREIGN KEY (`expense_ledger_status_id`) REFERENCES `expense_ledger_status` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `expense_ledgers_expense_type_id_foreign` FOREIGN KEY (`expense_type_id`) REFERENCES `expense_type` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `expense_ledgers_fundraiser_ledger_id_foreign` FOREIGN KEY (`fundraiser_ledger_id`) REFERENCES `fundraiser_ledgers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `expense_ledgers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `farmers`
--
ALTER TABLE `farmers`
  ADD CONSTRAINT `farmers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `farming_addresses`
--
ALTER TABLE `farming_addresses`
  ADD CONSTRAINT `farming_addresses_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `farming_addresses_farmer_id_foreign` FOREIGN KEY (`farmer_id`) REFERENCES `farmers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `farming_histories`
--
ALTER TABLE `farming_histories`
  ADD CONSTRAINT `farming_histories_crop_type_id_foreign` FOREIGN KEY (`crop_type_id`) REFERENCES `crop_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `farming_histories_farmer_id_foreign` FOREIGN KEY (`farmer_id`) REFERENCES `farmers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `farming_histories_farming_address_id_foreign` FOREIGN KEY (`farming_address_id`) REFERENCES `farming_addresses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fundraiser_ledgers`
--
ALTER TABLE `fundraiser_ledgers`
  ADD CONSTRAINT `fundraiser_ledgers_crop_type_id_foreign` FOREIGN KEY (`crop_type_id`) REFERENCES `crop_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fundraiser_ledgers_farmer_id_foreign` FOREIGN KEY (`farmer_id`) REFERENCES `farmers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fundraiser_ledgers_farming_address_id_foreign` FOREIGN KEY (`farming_address_id`) REFERENCES `farming_addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fundraiser_ledgers_farming_status_id_foreign` FOREIGN KEY (`farming_status_id`) REFERENCES `farming_status` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `goods_pickups`
--
ALTER TABLE `goods_pickups`
  ADD CONSTRAINT `goods_pickups_drop_address_foreign` FOREIGN KEY (`drop_address`) REFERENCES `addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `goods_pickups_fundraiser_ledger_id_foreign` FOREIGN KEY (`fundraiser_ledger_id`) REFERENCES `fundraiser_ledgers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `goods_pickups_pickup_address_foreign` FOREIGN KEY (`pickup_address`) REFERENCES `addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `goods_pickups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `help_jobs`
--
ALTER TABLE `help_jobs`
  ADD CONSTRAINT `help_jobs_goods_pickup_id_foreign` FOREIGN KEY (`goods_pickup_id`) REFERENCES `goods_pickups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `investors`
--
ALTER TABLE `investors`
  ADD CONSTRAINT `investors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_volunteers`
--
ALTER TABLE `job_volunteers`
  ADD CONSTRAINT `job_volunteers_help_job_id_foreign` FOREIGN KEY (`help_job_id`) REFERENCES `help_jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_volunteers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `otp_managers`
--
ALTER TABLE `otp_managers`
  ADD CONSTRAINT `otp_managers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reimbursement_ledgers`
--
ALTER TABLE `reimbursement_ledgers`
  ADD CONSTRAINT `reimbursement_ledgers_expense_ledger_id_foreign` FOREIGN KEY (`expense_ledger_id`) REFERENCES `expense_ledgers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reimbursement_ledgers_mode_of_payment_id_foreign` FOREIGN KEY (`mode_of_payment_id`) REFERENCES `mode_of_payments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `residential_addresses`
--
ALTER TABLE `residential_addresses`
  ADD CONSTRAINT `residential_addresses_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `residential_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
