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
