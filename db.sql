-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2022 at 05:38 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `b_shabak` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `b_publish` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `b_description` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `b_image` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`b_id`, `b_name`, `b_shabak`, `b_publish`, `b_description`, `b_image`) VALUES
(7, 'اثر مرکب', '978-964-236', '1394', 'سرنوشت چیزی‌ست که خودتان آن را می‎‌سازید. اگر می‌خواهید جاده‌ی موفقیت را برای خود هموار کنید', 'image-book/6191845768207186.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

DROP TABLE IF EXISTS `reserve`;
CREATE TABLE IF NOT EXISTS `reserve` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `r_family` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `r_phone` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `book` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`r_id`, `r_name`, `r_family`, `r_phone`, `book`) VALUES
(10, 'محمد', 'شریفیان', '09140316025', 'اثر مرکب');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_username` varchar(150) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_usertype` varchar(25) NOT NULL,
  `u_activation` varchar(5) NOT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `username` (`u_username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_username`, `u_email`, `u_password`, `u_usertype`, `u_activation`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin', '1'),
(9, '198215320125', 'test@gmail.com', '2020', 'register', '1'),
(10, '98111024206015', 'df@gmail.com', '3030', 'register', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
