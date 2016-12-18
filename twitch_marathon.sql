-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 20 2015 г., 23:56
-- Версия сервера: 5.6.15-log
-- Версия PHP: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `twitch_marathon`
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
(1, 'О МАРАФОНЕ', '<p>Lorem ipsum dolor site amet, consectetur adipiscing elit.<br />\r\nCurabitur non viverra enim, <strong><span style="color:#0000CD">vitae tristique erat</span></strong>. Sed accumsan maximus sodales.</p>\r\n'),
(2, 'F.A.Q.', '<p>hfghfghfg&nbsp; fghfg fgh fgh fgh<br />\r\n<img alt="" src="https://www.google.com.ua/images/srpr/logo11w.png" style="height:35px; width:100px" /></p>\r\n\r\n<p>&nbsp;fgh fg hfg hfgh fg hfg hfg fg h</p>\r\n\r\n<p><a href="http://vk.com">http://vk.com</a></p>\r\n\r\n<p>f gfh fghfghfghfghfghfghfgh</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(3, 'РАСПИСАНИЕ', '<p>Тело расписания выаыва ыва выа ыва ыв</p>\r\n\r\n<p>аыва ыва ыва ыва выа вы аыв авы ыв аыв аыв</p>\r\n'),
(4, 'ГДЕ И КОГДА?', '<p>апрап ап рпа рап45646 456 45 645 645 45 45645 54</p>\r\n');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=96 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `head`, `body`, `anons`, `imghead`, `imganons`, `bind`, `priority`, `date`) VALUES
(58, 'pppppppppppppp', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(57, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(51, 'ghjghj', '<p>gjghjgh</p>\r\n', 'jgjgh', '', '', b'0', 0, 1439991719),
(52, 'ghjgh', '<p>jghjgh</p>\r\n', 'jghjghj', '', '', b'0', 0, 1439991727),
(48, 'gghjgh', '<p>jghjghjghj</p>\r\n', 'ghjghjghj', '', '', b'0', 0, 1439991691),
(56, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(55, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(54, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(53, 'qqq', '<p>ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg</p>\r\n\r\n<p>ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg</p>\r\n\r\n<p>ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg ghjghjg</p>\r\n', 'hjghjghj', '', '', b'0', 10, 1439991747),
(50, 'wwww', '<p>jghjghj</p>\r\n', 'ghjgh', '', '', b'1', 0, 1439991709),
(49, 'gjgh', '<p>jghjghjg</p>\r\n', 'hjghjghj', '', '', b'0', 0, 1439991702),
(47, 'eeee', '<p>jghjgh</p>\r\n', 'dfgfdg dfg dfg dfg df gdf gdfg d gdf gdf df gdf gdf gdf df df df gdf gdf gdf gdf gd d dg dfg dfg df gdfg dfg dfg dfg dfg df gdfg dfg df gdf', '', '', b'1', 0, 1439991682),
(46, 'ghj', '<p>ghjhgj</p>\r\n', 'ghjghjgh', '', '', b'0', 0, 1439991674),
(45, 'rrrr', '<p>jghjg</p>\r\n', 'sdfsdf sdf sdf sdfsd fsdf sd fsdf sd fsd fsdf sd fsd fsd fsdf sd fsdf sd fsdf sd fsd fsd fsd sd sd sd sd fsd fsd', '', '', b'1', 0, 1439991663),
(44, 'ghjghj', '<p>ghjghj</p>\r\n', 'ghjghj', '', '', b'0', 0, 1439991654),
(43, 'tttt', '<p>ghjgh</p>\r\n', 'jghjghj', '', '', b'1', 0, 1439991646),
(42, 'gjgh', '<p>jghjghjgh</p>\r\n', 'jghjghj', '', '', b'0', 0, 1439991637),
(38, 'ghgjgh', '<p>jghjg</p>\r\n', 'jgh', '', '', b'0', 0, 1439991604),
(39, 'gjgh', '<p>jghjghj</p>\r\n', 'gjgjghj', '', '', b'0', 0, 1439991612),
(40, 'ghjgh', '<p>jghjgh</p>\r\n', 'jghjghj', '', '', b'0', 0, 1439991620),
(41, 'ghjgh', '<p>jghjgh</p>\r\n', 'jghjghj', '', '', b'0', 0, 1439991628),
(37, 'ghjgh', '<p>jghjg</p>\r\n', 'hjghj', '', '', b'0', 0, 1439991597),
(35, 'hghj', '<p>gjghjghj</p>\r\n', 'ghjghjgh', '', '', b'0', 0, 1439991582),
(36, 'gj', '<p>ghjghj</p>\r\n', 'ghjghj', '', '', b'0', 0, 1439991589),
(59, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(60, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(61, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(62, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(63, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(64, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(65, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(66, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(67, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(68, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(69, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(70, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(71, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(72, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(73, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(74, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(75, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(76, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(77, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(78, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(79, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(80, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(81, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(82, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(83, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(84, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(85, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(86, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(87, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(88, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(89, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(90, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(91, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(92, 'ddfgdfg', 'etertert', 'dfgdgdfg', '', '', b'0', 0, 0),
(93, 'dddddd', 'Для создания вики-среды необходимо особое ПО — движок вики. Это частный вид систем управления сайтом, довольно простой в своём устройстве и функциональности, поскольку почти все действия по структурированию и обработке содержимого делаются пользователями вручную.\n\nРабота Википедии и других сайтов Фонда Викимедиа основана на движке MediaWiki.\n\nФирма Kaltura совместно с фондом Викимедиа разрабатывает расширение, которое позволит пользователям править медиафайлы так же легко, как сейчас правят тексты. Используемую технологию называют «видеовики».\nОсобенности\n\nЯзык вики поддерживает гиперссылки для создания ссылок между вики-страницами и является более наглядным, чем HTML, и более безопасным, поскольку использование JavaScript и каскадных таблиц стилей ограничено.\nВандализм\n\nНекоторые вики позволяют изменять их содержимое всем желающим, а не только зарегистрированным пользователям. Подобно тому, как стены зданий и заборы исписывают непристойными надписями и украшают рисунками граффити, в таких вики иногда портят содержимое или добавляют что-то неуместное. Но, в отличие от стен и заборов, в вики легко вернуть содержимое к ранней версии: исправлять легче, чем портить. Если же кто-либо настойчиво и намеренно стремится навредить пользователям вики-сайта, можно закрыть ему возможность вносить правки.', 'Впервые термин «вики» для описания веб-сайта был использован в 1995 году Уордом Каннингемом, разработчиком первой вики-системы WikiWikiWeb, «Портлендского хранилища образцов» программного кода[2], созданной 25 марта 1995 года, который заимствовал слово гавайского языка, означающее «быстрый»[3][4]. Каннингем первоначально описал вики как «простейшую онлайн-базу данных, которая может функционировать»[5]. Позже этому слову был придуман английский бэкроним "What I Know Is…" («то, что я знаю, это…»)[6].', '', '', b'1', 2, 1439999336),
(94, 'Линейные корабли типа «Норт Кэролайн» ', '<p><strong>Линейные корабли типа &laquo;Норт Кэролайн&raquo;</strong>&nbsp;&mdash; проект <a href="https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D0%BD%D0%B5%D0%B9%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BE%D1%80%D0%B0%D0%B1%D0%BB%D1%8C" title="Линейный корабль">линейных кораблей</a> ВМС США. Первые американские линкоры, построенные после окончания действия <a href="https://ru.wikipedia.org/wiki/%D0%92%D0%B0%D1%88%D0%B8%D0%BD%D0%B3%D1%82%D0%BE%D0%BD%D1%81%D0%BA%D0%BE%D0%B5_%D0%BC%D0%BE%D1%80%D1%81%D0%BA%D0%BE%D0%B5_%D1%81%D0%BE%D0%B3%D0%BB%D0%B0%D1%88%D0%B5%D0%BD%D0%B8%D0%B5_%281922%29" title="Вашингтонское морское соглашение (1922)">Вашингтонского договора</a>. Всего было построено два корабля&nbsp;&mdash; &laquo;<a href="https://ru.wikipedia.org/wiki/USS_North_Carolina_%28BB-55%29" title="USS North Carolina (BB-55)">Норт Кэролайн</a>&raquo; и &laquo;<a href="https://ru.wikipedia.org/wiki/USS_Washington_%28BB-56%29" title="USS Washington (BB-56)">Вашингтон</a>&raquo;.</p>\r\n\r\n<p>Линкоры проектировались в рамках ограничений <a href="https://ru.wikipedia.org/wiki/%D0%9B%D0%BE%D0%BD%D0%B4%D0%BE%D0%BD%D1%81%D0%BA%D0%B8%D0%B9_%D0%BC%D0%BE%D1%80%D1%81%D0%BA%D0%BE%D0%B9_%D0%B4%D0%BE%D0%B3%D0%BE%D0%B2%D0%BE%D1%80_%281936%29" title="Лондонский морской договор (1936)">Лондонского соглашения 1936 года</a>&nbsp;&mdash; максимальный калибр орудий 356&nbsp;мм, водоизмещение 35 000 <a href="https://ru.wikipedia.org/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B0%D1%8F_%D1%82%D0%BE%D0%BD%D0%BD%D0%B0" title="Английская тонна">длинных тонн</a>. Первоначальный проект предполагал вооружение из двенадцати 356-мм орудий. Япония не присоединилась к финальному протоколу Лондонского соглашения, после чего договорное ограничение калибра было увеличено до 406&nbsp;мм. На этом основании в проект были внесены изменения и вооружение изменено на девять 406-мм орудий. Уровень бронирования остался соответствующим противодействию 356-мм снарядам.</p>\r\n\r\n<p>Линкоры получили мощную батарею из двадцати <a href="https://ru.wikipedia.org/wiki/5%22/38_Mark_12" title="5&quot;/38 Mark 12">127-мм орудий</a>. В годы войны неудачные <a href="https://ru.wikipedia.org/wiki/1,1%22_Mark_1/1" title="1,1&quot; Mark 1/1">28-мм зенитные автоматы</a> были заменены на 40-мм &laquo;<a href="https://ru.wikipedia.org/wiki/Bofors_L60" title="Bofors L60">Бофорсы</a>&raquo; и 20-мм &laquo;<a href="https://ru.wikipedia.org/wiki/%D0%AD%D1%80%D0%BB%D0%B8%D0%BA%D0%BE%D0%BD" title="Эрликон">Эрликоны</a>&raquo;. На Тихом океане основной ударной силой становились <a href="https://ru.wikipedia.org/wiki/%D0%90%D0%B2%D0%B8%D0%B0%D0%BD%D0%BE%D1%81%D0%B5%D1%86" title="Авианосец">авианосцы</a>. Поэтому благодаря хорошей защищенности и мощной зенитной артиллерии американские линкоры чаще привлекались для задач обеспечения ПВО авианосных соединений, чем для боев с японскими артиллерийскими кораблями. К концу войны линкоры привлекались к обстрелу береговых целей.</p>\r\n\r\n<p>Оба линкора часто использовались в многочисленных боевых операциях на Тихом океане. Прошли всю Вторую мировую войну, получив каждый больше десяти боевых звёзд. После войны выведены в резерв. &laquo;Вашингтон&raquo; списан и разделан на металл, а &laquo;Норт Кэролайн&raquo; превращена в музейный корабль на мемориале в <a href="https://ru.wikipedia.org/wiki/%D0%A3%D0%B8%D0%BB%D0%BC%D0%B8%D0%BD%D0%B3%D1%82%D0%BE%D0%BD_%28%D0%A1%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D0%B0%D1%8F_%D0%9A%D0%B0%D1%80%D0%BE%D0%BB%D0%B8%D0%BD%D0%B0%29" title="Уилмингтон (Северная Каролина)">Уилмингтоне</a>.</p>\r\n\r\n<p><a href="https://ru.wikipedia.org/wiki/%D0%9B%D0%BE%D0%BD%D0%B4%D0%BE%D0%BD%D1%81%D0%BA%D0%B8%D0%B9_%D0%BC%D0%BE%D1%80%D1%81%D0%BA%D0%BE%D0%B9_%D0%B4%D0%BE%D0%B3%D0%BE%D0%B2%D0%BE%D1%80_%281930%29" title="Лондонский морской договор (1930)">Лондонским соглашением 1930 года</a> &laquo;линкорные каникулы&raquo; были продлены до 31 декабря 1936 года, поэтому <a class="new" href="https://ru.wikipedia.org/w/index.php?title=%D0%93%D0%B5%D0%BD%D0%B5%D1%80%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%81%D0%BE%D0%B2%D0%B5%D1%82_%D1%84%D0%BB%D0%BE%D1%82%D0%B0_%D0%A1%D0%A8%D0%90&amp;action=edit&amp;redlink=1" title="Генеральный совет флота США (страница отсутствует)">Генеральный Совет флота</a> (<a href="https://ru.wikipedia.org/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&nbsp;<em><a class="extiw" href="https://en.wikipedia.org/wiki/General_Board_of_the_United_States_Navy" title="en:General Board of the United States Navy">General Board of the United States Navy</a></em>) начал проектные исследования быстроходных линкоров программы 1937 года только в мае 1935 года. 11 июля была заказана разработка трёх проектов быстроходных линкоров&nbsp;&mdash; А, В и С. В требованиях к ним содержались батарея из 127-мм универсальных орудий, 30-узловая максимальная скорость и дальность хода в 15 000 миль на 15 узлах. Противоторпедная защита должна была рассчитываться на противостояние взрыву 317 кг (700 <a href="https://ru.wikipedia.org/wiki/%D0%A4%D1%83%D0%BD%D1%82_%28%D0%B5%D0%B4%D0%B8%D0%BD%D0%B8%D1%86%D0%B0_%D0%B8%D0%B7%D0%BC%D0%B5%D1%80%D0%B5%D0%BD%D0%B8%D1%8F%29" title="Фунт (единица измерения)">фунтов</a>) <a href="https://ru.wikipedia.org/wiki/%D0%A2%D1%80%D0%B8%D0%BD%D0%B8%D1%82%D1%80%D0%BE%D1%82%D0%BE%D0%BB%D1%83%D0%BE%D0%BB" title="Тринитротолуол">ТНТ</a>. При этом пошли на снижение требований&nbsp;&mdash; контрактную скорость корабли должны были развить при половинном запасе топлива, а не полном, как на предыдущих линкорах<sup><a href="https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D0%BD%D0%B5%D0%B9%D0%BD%D1%8B%D0%B5_%D0%BA%D0%BE%D1%80%D0%B0%D0%B1%D0%BB%D0%B8_%D1%82%D0%B8%D0%BF%D0%B0_%C2%AB%D0%9D%D0%BE%D1%80%D1%82_%D0%9A%D1%8D%D1%80%D0%BE%D0%BB%D0%B0%D0%B9%D0%BD%C2%BB#cite_note-.D0.A1.D1.83.D0.BB.D0.B8.D0.B3.D0.B0.2C_.D0.9D.D0.BE.D1.80.D1.82_.D0.9A.D1.8D.D1.80.D0.BE.D0.BB.D0.B0.D0.B9.D0.BD.E2.80.941998.E2.80.94.E2.80.948-2">[2]</a></sup><sup><a href="https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D0%BD%D0%B5%D0%B9%D0%BD%D1%8B%D0%B5_%D0%BA%D0%BE%D1%80%D0%B0%D0%B1%D0%BB%D0%B8_%D1%82%D0%B8%D0%BF%D0%B0_%C2%AB%D0%9D%D0%BE%D1%80%D1%82_%D0%9A%D1%8D%D1%80%D0%BE%D0%BB%D0%B0%D0%B9%D0%BD%C2%BB#cite_note-Friedman.2C_US_Battleships.E2.80.941985.E2.80.94.E2.80.94244-3">[3]</a></sup>.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class="thumb tleft">\r\n			<div class="thumbinner" style="width:302px;"><a class="image" href="https://commons.wikimedia.org/wiki/File:North_Carolina_class_scheme_A.jpg?uselang=ru"><img alt="" class="thumbimage" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/North_Carolina_class_scheme_A.jpg/300px-North_Carolina_class_scheme_A.jpg" style="height:105px; width:300px" /></a>\r\n\r\n			<div class="thumbcaption">\r\n			<div class="magnify">&nbsp;</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class="thumb tleft">\r\n			<div class="thumbinner" style="width:302px;">\r\n			<div class="thumbcaption">Схема А</div>\r\n			</div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>В схеме А три трёхорудийные башни располагались в носу, в схеме В и С ба</p>\r\n', 'Линейные корабли типа «Норт Кэролайн» — проект линейных кораблей ВМС США. Первые американские линкоры, построенные после окончания действия Вашингтонского договора. Всего было построено два корабля — «Норт Кэролайн» и «Вашингтон».', 'cb9e9aae42d3b11ed2779b35a13fc4b0.jpg', '4dfbe67eb6c1624730d02db06bfc1a1c.jpg', b'0', 0, 1440089703),
(95, 'Кинопанорама', '<p>Кинопанорама &mdash; советская панорамная кинематографическая система, использовавшая для съёмки и проекции изображения три 35-мм киноплёнки. Разработана в московском Научно-исследовательском кинофотоинституте (НИКФИ) на основе американской системы &laquo;Cinerama&raquo; под руководством Евсея Голдовского и введена в эксплуатацию в 1957 году[1][2]. Первоначальное название &laquo;Панорама&raquo; через год было заменено на более информативное. В странах, где демонстрировались советские фильмы, снятые по этой системе (Куба, Греция, Норвегия и Швеция), она называлась Soviet Cinerama. Во время проката фильмов &laquo;Кинопанорамы&raquo; в Нью-Йорке в 1958 году использовался бренд Cinepanorama. Экран панорамного кинотеатра позднего типа: благодаря уменьшенному изгибу отсутствуют боковые части из отдельных полос В отличие от обычных систем кинематографа, изображение &laquo;Кинопанорамы&raquo; заполняло экран, угловые размеры которого превосходили поле зрения человека. При съёмке охватывалось пространство не только перед камерой, но и по бокам от киносъёмочного аппарата, обеспечивая панорамный обзор. В результате границы кадра становились практически незаметны зрителям, усиливая эффект присутствия.</p>\r\n', 'Кинопанорама — советская панорамная кинематографическая система, использовавшая для съёмки и проекции изображения три 35-мм киноплёнки. Разработана в московском Научно-исследовательском кинофотоинституте (НИКФИ) на основе американской системы «Cinerama» под руководством Евсея Голдовского и введена в эксплуатацию в 1957 году[1][2]. ', '533cbf37b55a0b862d846e9e561053a4.jpg', 'd74b4fd1de87dbb61e6b0fd92d761c8b.jpg', b'1', 10, 1440090042);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Дамп данных таблицы `news_comment`
--

INSERT INTO `news_comment` (`id`, `news_id`, `user_id`, `message`, `date`) VALUES
(1, 93, 1, 'gghjghj', 1440073696),
(2, 93, 1, 'gjghjghj', 1440073783),
(3, 93, 1, 'gjghjghj', 1440073872),
(4, 93, 1, 'ihhkhjkhk', 1440073884),
(5, 93, 1, '34543 hfghgf hfgh fg hfgh fg hfg', 1440081511),
(6, 93, 1, 'hfghfg\r\ngfhfg\r\nhfg\r\nh\r\nfgh\r\nfg\r\nh\r\nfg\r\nhfg\r\nh\r\nfgh\r\nfg\r\nh\r\nfg\r\nhf\r\ngh\r\nfg', 1440082080),
(7, 93, 1, 'fhfhgf\r\n<br/>\r\ngf\r\n<br/>\r\nhgf\r\n<br/>\r\nh\r\n<br/>\r\ngf\r\nhgf', 1440082105),
(8, 93, 1, 'fhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>\r\nfhfhgf <br/>', 1440082125),
(9, 93, 1, 'gfhfghgfh', 1440082458),
(10, 93, 1, 'rtyrtyrtyrty', 1440082533),
(11, 93, 1, '213213213213', 1440082600),
(12, 93, 1, 'итмитмит', 1440082615),
(13, 93, 1, 'рпопопро', 1440084379),
(14, 93, 1, 'рпопро', 1440084435),
(15, 93, 1, '1231', 1440084441),
(16, 93, 1, '234', 1440084446),
(17, 93, 1, '345', 1440084450),
(18, 93, 1, '456546', 1440084455),
(19, 93, 1, '5675', 1440084460),
(20, 93, 1, '67876', 1440084464),
(21, 93, 1, '7897', 1440084469),
(22, 93, 1, '89089', 1440084481),
(23, 93, 1, 'fghfgh', 1440085389),
(24, 93, 1, '56765756', 1440085396),
(25, 93, 1, 'yuytut', 1440085402),
(26, 93, 1, '7686867', 1440085410),
(27, 53, 1, 'hkgkhj', 1440085418),
(28, 53, 1, 'fghfghg', 1440085444),
(29, 93, 1, 'hhjkhjk', 1440085562),
(30, 53, 1, 'hkhjkj', 1440085569),
(31, 52, 1, 'jkljkl', 1440085579),
(32, 53, 18, 'vgnvnvb', 1440087855),
(33, 94, 1, 'Очень круто', 1440089730),
(34, 95, 1, '2432423432', 1440100221);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '456789', 'Admin');

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
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `avatar`, `YouTube`, `Twitch`, `VK`, `Twitter`) VALUES
(1, 1, '2e8c8e559bd7440d6889bbe954599175.jpg', 'https://www.youtube.com/channel/UCXlXeR3MQo-UvhdxPXmALgg', 'http://www.twitch.tv/m0e_tv', 'http://vk.com/bukatahanna', 'https://twitter.com/melissa_simoni/status/464375388756398082');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
