-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: localhost:8889
-- Létrehozás ideje: 2022. Ápr 08. 07:22
-- Kiszolgáló verziója: 5.7.34
-- PHP verzió: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `edzoterem`
--
CREATE DATABASE IF NOT EXISTS `edzoterem` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `edzoterem`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalo`
--

CREATE TABLE `felhasznalo` (
  `id` int(11) NOT NULL,
  `nev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `jelszo` text COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `nem` tinyint(3) NOT NULL,
  `web_admin` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `felhasznalo`
--

INSERT INTO `felhasznalo` (`id`, `nev`, `jelszo`, `email`, `nem`, `web_admin`) VALUES
(1, 'asd', '123', 'nagyhadf@gmail.com', 1, 0),
(4, 'asdasd', 'bfd59291e825b5f2bbf1', 'nagyhazu.david@gmail.com', 2, 1),
(5, 'asdasd', 'bfd59291e825b5f2bbf1', 'nagyhazu.david@gmail.com', 2, 1),
(6, 'asdasd', '8674d99440d3be836322', 'carbonprd@gmail.com', 2, 1),
(7, 'lolololo', 'bfd59291e825b5f2bbf1', 'carbonprda@gmail.com', 0, 1),
(8, 'asdasd', 'f211caa56d6c06b1245d', 'safddsaf@sdf', 2, 1),
(9, 'nagy béle', 'c12e33afc90e8a63ec5b', 'nagybele@gmail.com', 0, 1),
(10, 'nagy béle', 'c12e33afc90e8a63ec5b', 'nagybele@gmail.com', 0, 1),
(11, 'asdasd', '95da0c581a96155640b7', 'nagyhazu.david@gmail.com', 0, 1),
(12, 'Móni Zsolti', '5e64fe04bfd8363b6c74', 'modnizsolti@gmail.com', 0, 1),
(13, 'Móni Zsolti', '5e64fe04bfd8363b6c74', 'modnizsolti@gmail.com', 0, 1),
(14, 'Móni Zsolti', '81dc9bdb52d04dc20036', 'sdfdsaf@asdf', 1, 1),
(15, 'béla', '202cb962ac59075b964b', 'nagyha@nagyha', 0, 1),
(17, 'david', '172522ec1028ab781d9d', 'sadffdas@adsfdsa', 1, 1),
(19, 'Tivi', 'bfd59291e825b5f2bbf1eb76569f8fe7', 'asd@asd', 0, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orak`
--

CREATE TABLE `orak` (
  `id` int(11) NOT NULL,
  `nev` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  `edzo` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `datum` date NOT NULL,
  `resztvevok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `orak`
--

INSERT INTO `orak` (`id`, `nev`, `edzo`, `datum`, `resztvevok`) VALUES
(1, 'aaaaaa', 'aaaaa', '2022-04-05', 2);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `felhasznalo`
--
ALTER TABLE `felhasznalo`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `orak`
--
ALTER TABLE `orak`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `felhasznalo`
--
ALTER TABLE `felhasznalo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT a táblához `orak`
--
ALTER TABLE `orak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
