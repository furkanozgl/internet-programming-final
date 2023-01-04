-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 04 Oca 2023, 14:28:51
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uyelik`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `parola` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `kullanici_adi`, `email`, `parola`) VALUES
(1, 'sabirterzi', 'sabir.asdad@gmail.com', '123456'),
(13, 'arifakça', 'akfresda@gmail.com', '$2y$10$cgYUHCWEvGngBhXdfB'),
(21, 'furkanozgl', 'furkanozgul202@gmail.com', '$2y$10$59qVAlelZ1oaIicUxl'),
(22, 'asdfgh', 'asdfgh@m.c', '$2y$10$pQFfYLPU1l5xG.JvGT'),
(23, 'ÖmerEnes', 'akyzomerenes@gmail.com', '$2y$10$0RF0bnoTtDAGUwClo3'),
(24, 'fazılbaba', 'fazil06erdogan@gmail.com', '$2y$10$/cpTLfvm4CNVy0Nh8h'),
(25, 'furkan11', 'ozdmrblog@gmail.com', '$2y$10$KUJmZ3w7J3A1FIEPUG'),
(26, 'beyzaakay', 'ejaghdf@gmail.com', '$2y$10$snKoDTymY1yPd1/yNO'),
(27, 'sevim1234', 'a@gmail.com', '$2y$10$zdJ1OVMzLF357eI19Y');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullanici_adi` (`kullanici_adi`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
