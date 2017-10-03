-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2017 at 12:59 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urjentup_journey`
--

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE `attractions` (
  `id` int(225) NOT NULL,
  `image1` varchar(2000) NOT NULL,
  `image2` varchar(2000) NOT NULL,
  `image3` varchar(2000) NOT NULL,
  `detail1` varchar(5000) NOT NULL,
  `detail2` varchar(5000) NOT NULL,
  `detail3` varchar(5000) NOT NULL,
  `package_name` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`id`, `image1`, `image2`, `image3`, `detail1`, `detail2`, `detail3`, `package_name`) VALUES
(3, 'images/1498715058rajasthan2.jpg', 'images/1498715058rajasthan2.jpg', 'images/1498715058rajasthan2.jpg', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. ', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. ', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. ', 'Royal Rajasthan Tour'),
(2, 'images/1497526546raj3.jpg', 'images/1497526546raj3.jpg', 'images/1497526546raj3.jpg', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling .', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling experience.', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling experience.', 'Relish Rajasthan');

-- --------------------------------------------------------

--
-- Table structure for table `a_users`
--

CREATE TABLE `a_users` (
  `id` int(225) NOT NULL,
  `username` varchar(2000) NOT NULL,
  `password` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_users`
--

INSERT INTO `a_users` (`id`, `username`, `password`) VALUES
(1, 'journey', 'addajourney'),
(2, 'urjentup_adda', 'journey@adda123');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(225) NOT NULL,
  `banner` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner`) VALUES
(4, 'images/banner1.jpg'),
(3, 'images/banner.jpg'),
(5, 'images/banner3.jpg'),
(6, 'images/banner4.jpg'),
(7, 'images/banner5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(225) NOT NULL,
  `background_image` varchar(2000) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `blog_data` varchar(2000) NOT NULL,
  `blog_link` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `background_image`, `image`, `blog_data`, `blog_link`) VALUES
(1, 'images/blog2.jpg', 'images/blog1.1.jpg', '5 Getaways In India To Beat The Heat This Summer', 'http://urjentupccodes.com/journeyadda/blog.php'),
(2, 'images/blog1.jpg', 'images/blog1.1.jpg', '5 Getaways In India To Beat The Heat This Summer', 'http://urjentupccodes.com/journeyadda/blog.php'),
(3, 'images/blog2.jpg', 'images/blog1.1.jpg', '5 Getaways In India To Beat The Heat This Summer', 'http://urjentupccodes.com/journeyadda/blog.php'),
(4, 'images/blog1.jpg', 'images/blog1.1.jpg', '5 Getaways In India To Beat The Heat This Summer', 'http://urjentupccodes.com/journeyadda/blog.php'),
(5, 'images/blog2.jpg', 'images/blog1.1.jpg', '5 Getaways In India To Beat The Heat This Summer', 'http://urjentupccodes.com/journeyadda/blog.php'),
(6, 'images/blog1.jpg', 'images/blog1.1.jpg', '5 Getaways In India To Beat The Heat This Summer', 'http://urjentupccodes.com/journeyadda/blog.php');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(225) NOT NULL,
  `image1` varchar(2000) NOT NULL,
  `image2` varchar(2000) NOT NULL,
  `image3` varchar(2000) NOT NULL,
  `detail1` varchar(5000) NOT NULL,
  `detail2` varchar(5000) NOT NULL,
  `detail3` varchar(5000) NOT NULL,
  `package_name` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `image1`, `image2`, `image3`, `detail1`, `detail2`, `detail3`, `package_name`) VALUES
(1, 'images/1497529841raj1.png', 'images/1497529841raj1.png', 'images/1497529841raj1.png', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling .', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling experience.', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling experience.', 'Relish Rajasthan'),
(2, 'images/1498715292rajasthan2.jpg', 'images/1498715292rajasthan2.jpg', 'images/1498715292rajasthan2.jpg', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, whic', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, whic', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, whic', 'Royal Rajasthan Tour');

-- --------------------------------------------------------

--
-- Table structure for table `discover_country`
--

CREATE TABLE `discover_country` (
  `id` int(225) NOT NULL,
  `country` varchar(2000) NOT NULL,
  `package1` varchar(2000) NOT NULL,
  `package2` varchar(2000) NOT NULL,
  `package3` varchar(2000) NOT NULL,
  `package4` varchar(2000) NOT NULL,
  `package5` varchar(2000) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `about_country` varchar(7000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discover_country`
