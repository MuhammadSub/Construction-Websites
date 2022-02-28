-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 04:40 PM
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
-- Database: `construction`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'muhammadsubhan.contact@gmail.com', 'Subhan786@', '2021-11-04 15:18:34', '2021-11-04 15:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `category` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `name`, `number`, `category`, `email`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'Zabiullah', '03445559782', 'Furniture', 'zabi@gmail.com', 'Some Knowledge about your Company.', '2021-12-16 07:36:45', '2021-12-16 07:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `description`, `picture`, `created_at`, `updated_at`) VALUES
(4, 'Web Designing', 'Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development rather than software development. ... A web designer works on the appearance, layout, and, in some cases, content of a website.', 'upload/Ali Raza portfolio.png', '2022-01-19 13:46:11', '2022-01-19 13:46:11'),
(5, 'Web Development ', 'Web development is the work involved in developing a website for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services.', 'upload/Softflix.png', '2022-01-19 13:47:21', '2022-01-19 13:47:21'),
(6, 'Wordpress', 'WordPress is free, open source publishing software that can be installed locally on a web server and viewed on a proprietary web site or hosted in the cloud and viewed on the WordPress web site. ... Since then, WordPress has evolved to be a full content management system with widgets, plugins and customizable themes.', 'upload/fikret-tozak-Zk--Ydz2IAs-unsplash.jpg', '2022-01-19 13:50:33', '2022-01-19 13:50:33');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `category` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `number`, `category`, `email`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Subhan', '03445559782', '', 'muhammadsubhan.contact@gmail.com', 'Test', '2021-11-04 15:36:15', '2021-11-04 15:36:15'),
(2, 'Muhammad Subhan', '03445559782', 'Welding', 'muhammadsubhan.contact@gmail.com', 'Test', '2021-11-04 16:03:50', '2021-11-04 16:03:50'),
(3, 'JAwad', '08744835', 'Welding', 'jawad@gmail.com', 'ftgdhsjakl', '2021-12-02 07:23:23', '2021-12-02 07:23:23'),
(4, 'Muhammad Subhan', '03445559782', 'Furniture', '20-cp-77@students.uettaxila.edu.pk', 'try fr', '2022-01-18 14:34:19', '2022-01-18 14:34:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Welding', '2021-11-04 16:02:26', '2021-11-04 16:02:26'),
(3, 'Furniture', '2021-12-02 07:24:12', '2021-12-02 07:24:12'),
(5, 'Paint', '2021-12-13 08:02:15', '2021-12-13 08:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'muhammadsubhan.contact@gmail.com', 'Test', '2021-11-04 15:29:16', '2021-11-04 15:29:16'),
(3, '20-cp-77@students.uettaxila.edu.pk', 'help ', '2022-01-18 14:34:34', '2022-01-18 14:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `picture1` varchar(100) NOT NULL,
  `picture2` varchar(100) NOT NULL,
  `picture3` varchar(100) NOT NULL,
  `picture4` varchar(100) NOT NULL,
  `picture5` varchar(100) NOT NULL,
  `picture6` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `category` varchar(100) NOT NULL,
  `question1` varchar(200) NOT NULL,
  `answer1` varchar(1000) NOT NULL,
  `question2` varchar(200) NOT NULL,
  `answer2` varchar(1000) NOT NULL,
  `question3` varchar(200) NOT NULL,
  `answer3` varchar(1000) NOT NULL,
  `question4` varchar(200) NOT NULL,
  `answer4` varchar(1000) NOT NULL,
  `titledesc` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `picture`, `picture1`, `picture2`, `picture3`, `picture4`, `picture5`, `picture6`, `description`, `category`, `question1`, `answer1`, `question2`, `answer2`, `question3`, `answer3`, `question4`, `answer4`, `titledesc`, `created_at`, `updated_at`) VALUES
(5, 'Welding', 'upload/Welding1.jpg', 'upload/Welding1.jpg', 'upload/Welding3.jpg', 'upload/Welding5.jpg', 'upload/Welding4.jpg', 'upload/Welding6.jpg', 'upload/Welding6.jpg', 'Welding is a fabrication process whereby two or more parts are fused together by means of heat, pressure or both forming a join as the parts cool. Welding is usually used on metals and thermoplastics but can also be used on wood. The completed welded joint may be referred to as a weldment.', 'Welding', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'Welding is a fabrication process whereby two or more parts are fused together by means of heat, pressure or both forming a join as the parts cool. Welding is usually used on metals and thermoplastics but can also be used on wood. The completed welded joint may be referred to as a weldment.', '2021-12-16 07:28:09', '2021-12-16 07:28:09'),
(6, 'Paint', 'upload/paint.jpg', 'upload/paint3.jpg', 'upload/paint1.jpg', 'upload/paint2.jpg', 'upload/paint4.jpg', 'upload/paint5.jpg', 'upload/paint4.jpg', 'Painting is defined as the process of applying paint, or another medium, to a solid surface – usually a canvas. Paints or other forms of color are commonly applied to using a paintbrush. However, artists do use different tools such as sponges, spray paint, or even knives.', 'Paint', 'Check', 'Check', 'Check', 'Check', 'Check', 'Check', 'Check', 'Check', 'Painting is defined as the process of applying paint, or another medium, to a solid surface – usually a canvas. Paints or other forms of color are commonly applied to using a paintbrush. However, artists do use different tools such as sponges, spray paint, or even knives.', '2021-12-16 07:35:14', '2021-12-16 07:35:14'),
(7, 'Furniture', 'upload/03_home_kit_4.jpg', 'upload/02_kit_rose_water.jpg', 'upload/03_home_kit_2.jpg', 'upload/03_home_kit_1.jpg', 'upload/03_home_kit_4.jpg', 'upload/05_soap.jpg', 'upload/10_soap_special.jpg', 'Furniture refers to movable objects intended to support various human activities such as seating (e.g., Stools, Chairs, and sofas), eating (tables), and sleeping (e.g., beds). ... Furniture can be a product of design and is considered a form of decorative art.', 'Furniture', 'Check', 'Check', 'Check', 'Check', 'Check', 'Check', 'Check', 'Check', '', '2022-01-08 10:28:51', '2022-01-08 10:28:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
