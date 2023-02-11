-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 07:32 AM
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
-- Database: `final_enaya2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `returnorder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orders` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alluser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminuserrole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(25) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `brand`, `category`, `product`, `slider`, `coupons`, `shipping`, `setting`, `returnorder`, `review`, `orders`, `stock`, `reports`, `alluser`, `adminuserrole`, `blog`, `type`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$1$nWeXrsS0$PL0E9KQxkaHYlNVVMKXa50', '0775252251', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, NULL, NULL, '202302042108nakad.jpg', NULL, '2023-02-04 18:08:17'),
(3, 'juman', 'juman@admin.com', NULL, '$2y$10$HO2i5UGL9hRE8Ka/joVvV.9XcTWfQCZoEGd6y/oVDtBKoPSHF7BEu', '0775252251', '1', NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 'upload/admin_images/1757295661409937.jpg', '2023-02-09 06:30:37', '2023-02-09 06:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details_hin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_categories`
--

CREATE TABLE `blog_post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_name_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name_en`, `brand_name_hin`, `brand_slug_en`, `brand_slug_hin`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'Nestle', 'نيستليه', 'nestle', 'نيستليه', 'upload/brand/1755103673249630.png', NULL, NULL),
(3, 'Similac', 'Similac', 'similac', 'Similac', 'upload/brand/1755114613528386.png', NULL, NULL),
(4, 'Pampers', 'بامبرز', 'pampers', 'بامبرز', 'upload/brand/1756392224194332.png', NULL, NULL),
(5, 'Huggies', 'Huggies', 'huggies', 'Huggies', 'upload/brand/1756765213083853.png', NULL, NULL),
(6, 'Chico', 'Chico', 'chico', 'Chico', 'upload/brand/1756765999273109.png', NULL, NULL),
(7, 'Avent', 'Avent', 'avent', 'Avent', 'upload/brand/1756766855020062.png', NULL, NULL),
(9, 'Colgate', 'Colgate', 'colgate', 'Colgate', 'upload/brand/1757334621975990.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name_en`, `category_name_hin`, `category_slug_en`, `category_slug_hin`, `category_icon`, `created_at`, `updated_at`) VALUES
(1, 'Baby Care', 'عناية بالأطفال', 'baby-care', 'عناية-بالأطفال', 'fa-solid fa-baby-carriage', NULL, NULL),
(2, 'Oral Care', 'اسنان', 'oral-care', 'اسنان', 'fa-solid fa-tooth', NULL, NULL),
(3, 'Skin Care', 'البشرة', 'skin-care', 'البشرة', 'fa-solid fa-hand-dots', NULL, NULL),
(4, 'Hair Care', 'الشعر', 'hair-care', 'الشعر', 'fa-solid fa-scissors', NULL, NULL),
(5, 'Health Devices', 'اجهزة طبية', 'health-devices', 'اجهزة-طبية', 'fa-solid fa-suitcase-medical', NULL, NULL),
(6, 'Women', 'المرأة', 'women', 'المرأة', 'fa-solid fa-venus', NULL, NULL),
(7, 'Men', 'الرجل', 'men', 'الرجل', 'fa-solid fa-mars', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'TEST', 10, '2023-04-02', 1, '2023-02-02 17:53:24', NULL),
(2, 'VALENTINE\'S DAY', 10, '2023-02-23', 1, '2023-02-02 17:53:37', NULL);

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_02_02_203839_create_sessions_table', 1),
(7, '2021_02_02_212221_create_admins_table', 1),
(8, '2021_02_09_054528_create_brands_table', 1),
(9, '2021_02_09_111701_create_categories_table', 1),
(10, '2021_02_09_121910_create_sub_categories_table', 1),
(11, '2021_02_16_183944_create_sub_sub_categories_table', 1),
(12, '2021_02_16_204006_create_products_table', 1),
(13, '2021_02_16_205349_create_multi_imgs_table', 1),
(14, '2021_02_20_204829_create_sliders_table', 1),
(15, '2021_03_02_194613_create_wishlists_table', 1),
(16, '2021_03_03_211157_create_coupons_table', 1),
(17, '2021_03_03_222308_create_ship_divisions_table', 1),
(18, '2021_03_09_183956_create_ship_districts_table', 1),
(19, '2021_03_09_194733_create_ship_states_table', 1),
(20, '2021_03_14_203654_create_orders_table', 1),
(21, '2021_03_14_203901_create_order_items_table', 1),
(22, '2021_03_24_183649_create_blog_post_categories_table', 1),
(23, '2021_03_24_194838_create_blog_posts_table', 1),
(24, '2021_03_24_223430_create_site_settings_table', 1),
(25, '2021_03_26_194141_create_seos_table', 1),
(26, '2021_03_27_192140_create_reviews_table', 1),
(27, '2023_02_03_134114_create_shippings_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `multi_imgs`
--

CREATE TABLE `multi_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_imgs`
--

INSERT INTO `multi_imgs` (`id`, `product_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'upload/products/multi-image/1755104321632605.jpg', '2023-01-15 12:51:54', NULL),
(2, 1, 'upload/products/multi-image/1755104322357328.jpg', '2023-01-15 12:51:55', NULL),
(3, 1, 'upload/products/multi-image/1755104323135240.png', '2023-01-15 12:51:57', NULL),
(4, 1, 'upload/products/multi-image/1755104325007094.jpg', '2023-01-15 12:51:58', NULL),
(13, 4, 'upload/products/multi-image/1755115001381090.jpg', '2023-01-15 15:41:39', NULL),
(14, 4, 'upload/products/multi-image/1755115001492314.jpg', '2023-01-15 15:41:39', NULL),
(15, 4, 'upload/products/multi-image/1755115001610235.jpg', '2023-01-15 15:41:39', NULL),
(16, 5, 'upload/products/multi-image/1756392765074032.png', '2023-01-29 18:11:09', NULL),
(17, 5, 'upload/products/multi-image/1756392765429369.png', '2023-01-29 18:11:10', NULL),
(18, 5, 'upload/products/multi-image/1756764914284136.png', '2023-01-29 18:11:10', '2023-02-02 20:46:19'),
(19, 6, 'upload/products/multi-image/1756765407345355.png', '2023-02-02 20:53:05', '2023-02-02 20:54:09'),
(20, 6, 'upload/products/multi-image/1756765341267513.png', '2023-02-02 20:53:06', NULL),
(21, 6, 'upload/products/multi-image/1756765341662699.png', '2023-02-02 20:53:06', NULL),
(22, 7, 'upload/products/multi-image/1756765653377262.png', '2023-02-02 20:58:04', NULL),
(23, 7, 'upload/products/multi-image/1756765653846945.png', '2023-02-02 20:58:04', NULL),
(24, 7, 'upload/products/multi-image/1756765654188177.png', '2023-02-02 20:58:04', NULL),
(25, 8, 'upload/products/multi-image/1756766136249655.png', '2023-02-02 21:05:44', NULL),
(26, 8, 'upload/products/multi-image/1756766136600030.png', '2023-02-02 21:05:44', NULL),
(27, 8, 'upload/products/multi-image/1756766136939679.png', '2023-02-02 21:05:45', NULL),
(28, 8, 'upload/products/multi-image/1756766137301390.png', '2023-02-02 21:05:45', NULL),
(29, 9, 'upload/products/multi-image/1756766660755010.png', '2023-02-02 21:14:04', NULL),
(30, 9, 'upload/products/multi-image/1756766661039376.png', '2023-02-02 21:14:04', NULL),
(31, 9, 'upload/products/multi-image/1756766661408035.png', '2023-02-02 21:14:05', NULL),
(32, 9, 'upload/products/multi-image/1756766661932325.png', '2023-02-02 21:14:05', NULL),
(33, 10, 'upload/products/multi-image/1756767000987267.png', '2023-02-02 21:19:29', NULL),
(34, 10, 'upload/products/multi-image/1756767001431845.png', '2023-02-02 21:19:29', NULL),
(35, 10, 'upload/products/multi-image/1756767001762175.png', '2023-02-02 21:19:29', NULL),
(36, 11, 'upload/products/multi-image/1757334785363678.png', '2023-02-09 03:44:10', NULL),
(37, 11, 'upload/products/multi-image/1757334785810271.png', '2023-02-09 03:44:11', NULL),
(38, 11, 'upload/products/multi-image/1757334786359527.png', '2023-02-09 03:44:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picked_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `division_id`, `district_id`, `state_id`, `name`, `email`, `phone`, `post_code`, `notes`, `payment_type`, `payment_method`, `transaction_id`, `currency`, `amount`, `order_number`, `invoice_no`, `order_date`, `order_month`, `order_year`, `confirmed_date`, `processing_date`, `picked_date`, `shipped_date`, `delivered_date`, `cancel_date`, `return_date`, `return_reason`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, NULL, 'maria', 'maria@gmail.com', '0775252251', 1324, 'lorem', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 130.00, NULL, 'EOS22082013', '03 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-03 12:40:28', NULL),
(2, 1, 1, 1, NULL, 'maria', 'maria@gmail.com', '0775252251', 1324, 'lorem', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 130.00, NULL, 'EOS16863928', '03 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-03 12:52:49', NULL),
(3, 1, 1, 1, NULL, 'maria', 'maria@gmail.com', '0775252251', 1324, 'lorem', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 130.00, NULL, 'EOS16611098', '03 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-03 13:04:51', NULL),
(4, 1, 1, 1, NULL, 'maria', 'maria@gmail.com', '0775252251', 1324, 'lorem', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 5.00, NULL, 'EOS21195678', '03 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'processing', '2023-02-03 15:51:27', '2023-02-09 06:28:17'),
(5, 1, 1, 3, NULL, 'maria', 'maria@gmail.com', '0775252251', 43434, 'lorem', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 7.00, NULL, 'EOS57299520', '03 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'delivered', '2023-02-03 15:54:19', '2023-02-04 06:09:41'),
(6, 1, 1, 1, NULL, 'maria', 'maria@gmail.com', '0775252251', 1324, 'lorwem', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 10.00, NULL, 'EOS18680055', '03 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'delivered', '2023-02-03 18:59:04', '2023-02-08 17:13:07'),
(7, 1, 1, NULL, NULL, 'maria', 'maria@gmail.com', '0775252251', 1324, 'lorem', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 87.00, NULL, 'EOS64183026', '08 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-08 19:21:18', NULL),
(8, 1, 1, NULL, NULL, 'maria', 'maria@gmail.com', '0775252251', 23324, 'lorem', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 19.00, NULL, 'EOS67204561', '08 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-08 19:23:32', NULL),
(9, 1, 1, 1, NULL, 'maria', 'maria@gmail.com', '0775252251', 1324, 'lorem', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 9.00, NULL, 'EOS19919274', '08 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-08 19:26:13', NULL),
(10, 1, NULL, 1, NULL, 'maria', 'maria@gmail.com', '0775252251', 2323, 'lorem', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 9.00, NULL, 'EOS61692712', '08 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-08 19:27:16', NULL),
(11, 1, 1, 1, NULL, 'maria', 'maria@gmail.com', '0775252251', 2323, 'lorem', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 0.00, NULL, 'EOS43969402', '08 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-08 19:37:56', NULL),
(12, 1, 1, 1, NULL, 'maria', 'maria@gmail.com', '0775252251', 1324, 'lorem', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 15.00, NULL, 'EOS13708828', '08 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-08 19:54:54', NULL),
(13, 1, 1, 1, NULL, 'maria', 'maria@gmail.com', '0775252251', 1324, 'lorem', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 3.00, NULL, 'EOS20921830', '09 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-09 06:26:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `color`, `size`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 3, 9, NULL, NULL, '2', 69.99, '2023-02-03 13:04:51', NULL),
(2, 3, 4, NULL, NULL, '1', 4.50, '2023-02-03 13:04:51', NULL),
(3, 4, 4, NULL, NULL, '1', 4.50, '2023-02-03 15:51:27', NULL),
(4, 5, 8, NULL, NULL, '1', 7.98, '2023-02-03 15:54:19', NULL),
(5, 6, 5, NULL, NULL, '2', 5.40, '2023-02-03 18:59:04', NULL),
(6, 7, 10, NULL, NULL, '2', 8.50, '2023-02-08 19:21:18', NULL),
(7, 7, 9, NULL, NULL, '1', 69.99, '2023-02-08 19:21:18', NULL),
(8, 8, 5, NULL, NULL, '4', 5.40, '2023-02-08 19:23:32', NULL),
(9, 9, 10, NULL, NULL, '1', 8.50, '2023-02-08 19:26:13', NULL),
(10, 10, 10, NULL, NULL, '1', 8.50, '2023-02-08 19:27:16', NULL),
(11, 12, 10, NULL, NULL, '2', 8.50, '2023-02-08 19:54:54', NULL),
(12, 13, 11, NULL, NULL, '2', 1.50, '2023-02-09 06:26:06', NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `product_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name_hin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_tags_hin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size_hin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color_hin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_descp_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_descp_hin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_descp_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_hin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_thambnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deals` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `product_name_en`, `product_name_hin`, `product_slug_en`, `product_slug_hin`, `product_code`, `product_qty`, `product_tags_en`, `product_tags_hin`, `product_size_en`, `product_size_hin`, `product_color_en`, `product_color_hin`, `selling_price`, `discount_price`, `short_descp_en`, `short_descp_hin`, `long_descp_en`, `long_descp_hin`, `product_thambnail`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 1, 'Nestle Cerelac Baby Cereal with Milk Wheat', NULL, 'nestle-cerelac-baby-cereal-with-milk-wheat', '', '1', '400', NULL, NULL, NULL, NULL, 'red,Black,Amet', NULL, '3', NULL, NULL, NULL, '<p>Nestl&eacute; CERELAC Baby Cereal with Milk, Multigrain Dal Veg is a complementary food for babies from 12 to 24 months. While infants and children have higher requirements of nutrients than adults, 2 serves of CERELAC Multigrain Dal Veg Cereal provide 59% of a baby&rsquo;s daily need for protein. Rich in iron, it is also a source of 16 important nutrients including vitamins and minerals. Nestl&eacute; develops infant nutrition products backed by evolving science and research. Innovation has been at the heart of Nestl&eacute; since its beginning.</p>\r\n\r\n<h2>Uses of Nestle Cerelac Baby Cereal with Milk Wheat Multigrain Dal Veg (From 12 to 24 Months) Powder, 300 gm Refill Pack</h2>\r\n\r\n<p>Baby Cereal</p>\r\n\r\n<h2>Key Benefits</h2>\r\n\r\n<ul>\r\n	<li>MULTIGRAIN DAL VEG BABY CEREAL: Rich in Iron baby cereal for babies from 12 to 24 months</li>\r\n	<li>ESSENTIAL NUTRIENTS FOR GROWTH: A source of 16 important nutrients including vitamins and minerals</li>\r\n	<li>RICH IN PROTEIN: Provides 59% of a baby&rsquo;s daily need of protein in 2 serves</li>\r\n	<li>GOODNESS OF HEALTHY INGREDIENTS: Comes with the goodness of cereal, milk and vegetables</li>\r\n</ul>\r\n\r\n<h2>Directions for Use</h2>\r\n\r\n<ul>\r\n	<li>Wash your hands before preparing baby&#39;s food. Make sure all utensils are thoroughly clean.</li>\r\n	<li>Boil clean drinking water for 5 minutes. Allow to cool. Measure 95ml and pour lukewarm water into baby&#39;s bowl</li>\r\n	<li>Add 4 level scoops of CERELAC.</li>\r\n	<li>Stir until the cereal is smooth and feed immediately using a clean spoon.</li>\r\n	<li>Do not use fewer scoops than directed, since diluted feeding will not provide adequate nutrients needed by your infant.</li>\r\n	<li>Do not use more scoops than directed since concentrated feed will not provide the water needed by your infant.</li>\r\n</ul>\r\n\r\n<h2>Safety Information</h2>\r\n\r\n<ul>\r\n	<li>After opening the pack, the contents should immediately be transferred to an empty, clean, dry and airtight container.</li>\r\n	<li>Replace the lid tightly after every use and store in a cool, dry place.</li>\r\n	<li>Ensure enclosed scoop is thoroughly washed and dried before use.</li>\r\n	<li>After opening, use the contents within 3 weeks or the expiry date, whichever is earlier. Important Notice:Mother&rsquo;s milk is best for your baby.</li>\r\n	<li>Infant food should be used only on the advice of a health worker as to the need for its use and the proper method of its use.</li>\r\n	<li>Infant food is not the sole source of nourishment for an infant.</li>\r\n	<li>Use prepared feed within half an hour otherwise microbial deterioration may set in. Discard unused feed.</li>\r\n</ul>\r\n\r\n<h2>Key Ingredients</h2>\r\n\r\n<p>Wheat flour (Atta) (40.3%), Milk based mix (Milk solids (31.2%) and Sugar), Corn dal flakes (Corn flour (3.3%), Moong dal flour (2.9%), Sugar, Malt extract,nMineral*, Milk solids (0.02%), Antioxidant (alpha-tocopherol)), Sugar, Rice flour (5.5%), Soyabean oil, Milk solids (3.3%), Tomato rice flakes (Tomato puree (0.4%), Sugar,nGlucose syrup, Starch, Rice flour (0.02%)), Spinach cereal mix pieces (Spinach powder (0.5%), Starch, Maltodextrin, Rice flour (0.1%), Spinach puree (0.1%), Sugar, Glucosensyrup, Antioxidant (alpha-tocopherol)), Minerals*, and Vitamins#.n*Minerals: Calcium carbonate, Sodium chloride, Electrolytic iron, Zinc sulphate and Cupric sulphate.n#Vitamins: Sodium ascorbate, Nicotinamide, dl-alpha-tocopheryl acetate, Calcium pantothenate, Thiamine mononitrate, Pyridoxine hydrochloride, Retinyl acetate, Riboflavin,nFolic acid, Ergocalciferol and d-Biotin.nCarriers: Maltodextrin and Glucose syrup.</p>\r\n\r\n<h2>Flavour</h2>\r\n\r\n<p>Multigrain Dal Veg</p>\r\n\r\n<h2>Variant</h2>\r\n\r\n<p>12 to 24 Months</p>', NULL, 'upload/products/thambnail/1755104320847158.jpg', 1, 1, 1, 1, 1, '2023-02-09 03:51:17', '2023-02-09 03:51:17'),
(4, 3, 1, 2, 2, 'Similac®* Infant Formula  Powder', NULL, 'similac®*-infant-formula--powder', '', '2', '55', NULL, NULL, NULL, NULL, 'None', NULL, '5', '4.5', NULL, NULL, '<p>Similac<sup>&reg;</sup><sup>*</sup>&nbsp;Infant Formula with 2&#39;-FL HMO is comparable to the U.S. version of Similac Pro-Advance<sup>&reg;</sup>. Similac Infant Formula with 2&#39;-FL HMO and nucleotides helps support baby&rsquo;s immune system. This product was manufactured in Ireland. Abbott Nutrition has worked with the FDA to import this product to help with supply chain shortages. Because every baby&rsquo;s tummy is unique, it can be difficult to predict how each baby will tolerate a formula change. It&rsquo;s always best to talk to your pediatrician before making formula changes.</p>\r\n\r\n<p><strong>* Not for infants or children with galactosemia.</strong></p>\r\n\r\n<ul>\r\n	<li><strong>COMPARABLE TO U.S. SIMILAC PRO-ADVANCE:</strong>&nbsp;This formula was manufactured in Ireland and is similar to the U.S. version of Similac Pro-Advance</li>\r\n	<li><strong>FORMULA PREPARATION:</strong>&nbsp;Mix 1 scoop of formula per 2 fl oz (60 mL) of water</li>\r\n	<li><strong>IMMUNE SUPPORT:</strong>&nbsp;Features 2&#39;-FL HMO and nucleotides to help support your baby&rsquo;s immune system</li>\r\n</ul>', NULL, 'upload/products/thambnail/1755115001269543.jpg', 1, NULL, 1, 1, 1, '2023-02-09 03:48:39', '2023-02-09 03:48:39'),
(5, 4, 1, 1, 3, 'Pampers Premium Care Diaper Pants', NULL, 'pampers-premium-care-diaper-pants', '', '5432', '665', NULL, NULL, NULL, NULL, 'None', NULL, '7.95', '5.40', NULL, NULL, '<p>New Pampers Premium Care Pants with 360 degree cottony softness give your baby the ultimate comfort all day, all night long. Pampers Premium Care Pants contain soothing lotion with aloe vera to protect your baby&rsquo;s skin from rashes, while its 10 million micropores allow your baby&rsquo;s skin to breathe.</p>\r\n\r\n<p>Its 12-hour leak lock facility keeps your baby dry and away from wetness. Experience 5-star comfort with unique added features like the wetness indicator which turns yellow to blue indicating when you may change the diaper and a disposal tape to help you with easy disposal. It is available in newborn (NB), S, M, L, XL and XXL sizes.</p>\r\n\r\n<h2>Uses of Pampers Premium Care Diaper Pants Large, 88 Count</h2>\r\n\r\n<p>Baby Diapers</p>\r\n\r\n<h2>Key Benefits</h2>\r\n\r\n<ul>\r\n	<li>New Pampers Premium Care Pants with 360 degree cottony softness that provide your baby with all-round comfort.</li>\r\n	<li>Contains lotion with aloe vera to protect your baby&rsquo;s delicate skin from rashes.</li>\r\n	<li>10 million micropores which allow your baby&rsquo;s skin to breathe.</li>\r\n	<li>12-hour leak-lock that keeps your baby dry and safe from wetness.</li>\r\n	<li>Has wetness indicator which turns from yellow to blue when it may be time to change.</li>\r\n	<li>No.1 choice of doctors &ndash; Pampers Premium Care Pants is the chosen one for your little one.</li>\r\n	<li>Voted #1 softest diaper by mothers.</li>\r\n</ul>\r\n\r\n<h2>Directions for Use</h2>\r\n\r\n<ul>\r\n	<li>Let your baby lie on their back.</li>\r\n	<li>Put the diaper under their body.</li>\r\n	<li>Secure the diaper pants by pulling and attaching the side elastic in symmetrical positions.</li>\r\n	<li>Adjust the diaper in position as per the baby&rsquo;s comfortability.</li>\r\n</ul>\r\n\r\n<h2>Safety Information</h2>\r\n\r\n<ul>\r\n	<li>Keep it away from infants and children to avoid accidental strangulation or suffocation.</li>\r\n	<li>Wrap the used diaper and discard it in a trash can; don&rsquo;t flush the diaper in the toilet.</li>\r\n	<li>Store in a cool and dry place.</li>\r\n	<li>Check the expiration date before use.</li>\r\n</ul>\r\n\r\n<h2>Size</h2>\r\n\r\n<p>Large</p>', NULL, 'upload/products/thambnail/1756392764732656.png', 1, NULL, 1, NULL, 1, '2023-02-09 03:51:49', '2023-02-09 03:51:49'),
(6, 5, 1, 1, 3, 'Huggies Wonder Baby Diaper Pants', NULL, 'huggies-wonder-baby-diaper-pants', '', '56re', '898', NULL, NULL, 'Small,Midium,Large', NULL, 'red,Black,None', NULL, '19', '12.77', NULL, NULL, '<h2>Description</h2>\r\n\r\n<p>Choosing the best diaper for your baby&rsquo;s delicate and soft skin is important. This next generation Huggies product is India&rsquo;s 1st Diaper Pant with unique Bubble-Bed Technology. Bubble wala Huggies has 3 unique features that provide ultimate care and comfort on all 3 sensitive areas &ndash; baby&rsquo;s bottom, thighs and waist. The super soft 3-D Bubble-Bed feels like a cottony bed against baby&rsquo;s bottom, absorbing wetness up to 12 hours and keeping your little one&#39;s bottom dry and rash-free.</p>\r\n\r\n<p>These breathable diaper pants are perfect for a peaceful, undisturbed sleep without irritation on skin. The super-flexible waistband offers a snug fit, so baby can move around without any red marks or discomfort around the waist. The triple Leak-guard adds an extra padding on the sides of the diaper for leakage protection from the sides. Fun shapes and playful designs adorn the diaper pants.</p>\r\n\r\n<h2>Key Benefits</h2>\r\n\r\n<ul>\r\n	<li>Diaper pants with 3-D Bubble-Bed provides ultimate cottony softness to your baby&rsquo;s skin.</li>\r\n	<li>A flexible waistband means baby has the freedom to move in a snug and comfortable fit.</li>\r\n	<li>Bubble Wala Huggies absorbs wetness up to 12 hours, so your baby stays dry overnight with no irritation or rashes.</li>\r\n	<li>Triple Leak-guard adds extra padding on the sides of the diaper, ideal for reducing leakage from thighs and legs, while the 3-D layer keeps the diaper surface unbelievably dry.</li>\r\n	<li>Choosing the ideal diaper size based on baby weight and size is important. The diaper capacity may vary among babies from newborn to large, depending on the volume of waste.</li>\r\n</ul>\r\n\r\n<h2>Size</h2>\r\n\r\n<p>Medium</p>', NULL, 'upload/products/thambnail/1756765340596940.png', NULL, 1, 1, 1, 1, '2023-02-02 20:53:05', NULL),
(7, 5, 1, 1, 3, 'Huggies New Born Tape Diapers XS', NULL, 'huggies-new-born-tape-diapers-xs', '', 'fr45', '400', NULL, NULL, NULL, NULL, 'None', NULL, '9.95', NULL, NULL, NULL, '<p>Huggies Ultra Soft pants are our softest diaper pants. The Ultra Soft range is the very best from Huggies and features cotton-like softness to gently hug your baby.</p>\r\n\r\n<h2>Uses of Huggies New Born Tape Diapers XS, 22 Count</h2>\r\n\r\n<p>Baby Diapers</p>\r\n\r\n<h2>Key Benefits</h2>\r\n\r\n<ul>\r\n	<li>Cottony softness all round keeps your baby&rsquo;s precious skin perfect</li>\r\n	<li>Runny Poo Pocket that absorbs runny poo and prevents leakage</li>\r\n	<li>Wetness indicator that turns from yellow to blue to suggest that it&rsquo;s time for a diaper change</li>\r\n	<li>Air-fresh material that lets your baby&rsquo;s sensitive skin breathe</li>\r\n	<li>Super-stretchy material that fits your baby like a mother&rsquo;s hug</li>\r\n</ul>\r\n\r\n<h2>Directions for Use</h2>\r\n\r\n<h2>Safety Information</h2>\r\n\r\n<h2>Size</h2>\r\n\r\n<p>X-Small</p>', NULL, 'upload/products/thambnail/1756765653020602.png', NULL, NULL, NULL, NULL, 1, '2023-02-02 20:58:26', '2023-02-02 20:58:26'),
(8, 6, 1, 1, 4, 'Chicco Baby Moments Soft Cleansing Baby Wipes', NULL, 'chicco-baby-moments-soft-cleansing-baby-wipes', '', 'jh9', '96', NULL, NULL, NULL, NULL, 'None', NULL, '7.98', NULL, NULL, NULL, '<p>All ingredients are of vegetarian origin. Moisturising and soothing: aloe vera, with its anti-oxidant and nourishing properties, helps keep the baby&rsquo;s skin moisturised and hydrated. While chamomile soothes baby&rsquo;s skin and prevents skin redness and irritation. Dermatologically tested and free from parabens, soap, SLS, SLES, dyes, alcohol, and any artificial colours to ensure no harm to the baby&rsquo;s delicate skin.</p>\r\n\r\n<h2>Uses of Chicco Baby Moments Soft Cleansing Baby Wipes, 144 Count (2 x 72 Wipes)</h2>\r\n\r\n<p>Baby Skin Care</p>\r\n\r\n<h2>Key Benefits</h2>\r\n\r\n<ul>\r\n	<li>Specially made with ultra-soft material that is ideal for the cleansing purpose of the baby&rsquo;s delicate skin.</li>\r\n	<li>The natural active ingredients provide soothing, refreshing, and moisturizing benefits while cleansing the baby&rsquo;s soft skin.</li>\r\n	<li>Made with carefully selected ingredients of 100% vegetarian origin that provide gentle care.</li>\r\n	<li>Contains no alcohol, soap, parabens, dyes, SLS, SLES, or colors.</li>\r\n	<li>Dermatologically tested multipurpose wipes with allergen-free fragrance.</li>\r\n</ul>\r\n\r\n<h2>Directions for Use</h2>\r\n\r\n<ul>\r\n	<li>Take out one wipe and clean your baby&rsquo;s hands, face, or nappy area with it.</li>\r\n	<li>Gently wipe to cleanse the area and discard the used towel in a dustbin.</li>\r\n	<li>Quickly re-seal the pack after removing the needed wipes for use.</li>\r\n</ul>\r\n\r\n<h2>Safety Information</h2>\r\n\r\n<ul>\r\n	<li>Avoid contact with the eyes.</li>\r\n	<li>For external use only.</li>\r\n	<li>Read the label carefully before use.</li>\r\n	<li>Keep it out of reach of children.</li>\r\n	<li>Store in a cool and dry place</li>\r\n</ul>', NULL, 'upload/products/thambnail/1756766135875976.png', NULL, NULL, 1, NULL, 1, '2023-02-09 03:50:46', '2023-02-09 03:50:46'),
(9, 1, 1, 3, 6, 'Chicco Home-Travel Bottle Warmer', NULL, 'chicco-home-travel-bottle-warmer', '', 'fe55', '56', NULL, NULL, NULL, NULL, 'None', NULL, '70.66', '69.99', NULL, NULL, '<p>Chicco home travel bottle warmer is a smart solution that is ideal for use both at home and on the go that helps you warm breast milk, milk, and baby food in just a few minutes. Thanks to an ideal heating cycle for both food jars and baby bottles, the Chicco home travel bottle warmer preserves the nutrients of the food and keeps the baby food and milk warm for up to an hour, turning off automatically and safely at the end of the cycle.</p>\r\n\r\n<h2>Key Benefits</h2>\r\n\r\n<ul>\r\n	<li>Home travel bottle warmer is fast and accurate. It warms up milk and baby food in just 4 minutes.</li>\r\n	<li>The new Chicco home travel bottle warmer offers 5 different modes of functioning - fast heating of milk and baby food in just a few minutes, gradual warming to preserve nutrients, gentle defrosting, and food jar mode, keeps milk and baby food warm up to 1 hour.</li>\r\n	<li>Thanks to its practical and special car plug cord - it can be used while traveling as well.</li>\r\n	<li>Its gradual and gentle warming process helps to preserve the nutrients present in milk and baby food as they are important for the baby&#39;s growth.</li>\r\n	<li>Home travel bottle warmer helps maintain the temperature of food and milk for up to 1 hour after the end of the heating cycle.</li>\r\n	<li>The audible alarm notifies the end of the heating cycle. For added safety, the device switches off automatically to prevent overheating.</li>\r\n</ul>\r\n\r\n<h2>Directions for Use</h2>\r\n\r\n<ul>\r\n	<li>Follow the instruction manual provided along with the product.</li>\r\n</ul>', NULL, 'upload/products/thambnail/1756766660482578.png', NULL, NULL, NULL, NULL, 1, '2023-02-09 03:55:59', '2023-02-09 03:55:59'),
(10, 7, 1, 3, 5, 'Philips Avent Natural Feeding Bottle', NULL, 'philips-avent-natural-feeding-bottle', '', 'f453', '33', NULL, NULL, NULL, NULL, 'None', NULL, '8.5', NULL, NULL, NULL, '<ul>\r\n	<li>Natural nipple shape and feel makes it easy for baby to combine breastfeeding with bottle feeding</li>\r\n	<li>Wide breast-shaped nipple promotes a natural latch on</li>\r\n	<li>Ultra soft flexible nipple mimics the feel of the breast</li>\r\n	<li>Airflex valve integrated into the nipple is designed to reduce feeding issues by venting air away from your baby&#39;s tummy</li>\r\n	<li>A range of flow rates are available for your growing baby. This bottle includes a Newborn flow nipple.</li>\r\n	<li>BPA free</li>\r\n</ul>', NULL, 'upload/products/thambnail/1756767000610952.png', NULL, NULL, 1, NULL, 1, '2023-02-09 03:51:58', '2023-02-09 03:51:58'),
(11, 9, 2, 4, 34, 'Colgate Visible White O2 Whitening', NULL, 'colgate-visible-white-o2-whitening', '', 'fe523', '16', NULL, NULL, NULL, NULL, NULL, NULL, '1.5', NULL, NULL, NULL, '<p>What does it mean to smile from the inside out? Because we believe in the transformative beauty of real smiles, Colgate-Palmolive is proud to introduce a revolutionary new beauty essential - Visible White O2. Formulated with a patented Active Oxygen-based tooth whitening technology, it&nbsp;whitens teeth&nbsp;in 3&nbsp;days (when used as directed on pack).</p>\r\n\r\n<p>As soon as you brush, Colgate Visible White O2 gives off a warming effect inside your mouth. Along with this, it releases a gentle wave of ultra-fine whitening foam - that&rsquo;s the Active Oxygen. The millions of active oxygen bubbles get absorbed gently into your enamel and whiten teeth from the inside out!</p>\r\n\r\n<p>Available in 2 refreshing flavours:</p>\r\n\r\n<ul>\r\n	<li>Aromatic Mint: Like a rushing mountain stream, the freshness of this herby wintergreen mint gives a refreshing flavor that lasts.</li>\r\n	<li>Peppermint Sparkle: Fresh, bright with a slight hint of spice, this delightfully balanced flavor brings a long-lasting flavor that feels like your mouth is sparkling.</li>\r\n</ul>\r\n\r\n<h2>Uses of Colgate Visible White O2 Whitening Aromatic Mint Toothpaste, 50 gm</h2>\r\n\r\n<p>Oral Care</p>\r\n\r\n<h2>Key Benefits</h2>\r\n\r\n<ul>\r\n	<li>Experience the unique warming sensation as you brush. This new whitening formula with millions of active oxygen bubbles lightens the stains on the teeth - working not only on the surface, but from the inside out.&nbsp;</li>\r\n</ul>\r\n\r\n<h2>Directions for Use</h2>\r\n\r\n<ul>\r\n	<li>Squeeze some whitening toothpaste on your brush.</li>\r\n	<li>Feel&nbsp;a warming sensation - it means the product is working! Continue to brush for 2 mins.</li>\r\n	<li>Rinse and repeat morning and night. Begin to see a radiant, whiter smile in 3 days.</li>\r\n</ul>\r\n\r\n<h2>Key Ingredients</h2>\r\n\r\n<p>Poloxamer 105, Calcium Pyrophosphate, PEG-2M, PEG/PPG-166/66 Copolymer, Polyvinyl Pyrrolidone, Silica, Tetrasodium Pyrophosphate, Flavour, Sodium Lauryl Sulfate, Potassium Monoperoxysulfate, Disodium Pyrophosphate, Sodium Monofluorophosphate, Sodium Saccharin, Cocamidopropyl Betaine, Sucralose, Butylated Hydroxytoluene, Limonene, Linalool.</p>\r\n\r\n<h2>Flavour</h2>\r\n\r\n<p>Aromatic</p>', NULL, 'upload/products/thambnail/1757334784518864.png', 1, 1, 1, 1, 1, '2023-02-09 03:44:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `comment`, `summary`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Good', 'lorem', NULL, '1', NULL, NULL),
(2, 1, 1, 'lorem', 'good', 1, '1', '2023-02-04 13:22:31', '2023-02-04 13:24:07'),
(3, 1, 1, 'lorem', 'good', NULL, '0', '2023-02-04 15:25:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('a5EG4rm934Xo4vSgMPlamRTK5ZUQd9j7TD77AYMt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZjdzeFVCWHVxSEx4TlJ3Q0k2b1N0bU1acjNUWlZRM2c3ZUJiWXVvTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1675936432),
('fC6qhuYWUrydiWzKZbKluKpATsQAayVxD0wuQBHR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRXRmd1VxQUJ6WllsNldDQWVCSlJ3aTNyZXp1eXFtbHNnaXp6ajNSNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1675970604);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ship_districts`
--

CREATE TABLE `ship_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_districts`
--

INSERT INTO `ship_districts` (`id`, `division_id`, `district_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Amman', '2023-02-02 17:56:34', NULL),
(2, 1, 'Balqa', '2023-02-02 17:56:50', NULL),
(3, 1, 'Karak', '2023-02-02 17:56:58', NULL),
(4, 1, 'Irbid', '2023-02-02 17:57:07', NULL),
(5, 1, 'Aqaba', '2023-02-02 17:57:14', NULL),
(6, 1, 'Zarqa', '2023-02-02 17:57:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_divisions`
--

CREATE TABLE `ship_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_divisions`
--

INSERT INTO `ship_divisions` (`id`, `division_name`, `created_at`, `updated_at`) VALUES
(1, 'Jordan', '2023-02-02 17:56:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_states`
--

CREATE TABLE `ship_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_states`
--

INSERT INTO `ship_states` (`id`, `division_id`, `district_id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'أبو نصير', '2023-02-02 17:57:47', NULL),
(2, 1, 1, 'khalda', '2023-02-02 17:57:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_img`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'upload/slider/1756764134811900.png', 'Enaya', 'A better way to shop for health & beauty!', 1, NULL, '2023-02-08 16:40:04'),
(2, 'upload/slider/1756764304075639.png', 'Enaya', 'A better way to shop for health & beauty!', 1, NULL, '2023-02-08 16:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_name_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name_en`, `subcategory_name_hin`, `subcategory_slug_en`, `subcategory_slug_hin`, `created_at`, `updated_at`) VALUES
(1, 1, 'Diapering', 'Diapering', 'diapering', 'Diapering', NULL, NULL),
(2, 1, 'Baby Food', 'Baby Food', 'baby-food', 'Baby-Food', NULL, NULL),
(3, 1, 'Feeding Bottles & Accessories', 'Feeding Bottles & Accessories', 'feeding-bottles-&-accessories', 'Feeding-Bottles-&-Accessories', NULL, NULL),
(4, 2, 'Toothpaste', 'Toothpaste', 'toothpaste', 'Toothpaste', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_name_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `category_id`, `subcategory_id`, `subsubcategory_name_en`, `subsubcategory_name_hin`, `subsubcategory_slug_en`, `subsubcategory_slug_hin`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Baby Cereals', 'Baby Cereals', 'baby-cereals', 'Baby-Cereals', NULL, NULL),
(2, 1, 2, 'Formula Milk', 'Formula Milk', 'formula-milk', 'Formula-Milk', NULL, NULL),
(3, 1, 1, 'Diapers', 'Diapers', 'diapers', 'Diapers', NULL, NULL),
(4, 1, 1, 'Wipes', 'Wipes', 'wipes', 'Wipes', NULL, '2023-02-02 21:06:53'),
(5, 1, 3, 'Feeding Bottles', 'Feeding Bottles', 'feeding-bottles', 'Feeding-Bottles', NULL, NULL),
(6, 1, 3, 'Bottle Warmer', 'Bottle Warmer', 'bottle-warmer', 'Bottle-Warmer', NULL, NULL),
(7, 2, 4, 'Whitening', 'Whitening', 'whitening', 'Whitening', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_seen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `last_seen`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'maria', 'maria@gmail.com', '0775252251', '2023-02-09 09:26:51', NULL, '$2y$10$.GepwAQWAxOo2d0VJp7Je.J/Aqy4QUVdUO0vMObuvnmgUTXVd8Yea', NULL, NULL, NULL, NULL, '202302021358majd-atyyat-image.jpg', '2023-02-02 09:53:25', '2023-02-09 06:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post_categories`
--
ALTER TABLE `blog_post_categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
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
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_post_categories`
--
ALTER TABLE `blog_post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ship_districts`
--
ALTER TABLE `ship_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ship_states`
--
ALTER TABLE `ship_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
