-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26. Feb, 2016 16:53 p.m.
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
  `linkId` text COLLATE utf8_bin NOT NULL,
  `thumbnail` text COLLATE utf8_bin NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `intro` text COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `written` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `writtenBy` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dataark for tabell `article`
--

INSERT INTO `article` (`id`, `linkId`, `thumbnail`, `title`, `intro`, `content`, `written`, `writtenBy`) VALUES
(1, 'brace-yourselves-overwatch-is-comming', 'img/article/overwatch-thumbnail.png', 'Brace yourselves... Overwatch is comming!', 'Vi gleder oss alle til Overwatch. Det er jo tross alt Blizzard!</br>Les her hva vi mener om spillet...', '', '2016-02-06 20:01:19', 1),
(2, 'rise-of-the-tomb-raider', 'img/article/rise-of-the-tomb-raider-thumbnail.png', 'Rise of the Tomb Raider', 'Denne gangen har Square Enix gått sammen med Nvidia istedenfor AMD...', '', '2016-02-06 20:01:19', 1),
(3, 'har-du-en-rancher-i-blodet', 'img/article/slime-rancher-thumbnail.png', 'Har du en Rancher i blodet?', 'Av alle ideer så er dette den mest GOSSINE på lenge!', '', '2016-02-06 20:01:19', 1),
(4, 'na-kommer-oculus-rift', 'img/article/oculus-thumbnail.png', 'N&aring; kommer Oculus Rift!', 'Sammen med selve riften får du også følgende...', '', '2016-02-06 20:01:19', 1),
(5, 'hearthstone-far-en-reset', 'img/article/hearthstone-thumbnail.png', 'Hearthstone får en reset!', 'Nå skal mange kort i Hearthstone fjernes fra normalt spill. Dette er for å gi en ny start og ferskt innhold i spillet.</br>Les mer vi tror det påvirker spillet...', '<p>Virtual Reality har i de siste årene fått mye hype!<br>\r\nI starten av 2015 fikk også YouTube støtte for 360-graders videoer, hvor du kan snu kameraet rundt som du vil. Dette er noe vi ikke så for oss at ville bli støttet på YouTube før om lang tid. Og har heller ikke fått den annonseringen det fortjener…</p>\r\n<p>Men nå på Comic-Con 2015 har Legendary, produsenten av bla. Warcraft-filmen som vi alle gleder oss til, gitt oss en snikktitt inn i den nydelige fremtiden! Nedenfor er et klipp som er inspirert av Warcraft-filmen. Hvor du flyr over byen Stormwind og kan kikke deg rundt med å holde museknappen inne.<br>\r\n<strong>(Anbefaler å prøve å se denne videoen på telefonen din hvis du har Android eller iOS for da kan du nemlig bare bevege den rundt deg for å bytte vinkel. Helt magisk!)</strong></p>\r\n<p><span class="embed-youtube" style="text-align:center; display: block;"><iframe class="youtube-player" type="text/html" width="800" height="480" src="http://www.youtube.com/embed/K_J8k43gUhY?version=3&rel=1&fs=1&autohide=2&showsearch=0&showinfo=1&iv_load_policy=1&wmode=transparent" frameborder="0" allowfullscreen="true"></iframe></span></p>\r\n<p>Vi venter fortsatt i spenning på den offisielle traileren til Warcraft-filmen, men siden det meste av produksjonen av filmen faktisk er ferdig er det ikke sikkert det er så utrolig lenge før vi får se noe til den. (Selv om magefølelsen sier at dette kanskje er noe de har lyst til å vente med til årets BlizzCon!)</p>', '2016-02-06 20:01:19', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginName` text CHARACTER SET latin1 NOT NULL,
  `loginPassword` text CHARACTER SET latin1 NOT NULL,
  `name` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

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
