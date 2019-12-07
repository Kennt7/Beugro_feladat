-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2019. Dec 07. 14:20
-- Kiszolgáló verziója: 10.4.8-MariaDB
-- PHP verzió: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `vasarloirendelesinformaciok`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rendelesitetel`
--

CREATE TABLE `rendelesitetel` (
  `katalogusID` int(11) NOT NULL,
  `rendelesID` int(30) NOT NULL,
  `meret` int(11) NOT NULL,
  `szin` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `ar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vasarlo`
--

CREATE TABLE `vasarlo` (
  `vasarloID` int(30) NOT NULL,
  `vezetekNev` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `keresztNev` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `cim` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `telefon` int(30) NOT NULL,
  `Fax` int(30) DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vasarloirendeles`
--

CREATE TABLE `vasarloirendeles` (
  `rendelesID` int(30) NOT NULL,
  `rendelesIdeje` datetime NOT NULL,
  `vasarloID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `rendelesitetel`
--
ALTER TABLE `rendelesitetel`
  ADD PRIMARY KEY (`katalogusID`,`rendelesID`),
  ADD KEY `rendelesID` (`rendelesID`);

--
-- A tábla indexei `vasarlo`
--
ALTER TABLE `vasarlo`
  ADD PRIMARY KEY (`vasarloID`);

--
-- A tábla indexei `vasarloirendeles`
--
ALTER TABLE `vasarloirendeles`
  ADD PRIMARY KEY (`rendelesID`),
  ADD KEY `vasarloID` (`vasarloID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `rendelesitetel`
--
ALTER TABLE `rendelesitetel`
  MODIFY `katalogusID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `vasarlo`
--
ALTER TABLE `vasarlo`
  MODIFY `vasarloID` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `vasarloirendeles`
--
ALTER TABLE `vasarloirendeles`
  MODIFY `rendelesID` int(30) NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `rendelesitetel`
--
ALTER TABLE `rendelesitetel`
  ADD CONSTRAINT `rendelesitetel_ibfk_1` FOREIGN KEY (`rendelesID`) REFERENCES `vasarloirendeles` (`rendelesID`);

--
-- Megkötések a táblához `vasarloirendeles`
--
ALTER TABLE `vasarloirendeles`
  ADD CONSTRAINT `vasarloirendeles_ibfk_1` FOREIGN KEY (`vasarloID`) REFERENCES `vasarlo` (`vasarloID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
