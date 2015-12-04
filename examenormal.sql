-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2015 às 08:17
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `examenormal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `local` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agenda` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `tipo`, `descricao`, `local`, `data`, `agenda`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Festa do Pouco Pano', 'Festa', 'Sera altamente', 'Txiling Club', '2015-12-17', 'Inicio 22horas e fim 5horas do dia seguinte', 'Activo', '2015-12-04 08:36:16', '2015-12-04 09:38:55'),
(2, 'Deep Web e suas implicacoes', 'Workshop', 'Palestra sobre deep web em Moz', 'Campus Universitario da UEM-FC-DMI-Sala D4', '2015-12-17', 'Das 8 as 12', 'Cancelado', '2015-12-04 09:04:38', '2015-12-04 13:02:48'),
(3, 'Redes Moveis', 'Palestra', 'Palestra sobre Redes Moveis', 'Mocambique Celular - Sala de eventos', '2016-10-10', 'Das 8 as 19', 'Activo', '2015-12-04 13:28:35', '2015-12-04 14:51:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_03_041430_create_teachers_table', 1),
('2015_12_04_001059_create_eventos_table', 1),
('2015_12_04_001506_create_participantes_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `participantes`
--

CREATE TABLE IF NOT EXISTS `participantes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apelido` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grauacademico` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datadenascimento` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `participantes`
--

INSERT INTO `participantes` (`id`, `nome`, `apelido`, `grauacademico`, `empresa`, `datadenascimento`, `sexo`, `telefone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Fred ', 'Josssias', 'Medio', 'TV Sucesso', '1985-12-12', 'Masculino', '82889980', 'fred.jossias@miramar.co.mz', '2015-12-04 08:39:17', '2015-12-04 09:38:34'),
(2, 'Amandio', 'Tsungo', 'Superior', 'Safe Services', '1990-11-03', 'Masculino', '849115624', 'amandiotsungo@gmail.com', '2015-12-04 08:50:05', '2015-12-04 08:50:05'),
(3, 'Alfredro Combeia', 'Mathe', 'Medio', 'M Transportes', '1990-11-03', 'Masculino', '845566540', 'ali@ali.com', '2015-12-04 08:55:14', '2015-12-04 14:50:36'),
(4, 'Marta', 'Sambo', 'Superior', 'Safe Services', '1993-03-31', 'Feminino', '848158122', 'marta1sambo@gmail.com', '2015-12-04 14:50:22', '2015-12-04 14:50:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Amandio Tsungo', 'amandiotsungo@gmail.com', '$2y$10$epmpmNNWKtQeHMpBRpheVeaaBdFrozCd5ALxyYbQYoD8coPdpiBh.', NULL, '2015-12-04 14:21:55', '2015-12-04 14:21:55');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
