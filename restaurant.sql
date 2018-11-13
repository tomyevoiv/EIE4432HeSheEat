-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2018-11-13 09:51:20
-- 服务器版本: 5.6.14
-- PHP 版本: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `restaurantlist`
--

-- --------------------------------------------------------

--
-- 表的结构 `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `Code` varchar(10) DEFAULT NULL,
  `Name` varchar(20) NOT NULL,
  `Cuisine` varchar(20) DEFAULT NULL,
  `District` varchar(10) DEFAULT NULL,
  `Price` varchar(10) DEFAULT NULL,
  `Weighting` int(11) DEFAULT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `restaurant`
--

INSERT INTO `restaurant` (`Code`, `Name`, `Cuisine`, `District`, `Price`, `Weighting`) VALUES
(NULL, 'Fat Girl Chicken', 'Chinese cuisine', 'Hung Hum', '$50-100', 5),
(NULL, 'Mikawaya', 'Japanese cuisine', 'Hung Hum', '$50-100', 5),
(NULL, 'Saizeiya Whompoa', 'Italian cuisine', 'Hung Hum', '<$50', 5),
(NULL, 'Tenno Ramen', 'Japanese cuisine', 'Hung Hum', '$50-100', 5),
(NULL, 'The Sesame', 'Dessert', 'Hung Hum', '<$50', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
