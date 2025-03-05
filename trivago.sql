-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 11:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trivago`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(30) DEFAULT NULL,
  `prezime` varchar(30) DEFAULT NULL,
  `kor_ime` varchar(20) NOT NULL,
  `lozinka` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `kor_ime`, `lozinka`) VALUES
(1, 'Karlo', 'Bašić', 'karlo', 'karlo123'),
(2, 'Matea', 'Slipac', 'matea', 'matea123'),
(3, 'Barbara', 'Čelar', 'barbara', 'barbara123'),
(25, 'Ivan', 'Ivanić', 'ivan', 'ivan123'),
(26, 'Stipe', 'Stipić', 'stipe', 'stipe123'),
(27, 'Ana', 'Aničić', 'ana', 'ana123'),
(30, 'Eva', 'Ević', 'eva', 'eva123'),
(31, 'Damir', 'Urban', 'damir', 'damir123'),
(43, 'Darko', 'Ćavar', 'darko', 'darko123'),
(44, 'Vedran', 'Vedranović', 'vedran', 'vedran123'),
(45, 'Ivica', 'Ivić', 'ivica', 'ivica123'),
(47, 'Vlado', 'Vladić', 'vlado', 'vlado123'),
(48, 'Ivano', 'Balić', 'ivano', 'ivano123'),
(49, 'Luka ', 'Modrić', 'luka', 'luka123');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(11) NOT NULL,
  `Dani` varchar(255) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci NOT NULL,
  `Cijena` varchar(50) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `Dani`, `Cijena`) VALUES
(1, '1 Dana', '140 KM'),
(2, '1 Dana', '210 KM'),
(3, '1 Dana', '350 KM'),
(4, '1 Dana', '490 KM'),
(37, '1 Dana', '140 KM'),
(38, '1 Dana', '210 KM'),
(39, '1 Dana', '350 KM'),
(40, '1 Dana', '140 KM'),
(41, '1 Dana', '210 KM'),
(42, '1 Dana', '350 KM'),
(43, '1 Dana', '490 KM'),
(44, '1 Dana', '140 KM'),
(45, '1 Dana', '210 KM'),
(46, '1 Dana', '350 KM'),
(47, '1 Dana', '490 KM'),
(48, '1 Dana', '140 KM'),
(49, '1 Dana', '140 KM'),
(50, '1 Dana', '210 KM'),
(51, '1 Dana', '350 KM'),
(52, '1 Dana', '490 KM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kor_ime` (`kor_ime`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
