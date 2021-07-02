-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 09 Haz 2021, 15:15:25
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
-- Veritabanı: `265077`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `id` int(11) UNSIGNED NOT NULL,
  `adisoyadi` varchar(255) NOT NULL,
  `yorum` text NOT NULL,
  `onaydurum` int(1) NOT NULL,
  `tarihdamgasi` varchar(255) NOT NULL,
  `tarih` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `adisoyadi`, `yorum`, `onaydurum`, `tarihdamgasi`, `tarih`) VALUES
(34, 'deneme', 'deneme msg', 1, '1623235815', '09.06.2021 10:50:15'),
(35, 'ahmet mehmet', 'guzel ama gelistirilmesi gerekiyor', 1, '1623235833', '09.06.2021 10:50:33'),
(36, 'mehmet karakacan', 'sevgili günlük', 1, '1623235879', '09.06.2021 10:51:19'),
(37, 'khontkar a.k.a traplord', 'cok ii ekran bleedat', 1, '1623235898', '09.06.2021 10:51:38'),
(38, 'Kürşat', 'Tebrik ederim.', 1, '1623235945', '09.06.2021 10:52:25'),
(39, 'lost_in_house', 'güzel', 1, '1623235960', '09.06.2021 10:52:40'),
(41, 'kul_deneme', 'deneme mesajı', 1, '1623240499', '09.06.2021 15:08:19');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
