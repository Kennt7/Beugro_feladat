-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2019. Dec 01. 20:29
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
  `rendelesID` int(11) NOT NULL,
  `meret` int(11) DEFAULT NULL,
  `szin` varchar(30) COLLATE latin2_hungarian_ci DEFAULT NULL,
  `ar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vasarlo`
--

CREATE TABLE `vasarlo` (
  `VasarloID` int(11) NOT NULL,
  `vezetekNev` varchar(50) COLLATE latin2_hungarian_ci NOT NULL,
  `keresztNev` varchar(50) COLLATE latin2_hungarian_ci NOT NULL,
  `Cim` varchar(50) COLLATE latin2_hungarian_ci NOT NULL,
  `Telefonszam` int(30) NOT NULL,
  `Faxszam` int(11) NOT NULL,
  `Email` varchar(11) COLLATE latin2_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- A tábla adatainak kiíratása `vasarlo`
--

INSERT INTO `vasarlo` (`VasarloID`, `vezetekNev`, `keresztNev`, `Cim`, `Telefonszam`, `Faxszam`, `Email`) VALUES
(2, 'Kiss ', 'Elemér', '1119 Budapest Vahot u. 9.', 203445687, 123456789, 'valami@gmai'),
(3, 'Bölcs', 'Salamon', '2345 Kistarcsa Kossuth u. 33.', 304569934, 987654321, 'bolcs@citro');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vasarloirendeles`
--

CREATE TABLE `vasarloirendeles` (
  `rendelesID` int(11) NOT NULL,
  `RendelesIdeje` datetime NOT NULL,
  `VasarloID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `rendelesitetel`
--
ALTER TABLE `rendelesitetel`
  ADD PRIMARY KEY (`katalogusID`);

--
-- A tábla indexei `vasarlo`
--
ALTER TABLE `vasarlo`
  ADD PRIMARY KEY (`VasarloID`);

--
-- A tábla indexei `vasarloirendeles`
--
ALTER TABLE `vasarloirendeles`
  ADD PRIMARY KEY (`rendelesID`);

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
  MODIFY `VasarloID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `vasarloirendeles`
--
ALTER TABLE `vasarloirendeles`
  MODIFY `rendelesID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
