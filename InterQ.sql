-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Sty 2020, 20:45
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `InterQ`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `BD`
--

CREATE TABLE `BD` (
  `BD_id` int(10) NOT NULL,
  `BD_name_username` text NOT NULL,
  `BD_Date_From` date NOT NULL,
  `BD_Date_To` date NOT NULL,
  `BD_Place_Dep` varchar(255) NOT NULL,
  `BD_Place_Arival` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `BD`
--

INSERT INTO `BD` (`BD_id`, `BD_name_username`, `BD_Date_From`, `BD_Date_To`, `BD_Place_Dep`, `BD_Place_Arival`) VALUES
(1, 'Jan Urban', '2019-01-15', '2019-01-23', 'Poland', 'Brazil'),
(2, 'Weronika Mazurek', '2020-01-15', '2020-02-12', 'Poland', 'Brazil'),
(3, 'Aleksander Szewczyk', '2020-01-16', '2020-02-12', 'Poland', 'Brazil'),
(4, 'Lena Kania', '2020-01-24', '2020-01-31', 'Poland', 'Brazil'),
(5, 'Julita Stasiak', '2020-01-31', '2020-01-31', 'Poland', 'Brazil'),
(6, 'Maja Olszewska', '2020-01-24', '2020-01-31', 'Poland', 'Brazil');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `contractor`
--

CREATE TABLE `contractor` (
  `ID` int(10) NOT NULL,
  `NIP` text NOT NULL,
  `REGON` int(255) NOT NULL,
  `NAZWA` text NOT NULL,
  `VAT` tinyint(1) NOT NULL,
  `ULICA` text NOT NULL,
  `NUMER_DOMU` text NOT NULL,
  `NUMER_MIESZKANIA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `contractor`
--

INSERT INTO `contractor` (`ID`, `NIP`, `REGON`, `NAZWA`, `VAT`, `ULICA`, `NUMER_DOMU`, `NUMER_MIESZKANIA`) VALUES
(3, '45454545', 3, 'nazwa', 0, 'street', '15', '12');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `BD`
--
ALTER TABLE `BD`
  ADD PRIMARY KEY (`BD_id`);

--
-- Indeksy dla tabeli `contractor`
--
ALTER TABLE `contractor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `BD`
--
ALTER TABLE `BD`
  MODIFY `BD_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `contractor`
--
ALTER TABLE `contractor`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
