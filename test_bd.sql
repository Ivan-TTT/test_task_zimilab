-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 29 2022 г., 20:33
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE `accounts` (
  `id` int NOT NULL,
  `First_name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Last_name` text NOT NULL,
  `E_mail` text NOT NULL,
  `Telephone_number1` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Telephone_number2` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Telephone_number3` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Position_cont` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Company_Name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`id`, `First_name`, `Last_name`, `E_mail`, `Telephone_number1`, `Telephone_number2`, `Telephone_number3`, `Position_cont`, `Company_Name`) VALUES
(1, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', 'zimalab'),
(2, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '', '', 'стажер', 'zimalab'),
(3, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', '', 'zimalab'),
(4, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', ''),
(5, 'test name', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', 'zimalab'),
(6, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', 'zimalab'),
(7, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', 'zimalab'),
(8, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', 'zimalab'),
(9, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', 'zimalab'),
(10, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', 'zimalab'),
(11, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', 'zimalab'),
(12, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', 'zimalab'),
(13, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', 'zimalab'),
(14, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', 'zimalab'),
(15, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', 'zimalab'),
(16, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', 'zimalab'),
(17, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', 'zimalab'),
(18, 'ivan', 'karshev', 'karshev.ivan09.07.38@gmail.com', '79133846136', '79999999999', '79139996136', 'стажер', 'zimalab');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
