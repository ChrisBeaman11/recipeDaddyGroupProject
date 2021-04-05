-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2021 at 03:40 PM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `pid` int(11) NOT NULL,
  `fname` varchar(50) CHARACTER SET utf16 NOT NULL,
  `uname` varchar(50) CHARACTER SET utf16 NOT NULL,
  `profpic` varchar(50) CHARACTER SET utf16 NOT NULL DEFAULT '../images/default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`pid`, `fname`, `uname`, `profpic`) VALUES
(1, 'Michael', 'MLemon', '../profiles/60492c9c4501b9.46073446.jpg'),
(2, '123', '123', '../profiles/606106292fbbe0.19040306.jpg'),
(3, 'Bob', 'bobross', '../images/default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `rid` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf16 NOT NULL,
  `ingredients` text CHARACTER SET utf16 NOT NULL,
  `steps` text CHARACTER SET utf16 NOT NULL,
  `creator` varchar(50) CHARACTER SET utf16 NOT NULL,
  `pic` varchar(50) CHARACTER SET utf16 NOT NULL DEFAULT '../images/default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`rid`, `name`, `ingredients`, `steps`, `creator`, `pic`) VALUES
(1, 'idk chicken', 'chicken; salt; heat', 'make chicken hot; put salt on it; eat', 'MrLemon', '../images/default.jpg'),
(2, 'Chicken', 'Chicken\r\nSalt\r\nFood\r\nEeat', 'asfgadfg', 'MrLemon', '../images/default.jpg'),
(3, 'Beef Chili', '2 lbs. ground beef; 2 tbsp. chili powder; 1 tbsp. cumin; 1 tsp. salt 28 oz. can crushed tomatoes; 16 oz. beef broth; 1/2 cup dark brown sugar; two cans of beans', 'sear beef in pot; add salt and seasonings and mix; add tomatoes and cook for a few minutes; add beef broth, sugar, and beans', 'MLemon', '../images/default.jpg'),
(4, 'food', 'food\r\nsalt\r\npepper', 'mix\r\neat', 'MrLemon', '../images/default.jpg'),
(5, 'Plumbus', 'test', 'test', '123', '../images/default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `revid` int(11) NOT NULL COMMENT 'id for each review',
  `itemid` int(11) NOT NULL COMMENT 'item being reviewed',
  `uname` varchar(80) NOT NULL,
  `title` varchar(60) NOT NULL,
  `reviewtext` text NOT NULL,
  `revdate` datetime NOT NULL,
  `ratingnum` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT 'at least 1 item to review'
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `uname`, `password`, `email`) VALUES
(1, 'Michael', 'Lemon', 'MrLemon', '$2y$10$tGy/QbjuRL6.KM4V/O41O.73T4HYErD8zOV1ysjh3X5C.y5HrS996', 'mal0037@mix.wvu.edu'),
(2, 'Michael', 'Lemon', 'mrmemre', '$2y$10$1UVLN4cKvnJqO9T3llWF5uo9dtd28qHeU/hRcro.LJugSFjtCZOGC', 'mgamg@mggsng.com'),
(3, 'gfdhhg', 'dfghdfg', 'hdfghdfh', '$2y$10$mC899L2c1TFHHcgS3KZae.QUVWQLxVJ/kf2iyeZA6OdUyqYY23HGa', 'dsg@dfgdg.com'),
(4, 'Mr', 'Le', 'myt', '$2y$10$5f.doP3ae7c4UfwEVjFT6.4YI9dvGfWDJfpXstajZ4aKEeh6FxPI6', 'sda@s.com'),
(5, 'Michael', 'Lemon', 'MLemon', '$2y$10$y7PBkPuyV3vZFEw19.wJIeY5eCykmBABkN4XYDYza0eQ7rf4FggQS', 'mlem@mle.com'),
(6, '123', '123', '123', '$2y$10$WoDnHEV0BPuBV8Igbn2SB.K/NUvW44SXFZWDYVkI/488cPdyFE.qe', '1@1.com'),
(7, 'Bob', 'Ross', 'bobross', '$2y$10$9Dt9/ptNaNM3TpKq3lyhQenyFwQYQyMMV5eTIXrZ4ZQ.gY2.Y/sVy', '1@1.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`revid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `revid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id for each review';
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
