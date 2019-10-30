-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 30 2019 г., 20:29
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_films`
--

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `namefilm` varchar(255) NOT NULL,
  `year` smallint(4) NOT NULL,
  `genre` text NOT NULL,
  `age` smallint(2) NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`namefilm`, `year`, `genre`, `age`, `country`) VALUES
('Batman', 2008, 'Adventure', 13, 'England'),
('Sad', 1231, 'Adventure', 12, 'the end'),
('Бэтмен', 2005, 'Боевик', 13, 'Англия'),
('Темный рыцарь', 2008, 'Боевик', 13, 'Англия');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD UNIQUE KEY `namefilm` (`namefilm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
