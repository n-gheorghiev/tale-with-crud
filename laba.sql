-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 30 2023 г., 19:36
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laba`
--

-- --------------------------------------------------------

--
-- Структура таблицы `About_house`
--

CREATE TABLE `About_house` (
  `id` int(2) NOT NULL,
  `id_house` int(2) NOT NULL,
  `material` varchar(100) NOT NULL,
  `quality` varchar(100) NOT NULL,
  `crushability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `About_house`
--

INSERT INTO `About_house` (`id`, `id_house`, `material`, `quality`, `crushability`) VALUES
(1, 1, 'Солома', 'Плохое', 1),
(2, 2, 'Камень', 'Отличное', 0),
(3, 3, 'Глина', 'Плохое', 1),
(4, 4, 'Лес', '-', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `Actions`
--

CREATE TABLE `Actions` (
  `id` int(2) NOT NULL,
  `action` varchar(255) NOT NULL,
  `id_character1` int(2) NOT NULL,
  `id_character2` int(2) NOT NULL,
  `id_house` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `Actions`
--

INSERT INTO `Actions` (`id`, `action`, `id_character1`, `id_character2`, `id_house`) VALUES
(1, 'Подул...', 4, 1, 1),
(2, 'Взобрался...', 4, 2, 2),
(3, 'Подул...', 4, 3, 3),
(4, 'Жили-были на свете три поросенка.', 1, 2, 1),
(5, 'Они только и делали, что играли в свои поросячьи игры, прыгали и кувыркались.', 1, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Characteristic`
--

CREATE TABLE `Characteristic` (
  `id` int(2) NOT NULL,
  `id_characters` int(2) NOT NULL,
  `temperament` varchar(40) NOT NULL,
  `growth` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `Characteristic`
--

INSERT INTO `Characteristic` (`id`, `id_characters`, `temperament`, `growth`) VALUES
(1, 1, 'Ленивый', 50),
(2, 2, 'Трудолюбивый', 50),
(3, 3, 'Ленивый', 50),
(4, 4, 'Агрессивный', 85);

-- --------------------------------------------------------

--
-- Структура таблицы `characters`
--

CREATE TABLE `characters` (
  `id` int(2) NOT NULL,
  `name` varchar(40) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `characters`
--

INSERT INTO `characters` (`id`, `name`, `img`) VALUES
(1, 'Ниф-Ниф', 'https://frigato.ru/uploads/posts/2020-10/1601814239_sohranennoe-izobrazhenie-2020-10-4_19-18-59.716.jpg'),
(2, 'Наф-Наф', 'https://frigato.ru/uploads/posts/2020-10/1601814201_sohranennoe-izobrazhenie-2020-10-4_19-19-5.715.jpg'),
(3, 'Нуф-Нуф', 'https://frigato.ru/uploads/posts/2020-10/1601814232_sohranennoe-izobrazhenie-2020-10-4_19-19-12.675.jpg'),
(4, 'Волк', 'https://frigato.ru/uploads/posts/2020-10/1601814267_sohranennoe-izobrazhenie-2020-10-4_19-20-3.540.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `Houses`
--

CREATE TABLE `Houses` (
  `id` int(2) NOT NULL,
  `id_characters` int(2) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `Houses`
--

INSERT INTO `Houses` (`id`, `id_characters`, `img`) VALUES
(1, 1, 'https://frigato.ru/uploads/posts/2020-10/1601814195_sohranennoe-izobrazhenie-2020-10-4_19-19-21.910.jpg'),
(2, 2, 'https://frigato.ru/uploads/posts/2020-10/1601814197_sohranennoe-izobrazhenie-2020-10-4_19-19-48.806.jpg'),
(3, 3, 'https://frigato.ru/uploads/posts/2020-10/1601814235_sohranennoe-izobrazhenie-2020-10-4_19-19-27.780.jpg'),
(4, 4, 'https://frigato.ru/uploads/posts/2020-10/1601814223_sohranennoe-izobrazhenie-2020-10-4_19-20-10.673.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `About_house`
--
ALTER TABLE `About_house`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_house` (`id_house`);

--
-- Индексы таблицы `Actions`
--
ALTER TABLE `Actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_character1` (`id_character1`),
  ADD KEY `id_character2` (`id_character2`),
  ADD KEY `id_house` (`id_house`);

--
-- Индексы таблицы `Characteristic`
--
ALTER TABLE `Characteristic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_characters` (`id_characters`);

--
-- Индексы таблицы `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Houses`
--
ALTER TABLE `Houses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_characters` (`id_characters`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `About_house`
--
ALTER TABLE `About_house`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `Actions`
--
ALTER TABLE `Actions`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `Characteristic`
--
ALTER TABLE `Characteristic`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `Houses`
--
ALTER TABLE `Houses`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `About_house`
--
ALTER TABLE `About_house`
  ADD CONSTRAINT `about_house_ibfk_1` FOREIGN KEY (`id_house`) REFERENCES `Houses` (`id`);

--
-- Ограничения внешнего ключа таблицы `Actions`
--
ALTER TABLE `Actions`
  ADD CONSTRAINT `actions_ibfk_1` FOREIGN KEY (`id_character1`) REFERENCES `characters` (`id`),
  ADD CONSTRAINT `actions_ibfk_2` FOREIGN KEY (`id_character2`) REFERENCES `characters` (`id`),
  ADD CONSTRAINT `actions_ibfk_3` FOREIGN KEY (`id_house`) REFERENCES `Houses` (`id`);

--
-- Ограничения внешнего ключа таблицы `Characteristic`
--
ALTER TABLE `Characteristic`
  ADD CONSTRAINT `characteristic_ibfk_1` FOREIGN KEY (`id_characters`) REFERENCES `characters` (`id`);

--
-- Ограничения внешнего ключа таблицы `Houses`
--
ALTER TABLE `Houses`
  ADD CONSTRAINT `houses_ibfk_1` FOREIGN KEY (`id_characters`) REFERENCES `characters` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
