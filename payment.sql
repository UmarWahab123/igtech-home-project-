-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 07:30 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_images`
--

CREATE TABLE `banner_images` (
  `id` int(50) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `circle_cx` text DEFAULT NULL,
  `circle_cy` text DEFAULT NULL,
  `circle_r` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_images`
--

INSERT INTO `banner_images` (`id`, `title`, `description`, `image`, `circle_cx`, `circle_cy`, `circle_r`, `created_at`, `updated_at`) VALUES
(5, 'WEB Agency', 'IG TECH', 'public/uploads/banners/1631695956-slider1.jpg', '.3', '.5', '.14', '2021-09-15 08:55:23', '2021-09-15 08:55:23'),
(6, 'Enterprise Software Development', 'aims to satisfy real needs of real projects.', 'public/uploads/banners/1631696256-slider-2.png', '.7', '.5', '.2', '2021-09-15 08:57:44', '2021-09-15 08:57:44'),
(7, 'MOBILE APP', 'is using REACT NATIVE for delivering android and iOS apps which is widely used, and latest technology.', 'public/uploads/banners/1631696511-slider-3.png', '.6', '.5', '.18', '2021-09-15 09:01:52', '2021-09-15 09:01:52'),
(8, 'WEB Devlopment', 'provides web development services including websites, web systems, erp systems, wordpress websites, custom websites, customized wordpress websites, web api\'s and much more', 'public/uploads/banners/1631696633-slider-3.png', '.6', '.5', '.18', '2021-09-15 09:03:57', '2021-09-15 09:03:57'),
(9, 'Ecommerce Apps', 'provides web development services including websites, wordpress websites,Ecommerce website, custom websites, customized wordpress websites, web api\'s and much more', 'public/uploads/banners/1631696724-slider-3.png', '.6', '.5', '.18', '2021-09-15 09:05:27', '2021-09-15 09:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(250) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(43, 'Eric Jones', 'eric.jones.z.mail@gmail.com', 'Hello, my name’s Eric and I just ran across your website at igtechservices.com...\r\n\r\nI found it after a quick search, so your SEO’s working out…\r\n\r\nContent looks pretty good…\r\n\r\nOne thing’s missing though…\r\n\r\nA QUICK, EASY way to connect with you NOW.\r\n\r\nBecause studies show that a web lead like me will only hang out a few seconds – 7 out of 10 disappear almost instantly, Surf Surf Surf… then gone forever.\r\n\r\nI have the solution:\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to TALK with them - literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works and even give it a try… it could be huge for your business.\r\n\r\nPlus, now that you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation pronto… which is so powerful, because connecting with someone within the first 5 minutes is 100 times more effective than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up regularly with new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable.\r\n \r\nCLICK HERE https://talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business, potentially converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=igtechservices.com', '2021-10-02 02:22:32', '2021-10-02 02:22:32'),
(66, 'Eric Jones', 'eric.jones.z.mail@gmail.com', 'Hi, Eric here with a quick thought about your website igtechservices.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE http://talkwithcustomer.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=igtechservices.com', '2021-10-14 03:02:04', '2021-10-14 03:02:04'),
(67, 'Eric Jones', 'eric.jones.z.mail@gmail.com', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found igtechservices.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for SEO, looks like it’s working well.\r\n\r\nSo here’s my question – what happens AFTER someone lands on your site?  Anything?\r\n\r\nResearch tells us at least 70% of the people who find your site, after a quick once-over, they disappear… forever.\r\n\r\nThat means that all the work and effort you put into getting them to show up, goes down the tubes.\r\n\r\nWhy would you want all that good work – and the great site you’ve built – go to waste?\r\n\r\nBecause the odds are they’ll just skip over calling or even grabbing their phone, leaving you high and dry.\r\n\r\nBut here’s a thought… what if you could make it super-simple for someone to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket?\r\n  \r\nYou can – thanks to revolutionary new software that can literally make that first call happen NOW.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re still there at your site.\r\n  \r\nYou know, strike when the iron’s hot!\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nWhen targeting leads, you HAVE to act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s why you should check out our new SMS Text With Lead feature as well… once you’ve captured the phone number of the website visitor, you can automatically kick off a text message (SMS) conversation with them. \r\n \r\nImagine how powerful this could be – even if they don’t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when  the iron’s hot!\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to learn more about everything Talk With Web Visitor can do for your business – you’ll be amazed.\r\n\r\nThanks and keep up the great work!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nStop wasting money chasing eyeballs that don’t turn into paying customers. \r\nCLICK HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=igtechservices.com', '2021-10-14 08:57:00', '2021-10-14 08:57:00'),
(68, 'Eric Jones', 'eric.jones.z.mail@gmail.com', 'Hello, my name’s Eric and I just ran across your website at igtechservices.com...\r\n\r\nI found it after a quick search, so your SEO’s working out…\r\n\r\nContent looks pretty good…\r\n\r\nOne thing’s missing though…\r\n\r\nA QUICK, EASY way to connect with you NOW.\r\n\r\nBecause studies show that a web lead like me will only hang out a few seconds – 7 out of 10 disappear almost instantly, Surf Surf Surf… then gone forever.\r\n\r\nI have the solution:\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to TALK with them - literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works and even give it a try… it could be huge for your business.\r\n\r\nPlus, now that you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation pronto… which is so powerful, because connecting with someone within the first 5 minutes is 100 times more effective than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up regularly with new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable.\r\n \r\nCLICK HERE https://talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business, potentially converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=igtechservices.com', '2021-10-17 21:35:51', '2021-10-17 21:35:51'),
(69, 'Eric Jones', 'eric.jones.z.mail@gmail.com', 'Hi, Eric here with a quick thought about your website igtechservices.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE http://talkwithcustomer.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=igtechservices.com', '2021-10-26 21:50:29', '2021-10-26 21:50:29'),
(70, 'Jarred Miller', 'jmiller22@hotmail.com', 'It looks like you have a couple broken links on your website.  Check out a service like URLInspect.com to help.  We\'ve used it in the past and liked it.\r\n\r\nHere\'s one link: https://igtechservices.com/contacts.html', '2021-11-03 01:12:29', '2021-11-03 01:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(250) NOT NULL,
  `project_id` int(250) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `file` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `project_id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(4, 3, 'test4345', 'public/uploads/projectdoc/1631262599-umarwahab.pdf', '2021-08-16 23:24:16', '2021-09-10 03:30:00'),
(13, 3, 'gdfgdfg', 'public/uploads/projectdoc/1631605587-umarwahab.pdf', '2021-09-14 02:46:28', '2021-09-14 02:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(250) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `age` int(250) DEFAULT NULL,
  `cnic` varchar(500) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `basic_salary` varchar(500) DEFAULT NULL,
  `designation` varchar(500) DEFAULT NULL,
  `contact_no` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `age`, `cnic`, `joining_date`, `basic_salary`, `designation`, `contact_no`, `status`, `address`, `created_at`, `updated_at`) VALUES
(2, 'Khan', 'khan@gmail.com', 28, '531313212112121', '2020-12-01', '25000', 'Software Engineer', '45645545', 'active', 'fgdfgdfffgfghfghhgff', '2021-08-16 23:25:51', '2021-08-16 23:25:51'),
(3, 'fdg dfgdf', 'um@gmail.com', 65, '4546', '2021-09-29', 'gfgf', 'fghfghfg', '5566', 'inactive', 'hgfhfg\r\nfhfgh', '2021-09-11 03:13:16', '2021-09-11 03:13:16'),
(4, 'fdg dfgdf', 'um@gmail.com', 65, '4546', '2021-09-29', '445', 'fghfghfg', '5566', 'active', 'hgfhfg\r\nfhfgh', '2021-09-11 03:15:12', '2021-09-11 03:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(250) NOT NULL,
  `date` date DEFAULT NULL,
  `particulars` varchar(5000) DEFAULT NULL,
  `amount` varchar(500) DEFAULT NULL,
  `type` varchar(500) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `date`, `particulars`, `amount`, `type`, `details`, `created_at`, `updated_at`) VALUES
(1, '2021-03-03', 'this is my second particulars', '5646', 'pending', 'ghhfyhfyfv', '2021-08-12 08:33:45', '2021-08-12 08:33:45'),
(3, '2021-03-03', 'this is my second particulars', '5646', 'paid', 'cvvfvfdvfdc', '2021-08-16 23:27:53', '2021-08-16 23:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(50) NOT NULL,
  `date` date DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `advertised_by` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `date`, `title`, `short_description`, `long_description`, `advertised_by`, `status`, `created_at`, `updated_at`) VALUES
(5, '2021-06-09', 'Web Application Developers', 'fdfgfdhfghfgh', '<p>fggffggfgfgfggfgfgf</p>', 'IG Tech Services', 'inactive', '2021-09-20 12:35:26', '2021-09-29 06:21:30');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(250) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `designation` varchar(500) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `profile` text DEFAULT NULL,
  `order_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `designation`, `joining_date`, `profile`, `order_by`, `created_at`, `updated_at`) VALUES
(8, 'Muhammad Farrukh', 'Software Engineer', '2020-07-01', 'public/uploads/membersprofile/1629174907-farrukh.jpg', 1, '2021-08-16 23:35:09', '2021-10-11 11:12:59'),
(9, 'Muhammad Asad Khan', 'Software Engineer', '2021-03-01', 'public/uploads/membersprofile/1633612617-asad.png', 2, '2021-08-16 23:35:58', '2021-10-07 17:17:05'),
(10, 'Umar Wahab', 'Software Engineer', '2021-06-16', 'public/uploads/membersprofile/1629174991-1628080157-umar.jpg', 3, '2021-08-16 23:36:34', '2021-11-04 09:22:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(50) NOT NULL,
  `type` varchar(500) DEFAULT NULL,
  `main_heading` text DEFAULT NULL,
  `sub_heading` text DEFAULT NULL,
  `banner_image` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `type`, `main_heading`, `sub_heading`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, 'About', 'About', NULL, 'public/uploads/bannerimg/1633081010-240_F_308697506_9dsBYHXm9FwuW0qcEqimAEXUvzTwfzwe.jpg', '2021-09-17 04:59:07', '2021-10-01 09:36:51'),
(4, 'Contacts', 'Contacts', NULL, 'public/uploads/bannerimg/1633082188-unnamed.jpg', '2021-09-17 08:12:05', '2021-10-01 09:56:29'),
(5, 'Jobs', 'Jobs', NULL, 'public/uploads/bannerimg/1633082072-home-banner.png', '2021-09-17 08:15:22', '2021-10-01 09:54:35'),
(6, 'Our Team', 'Our Team', NULL, 'public/uploads/bannerimg/1633068575-our-team-banner.jpg', '2021-09-17 08:22:54', '2021-10-01 06:09:41'),
(7, 'Portfolio', 'Our Portfolio', NULL, 'public/uploads/bannerimg/1633068647-portfolio-banner-768x180.jpg', '2021-09-17 08:25:27', '2021-10-01 06:10:49'),
(8, 'Services', 'Services', 'A Wide Variety of High Quality Services.', 'public/uploads/bannerimg/1633081393-web_banner.jpg', '2021-09-17 08:30:31', '2021-10-01 09:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(250) NOT NULL,
  `project_id` int(250) NOT NULL,
  `date` date DEFAULT NULL,
  `amount` varchar(500) DEFAULT NULL,
  `payment_method` varchar(500) DEFAULT NULL,
  `currency` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `project_id`, `date`, `amount`, `payment_method`, `currency`, `status`, `created_at`, `updated_at`) VALUES
(23, 3, '1970-01-01', '343', 'local bank transfer', 'USD', 'pending', '2021-08-16 23:55:32', '2021-08-16 23:55:32'),
(40, 3, '1970-01-01', '5646', 'credit card', 'PKR', 'paid', '2021-08-20 00:33:02', '2021-08-20 00:33:02'),
(46, 3, '2021-09-14', '5554', 'credit card', 'USD', 'paid', '2021-09-14 01:44:17', '2021-09-14 01:44:17'),
(67, 3, '2021-05-05', NULL, 'paypal', 'USD', 'pending', '2021-09-29 13:09:32', '2021-09-29 13:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(50) NOT NULL,
  `category_id` int(50) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `order_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `category_id`, `name`, `link`, `short_description`, `long_description`, `image`, `order_by`, `created_at`, `updated_at`) VALUES
(11, 9, 'M Design', NULL, NULL, NULL, 'public/uploads/portfolio/1631881092-portfolio1.jpg', 1, '2021-09-17 12:18:13', '2021-09-30 09:31:36'),
(23, 9, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632047091-portfolio2.jpg', 2, '2021-09-19 10:24:52', '2021-09-20 11:36:24'),
(24, 9, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632047132-portfolio3.jpg', 3, '2021-09-19 10:25:34', '2021-09-20 11:36:37'),
(26, 9, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632047472-portfolio4.jpg', 4, '2021-09-19 10:31:14', '2021-09-20 11:36:45'),
(28, 9, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632047613-portfolio5.jpg', 5, '2021-09-19 10:33:36', '2021-09-20 11:36:55'),
(29, 9, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632047642-portfolio6.jpg', 6, '2021-09-19 10:34:06', '2021-09-20 11:37:25'),
(30, 9, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632047672-valley.jpg', 7, '2021-09-19 10:34:35', '2021-09-20 11:37:17'),
(31, 9, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632047736-siipak.jpg', 8, '2021-09-19 10:35:40', '2021-09-20 11:37:58'),
(32, 9, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632047789-pl.jpg', 9, '2021-09-19 10:36:33', '2021-09-20 11:37:48'),
(33, 10, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632048080-bazar.jpg', 10, '2021-09-19 10:41:29', '2021-09-20 11:38:10'),
(34, 10, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632048106-tala.jpg', 11, '2021-09-19 10:41:54', '2021-09-20 11:38:23'),
(35, 11, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632048284-iphone.jpg', 12, '2021-09-19 10:44:46', '2021-09-20 11:38:39'),
(36, 11, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632048305-play_store.jpg', 13, '2021-09-19 10:45:06', '2021-09-20 11:38:55'),
(37, 11, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632048327-app_mobile.jpg', 14, '2021-09-19 10:45:29', '2021-09-20 11:39:09'),
(38, 12, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632048795-mobile.jpg', 15, '2021-09-19 10:53:15', '2021-09-20 11:39:26'),
(39, 12, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632048813-mobile_erp.jpg', 16, '2021-09-19 10:53:36', '2021-09-20 11:39:37'),
(40, 12, NULL, NULL, NULL, NULL, 'public/uploads/portfolio/1632049054-strikemt.jpg', 17, '2021-09-19 10:57:35', '2021-09-20 11:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE `portfolio_categories` (
  `id` int(50) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `order_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `name`, `order_by`, `created_at`, `updated_at`) VALUES
(9, 'WEB DEVELOPMENT', 1, '2021-09-17 12:15:26', '2021-09-20 11:04:57'),
(10, 'ECOMMMERCE DEVELOPMENT', 2, '2021-09-19 10:37:48', '2021-09-20 12:30:01'),
(11, 'MOBILE APPS DEVELOPMENT', 3, '2021-09-19 10:42:57', '2021-09-20 11:40:12'),
(12, 'ERP SYSTEMS', 4, '2021-09-19 10:50:25', '2021-09-20 11:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(250) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `budget` varchar(500) DEFAULT NULL,
  `type` varchar(500) DEFAULT NULL,
  `platform` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `start_date`, `end_date`, `budget`, `type`, `platform`, `status`, `details`, `created_at`, `updated_at`) VALUES
(3, 'sharc', '2021-01-02', '2021-12-25', '50000', 'Monthly', 'Upwork', 'Pending', 'sharc is so heavy projects.', '2021-08-16 23:22:17', '2021-08-16 23:22:17'),
(4, 'Ecommerce', '2021-06-23', '2021-02-03', '6000', 'Fixed Price', 'Facebook', 'Pending', 'this is a ecommerce website for us', '2021-08-20 00:04:08', '2021-08-20 00:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_title` varchar(500) NOT NULL,
  `role_access` text DEFAULT NULL,
  `access` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_title`, `role_access`, `access`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL, '2021-08-02 03:57:25', '2021-08-02 03:58:50'),
(3, 'Test', NULL, NULL, '2021-08-06 12:50:51', '2021-08-06 12:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(250) NOT NULL,
  `employees_id` int(250) NOT NULL,
  `date` date DEFAULT NULL,
  `salary_amount` varchar(500) DEFAULT NULL,
  `bonus_amount` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `employees_id`, `date`, `salary_amount`, `bonus_amount`, `status`, `created_at`, `updated_at`) VALUES
(5, 2, '2021-03-03', '40000', '3000', 'pending', '2021-08-16 23:26:14', '2021-08-16 23:26:14'),
(6, 2, '2021-03-03', '8888', '3000', 'paid', '2021-08-16 23:27:00', '2021-08-16 23:27:00'),
(7, 2, '2021-09-28', '35000', '2000', 'paid', '2021-09-13 02:51:10', '2021-09-13 02:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(250) NOT NULL,
  `company_name` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `phone`, `email`, `address`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'IG Tech Services', '+92 348 5504461', 'info@igtechservices.com', 'Address Office # 4, 1st floor, Prime Center 2, Street #4, G-13 Islamabad', 'public/uploads/setting/1631384125-logo-ig.png', '2021-08-15 13:07:49', '2021-10-07 17:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(50) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `order_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `content`, `image`, `date`, `order_by`, `created_at`, `updated_at`) VALUES
(1, 'Trung Nguyen', '<p>We\'ve really enjoyed working with Michael and it has been a journey together to achieve the outcome we wanted on three different projects - a seamless online experience and an engaging visual presence.<br></p>', 'public/uploads/testimonial/1632131084-user5.jpg', '2021-09-20', 1, '2021-09-19 04:19:49', '2021-09-20 12:57:37'),
(3, 'Boris Grigoryan', '<p>I cannot recommend IG TECH SERVICES Digital highly enough. They are without doubt the most professional, helpful website designers I have come across in my 25 years of running a business.Their response time is instantaneous, their knowledge extensive and their costs more than reasonable.<br></p>', 'public/uploads/testimonial/1632131101-user5.jpg', '2021-09-20', 2, '2021-09-19 05:42:25', '2021-09-20 12:58:30'),
(7, 'Mike De  Proof Suite', '<p><br></p><p>Skillful,communicative and punctual.They does excellent work,and quickly. A competent developers and easy to work with. Highly recommend them and look farward to working on more projects with them in the near future.</p>', 'public/uploads/testimonial/1632210552-user5.jpg', '1970-01-01', 3, '2021-09-21 07:49:15', '2021-09-21 07:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `address`, `postal_code`, `city`, `phone`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Super Admin', 'Super', 'Admin', 'admin@gmail.com', NULL, '$2y$10$CfNRLa9lr/o.MNLIuShnvuZAwsFjoOPbyG64sd3gf6IVgF0mDSm0K', NULL, NULL, '', NULL, 'Inactive', 'aR9Zs4mZI1ArKUOgIVl0Euf32SaeSNISrBybdsK6OYI4rIpn9sX2NLlTIfgx', '2021-07-30 04:20:14', '2021-10-03 13:10:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_images`
--
ALTER TABLE `banner_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `project_id_2` (`project_id`),
  ADD KEY `project_id_3` (`project_id`),
  ADD KEY `project_id_4` (`project_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `project_id_2` (`project_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `category_id_2` (`category_id`);

--
-- Indexes for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_id` (`employees_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_images`
--
ALTER TABLE `banner_images`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `portfolio_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `portfolio_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`employees_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
