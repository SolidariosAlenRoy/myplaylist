-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 10:03 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id` int(5) NOT NULL,
  `song` varchar(50) NOT NULL,
  `artist` varchar(20) NOT NULL,
  `album` varchar(40) NOT NULL,
  `genre` varchar(15) DEFAULT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id`, `song`, `artist`, `album`, `genre`, `year`) VALUES
(4, 'Money', 'LISA', 'LALISA', 'KPop', 2021),
(9, 'Bohemian Rhapsody', 'Queen', 'A Night at the Opera', 'Rock', 1975),
(10, 'Imagine', 'John Lennon', 'Imagine', 'Pop', 1971),
(11, 'Hotel California', 'Eagles', 'Hotel California', 'Rock', 1976),
(12, 'Thriller', 'Michael Jackson', 'Thriller', 'Pop', 1982),
(13, 'Like a Rolling Stone', 'Bob Dylan', 'Highway 61 Revisited', 'Folk Rock', 1965),
(14, 'Smells Like Teen Spirit', 'Nirvana', 'Nevermind', 'Grunge', 1991),
(15, 'What a Wonderful World', 'Louis Armstrong', 'What a Wonderful World', 'Jazz', 1967),
(16, 'Billie Jean', 'Michael Jackson', 'Thriller', 'Pop', 1982),
(17, 'Hey Jude', 'The Beatles', 'Hey Jude', 'Rock', 1968),
(18, 'Purple Haze', 'Jimi Hendrix', 'Are You Experienced', 'Rock', 1967),
(19, 'Halo', 'Beyoncé', 'I Am... Sasha Fierce', 'Pop', 2008),
(20, 'Crazy in Love', 'Beyoncé', 'Dangerously in Love', 'R&B', 2003),
(21, 'Shake It Off', 'Taylor Swift', '1989', 'Pop', 2014),
(22, 'Blank Space', 'Taylor Swift', '1989', 'Pop', 2014),
(23, '7 rings', 'Ariana Grande', 'Thank U, Next', 'Pop', 2019),
(24, 'Thank U, Next', 'Ariana Grande', 'Thank U, Next', 'Pop', 2019),
(25, 'Blinding Lights', 'The Weeknd', 'After Hours', 'R&B', 2020),
(26, 'Save Your Tears', 'The Weeknd', 'After Hours', 'R&B', 2020),
(27, 'Just the Way You Are', 'Bruno Mars', 'Doo-Wops & Hooligans', 'Pop', 2010),
(28, 'Sugar', 'Maroon 5', 'V', 'Pop', 2014),
(29, 'How You Like That', 'BLACKPINK', 'The Album', 'K-pop', 2020),
(30, 'DDU-DU DDU-DU', 'BLACKPINK', 'Square Up', 'K-pop', 2018),
(32, 'Love Shot', 'EXO', 'Love Shot', 'K-pop', 2018),
(33, 'LALISA', 'Lisa (BLACKPINK)', 'LALISA', 'K-pop', 2021);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
