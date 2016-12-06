-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 14 okt 2016 om 13:27
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `band`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `informatie` varchar(255) CHARACTER SET utf8 NOT NULL,
  `datum` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden geëxporteerd voor tabel `about`
--

INSERT INTO `about` (`id`, `titel`, `image`, `informatie`, `datum`) VALUES
(1, 'Brandon Beck', 'http://images.eurogamer.net/2013/articles/1/7/3/2/4/4/3/riots-brandon-beck-to-keynote-2015-dice-summit-1421942152647.jpg/EG11/thumbnail/360x200/', 'Brandon Beck is a co-founder of Riot games, a company that has been working in game making. Beck has become a famous name in the gaming world with his company making numerous games in a year. Riot''s most popular game is League of Legend which has not only', '2016-10-13'),
(2, 'Marc Merrill', 'http://vignette2.wikia.nocookie.net/leagueoflegends/images/c/c1/Marc_Merrill.jpg/revision/latest?cb=20140716213652.jpg', 'Prior to co-founding Riot, Marc worked as a corporate marketing executive at the Business-to-Business media firm Advanstar Communications. Marc also held roles in finance at Merrill Lynch and US Bancorp.', '2016-10-13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
