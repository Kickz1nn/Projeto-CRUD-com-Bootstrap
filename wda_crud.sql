-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Ago-2024 às 20:13
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
-- SET time_zone = "+00:00";


--
-- Banco de dados: `wda_crud`
--
CREATE DATABASE IF NOT EXISTS `wda_crud` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wda_crud`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `customers`
--

CREATE TABLE `customers` (
  `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(14) NOT NULL,
  `birthdate` datetime NOT NULL,
  `address` varchar(255) NOT NULL,
  `hood` varchar(100) NOT NULL,
  `zip_code` varchar(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `ie` varchar(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `customers`
--

INSERT INTO `customers` (`id`, `name`, `cpf_cnpj`, `birthdate`, `address`, `hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) VALUES
(1, 'Fulano de Tal', '123.456.789-00', '1989-01-01 00:00:00', 'Rua da Web, 123', 'Internet', '12345678', 'Pilar do Sul', 'SP', '41 42241167', '15998474599', '143623456', '2016-05-24 00:00:00', '2016-05-24 00:00:00'),
('Ciclano de Tal', '123.456.789-00', '1989-01-01 00:00:00', 'Rua da Web, 124', 'Internet', '12345678', 'Pilar do Sul', 'SP', '41 42241169', '15798474599', '143823456', '2016-05-24 00:00:00', '2016-05-24 00:00:00');

