-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 07:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inter`
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
  `admin_photos` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin_photos`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Technoval Ltd.', 'admin@gmail.com', '2022-06-07 01:00:33', '$2y$10$JDrlzQW9LcPkV.tbW9QBmeBdY1RtPAkmFcqhUWU/loQgymCOrz45O', '202212170454logo.png', 0, '2022-06-07 01:00:34', '2022-12-17 04:54:10'),
(2, 'Admin', 'ward.cecil@example.net', '2022-06-07 01:00:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 0, '2022-06-07 01:00:34', '2022-06-07 01:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_photo`, `blog_description`, `status`, `created_at`, `updated_at`, `views`) VALUES
(9, 'The point of using Lorem Ipsum is that it', 'upload/blog/1756535990078992.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', 0, '2023-01-31 19:07:40', '2023-02-01 15:09:26', 35),
(13, 'An art studio is sometimes', 'upload/blog/1756536162917231.jpg', '<p>The studio of any artist, especially from the 15th to the 19th centuries, characterized all the assistants</p>', 1, '2023-01-31 19:10:24', '2023-01-31 19:10:24', 47),
(16, 'one', 'upload/blog/1756539187064627.jpg', '<p>one</p>', 1, '2023-01-31 19:58:29', NULL, 0),
(17, 'two', 'upload/blog/1756539278284492.jpg', '<p>two</p>', 1, '2023-01-31 19:59:55', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`) VALUES
(12, 'Fish', 'fish', NULL, '2023-02-04 17:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `childcategories`
--

CREATE TABLE `childcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `childcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `childcategory_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `childcategories`
--

INSERT INTO `childcategories` (`id`, `category_id`, `subcategory_id`, `childcategory_name`, `childcategory_slug`, `created_at`, `updated_at`) VALUES
(21, 12, 30, 'Search Engine Optimization (SEO)', 'search-engine-optimization-(seo)', NULL, NULL),
(22, 12, 30, 'Social Media Marketing', 'social-media-marketing', NULL, NULL),
(23, 12, 30, 'Pay Per Click (PPC)', 'pay-per-click-(ppc)', NULL, NULL),
(24, 12, 30, 'Email Marketing', 'email-marketing', NULL, NULL),
(25, 12, 30, 'Media buying', 'media-buying', NULL, NULL),
(26, 12, 30, 'Affiliate Marketing', 'affiliate-marketing', NULL, NULL),
(27, 12, 29, 'Desktop Application', 'desktop-application', NULL, NULL),
(28, 12, 29, 'Android & iOS App Development', 'android-&-ios-app-development', NULL, NULL),
(29, 12, 29, 'Enterprise  Software Solution', 'enterprise--software-solution', NULL, NULL),
(30, 12, 29, 'Custom Software Solution', 'custom-software-solution', NULL, NULL),
(31, 12, 28, 'E-commerce Solution', 'e-commerce-solution', NULL, NULL),
(32, 12, 28, 'Company profile Website', 'company-profile-website', NULL, NULL),
(33, 12, 28, 'School, College, University Website', 'school,-college,-university-website', NULL, NULL),
(34, 12, 28, 'Booking Website', 'booking-website', NULL, NULL),
(35, 12, 27, 'Static post design ,Banner design', 'static-post-design-,banner-design', NULL, NULL),
(36, 12, 27, 'Content writing/copywriting', 'content-writing/copywriting', NULL, NULL),
(37, 12, 27, 'Interview video/Documentary  Video', 'interview-video/documentary--video', NULL, NULL),
(38, 12, 27, 'Corporate AV', 'corporate-av', NULL, NULL),
(39, 12, 27, 'Professional video shoot and studio rent', 'professional-video-shoot-and-studio-rent', NULL, NULL),
(40, 12, 31, 'Web Application Development', 'web-application-development', NULL, NULL),
(41, 12, 31, 'WordPress Website Development', 'wordpress-website-development', NULL, NULL),
(42, 12, 31, 'Ecommerce Web Design and Development', 'ecommerce-web-design-and-development', NULL, NULL),
(43, 12, 31, 'Enterprise Web Design and Development', 'enterprise-web-design-and-development', NULL, NULL),
(44, 12, 31, 'Laravel Website Design Services', 'laravel-website-design-services', NULL, '2022-11-26 06:48:43'),
(45, 12, 31, 'E-Learning System', 'e-learning-system', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_title`, `client_logo`, `created_at`, `updated_at`) VALUES
(12, 'Ababil Gear', 'upload/client/1747388136205049.png', '2022-10-22 15:46:26', NULL),
(21, 'OGS', 'upload/client/1747388643233852.png', '2022-10-22 15:54:30', NULL),
(23, 'Dawah to Tawheed', 'upload/client/1747398606464954.png', '2022-10-22 18:32:51', NULL),
(24, 'Triomond', 'upload/client/1747398673767779.png', '2022-10-22 18:33:55', NULL),
(25, 'Shine to You', 'upload/client/1747398820756275.png', '2022-10-22 18:36:16', NULL),
(26, 'AMZ Hospital', 'upload/client/1752435080404359.png', '2022-12-17 04:45:27', NULL),
(27, 'MIM Graphics', 'upload/client/1752435154487914.png', '2022-12-17 04:46:38', NULL),
(28, 'Bike Care', 'upload/client/1752438171039342.jpg', '2022-12-17 05:34:35', NULL),
(29, 'Live-As-Pro', 'upload/client/1752438334028170.png', '2022-12-17 05:37:10', NULL),
(30, 'TS Fashion', 'upload/client/1752438358620252.png', '2022-12-17 05:37:33', NULL),
(31, 'Daily Bazar', 'upload/client/1752438380567827.png', '2022-12-17 05:37:54', NULL),
(32, 'E-Fine Express', 'upload/client/1752438405918909.png', '2022-12-17 05:38:18', NULL),
(33, 'Hair Patch BD', 'upload/client/1752438434005333.png', '2022-12-17 05:38:45', NULL),
(34, 'WEP BD', 'upload/client/1752438516851685.png', '2022-12-17 05:40:04', NULL),
(35, 'Moom\'s Heaven', 'upload/client/1752438570804104.png', '2022-12-17 05:40:56', NULL),
(36, 'Purbachal Smart City', 'upload/client/1752438603074195.png', '2022-12-17 05:41:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `email_address`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '356436', 'domain verify', 'rffj', NULL, NULL),
(2, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '46457', 'domain verify', 'dfcjfgj', NULL, NULL),
(3, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '01834186970', 'Software', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(4, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '458', 'er', 'ey', NULL, NULL),
(5, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '466', 'domain verify', 'ey', NULL, NULL),
(6, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '466', 'domain verify', 'ey', NULL, NULL),
(7, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '46457', 'gy', 'fhtfgj', NULL, NULL),
(8, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '46457', 'gy', 'fhtfgj', NULL, NULL),
(9, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '01778882006', 'a', 'sf', NULL, NULL),
(10, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '01778882006', 'a', 'sf', NULL, NULL),
(11, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '46457', 'domain verify', 'fgt', NULL, NULL),
(12, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '46457', 'domain verify', 'fgt', NULL, NULL),
(13, 'Abir Ahmed', 'shahinsumon2021@gmail.com', '4587569690090', 'domain verify', 'zdgdxg', NULL, NULL),
(14, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '47458897', 'domain verify', 'xdfjg', NULL, NULL),
(15, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '2366', 'Software', 'dfhfj', NULL, NULL),
(16, 'test', 'test1@gmail.com', '4586969', 'domain verify', 'dfhdfj', NULL, NULL),
(17, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '366', '37y45', 'dsgdd', NULL, NULL),
(18, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '366', '37y45', 'dsgdd', NULL, NULL),
(19, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '4758', 'dshfd', 'dfhfdj', NULL, NULL),
(20, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '4367', 'dhh', 'sdxjfj', NULL, NULL),
(21, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '4367', 'dhh', 'sdxjfj', NULL, NULL),
(22, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '548569', 'ertr', 'dfjfgj', NULL, NULL),
(23, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '2353', 'saf', 'df', NULL, NULL),
(24, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '2353', 'saf', 'df', NULL, NULL),
(25, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '3543', 'domain verify', 'rgdf', NULL, NULL),
(26, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '3543', 'domain verify', 'rgdf', NULL, NULL),
(27, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(28, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(29, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(30, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(31, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(32, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(33, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(34, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(35, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(36, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(37, 'test2', 'matinagrofarm@gmail.com', '346457', 'gy', 'dfhfj', NULL, NULL),
(38, 'test2', 'matinagrofarm@gmail.com', '346457', 'gy', 'dfhfj', NULL, NULL),
(39, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '+8801834186970', 'Software', 'front', NULL, NULL),
(40, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '755', 'domain verify', 'ghj', NULL, NULL),
(41, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '+8801834186970', 'er', 'gfhvnvg  jiil', NULL, NULL),
(42, 'Mahbub', 'mahbub@gmail.com', '08789672', 'digital', 'need', NULL, NULL),
(43, 'Crytosic', 'daquanburt@yahoo.com', '89038419167', 'Wow! This is a fastest way for a financial independence.', 'Start making thousands of dollars every week just using this robot. Telegram - @Cryptaxbot', NULL, NULL),
(44, 'Crytosic', 'mariela_bedolla@yahoo.com', '89032337630', 'Making money is very easy if you use the financial Robot.', 'Financial robot keeps bringing you money while you sleep. Telegram - @Cryptaxbot', NULL, NULL),
(45, 'Crytosic', 'mylen25@msn.com', '89035632190', 'Find out about the fastest way for a financial independence.', 'Most successful people already use Robot. Do you? Telegram - @Cryptaxbot', NULL, NULL),
(46, 'Crytosic', 'kellymassman@hotmail.com', '89035227741', 'Launch the financial Robot and do your business.', 'One dollar is nothing, but it can grow into $100 here. Telegram - @Cryptaxbot', NULL, NULL),
(47, 'Crytosic', 'wolfgang.w@me.com', '89038981235', 'Find out about the fastest way for a financial independence.', 'The financial Robot is the most effective financial tool in the net! Telegram - @Cryptaxbot', NULL, NULL),
(48, 'Crytosic', 'jwgtwi@yahoo.com', '89037706320', 'Check out the automatic Bot, which works for you 24/7.', 'Financial robot keeps bringing you money while you sleep. Telegram - @Cryptaxbot', NULL, NULL),
(49, 'Md. Farhan Rabby', 'farhanrabby343@gmail.com', '01721413658', 'ECommerce Website', 'Demand-\r\n1. Domain & Hosting (Super Fast)\r\n2. Website (Multivendor) Look Like Arrogga or Foodpanda\r\n3. Mobile App & IOS\r\n4. SEO & Google Ads\r\n5. Marketing Strategy \r\n6. Content Writing\r\n7. Promotional Video\r\n8. FB Page/ Boost/ Promotion\r\n\r\nPlease Share this quotation\r\nAdvance Thank You\r\nContact: 01721413658 (Whatsapp)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery`, `status`, `created_at`, `updated_at`) VALUES
(16, 'upload/portfolio/1756269501956492.jpg', 1, '2022-09-14 04:20:46', '2023-01-28 20:31:57'),
(19, 'upload/portfolio/1756269471981807.jpg', 1, '2022-09-14 04:22:23', '2023-01-28 20:31:28'),
(20, 'upload/portfolio/1756269437907467.jpg', 1, '2022-09-14 04:22:39', '2023-01-28 20:30:56'),
(28, 'upload/portfolio/1756441392948980.jpg', 1, '2022-10-06 05:40:04', '2023-01-30 18:04:05'),
(29, 'upload/portfolio/1756441420572193.jpg', 1, '2022-10-06 05:40:11', '2023-01-30 18:04:31'),
(30, 'upload/portfolio/1756441444393293.jpg', 1, '2022-10-06 05:40:22', '2023-01-30 18:04:54'),
(31, 'upload/portfolio/1756441469865806.jpg', 1, '2022-10-06 05:40:33', '2023-01-30 18:05:18'),
(32, 'upload/portfolio/1756441509937280.jpg', 1, '2022-10-06 05:40:41', '2023-01-30 18:05:56'),
(33, 'upload/portfolio/1756441542573556.jpg', 1, '2022-10-06 05:40:48', '2023-01-30 18:06:28'),
(34, 'upload/portfolio/1756441576125497.jpg', 1, '2022-10-06 05:40:55', '2023-01-30 18:07:00'),
(35, 'upload/portfolio/1756269143828055.jpg', 1, '2022-10-06 05:41:04', '2023-01-28 20:26:15'),
(36, 'upload/portfolio/1756441647528367.jpg', 1, '2022-10-06 05:44:50', '2023-01-30 18:08:08'),
(37, 'upload/portfolio/1756441731514582.jpg', 1, '2022-10-06 05:45:09', '2023-01-30 18:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ind_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ind_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ind_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `ind_title`, `ind_photo`, `ind_description`, `created_at`, `updated_at`) VALUES
(2, 'Travels', 'upload/industries/1747196012221211.png', 'This is travels .', '2022-10-20 02:52:42', '2022-10-20 02:52:42'),
(3, 'Technologies', 'upload/industries/1747195463874482.png', 'This is technologies', '2022-10-20 02:43:59', NULL);

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
(5, '2022_06_05_193812_create_admins_table', 2),
(6, '2022_08_08_050401_create_categories_table', 3),
(7, '2022_08_09_064341_create_sub_categories_table', 4),
(8, '2022_08_09_092147_create_subcategories_table', 5),
(9, '2022_08_10_052744_create_contents_table', 6),
(10, '2022_09_06_061522_create_services_table', 7),
(11, '2022_09_13_130326_create_galleries_table', 8),
(12, '2022_09_14_075608_create_portfolios_table', 9),
(13, '2022_09_14_081818_create_clients_table', 10),
(14, '2022_09_19_162005_create_childcategories_table', 11),
(15, '2022_10_02_073816_create_contacts_table', 12),
(16, '2022_10_04_052157_create_contactuses_table', 13),
(17, '2022_10_04_065644_create_policies_table', 13),
(18, '2022_10_05_171040_create_blogs_table', 13),
(19, '2022_10_06_040643_create_privacies_table', 14),
(20, '2022_10_06_050440_create_terms_table', 15),
(21, '2022_10_20_071552_create_industries_table', 16),
(22, '2022_10_20_072714_create_industries_table', 17),
(23, '2022_10_20_073626_create_industries_table', 18),
(24, '2022_10_23_054943_add_votes_to_services', 19),
(25, '2022_10_23_062145_add_votes_to_blogs', 20),
(26, '2023_01_26_012447_create_settings_table', 21),
(27, '2023_01_31_114201_create_slides_table', 22);

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
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `port_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `port_title`, `port_subtitle`, `port_image`, `status`, `created_at`, `updated_at`) VALUES
(17, 'E-commerce', 'PHP, Laravel,VueJS', 'upload/portfolio/1748740191870692.png', 1, '2022-11-06 09:56:47', '2022-11-06 09:56:47'),
(18, 'School Automation', 'PHP, Laravel,VueJS', 'upload/portfolio/1748740385255987.png', 1, '2022-11-06 09:59:51', '2022-11-06 09:59:51'),
(19, 'Shop Management', 'PHP, Laravel,', 'upload/portfolio/1748740403237389.png', 1, '2022-11-06 10:00:09', '2022-11-06 10:00:09'),
(20, 'Hospital Management', 'PHP, Laravel,', 'upload/portfolio/1748740363844862.png', 1, '2022-11-06 09:59:31', '2022-11-06 09:59:31'),
(21, 'Accounting Software', 'PHP, Laravel,', 'upload/portfolio/1747737782148932.png', 1, '2022-10-26 12:23:55', NULL),
(22, 'Point of Sales', 'PHP, Laravel,', 'upload/portfolio/1748740221435660.png', 1, '2022-11-06 09:57:15', '2022-11-06 09:57:15'),
(23, 'HR-admin Management', 'PHP, Laravel,', 'upload/portfolio/1748740169948759.png', 1, '2022-11-06 09:56:26', '2022-11-06 09:56:26'),
(24, 'Dealership Management', 'PHP, Laravel, VueJS', 'upload/portfolio/1748740203764789.png', 1, '2022-11-06 09:56:58', '2022-11-06 09:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `privacy_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `privacy_title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'test', '<p>hi</p>', '2022-10-05 22:55:30', '2022-10-05 22:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `childcategory_id` int(11) NOT NULL,
  `content_slide_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breadcrumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_descrip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descrip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thamble` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `subcategory_id`, `childcategory_id`, `content_slide_title`, `breadcrumb`, `content_title`, `content_descrip`, `long_descrip`, `thamble`, `status`, `created_at`, `updated_at`, `views`) VALUES
(33, 12, 29, 30, 'Software Development', 'upload/services/1745942247542933.jpg', 'Custom Software Solution', 'Technoval  has a global reputation for up to scratch customer experience which marks us as one of the best software development companies in the world.We are proud to be a customer-centric company. For your success in the digital transformation, we ensure the fastest delivery with  solutions & services.\r\nFrom IT strategy consulting and comprehensive technology roadmaps to the end-to-end development of scalable solutions, Technoval  delivers a full-cycle software development services that adapt seamlessly to your project requirements and business needs.', '<p>What is Software Development? Software development is the process of conceiving, specifying, designing, programming, documenting, testing, and bug fixing involved in creating and maintaining applications, frameworks, or other software components. Software development involves writing and maintaining the source code, but in a broader sense, it includes all processes from the conception of the desired software through to the final manifestation of the software, typically in a planned and structured process. CUSTOM SOFTWARE DEVELOPMENT LIFECYCLE We employ best practice processes and development methodologies as a foundation for rapid building of cutting-edge technology solutions in a structured and methodical way.</p>', 'upload/services/1665060279_Website-Development (2).jpg', 1, '2022-10-06 06:44:39', '2022-12-20 05:57:10', 80),
(40, 12, 30, 25, 'Media Buying', 'upload/services/1748835380415433.jpg', 'Media Buying', 'Media buying is a key piece of any marketing strategy, because the media buy helps ads reach the right audiences', '<h1 dir=\"ltr\"><strong>The media buying process</strong></h1>\r\n\r\n<p dir=\"ltr\"><strong>There are several critical steps to the media buying process:</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>1. Determining what percentage of the total budget will be spent on guaranteed inventory versus non-guaranteed inventory&mdash;when a specific amount of inventory is purchased versus when an unspecified amount of inventory is purchased&mdash;usually at a discounted rate.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>2. Sending requests for proposals (RFPs) to media outlets, when applicable, then evaluating which mix offers the potential to maximize campaign performance.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>3. Finalizing the order by creating an insertion order (IO).</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>4. Trafficking the creative to the selected media outlets, and sizing each ad appropriately for its placement.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>5. Launching the campaign, and ensuring metrics are in place to measure results.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>6. Monitoring metrics from media outlets or channels, as well as internal insights, to gauge success, making tweaks as necessary, and monitoring the campaign overall against key performance indicators (KPIs)s.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>7. Reconciling spend against the budget detailed in the media plan.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>8. Reconciling costs and negotiating &ldquo;make goods&rdquo; for any under-delivering ads.</strong></p>\r\n\r\n<h2 dir=\"ltr\"><strong>Four factors to consider when buying media</strong></h2>\r\n\r\n<p dir=\"ltr\"><strong>There are four key factors to consider when buying media or negotiating media buys.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong><img alt=\"Protect your brand\" src=\"https://lh6.googleusercontent.com/FxEkg5LjJdfg5hKP5o-WtTXTwRiovOZejKNJzuZQ9h-K30_TWA5VWdAHcmhc6Yg4gUDWFYHdmaNx0tkvYS4imwyk1fx73u0nADoH-Td4B5cDzx2UAnmt5ZnALkkRsTC80D8Le__5xRNOxJAefLsnvGNh9xTUWBO4cAapabjSd4aTT844mJtc8ykeioEPOg\" style=\"height:256px; width:256px\" title=\"Protect your brand\" /></strong></p>\r\n\r\n<p dir=\"ltr\"><strong>&nbsp;</strong></p>\r\n\r\n<h2 dir=\"ltr\"><strong>2. Optimize your media buying</strong></h2>\r\n\r\n<p dir=\"ltr\"><strong>Optimization is a way to adjust frequency and bids to maximize performance, as well as block select domains. One of the many benefits of programmatic ad buying is by default, programmatic ad buying runs optimization for you. It&rsquo;s simply a matter of ensuring the programmatic campaign is set up with the correct parameters.</strong></p>\r\n\r\n<h2 dir=\"ltr\"><strong>3. Aim for cohesion</strong></h2>\r\n\r\n<p dir=\"ltr\"><strong>Ensure your marketing mix and creatives work together, not against each other, for the best return on your advertising investment. Tell a complete story across your entire media mix versus disconnected messages and creatives.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong><img alt=\"Prioritize measurement\" src=\"https://lh6.googleusercontent.com/2gBr4mMKHVWMk4F2jYyqesDJPK4m3KoLRAighbffEx_bi5vcavCRjsp6hrLUF7s6-nJ1ItZWm3_oXlkM4t2WNEJIEgXQUygOnqHBr3xnQT6PQej5pi6diABnDjpwBUeBmKHkQv8Hb455td2dwt3wND4PszYT579ybZquuv9DRDDWrsDOsxztxF3q6tSqsg\" style=\"height:259px; width:259px\" title=\"Prioritize measurement\" /></strong></p>\r\n\r\n<p dir=\"ltr\"><strong>Understanding which campaigns and creatives are driving the best results at the lowest cost is important for optimizing the campaign overall. One of the benefits of digital media is the ability to measure and fine-tune campaigns while they&rsquo;re in flight versus waiting for them to finish to digest results.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>&nbsp;</strong></p>\r\n\r\n<h2 dir=\"ltr\"><strong>What is Social Media Advertising?</strong></h2>\r\n\r\n<p dir=\"ltr\"><strong>Did you know that 30% of users&#39; online activities are dedicated to social media sites? In an average lifetime, a user will spend 5 years and 4 months on social media*.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>Social Media Advertising allows you to target the consumers that have interests related to your product/service. Interests, along with demographic information, allows us to reach your desired audience. Ethic Advertising has experience serving ads on multiple social media platforms including Facebook, LinkedIn, Twitter, etc.</strong></p>', 'upload/services/1756268612703662.jpg', 1, '2022-11-07 11:09:46', '2023-01-28 20:17:49', 99),
(41, 12, 30, 23, 'Pay Per Click (PPC)', 'upload/services/1748837390654830.jpg', 'Pay Per Click (PPC)', 'Pay Per Click (PPC) stands for pay-per-click, a model of digital advertising where the advertiser pays a fee each time one of their ads is clicked. Essentially, you’re paying for targeted visits to your website (or landing page or app).', '<h1 dir=\"ltr\"><strong>What is PPC?</strong></h1>\r\n\r\n<p dir=\"ltr\"><strong>PPC stands for pay-per-click, a model of digital advertising where the advertiser pays a fee each time one of their ads is clicked. Essentially, you&rsquo;re paying for targeted visits to your website (or landing page or app). When PPC is working correctly, the fee is trivial because the click is worth more than what you pay for it. For example, if you pay $3 for a click, but the click results in a $300 sale, then you&rsquo;ve made a hefty profit.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>PPC ads come in different shapes and sizes (literally), and can be made up of text, images, videos, or a combination. They can appear on search engines, websites, social media platforms, and more.</strong></p>\r\n\r\n<h2 dir=\"ltr\"><strong>How does PPC advertising work?</strong></h2>\r\n\r\n<p dir=\"ltr\"><strong>PPC advertising looks different from platform to platform, but in general, the process is as follows:</strong></p>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Choose your campaign type based on your objective.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Refine your settings and targeting (audiences, devices, locations, schedule, etc.).</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Provide your budget and bidding strategy.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Input your destination URL (landing page).</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Build your ad.</strong></p>\r\n	</li>\r\n</ol>\r\n\r\n<h2 dir=\"ltr\"><strong>How to do PPC with Google Ads</strong></h2>\r\n\r\n<p dir=\"ltr\"><strong>Conducting PPC marketing through Google Ads is particularly valuable because, as the most popular search engine, Google gets massive amounts of traffic and therefore delivers the most impressions and clicks to your ads. How often your PPC ads appear depends on which keywords and match types you select. While a number of factors determine how successful your PPC advertising campaign will be, you can achieve a lot by doing the following:</strong></p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Bid on relevant keywords. Crafting relevant PPC keyword lists, tight keyword groups, and proper ad text.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Focus on landing page quality. Create optimized landing pages with persuasive, relevant content, and a clear call to action tailored to specific search queries.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Improve your Quality Score. Quality Score is Google&rsquo;s rating of the quality and relevance of your keywords, landing pages, and PPC campaigns. Advertisers with better Quality Scores get more ad clicks at lower costs.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Capture attention. Enticing ad copy is vital; and if you&rsquo;re running display or social ads, so is eye-catching ad creative.</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<h2 dir=\"ltr\"><strong>How to do effective PPC keyword research</strong></h2>\r\n\r\n<p dir=\"ltr\"><strong>Keyword research for PPC can be incredibly time-consuming, but it is also incredibly important. Your entire PPC campaign is built around keywords, and the most successful Google Ads advertisers continuously grow and refine their PPC keyword list. If you only do keyword research once, when you create your first campaign, you are probably missing out on hundreds of thousands of valuable, long-tail, low-cost, and highly relevant keywords that could be driving traffic to your site.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>You can check our full guide to keyword research here, but in short, an effective PPC keyword list should be:</strong></p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Relevant: Of course, you don&rsquo;t want to be paying for clicks that aren&rsquo;t going to convert. That means the keywords you bid on should be closely related to the offerings you sell.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Exhaustive: Your keyword research should include not only the most popular and frequently searched terms in your niche, but long-tail keywords. These are more specific and less common, but they add up to account for the majority of search-driven traffic. In addition, they are less competitive, and therefore less expensive.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Expansive: PPC is iterative. You want to constantly refine and expand your campaigns, and create an environment in which your keyword list is constantly growing and adapting.</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\"><strong>If you want to find high-volume, industry-specific keywords to use in your PPC campaigns, be sure to check out our Free Keyword Tool.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>Managing your PPC campaigns</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>Once you&rsquo;ve created your new campaigns, you&rsquo;ll need to manage them regularly to make sure they continue to be effective. In fact, regular account activity is one of the best predictors of account success. You should be continuously analyzing the performance of your account and making the following adjustments to optimize your campaigns:</strong></p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Continuously add PPC keywords: Expand the reach of your PPC campaigns by adding keywords that are relevant to your business.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Add negative keywords: Add non-converting terms as negative keywords to improve campaign relevancy and reduce wasted spend.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Review costly PPC keywords: Review expensive, under-performing keywords and shut them off if necessary.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Refine landing pages: Modify the content and CTAs of your landing pages to align with individual search queries in order to boost conversion rates. Don&rsquo;t send all your traffic to the same page.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Split ad groups: Improve click-through rate (CTR) and Quality Score by splitting up your ad groups into smaller, more relevant ad groups, which help you create more targeted ad text and landing pages. More on account structure here.</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<h2 dir=\"ltr\"><strong>Management Services Offered</strong></h2>\r\n\r\n<p dir=\"ltr\"><strong>Our PPC management program covers the following ad platforms:</strong></p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Google Ads (Search &amp; Display Network)</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Instagram Ads</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Google Shopping</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>LinkedIn Ads</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Bing Advertising</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Twitter Ads</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Youtube Advertising</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Remarketing/Retargeting (across search engines and social platforms)</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Facebook Ads</strong></p>\r\n	</li>\r\n</ul>', 'upload/services/1756268555140949.jpg', 1, '2022-11-07 11:41:43', '2023-02-02 21:17:38', 169),
(42, 12, 30, 26, 'Affiliate Marketing', 'upload/services/1748837714801377.jpg', 'Affiliate Marketing', 'Affiliate marketing is more than a race to the bottom of the funnel.', '<h1 style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"font-size:24pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong><span style=\"font-size:18.0pt\">What Is Affiliate Marketing?</span></strong></strong></span></span></h1>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Affiliate marketing is the process by which an affiliate earns a commission for marketing another person&rsquo;s or company&rsquo;s products. The affiliate simply searches for a product they enjoy, then promotes that product and earns a piece of the profit from each sale they make. The sales are tracked via affiliate links from one website to another.&nbsp;</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Affiliate marketing is a great way to drive sales and generate significant online revenue. Extremely beneficial to both brands and affiliate marketers, the new push toward less traditional marketing tactics has certainly paid off.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>&nbsp;</strong></span></span></p>\r\n\r\n<h2 style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"font-size:18pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong><span style=\"font-size:15.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">How Does Affiliate Marketing Work?</span></span></strong></strong></span></span></h2>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Because affiliate marketing works by spreading the responsibilities of product marketing and creation across parties, it leverages the abilities of a variety of individuals for a more effective marketing strategy while providing contributors with a share of the profit. To make this work, three different parties must be involved:</strong></span></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Seller and product creators.</strong></span></span></li>\r\n	<li><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>The affiliate or advertiser.</strong></span></span></li>\r\n	<li><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>The consumer.</strong></span></span></li>\r\n</ol>\r\n\r\n<h2 style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"font-size:18pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong>How Do Affiliate Marketers Get Paid?</strong></strong></span></span></h2>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>A quick and inexpensive method of making money without the hassle of actually selling a product, affiliate marketing has an undeniable draw for those looking to increase their income online. But how does an affiliate get paid after linking the seller to the consumer?</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>The answer can get complicated.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>The consumer doesn&rsquo;t always need to buy the product for the affiliate to get a kickback. Depending on the program, the affiliate&rsquo;s contribution to the seller&rsquo;s sales will be measured differently.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<h1 style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"font-size:24pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong>What We Do?</strong></strong></span></span></h1>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>It&rsquo;s what we do, it&rsquo;s what we&rsquo;ve always done, and we&rsquo;re the best at it. For over a decade, we&rsquo;ve set up and successfully managed countless affiliate marketing programs for brands in various sectors and countries, with different targets and financial objectives. The affiliate channel can be both cost-effective and profitable if controlled by experienced affiliate managers, and we have the results to prove it.</strong></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Affiliate Marketing Agency</strong></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>When a client works with us, their account receives an experienced affiliate manager, state of the art marketing technology and an agency structured to service companies big and small. Our account managers are assisted by admin support and a technical team, alongside an Affiliate.</strong></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Marketing Agency</strong></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>When a client works with us, their account receives an experienced affiliate manager, state of the art marketing technology and an agency structured to service companies big and small. Our account managers are assisted by admin support and a technical team, alongside a group of directors that collectively combined have over 10+ years of market experience.</strong></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Publisher Relationships</strong></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Building relationships with publishers is a primary role as an agency. We sit in the middle of a profitable cycle, where the clients we work for earn money from publishers that sell their products and the publishers we partner with earn commission. Voucher code sites, cashback providers, comparison tables, bloggers, social influencers and many more, we work with them all and know how to get the best out of each platform.</strong></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Affiliate Networks</strong></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>We work with all the different networks working within the affiliate space, maximizing the returns clients can get out of whatever platform they operate on. We utilize the management tools and experience that we have independently of any network to achieve the best possible results.</strong></span></span></p>', 'upload/services/1756268498376563.jpg', 1, '2022-11-07 11:46:52', '2023-01-28 20:16:00', 97),
(43, 12, 30, 22, 'Social Media Marketing', 'upload/services/1748838131877500.jpg', 'Social Media Marketing', 'Social media marketing (SMM) (also known as digital marketing and e-marketing) is the use of social media—the platforms on which users build social networks and share information—to build a company\'s brand, increase sales, and drive website traffic. In addition to providing companies with a way to engage with existing customers and reach new ones, social media marketing (SMM) has purpose-built data analytics that allow marketers to track the success of their efforts and identify even more ways to engage.', '<h1 dir=\"ltr\"><strong>What is Social Media Marketing?</strong></h1>\r\n\r\n<p dir=\"ltr\"><strong>Social media marketing is the use of social media platforms to connect with your audience to build your brand, increase sales, and drive website traffic. This involves publishing great content on your social media profiles, listening to and engaging your followers, analyzing your results, and running social media advertisements.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>The major social media platforms (at the moment) are Facebook, Instagram, Twitter, LinkedIn, Pinterest, YouTube, and Snapchat.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>There are also a range of social media management tools that help businesses to get the most out of the social media platforms listed above. For example, Buffer is a platform of social media management tools, which can help you achieve success with your social media marketing. Whether you want to build a brand or grow your business, we want to help you succeed.</strong></p>\r\n\r\n<h2 dir=\"ltr\"><strong>&nbsp;</strong></h2>\r\n\r\n<h2 dir=\"ltr\"><strong>How social media marketing works</strong></h2>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Market Research: Collecting relevant data to solve marketing challenges in the digital age is a breeze as compared to the traditional methods. Social media allows you to understand customer demand, stay updated about the buying trends, analyze the market condition, and also analyze your competitors&rsquo; efforts.&nbsp;</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Discovery: Identifying and unlocking new opportunities is easy in the real-time world of social media. You can find new ways to connect with your target audience, generate leads, nurture them, and provide customer support.&nbsp;</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Formulate a strategy: Depending on your business objectives, you can prioritize these opportunities and develop a clear social media strategy. Various online tools have also cropped up to help you manage your digital marketing efforts.&nbsp;</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Final review: On social media, you receive instantaneous feedback and reports on your campaigns. And accordingly, you can improvise your digital marketing strategy.</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<h2 dir=\"ltr\"><strong>Advantages of using SMM</strong></h2>\r\n\r\n<p dir=\"ltr\"><strong>1. The digital world is borderless by its very definition. With social media marketing, you get access to the global market and engage more than just your local, regional, and national audiences.&nbsp;</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>2. In a highly competitive business environment, it becomes difficult to stand out. And social media helps you increase your visibility, develop a dedicated follower base, and promote your products to them with ease.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>3. Cost-effectiveness is one of the most significant benefits of using social media marketing. Digital marketing is super affordable when compared to the thousands and lakhs of rupees brands spend on print articles, billboards, and television real estate. The average cost of creating a Facebook ad is around ₹40 per day.&nbsp;</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>4. The diversity of social media users is another positive factor. While millennials continue to occupy the top spot, the online engagement of older generations has also picked up. Emarketer provides an interesting breakdown of active social media users &ndash; 90.4% millennials (25-39 years), 77.5% of Gen X (40-54 years), and 48.2% of Baby Boomers (55-75 years). Even the Gen Z population (Under 25 years) constitutes a significant portion of social media users. However, their preferred forms of online interaction may be different from other demographics.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>5. Social media marketing can prove to be a beneficial tool for bringing more visitors to your company website. If you provide high-quality and relevant content to your audience and potential customers, you can generate more organic traffic without paying extra for digital ads.&nbsp;</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>6. Since social networking sites open doors for personalized interactions, tasks like solving queries and getting feedback tend to become untroublesome. You can provide enhanced customer support and improve service quality, leading to meaningful customer relationships and brand loyalty.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>7. Your social media footprint tells a lot about your brand to a potential customer. And if utilized properly, your social media engagements can bring in word-of-mouth publicity. Compelling content can get you additional &lsquo;shares,&rsquo; while positive customer experiences can secure personal recommendations about your business, product, or service to friends and family.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>8. Social media posts can be immensely helpful in sending your targets directly to your blog or website. Besides this direct referral method, SMM can also have an indirect impact on your site&rsquo;s SEO. Internet search engines like Google and Bing often show social media posts with high engagements in search results, assisting in link building.&nbsp;</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>9. It is now possible for brands to observe and monitor the conversations and interactions of their target audience and customize their social media content strategy accordingly. This is known as &lsquo;social listening.&rsquo; Businesses can use social media to identify the language and tone of their targets, notice the trends they are following, and try to get an idea about what kind of content interests them and gets them talking. After this, creating a strategy to cater to these points. The timing of a post is also crucial in the online world, especially when you are posting about topical issues to create a conversation around your brand.&nbsp;</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>10. Finally, social media marketing helps you achieve your business goals by attracting new customers, retaining existing customers, increasing sales, and earning profit.</strong></p>', 'upload/services/1756268413607214.jpg', 1, '2022-11-07 11:53:30', '2023-01-28 20:14:40', 112),
(44, 12, 30, 24, 'Email marketing', 'upload/services/1748841634404790.jpg', 'Email marketing', 'Email is one of the most powerful marketing tools at your disposal. It can drive engagement, build relationships, and deliver a higher ROI than every other type of marketing campaign.\r\nSuccess with your email strategy starts with finding the right email marketing service. Whether you’re starting a new list from scratch or just need an easier way to reach your audience, this guide has a solution for you.', '<h1 style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"font-size:24pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong><span style=\"font-size:15.0pt\"><span style=\"color:#2c3e50\">Email marketing</span></span></strong></strong></span></span></h1>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Email marketing is one of the most cost-effective marketing strategies for small businesses. According to the Direct Marketing Association, email marketing on average sees a 4300 percent return on investment (ROI) for businesses in the United States.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>This is because email marketing is easy to manage, gives you full control, and allows you to establish a direct contact with your customers.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Not convinced on email marketing? See these 6 reasons why building an email list is so important today.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>It&rsquo;s important to understand that a lot of your success with email marketing depends entirely on the email marketing software you choose because they are responsible for making sure that your emails actually get delivered.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>If you aren&rsquo;t careful, then you will end up paying a lot more money for fewer marketing features and terrible email deliverability rates (which causes you to lose even more money).</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<h2 style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:18pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong>What to Look for in a Good Email Marketing Tool?</strong></strong></span></span></h2>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>A good email marketing service should enable you to create highly engaging email newsletters with an easy user interface (ideally drag-and-drop editor).</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>You should be able to easily send bulk emails that are actually personalized and targeted without a lot of work. This is also known as marketing automation.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Aside from that, your email marketing service must make it easy to manage your contact list, segment users into groups, and track the performance of your email marketing campaigns.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Most importantly, a good email service provider ensures that your email campaigns do not end up in the spam folder.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Having said that, let&rsquo;s take a look at some of the most popular email marketing service providers and how they stack up against each other.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:15.0pt\">1. Constant Contact</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Constant Contact is one of the largest and fastest growing email marketing services in the world. It is also the most easy to use and beginner friendly email marketing service.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>You can easily manage your email lists, contacts, email templates, marketing calendar, and more.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Each account gives you access to unlimited emails, easy tracking and reporting, built-in social media sharing tools, free image library, list segmentation, Facebook ads integration, and a powerful eCommerce integration for Shopify stores.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:15.0pt\">2. SendinBlue</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>SendinBlue is a complete SMS and email marketing software for businesses. They are one of the fastest growing email marketing platforms in Europe.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>It is an extremely easy to use platform with excellent tools to create beautiful and highly engaging emails. Their simple drag and drop email editor is perfect for beginners with no experience in email marketing.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>SendinBlue includes user-friendly marketing automation tools that allow you to send transactional emails, create workflows for automatic follow-up emails, and segment users. It can also select the best time to send bulk emails using their AI algorithms to ensure the best email deliverability.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>SendinBlue offers a completely free email marketing plan with unlimited contacts. Their free plan lets you send up to 300 emails per day, but all your emails will have their branding.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Their paid plans start from $25 per month for Lite. You can also include SMS to your account, but the pricing will vary based on your sending requirements.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:15.0pt\">3. HubSpot</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>HubSpot is one of the most well-known softwares in the CRM and email marketing space.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Their email marketing service is free to start, and it comes with a lot of powerful automation features designed to grow your business.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>You can use their easy drag-and-drop email builder and a selection of templates to create a completely custom newsletter that matches your brand&rsquo;s personality and colors.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Because of the native integration with the HubSpot CRM, you can personalize your emails for each subscriber based on things like device type, country, list membership, or any other custom information you might have on the individual subscriber.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:15.0pt\">4. Omnisend</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Omnisend is a powerful SMS &amp; email marketing service for eCommerce businesses who are looking for an omni-channel marketing automation solution.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>They offer one of the most generous free email marketing plans because it includes all the powerful features like pre-built automation workflows, subscriber segmentation, A/B testing, performance reports, and even SMS + web push notification.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Most other free email marketing plans are restricted, but Omnisend is confident in their value proposition, so they offer most everything in their free plan. As your contact list grows, you will need to upgrade to their paid plans.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Omnisend seamlessly integrates with all the popular website builder and eCommerce platforms like WooCommerce, Shopify, BigCommerce, and more. They also have integration with hundreds of other business tools like live chat software, help desk service, and more.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:15.0pt\">5. Drip</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Drip is a powerful enterprise email marketing platform for eCommerce, bloggers, and digital marketers. They offer a wide range of tools to make marketing automation, sales funnels, and personalization easy.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Their email software offer seamless integration for all popular website builders including WordPress and WooCommerce. This allows you to easily add pop-ups / opt-in sign up forms to your website and capture more leads.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:15.0pt\">6. AWeber</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>AWeber is one of oldest and most popular email marketing service providers in the world. They offer a wide-range of tools for small and medium sized businesses to manage their email marketing.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Getting started with AWeber is easy. It connects seamlessly to most platforms including WordPress. For detailed instructions, see our ultimate guide on how to connect AWeber to WordPress.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:15.0pt\">7. Moosend</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Moosend is an affordable email marketing service for small businesses. It comes with a suite of powerful marketing automation features, email list building tools, landing pages, and more.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>You can quickly create an email newsletter and customize the email design to match your brand within minutes by either choosing from their dozens of pre-made email templates or by creating a completely custom template.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>The nice part about Moosend is that they offer marketing automation features to all plans. You can use their automation workflow designer to offer a personalized subscriber journey for your newsletter subscribers.&nbsp;</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>', 'upload/services/1756268366937756.jpg', 1, '2022-11-07 12:49:10', '2023-01-31 18:01:02', 106);
INSERT INTO `services` (`id`, `category_id`, `subcategory_id`, `childcategory_id`, `content_slide_title`, `breadcrumb`, `content_title`, `content_descrip`, `long_descrip`, `thamble`, `status`, `created_at`, `updated_at`, `views`) VALUES
(45, 12, 31, 41, 'WordPress Website Development', 'upload/services/1750019498220823.png', 'WordPress Website Development', 'WordPress is a Content Material Administration Device (CMS) that allows you to create an internet site or weblog from scratch, or to enhance a present website. It’s a free and open-source platform that is maintained by means of a giant neighborhood of volunteer builders and supported with the aid of a number of for-profit companies. WordPress is used by tens of millions of humans round the world, along with many massive organizations, such as The Guardian, Forbes, and The New York Times.', '<p dir=\"ltr\"><strong>You can use WordPress to create any type of website you want: a private blog or website, a commercial enterprise website, an on-line store, or even a community of websites. All you want to get is a domain identity (which can be sold via WordPress.com or a separate registrar) and internet web hosting (which can be furnished by means of WordPress.com or a third-party provider). Once you have these two things, you can install WordPress and begin the usage of it to create your site.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>WordPress itself is free &mdash; you simply need to pay for internet hosting and an area name. But if you choose to create a professional-looking website, you will possibly want to make investments in some extra software programs and services, such as a top class WordPress theme and plugins to add greater aspects to your site. These charges can add up, however they are commonly very affordable.&nbsp;</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>If you&rsquo;re no longer positive whether or not WordPress is the proper platform for you, we&rsquo;ve put collectively a listing of its essential blessings and disadvantages:</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>&nbsp;</strong></p>\r\n\r\n<h2 dir=\"ltr\" style=\"text-align:center\"><span style=\"color:#8e44ad\"><strong>Advantages of WordPress:</strong></span></h2>\r\n\r\n<ul>\r\n	<li><strong>You can use it to create any type of website</strong></li>\r\n	<li><strong>It&rsquo;s free and open-source</strong></li>\r\n	<li><strong>It&rsquo;s handy to use</strong></li>\r\n	<li><strong>It&rsquo;s bendy and extensible</strong></li>\r\n	<li><strong>It has a massive neighborhood of users</strong></li>\r\n	<li><strong>It&rsquo;s well-supported</strong></li>\r\n</ul>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<h2 dir=\"ltr\" style=\"text-align:center\"><strong>Disadvantages of WordPress:</strong></h2>\r\n\r\n<ul dir=\"ltr\">\r\n	<li><strong>You want some technical understanding to set it up correctly</strong></li>\r\n	<li><strong>It&rsquo;s no longer as impenetrable as some different platforms</strong></li>\r\n	<li><strong>It can be sluggish if no longer configured properly</strong></li>\r\n	<li><strong>If you&rsquo;re nonetheless now not positive if WordPress is the proper platform for you &ndash; weigh the professionals &amp; cons yourself &ndash; we hope this article helped! If you have any additional questions about WordPress net improvement &ndash; feel free to reach out to us.</strong></li>\r\n</ul>\r\n\r\n<p dir=\"ltr\"><strong>&nbsp;</strong></p>\r\n\r\n<h2 dir=\"ltr\" style=\"text-align:center\"><span style=\"color:#2c3e50\"><strong>What Is WordPress Web Development?</strong></span></h2>\r\n\r\n<p dir=\"ltr\"><strong>&nbsp;WordPress net improvement refers to the technique of developing web sites the use of the WordPress content material administration device (CMS). WordPress is used through tens of millions of human beings round the world and allows customers to create some thing from easy non-public blogs to complicated enterprise websites.&nbsp;</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>While everyone can use WordPress to create a fundamental website, expert WordPress builders are capable to harness the authentic energy of the CMS through utilising its many aspects and extensions.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>An expert WordPress developer will have a journey in designing and constructing customized subject matters and plugins, as nicely as integrating third-party offerings into a WordPress site.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>If you&rsquo;re searching to create a new internet site or enhance a present one, then working with an expert WordPress developer is the satisfactory way to make certain that your undertaking is successful.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>&nbsp;</strong></p>\r\n\r\n<h2 dir=\"ltr\" style=\"text-align:center\"><span style=\"color:#e74c3c\"><strong>Conclusion:</strong></span></h2>\r\n\r\n<p><strong>Whether you&rsquo;re searching to create an easy private weblog or a complicated commercial enterprise website, working with an expert WordPress developer is the exceptional way to make sure that your venture is successful.</strong></p>', 'upload/services/1756268323575060.jpg', 1, '2022-11-20 12:50:48', '2023-01-28 20:21:13', 96),
(46, 12, 31, 43, 'Enterprise Web Design and Development', 'upload/services/1750540496336484.png', 'Enterprise Web Design and Development', 'Enterprise websites can vary greatly on the scope and services offered by the business. With many different moving parts, it is important for websites to be clear and concise.', '<p dir=\"ltr\"><strong>Enterprise web development is the process of developing a website or app for enterprise-level businesses. These websites can be designed for commercial use or to manage internal company operations.&nbsp;</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>The primary function of enterprise web development is to generate greater revenue figures for a particular company.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>Enterprise websites can vary greatly on the scope and services offered by the business. With many different moving parts, it is important for websites to be clear and concise.&nbsp;</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>By internally producing your technology, you are able to create a dynamic site that can meet all of the needs of your company. This website can help boost sales and serve as a hub for lead generation efforts.&nbsp;</strong></p>', 'upload/services/1756268266967452.jpg', 1, '2022-11-26 06:51:51', '2023-01-28 20:12:19', 118),
(47, 12, 31, 42, 'E-Commerce Web Design and Development', 'upload/services/1750554472309787.png', 'E-Commerce Web Design and Development', 'Ecommerce web development is the process of building and designing a site where users can buy your products directly through an online store. Having an ecommerce website gives people the chance to make their purchases through their phone or computer instead of visiting a physical store.', '<p dir=\"ltr\"><strong>Ecommerce web development is the process of building and designing an ecommerce website where consumers can purchase products online.</strong></p>\r\n\r\n<p><strong>Because ecommerce websites are so popular with consumers, developing an ecommerce website can help you generate more conversions and revenue for your business.</strong></p>', 'upload/services/1756268142269485.jpg', 1, '2022-11-26 10:33:59', '2023-01-28 20:20:13', 104),
(48, 12, 31, 40, 'Web Application Development', 'upload/services/1750554797621073.png', 'Web Application Development', 'Web application development is the creation of application programs that reside on remote servers and are delivered to the user’s device over the Internet.', '<p dir=\"ltr\"><strong>Web application development is the creation of application programs that reside on remote servers and are delivered to the user&rsquo;s device over the Internet. A web application (web app) does not need to be downloaded and is instead accessed through a network. An end user can access a web application through a web browser such as Google Chrome, Safari, or Mozilla Firefox. A majority of web applications can be written in JavaScript, Cascading Style Sheets (CSS), and HTML5.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>Web application development will typically have a short development life-cycle lead by a small development team. Front-end development for web applications is accomplished through client-side programming. Client refers to a computer application such as a web browser. Client-side programming will typically utilize HTML, CSS and JavaScript. HTML programming will instruct a browser how to display the on-screen content of web pages, while CSS keeps displayed information in the correct format. JavaScript will run JavaScript code on a web page, making some of the content interactive.&nbsp;</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>Server-side programming powers the client-side programming and is used to create the scripts that web applications use. Scripts can be written in multiple scripting languages such as Ruby, Java and Python. Server-side scripting will create a custom interface for the end-user and will hide the source code that makes up the interface.</strong></p>\r\n\r\n<p dir=\"ltr\"><strong>A database such as MySQL or MongoDB can be used to store data in web application development.</strong></p>', 'upload/services/1756268007659876.jpg', 1, '2022-11-26 10:39:10', '2023-01-31 17:57:00', 127);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `phone`, `email`, `address`, `facebook`, `instagram`, `pinterest`, `googleplus`, `linkedin`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/1756081696899202.png', '1', 'toriqul@gmail.com', 'farmegate', 'facebook', 'instagram', 'dfgdgfd', 'googleplus', 'linkedin', 'twitter', NULL, '2023-01-26 18:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slide_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slide_title`, `slide_photo`, `slide_description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'slide title one', 'upload/slide/1756614302947363.jpg', '<p>slide description one</p>', 1, '2023-02-01 15:52:25', NULL),
(4, 'slide title two', 'upload/slide/1756614700549994.jpg', '<p>slide description two</p>', 1, '2023-02-01 15:58:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(27, 12, 'Creative Development', 'creative-development', '2022-10-02 00:57:10', NULL),
(29, 12, 'Software Development', 'software-development', '2022-10-02 00:57:46', NULL),
(30, 12, 'Digital Marketing', 'digital-marketing', '2022-10-02 00:58:01', NULL),
(31, 12, 'Web Design and Development', 'web-design-and-development', '2022-11-20 11:53:27', NULL),
(32, 16, 'fish one', 'fish-one', '2023-02-02 21:30:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `terms_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `terms_title`, `t_description`, `created_at`, `updated_at`) VALUES
(1, 'terms title', '<p>ddfgjf</p>', '2022-10-05 23:27:16', '2022-10-05 23:27:16'),
(2, 'Test 2', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-10-05 23:29:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'shahin reza', 'user@gmail.com', NULL, '$2y$10$Gd7l5q5MNH.98RYsxV5XX.YKCnETn4AeD3//nrnbXvMw6t9U6vKZe', NULL, '2022-06-05 13:32:41', '2022-06-05 13:32:41');

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
-- Indexes for table `childcategories`
--
ALTER TABLE `childcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
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
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `childcategories`
--
ALTER TABLE `childcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
