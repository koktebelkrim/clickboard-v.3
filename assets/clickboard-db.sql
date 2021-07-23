-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июл 20 2021 г., 16:48
-- Версия сервера: 5.7.24
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `clickboard-db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `claims`
--

CREATE TABLE `claims` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `date-of-change` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `claims`
--

INSERT INTO `claims` (`id`, `title`, `text`, `date`, `date-of-change`) VALUES
(8, '8329 Обмен', 'Клиент хочет произвести обмен ботинок. БОТИНКИ С ВЫСОКИМИ БЕРЦАМИ 35 П «RUSH», 48\r\nНа настоящий момент (15.07.2021) 49 размера нет в наличии, поэтому клиент попросил поменять\r\nна модель 35 О 49 размера.\r\nОтправлять ботинки для обмена будем с дубровки\r\n\r\nтрек-номер отправления 1262663953\r\n\r\nПолучили ботинки, с дубровки отправили новые, теперь надо сделать всё как Таня говорила по обмену,\r\nс созданием нового чека и тд', '', ''),
(10, '8022 Обмен', 'Клиент хочет поменять \r\nШорты муж.Somali CPR 17 МОХ 52-54/3-4 на\r\nШорты муж.Somali CPR 17 МОХ 50/3-4.\r\n\r\nШорты у нас (18.07.2021)\r\n\r\nЕсть нюанс. Клиент попросил пока что не отправлять ему шорты,\r\nон сказал что сделает новый заказ и попросил отправить шорты вместе\r\nс новым заказом.\r\n\r\nПри этом, у клиента есть скидочная карта на 15%, я попросил его на \r\nпочте чтобы когда он оформлял новый заказ то в комментарии указал\r\nномер скидочной карты', '', ''),
(15, '8392 Поменять 061 МОХ 41 на 061 МОХ 40', 'Клиент уже оплатил заказ, но потом позвонил и попросил поменять на 40 размер.\r\nЗаказ ещё не отправили, ботинки нужного размера есть у нас.\r\n\r\nЗаказ поедет с савёлы, на савёлу везти 40 размер\r\n\r\nВ 1с я поменял заказ на нужный размер', '20-07-2021 17:11', '20-07-2021 19:46');

-- --------------------------------------------------------

--
-- Структура таблицы `fast-notes`
--

CREATE TABLE `fast-notes` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `date-of-change` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fast-notes`
--

INSERT INTO `fast-notes` (`id`, `title`, `text`, `date`, `date-of-change`) VALUES
(33, '8380 Перезвонить', 'Ботинки есть только на текстилях, а они закрываются, клиент не берёт трубку.\r\n\r\nНа настоящее время 19.07.2021 15:24 клиенту звонили уже 3 раза, не алё\r\n\r\n20.07.2021 10:03\r\n  Очередной недозвон, 4 раз\r\n\r\nНДЗ, 5 раз', '19-07-2021 12:38', '20-07-2021 16:02');

-- --------------------------------------------------------

--
-- Структура таблицы `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `date-of-change` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `invoices`
--

INSERT INTO `invoices` (`id`, `title`, `text`, `date`, `date-of-change`) VALUES
(3, 'БРЕНД-ЛИФТ', 'Сбор на савеловском, очень важно, КАК ТОЛЬКО СЧЕТ ОПЛАТЯТ, \r\nМЫ ЕМУ ОТПИСЫВАЕМ НА ПОЧТУ СЧЕТ ДЕНЬГИ ПРИШЛИ И ВЕЗЕМ СРАЗУ ДОКИ И РУБАШКУ НА САВЕЛУ, \r\nсклад сборки армейский магазин 2\r\n\r\n+79169993955 Дмитрий Позвонить как придёт подтверждение оплаты', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `note`
--

CREATE TABLE `note` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `date-of-change` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `note`
--

INSERT INTO `note` (`id`, `title`, `text`, `date`, `date-of-change`) VALUES
(9, 'ВНИМАТЕЛЬНО', 'Ботинки с высокими берцами 251 «EXTREME», 41 числится по 1с,\r\nпо факту нету, по факту есть 42 размер который не числится по 1с,\r\nпересорт делать нельзя, пробивать 41 если покупают 42 размер,\r\nкоробка помечена плюсом в кружке', '', ''),
(10, 'Поменять лампочку', 'Если не получится, позвонить Жене и спросить как', '', ''),
(13, 'Для Димона', 'Посмотри про клуб таргет, свяжись со студией которые сайт сделали чтобы узнать инфу по сайте', '20-07-2021_19:42', ' - ');

-- --------------------------------------------------------

--
-- Структура таблицы `phone`
--

CREATE TABLE `phone` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `date-of-change` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `phone`
--

INSERT INTO `phone` (`id`, `title`, `text`, `date`, `date-of-change`) VALUES
(6, 'Т-753 Самовывоз с дубровки', 'БОТИНКИ С ВЫСОКИМИ БЕРЦАМИ 516 П «SHOT DESERT», 45, пар\r\n\r\nБотинки в блх, надо переместить на дубровку\r\nКак сделаем - связаться с клиентом.\r\n\r\n89175813753 Сергей', '20-07-2021_19:47', ' - ');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `pass` varchar(32) CHARACTER SET utf8mb4 NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES
(8, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'Админ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `claims`
--
ALTER TABLE `claims`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `fast-notes`
--
ALTER TABLE `fast-notes`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `invoices`
--
ALTER TABLE `invoices`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `note`
--
ALTER TABLE `note`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `phone`
--
ALTER TABLE `phone`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `claims`
--
ALTER TABLE `claims`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `fast-notes`
--
ALTER TABLE `fast-notes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT для таблицы `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
