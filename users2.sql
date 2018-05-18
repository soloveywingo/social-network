-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 16 2018 г., 20:15
-- Версия сервера: 5.7.16-log
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `social`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users2`
--

CREATE TABLE `users2` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `avatar` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `users2`
--

INSERT INTO `users2` (`id`, `name`, `last_name`, `password`, `email`, `birthday`, `gender`, `avatar`) VALUES
(5, 'Vova', 'Loh', '$2y$10$vyEwpT8dW.UCAg3auaDMAeT3lraZ/quqJezofiHjfnAb0I52tUUiK', 'asd@mail.ru', '05/15/2018', 'male', ''),
(14, 'asd', 'asd', '$2y$10$HZFrTiK8goD8viDrpowS0.U67WVmdjud6yZ5SmY8KdXLJ69bis0ce', 'ASD@NURE', '05/01/2018', 'male', ''),
(15, 'Oleg', 'Padla', '$2y$10$rzDqESrurl7VyP0itEhyvuyCHhOmtcy1jgNgsTBaHoVu0fzUxePN.', 'olegzver@mail.ru', '05/08/2018', 'female', ''),
(16, 'FDSFASDFA', 'asd', '$2y$10$mYZzFFy8hfwzDYNGCgwbtuJaal4ovPaH6OAnRfIFjeXGSNwcRmzYG', '123@nure', '05/01/2018', 'female', ''),
(17, 'Bohdan', 'Soloviov', '$2y$10$6ubg1R.pm6pJKMEc0tr7UOiGOwmNIavbAqxmwlqGE2JvsOZrfVSQu', 'soloviov_bogdan@nure.ua', '01/29/1997', 'male', ''),
(19, 'asd', 'ddd', '$2y$10$qCmvab/F7cPDokeaD2lfu.50pfishuMEOKPcn5EBejpfHs6r07uau', 'solovey2wingo@mail.ru', '05/02/2018', 'female', ''),
(20, 'asd', 'asd', '$2y$10$RwCE./7qNoa1v/qma67MfejhaRpxarbbhzQ9y7dxVbM19z6Q5T7de', 'solovyovbogdan10@gmail.com', '05/01/2018', 'female', ''),
(21, 'asd', 'asd', '$2y$10$f7TZYl6GVsgBthTNG33ArO.AqPWJaTuak2yTMy69iBf5.VcfJaQdW', 'asd@aaa', '05/01/2018', 'female', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
