-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 06 2015 г., 09:02
-- Версия сервера: 5.5.42-cll
-- Версия PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `goldensp_twitch_marathon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `marathon_baners`
--

CREATE TABLE IF NOT EXISTS `marathon_baners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` text NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `marathon_baners`
--

INSERT INTO `marathon_baners` (`id`, `head`, `body`) VALUES
(1, 'О МАРАФОНЕ', '<p>Это самый большой благотворительный марафон игр, который проводится два раза в год.</p>\r\n\r\n<p>Лучшие игроки со всего мира собираются вместе чтобы пройти ваши любимые игры как можно быстрее и показать такие навыки, которые вы никогда не видели!</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(2, 'F.A.Q.', '<p>TBD</p>\r\n'),
(3, 'РАСПИСАНИЕ', '<p>TBA</p>\r\n'),
(4, 'ГДЕ И КОГДА?', '<p>TBA</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` text NOT NULL,
  `body` text NOT NULL,
  `anons` text NOT NULL,
  `imghead` varchar(255) DEFAULT '',
  `imganons` varchar(255) DEFAULT '',
  `bind` bit(1) NOT NULL DEFAULT b'0',
  `priority` int(11) DEFAULT '0',
  `date` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `head`, `body`, `anons`, `imghead`, `imganons`, `bind`, `priority`, `date`) VALUES
(99, 'Время быть быстрым! ', '<p style="margin-left:40px"><big><span style="font-size:18px">Я долго думал о чем написать в первой новости сайта GoldenSplit. Просто сказать &quot;Добро пожаловать!&quot;? Рассказать в подробностях, что такое спидраны, с чем их едят и зачем это делают?</span></big><big><span style="font-size:18px">&nbsp;</span></big></p>\r\n\r\n<p style="margin-left:40px"><big><span style="font-size:18px">Об этом всем мы обязательно расскажем вам в последющих новостях. В том числе и о развитии сайта.</span></big></p>\r\n\r\n<p style="margin-left:40px"><big><span style="font-size:18px">Но не в этот раз.</span></big></p>\r\n\r\n<p style="margin-left:40px"><big><span style="font-size:18px">Начнем вот с чего - мы отстаем.</span></big></p>\r\n\r\n<hr />\r\n<p>Отстаем от зарубежных спидраннеров, от игровой индустрии в целом и игровыми событиями. Плохо ли это? Скорее всего.&nbsp;Тем не менее я считаю это стимулом. Я более чем уверен, что нам не составит труда войти в мировые таблицы рекордов многих игр, устроить в будущем такие мероприятия, на которые приедут зарубежные игроки и показать чем так интересна игровая индустрия в целом.</p>\r\n\r\n<p>Спидраны, это лишь лишь часть всего этого, но я надеюсь, что этот сайт поможет этой самой части окрепнуть и&nbsp;собрать сильное сообщество вокруг себя.&nbsp;</p>\r\n\r\n<p style="text-align:center"><strong>Ну что же, приступим?</strong>&nbsp;</p>\r\n\r\n<p style="text-align: center;"><img alt="" src="http://i.imgur.com/RxcdPYD.png" style="height:437px; width:1000px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Выше, быстрее, лучше!', '03a7a81ddd1d4f291797971f10379c1a.png', 'aca4ad21da4e65a5884c7a1fa47d0f4b.png', b'1', 0, 1441314838);

-- --------------------------------------------------------

--
-- Структура таблицы `news_comment`
--

CREATE TABLE IF NOT EXISTS `news_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Дамп данных таблицы `news_comment`
--

INSERT INTO `news_comment` (`id`, `news_id`, `user_id`, `message`, `date`) VALUES
(44, 99, 35, 'Отпишусь на главной. Всем привет, ну вот и сайт подрубили. ', 1441409233),
(42, 99, 27, 'Божечки-кошечки!', 1441364407),
(43, 99, 32, 'Надеюсь, сайт будет развиваться :3', 1441365190),
(41, 99, 1, 'Так как мы пока только прикручиваем все нужные функции - можно общаться в комментариях.', 1441315917);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '1e79ed14ce9306a96ab5ea0210115c26', 'Admin'),
(23, 'SUDALV', '49fc20357a9cad69a8a3a68da0639a37', 'User'),
(28, 'MushroomBear', '9f2d844f373d924b86090862816c6320', 'User'),
(27, 'Tezur0', 'ad3849b40eefd97c5e1edc31aee7c089', 'User'),
(29, 'Nikko', 'e6043410a6598dc68bef27bdf91fba63', 'User'),
(30, 'Sauron', '3a2dafc05ace6f9d26ac6b81c0b6a15f', 'User'),
(31, 'H1kH', 'cb0dff9469bd4f287f273af7f599e719', 'User'),
(32, 'Mousou', '01ef7ddd5e1ffdb171ae391e39b3eddc', 'User'),
(33, 'Hkaas', '9f77e6b567aa35429ed3ab6e4b3cd3c8', 'User'),
(34, 'Smartkin', '758fc9e931ecd5cbfad0df227faef04d', 'User'),
(35, 'Rubiha', '033e66288a4cd0b0d94f15968d6bbc31', 'User'),
(36, 'Sidriall', '6ef0e1599312ab4a14681d4bb13da548', 'User');

-- --------------------------------------------------------

--
-- Структура таблицы `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `YouTube` varchar(255) DEFAULT NULL,
  `Twitch` varchar(255) DEFAULT NULL,
  `VK` varchar(255) DEFAULT NULL,
  `Twitter` varchar(255) DEFAULT NULL,
  `About` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `avatar`, `YouTube`, `Twitch`, `VK`, `Twitter`, `About`) VALUES
(1, 1, '2e8c8e559bd7440d6889bbe954599175.jpg', '', '', 'gamesdonequick', '', 'Я тут главный админ'),
(20, 34, 'e103e373deeaf0a8614a13755842f61d.jpg', '', '', '', '', ''),
(15, 29, NULL, NULL, NULL, NULL, NULL, ''),
(16, 30, NULL, '', '', 'https://vk.com/4head_kappa', '', ''),
(14, 28, NULL, NULL, NULL, NULL, NULL, ''),
(9, 23, NULL, NULL, NULL, NULL, NULL, ''),
(22, 36, NULL, NULL, NULL, NULL, NULL, ''),
(21, 35, '654ec4269f818ef8e4cda223e275c3ca.png', 'UCLWh6yVs52WwRnjqln9stUg', 'rubiha2', 'id36575774', '', 'Люблю спидраны.'),
(17, 31, NULL, NULL, NULL, NULL, NULL, ''),
(13, 27, '8197751a1e1dcca0f5f802862dfb225b.jpg', 'UCUd03Vt8ypoUGJc8gUUAzHw', 'tezur0', 'bunikita', 'Tezur0', ''),
(18, 32, NULL, NULL, NULL, NULL, NULL, ''),
(19, 33, NULL, NULL, NULL, NULL, NULL, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