--

INSERT INTO `discover_country` (`id`, `country`, `package1`, `package2`, `package3`, `package4`, `package5`, `image`, `about_country`) VALUES
(44, 'Turkey', 'Package turkey1', 'Package turkey2', 'Package turkey3', 'Package turkey4', 'Package turkey5', 'images/1497955967luxury.jpg', 'Recognized as the \"Land of Kings\" and having sheer variety of experiences to offer.'),
(43, 'Canada', 'Package canada1', 'Package canada2', 'Package canada3', 'Package canada4', 'Package canada5', 'images/1497955917luxury.jpg', 'Recognized as the \"Land of Kings\" and having sheer variety of experiences to offer.'),
(42, 'France', 'Package France1', 'Package France2', 'Package France3', 'Package France4', 'Package France5', 'images/1497950174luxury.jpg', 'Located in the north-western part of the countryLocated in the north-western par'),
(41, 'Goa', 'Package Goa1', 'Package Goa2', 'Package Goa3 ', 'Package Goa4', 'Package Goa5', 'images/luxury.jpg', 'Located in the north-western part of the country.Located in the north-western part of the'),
(29, 'New Zealand', 'Package New Zealand1', 'Package New Zealand2', 'Package New Zealand3 ', 'Package New Zealand4', 'Package New Zealand5', 'images/luxury.jpg', 'Recognized as the \"Land of Kings\" and having sheer variety of experiences to offer. \r\n							');

-- --------------------------------------------------------

--
-- Table structure for table `discover_india`
--

