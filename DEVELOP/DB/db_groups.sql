-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 30 2015 г., 15:27
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `groups`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` bigint(20) unsigned NOT NULL,
  `id_parent` bigint(20) unsigned NOT NULL,
  `title` varchar(45) NOT NULL,
  `counter` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`id` bigint(20) unsigned NOT NULL,
  `title` varchar(45) NOT NULL,
  `id_region` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `title`, `id_region`) VALUES
(1, 'Волгоград', 1),
(2, 'Санкт-Петербург', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `district`
--

CREATE TABLE IF NOT EXISTS `district` (
`id` bigint(20) unsigned NOT NULL,
  `id_city` bigint(20) unsigned NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`id` bigint(20) unsigned NOT NULL,
  `id_user` bigint(20) unsigned NOT NULL,
  `id_place` bigint(20) unsigned NOT NULL,
  `count_player` int(11) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `team_one` varchar(255) NOT NULL,
  `team_two` varchar(255) NOT NULL,
  `team_three` varchar(255) DEFAULT NULL,
  `team_four` varchar(255) DEFAULT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
`id` bigint(20) unsigned NOT NULL,
  `id_user` bigint(20) unsigned NOT NULL,
  `id_friend` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `gallary_events`
--

CREATE TABLE IF NOT EXISTS `gallary_events` (
`id` bigint(20) unsigned NOT NULL,
  `id_event` bigint(20) unsigned NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `global_events`
--

CREATE TABLE IF NOT EXISTS `global_events` (
`id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `event_come` date NOT NULL,
  `create_event` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `link` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `joined_events`
--

