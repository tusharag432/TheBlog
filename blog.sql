-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 09:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `passwords_reset`
--

CREATE TABLE `passwords_reset` (
  `email` varchar(50) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `author` varchar(20) NOT NULL,
  `category` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `content`, `image`, `author`, `category`, `date`) VALUES
(48, 'Second Post UPDATED', 'Description of second post', 'Content of The very second field edited', 'simon-wilkes-m3IxlGqG3dk-unsplash (1).jpg', 'Second Author', 'Business', '2020-12-28 18:30:00'),
(49, 'Third Post', 'Description of third post', 'Content of the very third post edited', 'aaron-burden-xG8IQMqMITM-unsplash.jpg', 'Third Author', 'Politics', '2020-12-28 18:30:00'),
(50, 'Forth Post', 'Description of forth post', 'Content of The very forth field edited', '10497301253_d807438c8e_o.jpg', 'Forth Author', 'Science and Technology', '2020-12-28 18:30:00'),
(51, 'Fifth Post', 'Description of fifth post', 'Content of The very fifth field edited again', 'jamie-street--FQm9HGjCCY-unsplash.jpg', 'Fifth Author', 'Sports', '2020-12-28 18:30:00'),
(52, 'Sixth Post', 'Description of Sixth post', 'Content of The very sixth field', 'jeshoots-com-VVd-2Ch7x_g-unsplash.jpg', 'Sixth Author', 'Automobile', '2020-12-28 18:30:00'),
(55, 'Eighth Title Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corr', 'Eighth Title Description Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adipLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugi', 'Eighth Content Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip', 'pedro-lastra-DiBu1qTQQ8s-unsplash.jpg', 'Eighth Author', 'Politics', '2020-12-28 18:30:00'),
(56, 'A small river named Duden flows by their place and supplies it with the necessary regelialias. A sma', 'A small river named Duden flows by their place and supplies it with the necessary regelialias. A small river named Duden flows by their place and Sup.A small river named Duden flows by their place a', 'A small river named Duden flows by their place and supplies it with the necessary regelialias. A small river named Duden flows by their place and Sup.\r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. A small river named Duden flows by their place and Sup.\r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. A small river named Duden flows by their place and Sup.\r\n', 'alex-ZR48YvUpk04-unsplash.jpg', 'Tushar', 'Science and Technology', '2021-04-29 15:08:23'),
(57, 'A small river named Duden flows by their place and supplies it with the necessary regelialias. A sma', 'A small river named Duden flows by their place and supplies it with the necessary regelialias. A small river named Duden flows by their place and Sup.A small river named Duden flows by their place a', 'A small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\nA small river named Duden flows by their place and supplies it with the necessary regelialias. \r\n', '10497301253_d807438c8e_o.jpg', 'Tushar', 'Automobile', '2021-06-26 18:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'viewer',
  `name` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DOJ` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `username`, `email`, `password`, `DOJ`) VALUES
(3, 'admin', 'Saracstic Melon', 'melonsarcastic', 'melonsarcastic@gmail.com', '781e5e245d69b566979b86e28d23f2c7', '2021-01-03 18:30:00'),
(10, 'admin', 'Admin Test', 'admintest', 'admintest@gmail.com', '66d4aaa5ea177ac32c69946de3731ec0', '2021-01-22 18:30:00'),
(11, 'author', 'Author Test', 'authortest', 'authortest@gmail.com', 'c6536b142fc9402c4c6d1b5b4fa20fde', '2021-01-22 18:30:00'),
(12, 'viewer', 'Viewer Test', 'viewertest', 'viewertest@gmail.com', '1ad722901d148ced0330469f87a52431', '2021-01-22 18:30:00'),
(13, 'admin', 'Tushar Agrawal', 'tushar', 'tusharagrawal9927@gmail.com', 'e19d5cd5af0378da05f63f891c7467af', '2021-01-28 21:49:10'),
(14, 'viewer', 'Tushar Agrawal', 'tusharag', 'umeshagrawal9837@gmail.com', '14aaf545fd2a21bb5038ab3a64697ab9', '2021-04-24 17:57:57'),
(15, 'viewer', 'Tushar', 'tush', 'tusharag432@gmail.com', '14aaf545fd2a21bb5038ab3a64697ab9', '2021-06-26 11:12:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passwords_reset`
--
ALTER TABLE `passwords_reset`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
