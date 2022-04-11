-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Ápr 11. 15:14
-- Kiszolgáló verziója: 10.4.20-MariaDB
-- PHP verzió: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `edzoterem2`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `edzok`
--

CREATE TABLE `edzok` (
  `userID` bigint(20) NOT NULL,
  `nev` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `edzok`
--

INSERT INTO `edzok` (`userID`, `nev`) VALUES
(1, 'Edző bácsi'),
(2, 'Pál Zsuzsanna'),
(3, 'Orsai Gergely'),
(4, 'Dobóczy Maja');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalo`
--

CREATE TABLE `felhasznalo` (
  `id` bigint(20) NOT NULL,
  `nev` text COLLATE utf8_hungarian_ci NOT NULL,
  `jelszo` text COLLATE utf8_hungarian_ci NOT NULL,
  `email` text COLLATE utf8_hungarian_ci NOT NULL,
  `nem` tinyint(1) NOT NULL,
  `web_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `felhasznalo`
--

INSERT INTO `felhasznalo` (`id`, `nev`, `jelszo`, `email`, `nem`, `web_admin`) VALUES
(1, 'david', '172522ec1028ab781d9dfd17eaca4427', 'nagyhazu.david@gmail.com', 0, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orak`
--

CREATE TABLE `orak` (
  `oraID` bigint(20) NOT NULL,
  `userID` bigint(20) DEFAULT NULL,
  `edzoID` bigint(20) NOT NULL,
  `datum` datetime NOT NULL,
  `tipus` text COLLATE utf8_hungarian_ci NOT NULL,
  `ar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `orak`
--

INSERT INTO `orak` (`oraID`, `userID`, `edzoID`, `datum`, `tipus`, `ar`) VALUES
(3, 1, 1, '2022-04-11 14:38:07', 'ahahahahaha', 1500),
(4, 1, 4, '2022-04-11 14:06:32', 'ihiiihiiiihih', 2000);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `edzok`
--
ALTER TABLE `edzok`
  ADD PRIMARY KEY (`userID`);

--
-- A tábla indexei `felhasznalo`
--
ALTER TABLE `felhasznalo`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `orak`
--
ALTER TABLE `orak`
  ADD PRIMARY KEY (`oraID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `edzoID` (`edzoID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `edzok`
--
ALTER TABLE `edzok`
  MODIFY `userID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `felhasznalo`
--
ALTER TABLE `felhasznalo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `orak`
--
ALTER TABLE `orak`
  MODIFY `oraID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `orak`
--
ALTER TABLE `orak`
  ADD CONSTRAINT `orak_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `felhasznalo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orak_ibfk_2` FOREIGN KEY (`edzoID`) REFERENCES `edzok` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
