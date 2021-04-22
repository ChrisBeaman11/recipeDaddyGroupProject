-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2021 at 04:53 PM
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
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `pid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `favid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`pid`, `rid`, `favid`) VALUES
(7, 1, 1),
(7, 2, 5),
(7, 3, 6),
(7, 4, 7),
(7, 5, 8),
(7, 6, 9),
(6, 3, 10),
(9, 1, 11),
(9, 5, 12),
(9, 5, 13);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `pid` int(11) NOT NULL,
  `fname` varchar(50) CHARACTER SET utf16 NOT NULL,
  `uname` varchar(50) CHARACTER SET utf16 NOT NULL,
  `profpic` varchar(50) CHARACTER SET utf16 NOT NULL DEFAULT 'profiles/default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`pid`, `fname`, `uname`, `profpic`) VALUES
(1, 'Michael', 'MLemon', '../profiles/60492c9c4501b9.46073446.jpg'),
(2, 'm', 'MrLemon_', '../profiles/607dd93123bf31.30621841.jpg'),
(3, 'nw', 'test', '../profiles/607de4576c3d93.54201291.jpg'),
(4, 'Michael', 'mrtest', '../profiles/607de48d139be9.62807615.jpg'),
(5, 'Karl ', 'karlscheib', 'profiles/6081de18c4c4e9.06543339.jpg'),
(6, 'Doug', 'Dougtherouge', 'profiles/6081df76780271.55545082.jpg');

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
(5, 'Here is a new recipe', 'These are the ingredients', 'And then you do the thing', 'karlscheib', '../images/default.jpg');

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

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`revid`, `itemid`, `uname`, `title`, `reviewtext`, `revdate`, `ratingnum`, `status`) VALUES
(1, 2, 'MrLemon_', 'howdy', 'lets see if it works', '2021-04-19 19:49:41', 5, 1),
(2, 1, 'MrLemon_', 'rec', 'ye', '2021-04-19 19:50:20', 5, 1),
(3, 1, 'karlscheib', 'Stars no worky', 'I guess the stars still dont work', '2021-04-22 19:25:00', 2, 1);

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
(6, 'm', 'l', 'MrLemon_', '$2y$10$vFceoUJKjU9yIHboYN9N1uh9FB6aFB06BeMuilQIrPi./tcpFB4Z.', 'ma@mgame.cm'),
(7, 'nw', 'nbe', 'test', '$2y$10$cuHA8KxZFAJxRR6m/Spmbex/1x4clvfdbZChQKOy0x9I5AD9Tv7ia', 'te@you.com'),
(8, 'Michael', 'Lemon', 'mrtest', '$2y$10$P2AUiZRgnhkwyNTVpr3iheXdUgSV6OST/9VqIxvDDlR8KrulYqysq', 'te@you.com'),
(9, 'Karl ', 'Scheib', 'karlscheib', '$2y$10$.q0g8RsCGF549AVGUqxueOtYxfo8Edtz3K0l7WjMSSmurikRjfaqC', 'eldonscheib@gmail.com'),
(10, 'Doug', 'Olas', 'Dougtherouge', '$2y$10$rNHUoMu0fNAbFKpbrSCb6eloxsMk3iySmlME2cTPsw8GngJVSMbwO', 'kes0049@mix.wvu.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`favid`);

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
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `favid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `revid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id for each review', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
