-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 08:39 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bis`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `lang` text NOT NULL,
  `genre` varchar(10) NOT NULL,
  `name` varchar(19) NOT NULL,
  `author` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `icon` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `uid`, `lang`, `genre`, `name`, `author`, `description`, `content`, `icon`) VALUES
(1, 2, 'English', 'Novel', 'The Godfather', 'Mario Puzo', 'The Godfather is a crime novel written by Italian ', 'Godfather is crime novel, it is great!', 'IMG-20161121-WA0002.jpg'),
(2, 3, 'English', 'Novel', 'Five Point Someone', 'Chetan Bhagat', 'Five Point Someone: What not to do at IIT! is a 20', 'Five Point Someone: What not to do at IIT! is a 2004 novel written by Chetan Bhagat, an alumnus of Indian Institute of Technology, Delhi and Indian Institute of Management, Ahmedabad. ', 'IMG-20161121-WA0002.jpg'),
(3, 2, 'Marathi', 'Novel', 'bookName', 'viraj', 'nice book', 'content', 'IMG-20161121-WA0002.jpg'),
(4, 8, 'Hindi', 'Novel', 'ojfiiqjlhfjhfkdkjfh', 'Omprakash Mishra', 'ddddddddd', 'ojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddjojfiiqjlhfjhfkdkjfhjdhfjdhfddddddddddddddddddddddddddddddddddddj', 'IMG_20170621_123050.jpg'),
(5, 3, 'Marathi', 'Poem', 'vishaka', 'vi.va.shirvadkar', 'poems', 'à¤¦à¥‚à¤°à¤¸à¥à¤¥ à¤•à¥à¤£à¥€ à¤¦à¥‡ à¤¤à¥à¤à¥à¤¯à¤¾ à¤•à¤°à¥€ à¤¹à¥€ à¤•à¤µà¤¿à¤¤à¤¾\r\nà¤µà¤¾à¤¹à¤¤à¥‡ à¤œà¤¿à¤šà¥à¤¯à¤¾à¤¤à¥‚à¤¨ à¤¤à¥à¤¯à¤¾à¤šà¥€ à¤œà¥€à¤µà¤¨ à¤¸à¤°à¤¿à¤¤à¤¾\r\n\r\nà¤–à¤³à¤–à¤³à¥‡ à¤…à¤¡à¤–à¤³à¥‡ à¤¸à¥à¤•à¥‡ à¤•à¤§à¥€ à¤«à¥‡à¤¸à¤¾à¤³à¥†\r\nà¤ªà¤°à¥€ à¤…à¤–à¤‚à¤¡ à¤¶à¥‹à¤§à¥‡ à¤µà¤¾à¤Ÿ à¤¸à¤®à¥à¤¦à¥à¤°à¤¾à¤•à¤°à¤¿à¤¤à¤¾\r\n\r\nà¤–à¤¡à¤•à¤¾à¤³ à¤ªà¥à¤°à¤¾à¤‚à¤¤ à¤¤à¥‹ à¤¹à¥€ à¤œà¥‡à¤¥à¥‚à¤¨ à¤¨à¤¿à¤˜à¤¾à¤²à¥€\r\nà¤ªà¤¥ à¤¶à¥‹à¤§à¤¿à¤¤ à¤†à¤²à¥€ à¤°à¤¾à¤¨à¤¾à¤¤à¥‚à¤¨ à¤…à¤•à¥‡à¤²à¥€\r\n\r\nà¤¨à¤š à¤°à¤®à¥à¤¯ à¤°à¤¾à¤‰à¤³à¥‡ à¤•à¤²à¤¾à¤ªà¥‚à¤°à¥à¤£ à¤µà¤¾ à¤˜à¤¾à¤Ÿ\r\nà¤¤à¥€à¤°à¤¾à¤µà¤° à¤¤à¥à¤°à¤³à¤• à¤ªà¤°à¥€ à¤…à¤‚à¤•à¥à¤°à¤¤à¥€ à¤µà¥‡à¤²à¥€\r\n\r\nà¤¨à¤µ à¤ªà¤°à¥à¤£à¤¾à¤‚à¤šà¥à¤¯à¤¾ à¤¹à¥à¤¯à¤¾ à¤µà¤¿à¤°à¤³ à¤®à¤¾à¤‚à¤¡à¥à¤µà¤¾à¤–à¤¾à¤²à¥€\r\nà¤¹à¥‹à¤ˆà¤² à¤¸à¤¾à¤µà¤²à¥€ à¤•à¥à¤£à¤¾ à¤•à¥à¤£à¤¾à¤¸ à¤•à¤¹à¤¾à¤²à¥€\r\n\r\nà¤•à¥‹à¤ªà¥‡à¤² à¤•à¥à¤£à¥€ à¤¶à¤¾à¤ªà¥€à¤² à¤•à¥à¤£à¥€ à¤¦à¥à¤°à¥à¤µà¤¾à¤¸\r\nà¤¹à¥à¤¯à¤¾ à¤œà¤³à¥‹à¤¤ à¤¸à¤®à¤¿à¤§à¤¾ à¤­à¤µà¥à¤¯ à¤¹à¤µà¥€ à¤µà¥à¤°à¥à¤•à¥à¤·à¤¾à¤²à¥€\r\n\r\nâ€œà¤¸à¤®à¤¿à¤§à¤¾à¤š à¤¸à¤–à¥à¤¯à¤¾ à¤¯à¤¾, à¤¤à¥à¤¯à¤¾à¤¤ à¤•à¤¸à¤¾ à¤“à¤²à¤¾à¤µà¤¾,\r\nà¤•à¥‹à¤ à¥‚à¤¨ à¤«à¥à¤²à¤¾à¤‚à¤ªà¤°à¤¿ à¤µà¤¾ à¤®à¤•à¤°à¤‚à¤¦ à¤®à¤¿à¤³à¤¾à¤µà¤¾ ?\r\n\r\nà¤œà¤¾à¤¤à¥à¤¯à¤¾à¤š à¤°à¥à¤•à¥à¤· à¤¯à¤¾, à¤à¤•à¤š à¤¤à¥à¤¯à¤¾ à¤†à¤•à¤¾à¤‚à¤•à¥à¤·à¤¾\r\nà¤¤à¤µ à¤†à¤¨à¥à¤¤à¤° à¤…à¤—à¥à¤¨à¥€ à¤•à¥à¤·à¤£à¤­à¤° à¤¤à¤°à¤¿ à¤«à¥à¤²à¤µà¤¾à¤µà¤¾!', 'images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `uid` int(50) NOT NULL,
  `id` int(50) NOT NULL,
  `lang` text NOT NULL,
  `genre` varchar(10) NOT NULL,
  `name` varchar(19) NOT NULL,
  `author` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `icon` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `first` varchar(30) NOT NULL,
  `last` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first`, `last`, `email`, `pass`, `isAdmin`) VALUES
(1, 'dhanesh', 'katre', 'dk@gmail.com', '86109d400f0ed29e840b47ed72777c84', 1),
(2, 'chetan', 'kolte', 'chetankolte56@gmail.com', '3b8ebe34e784a3593693a37baaacb016', 0),
(3, 'viraj', 'khedekar', 'itzzbooboo@gmail.com', '70dfbca685f7424fa7ff90845d0fa564', 0),
(4, 'jon', '', 'dhaneshkatre@gmail.com', '86109d400f0ed29e840b47ed72777c84', 0),
(8, 'tyrian', 'lanni', 'kviraj37@gmail.com', '992a6d18b2a148cf20d9014c3524aa11', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
