-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Ağu 2023, 05:50:27
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `landing`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun1`
--

CREATE TABLE IF NOT EXISTS `urun1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ad` varchar(300) NOT NULL,
  `aciklama` varchar(300) NOT NULL,
  `oran` varchar(10) NOT NULL,
  `satir1` varchar(50) NOT NULL,
  `satir2` varchar(50) NOT NULL,
  `satir3` varchar(50) NOT NULL,
  `satir4` varchar(50) NOT NULL,
  `satir5` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Tablo döküm verisi `urun1`
--

INSERT INTO `urun1` (`id`, `ad`, `aciklama`, `oran`, `satir1`, `satir2`, `satir3`, `satir4`, `satir5`) VALUES
(1, 'Razer Gold', 'En iyi fiyat garantisi', '75', 'anında', 'güvenli', 'pratik', 'sizi üzmez', 'bla bla'),
(2, 'Axess', 'Axess çip bozum acıklama', '56', 'satir1', 'satir2', 'satir3', 'satir4', 'satir5'),
(3, 'Maximus', 'Maximus Açıklama', '75', 'satir1', 'satir2', 'satir3', 'satir4', 'satir5'),
(4, 'Ziraat', 'Ziraat Açıklama', '67', 'satir1', 'satir2', 'satir3', 'satir4', 'satir5'),
(5, 'Bonus', 'Bonus Açıklama', '54', 'satir1', 'satir2', 'satir3', 'satir4', 'satir5'),
(11, 'en para', 'ürün açıklama', '44', 'satir1', 'satir2', 'satir3', 'satir4', 'satir5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
