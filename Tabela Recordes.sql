-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Jul-2020 às 04:05

-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


--
-- Database: `id13179308_jogodosbotoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `recordes`

--

CREATE TABLE `recordes` (
  `Cod_Recorde` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `MaiorNivel` int(11) NOT NULL,
  `Data` datetime NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Extraindo dados da tabela `recordes`

--

INSERT INTO `recordes` (`Cod_Recorde`, `Usuario`, `MaiorNivel`, `Data`) VALUES
(1, 'Pedro Nery', 6, '2020-07-30 22:54:32'),

(2, 'Maria', 3, '2020-07-31 03:58:58'),
(3, 'JosÃ©', 4, '2020-07-31 03:59:15'),
(4, 'Sabrina', 4, '2020-07-31 03:59:24'),

(5, 'Caio', 5, '2020-07-31 04:00:22'),
(6, 'Davi', 4, '2020-07-31 04:00:45'),
(7, 'Tamires', 3, '2020-07-31 04:01:04'),

(8, 'Ãlvaro', 3, '2020-07-31 04:01:44'),
(9, 'Daniel', 3, '2020-07-31 04:01:57'),
(10, 'Gabriela', 4, '2020-07-31 04:02:22');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `recordes`
--
ALTER TABLE `recordes`
  ADD PRIMARY KEY (`Cod_Recorde`);


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recordes`

--
ALTER TABLE `recordes`
  MODIFY `Cod_Recorde` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
