-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2021 at 02:51 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `user_grp_name` varchar(255) DEFAULT NULL,
  `user_grp_role` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `user_grp_name`, `user_grp_role`, `status`) VALUES
(1, 'jhvj khbhjvb', NULL, NULL),
(2, 'Test', 'Admin', 'Inactive'),
(3, 'Customer', 'Customer', 'Active'),
(4, 'Global', 'Global', 'Active'),
(5, 'Admin', 'Admin', 'Active'),
(151, '22', '33', 'Inactive'),
(152, '22', '33', 'Inactive'),
(153, '222', '323', 'Inactive'),
(154, '222', '323', 'Inactive'),
(155, 'Hello', NULL, NULL),
(156, 'Hello', NULL, NULL),
(157, 'Hello2', NULL, NULL),
(158, 'Hello2', NULL, NULL),
(159, 'Agents', 'Agents', 'Active'),
(160, 'Student', 'Student', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_category`
--

CREATE TABLE `sidebar_category` (
  `id` int(11) NOT NULL,
  `sidebar_category_name` varchar(255) DEFAULT NULL,
  `sidebar_category_type` varchar(255) DEFAULT NULL,
  `sidebar_category_icon` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sidebar_category`
--

INSERT INTO `sidebar_category` (`id`, `sidebar_category_name`, `sidebar_category_type`, `sidebar_category_icon`, `status`) VALUES
(1, 'Users', 'Admin', 'nil', 'Inactive'),
(2, 'Admin Management', 'Admin', 'kjb', 'Active'),
(3, 'kbkb', 'Admin', 'kjb', 'Inactive'),
(5, 'Components', 'Admin', 'zmdi zmdi-view-dashboard', 'Inactive'),
(6, 'Test Bar', 'Global', '', 'Inactive'),
(7, 'Users22', 'Customer', '', 'Inactive'),
(8, 'Ads', 'Global', '', 'Inactive'),
(9, 'Websites', 'Admin', '', 'Inactive'),
(10, 'Design Library', 'Admin', '', 'Inactive'),
(11, 'Reports', 'Global', '', 'Inactive'),
(12, 'Admissions', 'Admin', '', 'Inactive'),
(13, 'Operations', 'Admin', '', 'Inactive'),
(14, 'Manage My Website', 'Customer', '', 'Inactive'),
(15, 'My Enquiries', 'Customer', '', 'Inactive'),
(16, 'Exam Management', 'Customer', '', 'Inactive'),
(17, 'Order Management', 'Customer', '', 'Inactive'),
(18, 'u8hgi8yb', 'Admin', '', 'Inactive'),
(19, 'My Papers', 'Student', '', 'Inactive'),
(20, 'My Account', 'Student', '', 'Inactive'),
(21, 'My Profile', 'Student', '', 'Inactive'),
(22, 'Help', 'Student', '', 'Inactive'),
(23, 'Books-Management', 'Admin', '', 'Inactive'),
(24, 'Transactions', 'Admin', '', 'Inactive'),
(25, 'Memberships', 'Admin', '', 'Inactive'),
(26, 'Pages', 'Admin', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_menu`
--

CREATE TABLE `sidebar_menu` (
  `id` int(11) NOT NULL,
  `sidebar_menu_name` varchar(255) DEFAULT NULL,
  `sidebar_menu_type` varchar(255) DEFAULT NULL,
  `sidebar_menu_master` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sidebar_menu`
--

INSERT INTO `sidebar_menu` (`id`, `sidebar_menu_name`, `sidebar_menu_type`, `sidebar_menu_master`, `status`) VALUES
(1, 'Projects', 'Admin', 'Components', 'Inactive'),
(2, 'Users', 'Admin', 'Site Management', 'Inactive'),
(3, 'Groups', 'Admin', 'Admin Management', 'Active'),
(4, 'Users', 'Admin', 'Admin Management', 'Active'),
(5, 'Sidebar-Category', 'Admin', 'Admin Management', 'Active'),
(6, 'Menu', 'Admin', 'Admin Management', 'Active'),
(7, 'Projects', 'Admin', 'Websites', 'Inactive'),
(8, 'Table', 'Global', 'Test Bar', 'Inactive'),
(9, 'Table-Show', 'Global', 'Test Bar', 'Inactive'),
(10, 'Ad-Management', 'Global', 'Ads', 'Inactive'),
(11, 'Themes', 'Admin', 'Design Library', 'Inactive'),
(12, 'Create-Dummy', 'Admin', 'Design Library', 'Inactive'),
(13, 'Websites', 'Admin', 'Websites', 'Inactive'),
(14, 'View-Dummy', 'Admin', 'Design Library', 'Inactive'),
(15, 'Student admission', 'Admin', 'Reports', 'Inactive'),
(16, 'Enquiries', 'Global', 'Operations', 'Inactive'),
(17, 'Products', 'Admin', 'Operations', 'Inactive'),
(18, 'Traffic-Sources', 'Admin', 'Operations', 'Inactive'),
(19, 'Settings', 'Customer', 'Manage My Website', 'Inactive'),
(20, 'Logo', 'Customer', 'Manage My Website', 'Inactive'),
(21, 'Menus', 'Customer', 'Manage My Website', 'Inactive'),
(22, 'Pages', 'Customer', 'Manage My Website', 'Inactive'),
(23, 'Navigation', 'Customer', 'Manage My Website', 'Inactive'),
(24, 'Sliders', 'Customer', 'Manage My Website', 'Inactive'),
(25, 'Products-Services', 'Customer', 'Manage My Website', 'Inactive'),
(26, 'Testimonials', 'Customer', 'Manage My Website', 'Inactive'),
(27, 'Blogs', 'Customer', 'Manage My Website', 'Inactive'),
(28, 'Inner-Background', 'Customer', 'Manage My Website', 'Inactive'),
(29, 'Domains', 'Admin', 'Websites', 'Inactive'),
(30, 'Photo-Gallery', 'Customer', 'Manage My Website', 'Inactive'),
(31, 'Video-Gallery', 'Customer', 'Manage My Website', 'Inactive'),
(32, 'All-Enquiries', 'Customer', 'My Enquiries', 'Inactive'),
(33, 'Featured-Icons', 'Customer', 'Manage My Website', 'Inactive'),
(34, 'Paper-Categories', 'Customer', 'Exam Management', 'Inactive'),
(36, 'Paper-Sub-Categories', 'Customer', 'Exam Management', 'Inactive'),
(37, 'Papers', 'Customer', 'Exam Management', 'Inactive'),
(38, 'HomePage-Advertisement', 'Customer', 'Exam Management', 'Inactive'),
(39, 'Minimum-Order-Settings', 'Customer', 'Exam Management', 'Inactive'),
(40, 'Payment-Gateway', 'Customer', 'Exam Management', 'Inactive'),
(41, 'All-Orders', 'Customer', 'Order Management', 'Inactive'),
(42, 'Homepage-Banner', 'Customer', 'Manage My Website', 'Inactive'),
(43, 'Advertisement', 'Admin', 'u8hgi8yb', 'Inactive'),
(44, 'Purchased-Papers', 'Student', 'My Papers', 'Inactive'),
(45, 'Dashboard', 'Student', '', 'Active'),
(46, 'Welcome', 'Admin', '', 'Active'),
(47, 'Books-Inventory', 'Admin', 'Books-Management', 'Active'),
(48, 'Books-Categories', 'Admin', 'Books-Management', 'Active'),
(49, 'All-Members', 'Admin', 'Memberships', 'Active'),
(50, 'Sessions', 'Admin', 'Memberships', 'Active'),
(51, 'Classes', 'Admin', 'Memberships', 'Active'),
(52, 'Semesters', 'Admin', 'Memberships', 'Active'),
(53, 'Streams', 'Admin', 'Memberships', 'Active'),
(54, 'Majors', 'Admin', 'Memberships', 'Active'),
(55, 'Issue-New-Book', 'Admin', 'Transactions', 'Active'),
(56, 'Receive-Book', 'Admin', 'Transactions', 'Active'),
(57, 'Syncronise-Members', 'Admin', 'Memberships', 'Active'),
(58, 'Informative-Pages', 'Admin', 'Pages', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_role` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_phone`, `user_password`, `user_role`, `status`) VALUES
(10, 'Charu Saikia', 'paban@indiawebdesigns.in', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Active'),
(20, 'Titon Das', 'vistaeducare@gmail.com', 'exam', '654816f85dfe2115674e7115c7d1ea51', 'Customer', 'Active'),
(21, 'Sigma Point', 'info@sigmapoint.in', '7575947781', '7575947781', 'Customer', 'Active'),
(22, '9163803377', 'sales@thinkbizzmarcom.com', '9163803377', '9163803377', 'Customer', 'Active'),
(23, 'student', 'student', 'student', 'cd73502828457d15655bbd7a63fb0bc8', 'Student', 'Active'),
(26, 'Paban', 'zzubizubi@gmail.com', '7002484119', 'a61d74459bf62853985060093d796b4d', 'Student', 'Active'),
(27, 'charulata saikia', 'charuxaikia1991@gmail.com', '9085879091', 'be4f80d18d3a08e0f457439126582734', 'Student', 'Active'),
(28, 'Charu', '111', '111', '698d51a19d8a121ce581499d7b701668', 'Student', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` int(11) NOT NULL,
  `website_type` varchar(255) DEFAULT NULL,
  `website_name` varchar(255) DEFAULT NULL,
  `website_title` varchar(255) DEFAULT NULL,
  `website_logo` varchar(255) DEFAULT NULL,
  `website_phone` varchar(255) DEFAULT NULL,
  `website_email` varchar(255) DEFAULT NULL,
  `website_address` varchar(255) DEFAULT NULL,
  `website_facebook` varchar(255) DEFAULT NULL,
  `website_instagram` varchar(255) DEFAULT NULL,
  `website_twitter` varchar(255) DEFAULT NULL,
  `website_whatsapp` varchar(255) DEFAULT NULL,
  `website_slider1` varchar(255) DEFAULT NULL,
  `website_slider2` varchar(255) DEFAULT NULL,
  `website_slider3` varchar(255) DEFAULT NULL,
  `website_hp_short_desc_title_1` longtext DEFAULT NULL,
  `website_hp_short_desc_title_2` longtext DEFAULT NULL,
  `website_hp_short_desc_title_3` longtext DEFAULT NULL,
  `website_hp_short_desc_icon_1` longtext DEFAULT NULL,
  `website_hp_short_desc_icon_2` longtext DEFAULT NULL,
  `website_hp_short_desc_icon_3` longtext DEFAULT NULL,
  `website_hp_short_desc_desc_1` longtext DEFAULT NULL,
  `website_hp_short_desc_desc_2` longtext DEFAULT NULL,
  `website_hp_short_desc_desc_3` longtext DEFAULT NULL,
  `website_aboutus_title` longtext DEFAULT NULL,
  `website_aboutus_desc` longtext DEFAULT NULL,
  `website_aboutus_image` longtext DEFAULT NULL,
  `website_hp_ad` varchar(255) DEFAULT NULL,
  `website_client_1` varchar(255) DEFAULT NULL,
  `website_client_2` varchar(255) DEFAULT NULL,
  `website_client_3` varchar(255) DEFAULT NULL,
  `website_client_4` varchar(255) DEFAULT NULL,
  `website_client_5` varchar(255) DEFAULT NULL,
  `website_client_6` varchar(255) DEFAULT NULL,
  `website_client_7` varchar(255) DEFAULT NULL,
  `website_client_8` varchar(255) DEFAULT NULL,
  `website_client_9` varchar(255) DEFAULT NULL,
  `website_client_10` varchar(255) DEFAULT NULL,
  `website_test_photo_1` varchar(255) DEFAULT NULL,
  `website_test_photo_2` varchar(255) DEFAULT NULL,
  `website_test_photo_3` varchar(255) DEFAULT NULL,
  `website_test_photo_4` varchar(255) DEFAULT NULL,
  `website_test_photo_5` varchar(255) DEFAULT NULL,
  `website_test_name_1` varchar(255) DEFAULT NULL,
  `website_test_name_2` varchar(255) DEFAULT NULL,
  `website_test_name_3` varchar(255) DEFAULT NULL,
  `website_test_name_4` varchar(255) DEFAULT NULL,
  `website_test_name_5` varchar(255) DEFAULT NULL,
  `website_test_company_1` varchar(255) DEFAULT NULL,
  `website_test_company_2` varchar(255) DEFAULT NULL,
  `website_test_company_3` varchar(255) DEFAULT NULL,
  `website_test_company_4` varchar(255) DEFAULT NULL,
  `website_test_company_5` varchar(255) DEFAULT NULL,
  `website_test_description_1` varchar(255) DEFAULT NULL,
  `website_test_description_2` varchar(255) DEFAULT NULL,
  `website_test_description_3` varchar(255) DEFAULT NULL,
  `website_test_description_4` varchar(255) DEFAULT NULL,
  `website_test_description_5` varchar(255) DEFAULT NULL,
  `website_project_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `website_theme` varchar(255) DEFAULT NULL,
  `website_map` longtext DEFAULT NULL,
  `website_service_name_1` longtext DEFAULT NULL,
  `website_service_name_2` longtext DEFAULT NULL,
  `website_service_name_3` longtext DEFAULT NULL,
  `website_service_name_4` longtext DEFAULT NULL,
  `website_service_name_5` longtext DEFAULT NULL,
  `website_service_name_6` longtext DEFAULT NULL,
  `website_service_image_1` longtext DEFAULT NULL,
  `website_service_image_2` longtext DEFAULT NULL,
  `website_service_image_3` longtext DEFAULT NULL,
  `website_service_image_4` longtext DEFAULT NULL,
  `website_service_image_5` longtext DEFAULT NULL,
  `website_service_image_6` longtext DEFAULT NULL,
  `website_service_desc_1` longtext DEFAULT NULL,
  `website_service_desc_2` longtext DEFAULT NULL,
  `website_service_desc_3` longtext DEFAULT NULL,
  `website_service_desc_4` longtext DEFAULT NULL,
  `website_service_desc_5` longtext DEFAULT NULL,
  `website_service_desc_6` longtext DEFAULT NULL,
  `website_registration` date DEFAULT NULL,
  `website_expiry` date DEFAULT NULL,
  `website_owner` int(11) DEFAULT NULL,
  `website_min_order` int(11) DEFAULT NULL,
  `website_min_order_fee` int(11) DEFAULT NULL,
  `website_key` varchar(255) DEFAULT NULL,
  `website_salt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `website_type`, `website_name`, `website_title`, `website_logo`, `website_phone`, `website_email`, `website_address`, `website_facebook`, `website_instagram`, `website_twitter`, `website_whatsapp`, `website_slider1`, `website_slider2`, `website_slider3`, `website_hp_short_desc_title_1`, `website_hp_short_desc_title_2`, `website_hp_short_desc_title_3`, `website_hp_short_desc_icon_1`, `website_hp_short_desc_icon_2`, `website_hp_short_desc_icon_3`, `website_hp_short_desc_desc_1`, `website_hp_short_desc_desc_2`, `website_hp_short_desc_desc_3`, `website_aboutus_title`, `website_aboutus_desc`, `website_aboutus_image`, `website_hp_ad`, `website_client_1`, `website_client_2`, `website_client_3`, `website_client_4`, `website_client_5`, `website_client_6`, `website_client_7`, `website_client_8`, `website_client_9`, `website_client_10`, `website_test_photo_1`, `website_test_photo_2`, `website_test_photo_3`, `website_test_photo_4`, `website_test_photo_5`, `website_test_name_1`, `website_test_name_2`, `website_test_name_3`, `website_test_name_4`, `website_test_name_5`, `website_test_company_1`, `website_test_company_2`, `website_test_company_3`, `website_test_company_4`, `website_test_company_5`, `website_test_description_1`, `website_test_description_2`, `website_test_description_3`, `website_test_description_4`, `website_test_description_5`, `website_project_id`, `status`, `website_theme`, `website_map`, `website_service_name_1`, `website_service_name_2`, `website_service_name_3`, `website_service_name_4`, `website_service_name_5`, `website_service_name_6`, `website_service_image_1`, `website_service_image_2`, `website_service_image_3`, `website_service_image_4`, `website_service_image_5`, `website_service_image_6`, `website_service_desc_1`, `website_service_desc_2`, `website_service_desc_3`, `website_service_desc_4`, `website_service_desc_5`, `website_service_desc_6`, `website_registration`, `website_expiry`, `website_owner`, `website_min_order`, `website_min_order_fee`, `website_key`, `website_salt`) VALUES
(124, 'Elearning', 'Vista Educare', 'Vista Educare', '44a7ac78b59432730799c617772d0802.png', '+917637001444', 'support@indiawebdesigns.in', 'Ganeshguri, Guwahati, Assam, Pin-781006, India', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.twitter.com', '7637001555', '84bf2d43e0194257392134b812207aa8.png', 'd6f17cf26df58ce730abbfaf833c0aed.png', '710089463a54e1e95fbd68b33bded23b.png', '+200 courses', 'Expert teachers', 'Experienced Guidance', 'fa fa-graduation-cap', 'fa fa-trophy', 'fa fa-bullseye', 'Fly to distant places without paying a hefty sum for the ticket. Contact Asian Holidays Expedition for getting discounted tickets for your every flight. ', 'Book your train tickets in any part of India with us to get guaranteed discounts.', 'Booking a hotel in India and overseas can be a tough job. Allow Asian Holidays Expedition to crack the hard nut for you.', 'About Us', 'We are one of the top tours and travels companies in India who offer all types of services related to tours and travels under one roof. We follow a fair and transparent pricing policy as well as maintain high quality support to our clients. ', '016dcea84bca107b327101abcb519617.png', 'd609fe6c779d57a2abf73dc085204759.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '6fc3a96ef66162cad4a76f15a54c5a48.jpg', '6fc3a96ef66162cad4a76f15a54c5a48.jpg', '6fc3a96ef66162cad4a76f15a54c5a48.jpg', '6fc3a96ef66162cad4a76f15a54c5a48.jpg', '6fc3a96ef66162cad4a76f15a54c5a48.jpg', 'Person 1', 'Person 2', 'Person 3', 'Person 4', 'Person 5', 'India Web Designs', 'India Web Designs 2', 'India Web Designs 3', 'India Web Designs 4', 'India Web Designs 5', '1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae', '2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae', '3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae', '4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae', '5 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae', 42, 'Active', 'elearning', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3581.4214857815746!2d91.79438156502894!3d26.150399333461827!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5b1557f1e58f%3A0xbd4ef132516ec60!2sIndia%20Web%20Designs!5e0!3m2!1sen!2sin!4v1583836568387!5m2!1sen!2sin', 'Flight Ticket Booking', '', 'Train Ticket Booking', 'Hotel Booking', 'Travel Insurance Services', 'Passport & Visa Services', '9db6c863fa51dcf4839d039be87ef3a6.jpg', 'b1e48dd6d0cca7e497c15eabc0b7970b.jpg', '7b293b8a1c79e26f521124b28b0c0e79.jpg', '148030b9ff066cef34032dc1f6349590.jpg', 'bfccf248c2b9ac8697629be8fb61cc8c.jpg', 'e432dfea6b71e460cfe59883ec7bedf4.jpg', '1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '5 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '6 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '2020-04-05', '2099-04-05', 20, NULL, NULL, NULL, NULL),
(125, 'Elearning', 'Sigma Point', 'Sigma Point, A Premier Coaching Institute', '02cd7c48644c311e2e62488bbaf43d06.jpg', '+917575947781', 'info@sigmapoint.in', 'Baihata - Chariali - Goreswar - Deochunga Rd, Niz-Madartola, Assam 781381', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.twitter.com', '7575947781', '84bf2d43e0194257392134b812207aa8.png', 'd6f17cf26df58ce730abbfaf833c0aed.png', '710089463a54e1e95fbd68b33bded23b.png', '+200 courses', 'Expert teachers', 'Experienced Guidance', 'fa fa-graduation-cap', 'fa fa-trophy', 'fa fa-bullseye', 'Fly to distant places without paying a hefty sum for the ticket. Contact Asian Holidays Expedition for getting discounted tickets for your every flight. ', 'Book your train tickets in any part of India with us to get guaranteed discounts.', 'Booking a hotel in India and overseas can be a tough job. Allow Asian Holidays Expedition to crack the hard nut for you.', 'About Us', 'We are one of the top tours and travels companies in India who offer all types of services related to tours and travels under one roof. We follow a fair and transparent pricing policy as well as maintain high quality support to our clients. ', '016dcea84bca107b327101abcb519617.png', 'c8a4727aa63fd79608e831aeee32c52a.jpg', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '6fc3a96ef66162cad4a76f15a54c5a48.jpg', '6fc3a96ef66162cad4a76f15a54c5a48.jpg', '6fc3a96ef66162cad4a76f15a54c5a48.jpg', '6fc3a96ef66162cad4a76f15a54c5a48.jpg', '6fc3a96ef66162cad4a76f15a54c5a48.jpg', 'Person 1', 'Person 2', 'Person 3', 'Person 4', 'Person 5', 'India Web Designs', 'India Web Designs 2', 'India Web Designs 3', 'India Web Designs 4', 'India Web Designs 5', '1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae', '2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae', '3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae', '4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae', '5 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae', 43, 'Inactive', 'elearning', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14301.134936309958!2d91.7292949!3d26.3496834!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9926579c31091c18!2sSigma%20Point%2C%20A%20Premier%20Coaching%20Institute!5e0!3m2!1sen!2sin!4v1591338866327!5m2!1sen!2sin', 'Flight Ticket Booking', '', 'Train Ticket Booking', 'Hotel Booking', 'Travel Insurance Services', 'Passport & Visa Services', '9db6c863fa51dcf4839d039be87ef3a6.jpg', 'b1e48dd6d0cca7e497c15eabc0b7970b.jpg', '7b293b8a1c79e26f521124b28b0c0e79.jpg', '148030b9ff066cef34032dc1f6349590.jpg', 'bfccf248c2b9ac8697629be8fb61cc8c.jpg', 'e432dfea6b71e460cfe59883ec7bedf4.jpg', '1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '5 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '6 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '2020-06-05', '2021-06-05', 21, NULL, NULL, NULL, NULL),
(126, 'Elearning', 'ThinkBizz Marcom', 'ThinkBizz Marcom', '5b09bba281d4e5259866e7ab7f41c133.png', '+917002160093', 'support@indiawebdesigns.in', 'L P School, Hengrabari Rd, Bortila, Lichubagan, Heng', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.twitter.com', '7002484119', '84bf2d43e0194257392134b812207aa8.png', 'd6f17cf26df58ce730abbfaf833c0aed.png', '710089463a54e1e95fbd68b33bded23b.png', 'Flight Booking', 'Train Booking', 'Hotel booking', 'fa fa-fighter-jet', 'fa fa-train', 'fa fa-hotel', 'Fly to distant places without paying a hefty sum for the ticket. Contact Asian Holidays Expedition for getting discounted tickets for your every flight. ', 'Book your train tickets in any part of India with us to get guaranteed discounts.', 'Booking a hotel in India and overseas can be a tough job. Allow Asian Holidays Expedition to crack the hard nut for you.', 'About Us', 'We are one of the top tours and travels companies in India who offer all types of services related to tours and travels under one roof. We follow a fair and transparent pricing policy as well as maintain high quality support to our clients. ', '016dcea84bca107b327101abcb519617.png', '', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '4b47051576d5842ec6b5f1b68484412f.png', '6fc3a96ef66162cad4a76f15a54c5a48.jpg', '6fc3a96ef66162cad4a76f15a54c5a48.jpg', '6fc3a96ef66162cad4a76f15a54c5a48.jpg', '6fc3a96ef66162cad4a76f15a54c5a48.jpg', '6fc3a96ef66162cad4a76f15a54c5a48.jpg', 'Person 1', 'Person 2', 'Person 3', 'Person 4', 'Person 5', 'India Web Designs', 'India Web Designs 2', 'India Web Designs 3', 'India Web Designs 4', 'India Web Designs 5', '1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae', '2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae', '3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae', '4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae', '5 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae', 44, 'Inactive', 'elearning', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3581.4214857815746!2d91.79438156502894!3d26.150399333461827!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5b1557f1e58f%3A0xbd4ef132516ec60!2sIndia%20Web%20Designs!5e0!3m2!1sen!2sin!4v1583836568387!5m2!1sen!2sin', 'Flight Ticket Booking', '', 'Train Ticket Booking', 'Hotel Booking', 'Travel Insurance Services', 'Passport & Visa Services', '9db6c863fa51dcf4839d039be87ef3a6.jpg', 'b1e48dd6d0cca7e497c15eabc0b7970b.jpg', '7b293b8a1c79e26f521124b28b0c0e79.jpg', '148030b9ff066cef34032dc1f6349590.jpg', 'bfccf248c2b9ac8697629be8fb61cc8c.jpg', 'e432dfea6b71e460cfe59883ec7bedf4.jpg', '1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '5 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '6 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.', '2020-10-05', '2021-10-05', 22, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `web_contents`
--

CREATE TABLE `web_contents` (
  `id` int(11) NOT NULL,
  `web_name` varchar(255) DEFAULT NULL,
  `web_type` varchar(255) DEFAULT NULL,
  `web_desc` longtext DEFAULT NULL,
  `web_image` varchar(255) DEFAULT NULL,
  `web_website_id` int(11) DEFAULT NULL,
  `web_parent_name` varchar(255) DEFAULT NULL,
  `web_nav_type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_contents`
--

INSERT INTO `web_contents` (`id`, `web_name`, `web_type`, `web_desc`, `web_image`, `web_website_id`, `web_parent_name`, `web_nav_type`, `status`) VALUES
(399, 'sss', 'Informative-Pages', '', NULL, NULL, NULL, NULL, 'Inactive'),
(400, 'Terms', 'Informative-Pages', '<h3>What is Lorem Ipsum?</h3>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Why do we use it?</h3>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Where does it come from?</h3>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', NULL, NULL, NULL, NULL, 'Active'),
(401, 'Refund', 'Informative-Pages', '<h3>What is Lorem Ipsum?</h3>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Why do we use it?</h3>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Where does it come from?</h3>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', NULL, NULL, NULL, NULL, 'Active'),
(402, 'Privacy Policy', 'Informative-Pages', '<h3>What is Lorem Ipsum?</h3>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Why do we use it?</h3>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Where does it come from?</h3>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', NULL, NULL, NULL, NULL, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar_category`
--
ALTER TABLE `sidebar_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar_menu`
--
ALTER TABLE `sidebar_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_phone` (`user_phone`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_contents`
--
ALTER TABLE `web_contents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `sidebar_category`
--
ALTER TABLE `sidebar_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sidebar_menu`
--
ALTER TABLE `sidebar_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `web_contents`
--
ALTER TABLE `web_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=403;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
