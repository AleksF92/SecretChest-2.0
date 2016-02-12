-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12. Feb, 2016 20:48 p.m.
-- Server-versjon: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `secretchest_data`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linkId` text NOT NULL,
  `thumbnail` text NOT NULL,
  `title` text NOT NULL,
  `intro` text NOT NULL,
  `content` text NOT NULL,
  `written` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `writtenBy` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dataark for tabell `article`
--

INSERT INTO `article` (`id`, `linkId`, `thumbnail`, `title`, `intro`, `content`, `written`, `writtenBy`) VALUES
(1, 'brace-yourselves-overwatch-is-comming', 'img/article/overwatch-thumbnail.png', 'Brace yourselves... Overwatch is comming!', 'Vi gleder oss alle til Overwatch. Det er jo tross alt Blizzard!</br>Les her hva vi mener om spillet...', '', '2016-02-06 20:01:19', 1),
(2, 'rise-of-the-tomb-raider', 'img/article/rise-of-the-tomb-raider-thumbnail.png', 'Rise of the Tomb Raider', 'Denne gangen har Square Enix gått sammen med Nvidia istedenfor AMD...', '', '2016-02-06 20:01:19', 1),
(3, 'har-du-en-rancher-i-blodet', 'img/article/slime-rancher-thumbnail.png', 'Har du en Rancher i blodet?', 'Av alle ideer så er dette den mest GOSSINE på lenge!', '', '2016-02-06 20:01:19', 1),
(4, 'na-kommer-oculus-rift', 'img/article/oculus-thumbnail.png', 'Nå kommer Oculus Rift!', 'Sammen med selve riften får du også følgende...', '', '2016-02-06 20:01:19', 1),
(5, 'hearthstone-far-en-reset', 'img/article/hearthstone-thumbnail.png', 'Hearthstone får en reset!', 'Nå skal mange kort i Hearthstone fjernes fra normalt spill. Dette er for å gi en ny start og ferskt innhold i spillet.</br>Les mer vi tror det påvirker spillet...', '', '2016-02-06 20:01:19', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginName` text NOT NULL,
  `loginPassword` text NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dataark for tabell `user`
--

INSERT INTO `user` (`id`, `loginName`, `loginPassword`, `name`) VALUES
(1, '0', '0', 'Aleksander Fimreite'),
(2, '0', '0', 'Kristian Kammersten'),
(3, '0', '0', 'Stig Kenneth Limmesand'),
(4, '0', '0', 'Kristian Larsen');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
