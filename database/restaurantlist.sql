-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2018-11-20 18:13:19
-- 服务器版本： 10.1.36-MariaDB
-- PHP 版本： 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `restaurantlist`
--

-- --------------------------------------------------------

--
-- 表的结构 `restaurant`
--

CREATE TABLE `restaurant` (
  `Code` varchar(10) DEFAULT NULL,
  `Name` varchar(30) NOT NULL,
  `Cuisine` varchar(10) DEFAULT NULL,
  `District` varchar(20) DEFAULT NULL,
  `Price` varchar(10) DEFAULT NULL,
  `Weighting` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `restaurant`
--

INSERT INTO `restaurant` (`Code`, `Name`, `Cuisine`, `District`, `Price`, `Weighting`) VALUES
(NULL, 'California Pizza Kitchen', 'Western', 'Whampoa', '$51-100', 5),
('V44nGxA', 'Delifrance', 'France', 'Tsim Sha Tsui', '$51-100', 5),
(NULL, 'Dondonya', 'Japanese', 'Whampoa', '$51-100', 5),
('vAYTNlN', 'Fat Girl Chicken', 'Chinese', 'Hung Hom', '$51-100', 5),
('v81I1ST', 'Genki Sushi', 'Japanese', 'Tsim Sha Tsui', '$101-200', 5),
(NULL, 'Genki Sushi WP', 'Japanese', 'Whampoa', '$101-200', 5),
(NULL, 'Gyu-Kaku', 'Japanese', 'Whampoa', '$201-400', 5),
('wI1zwP8', 'Iron Cow', 'Taiwan', 'Tsim Sha Tsui', '$51-100', 5),
(NULL, 'Jolibee', 'Western', 'Whampoa', '<$50', 5),
(NULL, 'Makoto Ramen', 'Japanese', 'Whampoa', '$51-100', 5),
(NULL, 'Mcdonald ETST', 'Western', 'Tsim Sha Tsui', '<$50', 5),
(NULL, 'McDonald HH', 'Western', 'Hung Hom', '<$50', 5),
(NULL, 'McDonald WP', 'Western', 'Whampoa', '<50', 5),
('QqJ21We', 'Mikawaya', 'Japanese', 'Hung Hom', '$51-100', 5),
(NULL, 'Mou Mou Club', 'Japanese', 'Whampoa', '$101-200', 5),
(NULL, 'Nakayo Shokudou', 'Japanese', 'Whampoa', '$51-100', 5),
(NULL, 'Noodle House Ippei-An', 'Japanese', 'Tsim Sha Tsui', '$51-100', 5),
(NULL, 'Outback Steakhouse', 'Western', 'Whampoa', '$201-400', 5),
('OqPC5Gd', 'Owariya', 'Japanese', 'Hung Hom', '$51-100', 5),
('I1Yn1S2', 'Pastaholic', 'Italian', 'Hung Hom', '$51-100', 5),
(NULL, 'Pepper Lunch', 'Japanese', 'Whampoa', '$51-100', 5),
(NULL, 'Pizza Hut', 'Italian', 'Whampoa', '$51-100', 5),
('WtPZmGE', 'Saizeiya WP', 'Italian', 'Whampoa', '<$50', 5),
(NULL, 'Soup plus', 'Chinese', 'Whampoa', '$51-100', 5),
('qHsKktR', 'Sushi Daidai', 'Japanese', 'Hung Hom', '$51-100', 5),
(NULL, 'Tam Chai SamGor Mixian ETST', 'Chinese', 'Tsim Sha Tsui', '$51-100', 5),
(NULL, 'Tam Chai SamGor Mixian WP', 'Chinese', 'Whampoa', '$51-100', 5),
('cuaY3S8', 'Tam Chai TST', 'Chinese', 'Tsim Sha Tsui', '$51-100', 5),
(NULL, 'TeaWood', 'Taiwan', 'Whampoa', '$51-100', 5),
('ls5g8Tu', 'Tenno Ramen', 'Japanese', 'Hung Hom', '$51-100', 5),
('81NXzay', 'The Sesame', 'Dessert', 'Hung Hom', '<$50', 5),
(NULL, 'Yumai', 'Chinese', 'Hung Hom', '$51-100', 5);

--
-- 转储表的索引
--

--
-- 表的索引 `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
