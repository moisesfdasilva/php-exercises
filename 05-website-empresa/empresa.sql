-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2024 at 07:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empresa`
--

-- --------------------------------------------------------

--
-- Table structure for table `novidades`
--

CREATE TABLE `novidades` (
  `id_nov` int(11) NOT NULL,
  `resumo` varchar(40) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `novidades`
--

INSERT INTO `novidades` (`id_nov`, `resumo`, `descricao`) VALUES
(1, 'Acessibilidade para Cadeirantes', 'Adquirimos equipamentos que atendem pessoas cadeirantes, além de uma equipe treinada.'),
(2, 'Atendimento a Crianças', 'Toda a nossa equipe foi treinada para ter uma comunicação assertiva no atendimento às crianças.'),
(3, 'Comunicação em Idiomas Europeus', 'Dispomos de equipamentos que auxiliam a comunicação em cinco idiomas europeus, Inglês, Espanhol, Francês, Alemão e Holandês.'),
(4, 'Comunicação em Idiomas Asiáticos', 'Dispomos de equipamentos que auxiliam a comunicação em três idiomas asiáticos, Chinês, Japonês e Árabe.'),
(5, 'Trilhas em São Paulo', 'Expandimos nossos limites a outros estados, já estamos agendado trilhas para o estado de São Paulo.'),
(6, 'Tilhas em Minas Gerais', 'Expandimos nossos limites a outros estados, já estamos agendado trilhas para o estado de Minas Gerais.');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id_prod` int(11) NOT NULL,
  `nome` varchar(75) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `qtdestoque` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id_prod`, `nome`, `valor`, `qtdestoque`) VALUES
(1, 'Pedra da Gávea com o guia.', 25.8, 4),
(2, 'Pedra da Gávea com guia e rapel.', 55.8, 2),
(3, 'Parque Nacional da Serra dos Orgãos com guia, rapel e acampamento.', 130.5, 1),
(4, 'Floresta da Tijuca com guia.', 25.8, 2),
(5, 'Parque da Pedra Branca com guia.', 25.8, 2),
(6, 'Pedra do Telégrafo com guia.', 30.5, 1),
(7, 'Costão do Pão de Açúcar guia e rapel.', 65.8, 1),
(8, 'Escalavrado com guia e rapel.', 88.6, 1),
(9, 'Pico das Agulhas Negras com guia, rapel e acampamento.', 230.5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `novidades`
--
ALTER TABLE `novidades`
  ADD PRIMARY KEY (`id_nov`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
