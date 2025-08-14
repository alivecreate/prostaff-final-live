-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: May 26, 2025 at 09:58 AM
-- Server version: 9.1.0
-- PHP Version: 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transpumpservglobal`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `item_no` int DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `heading` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `image_alt` text COLLATE utf8mb4_unicode_ci,
  `image_title` text COLLATE utf8mb4_unicode_ci,
  `page_title` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `item_no`, `title`, `heading`, `description`, `image`, `image_alt`, `image_title`, `page_title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(7, 1, 'Revolutionizing Chemical Process Plants: DEC Engineering’s Expertise', NULL, '<p>Chemical process plants are the backbone of industries that drive global innovation, from pharmaceuticals to petrochemicals and beyond. At DEC Engineering, we take pride in designing, building, and optimizing these complex systems to meet the demands of an ever-evolving industrial landscape.</p><h4>The Role of Chemical Process Plants</h4><p>Chemical process plants transform raw materials into valuable products through precise, controlled chemical reactions and physical processes. These plants require seamless integration of cutting-edge technology, robust infrastructure, and sustainable practices to achieve operational efficiency and safety.</p><p>From distillation columns and reactors to heat exchangers and storage systems, every component in a chemical process plant plays a vital role. Proper design and execution ensure optimal performance, reduced downtime, and adherence to environmental standards.</p><h4>DEC Engineering: Your Trusted Partner</h4><p>With years of experience in the engineering sector, DEC Engineering specializes in offering end-to-end solutions for chemical process plants. Our team of experts works closely with clients to understand their specific requirements, whether it’s for greenfield projects, plant expansions, or process upgrades.</p><p>We utilize state-of-the-art software and tools to design systems that are not only efficient but also sustainable. Our approach emphasizes:</p><ul><li><strong>Safety:</strong> Ensuring compliance with stringent industry standards to protect both personnel and the environment.</li><li><strong>Innovation:</strong> Incorporating advanced technologies such as automation and AI to optimize operations.</li><li><strong>Sustainability:</strong> Reducing emissions, waste, and energy consumption to promote eco-friendly processes.</li></ul><h4>Services We Provide</h4><ol><li><strong>Process Design:</strong> Creating tailored solutions for complex chemical reactions and material handling.</li><li><strong>Project Management:</strong> From planning to commissioning, we oversee every step for a seamless experience.</li><li><strong>Maintenance &amp; Upgrades:</strong> Extending the life cycle of your plant with regular updates and technological improvements.</li></ol><h4>Why Choose DEC Engineering?</h4><p>Partnering with DEC Engineering means gaining access to unparalleled expertise, innovative solutions, and a commitment to excellence. Whether you are looking to build a new facility or enhance an existing one, we ensure your chemical process plant operates at its peak potential.</p><p>Ready to elevate your operations? Trust DEC Engineering to deliver excellence in chemical process plant solutions. Contact us today to learn more!</p>', '1733260775_163.webp', NULL, NULL, 'Revolutionizing Chemical Process Plants: DEC Engineering’s Expertise', 'revolutionizing-chemical-process-plants--dec-engineering-s-expertise', 1, '2024-12-03 15:49:37', '2024-12-03 15:49:37'),
(8, 2, 'test', 'test headline', '<p>test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions test Descriptions v</p>', '1733315416_896.webp', NULL, NULL, 'test', 'test', 1, '2024-12-04 07:00:17', '2024-12-04 07:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `item_no` int DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `full_description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `image_title` text COLLATE utf8mb4_unicode_ci,
  `page_title` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `item_no`, `name`, `heading`, `parent_id`, `description`, `full_description`, `image`, `image_title`, `page_title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pumps', 'Pumps', NULL, NULL, NULL, NULL, NULL, NULL, 'pumps', 1, '2025-05-25 01:17:53', '2025-05-25 01:17:53'),
(3, 2, 'Mechanical Seals', 'MechanicalSeals', NULL, NULL, NULL, NULL, NULL, NULL, 'mechanical-seals', 1, '2025-05-26 12:23:29', '2025-05-26 12:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint UNSIGNED NOT NULL,
  `item_no` int DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `alt` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `item_no`, `name`, `image`, `title`, `alt`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '1733655220_127.webp', NULL, NULL, NULL, 1, '2024-12-08 05:23:42', '2024-12-08 05:23:42'),
(2, 2, NULL, '1733655232_522.webp', NULL, NULL, NULL, 1, '2024-12-08 05:23:57', '2024-12-08 05:23:57'),
(3, 3, NULL, '1733655266_920.webp', NULL, NULL, NULL, 1, '2024-12-08 05:24:30', '2024-12-08 05:24:30'),
(4, 4, NULL, '1733655276_921.webp', NULL, NULL, NULL, 1, '2024-12-08 05:24:41', '2024-12-08 05:24:41'),
(5, 5, NULL, '1733655287_306.webp', NULL, NULL, NULL, 1, '2024-12-08 05:24:51', '2024-12-08 05:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `item_no` int DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `alt` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `item_no`, `name`, `image`, `title`, `alt`, `note`, `status`, `created_at`, `updated_at`) VALUES
(22, 1, NULL, '1748055815_848.webp', NULL, NULL, NULL, 1, '2025-05-24 08:33:35', '2025-05-24 08:33:35'),
(23, 2, NULL, '1748055821_296.webp', NULL, NULL, NULL, 1, '2025-05-24 08:33:41', '2025-05-24 08:33:41'),
(24, 3, NULL, '1748055826_512.webp', NULL, NULL, NULL, 1, '2025-05-24 08:33:53', '2025-05-24 08:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `custom_code`
--

CREATE TABLE `custom_code` (
  `id` bigint UNSIGNED NOT NULL,
  `js` longtext COLLATE utf8mb4_unicode_ci,
  `css` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `item_no` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `gallery` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `item_no`, `name`, `image`, `gallery`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Our Works', NULL, NULL, 'our-works', 'active', '2024-12-11 11:35:43', '2024-12-11 11:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` bigint UNSIGNED NOT NULL,
  `gallery_id` bigint UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `gallery_id`, `image`, `image_title`, `created_at`, `updated_at`) VALUES
