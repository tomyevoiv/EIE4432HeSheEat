-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2018-11-27 09:42:04
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
  `Name` varchar(30) NOT NULL,
  `Cuisine` varchar(10) DEFAULT NULL,
  `District` varchar(20) DEFAULT NULL,
  `Price` varchar(10) DEFAULT NULL,
  `Weighting` int(11) DEFAULT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `restaurant`
--

INSERT INTO `restaurant` (`Code`, `Name`, `Cuisine`, `District`, `Price`, `Weighting`) VALUES
('CD3HiHN', 'California Pizza Kitchen WP', 'Western', 'Whampoa', '$51-100', 5),
('V44nGxA', 'Delifrance ETST', 'France', 'Tsim Sha Tsui', '$51-100', 5),
('QRTaVHK', 'Dondonya WP', 'Japanese', 'Whampoa', '$51-100', 5),
('vAYTNlN', 'Fat Girl Chicken', 'Chinese', 'Hung Hom', '$51-100', 5),
('v81I1ST', 'Genki Sushi ETST', 'Japanese', 'Tsim Sha Tsui', '$101-200', 5),
('aCoipml', 'Genki Sushi WP', 'Japanese', 'Whampoa', '$101-200', 5),
('IYKwJ10', 'Gyu-Kaku WP', 'Japanese', 'Whampoa', '$201-400', 5),
('wI1zwP8', 'Iron Cow ETST', 'Taiwan', 'Tsim Sha Tsui', '$51-100', 5),
('IVAejaz', 'Jolibee WP', 'Western', 'Whampoa', '<$50', 5),
('IzAsatf', 'Makoto Ramen WP', 'Japanese', 'Whampoa', '$51-100', 5),
('10fXJ2o', 'Mcdonald ETST', 'Western', 'Tsim Sha Tsui', '<$50', 5),
('qQ4HjQp', 'McDonald HH', 'Western', 'Hung Hom', '<$50', 5),
('sxIWxaK', 'McDonald WP', 'Western', 'Whampoa', '<50', 5),
('QqJ21We', 'Mikawaya', 'Japanese', 'Hung Hom', '$51-100', 5),
('ccCzHf8', 'Mou Mou Club WP', 'Japanese', 'Whampoa', '$101-200', 5),
('vKK6RBw', 'Nakayo Shokudou WP', 'Japanese', 'Whampoa', '$51-100', 5),
('I6Wjj2f', 'Noodle House Ippei-An ETST', 'Japanese', 'Tsim Sha Tsui', '$51-100', 5),
('C1lAjEC', 'Outback Steakhouse WP', 'Western', 'Whampoa', '$201-400', 5),
('OqPC5Gd', 'Owariya', 'Japanese', 'Hung Hom', '$51-100', 5),
('I1Yn1S2', 'Pastaholic HH', 'Italian', 'Hung Hom', '$51-100', 5),
('ljwkPjL', 'Pepper Lunch WP', 'Japanese', 'Whampoa', '$51-100', 5),
('6kFVrX4', 'Pizza Hut WP', 'Italian', 'Whampoa', '$51-100', 5),
('WtPZmGE', 'Saizeiya WP', 'Italian', 'Whampoa', '<$50', 5),
('RThSVgo', 'Soup plus WP', 'Chinese', 'Hung Hom', '$51-100', 5),
('qHsKktR', 'Sushi Daidai', 'Japanese', 'Hung Hom', '$51-100', 5),
('CbIa9pA', 'Tam Chai SamGor Mixian ETST', 'Chinese', 'Tsim Sha Tsui', '$51-100', 5),
('HW82iqb', 'Tam Chai SamGor Mixian WP', 'Chinese', 'Whampoa', '$51-100', 5),
('cuaY3S8', 'Tam Chai TST', 'Chinese', 'Tsim Sha Tsui', '$51-100', 5),
('1gITuXC', 'TeaWoodWP', 'Taiwan', 'Whampoa', '$51-100', 5),
('ls5g8Tu', 'Tenno Ramen', 'Japanese', 'Hung Hom', '$51-100', 5),
('81NXzay', 'The Sesame', 'Dessert', 'Hung Hom', '<$50', 5),
('Wv2G8V1', 'Yumai HH', 'Chinese', 'Whampoa', '$51-100', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
