-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 2 月 07 日 14:52
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE IF NOT EXISTS `gs_an_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `naiyou`, `indate`) VALUES
(3, '佐藤あああああ', 'test3@test.jpdsada', '内容adsadas', '2017-11-28 11:31:50'),
(4, '佐々木', 'test4@test.jp', '内容木', '2017-11-28 11:31:50'),
(5, '鏑木dsadsa', 'test5@test.jp', '内容adsad', '2017-11-28 11:31:50'),
(6, 'TEST', 'test@test.jp', '内容１', '2017-11-28 12:20:28'),
(8, 'a', 'd', 'b', '2017-11-30 17:17:39'),
(9, 'aaaaa', 'vvvvv', 'bbbbb', '2017-11-30 17:19:03'),
(10, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:22'),
(11, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:22'),
(12, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:24'),
(13, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:25'),
(14, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:26'),
(15, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:26'),
(16, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:27'),
(17, 'aaaaaa', 'dddddddd', 'gg', '2017-11-30 17:20:27'),
(18, 'あいうえお', 'さしすせそ', 'ABC', '2017-11-30 17:24:40'),
(19, 'やまざき', 'test@test.jp', 'kyou \r\n', '2017-12-05 09:25:58'),
(21, 'Yamazaki Daisuke', 'php.yamazaki@gmail.com', 'aaaaaaa', '2017-12-06 11:31:54'),
(22, 'Yamazaki Daisuke', 'php.yamazaki@gmail.com', 'aaaaaaaaaa', '2017-12-06 11:32:36'),
(23, 'Yamazaki Daisuke', 'ddddddd', 'dddddddddd', '2017-12-06 11:32:59'),
(24, 'yamaza', 'php.yamazaki@gmail.com', 'aaaaaa', '2017-12-07 12:32:44'),
(25, 'aaaaaa', 'php.yamazaki@gmail.com', 'aaaaaaaa', '2017-12-07 12:33:00'),
(26, 'aaaa', 'php.yamazaki@gmail.com', 'qqq', '2017-12-07 12:34:04'),
(27, 'Yamazaki Daisuke', 'php.yamazaki@gmail.com', 'aaaaa', '2017-12-07 12:35:11'),
(28, 'Yamazaki Daisuke', 'php.yamazaki@gmail.com', 'aaaa', '2017-12-07 12:36:03'),
(29, 'sssssss', 'dddddddddddd', 'sssssssssssssss', '2017-12-07 16:49:50'),
(30, 'aaaaa', 'ddddd', 'dddd', '2017-12-07 16:51:36'),
(31, 'ssss', 'dddd', 'ssssss', '2017-12-07 16:52:12');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(12) NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `com` text COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `title`, `url`, `com`, `time`) VALUES
(1, 'tfffffffitle11111aaadasdasada', 'urlffffff111111111aaadsasadadsadsa', 'コメントffffff１１１１１１aaadasdaadsdaa', '2018-01-29 22:20:23'),
(14, 'タイトル２sada', 'url2222222dsadaasad', 'kome¥¥¥¥¥コメント２２２２２２２２２２dasadsasda', '2018-01-29 22:49:58'),
(15, 'タイトル２dasda', 'url2222222dadsa', 'コメント２２２２２２２２２２dasd', '2018-01-29 22:50:29'),
(16, 'aa', 'aaa', 'aaa', '2018-02-07 21:55:32');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE IF NOT EXISTS `gs_user_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, '管理者', 'admin', 'admin', 1, 0),
(2, 'k-oohira', 'k-oohira', 'k-oohira', 0, 0),
(3, 'title111aaa', 'k-oohiraaa', '1', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
