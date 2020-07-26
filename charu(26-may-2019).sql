-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 12:14 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_role` tinyint(4) DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `admin_role`, `photo`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super@gmail.com', 'superadmin', 1, 'public/images/admins/1556265063.png', '$2y$10$cW9KVqhUuLOearR9Uhr9yeiUBnxRPJvY3KsjttKr77tKMNZab7Ncm', 1, 'd6OPS5bVirEvKreL58LDqijh13Rm1c6Ea1CymFC8oI5KMxTjbJzCpTkEf5gH', '2019-03-25 01:00:00', '2019-04-26 01:51:05'),
(2, 'Admin', 'admin@gmail.com', 'admin', 2, NULL, '$2y$10$3eUb3dspSaecGyAWo0jOp.r2N83ZUQRYaJMh/058e3apUV5XSmlQq', 1, 'sZE0KVFsqcRuovw6Eu0YQ5VywZRgduSp3CXwxauqRtiDsrVYRl7z8dZWYhxK', '2019-03-25 01:00:00', '2019-04-26 02:15:22'),
(3, 'aaaaaa', 'afzalsabbir.bd@gmail.com', 'aaaaaa', 3, NULL, '$2y$10$P1rFOIiR1hB4IdUDBw/KKenlpz9LK80jAw/IWulwNUXF6hnc90lzu', 1, NULL, '2019-04-25 13:46:07', '2019-04-25 13:46:07'),
(4, 'bbbbbb', 'afzalbd1@gmail.comk', 'bbbbbb', 3, NULL, '$2y$10$wpvJp1iVMxNM6Tkzn9IRwe6CftljT2xXkj13euFuV.mJorisuC17y', 1, NULL, '2019-04-25 13:47:19', '2019-04-25 13:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `admin_access_infos`
--

CREATE TABLE `admin_access_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin_access_infos`
--

INSERT INTO `admin_access_infos` (`id`, `admin_id`, `ip`, `country`, `device`, `browser`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 21:23:58', '2019-04-13 21:23:58'),
(2, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 21:32:58', '2019-04-13 21:32:58'),
(3, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 09:54:11', '2019-04-13 09:54:11'),
(4, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 09:54:28', '2019-04-13 09:54:28'),
(5, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 11:15:57', '2019-04-13 11:15:57'),
(6, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-14 07:02:21', '2019-04-14 07:02:21'),
(7, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-15 12:30:22', '2019-04-15 12:30:22'),
(8, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-16 12:40:57', '2019-04-16 12:40:57'),
(9, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-18 12:56:28', '2019-04-18 12:56:28'),
(10, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-19 09:40:46', '2019-04-19 09:40:46'),
(11, 1, '127.0.0.1', NULL, 'PC', 'Firefox', 1, '2019-04-19 09:52:12', '2019-04-19 09:52:12'),
(12, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-19 09:52:53', '2019-04-19 09:52:53'),
(13, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-19 10:10:57', '2019-04-19 10:10:57'),
(14, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-21 13:35:26', '2019-04-21 13:35:26'),
(15, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-23 11:19:55', '2019-04-23 11:19:55'),
(16, 2, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-23 12:18:56', '2019-04-23 12:18:56'),
(17, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-23 12:19:59', '2019-04-23 12:19:59'),
(18, 1, '::1', NULL, 'PC', 'Firefox', 1, '2019-04-25 09:33:47', '2019-04-25 09:33:47'),
(19, 1, '::1', NULL, 'PC', 'Firefox', 1, '2019-04-25 11:28:26', '2019-04-25 11:28:26'),
(20, 1, '::1', NULL, 'PC', 'Firefox', 1, '2019-04-25 22:14:32', '2019-04-25 22:14:32'),
(21, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-30 05:41:04', '2019-04-30 05:41:04'),
(22, 1, '::1', NULL, 'PC', 'Firefox', 1, '2019-05-20 22:43:36', '2019-05-20 22:43:36'),
(23, 1, '192.168.0.108', NULL, 'PC', 'Vivaldi', 1, '2019-05-20 22:53:10', '2019-05-20 22:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `sub_category_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `mobile`, `address`, `designation`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'GOURANGA CHANDRA DAS', '57655656', 'dfdf', 'CEO', 'public/images/employee/1558860731.jpg', 1, '2019-05-26 02:52:11', '2019-05-26 02:52:11'),
(5, 'MD SAGAR MIAH', '57655656', 'sfd', 'বাইন্ডার সহকারী-3', 'public/images/employee/1558863358.jpg', 1, '2019-05-26 03:35:58', '2019-05-26 03:35:58'),
(6, 'Sondip Sarker Rony', '57655656', 'dsfsdf', 'COMPUTER OPARATOR', 'public/images/employee/1558864087.jpg', 1, '2019-05-26 03:48:07', '2019-05-26 03:48:07'),
(7, 'Md. Shohag Miah', '57655656', 'dsfsdf', 'অফসেট মেশিন সহকারী', 'public/images/employee/1558864147.jpg', 1, '2019-05-26 03:49:07', '2019-05-26 03:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `menu_position` int(10) UNSIGNED DEFAULT NULL COMMENT '0 - Left | 1 - Left In | 2 - Right Top',
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu`, `menu_bn`, `parent_id`, `menu_position`, `icon`, `url`, `route`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'ড্যাশবোর্ড', NULL, 0, 'fa fa-dashboard', '/admin', 'admin.home', 0, 1, '2019-03-24 23:02:05', '2019-05-26 03:53:58'),
(2, 'Menu Permission', 'মেনু পারমিশন', NULL, 0, 'fa fa-cogs', '/admin/role', 'admin.role.index', 70, 1, '2019-03-24 22:44:32', '2019-05-26 03:58:52'),
(3, 'Action', 'একশন', 2, 0, 'fa fa-home', '/admin/role', 'admin.role.index', 1, 1, '2019-04-23 05:27:09', '2019-04-23 05:27:09'),
(4, 'Assign', 'অনুমতি প্রদান', 3, 1, 'fa fa-pencil', '/admin/role/assign', 'admin.role.assign', 1, 1, '2019-03-24 22:48:50', '2019-04-23 05:27:39'),
(5, 'Site Settings', 'সাইট সেটিংস', NULL, 0, 'fa fa-sliders', '/admin/setting', 'admin.setting.index', 60, 1, '2019-04-10 16:30:44', '2019-05-26 03:58:33'),
(6, 'Change Password', 'পাসওয়ার্ড পরিবর্তন', NULL, 2, 'fa fa-cog', '/admin/change-password', 'admin.password.form', 2, 1, '2019-03-24 22:42:35', '2019-04-23 06:20:29'),
(7, 'Log Activity', 'লগ এক্টিভিটি', NULL, 0, 'fa fa-cog', '/admin/log', 'admin.log.index', 80, 1, '2019-03-24 22:46:37', '2019-05-26 03:59:04'),
(8, 'Category', 'ক্যাটাগরি', NULL, 0, 'fa fa-pie-chart', NULL, NULL, 30, 1, '2019-03-29 15:51:15', '2019-05-26 03:57:56'),
(9, 'Category List', 'ক্যাটাগরি তালিকা', 8, 0, 'fa fa-list-ul', '/admin/category', 'admin.category.index', 1, 1, '2019-03-29 15:51:59', '2019-03-29 15:51:59'),
(10, 'Add New', 'নতুন যোগ করুন', 8, 0, 'fa fa-plus', '/admin/category/add', 'admin.category.create', 2, 1, '2019-03-29 15:52:31', '2019-03-29 15:52:31'),
(11, 'Edit', 'এডিট', 9, 1, 'fa fa-pencil', NULL, 'admin.category.edit', 1, 1, '2019-03-29 15:53:02', '2019-03-29 16:55:28'),
(12, 'Delete', 'ডিলিট', 9, 1, 'fa fa-trash', NULL, 'admin.category.delete', 2, 1, '2019-03-29 15:53:33', '2019-03-29 17:01:25'),
(13, 'Subcategory', 'সাবক্যাটাগরি', NULL, 0, 'fa fa-yelp', NULL, NULL, 40, 1, '2019-03-29 15:55:21', '2019-05-26 03:58:10'),
(14, 'Subcategory List', 'সাবক্যাটাগরি তালিকা', 13, 0, 'fa fa-list-ul', '/admin/subcategory', 'admin.subcategory.index', 1, 1, '2019-03-29 15:56:04', '2019-03-29 15:56:04'),
(15, 'Add New', 'নতুন যোগ করুন', 13, 0, 'fa fa-plus', '/admin/subcategory/add', 'admin.subcategory.create', 2, 1, '2019-03-29 15:56:42', '2019-03-29 15:56:42'),
(16, 'Edit', 'এডিট', 14, 1, 'fa fa-pencil', NULL, 'admin.subcategory.edit', 1, 1, '2019-03-29 15:58:08', '2019-03-29 15:58:08'),
(17, 'Delete', 'ডিলিট', 14, 1, 'fa fa-trash', NULL, 'admin.subcategory.delete', 2, 1, '2019-03-29 15:58:53', '2019-03-29 15:58:53'),
(18, 'Brand', 'ব্রান্ড', NULL, 0, 'fa fa-briefcase', NULL, NULL, 50, 1, '2019-04-02 21:29:14', '2019-05-26 03:58:22'),
(19, 'Brand List', 'ব্রান্ড তালিকা', 18, 0, 'fa fa-list-ul', '/admin/brand', 'admin.brand.index', 1, 1, '2019-04-03 17:00:57', '2019-04-03 17:03:50'),
(20, 'Add Brand', 'নতুন যোগ করুন', 18, 0, 'fa fa-plus', '/admin/brand/add', 'admin.brand.create', 2, 1, '2019-04-03 17:03:10', '2019-04-03 17:03:18'),
(21, 'Edit', 'এডিট', 19, 1, 'fa fa-pencil', NULL, 'admin.brand.edit', 1, 1, '2019-04-03 17:06:54', '2019-04-03 17:10:28'),
(22, 'Delete', 'ডিলিট', 19, 1, 'fa fa-trash', NULL, 'admin.brand.delete', 2, 1, '2019-04-03 17:07:45', '2019-04-03 17:10:35'),
(23, 'All Admin', 'সকল এডমিন', NULL, 2, 'fa fa-users', '/admin/all-admin', 'admin.all_admin.index', 1, 1, '2019-04-10 20:37:34', '2019-04-23 05:43:40'),
(24, 'Add Admin', 'এডমিন যোগ করুন', 23, 0, 'fa fa-plus', '/admin/all-admin/add', 'admin.all_admin.add', 2, 1, '2019-04-10 20:39:51', '2019-04-10 20:39:51'),
(25, 'Action', 'একশন', 23, 0, 'fa fa-home', '/admin/all-admin', 'admin.all_admin.index', 1, 1, '2019-04-23 06:27:34', '2019-04-23 06:27:34'),
(26, 'Edit', 'এডিট', 25, 1, 'fa fa-pencil', NULL, 'admin.all_admin.edit', 1, 1, '2019-04-10 20:40:57', '2019-04-23 06:28:07'),
(27, 'Delete', 'ডিলিট', 25, 1, 'fa fa-trash', NULL, 'admin.all_admin.delete', 2, 1, '2019-04-10 20:42:59', '2019-04-23 06:28:13'),
(28, 'Backup', 'ব্যাকআপ', NULL, 0, 'fa fa-cog', '/admin/backup', 'admin.backup.index', 90, 1, '2019-04-18 21:49:55', '2019-05-26 03:59:17'),
(29, 'Action', 'কার্যক্রম', 28, 0, 'fa fa-home', '/admin/backup', 'admin.backup.index', 1, 0, '2019-04-18 21:51:23', '2019-04-18 21:54:34'),
(30, 'Download', 'ডাউনলোড', 29, 1, 'fa fa-download', NULL, 'admin.backup.index', 1, 1, '2019-04-18 21:52:24', '2019-04-18 21:52:24'),
(31, 'Delete', 'ডিলিট', 29, 1, 'fa fa-trash', NULL, 'admin.backup.index', 2, 1, '2019-04-18 21:52:58', '2019-04-18 21:52:58'),
(32, 'SMS', 'এসএমএস', NULL, 0, 'fa fa-envelope', NULL, NULL, 1, 1, NULL, NULL),
(33, 'Send', 'প্রেরন', 32, 0, 'fa fa-envelope', 'admin/sms/send', 'admin.sms.send', 999, 1, NULL, NULL),
(34, 'Custom', 'কাস্টম', 32, 0, 'fa fa-envelope', 'admin/sms/custom', 'admin.sms.custom', 2, 1, NULL, NULL),
(35, 'Report', 'প্রতিবেদন', 32, 0, 'fa fa-envelope', 'admin/sms/report', 'admin.sms.report', 3, 1, NULL, NULL),
(36, 'Product', 'পণ্য', NULL, 0, 'fa fa-gift', NULL, NULL, 10, 1, '2019-05-20 23:05:48', '2019-05-26 03:57:20'),
(37, 'Add New', 'নতুন যোগ করুন', 36, 0, 'fa fa-plus', 'admin/product/add', 'admin.product.add', 1, 1, '2019-05-20 23:05:48', '2019-05-20 23:05:48'),
(38, 'Product List', 'পণ্য তালিকা', 36, 0, 'fa fa-list-ul', 'admin/product', 'admin.product.index', 2, 1, '2019-05-20 23:05:48', '2019-05-20 23:05:48'),
(39, 'Edit', 'এডিট', 38, 1, 'fa fa-pencil', '', 'admin.product.edit', 1, 1, '2019-05-20 23:05:48', '2019-05-20 23:05:48'),
(40, 'Delete', 'ডিলিট', 38, 1, 'fa fa-trash', '', 'admin.product.delete', 2, 1, '2019-05-20 23:05:48', '2019-05-20 23:05:48'),
(41, 'Employee', 'কর্মচারী', NULL, 0, 'fa fa-object-group', NULL, NULL, 20, 1, '2019-05-26 00:54:46', '2019-05-26 03:57:39'),
(42, 'Add New', 'নতুন যোগ করুন', 41, 0, 'fa fa-plus', 'admin/employee/add', 'admin.employee.add', 1, 1, '2019-05-26 00:54:46', '2019-05-26 00:54:46'),
(43, 'Employee List', 'কর্মচারী তালিকা', 41, 0, 'fa fa-list-ul', 'admin/employee', 'admin.employee.index', 2, 1, '2019-05-26 00:54:46', '2019-05-26 00:54:46'),
(44, 'View', 'দেখা', 43, 1, 'fa fa-eye', '', 'admin.employee.view', 1, 1, '2019-05-26 00:54:46', '2019-05-26 00:54:46'),
(45, 'Edit', 'এডিট', 43, 1, 'fa fa-pencil', '', 'admin.employee.edit', 2, 1, '2019-05-26 00:54:46', '2019-05-26 00:54:46'),
(46, 'Delete', 'ডিলিট', 43, 1, 'fa fa-trash', '', 'admin.employee.delete', 3, 1, '2019-05-26 00:54:46', '2019-05-26 00:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_03_26_200821_create_admins_table', 1),
(2, '2019_03_04_084037_create_menus_table', 1),
(3, '2019_03_05_074453_create_roles_table', 1),
(4, '2019_03_06_090310_create_admin_access_infos_table', 1),
(5, '2019_03_25_140240_create_password_resets_table', 1),
(6, '2019_03_25_140240_create_users_table', 1),
(7, '2019_03_25_140140_create_units_table', 2),
(8, '2019_03_25_140157_create_categories_table', 2),
(9, '2019_03_25_140207_create_sub_categories_table', 2),
(10, '2019_03_25_140231_create_brands_table', 2),
(11, '2019_04_10_152516_create_settings_table', 2),
(12, '2019_05_21_050643_create_products_table', 3),
(13, '2019_05_26_070821_create_employees_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `image`, `type`, `status`, `created_at`, `updated_at`) VALUES
(4, 'product - 1', 'product-1-1', 'public/images/products/1766_1558432739_20258488_1351067028275405_3629434746502740130_n-900x600.jpg', 1, 1, '2019-05-21 03:58:59', '2019-05-21 03:58:59'),
(5, 'product - 2', 'product-2', 'public/images/products/1558432758_4615_Authentic-Mexican-Food-Near-Me.jpg', 1, 1, '2019-05-21 03:59:18', '2019-05-21 03:59:18'),
(6, 'product - 3', 'product-3', 'public/images/products/7454_1558432775_best-food-blogs-for-families-damn-delicious-1.jpg', 2, 1, '2019-05-21 03:59:35', '2019-05-21 03:59:35'),
(7, 'product - 4', 'product-4', 'public/images/products/1558432792_8433_chou-doufu-900x600.jpg.optimal.jpg', 2, 1, '2019-05-21 03:59:52', '2019-05-21 03:59:52'),
(8, 'product - 5', 'product-5', 'public/images/products/1558432808_4641_coffee-shop-front-street-cafe.jpg', 1, 1, '2019-05-21 04:00:08', '2019-05-21 04:00:08'),
(9, 'product - 6', 'product-6', 'public/images/products/1558432821_3963_D6_rePMUwAAQZAk.jpg', 1, 1, '2019-05-21 04:00:21', '2019-05-21 04:00:21'),
(10, 'product - 7', 'product-7', 'public/images/products/7544_1558432833_hoodline3.jpg', 1, 1, '2019-05-21 04:00:33', '2019-05-21 04:00:33'),
(11, 'product - 9', 'product-9', 'public/images/products/8904_1558432848_local-food-saint-lucia-soufriere.jpg', 2, 1, '2019-05-21 04:00:48', '2019-05-21 04:00:48'),
(12, 'product - 10', 'product-10', 'public/images/products/1558432860_5779_madelene-farin-art-and-food-03.jpg', 2, 1, '2019-05-21 04:01:00', '2019-05-21 04:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu` text COLLATE utf8mb4_unicode_ci,
  `sub_menu` text COLLATE utf8mb4_unicode_ci,
  `in_body` text COLLATE utf8mb4_unicode_ci,
  `admin_id` int(10) DEFAULT NULL,
  `role` tinyint(3) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `menu`, `sub_menu`, `in_body`, `admin_id`, `role`, `status`, `created_at`, `updated_at`) VALUES