CREATE TABLE IF NOT EXISTS `joined_events` (
`id` bigint(20) unsigned NOT NULL,
  `id_user` bigint(20) unsigned NOT NULL,
  `id_events` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `photos_gallary`
--

CREATE TABLE IF NOT EXISTS `photos_gallary` (
`id` bigint(20) unsigned NOT NULL,
  `id_gallary` bigint(20) unsigned NOT NULL,
  `path_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `places`
--

CREATE TABLE IF NOT EXISTS `places` (
`id` bigint(20) unsigned NOT NULL,
  `id_category_parent` bigint(20) unsigned NOT NULL,
  `id_city` bigint(20) unsigned NOT NULL,
  `title` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
`id` bigint(20) unsigned NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `secondname` varchar(45) DEFAULT NULL,
  `birthday` varchar(45) DEFAULT NULL,
  `id_user` bigint(20) unsigned NOT NULL,
  `id_city` bigint(20) unsigned NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `region`
--

CREATE TABLE IF NOT EXISTS `region` (
`id` bigint(20) unsigned NOT NULL,
  `title` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `region`
--

INSERT INTO `region` (`id`, `title`) VALUES
(1, 'Волгоградская'),
(2, 'Ленинградская');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` bigint(20) unsigned NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `activation_key` varchar(45) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '1',
  `password` varchar(45) DEFAULT NULL,
  `ban` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `nickname`, `email`, `phone`, `activation_key`, `role`, `password`, `ban`) VALUES
(1, 'exmp1', 'exmp1', 'exmp1', '59455aa937e59f8803b45dce1b78e2fd55ba11ac9239b', 1, 'dcde02d5e3b65af062a376dad3caf430fdc33a4f', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `title_UNIQUE` (`title`), ADD KEY `id_parent` (`id_parent`), ADD KEY `id_parent_2` (`id_parent`), ADD KEY `id_parent_3` (`id_parent`), ADD KEY `id_parent_4` (`id_parent`), ADD KEY `id_parent_5` (`id_parent`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `title_UNIQUE` (`title`), ADD UNIQUE KEY `title` (`title`), ADD KEY `fk_city_region1_idx` (`id_region`);

--
-- Индексы таблицы `district`
--
ALTER TABLE `district`
 ADD PRIMARY KEY (`id`), ADD KEY `id_city` (`id_city`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`id`), ADD KEY `id_place` (`id_place`), ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `friends`
--
ALTER TABLE `friends`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_friend_user1_idx` (`id_user`), ADD KEY `fk_friend_user2_idx` (`id_friend`);

--
-- Индексы таблицы `gallary_events`
--
ALTER TABLE `gallary_events`
 ADD PRIMARY KEY (`id`), ADD KEY `id_events` (`id_event`);

--
-- Индексы таблицы `global_events`
--
ALTER TABLE `global_events`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `joined_events`
--
ALTER TABLE `joined_events`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_joined_user1_idx` (`id_user`), ADD KEY `fk_joined_events1_idx` (`id_events`);

--
-- Индексы таблицы `photos_gallary`
--
ALTER TABLE `photos_gallary`
 ADD PRIMARY KEY (`id`), ADD KEY `id_gallary` (`id_gallary`);

--
-- Индексы таблицы `places`
--
ALTER TABLE `places`
 ADD PRIMARY KEY (`id`), ADD KEY `id_category_parent` (`id_category_parent`,`id_city`), ADD KEY `id_city` (`id_city`);

--
-- Индексы таблицы `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_profile_user_idx` (`id_user`), ADD KEY `fk_profile_city1_idx` (`id_city`);

--
-- Индексы таблицы `region`
--
ALTER TABLE `region`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `title_UNIQUE` (`title`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nickname_UNIQUE` (`nickname`), ADD UNIQUE KEY `email_UNIQUE` (`email`), ADD UNIQUE KEY `phone_UNIQUE` (`phone`), ADD UNIQUE KEY `activation_key_UNIQUE` (`activation_key`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `phone` (`phone`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `nickname` (`nickname`), ADD UNIQUE KEY `phone_2` (`phone`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `district`
--
ALTER TABLE `district`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `friends`
--
ALTER TABLE `friends`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `gallary_events`
--
ALTER TABLE `gallary_events`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `global_events`
--
ALTER TABLE `global_events`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `joined_events`
--
ALTER TABLE `joined_events`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `photos_gallary`
--
ALTER TABLE `photos_gallary`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `places`
--
ALTER TABLE `places`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `profile`
--
ALTER TABLE `profile`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `region`
--
ALTER TABLE `region`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `city`
--
ALTER TABLE `city`
ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id`);

--
-- Ограничения внешнего ключа таблицы `district`
--
ALTER TABLE `district`
ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`id_city`) REFERENCES `city` (`id`);

--
-- Ограничения внешнего ключа таблицы `events`
--
ALTER TABLE `events`
ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`id_place`) REFERENCES `places` (`id`);

--
-- Ограничения внешнего ключа таблицы `friends`
--
ALTER TABLE `friends`
ADD CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
ADD CONSTRAINT `friends_ibfk_2` FOREIGN KEY (`id_friend`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `gallary_events`
--
ALTER TABLE `gallary_events`
ADD CONSTRAINT `gallary_events_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id`);

--
-- Ограничения внешнего ключа таблицы `joined_events`
--
ALTER TABLE `joined_events`
ADD CONSTRAINT `joined_events_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
ADD CONSTRAINT `joined_events_ibfk_2` FOREIGN KEY (`id_events`) REFERENCES `events` (`id`);

--
-- Ограничения внешнего ключа таблицы `photos_gallary`
--
ALTER TABLE `photos_gallary`
ADD CONSTRAINT `photos_gallary_ibfk_1` FOREIGN KEY (`id_gallary`) REFERENCES `gallary_events` (`id`);

--
-- Ограничения внешнего ключа таблицы `places`
--
ALTER TABLE `places`
ADD CONSTRAINT `places_ibfk_1` FOREIGN KEY (`id_category_parent`) REFERENCES `category` (`id`),
ADD CONSTRAINT `places_ibfk_2` FOREIGN KEY (`id_city`) REFERENCES `city` (`id`);

--
-- Ограничения внешнего ключа таблицы `profile`
--
ALTER TABLE `profile`
ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
