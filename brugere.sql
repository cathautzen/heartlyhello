-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Vært: mysql28.unoeuro.com
-- Genereringstid: 15. 12 2023 kl. 09:07:27
-- Serverversion: 8.0.34-26
-- PHP-version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cautzen_dk_db`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `brugere`
--

CREATE TABLE `brugere` (
  `Id` int UNSIGNED NOT NULL,
  `Name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_danish_ci NOT NULL,
  `Phone` varchar(8) CHARACTER SET utf8mb3 COLLATE utf8mb3_danish_ci NOT NULL,
  `Mail` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_danish_ci NOT NULL,
  `Gender` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_danish_ci NOT NULL,
  `Birthday` date NOT NULL,
  `Seeking` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_danish_ci NOT NULL,
  `Interests` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `brugere`
--

INSERT INTO `brugere` (`Id`, `Name`, `Phone`, `Mail`, `Gender`, `Birthday`, `Seeking`, `Interests`) VALUES
(7, 'Test', '43454321', 'test@test.dk', 'Akønnet', '2023-12-04', 'Kærligheden|Et forum til samtaler', 'Gaming|Bøger|Indretning'),
(8, 'Tina', '43213221', 'test@test.dk', 'Dobbeltkønnet', '2023-10-05', 'Tætte venskaber|Én at drikke kaffe med|Kærligheden', 'Gaming|Fitness|Kæledyr'),
(9, 'Vilma', '43454321', 'test@test.dk', 'Dobbeltkønnet', '2023-12-06', 'Tætte venskaber|Dybe forbindelser', 'Gaming|Madlavning|Kæledyr'),
(10, 'Bo', '44334455', 'test@test.dk', 'Non-Binær', '2023-12-02', 'Dybe forbindelser|Kærligheden', 'Gaming|Fitness|Kæledyr'),
(11, 'Test', '22112211', 'trst@trst.dk', 'Transkønnet', '2023-12-12', 'Tætte venskaber|Dybe forbindelser', 'Fiskeri|Kreativitet|Kæledyr');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `brugere`
--
ALTER TABLE `brugere`
  ADD PRIMARY KEY (`Id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `brugere`
--
ALTER TABLE `brugere`
  MODIFY `Id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