(9, '[\"1\",\"6\",\"23\",\"41\",\"2\",\"28\",\"7\",\"13\",\"18\",\"5\",\"8\",\"36\",\"32\"]', '[\"42\",\"3\",\"43\",\"9\",\"14\",\"19\",\"10\",\"33\",\"35\",\"25\",\"34\",\"29\",\"24\",\"37\",\"20\",\"38\",\"15\"]', '[\"44\",\"4\",\"11\",\"46\",\"12\",\"45\",\"17\",\"39\",\"22\",\"30\",\"27\",\"26\",\"31\",\"21\",\"40\",\"16\"]', 1, 1, 1, '2019-04-25 22:41:31', '2019-05-26 03:59:26'),
(10, '[\"2\",\"7\",\"28\"]', '[\"29\",\"3\"]', '[\"30\",\"4\",\"31\"]', 4, 3, 1, '2019-04-26 00:33:57', '2019-04-26 01:42:30'),
(12, '[\"23\",\"1\",\"6\",\"18\",\"8\",\"13\",\"5\",\"2\",\"28\",\"7\"]', '[\"29\",\"3\",\"14\",\"25\",\"15\",\"19\",\"10\",\"9\",\"20\",\"24\"]', '[\"30\",\"26\",\"31\",\"4\",\"21\",\"17\",\"11\",\"12\",\"16\",\"22\",\"27\"]', 2, 2, 1, '2019-04-26 01:33:19', '2019-04-26 01:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `factory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_s` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_e` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day_s` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day_e` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `banner`, `title_en`, `title_bn`, `email`, `mobile1`, `mobile2`, `facebook`, `twitter`, `youtube`, `linkedin`, `office`, `factory`, `footer_about`, `time_s`, `time_e`, `day_s`, `day_e`, `status`, `created_at`, `updated_at`) VALUES
(1, 'public/images/settings/logo-1558849205.png', 'public/images/settings/favicon-1556222459.png', 'public/images/settings/banner-1558434633.jpg', 'Charu', 'চারু', 'charu.netrakona@gmail.com', '+8801711118930', '+8801919682189', 'https://www.facebook.com/people/%E0%A6%9A%E0%A6%BE%E0%A6%B0%E0%A7%81-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%B8-%E0%A6%A8%E0%A7%87%E0%A6%A4%E0%A7%8D%E0%A6%B0%E0%A6%95%E0%A7%8B%E0%A6%A3%E0%A6%BE/100015651510895', 'twitter', 'youtube', 'linkedin', 'Chotobazar, Netrakona. Road #3.', 'Nayegra, Netrakona. Road #12.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '10:00am', '8:30pm', 'Sun', 'Tue', '1', '2019-04-10 12:00:00', '2019-05-26 00:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `sms_records`
--

CREATE TABLE `sms_records` (
  `id` int(11) NOT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `sms` longtext COLLATE utf8_unicode_ci,
  `sending_date` date DEFAULT NULL,
  `sms_count` tinyint(3) DEFAULT '1',
  `send_by` int(11) DEFAULT NULL,
  `is_send` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sms_records`
--

INSERT INTO `sms_records` (`id`, `mobile`, `sms`, `sending_date`, `sms_count`, `send_by`, `is_send`) VALUES
(1, '01624390079', 'Hi Khairul vai', '2019-04-30', NULL, 1, 1),
(2, '01515255819', 'sgfhgfhg', '2019-04-30', 1, 1, 1),
(3, '01624390079', 'sgfhgfhg', '2019-04-30', 1, 1, 1),
(4, '01969481541', 'sgfhgfhg', '2019-04-30', 1, 1, 1),
(5, '01515255819', 'hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you', '2019-04-30', 2, 1, 1),
(6, '01624390079', 'hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you', '2019-04-30', 2, 1, 1),
(7, '01515255819', 'ssds', '2019-04-30', 1, 1, 1),
(8, '01624390079', 'ssds', '2019-04-30', 1, 1, 1),
(9, '01969481541', 'ssds', '2019-04-30', 1, 1, 1),
(10, '01515255819', 'd', '2019-04-30', 1, 1, 1),
(11, '01515255819', 'd', '2019-04-30', 1, 1, 1),
(12, '01624390079', 'd', '2019-04-30', 1, 1, 1),
(13, '01713576627', 'hey', '2019-04-30', 1, 1, 1),
(14, '01969481541', 'hey', '2019-04-30', 1, 1, 1),
(15, '01515255819', 'h', '2019-04-30', 1, 1, 1),
(16, '01969481541', 'h', '2019-04-30', 1, 1, 1),
(17, '01515255819', 'd', '2019-04-30', 1, 1, 1),
(18, '01515255819', 'd', '2019-04-30', 1, 1, 1),
(19, '01515255819', 's', '2019-04-30', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` tinyint(4) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(10) UNSIGNED DEFAULT NULL,
  `upazilla_id` int(10) UNSIGNED DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `username`, `image`, `user_role`, `password`, `country`, `district_id`, `upazilla_id`, `address`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Demo', 'demo@gmail.com', '01515255819', 'demo', NULL, 1, '$2y$10$tQVwD5VequDrZsgg5NUaHexmp3fGf.XI7zylpDEqSxf9WJITYiRWO', NULL, NULL, NULL, '', '1', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `admins_email_unique` (`email`) USING BTREE,
  ADD UNIQUE KEY `admins_username_unique` (`username`) USING BTREE;

--
-- Indexes for table `admin_access_infos`
--
ALTER TABLE `admin_access_infos`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `admin_access_infos_admin_id_foreign` (`admin_id`) USING BTREE;

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `brands_slug_unique` (`slug`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `categories_slug_unique` (`slug`) USING BTREE;

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `sms_records`
--
ALTER TABLE `sms_records`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `sub_categories_slug_unique` (`slug`) USING BTREE;

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE,
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`) USING BTREE,
  ADD UNIQUE KEY `users_username_unique` (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_access_infos`
--
ALTER TABLE `admin_access_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sms_records`
--
ALTER TABLE `sms_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_access_infos`
--
ALTER TABLE `admin_access_infos`
  ADD CONSTRAINT `admin_access_infos_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
