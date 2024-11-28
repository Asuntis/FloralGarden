-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 16 2024 г., 20:44
-- Версия сервера: 8.0.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `flora`
--

-- --------------------------------------------------------

--
-- Структура таблицы `address`
--

CREATE TABLE `address` (
  `id` int NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `home` varchar(255) NOT NULL,
  `entrance` int NOT NULL,
  `floor` int NOT NULL,
  `room` int NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `address`
--

INSERT INTO `address` (`id`, `city`, `street`, `home`, `entrance`, `floor`, `room`, `id_user`) VALUES
(1, 'dsa', 'sad', '3', 1, 1, 1, 1),
(3, 'Москва', 'Пушкина1', '2', 1, 2, 3, 2),
(4, 'dsa', 'dsa', '1dsadsa', 3, 4, 5, 3),
(5, 'Москва', 'Пушкина', '2', 1, 6, 333, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Цветущие '),
(2, 'Декоративные '),
(3, 'Суккуленты');

-- --------------------------------------------------------

--
-- Структура таблицы `deferred`
--

CREATE TABLE `deferred` (
  `id_deferred` int NOT NULL,
  `id_goods` int NOT NULL,
  `id_users` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `deferred`
--

INSERT INTO `deferred` (`id_deferred`, `id_goods`, `id_users`) VALUES
(4, 4, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `category` int NOT NULL,
  `count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `img`, `price`, `category`, `count`) VALUES
(1, 'Мирт', 'Мирт — род южных вечнозелёных древесных растений с белыми пушистыми цветками и темно-зелеными листьями, содержащими эфирное масло. Также миртом раньше называли венок из цветов и листьев такого дерева или его ветвь — символ тишины, мира и наслаждения.', '/imgF/Mirt.png', 4600, 1, 21),
(4, 'Антриум', 'Родина: тропики и субтропики Америки, острова Карибского архипелага\r\n', '/imgF/antrium.jpeg', 2400, 1, 17),
(5, 'Дендробиум', 'Родина: Юго-восточная Азия, Австралия, и острова Тихого океана.', '/imgF/dendrobium.jpeg', 3900, 1, 10),
(6, 'Драцена Маргината', '', '/imgF/drazena.jpeg', 1900, 2, 15),
(7, 'Юкка', 'Растение Юкка родом из засушливых жарких районов США и Мексики\r\nМноголетнее древовидное растение юкка (Yucca) является частью семейства Агавовых', '/imgF/iukka.jpeg', 2300, 2, 23),
(8, 'Лавр', 'Семейство: губоцветные или яснотковые\r\nРодина: Средиземноморье', '/imgF/lawr.jpeg', 2900, 2, 8),
(9, 'Монстера', 'Семейство: Ароидные (Araceae)\r\nРодина: Тропическая Америка.', ' /imgF/monstera.jpeg', 2150, 2, 9),
(10, 'Оливковое дерево', 'Семейство: Маслиновые\r\nРодина: Средиземноморье', '/imgF/olivTree.jpeg', 5490, 2, 11),
(11, 'Пеперомия', 'Семейство: Перцевые (Piperaceae).\r\nРодина: тропики Америки.', '/imgF/peperomia.jpeg', 1150, 1, 13),
(12, 'Хамедорея', 'Семейство: Арековые (Arecaceae), или Пальмовые (Palmae).\r\nРодина: Мексика, Центральная и Южная Америка.', '/imgF/xamedorea.jpeg', 1450, 2, 16),
(13, 'Замиокулькас', 'Семейство: Ароидные\r\nЗамиокулькас - суккулентное растение, родом с острова Мадагаскар.', '/imgF/zamiokulkas.jpeg', 2150, 2, 21);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_goods` int NOT NULL,
  `status` int NOT NULL,
  `price` int NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `id_goods`, `status`, `price`, `date`) VALUES
(1, 1, 1, 1, 111, '2024-05-25'),
(2, 1, 1, 1, 4600, '2024-05-25'),
(3, 1, 1, 1, 4600, '2024-05-25'),
(4, 1, 4, 1, 2400, '2024-05-25'),
(5, 1, 1, 4, 4600, '2024-05-25');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Пользователь'),
(2, 'Администратор');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Создан'),
(2, 'Отправлен'),
(3, 'Доставлен '),
(4, 'Отменён');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `patronymic` varchar(255) NOT NULL,
  `born` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `patronymic`, `born`, `email`, `pass`, `phone`, `role`) VALUES
(1, 'asd', 'asd', 'asd', '2024-04-17', 'asd@mail.ru', 'cf434a9eb433ffd3a57e27400868dcda', '1111111', 1),
(2, 'assd', 'assd', 'assd', '2024-04-18', 'assd@mail.ru', '141297b67f3ef33cf4d90e8165bb49cc', '1111111111', 1),
(3, 'admin', 'admin', 'admin', '2024-04-01', 'admin@mail.ru', 'e381b3fe8554528fdd69becf9dd4683e', '1112', 2),
(5, 'ddd', 'asddadada', 'ddd', '2024-04-26', 'ddd@mail.ru', '23c6660d96ebc693e40a3cc73cca4737', '22222222', 1),
(6, 'zxc', 'zxc', 'zxc', '2024-04-06', 'zxc@gmail.com', '9434eca18cecb7facb31649578b2059f', '89689789', 1),
(7, 'zxc', 'zxc', 'zxc', '2024-04-06', 'zxc@gmail.com', '9434eca18cecb7facb31649578b2059f', '89689789', 1),
(8, 'asd', 'asd', 'asd', '2024-05-08', 'asd@gmail.com', 'cf434a9eb433ffd3a57e27400868dcda', '8909098089090', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deferred`
--
ALTER TABLE `deferred`
  ADD PRIMARY KEY (`id_deferred`),
  ADD KEY `id_goods` (`id_goods`,`id_users`),
  ADD KEY `id_users` (`id_users`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`,`id_goods`),
  ADD KEY `id_goods` (`id_goods`),
  ADD KEY `status` (`status`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `address`
--
ALTER TABLE `address`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `deferred`
--
ALTER TABLE `deferred`
  MODIFY `id_deferred` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `deferred`
--
ALTER TABLE `deferred`
  ADD CONSTRAINT `deferred_ibfk_1` FOREIGN KEY (`id_goods`) REFERENCES `goods` (`id`),
  ADD CONSTRAINT `deferred_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_goods`) REFERENCES `goods` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`status`) REFERENCES `status` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
