-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 17 Haz 2021, 20:10:52
-- Sunucu sürümü: 10.3.22-MariaDB-log
-- PHP Sürümü: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `285005`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `baklavalar`
--

CREATE TABLE `baklavalar` (
  `baklavaıd` int(10) NOT NULL,
  `baklavaadi` varchar(50) NOT NULL,
  `baklavafiyati` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `baklavalar`
--

INSERT INTO `baklavalar` (`baklavaıd`, `baklavaadi`, `baklavafiyati`) VALUES
(1, 'Cevizli Baklava', '120 TL'),
(2, 'Midye Baklava', '90 TL'),
(3, 'Havuç Dilimi Baklava', '100 TL'),
(4, 'Fıstıklı Baklava', '110 TL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `börekler`
--

CREATE TABLE `börekler` (
  `börekıd` int(10) NOT NULL,
  `börekadi` varchar(50) NOT NULL,
  `börekfiyati` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `börekler`
--

INSERT INTO `börekler` (`börekıd`, `börekadi`, `börekfiyati`) VALUES
(1, 'Sebzeli Börek', '30 TL'),
(2, 'Kıymalı Börek', '35 TL'),
(3, 'Patatesli Börek', '25 TL'),
(4, 'Peynirli Börek', '23 TL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icecekler`
--

CREATE TABLE `icecekler` (
  `icecekıd` int(10) NOT NULL,
  `icecekadi` varchar(50) NOT NULL,
  `icecekfiyati` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `icecekler`
--

INSERT INTO `icecekler` (`icecekıd`, `icecekadi`, `icecekfiyati`) VALUES
(1, 'Limonata', '15 TL'),
(2, 'Portakal Suyu', '15 TL'),
(3, 'Kahve', '18 TL'),
(4, 'Vişne Suyu', '15 TL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kekler`
--

CREATE TABLE `kekler` (
  `kekıd` int(10) NOT NULL,
  `kekadi` varchar(50) NOT NULL,
  `kekfiyati` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kekler`
--

INSERT INTO `kekler` (`kekıd`, `kekadi`, `kekfiyati`) VALUES
(1, 'Çikolatalı Kek', '15 TL'),
(2, 'Havuçlu Kek', '17 TL'),
(3, 'Tarçınlı Kek', '20 TL'),
(4, 'Üzümlü Kek', '16 TL'),
(5, 'Sade Kek', '15 TL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurabiyeler`
--

CREATE TABLE `kurabiyeler` (
  `kurabiyeıd` int(10) NOT NULL,
  `kurabiyeadi` varchar(50) NOT NULL,
  `kurabiyefiyati` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kurabiyeler`
--

INSERT INTO `kurabiyeler` (`kurabiyeıd`, `kurabiyeadi`, `kurabiyefiyati`) VALUES
(1, 'Çikolatalı Kurabiye', '8 TL'),
(2, 'Tuzlu Kurabiye', '6 TL'),
(3, 'Bademli Kurabiye', '10 TL'),
(4, 'Cevizli Kurabiye', '8 TL'),
(5, 'Çikolatalı Kurabiye', '8 TL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pastalar`
--

CREATE TABLE `pastalar` (
  `pastaıd` int(10) NOT NULL,
  `pastaadi` varchar(50) NOT NULL,
  `pastafiyati` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `pastalar`
--

INSERT INTO `pastalar` (`pastaıd`, `pastaadi`, `pastafiyati`) VALUES
(1, 'Meyveli Pasta', '80 TL'),
(2, 'Çikolatalı Pasta', '75 TL'),
(6, 'Çilekli Pasta', '65 TL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `uyeıd` int(10) NOT NULL,
  `uyeadi` varchar(50) NOT NULL,
  `uyesoyadi` varchar(50) NOT NULL,
  `uyemail` varchar(50) NOT NULL,
  `uyesifre` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uyeıd`, `uyeadi`, `uyesoyadi`, `uyemail`, `uyesifre`) VALUES
(1, 'elif', 'basaran', 'elif@gmail.com', 12345),
(2, 'elif1', 'elif', 'elif', 1235),
(3, 'eliff', 'elif', 'elif', 1111),
(4, 'ibrahim', 'gulsen', 'ibrahim@gmail.com', 12345),
(5, 'Merve', 'Yavuz', 'merve25yavuz16@gmail.com', 123456789),
(6, 'elif', 'basaran', 'elif1@gmail.com', 9876),
(7, 'elif', 'elif', 'elif1@gmail.com', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `baklavalar`
--
ALTER TABLE `baklavalar`
  ADD PRIMARY KEY (`baklavaıd`);

--
-- Tablo için indeksler `börekler`
--
ALTER TABLE `börekler`
  ADD PRIMARY KEY (`börekıd`);

--
-- Tablo için indeksler `icecekler`
--
ALTER TABLE `icecekler`
  ADD PRIMARY KEY (`icecekıd`);

--
-- Tablo için indeksler `kekler`
--
ALTER TABLE `kekler`
  ADD PRIMARY KEY (`kekıd`);

--
-- Tablo için indeksler `kurabiyeler`
--
ALTER TABLE `kurabiyeler`
  ADD PRIMARY KEY (`kurabiyeıd`);

--
-- Tablo için indeksler `pastalar`
--
ALTER TABLE `pastalar`
  ADD PRIMARY KEY (`pastaıd`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`uyeıd`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `baklavalar`
--
ALTER TABLE `baklavalar`
  MODIFY `baklavaıd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `börekler`
--
ALTER TABLE `börekler`
  MODIFY `börekıd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `icecekler`
--
ALTER TABLE `icecekler`
  MODIFY `icecekıd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `kekler`
--
ALTER TABLE `kekler`
  MODIFY `kekıd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `kurabiyeler`
--
ALTER TABLE `kurabiyeler`
  MODIFY `kurabiyeıd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `pastalar`
--
ALTER TABLE `pastalar`
  MODIFY `pastaıd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uyeıd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
