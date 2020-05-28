-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2015 at 01:03 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phonebook_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `notes` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `user_id`, `created_at`, `updated_at`, `notes`) VALUES
(16, 'Rishabh Tyagi', '9660054904', 6, '2020-05-28 12:47:04', '2020-05-28 12:47:48', 'MR. ABC is Full Stack Developer '),
(18, 'John ', '9987654321', 6, '2020-05-28 12:52:44', '2020-20-28 12:52:44', 'Its No one , its John Doe , No one knows about him. '),
(19, 'Ujjawal', '9988765432', 6, '2020-05-28 12:54:31', '2020-05-28 12:54:31', 'Alex from smart company of circus. Alex from smart company of circus. Alex from smart company of circus. Alex from smart company of circus. Alex from smart company of circus. Alex from smart company of circus. '),
(20, 'Rohan ', '9887654321', 6, '2020-05-20 12:59:47', '2015-05-28 12:59:47', 'These should be some better text to appear here. These should be some better text to appear here. These should be some better text to appear here. These should be some better text to appear here. '),
(21, 'Subham', '09988776543', 6, '2020-05-24 13:01:11', '2020-05-20 13:01:11', 'Here is another member from doe family. Here is another member from doe family. Here is another member from doe family. '),
(22, 'Manik', '9978654321', 6, '2020-05-28 13:02:43', '2020-05-28 13:02:43', 'Lets have a big doe family '),
(23, 'Rockey ', '99778654321', 6, '2020-05-28 13:04:18', '2020-05-28 13:04:18', 'how can we leave foo / bar family. Lets give them some place '),
(24, 'Henery Doe ', '9897654321', 6, '2020-05-28 13:05:23', '2020-05-28 13:05:23', 'Keeping the family chain for doe. '),
(25, 'Vicky Sharma', '+919660054904', 6, '2015-08-14 13:06:52', '2020-05-28 13:06:52', 'Its just a filler to give a better look then lorum ipsum,'),
(26, 'Vicko Doe ', '8899776655', 6, '2020-05-28 13:07:35', '2020-05-28 13:07:35', 'Keeping the family chain'),
(27, 'John Foo', '9786756453', 6, '2020-05-14 13:08:42', '2020-05-14 13:08:42', 'college friends. '),
(28, 'Ajay Sharma', '+919460137966', 6, '2020-05-28 13:09:46', '2020-05-28 13:10:18', 'Its my nick name. Edited text lets see if updates ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `name`, `updated_at`, `remember_token`) VALUES
(6, 'rishabhtyagiofficial1@gmail.com', '$2y$10$KA3mJGhKxLepSwDaTuxN0OABG5PpaL6Msl2GXglv3gxCTs7rVechm', '2020-05-14 11:58:42', 'Rishabh Tyagi', '2020-05-20 12:02:11', '8bJTN9danoimCJGQjx4rQyaRUoNKKH49lMVuYaJOGNQZ0HdnBdePntWCdoat');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
