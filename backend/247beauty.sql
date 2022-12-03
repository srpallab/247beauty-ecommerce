-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 08:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `247beauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ban_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_creator` int(11) DEFAULT NULL,
  `ban_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `ban_image`, `ban_url`, `ban_slug`, `ban_creator`, `ban_status`, `created_at`, `updated_at`) VALUES
(1, 'ban_image_1_1668416138.png', '#', 'banner-156372028a6dc7a', 1, 1, '2022-11-14 02:55:38', '2022-11-14 02:55:38'),
(2, 'ban_image_2_1668416146.png', '#', 'banner-156372029298917', 1, 1, '2022-11-14 02:55:46', '2022-11-14 02:55:46'),
(3, 'ban_image_3_1668416163.png', '#', 'banner-15637202a3a6e64', 1, 1, '2022-11-14 02:56:03', '2022-11-14 02:56:03'),
(28, 'a-1', 'a-2', 'banner-15638342d9de357', NULL, 0, '2022-11-27 04:58:33', '2022-11-27 04:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `basics`
--

CREATE TABLE `basics` (
  `basic_id` bigint(20) UNSIGNED NOT NULL,
  `basic_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basics`
--

INSERT INTO `basics` (`basic_id`, `basic_title`, `basic_subtitle`, `basic_logo`, `basic_favicon`, `basic_slug`, `basic_status`, `created_at`, `updated_at`) VALUES
(1, '247beauty', '247beauty', 'logo_1668416071.png', 'favicon_1668416071.png', NULL, 1, NULL, '2022-11-14 02:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_discount_amount` int(11) DEFAULT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_brand` int(11) DEFAULT NULL,
  `featuren_brand` int(11) DEFAULT NULL,
  `brand_serial` int(11) DEFAULT NULL,
  `brand_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_creator` int(11) DEFAULT NULL,
  `brand_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_title`, `brand_subtitle`, `brand_url`, `brand_discount_amount`, `brand_image`, `top_brand`, `featuren_brand`, `brand_serial`, `brand_slug`, `brand_creator`, `brand_status`, `created_at`, `updated_at`) VALUES
(1, 'Brand-1', 'On Rs.5500: 2 Gifts', 'On Rs.7000: Mini Airbrush Flawless Finish', NULL, NULL, 'brand_image_1_1668417212.png', 1, NULL, 1, 'brand-1563720ce52cdcd', 1, 1, '2022-11-14 03:13:32', '2022-11-14 03:39:49'),
(2, 'Brand-12', 'Upto 40% Off + Free Liquid Lipstick', 'worth Rs. 599 on Rs. 999', NULL, NULL, 'brand_image_2_1668417248.png', 1, NULL, 2, 'brand-1563720e0b0e3b2', 1, 1, '2022-11-14 03:14:08', '2022-11-14 03:44:43'),
(3, 'Brand-11', 'Flat 15% Off + Additional 10% Off on 2', 'Pick Any 2 Travel Size Packs worth Rs 398 on All Orders', NULL, NULL, 'brand_image_3_1668417277.png', 1, NULL, 3, 'brand-1563720de1ea03f', 1, 1, '2022-11-14 03:14:37', '2022-11-14 03:44:01'),
(4, 'Brand-9', 'On Rs.3000: MAC Stack Sample & Gift!', 'On Rs.4500: Get an Additional Sling Bag!', NULL, NULL, 'brand_image_4_1668417328.png', 1, NULL, 4, 'brand-1563720dd1d17eb', 1, 1, '2022-11-14 03:15:28', '2022-11-14 03:43:45'),
(5, 'Brand-8', 'Pick 3 Gifts on All', 'Full Size Orders', NULL, NULL, 'brand_image_5_1668417428.png', NULL, 1, 1, 'brand-1563720dc7024b7', 1, 1, '2022-11-14 03:17:08', '2022-11-14 03:43:35'),
(6, 'Brand-7', 'Mini Brush Set', 'On Rs.3500', NULL, NULL, 'brand_image_6_1668417463.png', NULL, 1, 2, 'brand-1563720db6b634a', 1, 1, '2022-11-14 03:17:43', '2022-11-14 03:43:18'),
(7, 'Brand-6', 'Gimme Brow+ Mini', 'Worth Rs.1340 On Rs.2500', NULL, NULL, 'brand_image_7_1668417495.png', NULL, 1, 3, 'brand-1563720da95df3e', 1, 1, '2022-11-14 03:18:15', '2022-11-14 03:43:05'),
(8, 'Brand-10', 'Upto 20% off + Free Face Scrub', 'worth Rs. 249 on Rs. 799', NULL, NULL, 'brand_image_8_1668417551.png', NULL, 1, 4, 'brand-1563720deed7972', 1, 1, '2022-11-14 03:19:11', '2022-11-14 03:44:14'),
(9, 'Brand-5', 'Flat 20%', 'Additional 5% on 2+ products', NULL, NULL, 'brand_image_9_1668417578.png', NULL, 1, 5, 'brand-1563720d90e5489', 1, 1, '2022-11-14 03:19:38', '2022-11-14 03:42:40'),
(10, 'Brand-4', 'Upto 30% off + Free Face Scrub', 'worth Rs. 249 on Rs. 799', NULL, NULL, 'brand_image_10_1668417615.png', NULL, 1, 6, 'brand-1563720d86d5299', 1, 1, '2022-11-14 03:20:15', '2022-11-14 03:42:30'),
(11, 'Brand-3', 'The Fragrance Collection', 'By Huda & Mona Kattan', NULL, NULL, 'brand_image_11_1668417645.png', NULL, 1, 7, 'brand-1563720d7ca1ac8', 1, 1, '2022-11-14 03:20:45', '2022-11-14 03:42:20'),
(12, 'Brand-2', '7ml Sample On Very Good Girl Glam', 'Up To 10% Off', NULL, NULL, 'brand_image_12_1668417688.png', NULL, 1, 8, 'brand-1563720d6c98121', 1, 1, '2022-11-14 03:21:28', '2022-11-14 03:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_creator` int(11) DEFAULT NULL,
  `category_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `category_slug`, `category_creator`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Vernon Chavez', 'category_image_1668418160.jpg', 'vernon-chavez', 1, 1, '2022-11-14 03:27:45', '2022-11-14 03:29:20'),
(2, 'Xyla Doyle', 'category_image_2_1668418073.jpg', 'xyla-doyle', 1, 1, '2022-11-14 03:27:53', '2022-11-14 03:27:53'),
(3, 'Driscoll Moreno', 'category_image_3_1668418084.jpg', 'driscoll-moreno', 1, 1, '2022-11-14 03:28:04', '2022-11-14 03:28:04'),
(4, 'Taylor Miles', 'category_image_4_1668418102.jpg', 'taylor-miles', 1, 1, '2022-11-14 03:28:22', '2022-11-14 03:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_creator` int(11) DEFAULT NULL,
  `color_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_name`, `color_code`, `color_slug`, `color_creator`, `color_status`, `created_at`, `updated_at`) VALUES
