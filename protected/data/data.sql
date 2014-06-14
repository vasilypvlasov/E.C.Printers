-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 14 2014 г., 18:11
-- Версия сервера: 5.6.16
-- Версия PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `printers`
--

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `content`, `created`, `visible`) VALUES
(1, NULL, 'jkhgkawehrslgjk;aerksd', NULL, NULL);

--
-- Дамп данных таблицы `page`
--

INSERT INTO `page` (`id`, `title`, `content`, `links`, `created`, `updated`) VALUES
(1, 'uierhjfaeirs', '<p>qwertyubjsbgfhjwbsnzekjf</p>\r\n', '<p>yghjnekamgviz</p>\r\n', NULL, NULL);

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password_hash`, `full_name`, `role`, `has_ban`) VALUES
(1, 'kola', '$2y$13$fRy4Tenk5jsbonVe7u8f4uJ3tRUsVrD7MRRI0tCctfiTCOXqiZOCG', 'kola kola kola', NULL, 0),
(12, 'admin', '$2y$13$fRy4Tenk5jsbonVe7u8f4uJ3tRUsVrD7MRRI0tCctfiTCOXqiZOCG', 'admin', 1, 0),
(13, 'test', '$2y$13$KgrBvI5fWO7hNVXlqjNZS.T4RD00pt0z03LuD250R.CqhgGZxRE3W', 'test', 2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;