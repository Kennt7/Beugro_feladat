-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2020. Jan 01. 21:09
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
-- Adatbázis: `customerorderinformation`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `customer`
--

CREATE TABLE `customer` (
  `customerID` int(30) NOT NULL,
  `firstName` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `phone` int(30) NOT NULL,
  `fax` int(30) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `customer`
--

INSERT INTO `customer` (`customerID`, `firstName`, `lastName`, `address`, `phone`, `fax`, `email`) VALUES
(1, 'Bögyös', 'Bianka', 'Bugyi', 703422171, NULL, 'bianka@hotmail.hu'),
(2, 'Szőke', 'Sarolta', 'Debrecen', 301024159, 0, 'saroltaszoke@yahoo.com'),
(3, 'Vörös', 'Veronika', 'Hollóháza', 203085627, NULL, 'veronika@gmail.com');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `customerorder`
--

CREATE TABLE `customerorder` (
  `orderID` int(30) NOT NULL,
  `orderDate` datetime NOT NULL,
  `customerID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `customerorder`
--

INSERT INTO `customerorder` (`orderID`, `orderDate`, `customerID`) VALUES
(2, '2020-01-01 00:00:00', 1),
(3, '2020-01-02 00:00:00', 2),
(4, '2020-01-03 00:00:00', 3);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `orderID` int(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `product`
--

INSERT INTO `product` (`productID`, `orderID`, `amount`, `color`, `price`) VALUES
(2, 2, 10, 'green', 800),
(3, 3, 465, 'yelllow', 234),
(4, 4, 5885, 'red', 1200);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `password2` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- A tábla indexei `customerorder`
--
ALTER TABLE `customerorder`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `vasarloID` (`customerID`);

--
-- A tábla indexei `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`,`orderID`),
  ADD KEY `rendelesID` (`orderID`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `customerorder`
--
ALTER TABLE `customerorder`
  MODIFY `orderID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `customerorder`
--
ALTER TABLE `customerorder`
  ADD CONSTRAINT `customerorder_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`);

--
-- Megkötések a táblához `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `customerorder` (`orderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