(24, 1, '1733921143_765.webp', 'null', '2024-12-11 12:45:52', '2024-12-11 12:45:52'),
(25, 1, '1733921152_867.webp', 'null', '2024-12-11 12:45:54', '2024-12-11 12:45:54'),
(26, 1, '1733921154_693.webp', 'null', '2024-12-11 12:45:57', '2024-12-11 12:45:57'),
(27, 1, '1733921157_707.webp', 'null', '2024-12-11 12:45:59', '2024-12-11 12:45:59'),
(28, 1, '1733921159_580.webp', 'null', '2024-12-11 12:46:02', '2024-12-11 12:46:02'),
(29, 1, '1733921162_206.webp', 'null', '2024-12-11 12:46:06', '2024-12-11 12:46:06'),
(30, 1, '1733921166_377.webp', 'null', '2024-12-11 12:46:14', '2024-12-11 12:46:14'),
(31, 1, '1733921174_341.webp', 'null', '2024-12-11 12:46:16', '2024-12-11 12:46:16'),
(32, 1, '1733921176_776.webp', 'null', '2024-12-11 12:46:19', '2024-12-11 12:46:19'),
(33, 1, '1733921179_322.webp', 'null', '2024-12-11 12:46:27', '2024-12-11 12:46:27'),
(34, 1, '1733921187_784.webp', 'null', '2024-12-11 12:46:32', '2024-12-11 12:46:32'),
(35, 1, '1733921192_594.webp', 'null', '2024-12-11 12:46:41', '2024-12-11 12:46:41'),
(36, 1, '1733921201_504.webp', 'null', '2024-12-11 12:46:50', '2024-12-11 12:46:50'),
(37, 1, '1733921210_819.webp', 'null', '2024-12-11 12:46:52', '2024-12-11 12:46:52'),
(38, 1, '1733921212_717.webp', 'null', '2024-12-11 12:46:54', '2024-12-11 12:46:54'),
(39, 1, '1733921214_917.webp', 'null', '2024-12-11 12:46:56', '2024-12-11 12:46:56'),
(40, 1, '1733921216_187.webp', 'null', '2024-12-11 12:47:02', '2024-12-11 12:47:02'),
(41, 1, '1733921222_517.webp', 'null', '2024-12-11 12:47:07', '2024-12-11 12:47:07'),
(42, 1, '1733921227_806.webp', 'null', '2024-12-11 12:47:12', '2024-12-11 12:47:12'),
(43, 1, '1733921232_289.webp', 'null', '2024-12-11 12:47:18', '2024-12-11 12:47:18'),
(44, 1, '1733921238_792.webp', 'null', '2024-12-11 12:47:24', '2024-12-11 12:47:24'),
(45, 1, '1733921244_735.webp', 'null', '2024-12-11 12:47:29', '2024-12-11 12:47:29'),
(46, 1, '1733921249_114.webp', 'null', '2024-12-11 12:47:33', '2024-12-11 12:47:33'),
(47, 1, '1733921253_406.webp', 'null', '2024-12-11 12:47:36', '2024-12-11 12:47:36'),
(48, 1, '1733921256_335.webp', 'null', '2024-12-11 12:47:38', '2024-12-11 12:47:38'),
(49, 1, '1733921258_715.webp', 'null', '2024-12-11 12:47:40', '2024-12-11 12:47:40'),
(50, 1, '1733921260_122.webp', 'null', '2024-12-11 12:47:42', '2024-12-11 12:47:42'),
(51, 1, '1733921262_171.webp', 'null', '2024-12-11 12:47:45', '2024-12-11 12:47:45'),
(52, 1, '1733921265_569.webp', 'null', '2024-12-11 12:47:48', '2024-12-11 12:47:48'),
(53, 1, '1733921268_666.webp', 'null', '2024-12-11 12:47:51', '2024-12-11 12:47:51'),
(54, 1, '1733921271_627.webp', 'null', '2024-12-11 12:47:54', '2024-12-11 12:47:54'),
(55, 1, '1733921274_260.webp', 'null', '2024-12-11 12:47:56', '2024-12-11 12:47:56'),
(56, 1, '1733921276_420.webp', 'null', '2024-12-11 12:47:58', '2024-12-11 12:47:58'),
(57, 1, '1733921278_118.webp', 'null', '2024-12-11 12:48:07', '2024-12-11 12:48:07'),
(58, 1, '1733921287_188.webp', 'null', '2024-12-11 12:48:09', '2024-12-11 12:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint UNSIGNED NOT NULL,
  `item_no` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `gallery` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `item_no`, `name`, `description`, `image`, `gallery`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Chemical process plants', '<p>Chemical process plantsChemical process plantsChemical process plantsChemical process plantsChemical process plantsChemical process plantsChemical process plantsChemical process plantsChemical process plantsChemical process plantsChemical process plantsChemical process plantsChemical process plantsChemical process plantsChemical process plantsChemical process plantsChemical process plantsChemical process plants</p>', '1733570417_976.webp', NULL, 'chemical-process-plants', 'active', '2024-12-07 00:20:19', '2024-12-07 01:11:03'),
(2, NULL, 'Power plants', NULL, '1733570467_533.webp', NULL, 'power-plants', 'active', '2024-12-07 00:21:14', '2024-12-07 01:07:31'),
(3, NULL, 'Pharmacautical Industry', NULL, '1733570502_295.webp', NULL, 'pharmacautical-industry', 'active', '2024-12-07 00:21:46', '2024-12-07 01:07:02'),
(4, NULL, 'Oil & Gas', '<p>Petrochemical &amp; fertilizer</p>', '1734012192_547.webp', NULL, 'oil-and-gas', 'active', '2024-12-07 00:23:18', '2025-05-24 11:29:01'),
(5, NULL, 'Cement plants', NULL, '1733570623_610.webp', NULL, 'cement-plants', 'active', '2024-12-07 00:23:43', '2024-12-07 01:06:14'),
(6, NULL, 'Food processing Industry', NULL, '1733570652_142.webp', NULL, 'food-processing-industry', 'active', '2024-12-07 00:24:12', '2025-05-24 11:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `industry_images`
--

CREATE TABLE `industry_images` (
  `id` bigint UNSIGNED NOT NULL,
  `industry_id` bigint UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `page_url` text COLLATE utf8mb4_unicode_ci,
  `service` text COLLATE utf8mb4_unicode_ci,
  `individualService` text COLLATE utf8mb4_unicode_ci,
  `status` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_quantities`
--

CREATE TABLE `inquiry_quantities` (
  `id` bigint UNSIGNED NOT NULL,
  `product_inquiry_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_09_030211_create_sliders_table', 1),
(6, '2024_02_19_183209_create_testimonials_table', 1),
(7, '2024_02_22_041241_create_categories_table', 1),
(8, '2024_02_22_182915_create_seos_table', 1),
(9, '2024_02_23_171631_create_products_table', 1),
(10, '2024_02_23_174013_create_specifications_table', 1),
(11, '2024_02_23_180741_create_product_images_table', 1),
(12, '2024_03_02_005402_create_website_table', 1),
(13, '2024_03_02_191250_create_social_media_table', 1),
(14, '2024_03_11_082932_create_product_inquiries_table', 1),
(15, '2024_03_11_083209_create_inquiries_table', 1),
(16, '2024_03_12_024224_create_teams_table', 1),
(17, '2024_03_12_104100_create_blogs_table', 1),
(18, '2024_03_19_164857_create_custom_code_table', 1),
(19, '2024_03_29_132402_create_inquiry_quantities_table', 1),
(20, '2024_06_11_143342_create_clients_table', 1),
(21, '2024_12_06_014219_create_services_table', 1),
(22, '2024_12_06_165715_create_service_images_table', 1),
(23, '2024_12_07_014219_create_industries_table', 1),
(24, '2024_12_07_165715_create_industry_images_table', 1),
(25, '2024_12_08_014219_create_projects_table', 1),
(26, '2024_12_08_143342_create_certificates_table', 1),
(27, '2024_12_08_165715_create_project_images_table', 1),
(28, '2024_12_09_014219_create_galleries_table', 1),
(29, '2024_12_09_165715_create_gallery_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
  `id` bigint UNSIGNED NOT NULL,
  `item_no` int DEFAULT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `page_title` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `image_title` text COLLATE utf8mb4_unicode_ci,
  `discounted_price` decimal(10,2) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `item_no`, `category_id`, `name`, `description`, `slug`, `page_title`, `price`, `image`, `image_title`, `discounted_price`, `quantity`, `sku`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'ISO-2858 DESIGN CENTRIFUGAL PUMPS', '<p><strong>KEY FEATURES:</strong></p><p>Standardized and modular design</p><p>Flanges according to ISO 7005 PN 16</p><p>Outstanding hydraulic performance</p><p>High efficiency impeller</p><p>Easy maintenance through the Back-Pull-Out principle</p><p>MOC: SS316, SS304, DUPLEX, CS, CI, A-20, HAST-C/B</p><p><strong>Design Specifications:</strong></p><p>Max. capacity: 1500 m³/h</p><p>Max. delivery head: 140 m</p><p>Max. liquid temp.: 250°C</p><p>Max. pressure: 16 bar (10 bar)</p><p>Max. speed: 3600 rpm</p>', 'iso-2858-design-centrifugal-pumps', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2025-05-25 01:19:54', '2025-05-25 01:19:54'),
(2, 2, 1, 'SELF-PRIMING MULTIPURPOSE PERIPHERAL FLOW AODD PUMP', '<p><strong>Key Features:</strong></p><p>High performance and long life diaphragm – Abrasive and corrosive materials handled without problems</p><p>No rotating parts – Handle fluids with high solid contents</p><p>Wide range of material combinations – Low and high viscous liquids, alkalis or acids</p><p>MOC: PP, TEFLON, SS304, SS316</p><p><strong>Design Specifications:</strong></p><p>Max Flow: Upto 1590 m³/h (7000 GPM)</p><p>Max Head: Upto 223 m (730 ft)</p><p>Max Temperature: 377°C (700°F)</p>', 'self-priming-multipurpose-peripheral-flow-aodd-pump', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2025-05-25 02:07:50', '2025-05-25 02:07:50'),
(3, 3, 1, 'ISO-2858 DESIGN NON-METALLIC CENTRIFUGAL PUMPS', '<p><strong>Key Features:</strong></p><p>Cast iron armours with injection moulded wetted parts are designed to handle higher hydraulic pressures and flange loads</p><p>Non metallic pumps are excellent alternatives to expensive super alloy pumps for hazardous, corrosive and toxic media</p><p><strong>Design Specifications:</strong></p><p>Capacity [Q]: up to 210 m³/hr (925 US gpm) 1100 US gpm (250 m³/hr)</p><p>Head [H]: up to 100 m (328 ft)/40 D (122 m)</p><p>Motor Power (P): up to 55 kW (75 hp) 120 hp (90 kW)</p><p>Viscosity: up to 150 mPa (cP)</p><p>Suction Lift: 8 m (26 ft) with priming chamber*</p>', 'iso-2858-design-non-metallic-centrifugal-pumps', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2025-05-25 02:25:46', '2025-05-25 02:25:46'),
(4, 4, 1, 'CENTRIFUGAL PUMP FOR THERMAL OIL / HOT WATER APPLICATIONS', '<p><strong>Key Features:</strong></p><p>Long cooling length displacing seal away from the pumped liquid</p><p>Back vanes and labyrinth prevent solids from reaching bearing and seals</p><p>Product lubricated slide bearing</p><p>Standard mechanical seal</p><p><strong>Design Specifications:</strong></p><p>Casing: Nodular cast iron</p><p>Impeller: Cast iron, Stainless steel</p><p>Max. capacity: 350 m³/h | 154 GPM [50HZ] 400 m³/h | 1761 GPM [60HZ]</p><p>Max. delivery head: 110m / 36ft [50HZ] 160m / 52ft [60HZ]</p>', 'centrifugal-pump-for-thermal-oil-hot-water-applications', NULL, NULL, '1748121001_543.webp', NULL, NULL, NULL, NULL, 1, '2025-05-25 02:30:46', '2025-05-25 02:40:01'),
(5, 5, 3, 'TRANS–SC – VERSATILE CARTRIDGE SINGLE SEAL', '<p><strong>Typical Applications:</strong></p><p>High-pressure pumping systems.</p><p>High-speed rotary equipment.</p><p>Chemical processing and handling.</p><p>Oil and gas refining and production.</p><p>Power generation and transmission.</p><p>Water and wastewater treatment.</p><p>High-temperature processing applications.</p><p><strong>Sealing Faces:</strong></p><p>Rotary Face: SiC (Silicon Carbide), TC (Tungsten Carbide)</p><p>Stationary Face: SiC, TC, Carbon (Graphite or Carbon-filled)</p>', 'trans-sc-versatile-cartridge-single-seal', NULL, NULL, '1748242866_603.webp', NULL, NULL, NULL, NULL, 1, '2025-05-26 12:29:06', '2025-05-26 12:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `image_title`, `created_at`, `updated_at`) VALUES
(1, 1, '1748116194_733.webp', 'null', '2025-05-25 01:19:54', '2025-05-25 01:19:54'),
(2, 2, '1748119070_809.webp', 'null', '2025-05-25 02:07:51', '2025-05-25 02:07:51'),
(3, 3, '1748120146_383.webp', 'null', '2025-05-25 02:25:47', '2025-05-25 02:25:47'),
(4, 4, '1748120446_567.webp', 'null', '2025-05-25 02:30:48', '2025-05-25 02:30:48'),
(5, 5, '1748242746_976.webp', 'null', '2025-05-26 12:29:07', '2025-05-26 12:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_inquiries`
--

CREATE TABLE `product_inquiries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `status` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `item_no` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `para1` text COLLATE utf8mb4_unicode_ci,
  `para2` text COLLATE utf8mb4_unicode_ci,
  `gallery` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `project_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `item_no`, `name`, `customer_name`, `description`, `image`, `para1`, `para2`, `gallery`, `slug`, `project_status`, `project_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Fabrication and erection of Cross Country Ammonia Pipeline', 'Tata Chemicals Ltd., Haldia', NULL, NULL, NULL, NULL, NULL, 'tata-chemicals-ltd--haldia', NULL, NULL, 'active', '2024-12-08 12:14:03', '2024-12-08 12:14:03'),
(2, 2, 'Ammonia Storage & Dilution Plant', 'Essar Constructions (India) Ltd', NULL, NULL, NULL, NULL, NULL, 'essar-constructions--india--ltd', NULL, NULL, 'active', '2024-12-08 12:14:22', '2024-12-08 12:14:22'),
(3, 3, 'Erection of Structures, fabrication & erection of Piping for Steel Melting Plant', 'Heinz India Pvt. Ltd, Uttaranchal', NULL, NULL, NULL, NULL, NULL, 'heinz-india-pvt--ltd--uttaranchal', NULL, NULL, 'active', '2024-12-08 12:14:37', '2024-12-08 12:14:37'),
(4, 4, 'Structural fabrication and Equipment erection', 'ASTA India Pvt. Ltd', '<p>Structural fabrication and Equipment erection</p>', NULL, NULL, NULL, NULL, 'asta-india-pvt--ltd', NULL, NULL, 'active', '2024-12-08 12:14:51', '2024-12-11 13:24:29'),
(5, 5, 'Fabrication & erection of Cooling water piping, Raw water piping; fabrication & erection of Pipe Racks & Storage Tanks for Kalisindh 2 x 600 MW Thernal Power Plant', 'BGR Energy Systems Ltd', '<p>Fabrication &amp; erection of Cooling water piping, Raw water piping; fabrication &amp; erection of Pipe Racks &amp; Storage Tanks for Kalisindh 2 x 600 MW Thernal Power Plant</p>', NULL, NULL, NULL, NULL, 'bgr-energy-systems-ltd', NULL, NULL, 'active', '2024-12-08 12:15:03', '2024-12-11 13:22:31'),
(6, 6, 'Fabrication & erection of piping, structurals and equipment installation & alignment in GFL, Dahej and Abott, Jhagadia', 'YORK India Ltd', '<p>Fabrication &amp; erection of piping, structurals and equipment installation &amp; alignment in GFL, Dahej and Abott, Jhagadia</p>', NULL, NULL, NULL, NULL, 'york-india-ltd', NULL, NULL, 'active', '2024-12-08 12:15:13', '2024-12-11 13:26:18'),
(7, 7, 'Mechanical Contract for 1.2 T new Speciality Line', 'McCain Foods (India) Pvt. Ltd', '<p>Mechanical Contract for 1.2 T new Speciality Line</p>', NULL, NULL, NULL, NULL, 'mccain-foods--india--pvt--ltd', NULL, NULL, 'active', '2024-12-08 12:15:37', '2024-12-11 13:26:32'),
(8, 8, NULL, 'Jubilant Life Sciences Ltd', '<p>Erection &amp; alignment of equipments</p>', NULL, NULL, NULL, NULL, 'jubilant-life-sciences-ltd', NULL, NULL, 'active', '2024-12-08 12:15:54', '2024-12-11 19:46:51'),
(9, 9, 'Speciality welding along with installation, pressure testing and commissioning', 'AVA Huep GmbH & Co', NULL, NULL, NULL, NULL, NULL, 'ava-huep-gmbh-co', NULL, NULL, 'active', '2024-12-08 12:16:07', '2024-12-11 13:28:43'),
(10, 10, 'Supply, fabrication, erection & testing of utility piping including structurals and equipment erection', 'INBISCO India Pvt. Ltd', NULL, NULL, NULL, NULL, NULL, 'inbisco-india-pvt--ltd', NULL, NULL, 'active', '2024-12-08 12:16:41', '2024-12-11 13:29:24'),
(11, 11, 'Civil works including boundary wall', 'Avenza Pharmaceuticals Private Limited', '<p>Civil works including boundary wall</p>', NULL, NULL, NULL, NULL, 'avenza-pharmaceuticals-private-limited', NULL, NULL, 'active', '2024-12-08 12:16:56', '2024-12-11 13:30:03'),
(12, 12, 'Plant structure fabrication & erection, fabrication & erection of piping and equipment erection', 'PI Industries Ltd', '<p>Plant structure fabrication &amp; erection, fabrication &amp; erection of piping and equipment erection</p>', NULL, NULL, NULL, NULL, 'pi-industries-ltd', NULL, NULL, 'active', '2024-12-08 12:17:09', '2024-12-11 13:30:21'),
(13, 13, 'Equipment installation in CSY Plant and continuing order for Mechanical ARC', 'Aditya Birla Nuovo Ltd. Veraval, Gujarat', '<p>Equipment installation in CSY Plant and continuing order for Mechanical ARC</p>', NULL, NULL, NULL, NULL, 'aditya-birla-nuovo-ltd--veraval--gujarat', NULL, NULL, 'active', '2024-12-08 12:17:32', '2024-12-11 13:30:39'),
(14, 14, NULL, 'Grasim Industries Ltd, Renukut', NULL, NULL, NULL, NULL, NULL, 'grasim-industries-ltd-renukut', NULL, NULL, 'active', '2024-12-08 12:17:50', '2024-12-11 19:47:03'),
(15, 15, NULL, 'Reliance Petroleum Ltd. Jamnagar SEZ, Gujarat', NULL, NULL, NULL, NULL, NULL, 'reliance-petroleum-ltd-jamnagar-sez-gujarat', NULL, NULL, 'active', '2024-12-08 12:18:16', '2024-12-11 19:46:22'),
(16, 16, NULL, 'Toyo engineering india private ltd', NULL, NULL, NULL, NULL, NULL, 'toyo-engineering-india-private-ltd', NULL, NULL, 'active', '2024-12-08 12:18:34', '2024-12-11 19:46:09'),
(17, 17, NULL, 'DCM Shree Ram, Kota', NULL, NULL, NULL, NULL, NULL, 'dcm-shree-ram-kota', NULL, NULL, 'active', '2024-12-08 12:18:51', '2024-12-11 19:45:59'),
(18, 18, NULL, 'DCW, Dhangdhara', NULL, NULL, NULL, NULL, NULL, 'dcw-dhangdhara', NULL, NULL, 'active', '2024-12-08 12:19:13', '2024-12-11 19:45:29'),
(19, 19, NULL, 'Rubamin Ltd, Halol', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2024-12-08 12:19:26', '2024-12-11 19:40:20'),
(20, 20, NULL, 'Scote Glass, Karkhadi', NULL, '1733849695_784.webp', NULL, NULL, NULL, 'scote-glass-karkhadi', NULL, NULL, 'active', '2024-12-08 12:19:41', '2024-12-11 19:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` bigint UNSIGNED NOT NULL,
  `project_id` bigint UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `image`, `image_title`, `created_at`, `updated_at`) VALUES
(1, 20, '1733849589_827.webp', 'null', '2024-12-10 16:53:12', '2024-12-10 16:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint UNSIGNED NOT NULL,
  `search_index` text COLLATE utf8mb4_unicode_ci,
  `search_follow` text COLLATE utf8mb4_unicode_ci,
  `canonical_url` text COLLATE utf8mb4_unicode_ci,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `seoable_id` bigint UNSIGNED NOT NULL,
  `seoable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `search_index`, `search_follow`, `canonical_url`, `meta_title`, `meta_keyword`, `meta_description`, `seoable_id`, `seoable_type`, `created_at`, `updated_at`) VALUES
(1, '1', '1', NULL, NULL, NULL, NULL, 20, 'App\\Models\\admin\\Project', '2024-12-10 16:53:09', '2024-12-11 19:39:53'),
(2, '1', '1', NULL, NULL, NULL, NULL, 1, 'App\\Models\\admin\\Gallery', '2024-12-11 11:35:43', '2024-12-11 11:35:43'),
(3, '1', '1', NULL, NULL, NULL, NULL, 4, 'App\\Models\\admin\\Project', '2024-12-11 12:53:51', '2024-12-11 13:19:13'),
(4, '1', '1', NULL, NULL, NULL, NULL, 5, 'App\\Models\\admin\\Project', '2024-12-11 12:54:12', '2024-12-11 13:22:31'),
(5, '1', '1', NULL, NULL, NULL, NULL, 6, 'App\\Models\\admin\\Project', '2024-12-11 12:55:03', '2024-12-11 13:26:18'),
(6, '1', '1', NULL, NULL, NULL, NULL, 7, 'App\\Models\\admin\\Project', '2024-12-11 12:55:51', '2024-12-11 13:26:32'),
(7, '1', '1', NULL, NULL, NULL, NULL, 8, 'App\\Models\\admin\\Project', '2024-12-11 12:56:19', '2024-12-11 19:46:51'),
(8, '1', '1', NULL, NULL, NULL, NULL, 9, 'App\\Models\\admin\\Project', '2024-12-11 12:56:40', '2024-12-11 13:26:46'),
(9, '1', '1', NULL, NULL, NULL, NULL, 11, 'App\\Models\\admin\\Project', '2024-12-11 12:57:25', '2024-12-11 13:30:03'),
(10, '1', '1', NULL, NULL, NULL, NULL, 12, 'App\\Models\\admin\\Project', '2024-12-11 12:57:54', '2024-12-11 13:30:21'),
(11, '1', '1', NULL, NULL, NULL, NULL, 13, 'App\\Models\\admin\\Project', '2024-12-11 12:58:26', '2024-12-11 13:30:39'),
(12, '1', '1', NULL, NULL, NULL, NULL, 1, 'App\\Models\\admin\\Project', '2024-12-11 13:23:59', '2024-12-11 13:23:59'),
(13, '1', '1', NULL, NULL, NULL, NULL, 10, 'App\\Models\\admin\\Project', '2024-12-11 13:29:24', '2024-12-11 13:29:24'),
(14, '1', '1', NULL, NULL, NULL, NULL, 19, 'App\\Models\\admin\\Project', '2024-12-11 19:40:20', '2024-12-11 19:40:20'),
(15, '1', '1', NULL, NULL, NULL, NULL, 18, 'App\\Models\\admin\\Project', '2024-12-11 19:45:29', '2024-12-11 19:45:29'),
(16, '1', '1', NULL, NULL, NULL, NULL, 17, 'App\\Models\\admin\\Project', '2024-12-11 19:45:59', '2024-12-11 19:45:59'),
(17, '1', '1', NULL, NULL, NULL, NULL, 16, 'App\\Models\\admin\\Project', '2024-12-11 19:46:09', '2024-12-11 19:46:09'),
(18, '1', '1', NULL, NULL, NULL, NULL, 15, 'App\\Models\\admin\\Project', '2024-12-11 19:46:22', '2024-12-11 19:46:22'),
(19, '1', '1', NULL, NULL, NULL, NULL, 14, 'App\\Models\\admin\\Project', '2024-12-11 19:47:03', '2024-12-11 19:47:03'),
(20, '0', '0', NULL, NULL, NULL, NULL, 4, 'App\\Models\\admin\\Industry', '2024-12-12 14:03:16', '2024-12-12 14:03:16'),
(21, '0', '0', NULL, NULL, NULL, NULL, 16, 'App\\Models\\admin\\Service', '2024-12-12 14:18:05', '2024-12-12 14:18:05'),
(22, '0', '0', NULL, NULL, NULL, NULL, 6, 'App\\Models\\admin\\Industry', '2025-05-24 11:26:38', '2025-05-24 11:26:38'),
(23, '1', '1', NULL, NULL, NULL, NULL, 1, 'App\\Models\\admin\\Category', '2025-05-25 01:17:53', '2025-05-25 01:17:53'),
(24, '1', '1', NULL, NULL, NULL, NULL, 1, 'App\\Models\\admin\\Product', '2025-05-25 01:19:54', '2025-05-25 01:19:54'),
(25, '1', '1', NULL, NULL, NULL, NULL, 2, 'App\\Models\\admin\\Category', '2025-05-25 02:06:41', '2025-05-25 02:06:41'),
(26, '1', '1', NULL, NULL, NULL, NULL, 2, 'App\\Models\\admin\\Product', '2025-05-25 02:07:50', '2025-05-25 02:07:50'),
(27, '1', '1', NULL, NULL, NULL, NULL, 3, 'App\\Models\\admin\\Product', '2025-05-25 02:25:46', '2025-05-25 02:25:46'),
(28, '1', '1', NULL, NULL, NULL, NULL, 4, 'App\\Models\\admin\\Product', '2025-05-25 02:30:46', '2025-05-25 02:30:46'),
(29, '1', '1', NULL, NULL, NULL, NULL, 3, 'App\\Models\\admin\\Category', '2025-05-26 12:23:29', '2025-05-26 12:23:29'),
(30, '1', '1', NULL, NULL, NULL, NULL, 5, 'App\\Models\\admin\\Product', '2025-05-26 12:29:06', '2025-05-26 12:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `item_no` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `para1` text COLLATE utf8mb4_unicode_ci,
  `para2` text COLLATE utf8mb4_unicode_ci,
  `gallery` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_images`
--

CREATE TABLE `service_images` (
  `id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `item_no` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `type` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `youtube_embed` text COLLATE utf8mb4_unicode_ci,
  `video` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `item_no`, `image`, `title`, `type`, `description`, `url`, `youtube_embed`, `video`, `status`, `created_at`, `updated_at`) VALUES
(48, '9', '1748030869_679.webp', NULL, 'image', 'TrasPumpServ — Globally Trusted in Manufacturing & Selling High-Performance Water Pumps.', NULL, NULL, NULL, 1, '2024-03-24 00:09:08', '2025-05-24 01:37:51'),
(51, '10', '1748052026_404.webp', NULL, 'image', 'TrsansPump Serv', NULL, NULL, NULL, 1, '2025-05-24 07:30:28', '2025-05-24 07:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci,
  `vimeo` text COLLATE utf8mb4_unicode_ci,
  `youtube_embed` text COLLATE utf8mb4_unicode_ci,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_group` text COLLATE utf8mb4_unicode_ci,
  `map_embed` text COLLATE utf8mb4_unicode_ci,
  `facebook_embed` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `facebook`, `instagram`, `twitter`, `youtube`, `vimeo`, `youtube_embed`, `linkedin`, `pinterest`, `skype`, `whatsapp`, `whatsapp_group`, `map_embed`, `facebook_embed`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/profile.php', 'https://www.instagram.com/', NULL, 'https://www.youtube.com/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-02 09:21:04', '2024-12-12 07:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

CREATE TABLE `specifications` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `attribute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `item_no` int DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `designation` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `item_no`, `name`, `designation`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Vipin Baria', 'Founder and Director', '1711475854_244.webp', 1, '2024-03-26 06:57:36', '2024-03-26 06:57:36'),
(2, 2, 'Anita Baria', 'Cofounder and Director', '1711475933_340.webp', 1, '2024-03-26 06:58:54', '2024-03-26 06:58:54'),
(3, 3, 'Vijay Baria', 'Agri Manager', '1711475988_919.webp', 1, '2024-03-26 06:59:49', '2024-03-26 06:59:49'),
(4, 4, 'Jairam P Baria', 'Agri Field Maneger', '1711476027_918.webp', 1, '2024-03-26 07:00:29', '2024-03-26 07:00:29'),
(5, 5, 'Anil Baria', 'Accountant', '1711476062_541.webp', 1, '2024-03-26 07:01:04', '2024-03-26 07:01:04'),
(6, 6, 'Hitesh Baria', 'Field Manager', '1711476140_549.webp', 1, '2024-03-26 07:01:28', '2024-03-26 07:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `item_no` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `name` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `item_no`, `image`, `name`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(16, '1', '1710114895_841.webp', 'Mukesh Pathak', 'Exceptional Organic Supply Chain Services', 'Agriness Trading has exceeded my expectations. As a loyal customer, I appreciate their commitment to sustainable agriculture. Kudos to the team for providing top-notch organic fruit and vegetable supply chain services.', 1, '2024-03-10 12:54:56', '2024-04-01 08:11:49'),
(17, '2', '1710115042_122.webp', 'Swati Patel', 'Reliable Farming Solutions', 'Agriness Trading has been my go-to partner for farming solutions. Their drip irrigation systems and solar rooftop installations have transformed my farm. Thanks to Agriness Trading, my crops are thriving.', 1, '2024-03-10 12:57:23', '2024-03-10 12:57:23'),
(18, '3', '1710115093_441.webp', 'Prashant Shah', 'Sustainable Farming Made Easy', 'I\'ve found Agriness Trading to be a beacon of sustainable farming practices. Their quality fertilizers and innovative solutions have made organic farming more accessible.', 1, '2024-03-10 12:58:13', '2024-03-10 12:58:13'),
(19, '4', '1710115176_427.webp', 'Dimpal Ghedia', 'Drip Irrigation Mastery', 'Agriness Trading\'s mastery in drip irrigation has revolutionized my farming methods. The precision of their systems has significantly improved water efficiency, making them an invaluable partner.', 1, '2024-03-10 12:59:36', '2024-03-10 12:59:36'),
(20, '5', '1710115327_576.webp', 'Anand Tiwari', 'Holistic Agricultural Partner', 'Agriness Trading is more than just a service provider; they are our holistic agricultural partner. Their comprehensive approach and advanced technologies have elevated our farming practices.', 1, '2024-03-10 13:00:53', '2024-03-10 13:02:07'),
(21, '6', '1710115449_571.webp', 'Green Revolution Catalyst', 'Mamta Kulkarni', 'Agriness Trading is playing a vital role in the green revolution. Their dedication to sustainable practices is commendable, making them an essential part of the agriculture sector.', 1, '2024-03-10 13:04:09', '2024-03-10 13:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'myalivecreate@gmail.com', NULL, '123123', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id` bigint UNSIGNED NOT NULL,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `primary_mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `main_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `light_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `website_name`, `tagline`, `domain_name`, `description`, `primary_mail`, `secondary_mail`, `primary_phone`, `secondary_phone`, `address`, `main_logo`, `light_logo`, `favicon`, `created_at`, `updated_at`) VALUES
(1, 'TransPumpServ Global', NULL, 'http://www.transpumpservglobal.com/', NULL, 'mail@transpumpservglobal.com', NULL, '9510728692', NULL, '909/7/A, GIDC Estate, Makarpura,\r\nVadodara, Gujarat - 390010.', '1748249238_332.webp', '1748249239_332.webp', '1748249239_484.webp', '2024-03-01 14:49:21', '2025-05-26 14:17:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_code`
--
ALTER TABLE `custom_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_images_gallery_id_foreign` (`gallery_id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry_images`
--
ALTER TABLE `industry_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `industry_images_industry_id_foreign` (`industry_id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry_quantities`
--
ALTER TABLE `inquiry_quantities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inquiry_quantities_product_inquiry_id_foreign` (`product_inquiry_id`),
  ADD KEY `inquiry_quantities_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_sku_unique` (`sku`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_inquiries`
--
ALTER TABLE `product_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_images_project_id_foreign` (`project_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_images`
--
ALTER TABLE `service_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_images_service_id_foreign` (`service_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specifications`
--
ALTER TABLE `specifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specifications_product_id_foreign` (`product_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `custom_code`
--
ALTER TABLE `custom_code`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `industry_images`
--
ALTER TABLE `industry_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiry_quantities`
--
ALTER TABLE `inquiry_quantities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_inquiries`
--
ALTER TABLE `product_inquiries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `service_images`
--
ALTER TABLE `service_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specifications`
--
ALTER TABLE `specifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD CONSTRAINT `gallery_images_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `industry_images`
--
ALTER TABLE `industry_images`
  ADD CONSTRAINT `industry_images_industry_id_foreign` FOREIGN KEY (`industry_id`) REFERENCES `industries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `inquiry_quantities`
--
ALTER TABLE `inquiry_quantities`
  ADD CONSTRAINT `inquiry_quantities_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `inquiry_quantities_product_inquiry_id_foreign` FOREIGN KEY (`product_inquiry_id`) REFERENCES `product_inquiries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_images`
--
ALTER TABLE `project_images`
  ADD CONSTRAINT `project_images_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_images`
--
ALTER TABLE `service_images`
  ADD CONSTRAINT `service_images_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `specifications`
--
ALTER TABLE `specifications`
  ADD CONSTRAINT `specifications_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