CREATE TABLE `discover_india` (
  `id` int(225) NOT NULL,
  `city_name` varchar(2000) NOT NULL,
  `package1` varchar(2000) NOT NULL,
  `package2` varchar(2000) NOT NULL,
  `package3` varchar(2000) NOT NULL,
  `package4` varchar(2000) NOT NULL,
  `package5` varchar(2000) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `about_city` varchar(7000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discover_india`
--

INSERT INTO `discover_india` (`id`, `city_name`, `package1`, `package2`, `package3`, `package4`, `package5`, `image`, `about_city`) VALUES
(11, 'Rajasthan', 'Relish Rajasthan', 'Royal Rajasthan Tour', 'Jaipur & Pushkar Heritage          ', 'Ajmer - Weekend Gate', 'Alluring Rajasthan', 'images/raj2.png', 'Recognized as the \"Land of Kings\" and having sheer variety of experiences to offer, Rajasthan is the largest state of India located on the northwestern side and is one of India\'s most popular tourist destinations.'),
(12, 'Rajasthan', 'Relish Rajasthan', 'Royal Rajasthan Tour', 'Jaipur & Pushkar Heritage', 'Ajmer - Weekend Gate', 'Alluring Rajasthan', 'images/raj1.png', 'Recognized as the \"Land of Kings\" and having sheer variety of experiences to offer, Rajasthan is the largest state of India located on the northwestern side and is one of India\'s most popular tourist destinations.'),
(24, 'Rajasthan', 'Relish Rajasthan', 'Royal Rajasthan Tour', 'Jaipur & Pushkar Heritage', 'Ajmer - Weekend Gate', 'Alluring Rajasthan', 'images/1497094033raj3.jpg', 'Recognized as the \"Land of Kings\" and having sheer variety of experiences to offer, Rajasthan is the largest state of India located on the northwestern side and is one of India\'s most popular tourist destinations.');

-- --------------------------------------------------------

--
-- Table structure for table `inclusions`
--

CREATE TABLE `inclusions` (
  `id` int(225) NOT NULL,
  `image1` varchar(2000) NOT NULL,
  `image2` varchar(2000) NOT NULL,
  `image3` varchar(2000) NOT NULL,
  `detail1` varchar(5000) NOT NULL,
  `detail2` varchar(5000) NOT NULL,
  `detail3` varchar(5000) NOT NULL,
  `package_name` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inclusions`
--

INSERT INTO `inclusions` (`id`, `image1`, `image2`, `image3`, `detail1`, `detail2`, `detail3`, `package_name`) VALUES
(1, 'images/raj2.png', 'images/raj2.png', 'images/raj2.png', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling .', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling experience.', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling experience.', 'Relish Rajasthan'),
(5, 'images/1498715250rajasthan1.jpg', 'images/1498715250rajasthan1.jpg', 'images/1498715250rajasthan1.jpg', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, whic', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, whic', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, whic', 'Royal Rajasthan Tour');

-- --------------------------------------------------------

--
-- Table structure for table `international_attractions`
--

CREATE TABLE `international_attractions` (
  `id` int(225) NOT NULL,
  `image1` varchar(2000) NOT NULL,
  `image2` varchar(2000) NOT NULL,
  `image3` varchar(2000) NOT NULL,
  `detail1` varchar(5000) NOT NULL,
  `detail2` varchar(5000) NOT NULL,
  `detail3` varchar(5000) NOT NULL,
  `package_name` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `international_attractions`
--

INSERT INTO `international_attractions` (`id`, `image1`, `image2`, `image3`, `detail1`, `detail2`, `detail3`, `package_name`) VALUES
(1, 'images/1498028271raj1.png', 'images/1498028271raj1.png', 'images/1498028271raj1.png', 'Goa is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Goa is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Goa is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Package Goa1'),
(2, 'images/1498029757raj1.png', 'images/1498029757raj1.png', 'images/1498029757raj1.png', 'New Zealand is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'New Zealand is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'New Zealand is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Package New Zealand1');

-- --------------------------------------------------------

--
-- Table structure for table `international_destination`
--

CREATE TABLE `international_destination` (
  `id` int(225) NOT NULL,
  `image1` varchar(2000) NOT NULL,
  `image2` varchar(2000) NOT NULL,
  `image3` varchar(2000) NOT NULL,
  `detail1` varchar(5000) NOT NULL,
  `detail2` varchar(5000) NOT NULL,
  `detail3` varchar(5000) NOT NULL,
  `package_name` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `international_destination`
--

INSERT INTO `international_destination` (`id`, `image1`, `image2`, `image3`, `detail1`, `detail2`, `detail3`, `package_name`) VALUES
(2, 'images/raj3.jpg', 'images/raj3.jpg', 'images/raj3.jpg', 'Goa is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Goa is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Goa is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Package Goa1'),
(3, 'images/1498031740raj3.jpg', 'images/1498031740raj3.jpg', 'images/1498031740raj3.jpg', 'New Zealand is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'New Zealand is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'New Zealand  is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Package New Zealand1');

-- --------------------------------------------------------

--
-- Table structure for table `international_inclusions`
--

CREATE TABLE `international_inclusions` (
  `id` int(225) NOT NULL,
  `image1` varchar(2000) NOT NULL,
  `image2` varchar(2000) NOT NULL,
  `image3` varchar(2000) NOT NULL,
  `detail1` varchar(5000) NOT NULL,
  `detail2` varchar(5000) NOT NULL,
  `detail3` varchar(5000) NOT NULL,
  `package_name` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `international_inclusions`
--

INSERT INTO `international_inclusions` (`id`, `image1`, `image2`, `image3`, `detail1`, `detail2`, `detail3`, `package_name`) VALUES
(1, 'images/raj2.png', 'images/raj2.png', 'images/raj2.png', 'Goa is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Goa is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Goa is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Package Goa1'),
(2, 'images/1498030530rajasthan1.jpg', 'images/1498030530rajasthan1.jpg', 'images/1498030530rajasthan1.jpg', 'Goa is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Goa is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Goa is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Package New Zealand1');

-- --------------------------------------------------------

--
-- Table structure for table `international_itinerary`
--

CREATE TABLE `international_itinerary` (
  `id` int(225) NOT NULL,
  `image1` varchar(2000) NOT NULL,
  `image2` varchar(2000) NOT NULL,
  `image3` varchar(2000) NOT NULL,
  `detail1` varchar(5000) NOT NULL,
  `detail2` varchar(5000) NOT NULL,
  `detail3` varchar(5000) NOT NULL,
  `package_name` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `international_itinerary`
--

INSERT INTO `international_itinerary` (`id`, `image1`, `image2`, `image3`, `detail1`, `detail2`, `detail3`, `package_name`) VALUES
(1, 'images/1498027245raj2.png', 'images/1498027245raj2.png', 'images/1498027245raj2.png', 'Goa is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Goa is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Goa is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Package Goa1'),
(2, 'images/1498027344raj2.png', 'images/1498027344raj2.png', 'images/1498027344raj2.png', 'New Zealand is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'New Zealand is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'New ZEaland is Located in the north-western part of the country. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for .', 'Package New Zealand1');

-- --------------------------------------------------------

--
-- Table structure for table `international_package`
--

CREATE TABLE `international_package` (
  `id` int(225) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `package_name` varchar(2000) NOT NULL,
  `day` varchar(2000) NOT NULL,
  `night` varchar(2000) NOT NULL,
  `price` varchar(2000) NOT NULL,
  `about` varchar(2000) NOT NULL,
  `country` varchar(2000) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `international_package`
--

INSERT INTO `international_package` (`id`, `image`, `package_name`, `day`, `night`, `price`, `about`, `country`, `status`) VALUES
(17, 'images/1497956310luxury.jpg', 'Package New Zealand4', '5', '6', '13,0000', 'Located in the north-western part of the country.', 'New Zealand', '0'),
(20, 'images/1497956458raj2.png', 'Package Goa2', '5', '6', '13,0000', 'Located in the north-western part of the country.', 'Goa', '1'),
(23, 'images/luxury.jpg', 'Package New Zealand2', '5', '3', '13,0000', ' Located in the north-western part of the country.							', 'New Zealand', '0'),
(24, 'images/luxury.jpg', 'Package New Zealand3', '5', '3', '13,0000', ' Located in the north-western part of the country.							', 'New Zealand', '0'),
(12, 'images/luxury.jpg', 'Package New Zealand1', '5', '3', '13,0000', ' Located in the north-western part of the country.							', 'New Zealand', '1'),
(14, 'images/1497953180raj2.png', 'Package Goa1', '4', '5', '9,9990', 'Located in the north-western part of the country.', 'Goa', '1'),
(21, 'images/1497953180raj2.png', 'Package Goa3', '4', '5', '9,9990', 'Located in the north-western part of the country.', 'Goa', '0');

-- --------------------------------------------------------

--
-- Table structure for table `international_package_details`
--

CREATE TABLE `international_package_details` (
  `id` int(225) NOT NULL,
  `place1` varchar(2000) NOT NULL,
  `experience1` varchar(2000) NOT NULL,
  `experience2` varchar(2000) NOT NULL,
  `experience3` varchar(2000) NOT NULL,
  `experience4` varchar(2000) NOT NULL,
  `experience5` varchar(2000) NOT NULL,
  `image1` varchar(2000) NOT NULL,
  `image2` varchar(2000) NOT NULL,
  `image3` varchar(2000) NOT NULL,
  `package_name` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `international_package_details`
--

INSERT INTO `international_package_details` (`id`, `place1`, `experience1`, `experience2`, `experience3`, `experience4`, `experience5`, `image1`, `image2`, `image3`, `package_name`) VALUES
(1, 'Panaji,Ponda,Pernem', 'River Rafting', 'Parasailing', 'Parasailing', 'Parasailing', 'River Rafting', 'images/rajasthan1.jpg', 'images/rajasthan1.jpg', 'images/rajasthan1.jpg', 'Package Goa1'),
(2, 'Panaji,Ponda', 'River Rafting', 'Parasailing', 'Parasailing', 'Parasailing', 'River Rafting', 'images/rajasthan1.jpg', 'images/rajasthan1.jpg', 'images/rajasthan1.jpg', 'Package Goa2'),
(3, 'Auckland,Wellington,christchurch', 'Walking And Biking Tour', 'Day Trips', 'Sailing And Water Tours', '', '', 'images/rajasthan1.jpg', 'images/rajasthan1.jpg', 'images/rajasthan1.jpg', 'Package New Zealand1'),
(4, 'Nelson,Wellington,christchurch', 'Walking And Biking Tour', 'Day Trips', 'Sailing And Water Tours', '', '', 'images/rajasthan1.jpg', 'images/rajasthan1.jpg', 'images/rajasthan1.jpg', 'Package New Zealand2');

-- --------------------------------------------------------

--
-- Table structure for table `itinerary`
--

CREATE TABLE `itinerary` (
  `id` int(225) NOT NULL,
  `image1` varchar(2000) NOT NULL,
  `image2` varchar(2000) NOT NULL,
  `image3` varchar(2000) NOT NULL,
  `detail1` varchar(5000) NOT NULL,
  `detail2` varchar(5000) NOT NULL,
  `detail3` varchar(5000) NOT NULL,
  `package_name` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itinerary`
--

INSERT INTO `itinerary` (`id`, `image1`, `image2`, `image3`, `detail1`, `detail2`, `detail3`, `package_name`) VALUES
(1, 'images/raj2.png', 'images/raj2.png', 'images/raj2.png', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for   .', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling experience.', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling experience.', 'Relish Rajasthan'),
(2, 'images/1498714944rajasthan1.jpg', 'images/1498714944rajasthan1.jpg', 'images/1498714944rajasthan1.jpg', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth', 'Royal Rajasthan Tour');

-- --------------------------------------------------------

--
-- Table structure for table `other_package`
--

CREATE TABLE `other_package` (
  `id` int(225) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `package_name` varchar(2000) NOT NULL,
  `day` varchar(2000) NOT NULL,
  `night` varchar(2000) NOT NULL,
  `price` varchar(2000) NOT NULL,
  `about` varchar(2000) NOT NULL,
  `city` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_package`
--

INSERT INTO `other_package` (`id`, `image`, `package_name`, `day`, `night`, `price`, `about`, `city`) VALUES
(20, 'images/1497945776raj2.png', 'Jaipur and Pushkar ', '5', '6', '11,000', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling experience.', 'Rajasthan'),
(18, 'images/1497945728raj2.png', 'Royal Rajasthan Tour', '2', '3', '11,000', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling experience.', 'Rajasthan');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(225) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `package_name` varchar(2000) NOT NULL,
  `day` varchar(2000) NOT NULL,
  `night` varchar(2000) NOT NULL,
  `price` varchar(2000) NOT NULL,
  `about` varchar(2000) NOT NULL,
  `city` varchar(2000) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `image`, `package_name`, `day`, `night`, `price`, `about`, `city`, `status`) VALUES
(8, 'images/1497945728raj2.png', 'Royal Rajasthan Tour', '2', '3', '11,000', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling experience.', 'Rajasthan', '1'),
(9, 'images/1497945776raj2.png', 'Jaipur and Pushkar ', '5', '6', '11,000', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling experience.', 'Rajasthan', '1'),
(10, 'images/1497945832raj1.png', 'Ajmer - Weekend Gate', '4', '5', '13,000', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling experience.', 'Rajasthan', '1'),
(11, 'images/1497945880raj1.png', 'Alluring Rajasthan', '3', '4', '9,000', 'Located in the north-western part of the country, Rajasthan is the largest state of India. It is also home to many important geographical entities like the great Aravalli Ranges, Chambal River and Thar Desert. According to experts, it was once the part of the great Indus Valley Civilisation, which is believed to be probably the oldest civilisation on earth. Come visit this wonderful state, especially its wonderful cities of Mandawa, Bikaner and Jaipur for an enthralling experience.', 'Rajasthan', '0');

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE `package_details` (
  `id` int(225) NOT NULL,
  `place1` varchar(2000) NOT NULL,
  `experience1` varchar(2000) NOT NULL,
  `experience2` varchar(2000) NOT NULL,
  `experience3` varchar(2000) NOT NULL,
  `experience4` varchar(2000) NOT NULL,
  `experience5` varchar(2000) NOT NULL,
  `image1` varchar(2000) NOT NULL,
  `image2` varchar(2000) NOT NULL,
  `image3` varchar(2000) NOT NULL,
  `package_name` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_details`
--

INSERT INTO `package_details` (`id`, `place1`, `experience1`, `experience2`, `experience3`, `experience4`, `experience5`, `image1`, `image2`, `image3`, `package_name`) VALUES
(1, 'Jaipur, Ajmer, Neemrana, Bikaner', 'Camel Rides', 'Desert', 'Foods', 'Baloon Safari', 'Elephant Safari', 'images/rajasthan1.jpg', 'images/rajasthan1.jpg', 'images/rajasthan1.jpg', 'Relish Rajasthan'),
(3, 'Jaipur, Ajmer, Neemrana, Bikaner', 'Camel Rides', 'Desert', 'Foods', 'Baloon Safari', '', 'images/rajasthan1.jpg', 'images/rajasthan1.jpg', 'images/rajasthan1.jpg', 'Royal Rajasthan Tour'),
(4, 'Jaipur, Ajmer, Neemrana, Bikaner', 'Camel Rides', 'Desert', 'Foods', 'Baloon Safari', '', 'images/rajasthan1.jpg', 'images/rajasthan1.jpg', 'images/rajasthan1.jpg', 'Jaipur and Pushkar Heritage');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(225) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `data` varchar(4000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `data`) VALUES
(1, 'Chandler Bing', 'Could I... BE any more happy with this company?'),
(2, 'John Doe', 'One word... WOW!!'),
(3, 'Michael Doe', 'This company is the best. I am so happy with the result!'),
(4, 'Chandler Bing', 'Could I... BE any more happy with this company?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_users`
--
ALTER TABLE `a_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discover_country`
--
ALTER TABLE `discover_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discover_india`
--
ALTER TABLE `discover_india`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inclusions`
--
ALTER TABLE `inclusions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `international_attractions`
--
ALTER TABLE `international_attractions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `international_destination`
--
ALTER TABLE `international_destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `international_inclusions`
--
ALTER TABLE `international_inclusions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `international_itinerary`
--
ALTER TABLE `international_itinerary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `international_package`
--
ALTER TABLE `international_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `international_package_details`
--
ALTER TABLE `international_package_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_package`
--
ALTER TABLE `other_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_details`
--
ALTER TABLE `package_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attractions`
--
ALTER TABLE `attractions`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `a_users`
--
ALTER TABLE `a_users`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `discover_country`
--
ALTER TABLE `discover_country`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `discover_india`
--
ALTER TABLE `discover_india`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `inclusions`
--
ALTER TABLE `inclusions`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `international_attractions`
--
ALTER TABLE `international_attractions`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `international_destination`
--
ALTER TABLE `international_destination`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `international_inclusions`
--
ALTER TABLE `international_inclusions`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `international_itinerary`
--
ALTER TABLE `international_itinerary`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `international_package`
--
ALTER TABLE `international_package`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `international_package_details`
--
ALTER TABLE `international_package_details`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `other_package`
--
ALTER TABLE `other_package`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `package_details`
--
ALTER TABLE `package_details`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
