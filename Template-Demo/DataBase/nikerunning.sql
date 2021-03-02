-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Mar 2021, 02:40:31
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `nikerunning`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_Kullanici_Adi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `admin_sifre` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `admin_yetki` enum('0','1') COLLATE utf8mb4_turkish_ci NOT NULL DEFAULT '0',
  `admin_email` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_Kullanici_Adi`, `admin_sifre`, `admin_yetki`, `admin_email`) VALUES
(2, 'bahadir', 'nural', '0', 'dadq@gmail.com'),
(3, 'bahadir', 'nural', '0', 'ds@gmail.com'),
(6, 'baha', '123456', '0', 'baha@gmail.com'),
(7, 'BahadirNural', '1234', '0', 'h.bahadirnural@gmail.com'),
(8, 'meralnural', '123456', '0', 'meralnural@gmail.com'),
(9, 'mecit', '123456', '0', 'mecit@gmail.com'),
(10, 'selim', '81dc9bdb52d04dc20036dbd8313ed055', '0', 'selim@gmail.com'),
(11, 'mna', '81dc9bdb52d04dc20036dbd8313ed055', '0', 'mn@gmail.com'),
(12, 'Bahadirr', '81dc9bdb52d04dc20036dbd8313ed055', '0', 'bahad@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `site_adi` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_aciklama` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `telif_hakki` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `telif_url` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_telefon` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_bg` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_id` int(50) NOT NULL,
  `site_email` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_twitter` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_instagram` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_youtube` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_github` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_reddit` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_artstation` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_adres` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  `copyright_isim` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL DEFAULT 'oldthiefstudio'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`site_adi`, `site_aciklama`, `telif_hakki`, `telif_url`, `site_telefon`, `site_bg`, `site_id`, `site_email`, `site_twitter`, `site_instagram`, `site_youtube`, `site_github`, `site_reddit`, `site_artstation`, `site_adres`, `title`, `copyright_isim`) VALUES
('Nike Running', 'Best Sport & Gym Marketplace', 'Copyright © 2021', 'www.oldthiefstudio.com', '0850 000 00 00', 'img/background.jpg', 0, '', 'twitter.com/oldthiefstudio', 'instagram/oldthiefstudio', 'youtube/oldthiefstudio.com', 'github/latrodect', 'reddit/oldthiefstudio.com', 'artstation/oldthiefstudio.com', 'OldThiefStudioAtatürk Mah. 895 Sokak 16/1 No:15İzmir / Bornova', 'Nike Running', 'Old Thief Studio'),
('Nike Running', 'Best Sport & Gym Marketplace', 'Copyright © 2021', 'www.oldthiefstudio.com', '0850 000 00 00', 'img/background.jpg', 0, '', 'twitter.com/oldthiefstudio', 'instagram/oldthiefstudio', 'youtube/oldthiefstudio.com', 'github/latrodect', 'reddit/oldthiefstudio.com', 'artstation/oldthiefstudio.com', 'OldThiefStudioAtatürk Mah. 895 Sokak 16/1 No:15İzmir / Bornova', 'Nike Running', 'Old Thief Studio'),
('Nike Running', 'Best Sport & Gym Marketplace', 'Copyright © 2021', 'www.oldthiefstudio.com', '', '', 0, '', '', '', '', '', '', '', '', 'Nike Running', 'Old Thief Studio');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersler`
--

CREATE TABLE `dersler` (
  `dersler_id` int(11) NOT NULL,
  `ders_ad` varchar(500) NOT NULL,
  `ders_icerik` varchar(500) NOT NULL,
  `ders_sira` varchar(500) NOT NULL,
  `ders_sayfa` varchar(500) NOT NULL,
  `ders_link` varchar(500) NOT NULL,
  `ders_kodlama_link` varchar(500) NOT NULL,
  `ders_tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `dersler`
--

INSERT INTO `dersler` (`dersler_id`, `ders_ad`, `ders_icerik`, `ders_sira`, `ders_sayfa`, `ders_link`, `ders_kodlama_link`, `ders_tarih`) VALUES
(2, 'Makine Öğrenmesine Giriş', '1000', '10000', '1', 'link', '../DeepLearn/CNN.php', '2021-02-07 22:20:00'),
(3, 'Neural Networks', 'Neural Ağlar Hakkında', '10000123', '1', 'asdasdwqe', '../DeepLearn/CNN.php', '2021-02-09 20:51:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim_sayfalari`
--

CREATE TABLE `egitim_sayfalari` (
  `egitim_id` int(11) NOT NULL,
  `egitim_adi` varchar(500) NOT NULL,
  `egitim_aciklamasi` varchar(500) NOT NULL,
  `egitim_linki` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurumsal_email`
--

CREATE TABLE `kurumsal_email` (
  `smtpuser` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `smtphost` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `smtpport` varchar(10) COLLATE utf8mb4_turkish_ci NOT NULL,
  `smptpass` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `smtpid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kurumsal_email`
--

INSERT INTO `kurumsal_email` (`smtpuser`, `smtphost`, `smtpport`, `smptpass`, `smtpid`) VALUES
('info@bahadirnural.org', 'mail.bahadirnural.org', '25', 'a1234', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_bir` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu_bir_url` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu_iki` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu_iki_url` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu_uc` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu_uc_url` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_bir`, `menu_bir_url`, `menu_iki`, `menu_iki_url`, `menu_uc`, `menu_uc_url`, `menu_id`) VALUES
('Anasayfa', 'index.php', 'Hakkımızda', 'hakkimizda.php', 'İletişim', 'iletisim.php', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menuler`
--

CREATE TABLE `menuler` (
  `menu_id` int(11) NOT NULL,
  `menu_ad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu_link` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu_ek` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `menuler`
--

INSERT INTO `menuler` (`menu_id`, `menu_ad`, `menu_link`, `menu_ek`) VALUES
(1, 'Running', 'running.php', ''),
(2, 'Gym & Sports', '404-NotFound.php', ''),
(5, 'Accessory', '404-NotFound.php', ''),
(6, 'Contact', 'contact.php', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar` ADD FULLTEXT KEY `copyright_isim` (`copyright_isim`);

--
-- Tablo için indeksler `dersler`
--
ALTER TABLE `dersler`
  ADD PRIMARY KEY (`dersler_id`);

--
-- Tablo için indeksler `egitim_sayfalari`
--
ALTER TABLE `egitim_sayfalari`
  ADD PRIMARY KEY (`egitim_id`);

--
-- Tablo için indeksler `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`menu_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `dersler`
--
ALTER TABLE `dersler`
  MODIFY `dersler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `egitim_sayfalari`
--
ALTER TABLE `egitim_sayfalari`
  MODIFY `egitim_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `menuler`
--
ALTER TABLE `menuler`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
