-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 03:50 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_nico_adelmann_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_first_name` varchar(55) DEFAULT NULL,
  `author_last_name` varchar(55) DEFAULT NULL,
  `author_media` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_first_name`, `author_last_name`, `author_media`) VALUES
(1, 'Stephen', 'King ', 'Horror'),
(2, 'Toni', 'Morrison', 'Fiction'),
(3, 'Margaret', 'Atwood', 'Short_Story'),
(4, 'Beatrix', 'Potter', 'Fiction'),
(5, 'Eric', 'Carle', 'Children_Books'),
(6, 'Maurice', 'Sendak', 'Children_Books'),
(7, 'Lee', 'Child', 'Fiction'),
(8, 'Philip', 'Pullman', 'Fiction'),
(9, 'Enid', 'Blyton', 'Children_Book'),
(10, 'Dean', 'Koontz', 'Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `media_title` varchar(120) DEFAULT NULL,
  `media_image` varchar(200) DEFAULT NULL,
  `media_ISBN` int(11) DEFAULT NULL,
  `media_short_description` varchar(55) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `type` varchar(55) DEFAULT NULL,
  `FK_publisher` int(11) DEFAULT NULL,
  `FK_author` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `media_title`, `media_image`, `media_ISBN`, `media_short_description`, `publish_date`, `type`, `FK_publisher`, `FK_author`) VALUES
(1, 'The Shining', 'https://prodimage.images-bn.com/pimages/9780525565321_p', 423432, 'A thriller book', '1977-01-01', 'Book', 3, 1),
(2, 'Rage', 'https://upload.wikimedia.org/wikipedia/en/thumb/6/6a/Ragebachman.jpg/220px-Ragebachman.jpg', 3256445, 'A horror Book', '1977-01-01', 'Book', 5, 1),
(5, 'The Stand', 'https://images-na.ssl-images-amazon.com/images/I/51tR1ywx39L._SX301_BO1,204,203,200_.jpg', 3423332, 'A thriller book', '1978-01-01', 'DVD', 5, 1),
(6, 'Beloved', 'https://s26162.pcdn.co/wp-content/uploads/2017/09/7e968d4f23779076b167be89d396c99f-beloved-by-toni-morrison-books-.jpg', 325325, 'A novel after the civil war', '1987-01-01', 'Book', 5, 2),
(7, 'The Bluest Eye', 'https://images.gr-assets.com/books/1315389431l/5219.jpg', 65432, 'A Novel about loving', '1970-01-01', 'Book', 5, 2),
(8, 'Song of Solomon', 'https://upload.wikimedia.org/wikipedia/en/thumb/1/1e/SongOfSolomon.jpg/220px-SongOfSolomon.jpg', 9345, 'A novel', '1977-01-01', 'DVD', 5, 2),
(9, 'The Very Hungry Caterpillar', 'https://images-na.ssl-images-amazon.com/images/I/51reF9VCr1L._SY354_BO1,204,203,200_.jpg', 656432, 'A childbook about a Caterpillar', '1969-01-01', 'Book', 2, 5),
(10, 'Today is Monday', 'https://images-na.ssl-images-amazon.com/images/I/51syy0Uwr9L._SX368_BO1,204,203,200_.jpg', 43232, 'A Childrensbook', '1993-01-01', 'DVD', 1, 5),
(11, 'Killing Floor', 'https://images-na.ssl-images-amazon.com/images/I/51PGwwAK64L._SX318_BO1,204,203,200_.jpg', 72589, 'A very dark book', '1997-01-01', 'Book', 3, 7),
(12, 'The Magic Faraway Tree', 'https://upload.wikimedia.org/wikipedia/en/thumb/5/51/The_Magic_Faraway_Tree.jpg/220px-The_Magic_Faraway_Tree.jpg', 191923, 'A Childrensbook', '1943-01-01', 'Book', 4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `publisher_name` varchar(55) DEFAULT NULL,
  `publisher_adress` varchar(55) DEFAULT NULL,
  `publisher_size` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `publisher_name`, `publisher_adress`, `publisher_size`) VALUES
(1, 'Penguin_Random_House', 'America', 'big'),
(2, 'Hachette_Livre', 'America', 'Big'),
(3, 'HarperCollins', 'United_Kingdom', 'Big'),
(4, 'Pan_Macmillan', 'United_Kingdom', 'Big'),
(5, 'Simon_Schuster', 'Germany', 'Small');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `FK_publisher` (`FK_publisher`),
  ADD KEY `FK_author` (`FK_author`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`FK_publisher`) REFERENCES `publisher` (`publisher_id`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`FK_author`) REFERENCES `author` (`author_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;