(1, 'Darrel King', 'Unde sunt temporibus', 'color-1563720e4b4fda4', 1, 1, '2022-11-14 03:45:47', NULL),
(2, 'Barclay Noel', 'Eiusmod sed libero s', 'color-1563720e517daca', 1, 1, '2022-11-14 03:45:53', NULL),
(3, 'Carl Delaney', 'Id esse est est n', 'color-1563720e56d5f65', 1, 1, '2022-11-14 03:45:58', NULL),
(4, 'Martin Strong', 'Ut quas reprehenderi', 'color-1563720e5c5ba80', 1, 1, '2022-11-14 03:46:04', NULL),
(5, 'Moana Buck', 'Velit reiciendis ad', 'color-1563720e615e3ec', 1, 1, '2022-11-14 03:46:09', NULL),
(6, 'Jason Chapman', 'In quo excepteur inv', 'color-1563720e664ca8e', 1, 1, '2022-11-14 03:46:14', NULL),
(7, 'Ruth Gray', 'Consequatur ex perf', 'color-1563720e6f91eb3', 1, 1, '2022-11-14 03:46:23', NULL),
(8, 'Wing Villarreal', 'Odio est in est sit', 'color-1563720e7525e7f', 1, 1, '2022-11-14 03:46:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE `contact_information` (
  `ci_id` bigint(20) UNSIGNED NOT NULL,
  `ci_phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_phone3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_phone4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_email1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_email3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_email4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_add1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_add2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_add3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_add4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_information`
--

INSERT INTO `contact_information` (`ci_id`, `ci_phone1`, `ci_phone2`, `ci_phone3`, `ci_phone4`, `ci_email1`, `ci_email2`, `ci_email3`, `ci_email4`, `ci_add1`, `ci_add2`, `ci_add3`, `ci_add4`, `ci_slug`, `ci_status`, `created_at`, `updated_at`) VALUES
(1, '01511-111124', NULL, NULL, NULL, 'contact@gmail.com', NULL, NULL, NULL, 'Mohammadpur, Dhaka Bangladesh', NULL, NULL, NULL, NULL, 1, NULL, '2022-11-14 02:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_discount` int(11) DEFAULT NULL,
  `coupon_validity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_creator` int(11) DEFAULT NULL,
  `coupon_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_26_094210_create_roles_table', 1),
(6, '2022_10_26_115453_create_basics_table', 1),
(7, '2022_10_26_115530_create_contact_information_table', 1),
(8, '2022_10_26_115558_create_social_media_table', 1),
(9, '2022_10_26_115630_create_brands_table', 1),
(10, '2022_10_26_115958_create_banners_table', 1),
(11, '2022_10_27_054207_create_categories_table', 1),
(12, '2022_10_27_062132_create_sub_categories_table', 1),
(13, '2022_10_27_070604_create_sub_sub_categories_table', 1),
(14, '2022_10_27_085800_create_coupons_table', 1),
(15, '2022_10_31_080608_create_colors_table', 1),
(16, '2022_10_31_090410_create_products_table', 1),
(17, '2022_11_04_140035_create_product_variants_table', 1),
(18, '2022_11_05_085107_create_multi_images_table', 1),
(19, '2022_11_06_100022_create_ship_divisions_table', 1),
(20, '2022_11_06_101106_create_ship_districts_table', 1),
(21, '2022_11_06_101857_create_ship_states_table', 1),
(22, '2022_11_14_060442_create_promotional_banners_table', 1),
(23, '2022_11_14_065210_create_sponsors_table', 1),
(24, '2022_11_14_071206_create_promotional_banner_twos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `photo_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `product_id`, `photo_name`, `product_slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/admin/product/multi-image/1668419264.jpg', 'scarlett-savage', '2022-11-14 03:47:44', NULL),
(2, 1, 'uploads/admin/product/multi-image/1668419264.jpg', 'scarlett-savage', '2022-11-14 03:47:44', NULL),
(3, 1, 'uploads/admin/product/multi-image/1668419264.jpg', 'scarlett-savage', '2022-11-14 03:47:44', NULL),
(4, 2, 'uploads/admin/product/multi-image/1668419358.jpg', 'john-morales', '2022-11-14 03:49:19', NULL),
(5, 2, 'uploads/admin/product/multi-image/1668419359.jpg', 'john-morales', '2022-11-14 03:49:19', NULL),
(6, 2, 'uploads/admin/product/multi-image/1668419359.jpg', 'john-morales', '2022-11-14 03:49:19', NULL),
(7, 3, 'uploads/admin/product/multi-image/1668419414.jpg', 'astra-campos', '2022-11-14 03:50:15', NULL),
(8, 3, 'uploads/admin/product/multi-image/1668419415.jpg', 'astra-campos', '2022-11-14 03:50:15', NULL),
(9, 3, 'uploads/admin/product/multi-image/1668419415.jpg', 'astra-campos', '2022-11-14 03:50:15', NULL),
(10, 4, 'uploads/admin/product/multi-image/1668419475.jpg', 'elton-irwin', '2022-11-14 03:51:16', NULL),
(11, 4, 'uploads/admin/product/multi-image/1668419476.jpg', 'elton-irwin', '2022-11-14 03:51:16', NULL),
(12, 4, 'uploads/admin/product/multi-image/1668419476.jpg', 'elton-irwin', '2022-11-14 03:51:16', NULL),
(13, 4, 'uploads/admin/product/multi-image/1668419476.jpg', 'elton-irwin', '2022-11-14 03:51:16', NULL),
(14, 5, 'uploads/admin/product/multi-image/1668419522.jpg', 'madeson-holloway', '2022-11-14 03:52:02', NULL),
(15, 5, 'uploads/admin/product/multi-image/1668419522.jpg', 'madeson-holloway', '2022-11-14 03:52:02', NULL),
(16, 5, 'uploads/admin/product/multi-image/1668419522.jpg', 'madeson-holloway', '2022-11-14 03:52:03', NULL),
(17, 5, 'uploads/admin/product/multi-image/1668419523.jpg', 'madeson-holloway', '2022-11-14 03:52:03', NULL),
(18, 5, 'uploads/admin/product/multi-image/1668419523.jpg', 'madeson-holloway', '2022-11-14 03:52:03', NULL),
(19, 5, 'uploads/admin/product/multi-image/1668419523.jpg', 'madeson-holloway', '2022-11-14 03:52:03', NULL),
(20, 6, 'uploads/admin/product/multi-image/1668419556.jpg', 'blake-wells', '2022-11-14 03:52:36', NULL),
(21, 6, 'uploads/admin/product/multi-image/1668419556.jpg', 'blake-wells', '2022-11-14 03:52:36', NULL),
(22, 6, 'uploads/admin/product/multi-image/1668419556.jpg', 'blake-wells', '2022-11-14 03:52:37', NULL),
(23, 6, 'uploads/admin/product/multi-image/1668419557.jpg', 'blake-wells', '2022-11-14 03:52:37', NULL),
(24, 7, 'uploads/admin/product/multi-image/1668419590.jpg', 'illana-olsen', '2022-11-14 03:53:11', NULL),
(25, 7, 'uploads/admin/product/multi-image/1668419591.jpg', 'illana-olsen', '2022-11-14 03:53:11', NULL),
(26, 7, 'uploads/admin/product/multi-image/1668419591.jpg', 'illana-olsen', '2022-11-14 03:53:11', NULL),
(27, 7, 'uploads/admin/product/multi-image/1668419591.jpg', 'illana-olsen', '2022-11-14 03:53:11', NULL),
(28, 8, 'uploads/admin/product/multi-image/1668419648.jpg', 'hoyt-stafford', '2022-11-14 03:54:08', NULL),
(29, 8, 'uploads/admin/product/multi-image/1668419648.jpg', 'hoyt-stafford', '2022-11-14 03:54:08', NULL),
(30, 8, 'uploads/admin/product/multi-image/1668419648.jpg', 'hoyt-stafford', '2022-11-14 03:54:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subsubcategory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_thambnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deals` int(11) DEFAULT NULL,
  `best_seller` int(11) DEFAULT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_creator` int(11) DEFAULT NULL,
  `product_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `brand_id`, `product_name`, `product_code`, `product_qty`, `product_tags`, `short_description`, `long_description`, `product_thambnail`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `best_seller`, `product_slug`, `product_creator`, `product_status`, `created_at`, `updated_at`) VALUES
(1, 3, 19, 15, 12, 'Scarlett Savage', 'Minim laboris velit', '353', NULL, 'Atque vitae et cum r', NULL, 'uploads/admin/product/product_thambnail/1749464398001525.jpg', NULL, NULL, NULL, NULL, 1, 'scarlett-savage', 1, 1, '2022-11-14 03:47:44', NULL),
(2, 4, 13, 15, 5, 'John Morales', 'Laborum Sunt inven', '237', NULL, 'Sit non reprehender', NULL, 'uploads/admin/product/product_thambnail/1749464497329841.jpg', NULL, NULL, NULL, NULL, 1, 'john-morales', 1, 1, '2022-11-14 03:49:18', NULL),
(3, 3, 21, 15, 5, 'Astra Campos', 'Est quasi aute solut', '122', NULL, 'Molestiae sint dolo', NULL, 'uploads/admin/product/product_thambnail/1749464555952380.jpg', NULL, NULL, NULL, NULL, 1, 'astra-campos', 1, 1, '2022-11-14 03:50:14', NULL),
(4, 4, 13, 26, 3, 'Elton Irwin', 'Accusamus quia volup', '279', NULL, 'Consequatur Minus d', NULL, 'uploads/admin/product/product_thambnail/1749464620059349.jpg', NULL, NULL, NULL, NULL, 1, 'elton-irwin', 1, 1, '2022-11-14 03:51:15', NULL),
(5, 2, 22, 13, 3, 'Madeson Holloway', 'Placeat vitae quis', '763', NULL, 'Necessitatibus nisi', NULL, 'uploads/admin/product/product_thambnail/1749464668864149.jpg', NULL, NULL, NULL, NULL, 1, 'madeson-holloway', 1, 1, '2022-11-14 03:52:02', NULL),
(6, 1, 3, 26, 9, 'Blake Wells', 'Est quam fuga Et vi', '290', NULL, 'Nostrum et voluptatu', NULL, 'uploads/admin/product/product_thambnail/1749464704408504.jpg', NULL, NULL, NULL, NULL, 1, 'blake-wells', 1, 1, '2022-11-14 03:52:36', NULL),
(7, 1, 3, 28, 11, 'Illana Olsen', 'Sunt quae ducimus u', '336', NULL, 'Dignissimos est haru', NULL, 'uploads/admin/product/product_thambnail/1749464740608772.jpg', NULL, NULL, NULL, NULL, 1, 'illana-olsen', 1, 1, '2022-11-14 03:53:10', NULL),
(8, 2, 22, 19, 4, 'Hoyt Stafford', 'Eu incididunt conseq', '641', NULL, 'Eveniet quo enim al', NULL, 'uploads/admin/product/product_thambnail/1749464800828809.jpg', NULL, NULL, NULL, NULL, 0, 'hoyt-stafford', 1, 1, '2022-11-14 03:54:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `pv_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pv_gram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pv_selling_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pv_discount_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `pv_discount_percentage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `pv_qty` int(11) NOT NULL DEFAULT 0,
  `pv_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pv_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `pv_name`, `pv_gram`, `color_id`, `pv_selling_price`, `pv_discount_price`, `pv_discount_percentage`, `pv_qty`, `pv_image`, `product_slug`, `pv_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Madonna Leon', '5gm', 2, '678', '379', '56', 528, NULL, 'scarlett-savage', 1, '2022-11-14 03:47:44', '2022-11-14 03:47:44'),
(2, 1, 'Ignatius Fuentes', '6gm', 7, '860', '253', '67', 309, NULL, 'scarlett-savage', 1, '2022-11-14 03:47:44', '2022-11-14 03:47:44'),
(3, 2, 'Caesar Spencer', '15gm', 8, '129', '339', '59', 405, NULL, 'john-morales', 1, '2022-11-14 03:49:19', '2022-11-14 03:49:19'),
(4, 2, 'Karleigh Holt', '20gm', 5, '199', '240', '48', 969, NULL, 'john-morales', 1, '2022-11-14 03:49:19', '2022-11-14 03:49:19'),
(5, 2, 'Rosalyn Castillo', '25gm', 4, '992', '166', '19', 838, NULL, 'john-morales', 1, '2022-11-14 03:49:19', '2022-11-14 03:49:19'),
(6, 3, 'Joseph Jensen', '10gm', 2, '55', '625', '55', 329, NULL, 'astra-campos', 1, '2022-11-14 03:50:15', '2022-11-14 03:50:15'),
(7, 3, 'MacKensie Benson', '30gm', 4, '86', '395', '58', 278, NULL, 'astra-campos', 1, '2022-11-14 03:50:15', '2022-11-14 03:50:15'),
(8, 4, 'Avye Henson', '40gm', 7, '393', '803', '12', 735, NULL, 'elton-irwin', 1, '2022-11-14 03:51:16', '2022-11-14 03:51:16'),
(9, 4, 'Amir Oneill', '50gm', 8, '290', '389', '69', 394, NULL, 'elton-irwin', 1, '2022-11-14 03:51:16', '2022-11-14 03:51:16'),
(10, 4, 'Roary Black', '20gm', 7, '489', '515', '99', 763, NULL, 'elton-irwin', 1, '2022-11-14 03:51:16', '2022-11-14 03:51:16'),
(11, 5, 'Adria Workman', '35gm', 4, '603', '762', '3', 323, NULL, 'madeson-holloway', 1, '2022-11-14 03:52:03', '2022-11-14 03:52:03'),
(12, 5, 'Chaim Rios', '45gm', 4, '220', '11', '18', 551, NULL, 'madeson-holloway', 1, '2022-11-14 03:52:03', '2022-11-14 03:52:03'),
(13, 6, 'Mollie Rice', '60gm', 7, '471', '751', '89', 993, NULL, 'blake-wells', 1, '2022-11-14 03:52:37', '2022-11-14 03:52:37'),
(14, 7, 'Nora Hopkins', '15gm', 4, '523', '207', '58', 185, NULL, 'illana-olsen', 1, '2022-11-14 03:53:11', '2022-11-14 03:53:11'),
(15, 8, 'Beverly Herring', '20gm', 5, '948', '11', '10', 970, NULL, 'hoyt-stafford', 1, '2022-11-14 03:54:09', '2022-11-14 03:54:09'),
(16, 8, 'Ira Patel', '24gm', 8, '693', '821', '26', 660, NULL, 'hoyt-stafford', 1, '2022-11-14 03:54:09', '2022-11-14 03:54:09'),
(17, 8, 'Burke Mcpherson', '10gm', 2, '651', '193', '98', 517, NULL, 'hoyt-stafford', 1, '2022-11-14 03:54:09', '2022-11-14 03:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `promotional_banners`
--

CREATE TABLE `promotional_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_ban_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_ban_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_ban_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_ban_creator` int(11) DEFAULT NULL,
  `pro_ban_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotional_banners`
--

INSERT INTO `promotional_banners` (`id`, `pro_ban_image`, `pro_ban_url`, `pro_ban_slug`, `pro_ban_creator`, `pro_ban_status`, `created_at`, `updated_at`) VALUES
(1, 'pro_ban_image_1_1668416197.png', '#', 'pro-banner-15637202c5568ca', 1, 1, '2022-11-14 02:56:37', '2022-11-14 02:56:37'),
(2, 'pro_ban_image_2_1668416211.png', '#', 'pro-banner-15637202d361d6c', 1, 1, '2022-11-14 02:56:51', '2022-11-14 02:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `promotional_banner_twos`
--

CREATE TABLE `promotional_banner_twos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_ban_two_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_ban_two_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_ban_two_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_ban_two_creator` int(11) DEFAULT NULL,
  `pro_ban_two_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotional_banner_twos`
--

INSERT INTO `promotional_banner_twos` (`id`, `pro_ban_two_image`, `pro_ban_two_url`, `pro_ban_two_slug`, `pro_ban_two_creator`, `pro_ban_two_status`, `created_at`, `updated_at`) VALUES
(1, 'pro_ban_two_image_1_1668416233.png', '#', 'pro-banner_two-15637202e9ce20d', 1, 1, '2022-11-14 02:57:13', '2022-11-14 02:57:14'),
(2, 'pro_ban_two_image_2_1668416242.png', '#', 'pro-banner_two-15637202f249c1b', 1, 1, '2022-11-14 02:57:22', '2022-11-14 02:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_districts`
--

CREATE TABLE `ship_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_district_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_creator` int(11) DEFAULT NULL,
  `district_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_districts`
--

INSERT INTO `ship_districts` (`id`, `division_id`, `district_name`, `bn_district_name`, `district_slug`, `district_creator`, `district_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Narsingdi', 'নরসিংদী', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(2, 1, 'Gazipur', 'গাজীপুর', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(3, 1, 'Shariatpur', 'শরীয়তপুর', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(4, 1, 'Narayanganj', 'নারায়ণগঞ্জ', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(5, 1, 'Tangail', 'টাঙ্গাইল', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(6, 1, 'Kishoreganj', 'কিশোরগঞ্জ', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(7, 1, 'Manikganj', 'মানিকগঞ্জ', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(8, 1, 'Dhaka', 'ঢাকা', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(9, 1, 'Munshiganj', 'মুন্সিগঞ্জ', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(10, 1, 'Rajbari', 'রাজবাড়ী', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(11, 1, 'Madaripur', 'মাদারীপুর', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(12, 1, 'Gopalganj', 'গোপালগঞ্জ', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(13, 1, 'Faridpur', 'ফরিদপুর', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(14, 2, 'Comilla', 'কুমিল্লা', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(15, 2, 'Feni', 'ফেনী', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(16, 2, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(17, 2, 'Rangamati', 'রাঙ্গামাটি', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(18, 2, 'Noakhali', 'নোয়াখালী', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(19, 2, 'Chandpur', 'চাঁদপুর', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(20, 2, 'Lakshmipur', 'লক্ষ্মীপুর', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(21, 2, 'Chittagong', 'চট্টগ্রাম', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(22, 2, 'Coxsbazar', 'কক্সবাজার', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(23, 2, 'Khagrachhari', 'খাগড়াছড়ি', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(24, 2, 'Bandarban', 'বান্দরবান', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(25, 3, 'Sirajganj', 'সিরাজগঞ্জ', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(26, 3, 'Pabna', 'পাবনা', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(27, 3, 'Bogra', 'বগুড়া', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(28, 3, 'Rajshahi', 'রাজশাহী', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(29, 3, 'Natore', 'নাটোর', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(30, 3, 'Joypurhat', 'জয়পুরহাট', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(31, 3, 'Chapainawabganj', 'চাঁপাইনবাবগঞ্জ', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(32, 3, 'Naogaon', 'নওগাঁ', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(33, 4, 'Jessore', 'যশোর', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(34, 4, 'Satkhira', 'সাতক্ষীরা', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(35, 4, 'Meherpur', 'মেহেরপুর', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(36, 4, 'Narail', 'নড়াইল', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(37, 4, 'Chuadanga', 'চুয়াডাঙ্গা', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(38, 4, 'Kushtia', 'কুষ্টিয়া', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(39, 4, 'Magura', 'মাগুরা', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(40, 4, 'Khulna', 'খুলনা', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(41, 4, 'Bagerhat', 'বাগেরহাট', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(42, 4, 'Jhenaidah', 'ঝিনাইদহ', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(43, 5, 'Jhalakathi', 'ঝালকাঠি', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(44, 5, 'Patuakhali', 'পটুয়াখালী', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(45, 5, 'Pirojpur', 'পিরোজপুর', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(46, 5, 'Barisal', 'বরিশাল', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(47, 5, 'Bhola', 'ভোলা', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(48, 5, 'Barguna', 'বরগুনা', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(49, 6, 'Panchagarh', 'পঞ্চগড়', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(50, 6, 'Dinajpur', 'দিনাজপুর', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(51, 6, 'Lalmonirhat', 'লালমনিরহাট', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(52, 6, 'Nilphamari', 'নীলফামারী', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(53, 6, 'Gaibandha', 'গাইবান্ধা', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(54, 6, 'Thakurgaon', 'ঠাকুরগাঁও', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(55, 6, 'Rangpur', 'রংপুর', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(56, 6, 'Kurigram', 'কুড়িগ্রাম', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(57, 7, 'Sylhet', 'সিলেট', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(58, 7, 'Moulvibazar', 'মৌলভীবাজার', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(59, 7, 'Habiganj', 'হবিগঞ্জ', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(60, 7, 'Sunamganj', 'সুনামগঞ্জ', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(61, 8, 'Sherpur', 'শেরপুর', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(62, 8, 'Mymensingh', 'ময়মনসিংহ', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(63, 8, 'Jamalpur', 'জামালপুর', 'ship-district-156372018d58879', NULL, 1, NULL, NULL),
(64, 8, 'Netrokona', 'নেত্রকোণা', 'ship-district-156372018d58879', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_divisions`
--

CREATE TABLE `ship_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_division_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge` int(11) NOT NULL DEFAULT 0,
  `division_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_creator` int(11) DEFAULT NULL,
  `division_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_divisions`
--

INSERT INTO `ship_divisions` (`id`, `division_name`, `bn_division_name`, `charge`, `division_slug`, `division_creator`, `division_status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'ঢাকা', 60, 'ship-division-156372018d4a596', NULL, 1, NULL, NULL),
(2, 'Chittagong', 'চট্টগ্রাম', 120, 'ship-division-156372018d4a596', NULL, 1, NULL, NULL),
(3, 'Rajshahi', 'রাজশাহী', 120, 'ship-division-156372018d4a596', NULL, 1, NULL, NULL),
(4, 'Khulna', 'খুলনা', 120, 'ship-division-156372018d4a596', NULL, 1, NULL, NULL),
(5, 'Barisal', 'বরিশাল', 120, 'ship-division-156372018d4a596', NULL, 1, NULL, NULL),
(6, 'Rangpur', 'রংপুর', 120, 'ship-division-156372018d4a596', NULL, 1, NULL, NULL),
(7, 'Sylhet', 'সিলেট', 120, 'ship-division-156372018d4a596', NULL, 1, NULL, NULL),
(8, 'Mymensingh', 'ময়মনসিংহ', 120, 'ship-division-156372018d4a596', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_states`
--

CREATE TABLE `ship_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_creator` int(11) DEFAULT NULL,
  `state_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `sm_id` bigint(20) UNSIGNED NOT NULL,
  `sm_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_vimeo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`sm_id`, `sm_facebook`, `sm_twitter`, `sm_linkedin`, `sm_instagram`, `sm_pinterest`, `sm_skype`, `sm_youtube`, `sm_google`, `sm_vimeo`, `sm_whatsapp`, `sm_slug`, `sm_status`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com', 'https://www.twitter.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sponsor_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sponsor_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sponsor_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sponsor_creator` int(11) DEFAULT NULL,
  `sponsor_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcategory_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcategory_creator` int(11) DEFAULT NULL,
  `subcategory_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `subcategory_creator`, `subcategory_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Portia Herring', 'portia-herring', 1, 1, '2022-11-14 03:29:35', NULL),
(2, 4, 'Quincy Mcdaniel', 'quincy-mcdaniel', 1, 1, '2022-11-14 03:29:41', NULL),
(3, 1, 'Alma Snyder', 'alma-snyder', 1, 1, '2022-11-14 03:29:46', NULL),
(4, 4, 'Gisela Hogan', 'gisela-hogan', 1, 1, '2022-11-14 03:29:57', NULL),
(5, 4, 'Rafael Huffman', 'rafael-huffman', 1, 1, '2022-11-14 03:30:07', NULL),
(6, 2, 'Caryn Miles', 'caryn-miles', 1, 1, '2022-11-14 03:30:13', NULL),
(7, 1, 'Inga Lindsey', 'inga-lindsey', 1, 1, '2022-11-14 03:30:21', NULL),
(8, 3, 'Dante Wade', 'dante-wade', 1, 1, '2022-11-14 03:30:26', NULL),
(9, 2, 'Jacob Rowland', 'jacob-rowland', 1, 1, '2022-11-14 03:30:33', NULL),
(10, 4, 'Kitra Benton', 'kitra-benton', 1, 1, '2022-11-14 03:30:38', NULL),
(11, 3, 'Odette Maxwell', 'odette-maxwell', 1, 1, '2022-11-14 03:30:43', NULL),
(12, 2, 'Jamal Wilcox', 'jamal-wilcox', 1, 1, '2022-11-14 03:30:48', NULL),
(13, 4, 'Basia Burks', 'basia-burks', 1, 1, '2022-11-14 03:30:53', NULL),
(14, 4, 'Natalie Michael', 'natalie-michael', 1, 1, '2022-11-14 03:31:03', NULL),
(15, 2, 'Selma Rhodes', 'selma-rhodes', 1, 1, '2022-11-14 03:31:13', NULL),
(16, 1, 'Unity Stafford', 'unity-stafford', 1, 1, '2022-11-14 03:31:32', NULL),
(17, 1, 'Zenaida Gonzales', 'zenaida-gonzales', 1, 1, '2022-11-14 03:31:37', NULL),
(18, 1, 'Deacon Wiley', 'deacon-wiley', 1, 1, '2022-11-14 03:31:42', NULL),
(19, 3, 'Aladdin Nicholson', 'aladdin-nicholson', 1, 1, '2022-11-14 03:31:54', NULL),
(20, 3, 'Whoopi Sheppard', 'whoopi-sheppard', 1, 1, '2022-11-14 03:32:00', NULL),
(21, 3, 'Kirby Duncan', 'kirby-duncan', 1, 1, '2022-11-14 03:32:06', NULL),
(22, 2, 'Anastasia Gibson', 'anastasia-gibson', 1, 1, '2022-11-14 03:33:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `subsubcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subsubcategory_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subsubcategory_creator` int(11) DEFAULT NULL,
  `subsubcategory_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `category_id`, `subcategory_id`, `subsubcategory_name`, `subsubcategory_slug`, `subsubcategory_creator`, `subsubcategory_status`, `created_at`, `updated_at`) VALUES
(1, 2, 22, 'Tate Moon', 'tate-moon', 1, 1, '2022-11-14 03:33:12', NULL),
(2, 2, 22, 'Kitra Gilliam', 'kitra-gilliam', 1, 1, '2022-11-14 03:33:18', NULL),
(3, 3, 19, 'Rebekah Mendez', 'rebekah-mendez', 1, 1, '2022-11-14 03:33:24', NULL),
(4, 4, 13, 'Yasir Shaw', 'yasir-shaw', 1, 1, '2022-11-14 03:33:30', NULL),
(5, 4, 13, 'Emi Ellison', 'emi-ellison', 1, 1, '2022-11-14 03:33:44', NULL),
(6, 4, 13, 'Eleanor Nichols', 'eleanor-nichols', 1, 1, '2022-11-14 03:33:49', NULL),
(7, 2, 22, 'Willow Jordan', 'willow-jordan', 1, 1, '2022-11-14 03:33:54', NULL),
(8, 3, 19, 'Myles Crosby', 'myles-crosby', 1, 1, '2022-11-14 03:34:01', NULL),
(9, 4, 13, 'Cherokee Macias', 'cherokee-macias', 1, 1, '2022-11-14 03:34:09', NULL),
(10, 3, 19, 'Martena Gates', 'martena-gates', 1, 1, '2022-11-14 03:34:16', NULL),
(11, 1, 3, 'Wesley Stark', 'wesley-stark', 1, 1, '2022-11-14 03:34:22', NULL),
(12, 2, 22, 'Oleg Burris', 'oleg-burris', 1, 1, '2022-11-14 03:34:28', NULL),
(13, 2, 22, 'Candice Grimes', 'candice-grimes', 1, 1, '2022-11-14 03:34:34', NULL),
(14, 1, 3, 'Sigourney Whitehead', 'sigourney-whitehead', 1, 1, '2022-11-14 03:34:41', NULL),
(15, 3, 21, 'Hyacinth Wooten', 'hyacinth-wooten', 1, 1, '2022-11-14 03:34:48', NULL),
(16, 1, 3, 'Cairo Lott', 'cairo-lott', 1, 1, '2022-11-14 03:34:55', NULL),
(17, 1, 3, 'Flavia Frank', 'flavia-frank', 1, 1, '2022-11-14 03:35:00', NULL),
(18, 3, 19, 'Charissa Gallegos', 'charissa-gallegos', 1, 1, '2022-11-14 03:35:06', NULL),
(19, 3, 19, 'Autumn Wolfe', 'autumn-wolfe', 1, 1, '2022-11-14 03:35:12', NULL),
(20, 1, 3, 'Naida Ball', 'naida-ball', 1, 1, '2022-11-14 03:35:19', NULL),
(21, 2, 22, 'Lance Calderon', 'lance-calderon', 1, 1, '2022-11-14 03:35:29', NULL),
(22, 2, 22, 'Willow Sharp', 'willow-sharp', 1, 1, '2022-11-14 03:36:09', NULL),
(23, 4, 13, 'Kaden Villarreal', 'kaden-villarreal', 1, 1, '2022-11-14 03:36:13', NULL),
(24, 3, 19, 'Erasmus Dalton', 'erasmus-dalton', 1, 1, '2022-11-14 03:36:20', NULL),
(25, 1, 3, 'Zenaida Salinas', 'zenaida-salinas', 1, 1, '2022-11-14 03:36:26', NULL),
(26, 4, 13, 'Bert Boyer', 'bert-boyer', 1, 1, '2022-11-14 03:36:31', NULL),
(27, 4, 13, 'Ila Combs', 'ila-combs', 1, 1, '2022-11-14 03:36:37', NULL),
(28, 1, 3, 'Brian Briggs', 'brian-briggs', 1, 1, '2022-11-14 03:36:43', NULL),
(29, 1, 3, 'Calvin Weeks', 'calvin-weeks', 1, 1, '2022-11-14 03:36:48', NULL),
(30, 4, 13, 'Samuel Ochoa', 'samuel-ochoa', 1, 1, '2022-11-14 03:36:52', NULL),
(31, 3, 3, 'Lillith Griffith', 'lillith-griffith', 1, 1, '2022-11-14 03:36:57', NULL),
(32, 1, 3, 'Velma Parrish', 'velma-parrish', 1, 1, '2022-11-14 03:37:05', NULL),
(33, 2, 22, 'Wyoming Day', 'wyoming-day', 1, 1, '2022-11-14 03:37:10', NULL),
(34, 3, 19, 'Thor Harrell', 'thor-harrell', 1, 1, '2022-11-14 03:37:18', NULL),
(35, 3, 19, 'Rafael Cabrera', 'rafael-cabrera', 1, 1, '2022-11-14 03:37:29', NULL),
(36, 4, 13, 'Zena Hubbard', 'zena-hubbard', 1, 1, '2022-11-14 03:37:35', NULL),
(37, 2, 22, 'Ruby Rojas', 'ruby-rojas', 1, 1, '2022-11-14 03:37:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `user_banned` tinyint(4) NOT NULL DEFAULT 0,
  `last_seen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `user_banned`, `last_seen`, `email`, `phone`, `provider_id`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, 0, NULL, 'admin@gmail.com', NULL, NULL, 'uploads/avatar.png', NULL, '$2y$10$mgDOkLQGQjSBXOhv0xFKf.U.50ytKo3SqaH3fbHS3Mdlu5FpCJ6LO', NULL, '2022-11-14 02:52:37', '2022-11-14 02:52:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basics`
--
ALTER TABLE `basics`
  ADD PRIMARY KEY (`basic_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_information`
--
ALTER TABLE `contact_information`
  ADD PRIMARY KEY (`ci_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_images`
--
ALTER TABLE `multi_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotional_banners`
--
ALTER TABLE `promotional_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotional_banner_twos`
--
ALTER TABLE `promotional_banner_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_districts`
--
ALTER TABLE `ship_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_states`
--
ALTER TABLE `ship_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`sm_id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `basics`
--
ALTER TABLE `basics`
  MODIFY `basic_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_information`
--
ALTER TABLE `contact_information`
  MODIFY `ci_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `multi_images`
--
ALTER TABLE `multi_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `promotional_banners`
--
ALTER TABLE `promotional_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `promotional_banner_twos`
--
ALTER TABLE `promotional_banner_twos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ship_districts`
--
ALTER TABLE `ship_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ship_states`
--
ALTER TABLE `ship_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `sm_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
