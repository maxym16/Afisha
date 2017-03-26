-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Час створення: Бер 26 2017 р., 20:53
-- Версія сервера: 10.1.10-MariaDB
-- Версія PHP: 7.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `afisha`
--

-- --------------------------------------------------------

--
-- Структура таблиці `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `showes` int(11) NOT NULL,
  `platform` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `events`
--

INSERT INTO `events` (`id`, `date`, `showes`, `platform`) VALUES
(1, '2017-03-27', 1, 6),
(2, '2017-03-30', 2, 5),
(3, '2017-04-12', 3, 6),
(4, '2017-04-12', 4, 2),
(5, '2017-04-12', 10, 3),
(6, '2017-04-03', 5, 4),
(7, '2017-03-31', 6, 1),
(8, '2017-03-29', 6, 2),
(9, '2017-04-29', 7, 6),
(10, '2017-04-20', 7, 3),
(11, '2017-04-13', 8, 6),
(12, '2017-04-01', 8, 5),
(13, '2017-03-31', 9, 2),
(14, '2017-05-01', 9, 4),
(15, '2017-04-21', 10, 2);

-- --------------------------------------------------------

--
-- Структура таблиці `platform`
--

CREATE TABLE `platform` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT '/images/no-image.png',
  `descript` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `platform`
--

INSERT INTO `platform` (`id`, `name`, `img`, `descript`, `sort`, `keywords`, `description`) VALUES
(1, 'Площадка 1', '/images/k03.jpg', 'Площадка 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 1, '', ''),
(2, 'Площадка 2', '/images/k04.jpg', 'Площадка 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 2, '', ''),
(3, 'Площадка 3', '/images/k06.jpg', 'Площадка 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 3, '', ''),
(4, 'Площадка 4', '/images/k07.jpg', 'Площадка 4. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 4, '', ''),
(5, 'Площадка 5', '/images/k10.jpg', 'Площадка 5. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 5, '', ''),
(6, 'Площадка 6', '/images/k01.jpg', 'Площадка 6. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 6, '', ''),
(7, 'Площадка 7', '/images/k02.jpg', 'Площадка 7. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 7, '', ''),
(8, 'Площадка 8', '/images/k05.jpg', 'Площадка 8. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 8, '', '');

-- --------------------------------------------------------

--
-- Структура таблиці `showes`
--

CREATE TABLE `showes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT '/images/no-image.png',
  `descript` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `showes`
--

INSERT INTO `showes` (`id`, `name`, `img`, `descript`, `keywords`, `description`) VALUES
(1, 'Шоу 1', '/images/k01.jpg', 'Шоу 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.', '', ''),
(2, 'Шоу 2', '/images/k02.jpg', 'Шоу 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.', '', ''),
(3, 'Шоу 3', '/images/k03.jpg', 'Шоу 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.', '', ''),
(4, 'Шоу 4', '/images/k04.jpg', 'Шоу 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.', '', ''),
(5, 'Шоу 5', '/images/k05.jpg', 'Шоу 5. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.', '', ''),
(6, 'Шоу 6', '/images/k06.jpg', 'Шоу 6. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.', '', ''),
(7, 'Шоу 7', '/images/k07.jpg', 'Шоу 7. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.', '', ''),
(8, 'Шоу 8', '/images/k08.jpg', 'Шоу 8. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.', '', ''),
(9, 'Шоу 9', '/images/k09.jpg', 'Шоу 9. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.', '', ''),
(10, 'Шоу 10', '/images/k10.jpg', 'Шоу 10. Lorem ipsum ! Dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.', '', '');

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'admin', '$2y$13$VKpc2fB6lleKDXLGZyYE9OiPbGDxUTKtYco.c1EdIYmR7SnlSRTyy', 'xfqctj1PE8UwOXFlEaZk8dQhxpkZaiFC');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `showes`
--
ALTER TABLE `showes`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблиці `platform`
--
ALTER TABLE `platform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблиці `showes`
--
ALTER TABLE `showes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
