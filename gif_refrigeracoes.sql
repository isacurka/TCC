-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Set-2023 às 17:23
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gif_refrigeracoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `comsenha` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `email`, `senha`, `comsenha`) VALUES
(1, 'Isadora', 'isacurka@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `catalogo_pecas`
--

DROP TABLE IF EXISTS `catalogo_pecas`;
CREATE TABLE IF NOT EXISTS `catalogo_pecas` (
  `id_peca` int NOT NULL AUTO_INCREMENT,
  `nome_peca` varchar(100) NOT NULL,
  `discri_peca` varchar(1000) NOT NULL,
  `valor_peca` varchar(100) NOT NULL,
  `foto_peca` varchar(100) NOT NULL,
  `id` int NOT NULL,
  PRIMARY KEY (`id_peca`),
  KEY `fk_catalogo_pecas` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `catalogo_servico`
--

DROP TABLE IF EXISTS `catalogo_servico`;
CREATE TABLE IF NOT EXISTS `catalogo_servico` (
  `id_servico` int NOT NULL AUTO_INCREMENT,
  `nome_servico` varchar(100) NOT NULL,
  `discri_servico` varchar(1000) NOT NULL,
  `valor_servico` varchar(100) NOT NULL,
  `foto_servico` varchar(100) NOT NULL,
  `id` int NOT NULL,
  PRIMARY KEY (`id_servico`),
  KEY `fk_catalogo_servico` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `catalogo_servico`
--

INSERT INTO `catalogo_servico` (`id_servico`, `nome_servico`, `discri_servico`, `valor_servico`, `foto_servico`, `id`) VALUES
(1, 'lego', 'peças de montar', '1000', 'carrossel1.jpg', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
