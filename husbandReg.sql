-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Servidor: 97.74.31.18
-- Tiempo de generación: 04-03-2014 a las 10:20:58
-- Versión del servidor: 5.0.96
-- Versión de PHP: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `recnsd2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `husbandReg`
--

CREATE TABLE `husbandReg` (
  `ID` int(100) NOT NULL auto_increment,
  `ConsultantID` varchar(100) NOT NULL,
  `ConsultantFirstName` varchar(100) NOT NULL,
  `ConsultantLastName` varchar(100) NOT NULL,
  `HusbandFirstName` varchar(100) NOT NULL,
  `HusbandSecondName` varchar(100) NOT NULL,
  `HusbandThirdName` varchar(100) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `husbandReg`
--

INSERT INTO `husbandReg` VALUES(1, '000100', 'Mary Kay', 'Cosmetics de Mexico', 'Fernando', 'Valero', 'Niño');
